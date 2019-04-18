<?php
//if(isset($_POST['submit'])){
  $search= $_POST['search'];

include('connection.php');

$sql = "SELECT * FROM `mumbai` where ProjectName ='".$search."'";
$result = $conn->query($sql);
   // output data of each row
  $row = $result->fetch_assoc(); 


?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://mdbootstrap.com/javascript/lightbox/"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
   body {
  background-color: #efefef;
}
.container{
	background-color: #fefbd8;
}
.text-wr{
  float: left;

}



</style>
</head>

<body>  
<div class="header">
</div>



    <div class="nav">
        <nav>
            <a href="#section1">Overview</a>
            <a href="#section2">Master Plan</a>
            <a href="#section3">Price</a>
            <a href="#section4">Amenties</a>
            <a href="#section5">Gallery</a>
            <a href="#section6">Contact Us</a>
        </nav>
    </div>
    <div id="section1" class="section">
        <div class="text-wr">
            <h3 class="title">
        
        
    
    <div class="col-12 revealOnScroll animated undefined" data-parallax="parallax-1">
      <div class="col-7 pull-left revealOnScroll animated fadeInLeft undefined" data-animation="fadeInLeft" data-timeout="250">
          <h1 class="section-head fs-46 fw-400 head-color ">Overview</h1>
                 
<div class="hey1"><p><?php echo $row['overview'];?></p></div>
      </div>
    </div>
     
        </section>


        </h3>
        </div>
    </div>
    <div id="section2" class="section">
        <div class="text-wr">
    <h3>Master Plan :- </h3>  <img src="<?php echo $row['masterplan'];?>">
    <br><br>
    <img src="<?php echo $row['masterplan1'];?>">
     <br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <h3>Floor Plan :- </h3>   <img src="<?php echo $row['floorplan'];?>">  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <img src="<?php echo $row['floorplan1'];?>"> 
        </div>
    </div>
    <div id="section3" class="section">
        <div class="text-wr">
           <section class="" id="configuration">
    <div class="container">
        <h1 class="section-header  section-title foo" style="">Project Configuration</h1>
        <div class="section-subtitle relative" style="color: #fff;">
            Choose from 3 &amp; 4 Bedroom Residences
        </div>

        <div style="text-align: center;" class="col-md-12 tbl-holder">
            <table class="table foo tbl" style="text-align: center; margin: auto; width: 100%;" border="0">
                <thead>
                <tr>
                    <th class="her"><h3>Configuration Type</h3></th>
                    <th class="her"><h3>Carpet Area + Deck Area + Utility Area</h3></th>
                    <th class="her"><h3>Price</h3></th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  $q =  mysqli_query($conn, "SELECT * FROM `configuration` where ProjectName ='".$search."'");
                 while($row1 = mysqli_fetch_array($q))
{
                  ?>
                   <tr style="background-color: #e4e4e4;">
                    <td scope="row" class="her1"><?php echo $row1['type'];?></td>
                    <td class="her1"><?php echo $row1['carpetarea'];?></td>
                    <!--<td class="her1">4.77 Sq.m.</td>
                    <td class="her1">4.6 Sq.m.</td>-->
                    <td class="her1"><?php echo $row1['price'];?>
                    </td>
                </tr>

                           </tbody>
                             <?php }
                              ?> 
            </table>
        </div>
    </div>
</section>
        </div>
    </div>

 <div id="section4" class="section">

        <div class="text-wr">
          <div class="row">

  <div class="col-md-12">
    <?php
                  $qs =  mysqli_query($conn, "SELECT * FROM `amenities` where ProjectName ='".$search."'");
                 while($row3 = mysqli_fetch_array($qs))
{
                  ?>

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">
 
      <figure class="col-md-4">
        <a class="black-text" href="<?php echo $row3['imagepath1']; ?>"
          data-size="1600x1067">
          <img alt="picture"  src="<?php echo $row3['imagepath1']; ?>"
            class="img-fluid">
          <h3 class="text-center my-3">Bedroom</h3>
        </a>
      </figure>
  </div>
<?php
          }
            ?>
</div>

    </div>

 </div>
        </div>

    <div id="section5" class="section">
<div class="text-wr">
  
</div></div>
    


  

<div id="section6" class="section">
        <div class="text-wr">
  
    
<img src="<?php echo $row['contactus']; ?>" align="pull-left" width="900px" height="400px"><br><br>
<hr>
<div class="hey" <h4><?php echo $row['contact']; ?></h4></div>

            <h3 class="title">
            </h3>
        </div>
    </div>
<script type="text/javascript">
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
    </script>

</body>
</html>