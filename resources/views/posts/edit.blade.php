@extends('layout')
@section("title") Create Post @endsection
@section("contant")



<form action="{{route("posts.update",1)}}" method="POST">
    @csrf
    @method("PUT")

<label class="form-label" for="">Title</label>
<input class="form-control" type="text" value="{{$post->name}}"  name="title" id="">  <br>

<label class="form-label" for="">Dscription</label>
<textarea  name ="desc" class="form-control mb-3" value="{{$post->desc}}"  rows="3"></textarea>

<label class="form-label" for="">Post Creator</label>

<select class="form-control "  name="post_creator" id="">
@foreach ($Users as $User)
 <option value="{{$User->id}}">{{$User->name}}</option>

@endforeach

</select>

<button class="btn btn-primary mt-4" type="submit">Update</button>
</form>




@endsection
