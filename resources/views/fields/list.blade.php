@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Custom fields table</h1>
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>ID</th> 
                        <th>Label</th> 
                        <th>Type</th> 
                        <th>Length</th>
                        <th>Required</th>
                    </tr> 
                </thead> 
                <tbody>
                    @foreach ($fields as $v)
                    <tr> 
                        <th scope=row>{{$v->id}}</th> 
                        <td>{{$v->label}}</td> 
                        <td>{{$v->type->type_name}}</td> 
                        <td>{{$v->length}}</td> 
                        <td>{{$v->is_required ? 'YES' : 'NO'}}</td> 
                    </tr> 
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>
@endsection
