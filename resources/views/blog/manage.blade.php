@extends('master')


@section('title')
    Manage Blog Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center text-primary">All Blog Info</h1>
                        <p class="text-success text-center" data-timeout>{{ session('message') }}</p>
                        <hr/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->name}}</td>
                                        <td>{{$blog->email}}</td>
                                        <td><img src="{{asset($blog->image)}}" alt="" height="50" width="70"/></td>
                                        <td>
                                            <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete" onclick="return confirm('Are you sure to delete this..');"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
