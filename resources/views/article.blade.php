@extends('layouts.app')

@section('content')

<!-- contents -->
<div class="container bg-white mt-3 p-5">

    <div class="row">
        <div class="col-8 card ">
            <div class="card-body">
                <div class="card">
                    <div class="position-relative">
                        <img class="card-img-top d-block" src="{{ asset('storage/'.$articles->img) }}"
                            alt="Card image cap">

                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{$articles->titre}}.</h2>
                        <p class="card-text">{{$articles->content}}</p>
                    </div>
                </div>
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
        </div>
    </div>

    {{-- Gallerie --}}
    <!-- Row -->
    <div class="row mt-3">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper hk-gallery-wrap" id="gallerie">
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                    data-feather="layers"></i></span></span>Liste articles</h4>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <h6 class="mt-30 mb-20">{{date('d/m/Y')}}</h6>
                        <div class="row">
                            
                            @foreach ($articlesRECENT as $itemrecent)
                            <div class=" col-lg-2 col-md-4 col-sm-4 col-xs-6 col-lg-4 ">
                                <div class="card">
                                    <img class="card-img-top img-responsive" style="Height:8rem;"
                                        src="{{ asset('storage/'.$itemrecent->img) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{substr($itemrecent->titre, 1,13)}}</h5>
                                        <p class="card-content">{{substr($itemrecent->content, 1,300).'...'}}</p>
                                        <a class="card-text" href="{{url('article', $itemrecent->id)}}"><small
                                                class="text-muted">+ Plus</small></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
    {{-- include contact informations --}}
    @include('cont')
</div>

<!-- contents -->
@endsection