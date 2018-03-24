<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <center>
            <h2> View Ticket Info </h2>
        </center>
    </div>
        <div class="pull-right">
        
    </div>
</div>  
</div>
<br>
<br>
<?php foreach($results as $row) { ?>
<div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Ticket ID : </strong>
            <?php echo $row->ticket_uniqueid;?>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Status : </strong>
            <?php echo $row->status;?>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div>

    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Remarks : </strong>
            <?php echo $row->remarks;?>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div> 

    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Issue Description : </strong>
            <?php echo $row->issue_description; ?>
        </div>
    </div> 
    <div class="col-xs-4 col-sm-4 col-md-4"></div> 
    </div>
    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Updated Time :</strong>
            <?php echo $row->updated_at;?>
        </div>
    </div>
    </div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div>
</div>

<?php  } ?>
<br>
<br>
<div class ="row">
    <center>
<a class="btn btn-primary" href="<?php echo base_url('CustomerPortal');?>">Back</a>
    </center>