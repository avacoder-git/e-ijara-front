<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src">E-IJARA</div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <a href="{{ route('user.main') }}" @if(Route::currentRouteName() == 'user.main') class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-box1"></i>
                        Аризаларим
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.application') }}" @if(Route::currentRouteName() == 'user.application') class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Ариза топширирш
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.profile') }}" @if(Route::currentRouteName() == 'user.profile') class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-user"></i>
                        малумотларим
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>