@extends('template')<!-- main template ko hlann call -->
@section('content')


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body> -->
 <div class="col-lg-9">
        <div class="row mt-3">
         
          <div class="table-responsive">
            <table class="table table-sm">
              <thead class="thead-dark">
                <tr>
                	<th>No</th>
                  	<th>Name</th>
                  	<th colspan="2">Action</th>
                </tr>
                

              </thead>
              <tbody id="tbody">
              	
              	@foreach($categories as $row)
              	<tr>
              		<td>{{$row->id}}</td>
              		<td>{{$row->name}}</td>
              		<td> <a href="{{route('category.edit',$row->id)}}" class="btn btn-success">Edit</a></td>
              		<td><form method="post" action="{{route('category.destroy',$row->id)}}">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-warning" value="Delete">
        </form></td>

              	</tr>
                
                @endforeach
              
              
              </tbody>
               
      
            </table>
          </div>
        </div>

        
     </div>

<!-- </body>
</html> -->
@endsection