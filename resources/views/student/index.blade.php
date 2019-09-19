@extends('../master')

@section('content')
    <div class="row">
      
        <div class="col-md-12">
            <br />
            <h3 align="center">Student Data</h3>
            <br />
            @if($message = Session::get('success'))
               <div class="alert alert-success">
                 {{$message}}  
            </div> 
            @endif
            <div align="right">
                    <a href="{{route('student.create')}}" class="w3-btn w3-green">Add</a>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
             @foreach ($students as $row)
                 <tr>
                     <td>{{$row['first_name']}}</td>
                     <td>{{$row['last_name']}}</td>
                    <td>
                        <a href="{{action('StudentController@edit',$row['id'])}}" class="w3-btn w3-yellow w3-round">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{action('StudentController@destroy',$row['id'])}}"  class="delete_form">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="w3-btn w3-red">Delete</button>
                        </form>
                    </td>
                    </tr>
             @endforeach
            </table>
        </div>
    </div>
    <script>
    $(document).ready(function(){
$('.delete_form').on('submit',function(){
if(confirm("Are YOu sure to Delete this?")){
return true;
}else{
    return false;
}
});
    });
    </script>
@endsection