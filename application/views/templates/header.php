<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wisdom</title>
        <!---<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">-->
        <!-- Latest compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
         <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
 
    <body>  
          
         <div class="container"  id="page-container" style= "padding-top: 50px; padding-bottom: 10px;" >
        <!-- all other page content -->
              <?php
                require 'navbar.php';
              ?>
        
            <?php if ($this->session->flashdata('recover_password')): ?>
                <?php echo '<p class="alert alert-success " id="success-message">' . $this->session->flashdata('recover_password') . '</p>' ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('user_registered')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('user_registered') . '</p>' ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('user_login_success')): ?>
                <?php echo '<p class="alert alert-success"  style="background-color: #A7C6C3;" id="success-message">' . $this->session->flashdata('user_login_success') . '</p>' ?>
            <?php endif; ?>
           
            
            <?php if ($this->session->flashdata('user_logged_out')): ?>
                <?php echo '<p class="alert alert-success"  style=" background-color: #A7C6C3;" id="success-message">' . $this->session->flashdata('user_logged_out') . '</p>' ?>
            <?php endif; ?>
            
             <?php if ($this->session->flashdata('pwd_changed')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('pwd_changed') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('pwd_incorrect')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('pwd_incorrect') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('account_delete')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('account_delete') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('pwd_no_match')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('pwd_no_match') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('registered_into_db_failed')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('registered_into_db_failed') . '</p>' ?>
            <?php endif; ?>
            
             
             <?php if ($this->session->flashdata('check_email')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('check_email') . '</p>' ?>
            <?php endif; ?>
            
                <?php if ($this->session->flashdata('activation_success')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('activation_success') . '</p>' ?>
            <?php endif; ?>
                            <?php if ($this->session->flashdata('activation_failure')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('activation_failure') . '</p>' ?>
            <?php endif; ?>
            
             <?php if ($this->session->flashdata('code_mismacth')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('code_mismacth') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('account_inactive')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('account_inactive') . '</p>' ?>
            <?php endif; ?>
            
              <?php if ($this->session->flashdata('password_email')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('password_email') . '</p>' ?>
            <?php endif; ?>
            
            <?php if ($this->session->flashdata('password_email_wrong')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('password_email_wrong') . '</p>' ?>
            <?php endif; ?>
           
             <?php if ($this->session->flashdata('pwd_updated_failed')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('pwd_updated_failed') . '</p>' ?>
            <?php endif; ?>
            
                <?php if ($this->session->flashdata('pwd_updated_success')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('pwd_updated_success') . '</p>' ?>
            <?php endif; ?>
           
           
              <?php if ($this->session->flashdata('email_not_found')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('email_not_found') . '</p>' ?>
            <?php endif; ?>
              <?php if ($this->session->flashdata('question_submitted')): ?>
                <?php echo '<p class="alert alert-success"  id="success-message">' . $this->session->flashdata('question_submitted') . '</p>' ?>
            <?php endif; ?>
            
                <?php if ($this->session->flashdata('question_nsubmitted')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('question_nsubmitted') . '</p>' ?>
            <?php endif; ?> 
            <?php if ($this->session->flashdata('answer_submitted')): ?>
                <?php echo '<p class="alert alert-success">' . $this->session->flashdata('answer_submitted') . '</p>' ?>
            <?php endif; ?> 
             <?php if ($this->session->flashdata('answer_nsubmitted')): ?>
                <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('answer_nsubmitted') . '</p>' ?>
            <?php endif; ?> 
      
   