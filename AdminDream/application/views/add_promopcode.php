
        <!-- /. NAV SIDE  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add Promocode
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Promocode
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url();?>Promo_data/add_promocode">
                                     
                                       
        <div data-role="appendRow">
            <div class="form-inline form-row">
           

                    <input type="text" id="field-name" name="promo_title[]" class="form-control" style="margin-right:50px;text-transform:uppercase; width: 190px;" placeholder="Enter promo code" required="">

                           
              <!-- file upload start-->
           
                 <!-- file upload ends-->                
                                   
                <button class="btn btn-sm btn-danger  mb-2" data-role="remove">
                 <i class="fa fa-minus"></i>
                </button>
                <button class="btn btn-sm btn-primary  mb-2" data-role="add">
                    <i class="fa fa-plus"></i>
                </button>
               
               
            </div>  <!-- /div.form-inline -->
        </div>
                                     

                                         <div class="form-group">
                                            <label>Select Gender</label><br>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios2" value="female">Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios3" value="both">Both
                                                </label>
                                            </div>
                                        </div>


                                           <div class="form-group">
                                            <label>Promocode Start Date</label>
                                            <input class="form-control"type="date" name="promo_sdate" required="">
                                        </div>

                                          <div class="form-group">
                                            <label>Promocode End Date</label>
                                            <input class="form-control" type="Date" name="promo_edate" required="" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Flat Amount</label>
                                            <input class="form-control" type="number" name="flat_amount" Min="1" placeholder="Enter Flat Amount" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Promocode Total Usage Limit</label>
                                            <input class="form-control" type="number" name="type_limit" Min="1" placeholder="Enter Total Usage Limit" required="">
                                        </div>

                                         <div class="form-group">
                                            <label>Promocode Per User Limit</label>
                                            <input class="form-control" type="number" name="user_limit" Min="1" placeholder="Enter Per User Limit" required="">
                                        </div>

                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                       
                                    </form>
                                </div>
                               

                                <!-- /.col-lg-6 (nested) -->
                             
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


<script type="text/javascript">
    // Dynamically add-on fields

$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="appendRow"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-row').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="appendRow"] > .form-row [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="appendRow"]');
            new_field_group = container.children().filter('.form-row:first-child').clone();
          new_field_group.find('label').html('Upload Document'); new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});


// file upload

$(document).on('change', '.file-upload', function(){
  var i = $(this).prev('label').clone();
  var file = this.files[0].name;
  $(this).prev('label').text(file);
});


</script>

