<!DOCTYPE>

<html>
			<head>
			 <link rel="stylesheet" href="stylesheet.css">
			<head>


<body>

		<center>


	<?php 
	include "header.php";
	?>
			
	


<!--mise en page-->	
	
<table>
			<?php             
    			include('tableaux.php');
    			foreach ($spectacle as $clef)    
    			{
			?>
   	 <tr>
			<?php
       			 foreach ($clef as $valeur =>$element) {
			?>     
        <td class="lien">
			<?php           
			echo $element." ";
			?>      
  
	</td>
			<?php    
 			}         
			?>     
 
        </tr>
			<?php 
   	 		}
			?>
</table>
	
<!--mise en page-->			
		</center>
	<?php 
	include "footer.php";
	?>
	
</body>
</html>