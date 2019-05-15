@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   You have been registered and a verification message has been sent to your Email address please verify your account to login.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
