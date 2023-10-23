@extends('master')

@section('title')
    Detail Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset($blog->image)}}" alt="" height="480" width="550" class="image-with-shadow"/>
                        <div class="card-img-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body card-with-shadow">
                        <h1>{{$blog->name}}</h1>
                        <p>{{$blog->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
