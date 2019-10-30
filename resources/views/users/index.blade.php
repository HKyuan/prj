@extends('index')

@section('title', $title)

@section('content')
    <table class="table table-hover">
    <thead>
        <tr>
            <td>#</td>
            <td>id</td>
            <td>number</td>
            <td>name</td>
        </tr>
    </thead>
    @foreach( $query as $var)
    <tbody>
        <tr>
            <td><input type="checkbox" name="{{ $var->id }}" id=""></td>
            <td>{{ $var->id }}</td>
            <td>{{ $var->number }}</td>
            <td>{{ $var->name }}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
@endsection