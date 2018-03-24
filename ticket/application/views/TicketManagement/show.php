<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> View Ticket </h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="<?php echo base_url('ticketCRUD');?>">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ticket ID </strong>
            <?php echo $ticket->ticket_id; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <?php echo $ticket->email; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name </strong>
            <?php echo $ticket->first_name; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name </strong>
            <?php echo $ticket->last_name; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Topic Title</strong>
            <?php echo $ticket->topic_title; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Topic issue</strong>
            <?php echo $ticket->topic_issue; ?>
        </div>
    </div>
</div>