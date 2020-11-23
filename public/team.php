<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php")  ?>


<h1 class="text-center">
Meet the Team
</h1>
<hr>
<br>
<div class="container">
    

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

<?php

function team(){
    $users_query = query(" SELECT * FROM users WHERE user_team = 1");
    confirm($users_query);

    while($row = fetch_array($users_query)) {

        $user_id = $row['user_id'];
        $username = ucwords($row['username']);
        $email = $row['email'];
        $user_firstname = ucwords($row['user_firstname']);
        $user_lastname = ucwords($row['user_lastname']);
        $user_role   = ucwords($row['user_role']);
        $user_brief  = ucwords($row['user_brief']);
        
        $user_photo = display_image($row['user_photo']);

        $users = <<<DELIMETER
            
          <div class="col-sm-4 col-lg-4">
            <div class="card">
              <img  class="center" src="../resources/$user_photo" alt="$username" >
                <div class="caption" style="height: 180px">
                  <h2>$user_firstname $user_lastname</h2>
                  <p class="title">$user_role</p>
                  <p>$user_brief</p>
                  <p>$email</p>
                  <br>
            <!-- <form name="" id="contactForm" method ="post" action="mailto:$email"> -->
            <!-- <p><button type="submit" value="Send" class="button">Contact</button></p> -->
              </div>
           </div>
          </div>
        
DELIMETER;
        echo $users;

}
}

?>