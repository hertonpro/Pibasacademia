@extends('layouts.app')

@section('content')
    <div class="container bg-white mt-3 p-5">

        <div class="row">
            <div class="col-8 ">
                @php
                $i=1;
                @endphp
                @foreach ($articles as $item)
                @if ($i++==1)


                <div class="card">
                    <div class="position-relative">
                        <img class="card-img-top d-block" src="{{ asset('storage'.'/'.$item->img) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{$item->titre}}</h2>
                        <p class="card-text">{{substr($item->content, 1,300)}} <a
                                href="{{url('article', $item->id)}}">...</a></p>
                    </div>
                    <div class="card-footer text-muted justify-content-between">
                        <div><span class="text-dark">Créé le </span>{{date('d.m.Y',strtotime($item->created_at))}}</div>
                        <a class="btn btn-xs btn-info ml-15 w-sm-100p" href="{{url('article', $item->id)}}"><small
                                class="text-muted">+ Plus</small></a>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                    data-feather="layers"></i></span></span>les autres articles</h4>
                </div>
                <div class="card-deck">
                    @foreach ($articles as $item)
                        <div class="col-lg-6 col-md-4 col-sm-4 col-6 mb-10">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('storage/'.$item->img) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->titre}}
                                    </h5>
                                    <a class="card-text" href="#"><small class="text-muted">+ Plus</small></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-4">
                <div class="card card-profile-feed">
                    <div class="card-header card-header-action">
                        <h6>Derniers articles</h6>
                        <div class="d-flex align-items-center card-action-wrap">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false"
                                    role="button"><i class="ion ion-ios-more"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($articlesRECENT as $itemrecent)
                        <li class="list-group-item border-0">
                            <div class="media align-items-center">
                                <div class="d-flex media-img-wrap mr-15">
                                    <div class="avatar avatar-sm">
                                        <img src="{{ asset('storage/'.$itemrecent->img) }}" alt="user"
                                            class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="{{url('article', $itemrecent->id)}}">
                                        <span
                                            class="d-block text-dark text-capitalize">{{  substr($itemrecent->titre, 1,15).'...'  }}</span>
                                    </a>
                                    <span class="d-block font-13">{{  substr($itemrecent->titre, 1,20).'...'  }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card card-profile-feed">
                    <div class="card-header card-header-action">
                        <h6>Dernieres formations</h6>

                        <div class="d-flex align-items-center card-action-wrap">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false"
                                    role="button"><i class="ion ion-ios-more"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($formations as $itemrecent)
                        <li class="list-group-item border-0">
                            <div class="media align-items-center">
                                <div class="d-flex media-img-wrap mr-15">
                                    <div class="avatar avatar-sm">
                                        <img src="{{ asset('dist\img\logo.png') }}" alt="user"
                                            class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="{{url('forma', $itemrecent->formation_id)}}">
                                        <span
                                            class="d-block text-dark text-capitalize">{{ substr($itemrecent->titre, 0,15).'...'  }}</span>
                                    </a>
                                    <span class="d-block font-13">{{  substr($itemrecent->titre, 1,20).'...'  }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /Row -->
        </div>

        <div class="col-xl-12">

            <section id="gallerie" class="hk-sec-wrapper hk-gallery-wrap">
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                    data-feather="layers"></i></span></span>Galerie</h4>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <h6 class="mt-30 mb-20"></h6>
                        <div class="row hk-gallery">
                            @foreach ($articles as $itemart)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6 mb-10"
                                data-src="{{ asset('storage/'.$itemart->img) }}">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('{{ asset('storage/'.$itemart->img) }}');">

                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Row -->
    </div>
<!-- contents -->
@endsection
