<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

  $(window).load(function()
{
 setTimeout(function() {
    $('#myModal').modal();
}, 500);

});
  
</script>
<style type="text/css">
  .bg-img {
  /* The image used */
  background-image: url("2.jpg");
</style>
    </head>
  <body>
   <div class="container">
    
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contact us</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="bg-img">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          
          <form action="?" method="POST">
          Name :- <input type="text" name="name">
          <br>
          <br>

          Contact :- <input type="text" name="contact">
          <br>
          <br>
          <input type="submit" name="submit" value="submit">
        </form>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
      </div>
      
    </div>
  </div>
</div>
  </body>
</html>