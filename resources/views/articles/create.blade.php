@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input class="input" type="text" id="title" name="title">
                </div>
            </div>

            <div class="field">
                <label for="title" class="label">Excerpt</label>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label for="title" class="label">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
