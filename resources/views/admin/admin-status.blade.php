
@extends('admin.admin-layout')
@section('showAll')
<table class="table table-user-information">
    <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Seat No.</th>
        <th>Destination 1</th>
        <th>Destination 2</th> 
        <th>Total Cost</th>
        <th>Date</th>
        <th>Operation</th>
    </tr>
    @foreach ($showAllUser as $userdata)      
    <tr>
        <td>{{$userdata->id}}</td>
        <td>{{$userdata->fname}}</td>
        <td>{{$userdata->email}}</td>
        <td>{{$userdata->seat_no}}</td>
        <td>{{$userdata->dest1}}</td>
        <td>{{$userdata->dest2}}</td>
        <td>{{$userdata->book_cost}}</td>
        <td>{{$userdata->date}}</td>
        
        
        <td>
            <a href="delete/{{ $userdata->id }}"><button>Delete User</button></a>
            <a href="delete/{{ $userdata->id }}"><button>Cancel Ticket</button></a>
   
        </td>   
    </tr>
    @endforeach 
</table>
@endsection

