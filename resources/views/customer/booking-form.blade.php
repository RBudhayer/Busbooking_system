@extends('customer.customer-layout')
@section('booking-form')
<div class="container">
  <br> 
  <div class="row">
    <br><br><br><br><br><br><br>

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h3>
        </div>
        <div class="panel-body">
        <div class="row">
        
          @if ( Session::has('msg') )
            <p class="alert alert-info">{{ Session::get('msg') }}</p>
          @endif
          
          @if ( Session::has('error') )
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
          @endif

          @if ( count($errors) > 0 )
            @foreach ( $errors->all() as $error )
              <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
          @endif 
          <form method="post" action="{{ route('booking-now') }}">
            {{ csrf_field() }}
            <div class="col-md-12 col-lg-12">
              <table class="table table-user-information">
                <tbody>
                  <tr>
                  <td>Bus Name:</td>
                  <td>{{ $bus_info[0]->bus_name }}</td>
                  </tr>
                  <tr>
                  <td>Seat Number:</td>
                  <td>
                    <input type="text" name="seat_no" value="">
                    
                    <input type="hidden" name="bus_id" value="{{ $bus_info[0]->id }}">
                  </td>
                  </tr>
                  <tr>
                    <td>Booking Cost:</td>
                    <td>
                      {{-- <input type="text" name="book_cost" id="book_cost" value="1000" > --}}
                      <select name="book_cost" id="book_cost">
                      <option value="1000">Basic Package(1000)</option>
                      <option value="1100">Standard Package(1100)</option>
                      <option value="1200">Premium Package(1200)</option>
                    </select>$
                    </td>
                  </tr>
                  <tr>
                    <td>Source Address:</td>
                    <td>
                      <select name="dest1" id="book_cost">
                        <option value="">Select your pickup address</option>
                        <option value="pokhara">Pokhara</option>
                        <option value="dharan">Dharan</option>
                        <option value="kathmandu">Kathmandu</option>
                        <option value="illam">Illam</option>
                        <option value="nepalgunj">Nepalgunj</option>
                      </select>
                    </td>
                    </tr>

                    <tr>
                      <td>Destination Address</td>
                      <td>
                        <select name="dest2" id="book_cost">
                          <option value="">Select your dropdown address</option>
                          <option value="pokhara">Pokhara</option>
                          <option value="dharan">Dharan</option>
                          <option value="kathmandu">Kathmandu</option>
                          <option value="illam">Illam</option>
                          <option value="nepalgunj">Nepalgunj</option>
                        </select>
                      </td>
                      </tr>
                      <tr>
                        <td>Payment</td> 
                        <td>
                        <input type="radio" name="choice" value="Visa"> VISA Card
                        <input type="radio" name="choice" value="COD"> Cash on Delivery
                        <input type="text" name="payment">
                        </td>   
                      </tr>

                      <tr>
                        <td>Date of Travelling</td>
                        <td>
                          <input type="date" name="date">
                        </td>
                      </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><b>Available Seat No:</b></td>
                    <td>
                      @php 
                        $bus_total_seat = $bus_info[0]->total_seat;
                        for ( $i = 1; $i <= $bus_total_seat; $i++ ) {
                          if ( ! in_array($i, $busy_seats) ) {
                            echo " <b>- ".$i."</b>";
                          }
                        }
                      @endphp
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Booking Now"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection


 

