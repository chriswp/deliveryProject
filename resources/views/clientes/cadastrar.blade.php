@extends('layouts.default')
@section('content')
    <div class="container">
        {!! Form::open(['route' => 'client.store', 'class' => 'form-horizontal']) !!}
        <div class="form-group">
            <label class="col-sm-2 control-label">Nome</label>

            <div class="col-sm-10">
                {!! Form::text('name',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                {!! Form::email('email',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Endereço</label>

            <div class="col-sm-10">
                {!! Form::text('address',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">CEP</label>

            <div class="col-sm-10">
                {!! Form::text('postcode',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Cidade</label>

            <div class="col-sm-10">
                {!! Form::text('city',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Estado</label>

            <div class="col-sm-10">
                {!! Form::text('state',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Telefone</label>

            <div class="col-sm-10">
                {!! Form::text('phone',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Senha</label>

            <div class="col-sm-10">
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default pull-right">Cadastrar</button>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
@stop