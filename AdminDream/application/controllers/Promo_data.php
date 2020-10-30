<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Promo_data extends CI_Controller {  
      //functions  
 
      public function user_insert()
{
  $data = array(

          'user_name'=>$_POST['user_name'],
          'dob'=>$_POST['dob'],
          'gender'=>$_POST['gender']
        );
      $i = $this->db->insert('users',$data);
      if($i)
      {
         ?>
                        <script type="text/javascript">
                        alert('User Data Insert!!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                        <?php
      }
      else
      {
        ?>
                        <script type="text/javascript">
                        alert('Fail!!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                <?php
      }

}
      public function add_promocode()
      {
            @$promo_title = implode(',', $_POST['promo_title']); 

          $data=array(

              'promo_title'=>strtoupper($promo_title),
              'gender'=>$_POST['gender'],
              'promo_sdate'=>$_POST['promo_sdate'],
              'promo_edate'=>$_POST['promo_edate'],
              'type_limit'=>$_POST['type_limit'],
              'user_limit'=>$_POST['user_limit'],
              'flat_amount'=>$_POST['flat_amount']

          );
          $i = $this->db->insert('promocode',$data);
          if($i)
          {

            ?>
                        <script type="text/javascript">
                        alert('Successfully Promocode Insert!!');
                        window.location.href="<?php echo site_url('Home');?>";
                        </script>
                        <?php

          }
          else
          {
             ?>
             <script type="text/javascript">
                        alert('Fail');
                        window.location.href="<?php echo site_url('Home/Add_promo');?>";
                        </script>
                        <?php
          }

      }

      public function edit_promocode()
      {
         @$promo_title = implode(',', $_POST['promo_title']); 

        $id = $_POST['id'];
          $data=array(

              'promo_title'=>strtoupper($promo_title),
              'gender'=>$_POST['gender'],
              'promo_sdate'=>$_POST['promo_sdate'],
              'promo_edate'=>$_POST['promo_edate'],
               'type_limit'=>$_POST['type_limit'],
              'user_limit'=>$_POST['user_limit'],
              'flat_amount'=>$_POST['flat_amount']

          );
          $this->db->where('id',$id);
          $i = $this->db->update('promocode',$data);
          if($i)
          {

            ?>
                        <script type="text/javascript">
                        alert('Successfully Promocode Update!!');
                        window.location.href="<?php echo site_url('Home/Promocode');?>";
                        </script>
                        <?php

          }
          else
          {
             ?>
             <script type="text/javascript">
                        alert('Fail');
                        window.location.href="<?php echo site_url('Home/Add_promo');?>";
                        </script>
                        <?php
          }

      }
         public function delete_promocode()
        {
            $id =$_GET['id'];
            $this->db->where('id',$id);
            $i=$this->db->delete('promocode');
            if($i)
            {
                ?><script>alert("successfully Delete");</script>
                <?php redirect('Home/Promocode','refresh');
            }
            else
            {
                 ?><script>alert("Fail");</script>
                <?php redirect('Home','refresh');
            }
        }


      public function user_promo()
      {

          $promo_title = $_POST['promo_title'];
          $uid = $_POST['uid'];
          $amount = $_POST['amount'];


         date_default_timezone_set("Asia/Kolkata");
            $dt=new DateTime();
              $date=$dt->format('Y-m-d');
             $time=$dt->format('H:i:sa');


             $s = $this->db->query("SELECT * FROM promocode WHERE promo_title='$promo_title'");
             $r = $s->row_array();

             $pc_id = $r['id'];
            
             $promo_sdate = $r['promo_sdate'];
              $promo_edate = $r['promo_edate'];
              $flat_amount = $r['flat_amount'];

               $s1 = $this->db->query("SELECT * FROM users WHERE id='$uid'");
             $r1 = $s1->row_array();
           
              $dob = $r1['dob'];
            

             if($promo_edate<$date)
           {
             ?>
                        <script type="text/javascript">
                        alert('This Promocode is Expired !!');
                        window.location.href="<?php echo site_url('Home/Promocode');?>";
                        </script>
                        <?php
           }
         
         elseif($promo_edate==$date)
         {
          $total =$amount-$flat_amount;
        $data =array(


              'amount'=>$total,
              'pc_id'=>$pc_id
        );
            
         
         $this->db->where('id',$uid);
        $i = $this->db->update('users',$data);
        if($i)
        {
          ?>
                        <script type="text/javascript">
                        alert('Apply Promocode !!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                        <?php
           
           }
           else
           {
             ?>
                        <script type="text/javascript">
                        alert('Failr !!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                        <?php

           }
         }

        else
       {
            if($dob==$date)
            {
              $ab =10/100*$amount;
              $total1 =$ab;
            $data =array(


              'amount'=>$total1,
              'pc_id'=>$pc_id
        );
            }
            else
            {
               $total =$amount-$flat_amount;
        $data =array(


              'amount'=>$total,
              'pc_id'=>$pc_id
        );
            }
         
         $this->db->where('id',$uid);
        $i = $this->db->update('users',$data);
        if($i)
        {
          ?>
                        <script type="text/javascript">
                        alert('Apply Promocode !!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                        <?php
           
           }
           else
           {
             ?>
                        <script type="text/javascript">
                        alert('Failr !!');
                        window.location.href="<?php echo site_url('Home/Users');?>";
                        </script>
                        <?php

           }
        }
      }
      }
      ?>