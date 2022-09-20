@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $community->name }}</div>

                <div class="card-body">
                    <a href="{{ route('communities.posts.create', $community) }}" class="btn btn-primary">Add Post</a>
                    <br/><br/>

                    @forelse ($posts as $post)
                        <div class="row">
                                <a href="{{ route('communities.posts.show', [$community, $post]) }}"><h2>{{ $post->title }}</h2></a>
                                <p>{{ \Illuminate\Support\Str::words($post->post_description, 10) }}</p>
                        </div>
                        <hr />
                    @empty
                        No posts found.
                    @endforelse
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
