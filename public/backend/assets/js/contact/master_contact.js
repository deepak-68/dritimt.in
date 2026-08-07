export const Contact = {

    loadUserDatatable:function(){
        if ( ! $.fn.DataTable.isDataTable( '#contact' ) ) {
            var columns     = [{"mData": "id"},{"mData": "name"},{"mData": "phone"},{"mData": "email"},{"mData": "subject"},{"mData": "created_at"},{"mData": "action"}];
            Contact.LoadTable("contact",columns);
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
                                    this.value :'',
                                    this.value != ''
                                )
                                .draw();

                            });


                    });

                },
        });
        var count = $(table).data('count');
        $('#clear_filter').removeClass('d-block').addClass('d-none');
        $('#date_range_sec').removeClass('col-md-8').addClass('col-md-12');


        $(table).tooltip({
            selector: '[data-toggle=tooltip]'
        });
        Contact.FilterWithDatePicker(datatable1);
        Contact.FilterWithName(datatable1);
        Contact.FilterWithPhone(datatable1);
        Contact.FilterWithEmail(datatable1);
        Contact.ClearFilter(datatable1);
     },

 FilterWithName:function(datatable1){
         $('[name="name"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(2).search('').column(2).search(inputValue).draw();
            Contact.ClearFillterBtnShow();
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
            datatable1.column(3).search('').column(3).search(inputValue).draw();
            Contact.ClearFillterBtnShow();
        });
     },
   FilterWithEmail:function(datatable1){
         $('[name="email"]').on('input', function(){
            var inputValue = $(this).val();
            datatable1.column(4).search('').column(4).search(inputValue).draw();
            Contact.ClearFillterBtnShow();
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
            Contact.ClearFillterBtnShow();

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
            $("#form-container").find('#name').val('');
            $("#form-container").find('#phone').val('');
            $("#form-container").find('#email').val('');
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
        
    },

    CustomFilter:function(){
         $("#contact-toggle-form").click(function () {
            $("#form-container").toggleClass("form-visible");
        });
        
    }
   
}
