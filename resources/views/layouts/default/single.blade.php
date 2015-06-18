@include('layouts.header')

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">@yield('content')</div>
	<div class="col-md-4"></div>
	
</div>

@include('layouts.footer')