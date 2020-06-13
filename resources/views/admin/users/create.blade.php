@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('header')
    Create User
@endsection

@section('content')

    <div class="container-fluid">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store', 'files'=>'true']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Full Name') !!}
                {!! Form::text('name', null, ['placeholder'=>'Example: Buba Gigo', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address') !!}
                {!! Form::email('email', null, ['placeholder'=>'example@gmail.com', 'class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Choose Role') !!}
                {!!Form::select('role_id', $role, null,['placeholder' => 'Choose role', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image', 'Profile Picture') !!}
                {!! Form::file('image', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
            </div>




        {!! Form::close() !!}

        @include('includes.errors.error')
    </div>


@endsection
