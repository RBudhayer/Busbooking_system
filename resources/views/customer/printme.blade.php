
<link rel="stylesheet" href="{{asset('invoice/css/template.css')}}">
  <body>
    @foreach ($data as $data)
    @foreach ($userdata as $userdata)    
 
  <button><a href="{{url('customer-welcome')}}">Go Back</a></button>
  <h1 style="text-align:center" size=18px>
      <input type="button" onclick="printDiv('printableArea')" value="Download Ticket" />
    </h1>
    <br><br>
      <div id="printableArea">
          
          <div id="container">
            <div class="invoice-top">
              <section id="memo">
                <div class="logo">
                  <img src="{{asset('images/logo.png')}}"/>
                </div>
                
                <div class="company-info">
                  <span class="company-name">Online Bus Ticketing System</span>

                  <span class="spacer"></span>
                  <span class="clearfix"></span>

                  <div>+900 - 98989898989 </div>
                  <div>admin@admin.com |  </div>
                </div>

              </section>
              <div class="clearfix"></div>
            </div>
              
              <section id="invoice-info" style=" float:right">
                <div>
                  <span>Date: {{ date('d-m-Y', time()) }}</span>
                </div>
              </section>

                <span class="clearfix"></span>
                <section id="invoice-info">
                  <section id="invoice-title-number">
                    <span class="bold">Invoice No:</span>
                    <span id="number"><td>{{$data->id}}</td></span>
                    <br>
                    <br>
                  </td><span class="bold">Customer Name:</span>
                    <strong><td>{{$userdata->fname}}</td></strong>

                    
                  </section>
                </section>
            <div class="clearfix"></div>
            <div class="invoice-body">
              <section id="items">
                
                <table cellpadding="0" cellspacing="0">
                
                  <tr>
                    <th></th>
                    <th>Seat No.</th>
                    <th>Destination 1</th>
                    <th>Destination 2</th> 
                    <th>Date</th>
                    <th>Total Cost</th>

                  </tr>
                  
                  <tr data-iterate="item">
                    <td></td>
                    <td>{{$data->seat_no}}</td>
                    <td>{{$data->dest1}}</td>
                    <td>{{$data->dest2}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->book_cost}}</td>
                  </tr>
                
                </table>
                
              </section>
              
              <section id="sums">
                <table cellpadding="0" cellspacing="0">
                  <tr class="amount-total">
                    <th>Total Payment</th>
                    <td>{{$data->book_cost}}</td>
                    <td>  
                </table>  
              </section>
              
          </div>
            <br><br><br><br>
          <div class="bold">
                <tr><td><h1 style="text-align: center;">Thank you Very much! We really appericate your business.</h1></td></tr>
                @endforeach 
          @endforeach
                  
              </div>
      </div>
  </body>
<script>
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
</html>
