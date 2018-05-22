@extends('layouts.app')

@section('content')
 
 {!! Form::open(['method'=>'post','action'=>'karyawan@store']) !!}
 <div>
     
     {!! Form::label('nama', 'nama', ['class'=>'form_control']) !!}
     {!! Form::text('name', null, ['class'=>'form-control']) !!}
     
 </div>
    <div>

     {!! Form::label('password', 'password', ['class'=>'form_control']) !!}
     {!! Form::password('password', null, ['class'=>'form-control']) !!}
    </div>
    <div>

     {!! Form::label('alamat', 'nama', ['class'=>'form_control']) !!}
     {!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
    </div>
 
 <div>

     {!! Form::label('Kode', 'Kode', ['class'=>'form_control']) !!}
     {!! Form::text('kode', null, ['class'=>'form-control']) !!}
 </div>
 
 {!! Form::label('role_id', 'role_id', ['class'=>'form_control']) !!}
 {!! Form::text('role_id', null, ['class'=>'form-control']) !!}
