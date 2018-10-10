@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h2 class="blog-post-title">

                {{ $post->title }}

        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
        <p> {{ $post->body }}</p>

    </div><!-- /.blog-main -->
@endsection

