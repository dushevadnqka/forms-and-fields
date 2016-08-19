@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Form # {{ $form->id }}:</h1>
        <div class="col-md-8 col-md-offset-2" style="font-size: 2em;">
            <h1>Form Name: <strong> {{ ucfirst($form->name) }}</strong></h1>
            <h1>Fields containing:</h1>
            
            <ul>
                @foreach ($form->fields as $v)
                  @if($v)
                  <li>{{$v->label}} (<u>{{ $v->type->type_name }} </u>)</li>
                  @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
