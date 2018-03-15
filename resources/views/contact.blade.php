@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Редактировать профиль</div>

                    <div class="panel-body">

                        {!! Form::open(['route'=>'contactus.store']) !!}

                            <?php
                                if (isset(Auth::user()->avatar)){
                                    echo '<img src=' . Auth::user()->avatar . '><br><br>';
                                }
                            ?>

                            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                {!! Form::label('Имя : ') !!}
                                {!! Form::text('username', Auth::user()->name, ['class'=>'form-control', 'placeholder'=>'Введите имя']) !!}
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::label('Email : ') !!}
                                {!! Form::text('email', Auth::user()->email, ['class'=>'form-control', 'placeholder'=>'Введите Email']) !!}
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
                                {!! Form::label('Телефон : ') !!}
                                {!! Form::text('tel', Auth::user()->tel, ['class'=>'form-control', 'placeholder'=>'Введите телефон']) !!}
                                <span class="text-danger">{{ $errors->first('tel') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                {!! Form::label('Город : ') !!}
                                {!! Form::text('city', Auth::user()->city, ['class'=>'form-control', 'placeholder'=>'Введите город']) !!}
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success">Сохранить</button>
                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

