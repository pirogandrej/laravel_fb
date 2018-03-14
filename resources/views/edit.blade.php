@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Редактировать профиль
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'home')) !!}
                            {!! Form::label('username','Имя',array('id'=>'','class'=>'')) !!}
                            {!! Form::text('username',Auth::user()->name,array('id'=>'','class'=>'')) !!}
                            <br><br>
                            {!! Form::label('email','Email',array('id'=>'','class'=>'')) !!}
                            {!! Form::text('email',Auth::user()->email,array('id'=>'','class'=>'')) !!}
                            <br><br>
                            {!! Form::label('tel','Телефон',array('id'=>'','class'=>'')) !!}
                            {!! Form::text('tel','+380(66)111-22-33',array('id'=>'','class'=>'')) !!}
                            <br><br>
                            {!! Form::label('city','Город',array('id'=>'','class'=>'')) !!}
                            {!! Form::text('city','Харьков',array('id'=>'','class'=>'')) !!}
                            <br><br>
                        {!! Form::submit('Изменить')!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
