<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trouble Ticket</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
	 <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
    
     <!-- MORRIS CHART STYLES-->
	 <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css') ?>" rel="stylesheet">
        <!-- CUSTOM STYLES-->
		<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ticket Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php date_default_timezone_set('Asia/Jakarta');echo date('d-m-Y H:i:s');?> &nbsp; <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i> Logout</a></div>

        </nav>   