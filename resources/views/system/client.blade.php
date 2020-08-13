<div class="hk-row">
    <div class="col-lg-8">
        <div class="hk-row">
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Parrainage</span>
                            </div>
                            <div>
                                <span class="badge badge-primary  badge-sm">Parrainage</span>
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">{{Auth::user()->montant}} $</span>
                            <small class="d-block">Parrainage</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Formation en
                                    attente</span>
                            </div>
                            <div>
                                <span class="badge badge-primary   badge-sm">Info</span>
                                <span class="badge badge-danger   badge-sm">En</span>
                                <span class="badge badge-success   badge-sm">Bus</span>
                            </div>
                        </div>
                        <div>
                        <span class="d-block display-5 text-dark mb-5">2</span>
                            <small class="d-block">50 Personnes déjà inscrites</small>
                        </div>
                    </div>
                </div>
            </div>
            {{-- calule de nombre des PC  --}}
            @php
            $nontant=intval(Auth::user()->montant);
            $pc= $nontant/80;
            @endphp
            {{-- calule de nombre des PC  --}}
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Cicles</span>
                            </div>
                            <div>
                                <span class="badge badge-primary  badge-sm"></span>
                            </div>
                        </div>


                        <div>
                            <span class="d-block display-5 text-dark mb-5">{{intval($pc)}} Pc</span>
                            <small class="d-block">80 clicles</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <span class="d-block font-15 text-dark font-weight-500">Bonus</span>
                            </div>
                            <div>
                                <span class="badge badge-warning  badge-sm">0%</span>
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">$0</span>
                            <small class="d-block">bonus</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-2">
            <h3 class="tiles text-center ">Les formations disponibles</h3>
            <div class="hk-row">

                @foreach ($formations as $itemform)
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 card ">
                    <div id="cad-tittle">
                        <h4>
                            <a href="{{ url('forma', $itemform->formation_id)}}">
                            {{-- <a href="{{ route('formation', $formati->formation_id)}}"> --}}
                                <span class="badge badge-success badge-outline mt-15 mr-10">
                                {{' '.$itemform->titre}}
                            </span>
                            </a>
                        </h4>
                    </div>
                    <div class="card-body c">
                        <p class="card-text">
                            {{$itemform->resume}}
                        .</p>
                    </div>

                    <a href="{{ url('forma', $itemform->formation_id)}}" class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                            class="btn-text">Voir la formation</span></a>
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
        <div class="card hk-row" id="upline">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 card ">
                <h3 class="card-tittle text-center">Liste des utilisateurs</h3>
                <div class="card-body table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Téle</th>
                                <th>Bonus</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($countclients as $client)
                            <tr>
                                <td>{{$client->name1.'  '.$client->name2}}</td>
                                <td>{{$client->pin}}</td>
                                <td>{{$client->numTel}}</td>
                                <td>{{$client->montant}}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <a class="text-danger" href=""><i data-feather="trash-2"></i></a>
                                            <a class="text-warning" href=""><i data-feather="edit"></i></a>
                                            <a class="text-success" href=""><i data-feather="eye"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Téle</th>
                                <th>Bonus</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
         </div>
         </div>

    <div class="col-lg-4">
        <div class="card card-profile-feed">
            <div class="card-header card-header-action">
                <div class="media align-items-center">
                    <div class="media-body">
                        <div class="text-capitalize font-weight-500 text-dark">Transation</div>
                        <div class="font-13 text-success">Faire un retrait sur votre compte</div>
                        <form action="{{ url('/retrait') }}" method="post">
                            <input class="form-control hideen" placeholder="First name"
                                    name="user" value="{{Auth::user()->pin}}" type="hidden" required>
                            <div class="visible">
                                <select class="form-control custom-select  mt-15">
                                    <option selected>Select</option>
                                    <option value="1">10$</option>
                                    <option value="2">20$</option>
                                    <option value="3">30$</option>
                                </select></div>
                            <div class="visible"><button class="btn btn-success btn-block " type="submit">Commander</button></div>

                        </form>
                    </div>
                </div>

            </div>
            <div class="row text-center">


            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span><i
                            class="ion ion-md-calendar font-18 text-light-20 mr-10"></i><span>Went
                            to:</span></span><span class="ml-5 text-dark">Oh, Canada</span></li>
                <li class="list-group-item"><span><i
                            class="ion ion-md-briefcase font-18 text-light-20 mr-10"></i><span>Worked
                            at:</span></span><span class="ml-5 text-dark">Companey</span></li>
                <li class="list-group-item"><span><i class="ion ion-md-home font-18 text-light-20 mr-10"></i><span>Lives
                            in:</span></span><span class="ml-5 text-dark">San Francisco, CA</span></li>
                <li class="list-group-item"><span><i
                            class="ion ion-md-pin font-18 text-light-20 mr-10"></i><span>From:</span></span><span
                        class="ml-5 text-dark">Settle, WA</span></li>
            </ul>
        </div>
        <div class="card bg-primary text-center border-0">
            <div class="twitter-slider-wrap card-body">
                <div class="twitter-icon text-center mb-15">
                    <i class="fa fa-twitter"></i>
                </div>
                <div id="tweets_fetch" class="owl-carousel owl-theme"></div>
            </div>
        </div>
    </div>
</div>
