@extends('layoutst')

@section('content')

<!-- contents -->
<div class="profile-cover-wrap overlay-wrap">
    <div class="profile-cover-img" style="background-image:url({{url('dist/img/trans-bg.jpg')}})"></div>
    <div class="bg-overlay bg-trans-dark-60"></div>
    <div class="container profile-cover-content py-50">
        <div class="hk-row">
            <div class="col-lg-6">
                <div class="media align-items-center">
                    <div class="media-img-wrap  d-flex">
                        <div class="avatar">
                            <img src="{{asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="text-white text-capitalize display-6 mb-5 font-weight-400">
                            {{Auth::user()->name1.' '.Auth::user()->name2}}</div>
                        <div class="font-14 text-white"><span class="mr-5"><span
                                    class="font-weight-500 pr-5">Matricule</span><span
                                    class="mr-5">{{Auth::user()->pin}}</span></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="button-list">
                    <a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span
                            class="btn-text">Message 3</span><span class="icon-label"><i
                                class="icon ion-md-mail"></i>
                        </span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white shadow-bottom">
    <div class="container">
        <ul class="nav nav-light nav-tabs" id="resume" role="tablist">
            <li class="nav-item">
                <a href="#resume" class="d-flex h-60p align-items-center nav-link">Résumé</a>
            </li>
            <li class="nav-item">
                <a href="#" class="d-flex h-60p align-items-center nav-link">Formation</a>
            </li>
            <li class="nav-item">
                <a href="#upline" class="d-flex h-60p align-items-center nav-link">Upline</a>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content mt-sm-60 mt-30">
    <div class="tab-pane fade show active" role="tabpanel">
        <div class="container">
            <!-- contents -->

            <div class="card p-5">
                <!-- Title -->
                <h1 class="title">Message</h1>
                <!-- Title -->
                <div class="hk-row">
                    <div class="col-lg-12">
                        <div class="col-lg-9 email-content">
                            <div class="email-head">
                                <div
                                    class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">

                                        <div class="sender d-flex align-items-center">
                                            <a href="#">John Doe</a> <span>to</span><a href="#">me</a>
                                            <div class="actions dropdown">
                                                <a class="icon" href="#" data-toggle="dropdown"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></a>
                                                <div class="dropdown-menu" role="menu">
                                                    <a class="dropdown-item" href="#">Mark as read</a>
                                                    <a class="dropdown-item" href="#">Mark as unread</a>
                                                    <a class="dropdown-item" href="#">Spam</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date">Nov 20, 11:20</div>
                                </div>
                            </div>
                            <div class="email-body">
                                <p>Hello,</p>
                                <br>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                    vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                    incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem.</p>
                                <br>
                                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                    ullamcorper ultricies nisi. Nam
                                    eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                    semper libero, sit amet
                                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                    hendrerit id, lorem. Maecenas
                                    nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                                    Nullam quis ante. Etiam
                                    sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                                    nibh. Donec sodales
                                    sagittis magna.</p>
                                <br>
                                <p><strong>Regards</strong>,<br> John Doe</p>
                            </div>
                            <div class="email-attachments">
                                <div class="title">Attachments <span>(3 files, 12,44 KB)</span></div>
                                <ul>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                </path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg> Reference.zip <span class="text-muted tx-11">(5.10 MB)</span></a>
                                    </li>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                </path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg> Instructions.zip <span class="text-muted tx-11">(3.15 MB)</span></a>
                                    </li>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                </path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg> Team-list.pdf <span class="text-muted tx-11">(4.5 MB)</span></a></li>
                                </ul>
                            </div>
                            <div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <form action="{{url('inbox')}}">
                                            <div class="form-group">
                                                <h3>Répondre</h3>
                                                <label for="exampleFormControlTextarea1"></label>
                                                <textarea class="form-control rounded-0"
                                                    id="exampleFormControlTextarea1" rows="10"></textarea>
                                                <br><button type="submit" class="btn btn-primary">Répondre</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contents -->

    </div>
</div>
</div>

<!-- contents -->
@endsection