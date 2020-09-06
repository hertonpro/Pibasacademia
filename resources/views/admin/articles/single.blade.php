@extends('layoutadmin')

@section('content')

<!-- contents -->
<div class="hk-pg-header">
    <div>
        <h2 class="hk-pg-title font-weight-600 mb-10">Dashboard</h2>
        <p>Page d'administration<a href="#"> Support.</a></p>
    </div>
</div>
<div class="hk-row">
    <div class="col-lg-8">
        <div class="hk-row">
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Membre</span>
                            </div>
                            <div>
                                {{-- <span class="badge badge-primary  badge-sm">Iron</span> --}}
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">{{$users->count()}}</span>
                            <a href="{{url('admin/clients')}}"><small class="d-block">Liste de membres</small></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">revenue mensuel</span>
                            </div>
                            <div>
                                <span class="badge badge-primary   badge-sm">Info</span>
                                <span class="badge badge-danger   badge-sm">En</span>
                                <span class="badge badge-success   badge-sm">Bus</span>
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">52471$</span>
                            <small class="d-block">50 Membres enregistrés</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-profile-feed">
                    <div class="card-header card-header-action">
                        <div class="media align-items-center">

                            <div class="media-body">
                                <div class="text-capitalize font-weight-500 text-dark">Utilisateurs</div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 border-right pr-0">
                            <div class="pa-15">
                                <span class="d-block text-capitalize font-14">Utilisateur</span>
                                <a href="{{route('users.create')}}"><span
                                        class="d-block text-capitalize font-14">Ajouter</span></a>
                                <a href="{{url('clients')}}"><span
                                        class="d-block text-capitalize font-14">Gérer</span></a>
                                <a href=""><span class="d-block text-capitalize font-14">Status</span></a>
                            </div>
                        </div>
                        <div class="col-6 px-0">
                            <div class="pa-15">
                                <span class="d-block text-capitalize font-14">Acces</span>
                                @php
                                $role=Auth::user()->role
                                @endphp
                                @if ($role== '1')
                                <a href=""><span class="d-block text-capitalize font-14">Rôles</span></a>
                                <a href=""><span class="d-block text-capitalize font-14">Droits</span></a>
                                @else
                                <span class="d-block text-capitalize font-14">Rôles</span>
                                <span class="d-block text-capitalize font-14">Droits</span>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-profile-feed">
                    <div class="card-header card-header-action">
                        <div class="media align-items-center">

                            <div class="media-body">
                                <div class="text-capitalize font-weight-500 text-dark">Cours</div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-4 border-right pr-0">
                            <div class="pa-15">
                                <span class="d-block text-capitalize font-14">Formations</span>
                                <a href="{{url('formations/create')}}"><span
                                        class="d-block text-capitalize font-14">Ajouter</span></a>
                                <a href="{{url('formations')}}"><span
                                        class="d-block text-capitalize font-14">Gérer</span></a>
                                <a href="{{url('formateurs')}}"><span
                                        class="d-block text-capitalize font-14">formateurs</span></a>
                            </div>

                        </div>
                        <div class="col-4 border-right px-0">
                            <div class="pa-15">
                                <span class="d-block text-capitalize font-14">Classes</span>
                                <a href="{{url('courss/create')}}"><span
                                        class="d-block text-capitalize font-14">Ajouter</span></a>
                                <a href="{{url('courss')}}"><span
                                        class="d-block text-capitalize font-14">Gérer</span></a>
                                <a href="{{url('/calendrier')}}"><span class="d-block text-capitalize font-14">calendrier</span></a>
                            </div>
                        </div>
                        <div class="col-4  px-0">
                            <div class="pa-15">
                                <span class="d-block text-capitalize font-14">Aprenants</span>
                                <a href=""><span class="d-block text-capitalize font-14">Demandes</span></a>
                                <a href=""><span class="d-block text-capitalize font-14">Chifres</span></a>
                                <a href=""><span class="d-block text-capitalize font-14">calendrier</span></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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
                        <a href="#dem"><span class="d-block text-capitalize font-14">Demande</span></a>
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
</div>
<section id="stat">
    <div class="card p-2">
        <div class="d-flex mb-0 flex-wrap">
            <div class="btn-group btn-group-sm mb-15 mr-15" role="group">
                <button type="button" class="btn btn-outline-light">Messages <span class="text-primary">
                        23</span></button>
                <button type="button" class="btn btn-outline-light">Commantaires <span class="text-success">
                        63</span></button>
                <button type="button" class="btn btn-outline-light">Postes <span class="text-danger">
                        233</span></button>
                <button type="button" class="btn btn-outline-light">Formatios<span class="text-success"> 113</span>
                </button>
            </div>
            <button class="btn btn-sm btn-outline-primary btn-wth-icon icon-wthot-bg mb-15"><span
                    class="icon-label"><span class="feather-icon"><i data-feather="plus"></i></span> </span><span
                    class="btn-text">Article</span></button>
        </div>
    </div>
    <div class="card">
        
    </div>
</section>










 @endsection
