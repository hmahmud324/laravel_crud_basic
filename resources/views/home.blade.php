@extends('master')

@section('title')
Home Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card mb-3 blog-card">
                            <img src="{{asset($blog->image)}}" alt="" height="300"/>
                            <div class="card-body">
                                <h4>{{$blog->name}}</h4>
                                <hr/>
                                <a href="{{route('detail',['id'=> $blog->id])}}" class="btn btn-success rounded-0">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


