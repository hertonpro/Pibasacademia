@extends('layoutadmin')
@section('content')
<p class="text-center hk-title">
    <br>
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
<form method="post" action="/formations">
    <div class="form-group">
        @csrf
        <label for="name">Titre</label>
        <input type="text" class="form-control" name="titre" />
    </div>
    <div class="form-group">
        <label for="email">Resume</label>
        <input type="text" class="form-control" name="resume" />
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