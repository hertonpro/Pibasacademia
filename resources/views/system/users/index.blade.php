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
			@php
			$role=Auth::user()->role
			@endphp
			@if ($role== '0')
			@include('system/client')
			@elseif ($role=== '1')
			@include('system/super')
			@elseif ($role=== '2')
			@include('system/admin')
			@elseif ($role=== '3')
			@include('system/Ac')
			@else
			@yield('content')
			@endif

		</div>
	</div>
</div>

<!-- contents -->
@endsection
 <!-- Modal forms-->
 <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modiere image profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Dropify</h5>
                    <p class="mb-40">Override your input files with style. Find more options <a href="http://jeremyfagis.github.io/dropify/" target="_blank">here</a>.</p>
                    <div  class="row">
                        <div class="col-sm">
                            <input type="file" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
