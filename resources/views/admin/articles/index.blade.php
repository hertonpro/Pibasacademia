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




                    <div class="table-wrap">
                    <table class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">

                        <thead>
                            <tr class="">
                                <td>ID</td>
                                <td>IMAGE</td>
                                <td>TITRE</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>@php
                            $i=0
                        @endphp
                            @foreach($articles as $articles)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset('storage/'.$articles->img) }}" class="avatar-img rounded d-40"></td>
                                <td><a href="{{url('article/'.$articles->id)}}">{{$articles->titre}}</a></td>
                                <td class="text-center">
                                    <a href="articles/{{ $articles->id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <form action="articles/delete/{{ $articles->id }}"  style="display: inline-block">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-remove" ></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="">
                                <td>ID</td>
                                <td>IMAGE</td>
                                <td>TITRE</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </tfoot>
                    </table>

                </section>

@endsection
