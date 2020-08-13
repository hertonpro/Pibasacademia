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
                                <a href="#exampleModalForms" data-toggle="modal" data-target="#exampleModalForms" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span class="icon-label"><i class="ion ion-md-link"></i></span><span class="btn-text">website</span></a>
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
        <div class="card">


                <div class="card-body">
                <div class="table-wrap ">
                    <div class="card-title">
                        <strong>Date(s) de suivie de la formation de  : </strong><strong class="text-gradient-danger">{{$formations->titre}}</strong>
                    </div>
                <table class="table table-sm table-hover mb-0">
                    <thead>
                        <tr>@php
                            $i=1;
                        @endphp
                            <th>N°</th>
                            <th>date debut</th>
                            <th>date fin </th>
                            <th class="w-20">Progression</th>
                            <th class="w-20">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coursid as $cours)
                        <tr>
                            <td>{{$i++}}</td>
                        <td>{{ Str::substr($cours->datecours, 1, 10) }}</td>
                        <td>{{ Str::substr($cours->datecours, 12, 22) }}</td>
                            <td>
                                <div class="progress-wrap lb-side-left mnw-125p">
                                    <div class="progress-lb-wrap">
                                        <label class="progress-label mnw-25p">95%</label>
                                        <div class="progress progress-bar-xs">
                                            <div class="progress-bar bg-success w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge badge-soft-success">Completed</span></td>
                            <td><span class="badge badge-soft-info btn btn-sm btn btn-gradient-danger">suivre</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="card">


                <div class="card-body">
                <div class="table-wrap ">
                    <div class="card-title">
                        <strong>Date(s) de suivie de la formation de  : </strong><strong class="text-gradient-danger">{{$formations->titre}}</strong>
                    </div>
                <table class="table table-sm table-hover mb-0">
                    <thead>
                        <tr>@php
                            $i=1;
                        @endphp
                            <th>N°</th>
                            <th>date debut</th>
                            <th>date fin </th>
                            <th class="w-20">Progression</th>
                            <th class="w-20">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coursid as $cours)
                        <tr>
                            <td>{{$i++}}</td>
                        <td>{{ Str::substr($cours->datecours, 1, 10) }}</td>
                        <td>{{ Str::substr($cours->datecours, 12, 22) }}</td>
                            <td>
                                <div class="progress-wrap lb-side-left mnw-125p">
                                    <div class="progress-lb-wrap">
                                        <label class="progress-label mnw-25p">95%</label>
                                        <div class="progress progress-bar-xs">
                                            <div class="progress-bar bg-success w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge badge-soft-success">Completed</span></td>
                            <td><span class="badge badge-soft-info btn btn-sm btn btn-gradient-danger">suivre</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <section class="hk-sec-wrapper hk-gallery-wrap" id="gallerie">
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon">
                <span class="feather-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-layers">
                    <polygon points="12 2 2 7 12 12 22 7 12 2">
                        </polygon><polyline points="2 17 12 22 22 17">
                            </polyline><polyline points="2 12 12 17 22 12"></polyline></svg></span></span>
                            Articles</h4>
        </div>
        <ul class="nav nav-light nav-tabs" role="tablist">
            <li class="nav-item">
                <a href="#" class="nav-link active">Library</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Photos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Video</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Album</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" role="tabpanel">
                <h6 class="mt-30 mb-20">22 October</h6>
                <div class="row hk-gallery">
                    @foreach ($articles as $item)
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock1.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('{{ asset('storage/'.$item->img) }} ');"
                                 style="background-size:cover ">
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
                <h6 class="mt-30 mb-20">Yesterday</h6>
                <div class="row hk-gallery">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock11.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock11.jpg');">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU" data-poster="dist/img/gallery/mock2.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock12.jpg');">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock13.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock13.jpg');">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="http://vimeo.com/1084537" data-poster="dist/img/gallery/mock4.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock14.jpg');">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock15.jpg">
                        <a href="#" class="">
                            <div class="gallery-img" style="background-image:url('dist/img/gallery/mock15.jpg');">
                            </div>
                        </a>
                    </div>
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
                        <span class="d-block display-6 text-dark mb-5">{{$formations->count()}}</span>
                        <a href=""><span class="d-block text-capitalize font-14">Formations</span></a>
                    </div>
                </div>
                <div class="col-4 border-right px-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">{{$coursid->count()}}</span>
                        <span class="d-block text-capitalize font-14">Cours</span>
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">{{$articles->count()}}</span>
                        <span class="d-block text-capitalize font-14">Articles</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <div class="media align-items-center">

                    <div class="media-body">
                        <div class="text-capitalize font-weight-500 text-dark">Particulier</div>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-6 border-right pr-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">{{$liens->count()}}</span>
                        <a href=""><span class="d-block text-capitalize font-14">Liens</span></a>
                    </div>
                </div>
                <div class="col-6 border-right px-0">
                    <div class="pa-15">
                    <span class="d-block display-6 text-dark mb-5">{{$suivre->count()}}</span>
                        <span class="d-block text-capitalize font-14">Suivies</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div><!-- contents -->
@endsection
