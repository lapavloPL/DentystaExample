@extends('layouts.app')


@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong> Wystąpiły jakieś problemy...</strong><br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h4 class="text-center">UTWÓRZ</h4>
            </div>

{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imię:</strong>
            {!! Form::text('name', null, array('pattern' => '[A-Za-z]{2,50}', 'placeholder' => 'Imię','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nazwisko:</strong>
            {!! Form::text('surname', null, array('pattern' => '[A-Za-z]{2,50}', 'placeholder' => 'Nazwisko','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Adres:</strong>
            {!! Form::text('address', null, array('placeholder' => 'Adres','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numer telefonu:</strong>
            {!! Form::text('phonenumber', null, array('pattern' => '[1-9]{1}[0-9]{8}', 'title' => 'Numer telefonu powininien mieć 9 cyfr!', 'placeholder' => 'Numer telefonu','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data urodzenia:</strong>
            {!! Form::date('datebirth', null, array('placeholder' => 'Data urodzenia','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Hasło</strong>
            {!! Form::password('password', array('placeholder' => 'Hasło','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Potwierdź hasło</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Potwierdź hasło','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <div class="space"></div>
        <button type="submit" class="btn btn-warning">ZAPISZ</button>
        <div class="space"></div>
        <p class="card-text">
            <a class="btn btn-primary" href="{{ route('roles.index') }}">WRÓĆ</a>
        </p>
    </div>
</div>
{!! Form::close() !!}
@endsection
