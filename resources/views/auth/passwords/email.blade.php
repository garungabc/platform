@extends('platform::layouts.auth')
<!-- Main Content -->
@section('content')
    <p class="m-t-lg">{{trans('platform::auth/account.password_reset')}}</p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form class="m-t-md" role="form" method="POST"
          action="{{ route('platform.password.email') }}">
        @csrf
        <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>Email</label>
            <div class="controls">
                <input type="email" name="email" placeholder="{{trans('platform::auth/account.enter_email')}}"
                       class="form-control" required
                       value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="form-text text-muted">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <button class="btn btn-primary m-t-md" type="submit">
            <i class="icon-envelope text-xs m-r-xs"></i> {{trans('platform::auth/account.reset')}}
        </button>
    </form>
@endsection