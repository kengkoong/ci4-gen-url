<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter Crud</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Codeigniter Crud Create</h1>


  <div class="mt-3">
     <form action="<?= base_url('/create-url') ?>" method="post">
      <input type="text" name="long_url" class="form-control" placeholder="http://example.com"/>

      <a href="<?php echo base_url('/');?>"   class="btn btn-secondary mt-1">Back</a>
      <button type="submit" class="btn btn-success">Save</button>
     </form>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>