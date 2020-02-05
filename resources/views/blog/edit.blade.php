@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form class="form" action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <label>Title</label>
                            <input class="form-control"  name="title" value="{{ $blog->title }}">
                            <hr>
                            <label>Body</label>
                            <textarea class="form-control"  name="body" rows="4">{{ $blog->body }}</textarea>
                            <hr>
                            <input type="submit" class="btn btn-success" value="Submit">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
