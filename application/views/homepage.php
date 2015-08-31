<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
</head>
<body>
<table border ="1">
<tr>
<td id="1"></td>
<td id="2"></td>
<td id="3"></td>
</tr>
<tr>
<td id="4"></td>
<td id="5"></td>
<td id="6"></td>
</tr>
<tr>
<td id="7"></td>
<td id="8"></td>
<td id="9"></td>
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
		$('<p>do you want to play with X or O ?</p>').dialog({
                    buttons: {
                        "X": function() {
                        	window.xo = "x";
                        	$(this).dialog("close");
                        	xoro ="x";
                        	},
                        "O":  function() {
                        	window.xo = "o";
                        	xoro = "o";
                            var step1 = 1;
                            jQuery.ajax({
                                type: "POST",
                                url: "<?php echo base_url("login/logica"); ?>",            
                                data: {step:step1},
                                success: function(res) {
                                if (res)
                                {
                                    $("#"+res).text("x");
                                }
                                }
                            });
                        	$(this).dialog("close");
                        	}     
                        }                   
                });
            var xoro;
			var myarr = new Array();
			$("td").click(function(){
        		$(this).text(window.xo);
        		$("td").each(function(index) {
  					myarr[$(this).attr('id')] = $(this).text();
        		});
        	});



	});

</script>

<div class="test1">red/green</div><div class="test2">red/green</div>
<button>change color</button>
</body>
</html>