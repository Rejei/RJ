<?php
$BOMBED = array();
RecursiveFolder($HOME);
echo '<h2>These files had UTF8 BOM, but i cleaned them:</h2><p class="FOUND">';
foreach($BOMBED as $utf){
    echo $utf ."<br />\n";
}
echo '</p>';
?>
    <?php
	    include('blocks/header.php')
	?>	
			 	<div class="content">
			 </div>
		<?php
	    include('blocks/footer.php')
		?>
		
