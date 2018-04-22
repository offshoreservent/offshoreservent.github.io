<?php 
    $page_id =1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>goodbye</title>
	<?php include dirname(__FILE__).'/includes/head.inc.php'; ?>

</head>
<body>
   
   <?php include dirname(__FILE__).'/includes/header.inc.php'; ?>

    <?php include dirname(__FILE__).'/includes/slideshow.inc.php'; ?>

    <div id="blocks">
    
    <?php include dirname(__FILE__).'/includes/blocks.inc.php'; ?>
    
    </div>
    
    <div class="uk-block uk-block-secondary">
    	<div>
    		<h1 class="uk-h1 uk-text-center uk-contrast"> Billu <a href="#" ><i class=" uk-icon-github"></i> </a> </h1>
    	</div>
    	
    </div>
   <div id="stories" >
   <?php include dirname(__FILE__). '/includes/stories.inc.php'; ?>
   </div>

   <?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>
 </body>
</html>