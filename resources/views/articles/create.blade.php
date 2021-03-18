@extends('layout')

@section('content')
  <div id="wrapper">
    <div id="page" class="container">
      <h1>New Article</h1>

      <form action="">
        <div class="field">
          <label for="label" for="title"></label>
          <div class="control">
            <input class="input" type="text" name="title" id="">
          </div>
        </div>

        <div class="field">
          <label for="excerpt" class="label">Excerpt</label>
          <div class="control">
            <textarea class="textarea" name="excerpt" id="excerpt" cols="30" rows="10"></textarea>
          </div>
        </div>

        <div class="field">
          <label for="body" class="label">Body</label>
          <div class="control">
            <textarea class="textarea" name="body" id="body" cols="30" rows="10"></textarea>
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