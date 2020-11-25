
<!DOCTYPE html>

<html lang="id">
<head>
      <meta charset="utf-8">
      <title>Active Ticket </title>
</head>
<body>


  <div class="panel panel-default">
  <div class="panel-heading">
    Pending Ticket                   
  </div>
  <div class="panel-body">
  <div class="table-responsive " style="overflow-x: auto"> 

  <table class="table table-striped table-bordered table-hover table-container ">
            <thead>
                  <tr>
                  <th>No</th>
                 <th>Ticket Number</th>
				  <th>Severity</th>
				  <th>Open Ticket Date	</th>
                  <th>Site Name</th>
				  <th>Ticket Status</th>
				  <th>Alarm</th>
				  <th>Suspect</th>
				  <th>Location	</th>
				  <th>Work Status</th>
				  <th>Work Date</th>
				  <th>Engineer</th>
				  <th>Remarks</th>
				 
                  </tr>

            </thead>
            <tbody >
                  <?php
                       $count = 0;
          foreach ($data->result() as $row):
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->ticket_number;?></td>
			<td><?php echo $row->severity;?></td>
			<td><?php echo $row->tgl_input_ticket;?></td>
            <td><?php echo $row->nama_site;?></td>
			<td><?php echo $row->status_ticket;?></td>
			<td><?php echo $row->alarm;?></td>
			<td><?php echo $row->suspect;?></td>
			<td><?php echo $row->location;?></td>
			<td><?php echo $row->status_kerja;?></td>
			<td><?php echo $row->tgl_kerja;?></td>
			<td><?php echo $row->teknisi;?></td>
			<td><?php echo $row->remark;?></td>
			
           
          </tr>
        <?php endforeach;?>
		
            </tbody>
      </table>
</div>
<a href="http://localhost/trouble_ticket/index.php/ticket" class="link-class">Link</a>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>
<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>

</html>
