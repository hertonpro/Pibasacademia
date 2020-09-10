@extends('layoutst')

@section('content')

@include('profil')
<div class="bg-white shadow-bottom">
	<div class="container">
		<ul class="nav nav-light nav-tabs" id="resume" role="tablist">
			<li class="nav-item">
				<a href="" class="d-flex h-60p align-items-center nav-link">board</a>
				<a href="{{url('/board')}}" class="d-flex h-60p align-items-center nav-link">board</a>
			</li>
			<li class="nav-item">
				<a href="{{url('/formatio')}}" class="d-flex h-60p align-items-center nav-link">Formation</a>
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
     var url1 = "{{ url('/passwordM') }}";
     var id = "{{ Auth::user()->id }}";

    jQuery(document).ready(function(){

	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });


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

            $('#saveP').on('click', function(e){
              basic.croppie('result',{
                type: 'base64',
                size: 'original'
              }).then(function(response){

                $.ajax({
	                type: 'POST',
	                url: url,

	                data: {'id_p' : $('#id_p').val(),'img':response},
	                success: function(data, textStatus, jqXHR){
	                	$('#uploadModal').modal('hide');
	                	location.reload();
	                },
	                error: function(jqXHR, textStatus, errorThrown){
	                    alert('La photo n\'est pas bien charge');
	                }
	            });

              })
            })
          }
          $('#passM').on('click', function(e){

          		$('#passWordModal').modal('show');

            })



          $('#passwordM').on('click', function(e){

          		if($('#password').val() == $('#password-confirm').val()){

          			$.ajax({
	                type: 'POST',
	                url: url1,

	                data: {'pass1' : $('#password-last').val(),'password':$('#password-confirm').val(),'id':id},
	                success: function(data, textStatus, jqXHR){
	                	alert(data.success);
	                	$('#passWordModal').modal('hide');
	                },
	                error: function(data, textStatus, errorThrown){
	                     alert(data.success);
	                     $('.form-control').val('Le mot de passe ne corspond à aucune autre');
	                }
	            });

          		}else{
          			$('#password-confirm').css({'border-color':'red'});
          		}

            })


    })

</script>

<div class="modal fade" role="dialog" id="uploadModal" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Rogner Photo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="image_demo" style="width: 200px;height: 200px;text-align: center;margin: 0 auto;">
				</div>
				<input type="hidden" name="id" id="id_p" value="{{Auth::user()->id}}">
				<br>

			</div>
			<div class="modal-footer">
				<div style="text-align: center;">
					<button class="btn btn-success crop_image" id="saveP">Enregistrer</button>
				</div>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" role="dialog" id="passWordModal" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Changer mot de passe</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">




				<div class="card-body">
					<form>
						@csrf

						<div class="form-group row">
							<label for=""
								class="col-md-4 col-form-label text-md-right">{{ __('ancien mot de passe') }}</label>

							<div class="col-md-6">
								<input id="password-last" type="password"
									class="form-control @error('password') is-invalid @enderror" name="password-last"
									required autocomplete="new-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password"
								class="col-md-4 col-form-label text-md-right">{{ __('Nouveau mot de passe') }}</label>

							<div class="col-md-6">
								<input id="password" type="password"
									class="form-control @error('password') is-invalid @enderror" name="password"
									required autocomplete="new-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm"
								class="col-md-4 col-form-label text-md-right">{{ __('Confirmez le mot de passe') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control"
									name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>
					</form>
				</div>




			</div>
			<div class="modal-footer">
				<div style="text-align: center;">
					<button class="btn btn-success" id="passwordM">Enregistrer</button>
				</div>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<!-- contents -->
@endsection