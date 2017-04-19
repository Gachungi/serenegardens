<!DOCTYPE html>
<html>
<head>
  <title>try</title>
  <script>
    // Get the modal
$(document).ready(function(){
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btns = $(".b");



// Get the <span> element that closes the modal
var spans = $(".close");

// When the user clicks the button, open the modal
// btns.forEach(function (btn) {
  btns.click(function() {
      modal.style.display = "block";
  });
// });

// When the user clicks on <span> (x), close the modal
// spans.forEach(function(span) {
  spans.click(function() {
      modal.style.display = "none";
  });
// });

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
});
  </script>
</head>
<body>

<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">View More</button>
  <div id="demo" class="collapse">

  <span><a href="#myModal"><button  type="button" class="b">BOOK NOW</button></a></span>

  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    <div id="form">
  <form action="/action_page.php">
    <label for="fname">Your Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

   <label for="country">Gender</label>
    <input type="radio" name="gender" value="male" checked> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>


   <label for="country">Institution</label>
    <select id="country" name="country">
      <option value="australia">UON</option>
      <option value="canada">KCA</option>
      <option value="usa">KU</option>
      <option value="usa">JKUAT</option>
    </select>

   <label for="lname">ID No</label>
    <input type="text" id="lname" name="lastname" placeholder="Your ID No">

   <label for="lname">Tell No</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Tell No">

   <input type="submit" value="Submit">
  </form>
</div>
  </div>

</div>
</body>
</html>