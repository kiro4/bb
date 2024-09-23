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
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>{{$post['created_by']}}</td>
          <td>
            <a class="btn btn-info" href="{{route('posts.show',$post['id'])}}">View</a>
            <a class="btn btn-primary" href="#">Edit    </a>
            <a class="btn btn-danger" href="#">Delete</a>
        </td>
      </tr>
        @endforeach




    </tbody>
  </table>





@endsection
{{-- </x-contant> --}}
{{-- </x-layout> --}}
