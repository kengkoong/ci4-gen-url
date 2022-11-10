<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter Crud</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Codeigniter Crud Edit</h1>


  <div class="mt-3">
   <?php

      if(isset($url_obj)){
        echo "edit data";
        echo "URL :",$url_obj["long_url"];
        echo "<br/>";
        echo "CODE : ".$url_obj["short_code"];
      }

      if(isset($result)){
         echo "INSERT SUCCESS : ".$result;
      }
   ?>
     <form action="<?= base_url('/edit-url') ?>" method="post" class="mt-2">
     <input type="hidden" name="id" id="id" value="<?php echo $url_obj['id']; ?>" placeholder="http://example.com">
      <input type="text" name="long_url" class="form-control" value="<?php echo $url_obj["long_url"];?>"/>
      <a href="<?php echo base_url('/');?>"   class="btn btn-secondary mt-1">Back</a>
      <button type="submit" class="btn btn-success mt-1">Save</button>
      
     </form>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>