<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<div class="container ctr-div" style=" margin: 0 auto;
     width:110%;">
    <div class="col-md-offset-4 col-md-3" id="user-info" style=" padding-top: 10px;  margin-top:120px; border:1px solid #FFF; border-radius: 10px;   box-shadow: 0px 0 16px 0 rgba(0,0,0,0.24), 0px 0 0px  0 rgba(0,0,0,0.19);">


        <legend  style="color: #099; paddin-bottom: 0px;">PLEASE LOGIN <img style="padding-top: -20px;"src="<?php echo base_url(); ?>uploads/wis-logo.png" width="100" height="60" class=" img-center"></a></legend>

        <form id = "login-form" action="<?php echo base_url() ?>users/login" method="post">
            <div class="form-group has-feedback">

                <input type="email" class="form-control" name="username" value="<?php echo set_value('username'); ?>"placeholder="Enter Your Username or E-mail">
                <span style=" color: #4CAF50;" class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php echo form_error('username', '<div class="error">', '</div>'); ?>
            </div>

            <div class="form-group has-feedback">

                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                <span style=" color: #4CAF50;" class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo form_error('password', '<div class="error">', '</div>'); ?>
            </div>

            <button class="btn btn-block" style = " background-color: #4CAF50; color: white;">Login</button>
            <p style="color:#099;"><strong>New?</strong>
                <a href="<?php echo base_url() ?>users/register">Register</a>  &nbsp;   &nbsp;   
                <a href="#forgot-password" data-toggle="modal" class="btn btn-link"
                   role="link" name="op" value="Login">Forget password?</a>
            </p>

            <?php echo form_close(); ?>

    </div>
</div>

<!-- Modal -->
<div id="forgot-password" class="modal fade " role="dialog" style=" margin: auto;" >
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <?php;
            echo form_open("users/password_recovery");
            ?>

            <div class="modal-header">
                <h3 class="panel-title" style="color: #099;"><strong>RECOVER YOUR PASSWORD</strong></h3>
            </div>
            <div class="modal-body">
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-at"></i> </span>
                    <input type="email" name="email_recovery" id="email"
                           class="form-control" value="<?php echo set_value('email_recovery'); ?>"placeholder="Enter Your E-mail" />
                     <?php echo form_error('email_recovery', '<div class="error">', '</div>'); ?>

                </div>
                <div id="alert-msg"></div>
                <input class="btn btn-block" id="submit" style = " background-color: #4CAF50; color: white;"type="submit" value="Submit">

            </div>
            </form>
            <div class="modal-footer">
                <a class="btn btn-default" style = " background-color: #4CAF50; color: white;" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).on("click", ".btn", function () {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>users/password_recovery",
            data: {your: data},
            success: function (data) {

                //and from data parse your json data and show error message in the modal
                var obj = $.parseJSON(data);
                if (obj !== null)
                {
                    $('#err_mssg').html(obj['error_message']);
                }
            }});
    });
    ></script>