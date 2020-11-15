$(document).ready(function () {


  // used to display the alert message prior deleting the slides.

  $(".image_container").click(function () {

    var user_input;

    location.reload();

    return user_input = confirm("Do you want to delete this file?");


  });


});
