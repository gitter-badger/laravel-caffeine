@extends('genealabs-laravel-caffeine::tests.layout')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <input type="hidden" name="success" value="true">
        <input type="submit" value="Test Form Submit">
    </form>
@endsection
