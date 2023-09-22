<?php include('header.php')?>

		

				<!-- container -->
				<div class="main-container container-fluid">

					

					<!-- row -->
					<div class="page-inner">
    <section>
        <div class="row">
            <form action="" method="post">

                <input type="hidden" name="_token" value="0Im742dhvLZwdnDpzuTOEme9VjsH7M9LlNKsecST">                
                <div class="col-md-12 p-0">
                    <div class="card" style="height: 85px;">
                        <div class="how-pay text-center" data-toggle="modal" data-target="#howpayModal"><i class="fa fa-question-circle" aria-hidden="true"></i>How to Pay?</div>
                        <h6 style="text-align: center; font-size: 18px;">Payment Amount</h6>
                        <h2 style="text-align: center; margin: 0;">₹ 50000</h2>
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <div class="form-group">
                        <label for="myInput" style="color: #a3a3a3;">Pay To Company UPI</label>
                        <input id="myInput" type="text" value="safijaan022@oksbi" disabled>
                        <span class="copy-btn" id="copyBtn" onclick="myFunction()">Copy</span>
                    </div>
                    <div class="step-upi">
                        <table width="100%">
                            <tbody><tr>
                                <th>Step 1.</th>
                                <td>Pay the amount to above UPI address &amp; enter the the reference number.</td>
                            </tr>
                            <tr>
                                <th>Step 2.</th>
                                <td>
                                    <input class="form-group" type="tel" minlength="12" maxlength="12" id="transaction_id" class="rounded-0" required="" placeholder="Transaction Id / UTR No. / Ref No. *" name="transaction_id">
                                </td>
                            </tr>
                        </tbody></table>
                        <p style="color: red;">You must fill in the correct Transaction Id / UTR No. / Ref. No. after payment, then click the below button to submit!</p>
                    </div>
                </div>
                <div class="col-xs-12 p-0">
                    <div class="recharge">
                        <input type="hidden" name="amount" value="50000">
                        <div class="form-group text-center">
					<button id="button" type="submit" class="btn btn-primary data-table-btn mb-2 mt-2 w-100">Confirm Payment</button>
					</div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="ref-upi">
        <div class="row">
            <div class="col-12">
                <div class="sec-title">
                    <h4 style="font-size: 13px;">Transaction Id / UTR No. / Ref No. Examples</h4>
                </div>
            </div>
            </div>
            
           
                <div class="row text-center">
                    <div class="col-xs-6 ref-upi-iner mb-3">
                        <img src="https://www.mmaxmall.live/mall/img/ref1.png" width="50%">
                    </div>
                    <div class="col-xs-6 ref-upi-iner mb-3">
                        <img src="https://www.mmaxmall.live/mall/img/ref2.png" width="50%">
                    </div>
                    <div class="col-xs-6 ref-upi-iner mb-3">
                        <img src="https://www.mmaxmall.live/mall/img/ref3.png" width="50%">
                    </div>
                    <div class="col-xs-6 ref-upi-iner mb-3">
                        <img src="https://www.mmaxmall.live/mall/img/ref4.png" width="50%">
                    </div>
                    <div class="col-xs-6 ref-upi-iner mb-5">
                        <img src="https://www.mmaxmall.live/mall/img/ref5.png" width="50%">
                    </div>



                </div>
            
        
    </section>

</div>


					</div>
				
			
		


		<?php include('footer.php')?>