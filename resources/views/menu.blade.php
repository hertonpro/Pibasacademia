<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top hk-navbar">

    <a class="navbar-brand font-weight-700" href="{{url('users')}}">
        Academia <span class="text-warning">(Beta)</span>
    </a>
    <ul class="navbar-nav hk-navbar-content">

        <li class="nav-item">
            <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span
                    class="feather-icon"><i data-feather="settings"></i></span></a>
        </li>
        <li class="nav-item dropdown dropdown-notifications">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i
                        data-feather="bell"></i></span><span class="badge-wrap"><span
                        class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                <div class="notifications-nicescroll-bar">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <img src="" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text"><span class="text-dark text-capitalize">Evie
                                            Ono</span> accepted your invitation to join the team</div>
                                    <div class="notifications-time">12m</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('dist/img/avatar2.jpg')}}" alt=" user"
                                        class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">New message received from <span
                                            class="text-dark text-capitalize">Misuko Heid</span></div>
                                    <div class="notifications-time">1h</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-primary rounded-circle">
                                        <span class="initial-wrap"><span><i
                                                    class="zmdi zmdi-account font-18"></i></span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">You have a follow up with<span
                                            class="text-dark text-capitalize"> Marvin head</span> on <span
                                            class="text-dark text-capitalize">friday, dec 19</span> at <span
                                            class="text-dark">10.00 am</span></div>
                                    <div class="notifications-time">2d</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-success rounded-circle">
                                        <span class="initial-wrap"><span>A</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">Application of <span
                                            class="text-dark text-capitalize">Sarah Williams</span> is waiting for your
                                        approval</div>
                                    <div class="notifications-time">1w</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar avatar-sm">
                                    <span class="avatar-text avatar-text-warning rounded-circle">
                                        <span class="initial-wrap"><span><i
                                                    class="zmdi zmdi-notifications font-18"></i></span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div>
                                    <div class="notifications-text">Last 2 days left for the project</div>
                                    <div class="notifications-time">15d</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">

                            @if(App\Profile::where('user_id', Auth::user()->id)->exists())
                            <img src="{{ asset('profilesImg/'.App\profile::where('user_id', Auth::user()->id)->firstOrfail()->img) }}"
                                alt="photo de profil" class="avatar-img rounded-circle">
                            @else
                            <img src="{{ asset('profilesImg/0000.png')}}" alt="photo de profil"
                                class="avatar-img rounded-circle">
                            @endif
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{ Auth::user()->name1.' '.Auth::user()->name2 }}<i
                                class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                {{-- <a class="dropdown-item" href="@if(App\Profile::where('user_id', Auth::user()->id)->exists())
                <img src="{{ asset('profilesImg/'.App\profile::where('user_id', Auth::user()->id)->firstOrfail()->img) }}"
                alt="photo de profil" class="img-thumbnail flot-center">
                @else
                <img src="{{ asset('profilesImg/0000.png')}}" alt="photo de profil" class="img-thumbnail flot-center">
                @endif{{ url('/users/'.Auth::user()->id.'/edit') }}">
                <i class="dropdown-icon zmdi zmdi-account"></i><span>{{ __('Profil') }}</span></a> --}}
                <a class="dropdown-item" href="{{ url('users') }}"><i class="dropdown-icon zmdi zmdi-card"></i><span>
                        Balance</span></a>
                <a class="dropdown-item" href="{{ url('inbox') }}"><i
                        class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                {{-- <a class="dropdown-item" href="setting"><i
                        class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                        class="dropdown-icon zmdi zmdi-power text-danger"></i><span>{{ __('Deconnexion') }}</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-divider"></div>
                {{-- <div class="sub-dropdown-menu show-on-hover">
                    <a href="#" class="dropdown-toggle dropdown-item no-caret"><i
                            class="zmdi zmdi-check text-success"></i>Online</a>
                    <div class="dropdown-menu open-left-side">
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <i class="dropdown-icon zmdi zmdi-power"></i><span>Log in</span></a> --}}
            </div>
        </li>
    </ul>
</nav>

<div class="hk-settings-panel">
    <div class="nicescroll-bar position-relative">
        <div class="settings-panel-wrap">
            <div class="settings-panel-head">
                <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span
                        class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
            <h6 class="mb-5">Navigation</h6>
            <p class="font-14">Menu comes in two modes: dark & light</p>
            <div class="button-list hk-nav-select mb-10">
                <button type="button" id="nav_light_select"
                    class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                            class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                <button type="button" id="nav_dark_select"
                    class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                            class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
            </div>
            <hr>
            <h6 class="mb-5">Top Nav</h6>
            <p class="font-14">Choose your liked color mode</p>
            <div class="button-list hk-navbar-select mb-10">
                <button type="button" id="navtop_light_select"
                    class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                            class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                <button type="button" id="navtop_dark_select"
                    class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                            class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <h6>Mot de passe</h6>
            </div>
            <button id="passM" class="btn btn-primary btn-block btn-reset mt-30">Changer mot de passe</button>

            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <h6>Avatar</h6>

            </div>
            <p class="font-14">Change la photo de profile <br>
                utiliser exclisivement le format image( <span class="text-danger">jpg,png,gif</span>) </p> <br><br><br>
            <div class="media-img-wrap ha d-flex">
                <input name="img" id="upload_image" type="file" class="dropify" value="" accept="image/*" />


            </div>
            @if(App\Profile::where('user_id', Auth::user()->id)->exists())
            <img src="{{ asset('profilesImg/'.App\profile::where('user_id', Auth::user()->id)->firstOrfail()->img) }}"
                alt="photo de profil" class="img-thumbnail flot-center">
            @else
            <img src="{{ asset('profilesImg/0000.png')}}" alt="photo de profil" class="img-thumbnail flot-center">
            @endif

        </div>
    </div>
    <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
    <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
</div>
<!-- /Setting Panel -->