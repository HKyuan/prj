@extends('index')

@section('title', $title)

@section('css')
.thead{
    word-wrap: break-word;
    border-collapse:collapse;
    text-align:center;
}
.thead .td:nth-child(3){
    width:75%
}
.tbody{
    word-break: break-all;
    text-align:center;
}
.tbody .td:nth-child(3){
    width:75%;
}
@endsection

@section('content')
    <form action="{{url('user/pdf')}}" method="post">
    @csrf
    <table class="table table-hover" style="width:100% ;">
        <thead class="thead">
            <tr>
                <th>#</th>
                <th class="thead td">id</th>
                <!-- <th>number</th> -->
                <th class="thead td">name</th>
            </tr>
        </thead>
        <tbody class="tbody">
    @foreach( $query as $var)
            <tr>
                <td class="tbody td"><input type="checkbox" value="{{ $var->id }}" name="check[]" id=""></td> 
                <td class="tbody td">{{ $var->id }}</td>
                <!-- <td>{{ $var->number}}</td> -->
                <td class="tbody td">{{ $var->name }}</td>
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


