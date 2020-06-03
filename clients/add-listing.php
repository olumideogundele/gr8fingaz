<?php

include("myhead.php");
include("../restricted/web-include/view-users-details.php");

?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
		
		<?php
		
		include("../restricted/web-include/process-listing.php");
		
		
		?>
		<form method="post">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Basic info</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Listing Title</label>
						<input type="text" class="form-control" name="title" value="<?php echo $cname; ?>"  required>
						<input type="hidden" class="form-control" name="category" value="<?php echo $category; ?>"  required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Category</label>
						<div class="styled-select">
						<input type="text" class="form-control" name="category" value="<?php echo $category_name; ?>" readonly required  >
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Keywords</label>
						<input type="text" class="form-control" name="keywords" placeholder="Keywords should be separated by commas">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Description</label>
						<textarea class="editor" name="details"></textarea>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Phone (Optional)</label>
						<input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Web site (Optional)</label>
						<input type="text" class="form-control" name="website">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Email (Optional)</label>
						<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Facebook link (Optional)</label>
						<input type="text" class="form-control" name="facebook">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Twitter link (Optional)</label>
						<input type="text" class="form-control" name="twitter">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Google + (Optional)</label>
						<input type="text" class="form-control" name="googleplus">
					</div>
				</div>
			</div>
			<!-- /row-->
			<!--<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Photos</label>
						<form action="/file-upload" class="dropzone"></form>
					</div>
				</div>
			</div>-->
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-map-marker"></i>Location</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Select City</label>
						<div class="styled-select">
						 <input type="text" class="form-control" placeholder="" name="city" value="<?php echo $city; ?>"  required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" placeholder="ex. 250, Fifth Avenue..." name="address" value="<?php echo $address1; ?>">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>State</label>
						<input type="text" class="form-control"  value="<?php echo $states; ?>" name="state" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="text" class="form-control" name="zip">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-dollar"></i>Pricing <?php echo  $category_name; ?></h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h6>Item</h6>
					<table id="pricing-list-container" style="width:100%;">
						<tr class="pricing-list-item">
							<td>
								
								<?php
								
								
								include("../restricted/web-include/view-product-category-info.php");
								
								?>
								
								
								 
							</td>
						</tr>
					</table>
					<a href="#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
					</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		<p><button  type="submit" name="validate" class="btn_1 medium">Save</button></p>
		<p><input type="submit" value="Submit Now"></p>
			
			</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SPARKER 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../backend/admin_section/login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../backend/admin_section/vendor/jquery/jquery.min.js"></script>
    <script src="../backend/admin_section/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../backend/admin_section/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../backend/admin_section/vendor/chart.js/Chart.min.js"></script>
    <script src="../backend/admin_section/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../backend/admin_section/vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="../backend/admin_section/vendor/jquery.selectbox-0.2.js"></script>
	<script src="../backend/admin_section/vendor/retina-replace.min.js"></script>
	<script src="../backend/admin_section/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../backend/admin_section/js/admin.js"></script>
	<!-- Custom scripts for this page-->
	<script src="../backend/admin_section/vendor/dropzone.min.js"></script>
	<script src="../backend/admin_section/vendor/bootstrap-datepicker.js"></script>
	<script>$('input.date-pick').datepicker();</script>
	<!-- WYSIWYG Editor -->
	<script src="../backend/admin_section/js/editor/summernote-bs4.min.js"></script>
	<script>
      $('.editor').summernote({
		fontSizes: ['10', '14'],
		toolbar: [
			// [groupName, [list of button]]
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough']],
			['fontsize', ['fontsize']],
			['para', ['ul', 'ol', 'paragraph']]
		  ],
        placeholder: 'Write here ....',
        tabsize: 2,
        height: 200
      });
    </script>
	
</body>
</html>
