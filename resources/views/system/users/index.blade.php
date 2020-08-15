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
							@if(Auth::user()->profile)
								<img src="{{asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
							@elese
								<img src="{{asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
							@endif
							<button class="btn btn-info avatar-img rounded-circle" style="text-align: center;" alt="user"><span class="fa fa-upload"></span><input name="img" id="upload_image" type="file" class="inputFile" value="" /></button>


							<style type="text/css">
								.inputFile{
								    margin-top: 0px;
								    left: 0px;
								    right: 0px;
								    top: 0px;
								    width: 200px;
								    height: 200px;
								    background-color: #FFFFFF;
								    overflow: hidden;
								    opacity: 0;
								    position: absolute;
								    cursor: pointer;
								  }
							</style>





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




<div class="modal fade"  role="dialog" id="uploadModal" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Rogner Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="image_demo" style="width: 200px;height: 200px;text-align: center;margin: 0 auto;" >
          </div>
          <input type="hidden" name="id" id="id_p" value="{{Auth::user()->id}}">
          <br>
          
      </div>
      <div class="modal-footer">
      	<div style="text-align: center;" >
            <button class="btn btn-success crop_image"  id="saveP"><a href="/profile">Enregistrer</a></button>
          </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>