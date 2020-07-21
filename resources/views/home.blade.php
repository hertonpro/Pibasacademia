<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}


<head>


<body>
    @include('menuinclude')
    <!-- Main Content -->
    <div class="hk-pg-wrapper">

        <!-- Container -->
        <div class="container-fluid">

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="container mt-sm-60 mt-30">
                        <div class="hk-row">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <div class="user-activity">
                                        <div class="media">
                                            <div class="media-img-wrap">
                                                <div class="avatar avatar-sm">
                                                    <img src="dist/img/avatar4.jpg" alt="Pibas" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-wrap">
                                                            <img class="d-86 rounded mb-15 mr-15" src="dist/img/img-Pibas1.jpg" alt="Pibas">
                                                            <div class="w-65">
                                                                <h6 class="mb-5">PRESENTATION DU SYSTEME :</h6>
                                                                <p>Contrairement au fonctionnement d’autres académies, le programme qu’utilise
                                                                    <strong> <a href="{{ url('/blog') }}">
                                                                        PiBas ACADEMIA
                                                                     </a></strong>
                                                                     a été initié dans la cadre de la lutte contre le chômage, contre la pauvreté mais aussi dans le cadre de renforcement de capacité des jeunes à pouvoir affronter les situations difficiles de la vie financière ainsi que professionnelle.
                                                                    Ayant constaté que le taux de chômage a atteint un niveau considérablement plus élevé en République Démocratique du Congo, il y a urgence. Il est donc important de lutter contre le chômage en dotant à la population, non seulement d’une connaissance aux programmes de base dont le monde professionnel a besoin (tels que l’anglais, l’informatique et l’entrepreneuriat), mais aussi et surtout de doter à cette population formée d’une occupation dont elle peut vivre parce qu’elle rémunère, ainsi que d’une possibilité d’avoir un prêt d’argent remboursable pouvant leur permettre de marier leurs connaissances à la pratique.
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted justify-content-between">
                                                        <div><span class="text-dark">7,120</span> Members (87 new)</div>
                                                        <button class="btn btn-xs btn-primary ml-15 w-sm-100p">join</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                <P> </P>
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


