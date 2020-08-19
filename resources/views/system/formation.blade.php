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
                            {{-- <img class="card-img-top d-block" src="dist/img/gallery/mock12.jpg" alt="Card image cap"> --}}
                            {{-- <a href="#exampleModalForms" data-toggle="modal" data-target="#exampleModalForms" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span class="icon-label"><i class="ion ion-md-link"></i></span><span class="btn-text">website</span></a> --}}
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
                            class="btn-text">Message {{Auth::user()->role}}</span><span class="icon-label"><i
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
            <div class="hk-row">
                <div class="col-lg-8 card">
                    <div class="card">
                        <div class="card-body ">
                            <h5 class="card-title">{{$formations->titre}} </h5>
                            <p class="card-text">{{$formations->resume}}</p>
                        </div>
                    </div>
                    <div class="card justify-content-between">
                        <div class=" card">
                            <div class="card-title">
                                <h3 class="text-center">Liste de cours prevues</h3>
                            </div>
                            <div class="card-body">
                                <div class="hk-row">
                                    @foreach ($coursid as $cours)
                                    @php
                                    $datetime1 = date_create(substr($cours->datecours, 1,8));
                                    $datetime2 = date_create(substr($cours->datecours, 12, 20));
                                    $datetime3 = date_create(substr(now(),1,8));
                                    $interval = date_diff($datetime1, $datetime2);
                                    $interval2=date_diff($datetime1,$datetime3);
                                    $interval3=date_diff($datetime2,$datetime3);
                                    @endphp

                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4  ">
                                        <a href=""><i class="ion ion-md-heart text-primary"></i> {{$suivre->count()}}
                                            Personnes</a>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-white text-capitalize display-6 mb-5 font-weight-400">
                                            {{Auth::user()->name1.' '.Auth::user()->name2}}</div>
                                        <div class="font-14 text-white"><span class="mr-5"><span
                                                    class="font-weight-500 pr-5">Matricule</span><span
                                                    class="mr-5">{{Auth::user()->pin}}</span></span></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="button-list">
                                    <a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span
                                            class="btn-text">Message {{Auth::user()->role}}</span><span
                                            class="icon-label"><i class="icon ion-md-mail"></i>
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
                            <div class="hk-row">
                                <div class="col-lg-8 card">
                                    <div class="card">
                                        <div class="card-body ">
                                            <h5 class="card-title">{{$formations->titre}} </h5>
                                            <p class="card-text">{{$formations->resume}}</p>
                                        </div>
                                    </div>
                                    <div class="card justify-content-between">
                                        <div class=" card">
                                            <div class="card-title">
                                                <h3 class="text-center">Liste de cours prevues</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="hk-row">
                                                    @foreach ($coursid as $cours)
                                                    @php
                                                    $datetime1 = date_create(substr($cours->datecours, 1,8));
                                                    $datetime2 = date_create(substr($cours->datecours, 12, 20));
                                                    $datetime3 = date_create(substr(now(),1,8));
                                                    $interval = date_diff($datetime1, $datetime2);
                                                    $interval2=date_diff($datetime1,$datetime3);
                                                    $interval3=date_diff($datetime2,$datetime3);
                                                    @endphp

                                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4  ">
                                                        <a href=""><i class="ion ion-md-heart text-primary"></i>
                                                            {{$suivre->count()}} Personnes</a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4  ">
                                                        <span class="badge badge-primary  badge-sm">Debut le
                                                            {{substr($cours->datecours, 1,8)}}</span>
                                                        <span class="badge badge-info  badge-sm">Fin le
                                                            {{substr($cours->datecours, 12, 20)}}</span>

                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4  ">
                                                        <form action="{{url('/suivrecours')}}" methode="get">
                                                            @csrf
                                                            <input type="hidden" value="{{Auth::user()->id}}"
                                                                name="user_id" id="user_id">
                                                            <input type="hidden" value="{{$cours->cours_id}}"
                                                                name="cours_id" id="cours_id">
                                                            <input type="hidden" value="0" name="status" id="status">
                                                            <button type="submit"
                                                                class="badge badge-soft-info btn btn-sm btn btn-gradient-danger pull-right">suivre</button>
                                                        </form>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="hk-sec-wrapper">
                                        <h5 class="hk-sec-title">Lecture <svg xmlns="http://www.w3.org/2000/svg"
                                                width="34" class="pull-right" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19">{{$liens->count()}}</polyline>
                                            </svg></h5>
                                        <p class="mb-25">
                                            PiBas Academia vous propose ces {{$liens->count()}} liens pour
                                            lápproffondissement de vous capacités.<br> les voici :
                                        </p>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="dd" id="nestable2">
                                                    <ol class="dd-list">
                                                        @foreach ($liens as $itemitem)
                                                        <li class="dd-item dd3-item" data-id="1">
                                                            <div class="dd-handle dd3-handle"></div>
                                                            <div class="dd3-content"> <a href="{{$itemitem->link}}"
                                                                    target="_blank">{{$itemitem->description}}</a>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="hk-sec-wrapper hk-gallery-wrap" id="gallerie">
                                        <div class="hk-pg-header">
                                            <h4 class="hk-pg-title"><span class="pg-title-icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-layers">
                                                            <polygon points="12 2 2 7 12 12 22 7 12 2">
                                                            </polygon>
                                                            <polyline points="2 17 12 22 22 17">
                                                            </polyline>
                                                            <polyline points="2 12 12 17 22 12"></polyline>
                                                        </svg></span></span>
                                                Articles</h4>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" role="tabpanel">
                                                <div class="row hk-gallery">
                                                    @foreach ($articles as $item)
                                                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 "
                                                        data-src="{{ asset('storage/'.$item->img) }}">
                                                        <a href="#" class="">
                                                            <div class="gallery-img"
                                                                style="background-image:url('{{ asset('storage/'.$item->img) }} ');"
                                                                style="background-size:cover ">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-profile-feed">
                                        <div class="card-header card-header-action">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <div class="text-capitalize font-weight-500 text-dark">Global</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row text-center">
                                            <div class="col-4 border-right pr-0">
                                                <div class="pa-15">
                                                    <span
                                                        class="d-block display-6 text-dark mb-5">{{$formations->count()}}</span>
                                                    <a href=""><span
                                                            class="d-block text-capitalize font-14">Formations</span></a>
                                                </div>
                                            </div>
                                            <div class="col-4 border-right px-0">
                                                <div class="pa-15">
                                                    <span
                                                        class="d-block display-6 text-dark mb-5">{{$coursid->count()}}</span>
                                                    <span class="d-block text-capitalize font-14">Cours</span>
                                                </div>
                                            </div>
                                            <div class="col-4 pl-0">
                                                <div class="pa-15">
                                                    <span
                                                        class="d-block display-6 text-dark mb-5">{{$articles->count()}}</span>
                                                    <span class="d-block text-capitalize font-14">Articles uesv</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card card-profile-feed">
                                        <div class="card-header card-header-action">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <div class="text-capitalize font-weight-500 text-dark">Particulier
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row text-center">
                                            <div class="col-6 border-right pr-0">
                                                <div class="pa-15">
                                                    <span
                                                        class="d-block display-6 text-dark mb-5">{{$liens->count()}}</span>
                                                    <a href=""><span
                                                            class="d-block text-capitalize font-14">Liens</span></a>
                                                </div>
                                            </div>
                                            <div class="col-6 border-right px-0">
                                                <div class="pa-15">
                                                    <span
                                                        class="d-block display-6 text-dark mb-5">{{$suivre->count()}}</span>
                                                    <span class="d-block text-capitalize font-14">Suivies</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card card-profile-feed">
                                        <div class="card-header card-header-action">
                                            <h6>Derniers articles</h6>
                                            <div class="d-flex align-items-center card-action-wrap">
                                                <div class="inline-block dropdown">
                                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#"
                                                        aria-expanded="false" role="button"><i
                                                            class="ion ion-ios-more"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            @foreach ($articlesRECENT as $itemrecent)
                                            <li class="list-group-item border-0">
                                                <div class="media align-items-center">
                                                    <div class="d-flex media-img-wrap mr-15">
                                                        <div class="avatar avatar-sm">
                                                            <img src="{{ asset('storage/'.$itemrecent->img) }}"
                                                                alt="user" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{url('article', $itemrecent->id)}}">
                                                            <span
                                                                class="d-block text-dark text-capitalize">{{  substr($itemrecent->titre, 1,15).'...'  }}</span>
                                                        </a>
                                                        <span
                                                            class="d-block font-13">{{  substr($itemrecent->titre, 1,20).'...'  }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection