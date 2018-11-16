<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<title>KULIAHKU</title>
<script src="<?php echo base_url('jquery-1.11.1.min.js');?>">
<script src="<?php echo base_url('bootstrap/js/bootstrap-min.js');?>">
</script>
<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap-min.css');?>"/>
</head>
<body>

<div class="row">
    <div class="col-sm-12">
        <form method="post" action="<?=base_url();?>index.php/auth/cek_login">
          <div class="form-group">
           <label for="nama">Nama</label>
           <input type="text" name="nama" id="nama">
             </div>
  <div class="form-group">
     <label for="kunci">Password</label>
     <input type="password" name="kunci" id="kunci">
</div>
        
   <button type="submit" class="btn btn-primary">Login</button>
   </form>
    </div>
    </div>

</body>
</html>