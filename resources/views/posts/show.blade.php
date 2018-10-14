@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1 class="blog-post-title">{{ $post->title }}</h1>

        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
        <p> {{ $post->body }}</p>
        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}}/comments/">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your comment here" cols="30" rows="10" name="body" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

                </form>

                @include('layouts.validate')
            </div>
        </div>

    </div><!-- /.blog-main -->
@endsection

