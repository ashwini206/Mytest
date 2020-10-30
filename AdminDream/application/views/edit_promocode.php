<?php
        
        @$id = $_GET['id'];
        $s = $this->db->query("SELECT * FROM promocode WHERE id='$id'");
        $r = $s->row_array();
        $id = $r['id'];

        $title = $r['promo_title'];
        $promo_title = explode(",", $title)


?>
        <!-- /. NAV SIDE  -->
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
                                    <form role="form" method="POST" action="<?php echo base_url();?>Promo_data/edit_promocode">
                                     
                                        <div class="form-group">
                                            <label>Promocode Title</label>

                                            <?php
                                            foreach ($promo_title as $key => $promo_title) 
                                            {

                                               ?>
                                                <input class="form-control" placeholder="Enter Promocode " name="promo_title[]" style="text-transform:uppercase" value="<?php echo @$promo_title;?>">
                                               <?php
                                            }
                                            ?>
                                           
                                        </div>
                                     
                                        <input type="hidden" name="id" value="<?php echo $id;?>">
                                         <div class="form-group">
                                            <label>Select Gender</label><br>
                                            <div class="radio">
                                                <label>
<input type="radio" name="gender" <?php 
if(@$r['gender']=="male") 
    {
        echo "checked";
    }
?>
 value="male">male                                             </label>
                                            </div>
                                            <div class="radio">
                                                <label>
<input type="radio" name="gender"
 <?php if(@$r['gender']=="female") 
 {echo "checked";}
 ?> 
 value="female">female                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                   <input type="radio" name="gender"
 <?php if(@$r['gender']=="both") 
 {echo "checked";
}
 ?> 
 value="female">both 
                                                </label>
                                            </div>
                                        </div>


                                           <div class="form-group">
                                            <label>Promocode Start Date</label>
                                            <input class="form-control"type="date" name="promo_sdate" value="<?php echo @$r['promo_sdate'];?>">
                                        </div>

                                          <div class="form-group">
                                            <label>Promocode End Date</label>
                                            <input class="form-control" type="Date" name="promo_edate" value="<?php echo @$r['promo_edate'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Flat Amount</label>
                                            <input class="form-control" type="number" name="flat_amount" placeholder="Enter Flat Amount" value="<?php echo @$r['flat_amount'];?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Promocode Total Usage Limit</label>
                                            <input class="form-control" type="number" name="type_limit" placeholder="Enter Total Usage Limit" value="<?php echo @$r['type_limit'];?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Promocode Per User Limit</label>
                                            <input class="form-control" type="number" name="user_limit" placeholder="Enter Per User Limit" value="<?php echo @$r['user_limit'];?>">
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
