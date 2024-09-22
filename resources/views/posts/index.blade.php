@extends('layout')
@section("title") Home page @endsection
@section("contant")
<center><a class="btn btn-success mt-4 " href="{{url('posts/{post}')}}">Create Post</a></center>

<div class="contaienr m-5">


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
            <a class="btn btn-info" href="#">View</a>
            <a class="btn btn-primary" href="#">Edir</a>
            <a class="btn btn-danger" href="#">Delete</a>
        </td>
      </tr>
        @endforeach




    </tbody>
  </table>

</div>




@endsection

