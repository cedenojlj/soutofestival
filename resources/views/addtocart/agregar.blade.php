@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('errores'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('errores') }}
                        </div>
                    @endif

                    <livewire:cart-item :product="$product">
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


