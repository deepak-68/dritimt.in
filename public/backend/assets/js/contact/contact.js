import { Contact } from './master_contact.js';
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
     });
     var url        = window.location.href;
     var segments   = url.split( '/' );

    // Remove empty trailing segment (if it's present)
    if (segments[segments.length - 1] === '') {
        segments.pop();
    }

    var lastSegment         = segments.pop();
    var secondToLastSegment = segments.pop();

     /**
      * User List datatable get data form database
    */

     if(lastSegment == 'contact'){
        Contact.loadUserDatatable();
        Contact.ExportFilter();
        Contact.CustomFilter();
     }
     
});
