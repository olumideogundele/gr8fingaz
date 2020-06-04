<?php

include("header.php");
?>
	<!-- /header -->
	
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Pricing Tables</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	 
 <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
	<main>
		<div class="container margin_60_35">
			<div class="pricing-container cd-has-margins">
			 
			<!--/pricing-switcher -->
			<ul class="pricing-list bounce-invert">
				 
						
 <?php
		$total = 0;	
		$reff  = "";
		$statusing = 0;
		$flutterapi = "";
		if(isset($_GET['mo']))
		{
		
			 
			$amount_id = $_GET['mo'];
			$_SESSION['name'] = "Olumide Ogundele";
		 
			
			
			$fee = $myName->showName($conn, "SELECT `investment` FROM `users_investment_type` WHERE `id` = '$amount_id'"); 
		 
						$total = $fee;		 
									
						
									
						$reff = rand(33, 433344).date("YmdGis");
							$flutterapi = $myName->showName($conn, "SELECT `flutterapi` FROM `application` WHERE 1"); 
			echo '<button type="button" onClick="payWithRave()"  class="btn btn-primary btn-lg btn-block"> Please click here  if payment is delayed for more than 20 seconds.</button>';
			
			$statusing = 1;
	 				
	}
		else{
			
		  
			 
			echo '<a href = "" class="btn btn-danger btn-lg btn-block">Error Occured: Fund Value Entered Not Acceptable. Please check and try again later.</a>';
			
			//echo "<script type='text/javascript'>alert(\"Error Occured: Fund Value Entered Not Acceptable. Please check and try again later.\");</script>";
			
			
			 echo '<meta http-equiv="Refresh" content="10; url= dashboard.php"> ';
			
		}
								
								
								?>
		
		<div class="mb-1" align="center" style="align-content: center;">
                     <p>
<p>
                    <img src="wait2.gif" alt="image" class="imaged img-fluid">
                </div>
		
		
		<?php
		
		if($statusing == 1)
		{
		?>
		
		<script>
	 window.onload = function ()
    {
         //document.forms['formpay'].submit();
		 
	  payWithRave();
    }   
</script>	
		
		<script>
    

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: "<?php echo $flutterapi; ?>",
            customer_email: "info@payall.com.ng",
            amount: "<?php echo $total; ?>",
            currency: "NGN",
            txref:  "<?php echo $reff; ?>",
            meta: [{
                metaname: "<?php echo  $_SESSION['name']; ?>",
                metavalue: "wallet Funding for - <?php echo $_SESSION['name']; ?>" 
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect flwRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (response.tx.chargeResponseCode == "00" || response.tx.chargeResponseCode == "0")
				{
                   //alert("Payment Successfully Processed. \nPlease Click OK button and wait a little bit \n to get your token.");
				  var message = response.tx.vbvrespmessage;
					var txref = response.tx.txRef; 
					
					alert("Payment Successfull: "+message+". \nYou will be redirected shortly. \nPlease wait.");
	 					 window.location = "wallet-payment-confirmation.php?txref="+txref;
					window.location.replace("wallet-payment-confirmation.php?txref="+txref);
					
					window.location.href = "wallet-payment-confirmation.php?txref="+txref;
		 

// Simulate an HTTP redirect:

					
					// redirect to a success page
                } else {
                    // redirect to a failure page.
					
					 var message = response.tx.vbvrespmessage;
					alert("Payment Not Successfull: "+message+". Please try again later. ");
					//alert("Transaction Not Successful. \n Please click ok to continue.\nTransaction Status: "+message);
						 window.location = "wallet-payment-confirmation.php?txref="+txref;
					window.location.replace("wallet-payment-confirmation.php?txref="+txref);
					
					window.location.href = "wallet-payment-confirmation.php?txref="+txref;
		 
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
		
		
	<?php
		}
			
			?>	
			 
				 
			</ul>
			<!-- /pricing-list -->
		</div>
		<!-- /pricing-container -->	
		</div>
		<!-- /container -->

		<!--<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-6">
						<div class="box_faq">
							<i class="icon_info_alt"></i>
							<h4>Porro soleat pri ex, at has lorem accusamus?</h4>
							<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box_faq">
							<i class="icon_info_alt"></i>
							<h4>Ut quo inani dolorem mediocritatem?</h4>
							<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="box_faq">
							<i class="icon_info_alt"></i>
							<h4>Per sale virtute legimus ne?</h4>
							<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box_faq">
							<i class="icon_info_alt"></i>
							<h4>Mea in justo posidonium necessitatibus?</h4>
							<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus. Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne. Mea dicta facilisis eu.</p>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>-->
		
	</main>
	<!--/main-->
	
	<?php


include("footer.php");

?>