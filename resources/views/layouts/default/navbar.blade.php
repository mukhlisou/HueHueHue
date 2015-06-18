<div id = "nav">
    <nav class="navbar navbar-default navbar-general">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class = 'navbar-logo'><a  href="{{ URL::to('/') }}"><img src="{{ asset('/aset/logowhite2.png') }}" width = 50px></a></div>
            </div>

            <div class="collapse navbar-collapse" id="bar">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('kelas') }}">Kelas</a></li>
                    <li><a href="{{ URL::to('siswa') }}">Siswa</a></li>
                    <li><a href="{{ URL::to('akun') }}">Akun</a></li>
                    <li><a href="{{ URL::to('jadwal') }}">Akun</a></li>
                    <li><a href="{{ URL::to('ruangan') }}">Akun</a></li>
                </ul>

                <ul id = "right" class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/auth/login">Jadwal</a></li>
                        <li><a href="/auth/register">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    <li id= 'profile'><img src="{{ asset('/aset/sby.jpg') }}" class = "img-circle" width = 50px></li>
        
                </ul>
                <ul id = "right2" class = "nav navbar-nav">
                <hr>
                	<li><a href="{{ URL::to('logout') }}">Logout</a></li>
                	<li><a href="{{ URL::to('akun/editmyprofile') }}">Edit Profile</a></li>
                </ul>
            </div>

        </div>
    </nav>
</div>
<div id = "proftop">
    <div class = 'row'>
        <div class = 'col-sm-4'>
            <img src="{{ asset('/aset/sby.jpg') }}" width = 100%>
        </div>
        <div class = 'col-sm-8'>
            Pak SBY<br>
            Oke deh<br>
            A ya nilai PPLnya<br>
        </div>
    </div>
    <div class = 'row' style="margin-top:10px">
        <div class = 'col-xs-6'>
            <a href="{{ URL::to('logout') }}" type="submit" class="btn btn-primary" style="width: 100%">
                    Logout
            </a>
        </div>
        <div class = 'col-xs-6'>
             <a href="{{ URL::to('akun/editmyprofile') }}" type="submit" class="btn btn-primary" style="width: 100%">
                    Edit Profile
            </a>
        </div>
    </div>
</div>
<script>
$( "#profile" ).on( "click", function() {
  if( $( "#proftop" ).css( "top" ) == "-250px"){
    $( "#proftop" ).css( "top", "70px" );
    }
    else{
    $( "#proftop" ).css( "top", "-250px" );
    }
});

</script>
<script>
$(document).on('click',function(){
$('.collapse').collapse('hide');
})
</script> 