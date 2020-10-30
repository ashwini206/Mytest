<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <a href="<?php echo base_url();?>Home/Apitest">Testing For Api</a>

<h2>Employee Details</h2>
<a href="<?php echo base_url();?>Home"><button>Add Information</button></a>
</br>
</br>
<table>
  <tr>
    <th>Nmae </th>
    <th>Address</th>
    <th>Salary</th>
    <th>DOB</th>
    <th>Action</th>
  </tr>
  <?php
  @$s = $this->db->query("SELECT * FROM employee");
  $r = $s->result_array();
  foreach ($r as $key => $value) {
    $id = $value['id'];
  
  ?>
  <tr>
    <td><?php echo $name= $value['name'];?></td>
    <td><?php echo $address= $value['address'];?></td>
    <td><?php echo $salary= $value['salary'];?></td>
    <td><?php echo $dob= $value['dateofbirth'];?></td>
    <td><a href="<?php echo base_url();?>Home/Edit?id=<?php echo $id;?>">Edit</a>&nbsp;<a href="<?php echo base_url();?>Home/delete?id=<?php echo $id;?>">Delete</a></td>
  </tr>
  <?php
}
?>
</table>

</body>
</html>
