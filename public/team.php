<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>



<h1 class="text-center">
Meet the Team
</h1>
<hr>
<br>
<div class="container">
    
<header class="jumbotron hero-spacer">

  <p class="text-center display-3">To provide and maintain a clean, safe, and healthy building environment maintained at required standards for the use and enjoyment of the students, staff, and public 
  ensuring that our campuses meet our customer's expectations while remaining conducive to teaching and learning.</p>
            
</header> 
    <!-- product display  -->
    <div class="row">
        
    <style>

/* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
  
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 23%;
}

.button:hover {
  background-color: #555;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

</style>

    <?php team(); ?>


      
    </div> <!-- row ends here  -->



</div>

</div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php");?>

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
                  <li> <strong> Team </strong>
                    <ul>
                      <li>The <strong> Team </strong> page will list Design Team 5 team members that have designed and tested the Custodial Center application.</li>
                      <img src="../resources/uploads/team.png" alt="" width="450p%">
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