@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="display: flex;">
                    <div>
                        Dashboard
                    </div><div>
                            <a href="{{ url()->previous() }}" class="btn btn-dark">Go Back</a>
                    </div>
                    </div>

                    <div class="card-body">


                        <p name="title" >
                            {{ $blog->title }}
                        </p>
                        <p name="body" >
                            {{ $blog->body }}
                        </p>
                        <p name="slug" >
                            {{ $blog->slug }}
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
