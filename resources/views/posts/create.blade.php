@extends('layout')
@section("title") Create Post @endsection
@section("contant")



<form action="{{route("posts.store")}}" method="POST">
    @csrf
    {{-- @method("PUT") --}}

<label class="form-label" for="">Title</label>
<input class="form-control" type="text" name="title" id="">  <br>

<label class="form-label" for="">Dscription</label>
<textarea  name ="desc" class="form-control mb-3"  rows="3"></textarea>

<label class="form-label" for="">Post Creator</label>

<select class="form-control "  name="post_creator" id="">
@foreach ($Users as $User)
 <option value="{{$User->id}}">{{$User->name}}</option>

@endforeach

</select>
<button class="btn btn-success mt-4" type="submit">Submit</button>
</form>




@endsection
