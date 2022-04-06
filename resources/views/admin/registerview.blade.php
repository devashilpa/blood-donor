@extends('admin.adminindex')
@section('adminbody')
<div class="container">
<table class="table table-hover table-success table-striped">
    <tr>
        <th>Donor Name</th>
        <th>Age</th>
        <th> Blood group</th>
        <th>last Donation Date </th>
    </tr>
    @foreach($result as $value)
    <tr>
    @if($value->email!="admin@gmail.com")
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->blood_group}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->last_donation_date}}</td>
        <td>{{$value->password}}</td>
        <td><a href="delete/{{$value->id}}">DELETE</a></td>
        @endif
    </tr>
    @endforeach
</table>
</div>
@endsection