<!DOCTYPE html>
<html>
<head>
 <title>EDIT USER</title>
 <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
</head>
<?php
print_r($data);
?>
<body>
 <div class="container">
  <br />
  <h3 align="center">Update User Information</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">UPDATE</div>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>private_area/update">
     <div class="form-group">
      <label>Name</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo $data['name']; ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo $data['email']; ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <!--<div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>-->
     <div class="form-group">
      <input type="submit" name="update" value="Update" class="btn btn-info" />
      <a href="<?php echo base_url(); ?>private_area/">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
