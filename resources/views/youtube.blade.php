@extends('welcome')
@section('content')
<div class="col-sm-12 text-center p-6"> Search for video


</div>
<div class="p-4">
    {!! Form::open(['class'=>['action'=>'#']]) !!}
    {!! Form::label('youtube', 'Search for a video', ['class'=>'form-control']) !!}
    {!! Form::text('youtube', '', ['class'=>'form-control','placeholder'=>'search for a video']) !!}
    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@endsection
