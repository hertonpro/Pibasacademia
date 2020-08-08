@extends('layoutadmin')

@section('content')

<!-- Title -->
<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                    data-feather="toggle-right"></i></span></span>Créer un nouveau membre</h4>



</div>
<!-- /Title -->
<div class="row">
    <div class="col-xl-12 pa-0 m-3">
        <div class=" py-xl-0 py-50">
            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                <form action="{{ url('/users') }}" method="post">
                    @csrf
                    <h1 class="display-4 mb-10">Formulaire d'adhésion</h1>
                    <p class="mb-30">Les informations doivent être vraies et vérifiables, car elles pourront être
                        utilisées.</p>

                    <div>
                        <div class="form-row">

                            <div class="col-md-6 form-group">
                                <input class="form-control @error('name1') is-invalid @enderror"
                                    placeholder="First name" name="name1" value="" type="text" required>
                                @error('name1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input class="form-control @error('name2') is-invalid @enderror" placeholder="Last name"
                                    name="name2" value="" type="text" required>
                                @error('name2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Adresse mail" name="email" type="Email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+243</span>
                                    </div>
                                    <input class="form-control @error('numTel') is-invalid @enderror"
                                        placeholder="Numero de telephone" name="numTel" type="number" required>
                                    @error('numTel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">NN carte</span>
                                    </div>
                                    <input class="form-control @error('numCart') is-invalid @enderror"
                                        placeholder="Numero de la carte d'identite" name="numCart" type="text" required>

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
                                        <span class="input-group-text" id="basic-addon1">PIN parrain</span>
                                    </div>
                                    <input class="form-control @error('parrain') is-invalid @enderror"
                                        placeholder="le code pin du parrain" name="parrain" type="text" required>

                                    @error('parrain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            
                            <button class="btn btn-primary btn-block" type="submit"><a class="text-warning"
                                    href="{{ url('/users/confirm') }}">Enregistre</a> </button>
                        </div>


                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- contents -->
@endsection