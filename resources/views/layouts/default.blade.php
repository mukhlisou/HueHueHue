<!DOCTYPE html>

@include('layouts.master.header') 

@include('layouts.master.navbar')

@yield('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready( function () {
        $('#datatable').DataTable( { "ordering": true, "paging":false } );
    } );
</script>