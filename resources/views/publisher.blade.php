@extends('template')

@section('title')
    Publisher
@endsection

@section('content')

    <div class="card-group">
        @foreach($publishers as $publisher)
            <div class="card mb-6" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <img src="{{$publisher->image}}" class="img-fluid rounded-start image" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">{{$publisher->name}}</h5>
                        </div>
                    </div>
                    <a href="/publisherDetail/{{$publisher->id}}" class="btn card-footer" style="width: 50%">Detail</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="paginations">
        {{$publishers->links()}}
    </div>

@endsection
