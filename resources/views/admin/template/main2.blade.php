<?php
/**
 * AdminLTE v2 Template
 * 
 * @author OanhNN <oanhnn@rikkeisoft.com>
 * -----------------------------------------------------------------------------
 * @param string $adminlte_as
 */
$bodyClass = 'login-page';
?>
@extends('adminlte::layout.base')

@section('title', trans('adminlte::title.signin'))

@section('body')
<div class="login-box">
    <div class="login-logo">
        @section('logo')
        <a>{!! config('adminlte.logo.normal') !!}</a>
        @show
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        @if($errors->has('auth'))
        <p class="login-box-msg text-red">{!! $errors->first('auth', ':message') !!}</p>
        @else
        <p class="login-box-msg">{{ trans('adminlte::text.signin_msg') }}</p>
        @endif
        <form action="{{ route( $adminlte_as . 'postLogin') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="{{ trans('adminlte::form.label.email') }}" autofocus />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="{{ trans('adminlte::form.label.password') }}" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox"> {{ trans('adminlte::form.label.remember') }}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" name="signin" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::form.button.signin_email') }}</button>
                </div><!-- /.col -->
            </div>
        </form>
        @if (config('adminlte.auth.social_login'))
        <div class="social-auth-links text-center">
            <p>{{ trans('adminlte::text._or_') }}</p>
            <a href="{{ route($adminlte_as . 'social_redirect',['provider'=>'facebook']) }}" class="btn btn-block btn-social btn-facebook btn-flat">
                <i class="fa fa-facebook"></i> {{ trans('adminlte::form.button.signin_facebook') }}
            </a>
            <a href="{{ route($adminlte_as . 'social_redirect',['provider'=>'google']) }}" class="btn btn-block btn-social btn-google-plus btn-flat">
                <i class="fa fa-google-plus"></i> {{ trans('adminlte::form.button.signin_google') }}
            </a>
        </div><!-- /.social-auth-links -->
        @endif
        <a href="{{ route($adminlte_as . 'getForgotPassword') }}">{{ trans('adminlte::text.password_forgot_link') }}</a>
        @if (config('adminlte.auth.registrable'))
        <br>
        <a href="{{ route($adminlte_as . 'getRegister') }}" class="text-center">{{ trans('adminlte::text.signup_link') }}</a>
        @endif
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@stop