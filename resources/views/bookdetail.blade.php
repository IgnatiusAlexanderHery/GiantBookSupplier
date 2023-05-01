@extends('template')

@section('title')
        {{$book->title}}
@endsection

@section('content')
    <div class="card" style="min-height: 80vh">
        <div class="image_background inverse" style="background-color: black">
            <img src= "{{asset('img/'.$book->image)}}" class="rounded mx-auto d-block image" alt="...">
        </div>
        <div class="detail-container">
            <h5 class="card-title">Title : {{$book->title}}</h5>
            <li class="card-text">Author : {{$book->author}}</li>
            <li class="card-text">Publisher : {{$book->publisher->name}}</li>
            <li class="card-text">Year : {{$book->year}}</li>
            <li class="card-text">Synopsis : </li>
            <lu class="card-text">
                {{$book->synopsis}}
            </lu>
    </div>
    </div>
@endsection
