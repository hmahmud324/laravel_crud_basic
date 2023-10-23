@extends('master')

@section('title')
    Update Blog Page
@endsection



@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body ">
                        <h1 class="text-center form-title">Update Blog Form</h1>
                        <hr/>
                        <p class="text-center text-success" data-timeout>{{ session('message') }}</p>
                        <form action="{{ route('blog.update',['id'=> $blog->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $blog->name }}" required/>
                                <span class="text-danger error-msg">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $blog->email }}" required/>
                                <span class="text-danger error-msg">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" />
                                <span class="text-danger error-msg">{{ $errors->has('current_password') ? $errors->first('current_password') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                                <span class="text-danger error-msg">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                                <span class="text-danger error-msg">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image"/>
                                <img src="{{asset($blog->image)}}" alt="" height="100" width="130"/>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success">Update Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
