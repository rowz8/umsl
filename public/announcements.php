<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");?>




<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

 <!-- Page Content -->

<div class="container">


        <header>
           <h3>Meetings</h3>
           
           <hr>
        </header>


    <div class="container">
		<div class="row row-striped">
			
            <?php display_meetings();?>
            
		</div>
	
		</div>
        
	</div>


<!-- /.container -->

<?php include (TEMPLATE_FRONT . DS . "footer.php")?>
