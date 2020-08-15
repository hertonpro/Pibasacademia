@extends('layoutadmin')

@section('content')

<!-- contents -->
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
                            <span class="d-block display-5 text-dark mb-5">2548</span>
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
                                {{-- <span class="badge badge-primary   badge-sm">Info</span>
                                <span class="badge badge-danger   badge-sm">En</span>
                                <span class="badge badge-success   badge-sm">Bus</span> --}}
                            </div>
                        </div>
                        <div>
                            <span class="d-block display-5 text-dark mb-5">52471$</span>
                            <small class="d-block">50 Membres enregistrés</small>
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
</div><!-- contents -->
@endsection