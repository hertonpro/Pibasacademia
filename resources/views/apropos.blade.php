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
                            <div class="col-xl-4">
                                <div class="card">
                                    <h6 class="card-header">
                                        Category
                                    </h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center active">
                                            <i class="ion ion-md-sunny mr-15"></i>Terms & conditions<span class="badge badge-light badge-pill ml-15">06</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-unlock mr-15"></i>Privacy policy<span class="badge badge-light badge-pill ml-15">14</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-bookmark mr-15"></i>Terms d utilisation  <span class="badge badge-light badge-pill ml-15">10</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="ion ion-md-filing mr-15"></i>Documentation<span class="badge badge-light badge-pill ml-15">27</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card card-lg">
                                    <h3 class="card-header border-bottom-0">
                                        Terms and Conditions
                                    </h3>
                                    <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between activestate">
                                                <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">The Intellectual Property</a>
                                            </div>
                                            <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                                <div class="card-body pa-15">The Intellectual Property disclosure will inform users that the contents, logo and other visual media you created is your property and is protected by copyright laws.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Termination clause</a>
                                            </div>
                                            <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">A Termination clause will inform that users’ accounts on your website and mobile app or users’ access to your website and mobile (if users can’t have an account with you) can be terminated in case of abuses or at your sole discretion.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Governing Law</a>
                                            </div>
                                            <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">A Governing Law will inform users which laws govern the agreement. This should the country in which your company is headquartered or the country from which you operate your website and mobile app.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Limit what users can do</a>
                                            </div>
                                            <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">A Limit What Users Can Do clause can inform users that by agreeing to ulisateurs your service, they’re also agreeing to not do certain things. This can be part of a very long and thorough list in your Terms and Conditions agreements so as to encompass the most amount of negative uses.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Limitation of liability of your products</a>
                                            </div>
                                            <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">No matter what kind of goods you sell, best practices direct you to present any warranties you are disclaiming and liabilities you are limiting in a way that your customers will notice.</div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">How to enforce Terms and Conditions</a>
                                            </div>
                                            <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                                <div class="card-body pa-15">While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms
                                                    and Conditions enforceable. You should always utilis clickwrap to get users to agree to your Terms and Conditions. Clickwrap is when you make your users take some action – typically clicking something – to show they’re agreeing. Here’s how Engine Yard uses the clickwrap agreement with the I agree check box:</div>
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

