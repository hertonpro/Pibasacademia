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
							class="btn-text">Messages {{Auth::user()->role}}</span><span class="icon-label"><i
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
    <div class="col-lg-8">
        <div id="card">
            @foreach ($formations as $item)
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">{{$item->titre}}</h5>
                <p class="mb-25">
                    {{$item->resume}}
                </p>
                <div class="row">
                    <div class="col-sm">
                        <div class="media pa-20 border border-2 border-light rounded">
                            <img class="mr-15 circle d-74" src="{{asset('dist/img/logop.png')}}" alt="Generic placeholder image">
                            <div class="media-body">
                                <h6 class="mb-5">Nombre d'inscrit </h6>
                                <div class=" justify-content-between">
                                         <div>
                                            <i class="ion ion-md-heart text-primary"></i>
                                                @foreach ($suivre as $suivreitem)
                                                    @if ( $suivreitem->formatio==$item->formation_id)
                                                            {{$suivreitem->count()}}
                                                    @endif
                                                @endforeach
                                            Inscrits
                                        </div>
                                    <div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-footer">
                        <a href="{{url('forma', $item->formation_id)}}"  class="btn btn-sm-info pull-right">Voir plus </a>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    </div>
</div>

    <div class="col-lg-4">
        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <div class="media align-items-center">

                    <div class="media-body">
                        <div class="text-capitalize font-weight-500 text-dark">Opérration</div>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-4 border-right pr-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">154</span>
                        <a href=""><span class="d-block text-capitalize font-14">Demande</span></a>
                    </div>
                </div>
                <div class="col-4 border-right px-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">65</span>
                        <span class="d-block text-capitalize font-14">Validées</span>
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">433</span>
                        <span class="d-block text-capitalize font-14">Faitées</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <div class="media align-items-center">

                    <div class="media-body">
                        <div class="text-capitalize font-weight-500 text-dark">Formation</div>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-6 border-right pr-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">154</span>
                        <a href=""><span class="d-block text-capitalize font-14">Demande</span></a>
                    </div>
                </div>
                <div class="col-6 border-right px-0">
                    <div class="pa-15">
                        <span class="d-block display-6 text-dark mb-5">65</span>
                        <span class="d-block text-capitalize font-14">Inscrits</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div><!-- contents -->
@endsection
