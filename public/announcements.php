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
<h6 class="text-center">Help     <!-- Button trigger modal -->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
        <span class ="glyphicon glyphicon-info-sign"></span>
        </button>
    </h6>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                  <li> <strong> Meetings </strong>
                    <ul>
                      <li>The Meetings page will showcase information such as time, location, and dates of any upcoming department meetings or events.</li>
                      <img src="../resources/uploads/meetings.png" alt="" width="450p%">
                    </ul>
                  </li>
              </ul>

              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
