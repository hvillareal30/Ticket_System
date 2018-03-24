<center>
<h1> Login as Operator </h1>

</center>

<form method="post" action="<?php echo base_url('CustomerPortal/operator_login_process');?>">

    <?php

    if($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }

    ?>

<br>
    <center>
    <?php 
    
    echo "<div class='error_msg'>";
    if (isset($error_message)) {
        echo $error_message;
    }
    ?>
    </center>

<center>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Username</strong>
            <input type="text" name="user_name" class="form-control">
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div>

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Password</strong>
            <input type="password" name="user_password" class="form-control">
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
</div>
<br>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Login</button>
</div>
</center>
<br>
<br>
<br>
<br>
<center>
    <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/login');?>">Back</a>
</center>
</form>