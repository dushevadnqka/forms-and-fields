@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Forms table</h1>
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>Name</th> 
                        <th>Actions</th>
                    </tr> 
                </thead> 
                <tbody>
                    @foreach ($forms as $v)
                    <tr> 
                        <th scope=row>{{$v->id}}</th> 
                        <td>{{$v->name}}</td> 
                        <td>
                            <a href="{{ url('form/show/'.$v->id) }}" class="btn btn-primary">Open Form</a>
                            <a href="{{ url('form/delete/'.$v->id) }}" class="btn btn-danger">Delete Form</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>
@endsection
