@extends('layoutadm')

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
            <div class="hk-row">
                <div class="col-lg-12">
                    <div class="card p-2">
                    <h3 class="tiles text-center ">Formation de (d'){{' '.$formations->titre}}</h3>
                        <div class="hk-row">
                            <div class="card col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">{{$formations->titre}}</h5>
                                    <p class="card-text">
                                        {{$formations->resume}}
                                    .</p>
                                </div>

                                    @foreach ($suivre as $itemsuivre)
                                        @foreach ($coursid as $itemcours)
                                            @if ($itemsuivre->user_id!=$Auth::user()->id
                                            &&
                                            $itemsuivre->cours_id != $itemcours->cours_id )

                                            @else
                                                <div class="table-responsive">

                                            @endif
                                        @endforeach

                                    @endforeach


                                </div>
                                <a href="formation" class="btn btn-btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                                        class="btn-text">Suivre la formation</span></a>
                                <div class="card-footer justify-content-between">
                                    <div>
                                        <a href="#"><i class="ion ion-md-heart text-primary"></i> 30 Inscrits</a>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="badge badge-primary  badge-sm">Debut le 24.02.2020</span>
                                        </div>
                                        <div>
                                            <span class="badge badge-danger  badge-sm">Fin le 25.03.2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-12 col-lg-12 col-xs-12 col-sm-12">

                    <div class=" p-3" id="upline">
                        <h3 class="p-4">Liste deprogramme </h3>
                                <table class="table table-sm table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Formation</th>
                                            <th>date debut</th>
                                            <th>date fin </th>
                                            <th class="w-20">Progression</th>
                                            <th class="w-20">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($coursid as $cours) --}}
                                        <tr>
                                            <td>Branding</td>
                                            <td>Pineapple Inc</td>
                                            <td>13 Nov 2018</td>
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
                                            <td>
                                                <a href="#" class="btn btn-btn-info"><span
                                                    class="btn-text">Suivre</span></a>
                                            </td>

                                        </tr>
                                        {{-- @endforeach --}}


                                    </tbody>
                                </table>
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

<!-- contents -->
@endsection
