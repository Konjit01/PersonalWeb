<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php
$this->load->view('includes/header');
?>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Member Since</th>
        <th>Deactivate</th>
        <th>Delete</th>
    </tr>
    <thead>
    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo $user->id ?></td>
             <td><a href="<?php echo site_url('users/user_details/' . $user->id);?> "><img src="<?php echo base_url(); ?>uploads/<?php echo $user->profile_pic; ?>" width="40" height="40"  class="img-circle img-responsive img-center"></a></td>
            
            <td><?php echo $user->first_name ?></td>
            <td><?php echo $user->last_name ?></td>
            <td><?php echo $user->created_at ?></td>
            <td><button class="btn btn-info">Active</td>
            <td><button class="btn btn-danger">Block</td>

        </tr>
    <?php endforeach; ?>
        <tfoot>
    <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Member Since</th>
        <th>Deactivate</th>
        <th>Delete</th>
    </tr>
   <tfoot>
</table>



<?php echo $this->pagination->create_links();
?>

<div class="card" style="width: 18rem;">
  <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Quick sample text to create the card title and make up the body of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
$this->load->view('includes/footer');
?>