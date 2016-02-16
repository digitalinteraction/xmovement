<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">{{ trans('navbar.toggle') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                <strong>{{ trans('common.brand') }}</strong>
            </a>

            <div class="clearfix"></div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ action('IdeaController@add') }}">{{ trans('navbar.create') }}</a></li>
            
                <li><a href="{{ action('IdeaController@index') }}">{{ trans('navbar.explore') }}</a></li>
            
                <li><a href="{{ action('PageController@about') }}">{{ trans('navbar.about') }}</a></li>

                @if (Auth::guest())
                    <li><a href="{{ action('Auth\AuthController@showLoginForm') }}">{{ trans('navbar.login') }}</a></li>
                    <li><a href="{{ action('Auth\AuthController@showRegistrationForm') }}">{{ trans('navbar.register') }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ action('UserController@profile', Auth::user()->id) }}"></i>{{ trans('navbar.profile') }}</a></li>
                            <li><a href="{{ action('Auth\AuthController@logout') }}"></i>{{ trans('navbar.logout') }}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>