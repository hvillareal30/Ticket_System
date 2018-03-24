<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SoViLe Ticket Support System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('CustomerPortal')?>">SoViLe Ticket Support System</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('CustomerPortal/usermanagementindex')?>">User Management</a></li>
            <li><a href="<?php echo base_url('CustomerPortal/adminticketindex')?>">Ticket Activity</a></li>
            <li><a href="<?php echo base_url('CustomerPortal/adminticketreports')?>">Reports</a></li>
        </ul>
    <ul class="nav navbar-nav navbar navbar-right">
        
        <li><a href="<?php echo base_url('CustomerPortal/adminlogout')?>"><span class="glyphicon glyphicon-login"></span>Logout</a></li>
    </ul>
</div>


</nav>

<div class="container">