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
                <h1 class="title"><i data-feather="mail"></i>Message</h1>
                <!-- Title -->
                <div class="hk-row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="container mt-sm-60 mt-30">
                                    <div class="hk-row">
                                        <div class="col-xl-4">
                                            <div class="card">
                                                <h6 class="card-header">
                                                    Category
                                                </h6>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item d-flex align-items-center active">
                                                        <i class="ion ion-md-sunny mr-15"></i>Terms &amp; conditions<span class="badge badge-light badge-pill ml-15">06</span>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center ">
                                                        <i class="ion ion-md-sunny mr-15"></i>Terms &amp; conditions<span class="badge badge-light badge-pill ml-15">06</span>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <i class="ion ion-md-unlock mr-15"></i>Privacy policy<span class="badge badge-light badge-pill ml-15">14</span>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <i class="ion ion-md-bookmark mr-15"></i>Terms of use<span class="badge badge-light badge-pill ml-15">10</span>
                                                    </li>
                                                    <li class="list-group-item d-flex align-items-center">
                                                        <i class="ion ion-md-filing mr-15"></i>Documentation<span class="badge badge-light badge-pill ml-15">27</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="card card-lg">
                                                <h3 class="card-header border-bottom-0">
                                                    Terms and Conditions
                                                </h3>
                                                <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                                    <div class="card">
                                                        <div class="table-wrap">
                                                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Destinataire</th>
                                                                        <th>Message</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($messages as $keymessage)
                                                                    <tr>
                                                                        <td>{{$keymessage->destination}}</td>
                                                                        <td>
                                                                            <div class="media-body">
                                                                                <div class="media-heading">
                                                                                    <a href="mail-single.html"
                                                                                        class="m-r-10 text-warning">{{ ucfirst(mb_strtolower(substr($keymessage->destination,1,100)))}}</a>
                                                                                    <span class="badge bg-amber">
                                                                                        @if ($keymessage->status==0)
                                                                                            Non lu
                                                                                        @else
                                                                                            lu
                                                                                        @endif
                                                                                        {{$keymessage->destination}}</span>
                                                                                    <small class="float-right text-muted"><time
                                                                                            class="hidden-sm-down" datetime="2017">12:35
                                                                                            AM</time><i
                                                                                            class="zmdi zmdi-attachment-alt"></i>
                                                                                    </small>
                                                                                </div>
                                                                                <p class="msg">Vous avez commandé un retrait de 30 $ sur vos bonus.</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="btn-toolbar" role="toolbar"
                                                                                aria-label="Toolbar with button groups">
                                                                                <div class="btn-group" role="group"
                                                                                    aria-label="Third group">
                                                                                    <a class="text-success" href="inbox//edit"><i data-feather="edit"></i>Repondre</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <td>SYST</td>
                                                                        <td>
                                                                            <div class="media-body">
                                                                                <div class="media-heading">
                                                                                    <a href="mail-single.html"
                                                                                        class="m-r-10 text-warning">Simply dummy
                                                                                        text</a>
                                                                                    <span class="badge bg-amber">notification de
                                                                                        retrait</span>
                                                                                    <small class="float-right text-muted"><time
                                                                                            class="hidden-sm-down" datetime="2017">12:35
                                                                                            AM</time><i
                                                                                            class="zmdi zmdi-attachment-alt"></i>
                                                                                    </small>
                                                                                </div>
                                                                                <p class="msg">Vous avez commandé un retrait de 30 $ sur vos bonus.</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="btn-toolbar" role="toolbar"
                                                                                aria-label="Toolbar with button groups">
                                                                                <div class="btn-group" role="group"
                                                                                    aria-label="Third group">
                                                                                    <a class="text-success" href="inbox//edit"><i data-feather="edit"></i>Repondre</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Catégorie</th>
                                                                        <th>Message</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">

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
