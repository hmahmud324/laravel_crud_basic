@extends('master')

@section('title')
    Add Blog Page
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body form-card">
                        <h1 class="text-center form-title">Add Blog Form</h1>
                        <hr/>
                        <p class="text-center text-success" data-timeout>{{ session('message') }}</p>
                        <form action="{{ route('blog.new') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"/>
                                <span class="text-danger error-msg">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                                <span class="text-danger error-msg">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"/>
                                <span class="text-danger error-msg">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password"/>
                                <span class="text-danger error-msg">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image"/>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success">Create New Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
