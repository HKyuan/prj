@extends('index')

@section('title', $title)

@section('content')
    
    <form action="{{url('user/pdf')}}" method="post">
    @csrf
    <table class="table table-hover" style="width:100% ; word-wrap: break-word; border-collapse:collapse">
        <thead>
            <tr>
                <th>#</th>
                <th style="text-align:center">id</th>
                <!-- <th>number</th> -->
                <th style="text-align:center">name</th>
            </tr>
        </thead>
        <tbody>
    @foreach( $query as $var)
            <tr>
                <td><input type="checkbox" value="{{ $var->id }}" name="check[]" id=""></td> 
                <td style="width:25% ; text-align:center">{{ $var->id }}</td>
                <!-- <td>{{ $var->number}}</td> -->
                <td style="width:75% ; text-align:center ; word-break: break-all;" >{{ $var->name }}</td>
                <!-- web view force break by using word-break: break-all -->
                <!-- pdf view force break by using word-wrap: break-word -->
                <!-- word-break: break-all suitable variables show -->
                <!-- word-wrap: break-word suitable const show -->
            </tr>
    @endforeach
        </tbody>
    </table>
        <button type="submit" class="btn btn-success">送出</button>
    </form>
@endsection
@section('script')
    {
        let container = $(".container")
        console.log(container)
    }
@endsection


