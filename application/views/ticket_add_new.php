<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Ticket</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  
  <script>
	function caps(element){

	    element.value = element.value.toUpperCase();
	}
	</script>
	
  <body>
   <div class="col-md-9 col-sm-12 col-xs-12">
  <div class="panel panel-default">
  <div class="panel-heading">
   Add Ticket                  
  </div>
  <div class="panel-body">
  <div class="table-responsive">
  
  <table class="table table-striped table-bordered table-hover">
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('ticket/tambah_aksi');?>" method="post">
          <div class="form-group">
            <label>Ticket Number</label>
            <input type="text" class="form-control" name="ticket_number" placeholder="Ticket Number" onkeyup="caps(this)" >
          </div>
		  <div class="form-group">
            <label>Severity</label>
            <input type="text" class="form-control" name="severity" placeholder="Severity" onkeyup="caps(this)" >
          </div>
		  <div class="form-group">
            <label>Open Ticket Date</label>
            <input type="text" class="form-control" name="tgl_input_ticket" value="<?php echo date('d/m/y');?>" >
          </div>
          <div class="form-group">
            <label>Site Name</label>
            <input type="text" class="form-control" name="nama_site" placeholder="Site Name" onkeyup="caps(this)" >
          </div>
		   <div class="form-group">
            <label>Alarm</label>
            <input type="text" class="form-control" name="alarm" placeholder="Alarm" >
          </div>
		   <div class="form-group">
            <label>Suspect</label>
            <input type="text" class="form-control" name="suspect" placeholder="Suspect" onkeyup="caps(this)" >
          </div>
		  <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location" onkeyup="caps(this)" >
          </div>
		  
		  <div class="form-group">
		  
           <!-- tiket status di hidden auto fill status active -->
            <input type="hidden" name="status_ticket" value="ACTIVE">
			
			
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
	 </div>
	  </div>
	   </div>
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>