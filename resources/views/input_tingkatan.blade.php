@extends('layouts.app')

@section('content')
<h1> coba input <h1>
    <div class="row col-md-9" style="margin-left: 160px">
    {!! Form::open(['method'=>'post','action'=>'tingkatkursus@store']) !!}
    <div class="form-group">   
        {!! Form::label('nama_tingkatan','Nama Tingkatan')!!}
        {!! Form::text('nama_tingkatan', null, ['class'=>'form-control']) !!}
            
    {!! Form::submit('buat tingkatan baru', ['class'=>'btn btn-primary']) !!}
    </div>
    </div>

    
    {!! Form::close() !!}
    
    @stop