@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Checkout') }}</div>

                <div class="card-body">                        
                    
                    <h5>{{Auth::user()->name}}</h5>
                    
                    <livewire:check-out />
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


