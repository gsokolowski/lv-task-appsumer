@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Add Number</h3>
            <form method="POST" action="/number">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input name="number" rows="5" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Post Number</button>
                </div>
            </form>
            @if (count($errors))
                <ul>
                    @foreach( $errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection