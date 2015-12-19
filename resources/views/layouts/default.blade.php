<!DOCTYPE html>

@include('layouts.master.header') 

@include('layouts.master.navbar')

@yield('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready( function () {
        $('#datatable').DataTable( { "ordering": true, "paging":true, "pageLength": 20,
            "scrollY":        "600px",
            "scrollX":        true,
            "scrollCollapse": true,
        "bLengthChange": false,
        "fixedColumns":   {
            leftColumns: 2
        },


            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                $(nRow).children().each(function(index, td) {

                        for (var i = 18; i < 40; i++) {
                            if(aData[1]==""){
                                $(td).css("background-color", "#ffff00");
                            }
                            else if (index == i) {

                                if (aData[i] == "0") {
                                   // $(td).css("background-color", "#06B33A");
                                } else {
                                   // $(td).css("background-color", "#FF3229");
                                }
                            }
                        }

                });
            }
        });
$(document).ready(function() {
    $('#infototal').DataTable({
        "ordering": false, "paging":false,
        "bLengthChange": false,
    "bFilter": false,
    "bInfo": false,
    });
} );
    } );

</script>