@extends('layoutadmin')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
    <a href="{{ url('/users/create') }}" class="btn btn-gradient-info">Ajouter</a>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>nom copmlet</td>
          <td>adresse mail</td>
          <td>numero Tel</td>
          <td>Compte</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $formations)
        <tr>
            <td>{{$users->name1.' '.$users->name2}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->numTel}}</td>
            <td>${{$users->montant}}</td>
            <td class="text-center">
                <a href="{{ route('formations.edit', $formations->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('formations.destroy', $formations->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
