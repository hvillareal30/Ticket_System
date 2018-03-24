<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/usermanagementindex');?>">Back</a>

        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('CustomerPortal/usermanagementstore');?>">
    <?php 

    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }

    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name</strong>
                <input type="text" name="full_user_name" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username</strong>
                <input type="text" name="user_name" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" name="user_password" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Type</strong>
                <?php
                $options = array(
                    'admin' => 'Admin',
                    'operator' => 'Operator'
                );
                
                echo form_dropdown('user_type', $options);
                ?>
            
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </div>
    </div>

    <br>
    <br>
    <center>
        <a class="btn btn-danger" href="<?php echo base_url('CustomerPortal/usermanagementindex');?>">Back</a>
    </center> 
</form>  