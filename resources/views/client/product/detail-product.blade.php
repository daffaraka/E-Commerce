@extends('client.layout')
@section('content')
<div class="container my-5">
   <div class="row p-5">
       <div class="col-md-6 p-0 m-0 bg-light rounded">
        <div class="card p-3">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <img class="details-image shadow rounded" src="https://img.freepik.com/free-photo/podium-display-with-product-presentation-3d-rendering_41470-3668.jpg?t=st=1652544534~exp=1652545134~hmac=22b7d1345cef032f9f8b0575be547100c33da6696ea0efaf636031ee60bf6280&w=740" alt="">
            </div>
        </div>
       </div>
       <div class="col-md-6 bg-light p-0">
           <div class="card p-3">
               <div class="card-body">
                <div class="right-side">
                    <h5>Payment Details</h5>
                    <h5>Complete your purchase by providing your payment details.</h5>
                    <div class="input_text"> <input type="text"> <span>Email address</span> </div>
                    <div class="input_div">
                        <div class="input_text _input"> 
                            <input type="text" placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size="19"> <span>Card Details</span> 
                            <i class="fa fa-credit-card"></i> 
                        </div>
                        <div class="cvv_month">
                            <div class="input_text ">
                                 <input class="months" type="text" placeholder="mm/yyyy" data-slots="my">
                            </div>
                            <div class="input_text ">
                                <input  class="cvcs" type="text" placeholder="000" data-slots="0" data-accept="\d" size="3"> 
                            </div>
                        </div>
                    </div>
                    <div class="input_text"> <input type="text" placeholder="Luk"> <span>Cardholder Name</span> </div>
                    <div class="billing">
                        <div class="input_text"> <span>Billing Address</span> <select>
                                <option>Select Country</option>
                                <option>China</option>
                                <option>Thailand</option>
                                <option>India</option>
                                <option>Russia</option>
                                <option>Japan</option>
                                <option>Vatican City</option>
                            </select> </div>
                        <div class="zip_state"> <input type="number" placeholder="ZIP"> <input type="text" placeholder="State"> </div>
                    </div>
                    <div class="input_text"> <input type="text" placeholder="GB0124589"> <span>VAT Number</span> </div>
                    <div class="bill_content">
                        <div class="bill_content_text">
                            <h4>Subtotal</h4>
                            <p>$29.00</p>
                        </div>
                        <div class="bill_content_text">
                            <h5>VAT (20%)</h5>
                            <p>$5.80</p>
                        </div>
                        <div class="bill_content_text total">
                            <h4>Total</h4>
                            <p>$34.80</p>
                        </div>
                    </div>
                </div>
               </div>
           </div>
      
       </div>
       
   </div>
</div>
@endsection