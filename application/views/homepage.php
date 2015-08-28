<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>
<table border ="1">
<tr>
<td>x</td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</table>
<style>
	.red
	{
		background-color: red;
	}
	.green
	{
		background-color: green;
	}
</style>
<script>
	$(document).ready(function(){
		var x=1;
		 $("button").click(function(){		 	
		 	if(x==1)
		 	{
		 		$('.test1').addClass("red");
		 		$('.test2').addClass("green");

				x=2;
		 	}
		 	else
		 	{
			 	$("div").each(function() 
			 	{
			 			if($(this).hasClass("green"))
	  					{
	  						$(this).removeClass("green");
	  						$(this).addClass("red");
	  					}
	  					else
	  					{
		  					if($(this).hasClass("red"))
		  					{
		  						$(this).removeClass("red");
		  						$(this).addClass("green");
		  					}
		  				}
	  					

				});
		 	}
    });
	})
</script>

<div class="test1">red/green</div><div class="test2">red/green</div>
<button>change color</button>
</body>
</html>