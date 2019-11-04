@extends('index')

@section('title' , $title)

@section ('content')

<a href="{{url('/user/pdf/create')}}" role="btn" class="btn btn-primary" target="blank">Create PDF</a>
<table>
    <thead>
        <tr>
            <th style="text-align:center">id</th>
            <th style="text-align:center">name</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $var)
    <tr>
        <td style="width:25% ; text-align:center"> {{$var->id}} </td>
        <td style="width:75% ; text-align:center ; word-break: break-all;"> {{$var->name}} </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection