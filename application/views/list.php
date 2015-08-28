<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php
$list = $this->db->query('SELECT * FROM users');
if ($list->num_rows() == 0)
{
    echo 'there is no any user.';
}
else {
    foreach ($list->result() as $row) {
        echo $row->id.",";
        echo $row->username.",";
        echo $row->email."\n";
    }
}
/*if(mysql_num_rows($list)==0)
{
    echo 'there is no any user.';
}*/
?>
</body>
</html>