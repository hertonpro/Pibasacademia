@extends('layoutadmin')
@section('content')
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/formations/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/formations') }}" class="btn btn-gradient-info">Liste</a>
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
                                <form method="post" action="/formations/{{ $formation->formation_id}}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="name">Titre</label>
                                        <input type="text" class="form-control" name="titre" value="{{ $formation->titre }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="resume">Resume</label>
                                        <input type="texte" class="form-control" name="resume" value="{{ $formation->resume }}"/>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-danger">Modifier</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        @endsection
