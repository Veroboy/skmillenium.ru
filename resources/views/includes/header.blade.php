{{-- subnav --}}
<div class="subnav">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="social-icons-subnav">
                    <a href="#"><span class="ti-location-pin"></span>129 Park street, New York City, NY 10903</a>
                    <a href="#"><span class="ti-mobile"></span>+02151 7778 009</a>
                    <a href="#"><span class="ti-time"></span>Monday - Friday 08:00am ~ 05:00pm</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="right">
                    <div class="social-icons-subnav">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-dribbble"></span></a>
                        <a href="#"><span class="ti-twitter"></span></a>
                        <a href="#"><span class="ti-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- subnav end --}}

{{-- nav --}}
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">

            {{-- menu mobile display --}}
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span></button>

            {{-- logo --}}
            <a class="navbar-brand" href="index.html"><img alt="logo" src="{{ asset('assets/img/logo.png') }}"></a>

            {{-- mainmenu start --}}
            <div class="menu-init" id="main-menu">
                <nav id="menu-center">
                    <ul>
                        <li>
                            <a class="actived" href="#">Главная</a>
                        </li>

                        <li class="btn"><a class="popup-form" href="#subwrap">Get a Quote</a></li>
                    </ul>
                </nav>
            </div>
            {{-- mainmenu end --}}

        </div>
    </div>
    {{-- container --}}
</div>
{{-- nav end --}}
