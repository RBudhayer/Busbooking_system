@extends('customer.customer-layout')
<br><br><br><br><br>

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
    @foreach ($data as $data)
    @foreach ($userdata as $userdata)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$userdata->fname}}</td>
        <td>{{$userdata->email}}</td>
        <td>{{$data->seat_no}}</td>
        <td>{{$data->dest1}}</td>
        <td>{{$data->dest2}}</td>
        <td>{{$data->book_cost}}</td>
        <td>{{$data->date}}</td>
        
        
        <td>
            <a href="delete/{{ $data->id }}"><button>Cancel Ticket</button></a>
        </td>   
    </tr>
    @endforeach 
    @endforeach
</table>

