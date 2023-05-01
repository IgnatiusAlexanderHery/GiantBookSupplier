@extends('template')

@section('title', 'Home page')

@section('content')

    <div class="card-group">
        @foreach($books as $book)
        <div class="card" >
            <img src="{{asset('img/'.$book->image)}}" class="rounded mx-auto d-block image" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">By</p>
                <p class="card-text">{{$book->author}}</p>
                <a href="/bookdetail/{{$book->id}}" class="btn card-footer">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="paginations">
        {{$books->links()}}
    </div>
@endsection
