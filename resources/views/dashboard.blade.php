@extends('layouts.master')
@section('content')
<div id="back">
  <my-nav></my-nav>
  <section class="section">
    <div class="container">
      {{-- <upload-form></upload-form> --}}
      {{Auth::user()->id}}
      <form class="field" method="POST" action="/photos" enctype="multipart/form-data" name="file">
        {{ csrf_field() }}


        <input type="file" name="photo"></input>

        <label class="label">Category</label>
        <p class="control">
          <span class="select is-medium">
            <select name="cat">
              <option value="portrait">Portrait</option>
              <option value="landscape">Landscape</option>
              <option value="street">Street</option>

            </select>
          </span>
        </p>

        <button class="button is-primary" type="submit">Save</button>
        @if (count($errors) > 0)
        <div class="notification is-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </form>

      @if (! empty($path))
      <img src="{{ Storage::url($path) }}" alt="">
      @endif
    </div>
  </section>
  
</div>
@endsection
