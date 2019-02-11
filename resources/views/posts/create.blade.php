@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <form  action="/post/store" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title"  placeholder="Enter title">

                        </div>
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea class="form-control" name="content" rows="8" cols="8" ></textarea>
                </div>
                <div class="form-group">
                    <label for="featured">Photo</label>
                    <input type="file" class="form-control-file" name="featured">
                </div>

                        <button type="submit" class="btn btn-primary">save</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
