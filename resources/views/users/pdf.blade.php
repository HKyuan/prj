<a href="{{url('/user/pdf/generate')}}" target="blank">Create PDF</a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
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