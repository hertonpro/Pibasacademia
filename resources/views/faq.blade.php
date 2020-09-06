@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title mb-25">Questions posées</h5>
                        <div class="row">
                            <div class="col-sm">
                                <div class="accordion accordion-type-2" id="accordion_2">
                                    <div class="card">
                                        <div class="card-title">
                                            <p class="text-justify">
                                            La synthèse des questions posées de manière récurrente sur <a href="{{url('/')}}"> Pibas Academia </a>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="card">


                                        <div class="card-header d-flex justify-content-between activestate">
                                            <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Collapse One</a>
                                        </div>
                                        <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                            <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Collapse Two</a>
                                        </div>
                                        <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Collapse Three</a>
                                        </div>
                                        <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Collapse Four</a>
                                        </div>
                                        <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                            <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-wrap mt-40">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="w-35">Class</th>
                                                <th class="w-65">Values</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code class="pa-0 bg-transparent">class="accordion accordion-type-2 accordion-[value]"</code></td>
                                                <td class="font-14">primary / success / warning / danger / info / light / dark / red / green / pink / purple / violet / indigo / blue / sky / cyan / teal / neon / lime / sun / yellow / orange / pumpkin / brown / grey / gold / smoke</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="col-xl-8">
                        <div class="card card-lg">
                            @foreach($faqe as $itemfaq)
                                @foreach($categorie as $itemcategorie)
                                    @if($itemfaq->faq_id==$itemcategorie->descfaq_id)
                                     <h3 class="card-header border-bottom-0">
                                        {{$itemcategorie->description}}
                                     </h3>
                                     @endif
                                @endforeach
                                    <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                 @foreach($categorie as $itemcategorie )
                                      @if($itemfaq->faq_id==$itemcategorie->descfaq_id)

                                        <div class="card">
                                        <div class="card-header d-flex justify-content-between ">
                                            <a role="button" data-toggle="collapse" href="#collapse_1i{{$itemfaq->faq_id}}"
                                                aria-expanded="true">{{$itemfaq->question}}</a>
                                        </div>
                                        <div id="collapse_1i{{$itemfaq->faq_id}}" class="collapse show" data-parent="#accordion_2"
                                            role="tabpanel">
                                            <div class="card-body pa-15">{{$itemfaq->reponse}}.</div>
                                        </div>
                                    </div>

                                @endif
                                @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>


@endsection
