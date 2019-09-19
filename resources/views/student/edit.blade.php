@extends('../master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3>Edit Record</h3>
            <br/>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
               @foreach ($errors->all() as $error)
                  <li> {{$error}}</li>
               @endforeach
                </ul>
            @endif
            <form method="POST" action="{{action('StudentController@update',$id)}}">
            {{csrf_field()}}
            <div class="form-group">
                    <input type="hidden" name="_method" value="PATCH" />
                    <input type="text" class="w3-input" name="first_name" value="{{$students->first_name}}" placeholder="First Name" />
        
            </div>

            <div class="form-group">
                    <input type="text" class="w3-input" name="last_name" value="{{$students->last_name}}" placeholder="Last Name" />
        
            </div>

            <div class="form-group">
                    <input type="submit" value="Edit" class="btn btn-primary" />
        
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection