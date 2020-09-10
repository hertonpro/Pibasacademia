<!-- Profil -->
<div class="profile-cover-wrap overlay-wrap">
    <div class="profile-cover-img" style="background-image:url({{url('dist/img/trans-bg.jpg')}})"></div>
    <div class="bg-overlay bg-trans-dark-60"></div>
    <div class="container profile-cover-content py-50">
        <div class="hk-row">
            <div class="col-lg-6">
                <div class="media align-items-center">
                    <div class="media-img-wrap ha d-flex">
                        <div class="avatar view overlay">
                            @if(App\Profile::where('user_id', Auth::user()->id)->exists())
                            <div class=" avatar-img rounded-circle"
                                style="text-align: center;background-image: url('{{ asset('profilesImg/'.App\profile::where('user_id', Auth::user()->id)->firstOrfail()->img) }}');background-size: 100%;"
                                alt="user">
                            </div>
                            @else
                            <div class=" avatar-img rounded-circle"
                                style="text-align: center;background-image: url('{{ asset('profilesImg/0000.png') }}');background-size: 100%;"
                                alt="user">
                            </div>

                            @endif

                        </div>

                    </div>

                    <div class="media-body">
                        <div class="text-white text-capitalize display-6 mb-5 font-weight-400">
                            {{Auth::user()->name1.' '.Auth::user()->name2}}</div>
                        <div class="font-14 text-white"><span class="mr-5"><span
                                    class="font-weight-500 pr-5">Matricule</span><span
                                    class="mr-5">{{Auth::user()->pin}}</span></span></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="button-list">
                    <a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span
                            class="btn-text">Message {{Auth::user()->role}}</span><span class="icon-label"><i
                                class="icon ion-md-mail"></i>
                        </span></a>
                </div>
            </div>
        </div>
    </div>
</div>