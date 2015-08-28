<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<?php if(isset($msg))
{?>
	<p style="color:red"><?php echo $msg;?></p>
<?php
}
?>
<form action="<?php echo base_url('Login/signin');?>" method="post">
    Username:  <input type="text" name="username" required class="Submit"/><br />
    Password: <input type="password" name="password" required class="Submit"/><br />
    <input type="submit" name="submit" value="log in" />
</form>


</body>
</html>