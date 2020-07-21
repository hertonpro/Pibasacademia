<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('headclient');
{{-- fin entete de page  --}}


<head>


<body>
    @include('menuinclude');
    <!-- Main Content -->
    <div class="hk-pg-wrapper">

        <!-- Container -->
        <div class="container-fluid">

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="container mt-sm-60 mt-30">
                        <div class="hk-row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <h6 class="card-header">
                                        Category
                                    </h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center active">
                                            <i class="ion ion-md-sunny mr-15"></i>Termes et conditions<span class="badge badge-light badge-pill ml-15">06</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-unlock mr-15"></i>modalités<span class="badge badge-light badge-pill ml-15">01</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-bookmark mr-15"></i>Garanties<span class="badge badge-light badge-pill ml-15">01</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-filing mr-15"></i>Fonctionnement<span class="badge badge-light badge-pill ml-15">01</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card card-lg">
                                    <h3 class="card-header border-bottom-0">
                                        Termes and Conditions
                                    </h3>
                                    <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between activestate">
                                                <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Pourquoi choisir PiBas Academia ?</a>
                                            </div>
                                            <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                                <div class="card-body pa-15">Parce que nous sommes les meilleurs, nous avons des solutions au problème majeur qui touche la population : Le chômage. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">En quoi sommes-nous les meilleurs ?</a>
                                            </div>
                                            <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">	Parce que nous vous offrons plus que ce que vous méritez (nous n’avons pas vos dettes mais vous avez les nôtres). Nous sommes pratiques, nos intérêts ne sont pas illusoires et ils sont retirés à tout moment voulu par les requérants, nous avons les services certifiés par le gouvernement, nous sommes connus. Comparez ces éléments avec d’autres plates-formes vous en jugerez de vous-même.  </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Qui sommes-nous en bref?</a>
                                            </div>
                                            <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">	Nous sommes un centre d’excellence luttant contre le chômage en formant les gens aux programmes de base pouvant leur permettre d’accéder au marché de l’emploi (tout cela pendant 2 mois), des formation en anglais informatique et entrepreneuriat, les proposons sur le marché de l’emploi, nous les donnons du travaille pendant qu’ils sont formés chez nous, enfin nous leur donnons un prêt d’argent pouvant leur permettre d’entreprendre.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">	Tout le monde capable de travailler, si disposant d’une capacité intellectuelle suffisante, et si besoin d’avoir non seulement la connaissance mais aussi un travailleur rémunérateur.
                                                    (Donc, chômeurs, retraités, travailleurs,… tout celui qui cerce à travailler.</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    <!-- /Main Content -->

            @include('footer')

