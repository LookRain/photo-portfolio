@extends('layouts.master')
@section('content')
<div id="back">
  <my-nav></my-nav>
  <section class="section">
    <div class="container">
      {{-- <upload-form></upload-form> --}}
      <form class="field" method="POST" action="/photos" enctype="multipart/form-data" name="file">
        {{ csrf_field() }}
        <input type="file" name="photo"></input>
        <button class="button" type="submit">Save</button>
      </form>
      <img src="{{ Storage::url('images/mNRxgahVHDaXaiqBmpsV8pyFVeLoowM1QHH24Ldj.jpeg') }}" alt="">
    </div>
  </section>
  
</div>
@endsection
