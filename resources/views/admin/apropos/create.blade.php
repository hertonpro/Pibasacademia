@extends('layoutadmin')

@section('content')
                 <!-- Title -->
                 <div class="hk-pg-header">
                     <h4 class="hk-pg-title"><span class="pg-title-icon">
                         <span class="feather-icon"><i data-feather="external-link">
                             </i></span></span>Apropos du pied de page</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        {{-- <p class="pull-right hk-title">
                            {{-- PiBas Marketing <br> --}}
                                {{-- <a href="{{ url('/aproposs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/aproposs') }}" class="btn btn-gradient-info">Liste</a>
                            </p>  --}}
                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div><br />
                                @endif

                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div><br />
                                @endif

                                    <div class="card-body">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                        @endif
                                    </div>
                                        <form method="post" action="/aproposs">
                                            <div class="form-group">
                                                @csrf
                                                <p for="password" class="text-center">Description</p>
                                                <div class="col-sm">
                                                    <div class="tinymce-wrap">
                                                        <textarea class="tinymce" name="password"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-danger">Create User</button>
                                        </form>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
