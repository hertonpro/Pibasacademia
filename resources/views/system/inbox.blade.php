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

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                <thead>
                                                    <tr>
                                                        <th>Catégorie</th>
                                                        <th>Message</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    {{-- @foreach ($clients as $client) --}}
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
                                                    {{-- @endforeach --}}

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
            </div>

            <!-- contents -->

        </div>
    </div>
</div>

<!-- contents -->
@endsection