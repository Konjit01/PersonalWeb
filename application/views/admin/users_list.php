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
    <tr>

        <th>First Name</th>
        <th>Last Name</th>
        <th>Member Since</th>
        <th>Deactivate</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo $user->first_name ?></td>
            <td><?php echo $user->last_name ?></td>
            <td><?php echo $user->created_at ?></td>
            <td><button class="btn btn-info">Active</td>
            <td><button class="btn btn-danger">Block</td>

        </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links();
?>
<?php
$this->load->view('includes/footer');
?>