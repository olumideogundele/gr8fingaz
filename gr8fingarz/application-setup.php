<?php
include("header.php");
include("web-include/view-application-details-full.php");

?>
    <!-- end horizontal Menu -->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Application SetUp</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Application SetUp</li>
         </ol>
	   </div>
	    
     </div>
    <!-- End Breadcrumb-->
		
		 <div class="row">
											<div class="col-md-12">
                                            <?php
 include("web-include/application-details-process.php");
											
											?>
                                           
                                            </div> </div>
            <form method = "post" action="" enctype="multipart/form-data">                                
      <div class="row">
		    
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">Application Settings:</div>
             <div class="card-body">
              <div class="form-group overflow-hidden">
													<label>Application Name:</label>
 <input type="text" class="form-control" id="exampleInputuname_1" placeholder="Application Name" name="name" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_name1; } ?>" required>
												</div>
											  <div class="form-group overflow-hidden">
													<label>Application Moto:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1"  name="slogan" placeholder="Institution Slogan" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_slogan1;} ?>">
												</div>
                                                
											
                                         <div class="form-group overflow-hidden">
													<label>Email Address:</label>
 <input type="email" class="form-control" id="exampleInputEmail_1" name="email" placeholder="Enter email" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_email1; } ?>" required>
												</div>
                                                
                                                
                                                 <div class="form-group overflow-hidden">
													<label>Phone Number:</label>
 <input type="phone" class="form-control" id="exampleInputEmail_1" placeholder="Enter Phone" name="phone" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_phone1;} ?>" required>
												</div>
				   
				   
				   
				   <div class="form-group overflow-hidden">
													<label>Contact Address:</label>
																<input type="text" class="form-control" id="exampleInputpwd_2" name="address" placeholder="Full Address" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_address1; } ?>">
												</div>
                                                
                                                
                       <div class="form-group overflow-hidden">
													<label>Logo:</label>
 <input type="file" class="form-control" id="" name="logo" placeholder="Application Logo" required>
												</div>                         
                       <input type="hidden" class="form-control" id="logo1"  name="logo1"   value="<?php  if(isset($_GET['value']))
																									  {
																										  echo $inst_logo1;
																									  }
																									  
																									  ?>
																									  ">												
													                           
                
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">--</div>
             <div class="card-body">
                  
                                                
                                                 
                                           
                                                <div class="form-group overflow-hidden">
													<label>Account Number:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="acct_num" placeholder="Account Number" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_acct_num;} ?>" required>
												</div>
                                                
                                                
                                             <div class="form-group overflow-hidden">
													<label>Bank Name:</label>
 <select name="bank" class="form-control single-select"    id="bank"    required >
			  
	 <?php
	 if(isset($_GET['value']))
	 {
	 
	 ?>
	 
	   <option value="<?php echo $inst_bank_name; ?>" selected="selected"><?php echo $inst_bank_name; ?></option>
	 
	 <?php
	 }
	 else
	 {
		 
		 ?>
	   <option value="" selected="selected">- Select -</option>
	 <?php
	 }
		 ?>
                <?php
	 include("config/DB_config.php");
	 
	 //SELECT  `id`, `name`, `state`, `created_date`, `registeredby`, `status` FROM `business_unit` 
	 $query =  "SELECT `code`, `name`  FROM `banks` WHERE `status` = 1 AND `name` != '' ORDER BY `id` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $code=$row_distance[0];
					  $name =$row_distance[1];
					 
					  
					  
				echo '	<option value='.$code.'>'.$name.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
        
													</select>
												</div>
                                                
                                                
                                                 <div class="form-group overflow-hidden">
													<label>FlutterWaves API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="flutterwaves1" placeholder="Public API"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_flutterapi; } ?>"  required>
												</div>
												
												
												 <div class="form-group overflow-hidden">
													<label>FlutterWaves Secret API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="flutterwavessecret" placeholder="Secret API"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_flutterapisecret; }?>" required>
												</div>
				   
				    
												     
												 
												 <div class="form-group overflow-hidden">
													<label>Convinience Fee:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="fee"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_fee;} ?>" placeholder="Convinience Fee" required>
												</div>
				 
				 
				 
				 <div class="form-group overflow-hidden">
													<label>Google API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="googleapi"  value="<?php 	 if(isset($_GET['value']))
	 { echo $googleapi;} ?>" placeholder="GOOGLE MAP API:" required>
												</div>
				 
				 
				 
				 
				  <button  type="submit" name="validate" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
													 <?php
	 if(isset($_GET['value']))
	 {
	 
	 echo "Update Now";
												 
	 }
													else
													{
														
												echo "Submit Now"		;
														
													}
													?>
													 </button>
										 	
            </div>
          </div>
        </div>
		 
      </div><!-- End Row-->

 </form>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Report</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
               <thead>
                    <tr>
                      	<th>Name</th>
														<th>Moto</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														
															<th>Account Number</th>
														<th>Account Name</th>
														
														<th>Created Date</th>
					  <th>Registered By</th>
												 	   <th>Status</th>
												 	  
														<th>More</th>
                    </tr>
                </thead>
                <tbody>
												   <?php
												include("web-include/view-application.php");
												
												?>
                                                
												</tbody>
                <tfoot>
                  <tr>
                      	<th>Name</th>
														<th>Moto</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														
															<th>Account Number</th>
														<th>Account Name</th>
														
														<th>Created Date</th>
					  <th>Registered By</th>
												 	   <th>Status</th>
												 	  
														<th>More</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="backend/assets/js/jquery.min.js"></script>
  <script src="backend/assets/js/popper.min.js"></script>
  <script src="backend/assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="backend/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- horizontal-menu js -->
  <script src="backend/assets/js/horizontal-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="backend/assets/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="backend/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="backend/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
 <script src="backend/assets/plugins/select2/js/select2.min.js"></script>
    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>



    <!--Inputtags Js-->
    <script src="backend/assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

    <!--Bootstrap Datepicker Js-->
    <script src="backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });

      $('#dateragne-picker .input-daterange').datepicker({
       });

    </script>

    <!--Multi Select Js-->
    <script src="backend/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="backend/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

        //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });


          });
</script>
	
</body>
</html>
