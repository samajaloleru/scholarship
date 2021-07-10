@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Blog Posts</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-gray">
        <div class="container tim-container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="table-responsive">
                        @if(count($posts) > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td class="td-actions text-right">
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-link btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
