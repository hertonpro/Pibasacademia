<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close">
        <span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="transaction">transaction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('')}}">cours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard3.html">Statistics</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                        <span class="feather-icon"><i data-feather="zap"></i></span>
                        <span class="nav-link-text">Gestion</span>
                    </a>
                    <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#signup_drp">
                                        Utilisateurs
                                    </a>
                                    <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{url('users/create')}}"">Nouveau</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{url('clients')}}">Membres</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#signin_drp">
                                        Formations
                                    </a>
                                    <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login.html">Cours</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login-simple.html">Participants</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#recover_drp">
                                        Articles
                                    </a>
                                    <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="forgot-password.html">List Article</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="reset-password.html">Créer article</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>tech</span>
            </div>
            <ul class="navbar-nav flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="feather-icon"><i data-feather="headphones"></i></span>
                        <span class="nav-link-text">Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->