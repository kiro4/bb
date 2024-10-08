@extends('layout')
@section("title") Home page @endsection
@section("contant")


<center><a class="btn btn-success my-3 " href="{{route("posts.create")}}">Create Post</a></center>




<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">created_at</th>
        <th scope="col">created_by</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach ($posts as $post)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post->user->name}}</td>
          <td>
            <a class="btn btn-info" href="{{route('posts.show',$post['id'])}}">View</a>
            <a class="btn btn-primary" href="{{route('posts.edit',$post['id'])}}">Edit</a>

            <form style="display:inline" method="post" action="{{route('posts.destroy',$post['id'])}}">
                @csrf
                @method("DELETE")

                 <button class="btn btn-danger " type="submit">Delete</button>

            </form>
        </td>
      </tr>
        @endforeach




    </tbody>
  </table>





@endsection
{{-- </x-contant> --}}
{{-- </x-layout> --}}
