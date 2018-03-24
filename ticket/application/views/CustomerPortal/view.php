<center>
<h2> View Existing Ticket</h2>
</center>

<form method="post" action="<?php echo base_url('CustomerPortal/ticketsearch');?>">

    <?php

if($this->session->flashdata('errors')){
    echo '<div class="alert alert-danger">';
    echo $this->session->flashdata('errors');
    echo "</div>";
}

?>
<br>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4"></div>
        <div class="col-xs-4 col-sm-4 col-md-4">
        
            <div class="form-group">
                <center><strong>Ticket ID</strong></center>
                <br>
                <input type="text" name="ticket_uniqueid" class="form-control">
            </div>
        
        </div>
        
        <div class="col-xs-4 col-sm-4 col-md-4"></div>
    </div>
    <br>
    <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <center>   <button type="submit" class="btn btn-primary">Submit</button> </center>
        </div>
    </div>

<br>
    <br>
    <center><a class="btn btn-primary" href="<?php echo base_url('CustomerPortal');?>">Back</a></center>

</form>