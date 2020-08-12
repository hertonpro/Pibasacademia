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
                                <span class="badge badge-primary  badge-sm">Iron</span>
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">{{Auth::user()->montant}} $</span>
                            <small class="d-block">85 Downline</small>
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
                            <span class="d-block display-5 text-dark mb-5">3</span>
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
                            <small class="d-block">80 Downline</small>
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
                <div class="col-sm-5 card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Anglais</h5>
                        <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of
                            lorem ipsum knock offs
                            featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
                    </div>
                    <a href="formation" class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                            class="btn-text">Suivre la formation</span></a>
                    <div class="card-footer justify-content-between">
                        <div>
                            <a href="#"><i class="ion ion-md-heart text-primary"></i> 30 Personnes</a>
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
                <div class="col-sm-5 card m-2">
                    <div class="card-body ">
                        <h5 class="card-title">Anglais</h5>
                        <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of
                            lorem ipsum knock offs
                            featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
                    </div>
                    <a href="#" class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                            class="btn-text">Suivre
                            la formation</span></a>
                    <div class="card-footer justify-content-between">
                        <div>
                            <a href="#"><i class="ion ion-md-heart text-primary"></i> 30 Personnes</a>
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
                <div class="col-sm-5 card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Anglais</h5>
                        <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of
                            lorem ipsum knock offs
                            featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
                    </div>
                    <a href="#" class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                            class="btn-text">Suivre
                            la formation</span></a>
                    <div class="card-footer justify-content-between">
                        <div>
                            <a href="#"><i class="ion ion-md-heart text-primary"></i> 30 Personnes</a>
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
            </div>


        </div>
        <div class="card p-3" id="upline">
            <h3 class="p-4">Liste Downline</h3>
            <div class="d-flex align-items-center card-action-wrap table-wrap">
                <table id="datable_1" class="table table-hover w-100 display pb-30">
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </tfoot>
                </table>
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
                        <form action="{{ url('/users') }}" >
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
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Felisitation</strong> Votre demande a été envoyer!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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