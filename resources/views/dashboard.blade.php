@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <div class="header"><b>Welcome Admin  {{ Auth::user()->name }}!</b></div>

                </div>
            
        </div>
    </div>
</div>
@endsection
