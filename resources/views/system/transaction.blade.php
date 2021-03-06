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
