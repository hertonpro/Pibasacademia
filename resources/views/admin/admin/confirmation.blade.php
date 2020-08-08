@extends('layoutadmin')

@section('content')


                    <div class="col-xl-12 pa-0">
                        <div class=" py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form action="{{ route('newUser') }}" method="post">
                                    @csrf
                                    

                                    <div class="form-group">Nom: {{ $pp->name1.' '.$pp->name1 }}</div>
                                    <div class="form-group">Matricule: {{ $pp->pin }}</div>
                                    <div class="form-group">Adresse mail: {{ $pp->email }}</div>
                                    <div class="form-group">Matricule parrain: {{ $pp->parrain }}</div>
                                     <div class="form-group">Mot de pass: {{ $password1 }}</div>
                                    <div class="form-group">
                                        <input type="" value="{{ $pp->id }}" name="">
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Imprimer</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
