@extends('template')

@section('title')
    {{$categories->name}}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/category.css')}}">

    <div class="category-title">
        {{$categories->name}}
    </div>

        <div class="card-group">
            @foreach($books as $book)
                <div class="card" style="min-height: 50vh;width: 280cm;">
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
        {{$book_categories->links()}}
    </div>
@endsection
