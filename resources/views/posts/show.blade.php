@extends('layout')
@section('title') Show Page @endsection
@section('contant')



<div class="card">
    <div class="card">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
          <h5 class="card-title"> {{$post['title']}}</h5>
          <p class="card-text">descreption : {{$post['desc']}}</p>
        </div>
      </div>
</div>
<div class="card my-3">
    <h5 class="card-header">Post Creator Info</h5>
    <div class="card-body">
      <h5 class="card-title">Name : {{$post['created_by']}}</h5>
      <p class="card-text">Email : {{$post['email']}} </p>
      <p class="card-text">Created At : {{$post['created_at']}}</p>
    </div>
  </div>




@endsection
