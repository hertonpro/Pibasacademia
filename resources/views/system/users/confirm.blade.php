@extends('layoutadmin')

@section('content')

<!-- contents -->
<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper hk-invoice-wrap pa-35">
            <div class="invoice-from-wrap">
                <div class="row">
                    <div class="col-md-7 mb-20">
                        <img class="img-fluid invoice-brand-img d-block w-100p mb-20" src="dist/img/invoice-logo.png"
                            alt="brand" />
                        <h6 class="mb-5">Identite</h6>
                        <address>
                            <span class="d-block">Nom: {{ $pp->name1.' '.$pp->name2 }}</span>
                            <span class="d-block">Matricule: {{ $pp->pin }}</span>
                            <span class="d-block">NN Phone: +243 {{ $pp->numTel }}</span>
                            <span class="d-block">Adresse mail: {{ $pp->email }}</span>
                        </address>
                    </div>
                    <div class="col-md-5 mb-20">
                        <h4 class="mb-35 font-weight-600">Confirmation / Recu</h4>
                        <span class="d-block">Date:<span class="pl-10 text-dark">{{ date("d/m/Y H:i") }}</span></span>
                        <span class="d-block">NN recu<span class="pl-10 text-dark">GT-5588</span></span>

                    </div>
                </div>
            </div>
            <hr class="mt-0">
            <h5>Informations client</h5>
            <hr>
            <div class="invoice-details">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-striped table-border mb-0">
                            <tbody>
                                <tr>
                                    <td class="w-70">Username :</td>
                                    <td class="text-right">{{ $pp->email }}</td>
                                </tr>
                                <tr>
                                    <td class="w-70">Password :</td>
                                    <td class="text-right">{{ $password1 }}</td>

                                </tr>
                                <tr>
                                    <td class="w-70">Pin parrain :</td>
                                    <td class="text-right">{{ $pp->parrain }}</td>
                                </tr>
                                <tr>
                                    <td class="w-70">montant paye :</td>
                                    <td class="text-right">$100</td>
                                </tr>
                            </tbody>
                            <tfoot class="border-bottom border-1">
                                <tr>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="invoice-sign-wrap text-right py-60">
                    <img class="img-fluid d-inline-block" src="dist/img/signature.png" alt="sign" />
                    <span class="d-block text-light font-14">Academia</span>
                </div>
                <form action="{{ url('/users') }}" method="post">
                    <div class="form-group">
                        <input value="{{ $pp->id }}" name="confirm" type="hidden">
                    </div>
                    <a class="btn .bg-success btn-block .text-white" type="submit">Imprimer</a>
                </form>
            </div>
            <hr>
            <ul class="invoice-terms-wrap font-14 list-ul">
                <li>Herton.Pro</li>
                <li>ACADEMIA</li>
            </ul>
        </section>
    </div>
</div>
<!-- contents -->
@endsection