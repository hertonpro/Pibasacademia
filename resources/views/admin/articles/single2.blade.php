{{-- @extends('layoutst') --}}

@extends('layoutadmin')

@section('content')

<!-- contents -->
<div class="hk-pg-header">
    <div>
        <h2 class="hk-pg-title font-weight-600 mb-10">Dashboard</h2>
        <p>Page d'administration<a href="#"> Support.</a></p>
    </div>
</div>
<div class="hk-row">
    <div class="col-lg-8">
            <div class="card">
                <div class="card card-profile-feed">
                    <div class="card-header card-header-action">
                        <div class="media align-items-center">
                            <div class="media-img-wrap d-flex mr-10">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('storage/'.$article->img) }}" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                            <div class="text-capitalize font-weight-500 text-dark">{{$article->titre}}</div>
                                <div class="font-13">11 hrs</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center card-action-wrap">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-30">{{$article->content}}.</p>
                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img-top rounded d-block" src="{{ asset('storage/'.$article->img) }}" alt="Card image cap">
                                <a href="#" class="btn-video-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer justify-content-between">
                        <div>
                            <p>{{$article->created_at->format('D d-M-Y')}}</p>
                            {{-- <a href="#"><i class="ion ion-md-heart text-primary"></i>142</a> --}}
                        </div>
                        <div>
                            {{-- <a href="#">751 comments</a>
                            <a href="#">2 shares</a> --}}
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <div class="media align-items-center">
                    <div class="media-img-wrap d-flex mr-10">
                        <div class="avatar avatar-sm">
                            <img src="{{ asset('storage/'.$article->img) }}" alt="user" class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="media-body">
                    <div class="text-capitalize font-weight-500 text-dark">{{$article->titre}}</div>
                        {{-- <div class="font-13">Business Manager</div> --}}
                    </div>
                </div>
                <div class="d-flex align-items-center card-action-wrap">
                    <div class="inline-block dropdown">
                        <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-settings"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-4 border-right pr-0">
                    <div class="pa-15">
                    <span class="d-block display-6 text-dark mb-5">{{$formations->count()}}</span>
                        <span class="d-block text-capitalize font-14">Formations</span>
                    </div>
                </div>
                <div class="col-4 border-right px-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">{{$articles->count()}}</span>
                        <span class="d-block text-capitalize font-14">Articles</span>
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">000</span>
                        <span class="d-block text-capitalize font-14">views</span>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span><i class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>Créé :</span></span><span class="ml-5 text-dark">{{$article->created_at->format('D d-M-Y')}}</span></li>
                <li class="list-group-item"><span><i class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Modifié :</span></span><span class="ml-5 text-dark">{{$article->updated_at->format('D d-M-Y')}}</span></li>
                {{-- <li class="list-group-item"><span><i class="ion ion-md-home font-18 text-light-20 mr-10"></i><span>Lives in:</span></span><span class="ml-5 text-dark">San Francisco, CA</span></li> --}}
            </ul>
         </div>
        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <h6>Avez-vous vu ?<span class="badge badge-soft-primary ml-5">{{$articles->count()-1}}</span></span></h6>
                <div class="d-flex align-items-center card-action-wrap">
                    <div class="inline-block dropdown">
                        <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articles as $itemartilce)
                <li class="list-group-item border-0">
                    <div class="media align-items-center">
                        <div class="d-flex media-img-wrap mr-15">
                            <div class="avatar avatar-sm">
                                <img src="{{asset('storage/'.$itemartilce->img)}}" alt="user" class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="media-body">
                            <span class="d-block text-dark text-capitalize">{{$itemartilce->titre}}</span>
                            {{-- <span class="d-block font-13">Apple Inc</span> --}}
                        </div>
                        <a href="#" class="text-light-40 ml-auto"><i class="ion ion-md-add font-24"></i></a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <h6><span>Articles <span class="badge badge-soft-primary ml-5">212</span></span></h6>
                <a href="#" class="font-14 ml-auto">Voir</a>
            </div>
            <div class="card-body pb-5">
                @foreach ($articl as $itemart)
                    <div class="hk-row text-center">
                        <div class="col-4 mb-15">
                            <div class="w-100">
                                <img src="{{asset('storage/'.$itemart->img)}}" alt="user" class="img-fluid rounded">
                            </div>
                            <span class="d-block font-14 text-truncate">{{substr($itemart->titre,1,12).'...'}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
                </div>
            </div>
</section>










 @endsection
