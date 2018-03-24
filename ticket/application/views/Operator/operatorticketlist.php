<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> My Tickets </h2>
        </div>
    </div>
</div>

<table class="table table-bordered">

        <thead>
            <tr>
                <th>Ticket ID </th>
                <th> Full name </th>
                <th> Issue Title </th>
                <th> Status </th>
                <th width = "220px"> Action </th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($data as $operatorticket){ ?>
            <tr>
                <td><?php echo $operatorticket->ticket_uniqueid; ?></td>
                <td><?php echo $operatorticket->full_name; ?></td>
                <td><?php echo $operatorticket->issue_title; ?></td>
                <td><?php echo $operatorticket->status; ?></td>
            <td>
            <a class="btn btn-info" href="<?php echo base_url('CustomerPortal/operatorshowticket/'.$operatorticket->ticket_id);?>">View Ticket</a>
            <a class="btn btn-success" href="<?php echo base_url('CustomerPortal/operatoreditticket/'.$operatorticket->ticket_id);?>">Update Ticket</a>

            </td>
            </tr>
        
        
        <?php } ?>

        </tbody>
    </table>