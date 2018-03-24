<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> View User Info </h2>
    </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/operatorindex');?>">Back</a>
    </div>
</div>  
</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Full name : </strong>
            <?php echo $operatorticket->full_name;?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Issue Title : </strong>
            <?php echo $operatorticket->issue_title;?>
        </div>
    </div>

    </div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Issue Description : </strong>
            <?php echo $operatorticket->issue_description; ?>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status : </strong>
            <?php echo $operatorticket->status; ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created At : </strong>
            <?php echo $operatorticket->created_at; ?>
        </div>
    </div>

</div>