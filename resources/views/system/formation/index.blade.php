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
                                <span class="d-block font-15 text-dark font-weight-500">N Transation</span>
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

        <div class="card p-3" id="upline">
            <h3 class="p-4">Liste des transactions</h3>
            <div class="d-flex align-items-center card-action-wrap table-wrap">
                <table id="datable_1" class="table table-hover w-100 display pb-30">
                    <thead>
                        <tr>
                            <th>Catégirie</th>
                            <th>Date</th>
                            <th>Formateur</th>
                            <th>Etudiants</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Anglais</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Francais</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>20.02.2022-05.06.2020</td>
                            <td>Agasha Maregeko</td>
                            <td>54</td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Catégirie</th>
                            <th>Date</th>
                            <th>Formateur</th>
                            <th>Etudiants</th>
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