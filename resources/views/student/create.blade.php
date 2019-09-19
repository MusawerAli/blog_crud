@extends('../master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center"></h3>
            <br />
            @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
            @endif
            @if(Session::has('success'))
                <p>{{Session::get('success')}}</p>
            @endif
            <form action="{{url('student')}}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                <input type="text" class="w3-input" name="first_name" placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="w3-input" placeholder="Last Name" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-secondary">
            </div>
            </form>
        </div>
    </div>
@endsection