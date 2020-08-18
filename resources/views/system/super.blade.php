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
                            <span class="d-block display-5 text-dark mb-5">{{$countclients->count()}}</span>
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
                                {{-- <span class="badge badge-primary   badge-sm">Info</span>
                                <span class="badge badge-danger   badge-sm">En</span>
                                <span class="badge badge-success   badge-sm">Bus</span> --}}
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">{{$countclients->count()*100}} $</span>
                            <small class="d-block">{{$countclients->count()}} Membres enregistrés</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card p-2">
            <h3 class="tiles text-center p-3">Les formations disponibles</h3>
            <div class="hk-row">
                @foreach ($formations as $itemform)
                <div class="col-md-2 col-lg-6 col-sm-6 col-xs-6 ">
                    <div id="cad-tittle">
                        
                            <a href="{{ url('forma', $itemform->formation_id)}}">
                            <h4 class="text-success">
                                {{' '.$itemform->titre}}
                            </h4>
                            </a>
                        
                    </div>
                    <div class="card-body c">
                        <p class="card-text">
                            {{$itemform->resume}}
                        .</p>
                    </div>

                    <a href="{{ url('forma', $itemform->formation_id)}}" class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                            class="btn-text">Voir la formation</span></a><br><br>
                    <div class="card-footer justify-content-between">
                        <div>
                            <a href="#"><i class="ion ion-md-heart text-primary"></i> 30 Inscrits</a>
                        </div>
                        <div>
                            <div>
                                <span class="badge badge-primary  badge-sm">Debut le 24.02.2020</span>
                            </div>
                            <div>
                                <span class="badge badge-danger  badge-sm">Fin le 25.03.2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
        <div class="card col-md-12 col-lg-12 col-sm-12 col-xs-12" id="upline">
            <h3 class="p-4">Liste  de membres parainés</h3>
            <div class="">
                <table id="datable_1" class="table table-hover  display">
                    <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($countclients as $itemurses)
                        <tr>
                            <td>{{$itemurses->name1.' - '.$itemurses->name2 }}</td>
                                @if ($itemurses->role=='0')
                                    <td><span class="badge badge-danger">Client</span> </td>
                                @elseif($itemurses->role=='1')
                                    <td><span class="badge badge-info">Super adminimistrateur</span> </td>
                                @elseif($itemurses->role=='2')
                                    <td><span class="badge badge-success">Administrateur</span> </td>
                                @elseif($itemurses->role=='3')
                                    <td><span class="badge badge-danger">Associé</span> </td>
                                @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom complet</th>
                            <th>Type</th>
                        </tr>
                    </tfoot>
                </table><br>
            </div>
        </div>


    </div>

    <div class="col-lg-4">
<a href="board" class="btn btn-info btn-block"> Page d'administration</a>
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
                        <a href=""><span class="d-block text-capitalize font-14">Demande</span></a>
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
