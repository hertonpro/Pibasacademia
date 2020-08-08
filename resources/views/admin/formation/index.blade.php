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
                    <table id="datable_3" class="table table-hover">
                {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
                    <thead>
                        <tr class="table-warning">
                        <td>N°</td>
                        <td>Titre</td>
                        <td>Resume</td>
                        <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>                        @php
                        $i=1;
                    @endphp

                        @foreach($formations as $formations)
                        <tr>
                            <td>{{$i++}}</td>
                           <td>{{$formations->titre}}</td>
                            <td>{{$formations->resume}}</td>
                            <td class="text-center">
                                <a href="{{ route('formations.edit', $formations->formation_id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('formations.destroy',  $formations->formation_id )}}" method="post" style="display: inline-block">
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