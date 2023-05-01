@extends('template')

@section('title')
    @foreach($publishers as $publisher)
    {{$publisher->name}}
    @endforeach
@endsection

@section('content')

    <div class="card-group">
        @foreach($publishers as $publisher)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$publisher->image}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$publisher->name}}</h5>
                            <p class="card-text">Address :</p>
                            <p class="card-text">{{$publisher->address}}</p>
                            <p class="card-text">Email :</p>
                            <p class="card-text">{{$publisher->email}}</p>
                            <p class="card-text"><small class="text-muted">Phone :</small></p>
                            <p class="card-text"><small class="text-muted">{{$publisher->phone}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
        {{$books->links()}}
    </div>

@endsection
