@extends('layoutadmin')
@section('content')

                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/liencourss/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/liencourss') }}" class="btn btn-gradient-info">Liste</a>
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
                                <form method="post" action="/liencours/{{ $lien->liencours_id}}">
                                    @csrf
                                        @method('PATCH')
                                    <div class="form-group">

                                        <label for="name">Cours</label>
                                        <select class="form-control" name="cours" id="">
                                        <option selected> choisir le cours</option>
                                        @foreach ($formation as $item)
                                        @if ($item->formation_id==$lien->cours )
                                        <option value="{{$item->formation_id}}" selected>{{$item->titre}}</option>
                                        @else
                                        <option value="{{$item->formation_id}}">{{$item->titre}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    </div>
                                     <div class="form-group">
                                        <label for="resume">Lien</label>
                                        <input type="texte" class="form-control" name="link" value="{{ $lien->link }}"/>
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
