<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Update Ticket </h2>
        </div>
    </div> 
</div>

<form method="post" action="<?php echo base_url('CustomerPortal/operatorupdateticket/'.$operatorticket->ticket_id);?>">
    <?php

    if($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }

    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <?php

                $option = array(

                    'open' => 'Open',
                    'close' => 'Closed',
                    'resolve' => 'Resolved'
                );

                echo form_dropdown('status', $option);

                ?>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Remarks</strong>
                    <textarea class="form-control" name="remarks" rows="6" placeholder="Input Remarks"></textarea>
                </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </center>
        </div>
    </div>
</form>