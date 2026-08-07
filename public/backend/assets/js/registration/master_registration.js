export const Registration = {

    loadUserDatatable:function(){
        if ( ! $.fn.DataTable.isDataTable( '#registration' ) ) {
            var columns     = [{"mData": "id"},{"mData": "name"},{"mData": "gender"},{"mData": "dob"},{"mData": "phone"},{"mData": "category"},{"mData": "course"},{"mData": "created_at"},{"mData": "action"}];
            Registration.LoadTable("registration",columns);
        }
    },
    LoadTable: function(datatable,columns) {
        let table       = "#"+datatable;
        let action      =  $(table).data('action');

        var datatable1   = $(table).DataTable({
            "columnDefs": [
                { "orderable": true, "targets": 0 },
                { "orderable": false, "targets": '_all' }
            ],
            processing: true,
            pageLength: 20,
            'language': {
            'loadingRecords': '&nbsp;',
            'processing': '<div class="ajaxspinner"></div>'
            },

            serverSide: true,
            responsive: true,
            searching: true,
            bLengthChange : true,
            lengthMenu: [[10, 25, 50, 100,200,500,1000], [10, 25, 50, 100,200,500,1000, "All"]],
            pageLength: 10, // Set the default number of records to display

            ajax: {
                url: action,
                type: "post",
                dataType: "json",
            },
            aoColumns: columns,
            orderCellsTop: true,
            fixedHeader: false,
            initComplete: function () {
            var api = this.api();
                // For each column
                api
                    .columns([0])
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $(table).find('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<input type="text"  id="'+colIdx+'" class="form-control" placeholder="Search ' + title + '" />');
                        // On every keypress in this input
                        $(table).find(
                            '#'+colIdx,
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                            )
                            .off('keyup change')
                            .on('keyup change', function (e) {
                            e.stopPropagation();
                            // Get the search value
                            $(this).attr('title', $(this).val());
                           // console.log('val',$(this).val());
                            var regexr = '{filter_search}';
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != '' ?
                                    this.value :
                                    '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();

                            });


                    });

                },
        });
        var count = $(table).data('count');
        $('#clear_filter').removeClass('d-block').addClass('d-none');
        $('#date_range_sec').removeClass('col-md-8').addClass('col-md-12');

        /*if (count > 0) {
            if($(table).find('.filters').length == 0){
                $(table + ' thead tr')
                .clone(true)
                .addClass('filters')
                .appendTo(table+' thead');
                $('.filters').find('th:eq(0),th:eq(3),th:eq(4),th:eq(5),th:eq(6)').empty();
            }
        }*/

        $(table).tooltip({
            selector: '[data-toggle=tooltip]'
        });
        Registration.FilterWithDatePicker(datatable1);
        Registration.FilterWithName(datatable1);
        Registration.FilterWithGender(datatable1);
        Registration.FilterWithDob(datatable1);
        Registration.FilterWithPhone(datatable1);
        Registration.FilterWithCategory(datatable1);
        Registration.ClearFilter(datatable1);
     },

   
     FilterWithCategory:function(datatable1){
        $('[name="category"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(6).search('').column(6).search(inputValue).draw();
            User.ClearFillterBtnShow();
        });
    },

    FilterWithPhone:function(datatable1){
       $('[name="phone"]').on('input', function(){
            var inputValue = $(this).val();
                if (/\D/g.test(inputValue) || inputValue.length > 10)
                {
                    this.value = this.value.replace(/[^0-9]/g, '');
                    return false;
                }
            datatable1.column(5).search('').column(5).search(inputValue).draw();
            Registration.ClearFillterBtnShow();
        });
     },

    FilterWithDob:function(datatable1){
        $('[name="dob"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(4).search('').column(4).search(inputValue).draw();
            Registration.ClearFillterBtnShow();
        });
        
        $(function() {
          $('input[name="dob"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
          }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            //alert("You are " + years + " years old!");
          });
        });
    },

    FilterWithGender:function(datatable1){
        $('[name="gender"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(3).search('').column(3).search(inputValue).draw();
            Registration.ClearFillterBtnShow();
        });
    },

    FilterWithName:function(datatable1){
         $('[name="name"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(2).search('').column(2).search(inputValue).draw();
            Registration.ClearFillterBtnShow();
        });
    },

     
    FilterWithDatePicker:function(datatable1){
        var start   = moment().subtract(29, 'days');
        var end     = moment();
        const cb    = function (start, end) {};
        $('#date_range').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                'Last 6 Months': [moment().subtract(6, 'months'), moment()],
                'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
                'This Year': [moment().startOf('year'), moment().endOf('year')]
              }
        }, cb);

        $('#date_range').on('apply.daterangepicker', function (ev, picker) {
            var selectedValue = picker.startDate.format('YYYY-MM-DD') + ',' + picker.endDate.format('YYYY-MM-DD');
            datatable1.column(1).search(selectedValue).draw();
            Registration.ClearFillterBtnShow();

        });

        cb(start, end);
    },

    ClearFillterBtnShow:function(){
        $('#clear_filter').removeClass('d-none').addClass('d-block');
        $('#date_range_sec').removeClass('col-md-12').addClass('col-md-7');
     },

     ClearFilter:function(datatable){
        $(document).on("click", ".clear-filter-btn", function () {

            $("#form-container").find(':input').not(':button, :submit, :reset, :hidden').val('');
            $("#form-container").find('#search_doctor_id').val('').trigger('change');
            $("#form-container").find('#panel_type_search').val('');
            $("#form-container").find('#gender_search').val('');
            $("#form-container").find('#state_search').val('');
            datatable.search('').columns().search('').draw();
            $('#clear_filter').removeClass('d-block').addClass('d-none');
            $('#date_range_sec').removeClass('col-md-8').addClass('col-md-12');
        });
    },
    
    ExportFilter:function(){
         $("#export-toggle-form").click(function () {
                $("#export-form-container").toggleClass("form-visible");
                $("#form-container").removeClass('form-visible');
            });
        
    }

   
}
