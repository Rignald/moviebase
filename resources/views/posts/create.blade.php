@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a post</h1>
        <hr>

        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

           @include ('layouts.validate')

        </form>



    </div>
@endsection
