@extends('layoutadmin')
@section('content')
<p class="text-center hk-title">
    <br>
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
<div class="table-wrap">
    <table id="datable_3" class="table table-hover >
                {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
                    <thead>
                        <tr class=" table-warning">
        <td>N°</td>
        <td>Titre</td>
        <td>Resume</td>
        <td class="text-center">Action</td>
        </tr>
        </thead>
        <tbody>
            @php
            $i=1;
            @endphp

            @foreach($courss as $courss)
            <tr>
                @php
                $courss->formation_id;

                @endphp

                <td>{{$i++}}</td>
                <td>{{$courss->datecours}}</td>
                <td>@foreach ($formations as $itemfon)
                    @if ($itemfon->formation_id==$courss->formation)
                    {{$itemfon->titre}}
                    @endif
                    @endforeach
                    {{$courss->resume}}</td>
                <td class="text-center">
                    <a href="{{ route('courss.edit', $courss->cours_id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('courss.destroy',  $courss->cours_id )}}" method="post"
                        style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>

            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="table-warning">
                <td>N°</td>
                <td>Titre</td>
                <td>Resume</td>
                <td class="text-center">Action</td>
            </tr>
        </tfoot>
    </table>

    </section>
</div>
</div>
</div>
@endsection