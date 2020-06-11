@extends('admin.admin-layout')
@section('admin-profile')
<div class="container">
  <div class="row">
    <br><br><br><br><br><br><br>
    <div class="col-md-5 toppad pull-right col-md-offset-3">
      <a href="{{ url('admin-edit') }}">Edit Profile</a>
      <br>
      <p class="text-info">Today is: {{ date('d-m-Y', time()) }}</p>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h3>
        </div>
        <div class="panel-body">
        <div class="row">
          <div class="col-md-3 col-lg-3" align="center">
            @if ( isset($customer_info[0]->photo) && $customer_info[0]->photo == "" ) 
              <img alt="User Pic" src="/images/pp.png" class="img-circle img-responsive">
            @else
              <img src="/images/{{ $customer_info[0]->photo }}" class="img-circle img-responsive" alt="User Pic">
            @endif
          </div>
            <div class="col-md-9 col-lg-9"> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                  <td>Address:</td>
                  <td>{{ isset($customer_info[0]->address) ? $customer_info[0]->address : '' }}</td>
                  </tr>
                  <tr>
                  <td>Phone:</td>
                  <td>{{ isset($customer_info[0]->phone) ? $customer_info[0]->phone : '' }}</td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td>{{ isset($user_info[0]->email) ? $user_info[0]->email : '' }}</td>
                    </tr>
                </tbody>
              </table>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
@endsection