<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>Title TennisClub</title> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
         
    </head> 
    <body > 
        <!-- Bootstrap 3.3.7 --> 
        <nav class="navbar navbar-default navbar-static-top"> 
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <a class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('bookings.index') }}>Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('courts.index') }}>Courts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=https://www.google.com/>Google</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href={{ route('members.create') }}>New Member</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href={{ route('bookings.index') }}>Bookings</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href={{ route('bookings.create') }}>New Booking</a>
                        </li>
                </ul>
            </div>
        </nav>
                
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> @yield('content') </div> 
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
         </div>
         
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
         <script src="{{asset('js/app.js')}}"></script>
         @stack('js_scripts')
    </body> 
</html>