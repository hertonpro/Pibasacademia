@extends('layoutadmin')
@section('content')
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/courss/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/courss') }}" class="btn btn-gradient-info">Liste</a>
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
                                <form method="post" action="/courss/{{ $courss->cours_id}}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="name">Formateur</label>

                                            <select name="formation" class="form-control">

                                                @foreach ($users as $itemuser)
                                                @if ($itemuser->id==$courss->formateur)
                                                    <option value="{{ $itemuser->id}}" selected>{{ $item->name}}</option>
                                                @else
                                                    <option value="{{ $itemuser->id}}">{{ $item->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="debut">date debut et fin</label>
                                            <input class="form-control" type="text" name="datecours" value="{{$courss->datecours}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Formateur</label>

                                            <select name="formation" class="form-control">
                                                @foreach ($formations as $item)
                                                @if ($item->formation_id==$courss->formation)
                                                    <option value="{{ $item->formation_id}}" selected>{{ $item->titre}}</option>
                                                @else
                                                    <option value="{{ $item->formation_id}}">{{ $item->titre}}</option>
                                                @endif
                                                @endforeach
                                            </select>
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
