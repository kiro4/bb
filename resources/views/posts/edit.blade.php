@extends('layout')
@section("title") Create Post @endsection
@section("contant")



<form action="{{route("posts.update",1)}}" method="POST">
    @csrf
    @method("PUT")

<label class="form-label" for="">Title</label>
<input class="form-control" type="text" name="title" id="">  <br>

<label class="form-label" for="">Dscription</label>
<textarea  name ="desc" class="form-control mb-3"  rows="3"></textarea>

<label class="form-label" for="">Post Creator</label>

<select class="form-control "  name="post_creator" id="">

    <option value="1">ahmed</option>
    <option value="2">kiro</option>
</select>
<button class="btn btn-primary mt-4" type="submit">Update</button>
</form>




@endsection
