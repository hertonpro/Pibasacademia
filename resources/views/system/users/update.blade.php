@extends('layoutadmin')

@section('content')

<!-- Title -->
<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                    data-feather="toggle-right"></i></span></span>Update Mot de passe</h4>


    @php
    $role=Auth::user()->role
    @endphp
</div>

{{-- <div class="push-top">
    <a href="{{ url('clients') }}" class="btn btn-gradient-info">Liste</a>
</div> --}}
<!-- /Title -->
<div class="row">
    <div class="col-xl-12 pa-0 m-3">
        <div class=" py-xl-0 py-50">
            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                <form action="{{ url('client/1') }}">
                    @csrf



                    <div>
                        <div class="form-row">


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Ancien mot de passe</span>
                                    </div>
                                    <input class="form-control @error('numCart') is-invalid @enderror"
                                        placeholder="Numero de la carte d'identite" name="numCart" type="password"
                                        required>

                                    @error('numCart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nouveau mot de passe</span>
                                    </div>
                                    <input class="form-control @error('parrain') is-invalid @enderror"
                                        placeholder="le code pin du parrain" name="parrain" type="password" required>

                                    @error('parrain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <br> <span class="input-group-text" id="basic-addon1">Confirmer</span>
                                        </div>
                                        <input class="form-control @error('parrain') is-invalid @enderror"
                                            placeholder="le code pin du parrain" name="parrain" type="password"
                                            required>

                                        @error('parrain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <a href="{{url('users')}}" class="btn btn-primary btn-block text-warning">Enregistre</a>
                            </div>


                </form>
                {{-- </div>@else
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Habilitation!</strong> Vous ne disposez pas de droits pour accéder à cette page.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endif --}}
            </div>

        </div>
    </div>
</div>
</div>
</div>
<!-- contents -->
@endsection