@extends('layouts.app')

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs blogs-wrapper">
            <h1>Create new post.</h1>
            <form action="{{ route('posts.store') }}" method="POST" data-parsley-validate>
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required maxlength="255">
                    @if ($errors->has('title'))
                        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <textarea name="summary" id="summary" cols="50" rows="5" class="form-control" required maxlength="255"></textarea>
                    @if ($errors->has('summary'))
                        <span class="help-block">
                        <strong>{{ $errors->first('summary') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" id="body" class="form-control" required></textarea>
                    @if ($errors->has('body'))
                        <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-action">
                    <input type="submit" value="Create Post!" class="btn btn-success btn-lg btn-block"/>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('script')
    {!! Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}
    {!! Html::script('js/parsley.min.js') !!}
    <script>
        CKEDITOR.replace('body', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });
    </script>
@endsection
