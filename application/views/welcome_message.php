<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<form action="<?php echo base_url('Submit/reg');?>" method="post">
    Username:  <input type="text" name="username" required class="Submit"/><br />
    Email: <input type="email" name="email" required class="Submit"/><br />
    Password: <input type="password" name="password" required class="Submit"/><br />
    <input type="submit" name="submit" value="registration" />
</form>
<a href="<?php echo base_url('Login');?>">
<input type="submit" name="submit" value="log in" /></a>
<div id="1">red/green</div><div id="2">red/green</div>
</body>
</html>