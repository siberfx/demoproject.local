@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr class="bg-success">
                                <td>#</td>
                                <td>Title</td>
                                <td>Date</td>
                                <td>Author</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($blogs as $blog)
                            <tr>
                                <th>{{ $blog->id }}</th>
                                <th>{{ $blog->title }}</th>
                                <th>{{ $blog->created_at->diffForHumans() }}</th>
                                <th>{{ $blog->user->name }}</th>
                                <th>
                                    <a href="{{ route('blog.show', ['blog' => $blog->id]) }}">View</a> -
                                    <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}">Edit</a> -
                                    <a href="#">Delete</a>
                                </th>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="text-center">
                                            <span>No data found!</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
