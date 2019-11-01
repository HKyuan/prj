@extends('index')

@section ('title' , $title)

@section('content')

<form action="" method="post">
@csrf
@method('POST')
</form>

@endsection