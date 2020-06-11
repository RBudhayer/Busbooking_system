@extends('customer.customer-layout')
@section('edit-profile-form')
<div class="container">
  <div class="row">
    <br><br><br><br><br><br><br><br>
    <div class="col-md-5 toppad pull-right col-md-offset-3">
      <p class="text-info">Today is: {{ date('d-m-Y', time()) }}</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h3>
        </div>
        <div class="panel-body">
        <div class="row">
        
          @if ( Session::has('msg') )
            <p class="alert alert-info">{{ Session::get('msg') }}</p>
          @endif

          <form method="post" action="{{ route('update-profile-info') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-3 col-lg-3" align="center">
              @if ( $customer_info[0]->photo == "" ) 
                <img alt="User Pic" src="/images/pp.png" class="img-circle img-responsive">
              @else
                <img src="/images/{{ $customer_info[0]->photo }}" class="img-circle img-responsive" alt="User Pic">
              @endif
              <br><br><br>
              <input type="file" name="pp" value="Upload Photo">
            </div>
            <div class="col-md-9 col-lg-9"> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                  <td>Address:</td>
                  <td><input type="text" name="address" value="{{ $customer_info[0]->address }}"></td>
                  </tr>
                  <tr>
                  <td>Phone:</td>
                  <td><input type="text" name="phone" value="{{ $customer_info[0]->phone }}"></td>
                  </tr>
                  <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update"></td>
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