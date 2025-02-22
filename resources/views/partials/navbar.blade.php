
{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE']) !!}

<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ D4T\Admin\UI\DcatAdminlte\ServiceProvider::navbarClass() }} navbar-light navbar-shadow " style="top: 0;">

    <div class="navbar-wrapper">
        <div class="navbar-container content">
            @if(D4T\Admin\UI\DcatAdminlte\ServiceProvider::layoutType() != Dcat\Admin\Enums\LayoutType::HORIZONTAL)
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item mr-auto">
                        <a class="nav-link menu-toggle" data-widget="pushmenu" style="cursor: pointer;">
                            <i class="fa fa-bars font-md-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
            @endif

            <div class="navbar-collapse d-flex justify-content-between">

                @if(D4T\Admin\UI\DcatAdminlte\ServiceProvider::layoutType() != Dcat\Admin\Enums\LayoutType::HORIZONTAL)
                <div class="navbar-left d-flex align-items-center">
                   {!! Dcat\Admin\Admin::navbar()->renderFree() !!}
                </div>
                @else
                <div class="d-md-block horizontal-navbar-brand justify-content-center text-center">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mr-auto">
                            <a href="{{ admin_url('/') }}" class="waves-effect waves-light">
                                <span class="logo-lg">
                                    <img style="max-width: 45px; max-height: 40px; margin-top: -1px;" src="/storage/{!! config('admin.logo-image') !!}">
                                    <span>{!! config('admin.name') !!}</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-left d-flex align-items-center">
                   {!! Dcat\Admin\Admin::navbar()->renderFree() !!}
                </div>
                @endif

                <div class="navbar-right d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        {!! Dcat\Admin\Admin::navbar()->renderNavs() !!}
                        {{--User Account Menu--}}
                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE_USER_PANEL']) !!}
                        @include('admin::widgets.user-nav', ['user' => \Dcat\Admin\Admin::user()])
                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER_USER_PANEL']) !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER']) !!}