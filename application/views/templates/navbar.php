<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Basic Navigation Bar-->

<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="<?php echo base_url(); ?>categories/"><p style="font-family: impact; color: #4CAF50; font-size: 25px;">TechWisdom</p></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li >
               <li><a class=" btn navbar-btn signin" style ="padding: 5px 7px; background-color: #4CAF50; color:white; " href="<?php echo base_url(); ?>questions/index">Q&A &nbsp;</a></li>
             
                </li>
               
            </ul>

            <form class="navbar-form navbar-left" action="<?php echo base_url(); ?>units/search_units" method="POST">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search for contents...">
                    <div class="input-group-btn">
                        <button class="btn " style = " background-color: #4CAF50; color: white;"type="submit">
                            <i class="glyphicon glyphicon-search" ></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li ><a href="<?php echo base_url(); ?>units/aboutus">ABOUT US&nbsp;<span class="glyphicon glyphicon-user" style="color: #4CAF50;"></span></a>	</li>

                <?php if ($this->session->userdata('logged_in')): ?> 
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CREATE <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url(); ?>categories/create">&nbsp;<span class="glyphicon glyphicon-pencil" style="color: #4CAF50;"></span>Categories</a></li>
                        <li><a href="<?php echo base_url(); ?>units/create">&nbsp;<span class="glyphicon glyphicon-pencil" style="color: #4CAF50;"></span>Articles</a></li>

                      
                    </ul>
                </li>
                <?php endif; ?>
             
                <?php if (!$this->session->userdata('logged_in')): ?>
                    <li><a  class="nav-link" href="<?php echo base_url(); ?>users/login">LOGIN&nbsp;<span class="glyphicon glyphicon-log-in"  style="color: #4CAF50;"></span></a></li>
                    <li><a class=" btn navbar-btn signin" style ="padding: 5px 7px; padding-top: 7px; margin-right: 20px; background-color: #4CAF50; color:white; " href="<?php echo base_url(); ?>users/register">SIGNUP </a></li>
                <?php endif; ?>
                <style>
                    .vertical-line{
                        display: inline-block;
                        border-left: 1px solid #ccc;
                        margin: 0 10px;
                        height: 40px;
                        padding-top: 5px;
                        margin-top: 5px;
                    }
                </style>

                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"  style="color: #4CAF50;"></span></a></li>
              
                    <li><a href="#"><span class="glyphicon glyphicon-bell"  style="color: #4CAF50;"></span></a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><span class="vertical-line"></span><li>
                    <?php endif; ?>

                    <?php if ($this->session->userdata('logged_in')): ?>
                    <li>
                    <li style = "padding-right: 2px;"><p style="color: #099; padding-top: 15px; padding-right: 0px;"><?php echo " "; ?><?php echo '<strong>' . ucfirst($this->session->userdata('last_name')); ?></strong></p><li>
                        <div class="col-xs-12 dropdown" style="padding-top: 7px; margin-right: 10px;">
                            <?php if ($this->session->userdata('logged_in')): ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $user['profile_pic']; ?>" width="40" height="40"  class="img-circle img-responsive img-center"></a>
                            <?php endif; ?> 
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>units/create">DASHBOARD</a></i>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>users/profile_settings">EDIT PROFILE <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></a></li>
                                <li class="dropdown-divider"></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>users/logout">LOGOUT</a></li>
                            </ul>
                        </div>
                    </li>
                <?php endif; ?>  
            </ul>
        </div>
    </div>
</nav>


