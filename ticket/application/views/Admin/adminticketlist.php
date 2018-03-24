<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Ticket Activity </h2>
        </div>
    </div>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Created Date </th>
            <th>Ticket ID </th>
            <th> Full name </th>
            <th> Issue Title </th>
            <th> Operator </th>
            <th> Status </th>
            <th width = "220px">Action</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data as $adminticket){ ?>
        <tr>
            <td><?php echo $adminticket->created_at; ?></td>
            <td><?php echo $adminticket->ticket_uniqueid; ?></td>
            <td><?php echo $adminticket->full_name; ?></td>
            <td><?php echo $adminticket->issue_title; ?></td>
            <td><?php echo $adminticket->operator; ?></td>
            <td><?php echo $adminticket->status;?></td>
        <td>
        <form method="DELETE" action="<?php echo base_url('CustomerPortal/adminticketdelete/'.$adminticket->ticket_id);?>" onClick="return dconfirm()">
            <a class="btn btn-success" href="<?php echo base_url('CustomerPortal/adminticketedit/'.$adminticket->ticket_id);?>">Set Operator </a>
            <button type="submit" class="btn btn-danger"> Delete </button>
        </form>
        </td>
        </tr>
    
    <?php } ?>

        </tbody>
</table>

<script>
   function dconfirm(){
       job = confirm("Delete?");
       if(job != true){
           return false;
       }
   }
</script>