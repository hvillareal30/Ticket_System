<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Ticket</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('ticketCRUD');?>">Back </a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('ticketCRUD/update/'.$ticket->ticket_id);?>">
    <?php

    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session-flashdata('errors');
        echo "</div>";
    }

    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Issue</strong>
                <input type="text" name="title_issue" class="form-control" value="<?php echo $ticket->title_issue; ?>">
            </div>
        </div>
    </div>

</form>