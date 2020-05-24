<?php
include("header.php");
include("web-include/view-application-details-full.php");
 include("web-include/view-investment-details-all.php");

$buttonValue="Submit Now";
$buttonName = "validate";


if(isset($_GET['value'])) 
{  
	$buttonValue="Update Now";
$buttonName = "update";
}

?>
    <!-- end horizontal Menu -->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		   <h4 class="page-title">Service Provider Package SetUp</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service Provider Package SetUp</li>
         </ol>
	   </div>
	    
     </div>
    <!-- End Breadcrumb-->
		
		 <div class="row">
											<div class="col-md-12">
                                            <?php
											include("web-include/setup-investment.php");
											
											?>
                                           
                                            </div> </div>
            <form method = "post" action="" enctype="multipart/form-data">                                
      <div class="row">
		    
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">Subscription Package Information:</div>
             <div class="card-body">
				 
			  <div class="form-group">
 <label for="fname1" class="control-label col-form-label"> Package Name</label>
 <input type="text"   name="name" class="form-control" id="name" placeholder="Bronze/Silver/Gold" required  value="<?php   if(isset($_GET['value']))   {   echo $e_name; } ?>">
                                            </div>
				 
				 
				   <div class="form-group">
                                                <label for="fname1" class="control-label col-form-label">Validity Period</label>
 <input type="text" id="maturity"  class="form-control" name="maturity"  placeholder="Validity Period (Months) e.g. 5" required  value="<?php   if(isset($_GET['value']))   {   echo $e_maturity; } ?>">
                                            </div>
				 
				 
				 
				 
				  <div class="form-group">
                                                    <label for="email2" class="control-label col-form-label">Package Amount</label>
                                                    <input type="text" name="investment" class="form-control" id="investment" placeholder="Investment Amount" required value="<?php   if(isset($_GET['value']))   {   echo $e_investment; } ?>">
													
													
													
													
													<input type="hidden" name="e_id" class="form-control"  value="<?php   if(isset($_GET['value']))   {   echo $e_id; } ?>">
                                                </div> 
				 
				 
				 
				 
				  <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Form text editor</div>
            <div class="card-body">
             <textarea id="summernoteEditor" name="information">
                     <?php   if(isset($_GET['value']))   {   echo $e_information; } ?>
                  </textarea>
                </div>
              </div>
            </div>
          </div>
                       
				 
											   <div class="form-group">
                      <label>Status</label>
                      <select class="form-control single-select" name="status">
                          <option value = "1">Active</option>
                          <option value="0">Inactive</option>
                         
                      </select>
                    </div>
					  <button type="submit"  name="<?php echo $buttonName; ?>" id="validate" class="btn btn-info waves-effect waves-light"><?php echo $buttonValue; ?></button>
                                            <button type="reset" class="btn btn-dark waves-effect waves-light">Cancel</button>               
                                         
                                                
                                  
                                                  
                
            </div>
          </div>
        </div>
		
		  
        <div class="col-lg-6">
          <div class="card">  <?php
		  include("web-include/update_column.php");
		  include("web-include/deleteclass.php");
		  
		  ?>
            <div class="card-header text-uppercase">--</div>
             <div class="card-body">
                  
                             <div class="table-responsive">
            
                     <table id="example" class="table table-bordered">
               <thead>
                    <tr>
		 
														<th>Investment Package</th>
														<th>Maturity</th>
														 
														<th>Investment Amount</th>
														 
														<th>Created Date</th>
														<th>Registered  Date</th>
                                                        <th>Status</th>
														<th>More</th>
													 
													</tr>
                </thead>
                <tbody>
												   <?php
												include("web-include/view-investment-setup.php");
												
												?>
                                                
												</tbody>
                <tfoot>
                 <tr>
		 
														<th>Investment Package</th>
														<th>Maturity</th>
												 
														<th>Investment Amount</th>
														 
														<th>Created Date</th>
														<th>Registered  Date</th>
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

 </form>
       <!-- End Row-->
       <!-- End Row-->
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


<script src="backend/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 200,
            tabsize: 2
        });
  </script>


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
