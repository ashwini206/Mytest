
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                       <a href="<?php echo base_url()?>Home/Add_promo" class="btn btn-primary btn-lg" style="margin-left: 850px;">Add Promocode</a>

                        <h1 class="page-header">
                          Promocode Tables
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Promocode Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Promocode </th>
                                            <th>Gender</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Flat Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                         $s = $this->db->query("SELECT * FROM promocode");
                                         $r = $s->result_array();
                                       
                                         foreach ($r as $key => $r) {

                                          $id = $r['id'];
                                          $status = $r['status'];

                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo @$r['id'] ?></td>
                                            <td><?php echo @$r['promo_title'] ?></td>
                                            <td><?php echo @$r['gender'] ?></td>
                                            <td><?php echo @$r['promo_sdate'] ?></td>
                                             <td><?php echo @$r['promo_edate'] ?></td>
                                            <td><?php echo @$r['flat_amount'] ?></td>
                                            <td>
                                              <?php
                                              if($status==1)
                                              {
                                                ?>
                                               <button style=" background-color: transparent; border: none; color: #428BCA;" onclick="myFunction()"> EDIT</button>&nbsp;&nbsp;
                                                <?php
                                              }
                                              else
                                              {
                                                ?>
                                                <a href="<?php echo base_url();?>Home/Edit_promo?id=<?php echo $id;?>">EDIT</a>&nbsp;&nbsp;
                                                <?php
                                              }
                                              ?>
                                              
                     

                                          <?php
                                              if($status==1)
                                              {
                                                ?>
                                              <button style=" background-color: transparent; border: none; color: #428BCA;" onclick="myFunction()"> DELETE</button>&nbsp;&nbsp;
                                                <?php
                                              }
                                              else
                                              {
                                                ?>
                                                <a href="<?php echo base_url();?>Promo_data/delete_promocode?id=<?php echo $id;?>">DELETE</a>&nbsp;&nbsp;

                                                <?php
                                              }
                                              ?>
                                              <a href="<?php echo base_url();?>Home/User_list?id=<?php echo $id;?>">USER LIST</a>&nbsp;&nbsp;

                                               <a href="<?php echo base_url();?>Home/Promo_view>">VIEW</a>&nbsp;&nbsp;
                                               
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

        <script>
function myFunction() {
  alert("This Promocode Is Activated!");
}
</script>
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

