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
	
	<main>
		<div class="container margin_60_35">
			<div class="pricing-container cd-has-margins">
			<div class="pricing-switcher">
				<p class="fieldset">
					<input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
					<label for="monthly-2">Monthly</label>
					<input type="radio" name="duration-2" value="yearly" id="yearly-2">
					<label for="yearly-2">Yearly</label>
					<span class="switch"></span>
				</p>
			</div>
			<!--/pricing-switcher -->
			<ul class="pricing-list bounce-invert">
				
				<?php
				include("restricted/web-include/view-user-pricing-information.php");
				
				
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