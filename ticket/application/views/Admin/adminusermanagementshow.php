<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> View User Info </h2>
    </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/usermanagementindex');?>">Back</a>
    </div>
</div>  
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Full name</strong>
            <?php echo $usermanage->full_user_name;?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Username</strong>
            <?php echo $usermanage->user_name;?>
        </div>
    </div>

    </div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User type </strong>
            <?php echo $usermanage->user_type; ?>
        </div>
    </div>

</div>