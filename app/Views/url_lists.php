<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Generate Url System</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Generate Url System(<?php echo count($urls);?>)</h1>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('/url/create');?>" class="btn btn-primary">Add Url</a>
	</div>

  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Id</th>
             <th>Url</th>
             <th>Short Code</th>
             <th>New Url</th>
             <th>QR Code</th>
             <th>Hits</th>
             <th>Edit</th>
             <th>Delete</th>
          </tr>
       </thead>
       <tbody>
          <?php if($urls): ?>
          <?php foreach($urls as $url): ?>
          <tr>
             <td><?php echo $url['id']; ?></td>
             <td><?php echo $url['long_url']; ?></td>
             <td><?php echo $url['short_code']; ?></td>
             <td><a href=<?php echo base_url('url/redirect/'.$url['short_code']);?> target="_blank"> <?php echo base_url("?c=".$url['short_code'])?></a></td>
             <td><a href=<?php echo base_url('url/qrcode/'.$url['short_code']);?> target="_blank"> View QR Code </a></td>
             <td><?php echo $url['hits']; ?></td>
             <td><a href=<?php echo base_url('url/edit/'.$url['id']);?> class="btn btn-warning" > Edit</a></td>
             <td><a href=<?php echo base_url('/url/delete/'.$url['id']);?> class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')"> Del</a></td>
         
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>