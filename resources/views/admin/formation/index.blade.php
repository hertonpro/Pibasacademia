@extends('layoutadmin')
@section('content')
<p class="text-center hk-title">
    <br>
    <a href="{{ url('/formations/create') }}" class="btn btn-gradient-info">Ajouter</a>
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
<div class="table-wrap">
    <div class="table-responsive">
        <table class="table mb-0">
            {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
            <thead>
                <tr class="table-light">
                    <td>N°</td>
                    <td>Titre</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody> @php
                $i=1;
                @endphp

                @foreach($formations as $formations)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$formations->titre}}</td>
                    <td class="text-center">
                        <a href="{{ route('formations.edit', $formations->formation_id)}}"
                            class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('formations.destroy',  $formations->formation_id )}}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>

                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="table-dark">
                    <td>N°</td>
                    <td>Titre</td>
                    <td class="text-center">Action</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

</section>
</div>
</div>
</div>
@endsection