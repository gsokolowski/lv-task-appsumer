@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Missing Number is</h3>
            {{$number->number}}
        </div>
    </div>
@endsection