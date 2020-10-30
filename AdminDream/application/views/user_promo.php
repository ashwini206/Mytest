
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Apply Promocode
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Apply Promocode
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url();?>Promo_data/user_promo">
                                     <div class="form-group">
                                            <label>User</label>
                                     <select class="form-control" name="uid">
                                      
                                         <option>SELECT USER</option>
                                         <?php
                                            $s = $this->db->query("SELECT * FROM users");
                                            $r = $s->result_array();
                                            foreach ($r as $key => $value) {

                                                $uid =$value['id'];
                                               ?>
                                               <option value="<?php echo $uid;?>"><?php echo $value['user_name'];?></option>
                                               <?php
                                            }
                                         ?>
                                     </select>
                                 </div>
                                        <div class="form-group">
                                            <label>Promocode Title</label>
                                            <input class="form-control" placeholder="Enter Promocode " name="promo_title" style="text-transform:uppercase" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="number" class="form-control" placeholder="Enter Amount " name="amount" min="100" max="150000" style="text-transform:uppercase" required="">
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
