
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url()?>Home/Add_user" class="btn btn-primary btn-lg" style="margin-left: 850px;">Add User</a>
                        <h1 class="page-header">
                          User Data Tables
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Name </th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Amount</th>
                                          <!--   <th>Promocode Name</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                         $s = $this->db->query("SELECT * FROM users");
                                         $r = $s->result_array();
                                        
                                    
                                       
                                        
                                         foreach ($r as $key => $r) {
                                             @$uid =$r['id'];

                                            @$pc_id = $r['pc_id'];

                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo @$r['id'] ?></td>
                                            <td><?php echo @$r['user_name'] ?></td>
                                            <td><?php echo @$r['dob'] ?></td>
                                            <td><?php echo @$r['gender'] ?></td>
                                             <td><?php echo @$r['amount'] ?></td>
                                            <!-- <td><?php echo @$rr1['promo_title'] ?></td> -->
                                            <td>
                                             
                     
                                                <a href="<?php echo base_url();?>Home/User_promocode?uid=<?php echo $uid?>">Promocode</a>&nbsp;&nbsp;
                                            </td>
                                        </tr>
                                       <?php
                                   }
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
        </div>
               <footer><p>All right reserved. Template by: <a href="<?php echo base_url();?>html/http://webthemez.com">WebThemez</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url();?>html/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>html/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>html/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>html/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>html/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="<?php echo base_url();?>html/assets/js/custom-scripts.js"></script>
   
   
</body>
</html>
