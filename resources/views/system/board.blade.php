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
        <h3 class="card-head">Articles </h3>
            <div class="card-body ">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>image</th>
                                    <th>titre</th>
                                    <th>Créer</th>
                                    <th>Mise à jour </th>
                                    <th>Etat</th>
                                    <th class="w-20">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $itemarticles)
                                    <tr>
                                        <td><img src="{{ asset('storage/'.$itemarticles->img) }}" class="avatar-img rounded d-40"></td>
                                        <td>{{$itemarticles->titre}}</td>
                                        <td>{{$itemarticles->created_at->format('d-M-Y')}}</td>
                                        <td>{{$itemarticles->updated_at->format('d-M-Y')}}</td>
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
                                        <td class="text-center">
                                            <a href="articles/{{ $articles->id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <form action="articles/delete/{{ $articles->id }}"  style="display: inline-block">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-remove" ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



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
                    <div class="d-flex align-items-center card-action-wrap table-wrap">
                        <table id="datable_1" class="table table-hover ">
                           <thead>
                                <tr>
                                    <th>Cours</th>
                                    <th >
                                        <strong class="text-center">date</strong>
                                    </th>
                                    <th>Formateurs</th>
                                    <th class="w-20">Status</th>
                                    <th>Etudiants</th>
                                </tr>

                            </thead>
                                @foreach ($cours  as $itemcours)
                                <tr>
                                    @foreach ($formations  as $itemformat)
                                        @if ($itemcours->formation==$itemformat->formation_id)
                                        <td>{{$itemformat->titre}}</td>
                                        <td>{{date_create(substr($itemcours->datecours,1,9))->format('d/M/Y')
                                            .'-'.
                                            date_create(substr($itemcours->datecours, 12,20))->format('d/M/Y')}}
                                        </td>
                                        @foreach ($users as $itemclient)
                                            @if ($itemclient->id==$itemcours->formateur)
                                                @if($itemcours->formateur=='00' || $itemcours->formateur=='')
                                                <td>Aucun</td>
                                                @else
                                                <td>{{$itemclient->name1.' - '.$itemclient->name2}}</td>
                                                @endif
                                            @endif
                                        @endforeach

                                        @endif


                                    @endforeach
                                    @foreach ($suivres as $itemuivre)
                                    @if ($itemuivre->count()==0)
                                    <td>
                                        <div class="progress-wrap lb-side-left">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mnw-25p">{{$itemuivre->count()*2}}%</label>
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar bg-danger w-{{$itemuivre->count()*2}}" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-danger">0</span></td>
                                     @elseif($itemuivre->count()>=0 && $itemuivre->count()<=50 )
                                        @if ($itemuivre->count()>25)
                                            <td>
                                                <div class="progress-wrap lb-side-left">
                                                    <div class="progress-lb-wrap">
                                                        <label class="progress-label mnw-25p">{{$itemuivre->count()*2}}%</label>
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-{{$itemuivre->count()*2}}" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                             <td><span class="badge badge-soft-danger"><i
                                                class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i>{{$itemuivre->count()}}</span></td>
                                        @else
                                        <td>
                                            <div class="progress-wrap lb-side-left">
                                                <div class="progress-lb-wrap">
                                                    <label class="progress-label mnw-25p">{{$itemuivre->count()*2}}%</label>
                                                    <div class="progress progress-bar-xs">
                                                        <div class="progress-bar bg-danger w-{{$itemuivre->count()*2}}" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-soft-info"><i
                                            class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i>{{$itemuivre->count()}}</span></td>
                                        @endif
                                    @elseif($itemuivre->count()==50)
                                    <td>
                                        <div class="progress-wrap lb-side-left">
                                            <div class="progress-lb-wrap">
                                                <label class="progress-label mnw-25p">{{$itemuivre->count()*2}}%</label>
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar bg-danger w-{{$itemuivre->count()*2}}" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-success"><i
                                        class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i>{{$itemuivre->count()}}</span></td>
                                     @endif
                                    @endforeach
                                    @if (date_create(substr($itemcours->datecours, 1,9))>=now())
                                    <td><span class="badge badge-soft-success">complet</span></td>
                                    @elseif(date_create(substr($itemcours->datecours, 10,20))>=now() )
                                        <td><span class="badge badge-soft-danger">Encours</span></td>
                                    @elseif(date_create(substr($itemcours->datecours, 10,20))>=now())
                                    <td><span class="badge badge-soft-info">Encours</span></td>
                                    @endif

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="card p-2">
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


@endsection

