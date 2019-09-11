{!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}

<div class="form-group{{ $error->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $error->has('password') ? 'has-error' : '' }}">
    {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password', ['class'=>'form-control']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<dir class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember') !!} Ingat saya
            </label>
        </div>
    </div>
</dir>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-sign-in"></i> Login
        </button>
        <a class="btn btn-link" href="{{url('/pasword/reset')}}">Lupa password</a>
    </div>
</div>
{!! Form::close() !!}
