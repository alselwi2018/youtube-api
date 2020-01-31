@extends('welcome')
@section('content')
<div class="col-sm-12 text-center p-6"> Search for video


</div>
<div class="p-4">
    {!! Form::open(['class'=>['action'=>'#']]) !!}

    {!! Form::text('youtube', '', ['class'=>'form-control','placeholder'=>'search for a video']) !!}
    <div class="text-center pt-4">
    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
<div id="res"></div>
@endsection
