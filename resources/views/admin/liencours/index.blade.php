@extends('layoutadmin')
@section('content')
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
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
                            <div class="table-wrap">
                    <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
                    <thead>
                        <tr class="table-warning">
                        <td>N°</td>
                        <td>cours</td>
                        <td>Liens</td>
                        <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>                        @php
                        $i=1;
                    @endphp

                        @foreach($liencours as $liencours)
                        <tr>
                            <td>{{$i++}}</td>
                           <td>{{$liencours->cours}}</td>
                            <td>{{$liencours->link}}</td>
                            <td class="text-center">
                                <a href="{{ URL('liencours/edit/'. $liencours->liencours_id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ URL('liencours/destroy/'.  $liencours->liencours_id )}}" method="post" style="display: inline-block">
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
                        <td>cours</td>
                        <td>Liens</td>
                        <td class="text-center">Action</td>
                        </tr>
                    </tfoot>
                </table>

            </section>
        </div>
    </div>
</div>
    @endsection
