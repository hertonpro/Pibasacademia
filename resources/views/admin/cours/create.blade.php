@extends('layoutadmin')
@section('content')
<p class="text-center hk-title">
    <br>
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
<form method="post" action="/courss">
    @csrf
    <div class="form-group">
        <label for="name">Formater</label>

        <select name="formateur" class="form-control">
            <option value="00" selected>
                choisir le Formateur
            </option>
            @foreach ($users->where('role','4') as $formateur)
            <option value="{{ $formateur->id}}">{{ $formateur->name1}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="debut">date debut et fin</label>
        <input class="form-control" type="text" id="debut" name="datecours" value="01/08/2020 - 01/15/2022">
    </div>
    <div class="form-group">
        <label for="name">Formation</label>

        <select name="formation" class="form-control">
            <option value="00">choisir la formation</option>
            @foreach ($formations as $item)
            <option value="{{ $item->formation_id}}">{{ $item->titre}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-block btn-danger">Enregister</button>
</form>


@endsection