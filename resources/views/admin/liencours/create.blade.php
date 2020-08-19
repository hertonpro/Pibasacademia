@extends('layoutadmin')
@section('content')
<br>
<a href="{{ url('/liencours/create') }}" class="btn btn-gradient-info">Ajouter</a>
<a href="{{ url('/liencours') }}" class="btn btn-gradient-info">Liste</a>
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
                                <form method="post" action="{{url('/liencours')}}">
                                            <div class="form-group">
                                                @csrf
                                                <label for="name">Cours</label>
                                                <select class="form-control" name="cours" id="">
                                                <option selected> choisir le cours</option>
                                                @foreach ($lien as $item)
                                                <option value="{{$item->formation_id}}">{{$item->titre}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" id="">

                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="lien">Lien</label>
                                                <input type="text" class="form-control" id="lien" name="link"/>
                                            </div>

    <button type="submit" class="btn btn-block btn-danger">Enregister</button>
</form>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
@endsection
