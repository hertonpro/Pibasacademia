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

							{{-- <img class="card-img-top d-block" src="dist/img/gallery/mock12.jpg" alt="Card image cap"> --}}
							<a href="#exampleModalForms" data-toggle="modal" data-target="#exampleModalForms">
								<img src="{{asset('dist/img/avatar12.jpg') }}" alt="user"
									class="avatar-img rounded-circle">
							</a>
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
							class="btn-text">Message 3</span><span class="icon-label"><i class="icon ion-md-mail"></i>
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



<script type="text/javascript" src="{{  asset('jquery.js')}}"></script>
<script src="{{  asset('croppie/croppie.js')}}"></script>
<link rel="Stylesheet" type="text/css" href="{{  asset('croppie/croppie.css')}}" />
<script>
    
     var url = "{{ url('/profile') }}";

    jQuery(document).ready(function(){


      var basic = $('#image_demo').croppie({
          viewport: {
              width: 150,
              height: 150,
              type: 'square'
          },
          //boundary: { width: 200, height: 200 }
      });

     

      $('#upload_image').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event){
          basic.croppie('bind', {
          url: event.target.result 
          }).then(function(){
            console.log('jQuery bind complete');
          })
        }
        saveP();
        reader.readAsDataURL(this.files[0]);
        $('#uploadModal').modal('show');

      })

          function saveP(){
/*
            $('#saveP').on('click', function(e){
              basic.croppie('result',{
                size: 'original'
              }).then(function(response){
                
                $.ajax({
	                type: 'POST',
	                url: url,
	                dataType: 'json',
	                
	                data: JSON.stringify({'id_p' : $('#id_p').val(),'img':response}),
	                success: function(data, textStatus, jqXHR){
	                },
	                error: function(jqXHR, textStatus, errorThrown){
	                    alert('Erreur du systeme: ' + textStatus);
	                    alert('Erreur du systeme: ' + textStatus);
	                }
	            });
                
              })
            })*/
          }

    })
         
  </script>





<!-- contents -->
@endsection

 <!-- Modal forms-->
 <div class="modal fade" id="exampleModalForms"
    tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
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
                    <form action="">
                        <h5 class="hk-sec-title">{{Auth::user()->name1.' '.Auth::user()->name2}}</h5>
                        <p class="mb-40">Modifier la photo du profil.</p>
                        <div  class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                                <div class="col-sm">
                                <button type="submit" class="btn btn-btn-success pull-right">Modifier </button>
                                </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
