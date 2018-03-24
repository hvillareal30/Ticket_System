<center>
<h3> Support Ticket System</h3>
</center>

<form method="post" action="<?php echo base_url('CustomerPORTALCreate');?>">

    <?php

    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }

    ?>

    <div class="row">
        
        
      
        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Full Name</strong>
                <input type="text" name="full_name" class="form-control">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        </div>

        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Issue Title</strong>
                <input type="text" name="issue_title" class="form-control">
            </div>
        
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        </div>

        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Issue Description</strong>
                <textarea class="form-control" name="issue_description" rows="6" placeholder="Input Issue Description Here"></textarea>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        </div>
        
        <br>
        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
        <center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </center>
        <div class="col-xs-4 col-sm-4 col-md-4"> </div>
        </div>
        </div>
      
    </div>
    <br>
    <center>
            <br>
            <br>
            <br>
            <p>Existing Ticket?
            <a href="<?php echo base_url('CustomerPortal/ticketshow');?>">Click Here!</a></p>
        </center>
</form>

