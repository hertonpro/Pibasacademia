@extends('layoutadmin')

@section('content')




                <section class="hk-sec-wrapper">

                    <div class="push-top">
                        <a href="{{ url('/articles/create') }}" class="btn btn-gradient-info">Ajouter</a>
                        <a href="{{ url('/articles') }}" class="btn btn-gradient-info">Liste</a>
                    </div><br>
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif









 @endsection
