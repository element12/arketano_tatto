@extends('layouts.app')

@section('content')
<div class="d-flex" id="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @role('hola')
                        <p>hola</p>
                        @elserole('hola')
                        <p>hola2</p>
                        @endrole             
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection


@section('content2')
<div class="d-flex" id="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @role('hola')
                        <p>hola</p>
                        @elserole('hola')
                        <p>hola2</p>
                        @endrole             
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
