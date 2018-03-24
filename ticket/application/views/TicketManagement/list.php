<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>My Tickets</h2>
            </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('ticketCRUD/create')?>">Open New Ticket</a>
        </div>
    </div>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Ticket ID</th>
            <th>Full Name</th>
            <th>Department</th>
            <th>Ticket Title</th>
            <th>Status</th>
            <th width="220px">Action</th>
        </tr>
    </thead>


    <tbody>
     <?php foreach ($data as $ticket){ ?>
        <tr>
            <td><?php echo $ticket->ticket_id; ?></td>
            <td><?php echo $ticket->first_name; ?></td>
            <td><?php echo $ticket->last_name; ?></td>
            <td><?php echo $ticket->topic_title; ?></td>
        <td>
        <form method="DELETE" action="<?php echo base_url('ticketCRUD/delete/'.$ticket->ticket_id);?>">
            <a class="btn btn-info" href="<?php echo base_url('ticketCRUD/'.$ticket->ticket_id)?>">View</a>
            <a class="btn btn-primary" href="<?php echo base_url('ticketCRUD/edit'.$ticket->ticket_id) ?>"> Edit </a>
            <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
        </td>
        </tr>
    <?php } ?>
    
    </tbody>
</table>