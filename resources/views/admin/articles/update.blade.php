@extends('layoutadmin')
@section('content')
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/articles/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/articles') }}" class="btn btn-gradient-info">Liste</a>
                            </p>
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
                                    <form action="/articles" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                    <div  class="row">
                                                        <div class="col-sm">
                                                            <input type="file" id="input-file-now" class="dropify" name="img"  @error('img') is-invalid @enderror" id="validateCustomFile"  />
                                                        </div>
                                                    </div>
                                                    @error('img')
                                                        <div class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon1">Titre</span>
                                                    </div>
                                                    <input type="text" class="form-control @error('titre') is-invalid @enderror" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" name="titre" >
                                                    @error('titre')
                                                        <div class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <div class="">
                                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" ></textarea>
                                                    @error('content')
                                                        <div class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Enregister </button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
