
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Add User Information
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add User Data
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url();?>Promo_data/user_insert">
                                     
                                        <div class="form-group">
                                            <label>User-Name</label>
                                            <input class="form-control" placeholder="Enter User-name" name="user_name">
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>User DOB</label>
                                            <input type="date" name="dob" name="dob">
                                        </div>
                                       
                                   
                                        <div class="form-group">
                                            <label>User Gender</label><br>
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

