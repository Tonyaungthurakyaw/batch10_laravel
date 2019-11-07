@extends('template')
@section('content')


  <!-- Main Content -->
  
   

<div class="container mt-lg-5">
    <div class="row">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="col-lg-8 col-md-10 mx-auto">
       <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
         <div class="form-group">
          <label>Content</label>
          <input type="text" name="content" class="form-control">
        </div>
         <div class="form-group">
          <label>Photo</label><span class="text-danger">[supported filoe type:jpeg,png]</span>
          <input type="file" name="photo" class="form-control">
        </div>
        <div class="form-group">
          Categories:<select name="Categories" class="form-control">
            <option value="">Choose Catagory</option>
            (--accept data--)
            @foreach($categories as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </select>
        </div>
         <div class="form-group">
         
        <input type="submit" name="btnsubmit" class="btn btn-primary" value="save">
        </div>
     
      </form>
      </div>
    </div>
  </div>
@endsection