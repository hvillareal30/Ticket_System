<div class="row">
    <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo base_url('CustomerPortal/usermanagementcreate')?>">Add User</a>
            </div>
    </div>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Full Name</th>
            <th>Username</th>
            <th>User Type</th>
            <th width="220px">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $usermanage) {?>
            <tr>
                <td><?php echo $usermanage->full_user_name;?></td>
                <td><?php echo $usermanage->user_name; ?></td>
                <td><?php echo $usermanage->user_type; ?></td>
            <td>
                <form method="DELETE" action="<?php echo base_url('CustomerPortal/usermanagementdelete/'. $usermanage->id);?>">
                    <a class="btn btn-info" href="<?php echo base_url('CustomerPortal/usermanagementshow/'.$usermanage->id) ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo base_url('CustomerPortal/usermanagementedit/'.$usermanage->id) ?>">Edit</a>
                    <button type="submit" class="btn btn-danger"> Delete</button>
                </form>
        </td>
        </tr>

       <?php } ?>
        </tbody>
        </table>