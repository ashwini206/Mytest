
<?php

$id = $_GET['id'];
$s =$this->db->query("SELECT * FROM promocode WHERE id ='$id'");
$r = $s->row_array();
$title =$r['promo_title'];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                         
                        <h1 class="page-header">
                          <?php echo $title;?>
                        </h1>

                      <br>
                    </div>
                </div>
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                               <?php echo $title;?>
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
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                         $s = $this->db->query("SELECT * FROM users WHERE pc_id ='$id'");
                                         $r = $s->result_array();

                                            @$pc_id = $r['pc_id'];

                                        
                                        
                                         foreach ($r as $key => $r) {

                                             $s1 = $this->db->query("SELECT * FROM promocode where id='$pc_id'");
                                             $rr = $s1->row_array();
                                             $promo_title = $rr['promo_title'];
                                   

                                          
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo @$r['id'] ?></td>
                                            <td><?php echo @$r['user_name'] ?></td>
                                            <td><?php echo @$r['dob'] ?></td>
                                            <td><?php echo @$r['gender'] ?></td>
                                             <td><?php echo @$r['amount'] ?></td>
                                           
                                            
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
