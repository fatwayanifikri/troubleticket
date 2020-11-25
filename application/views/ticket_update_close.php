<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <!-- load bootstrap css file -->
 
  </head>
  
  <script>
	function caps(element){

	    element.value = element.value.toUpperCase();
	}
	</script>
	
  <body>
		
<?php foreach($ticket as $u){ ?>

    <div class="col-md-9 col-sm-12 col-xs-12">
  <div class="panel panel-default">
  <div class="panel-heading">
    Close Ticket                   
  </div>
  <div class="panel-body">
  <div class="table-responsive">
  
  <table class="table table-striped table-bordered table-hover">
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('ticket/closed');?>" method="post">
          <div class="form-group">
            <label>Ticket Number</label>
            <input type="text" class="form-control" name="ticket_number" value="<?php echo $u->ticket_number;?>" onkeyup="caps(this)">
          </div>
		  <div class="form-group">
            <label>Severity</label>
            <input type="text" class="form-control" name="severity" value="<?php echo $u->severity;?>" onkeyup="caps(this)">
          </div>
		   <div class="form-group">
            <label>Open Ticket Date</label>
            <input type="date" class="form-control" name="tgl_input_ticket" value="<?php echo $u->tgl_input_ticket;?>">
          </div>
          <div class="form-group">
            <label>Site Name</label>
            <input type="text" class="form-control" name="nama_site" value="<?php echo $u->nama_site;?>" onkeyup="caps(this)">
          </div>
		    <div class="form-group">
            <label>Alarm</label>
            <input type="text" class="form-control" name="alarm" value="<?php echo $u->alarm;?>" onkeyup="caps(this)">
          </div>
		  <div class="form-group">
            <label>Suspect</label>
            <input type="text" class="form-control" name="suspect" value="<?php echo $u->suspect;?>" onkeyup="caps(this)">
          </div>
		    <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $u->location;?>" onkeyup="caps(this)">
          </div>
		  <input type="hidden" name="status_ticket" value="CLOSED">
		  <input type="hidden" name="tgl_close_ticket" value="<?php echo date('y/m/d');?>">
          <input type="hidden" name="t_id" value="<?php echo  $u->t_id?>">
		  
          <button type="submit" class="btn btn-primary">Close</button>
        </form>
      </div>
    </div>
	 </div>
	 </div>
	  </div>
	 
	<?php } ?>
	
	
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>