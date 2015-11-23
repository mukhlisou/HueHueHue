<div id = "nav">
    <nav class="navbar navbar-default navbar-general">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="bar">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('/total') }}">Total</a></li>
                </ul>
                <ul id = "right" class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('/mailconfig') }}">Mail Config</a></li>
                    <li><a href="{{ URL::to('/auth/logout') }}">Logout</a></li>
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