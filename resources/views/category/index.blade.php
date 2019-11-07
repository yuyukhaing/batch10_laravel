@extends('template')

@section('content')


     <div class="container">
      <div class="row my-3">
        <div class="col-md-6 offset-3">
          @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
       @endif
        
        
          
        <table border="1" cellspacing="0" cellpadding="20">
        	<thead>
        		<th>Name</th>
        		<th>Edit</th>
        		<th>Delete</th>
        	</thead>
        	<tbody>
        		@foreach($category as $row)
                  <tr>
                  	<td>{{$row->name}}</td>
                  	<td><a href="{{route('category.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>
                    <td><form method="post" action="{{route('category.destroy',$row->id)}}">
                    @csrf
                    @method('DELETE')
                  
                  	<input type="submit" class="btn btn-danger" value="Delete"></td>
                    </form>
                  </tr>
        		@endforeach
        	</tbody>
        </table>
    
     
     </div>
 </div>
    </div>  

  

@endsection