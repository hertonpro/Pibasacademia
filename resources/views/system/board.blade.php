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
                            <span class="d-block display-5 text-dark mb-5">{{$user->count()}}</span>
                            <a href="{{url('clients')}}"><small class="d-block">Liste de membres</small></a>

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
                                <a href="{{url('/calendrier')}}"><span
                                        class="d-block text-capitalize font-14">calendrier</span></a>
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
        <h3 class="card-head">Statisique</h3>
        <div class="card-body ">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Company</th>
                                <th>Update</th>
                                <th>Budget</th>
                                <th>Tasks</th>
                                <th class="w-20">Status</th>
                                <th>Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Branding</td>
                                <td>Pineapple Inc</td>
                                <td>13 Nov 2018</td>
                                <td><span class="badge badge-soft-success">Completed</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>0</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left mnw-125p">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">95%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-success w-95" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>10 Nov 2018</td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>Gooole co.</td>
                                <td>30 Nov 2018</td>
                                <td><span class="badge badge-soft-primary">In Process</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>3</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left mnw-125p">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">70%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-primary w-70" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>13 Dec 2018</td>
                            </tr>
                            <tr>
                                <td>Collaterals</td>
                                <td>Big Energy</td>
                                <td>12 Nov 2018</td>
                                <td><span class="badge badge-soft-danger">Behind</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>14</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left mnw-125p">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">35%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-danger w-35" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>21 Oct 2018</td>
                            </tr>
                            <tr>
                                <td>Branding, Print</td>
                                <td>Novotel</td>
                                <td>10 Nov 2018</td>
                                <td><span class="badge badge-soft-primary">In process</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>6</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left mnw-125p">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">85%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-primary w-85" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>14 Nov 2018</td>
                            </tr>
                            <tr>
                                <td>Web Application</td>
                                <td>Folkswagan</td>
                                <td>12 Nov 2018</td>
                                <td><span class="badge badge-soft-danger">Behind</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>9</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">30%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-danger w-30" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>15 Oct 2018</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h3 class="card-head" id="formations">Formations</h3>
        <div class="card-body ">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>Titres</th>
                                <th><strong class="text)center">Cours</strong>
                                </th>
                                <th></th>
                                <th>Suivis</th>
                                <th class="w-20">Status</th>
                                <th>Deadline</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>date debut</th>
                                <th>date fin</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cours as $item)
                            @foreach ($formations as $itemformation)
                            @if ($item->formation==$itemformation->formation_id)

                            <tr>
                                <td>{{$itemformation->titre}}</td>
                                <td>{{date_create(substr($item->datecours, 1,9))->format('d/M/Y')}}</td>
                                <td>{{date_create(substr($item->datecours, 12,20))->format('d/M/Y')}}</td>
                                <td>
                                    @foreach ($suivre as $item)
                                    @if ($item->cours_id==$itemformation->formation_id)
                                    {{$item->count() ?? '0'}}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if (date_create(substr($item->datecours, 12,20))>=now())
                                    <span class="badge badge-soft-success">Completed</span></td>
                                @else

                                @endif
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>0</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left mnw-125p">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">95%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-success w-95" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @endforeach
                            <tr>
                                <td>Web Application</td>
                                <td>Folkswagan</td>
                                <td>12 Nov 2018</td>
                                <td><span class="badge badge-soft-danger">Behind</span></td>
                                <td><span class="d-flex align-items-center"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>9</span></span>
                                </td>
                                <td>
                                    <div class="progress-wrap lb-side-left">
                                        <div class="progress-lb-wrap">
                                            <label class="progress-label mnw-25p">30%</label>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar bg-danger w-30" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>15 Oct 2018</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <div id="dem" class="card p-3" id="upline">
            <h3 class="p-4">Liste de demande de retrait</h3>
            <div class="d-flex align-items-center card-action-wrap table-wrap">
                <table id="datable_1" class="table table-hover w-100 display pb-30">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>montant</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($retraits as $r)

                        @if(App\User::where('id', $r->pinCl)->firstOrfail()->montant > $r->montant )
                        <tr>
                            <td>
                                {{App\User::where('id', $r->pinCl)->firstOrfail()->name1.' '.App\User::where('id', $r->pinCl)->firstOrfail()->name2}}
                            </td>
                            <td>
                                ${{$r->montant}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('retraitV')}}" method="post" style="display: inline-block">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$r->id}}">
                                    <button class="btn btn-success btn-sm" type="submit">Valider</button>
                                </form>
                            </td>
                        </tr>
                        @else

                        <tr>
                            <td>
                                {{App\User::where('id', $r->pinCl)->firstOrfail()->name1.' '.App\User::where('id', $r->pinCl)->firstOrfail()->name2}}
                            </td>
                            <td>
                                ${{$r->montant}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('retraitV')}}" method="post" style="display: inline-block">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$r->id}}">
                                    <button class="btn btn-danger btn-sm" type="submit">Impossible</button>

                                </form>
                            </td>
                        </tr>

                        @endif
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>montant</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card p-3" id="upline">
            <h3 class="p-4">Liste de confirmation de retrait</h3>
            <div class="d-flex align-items-center card-action-wrap table-wrap">
                <table id="datable_1" class="table table-hover w-100 display pb-30">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>montant</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($retraits1 as $r1)
                        <tr>
                            <td>
                                {{App\User::where('id', $r1->pinCl)->firstOrfail()->name1.' '.App\User::where('id', $r1->pinCl)->firstOrfail()->name2}}
                            </td>
                            <td>
                                ${{$r1->montant}}
                            </td>
                            <td class="text-center">
                                <form action="{{ route('retraitC')}}" method="post" style="display: inline-block">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$r1->id}}">
                                    <input type="hidden" name="pinCl" value="{{$r1->pinCl}}">
                                    <input type="hidden" name="montant" value="{{$r1->montant}}">
                                    <button class="btn btn-primary btn-sm" type="submit">Confirmer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>montant</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</section>

<!-- contents -->
@endsection