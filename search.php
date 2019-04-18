
<html>
<head>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative

}
.search-results .division-head, .suggested-results .division-head {
    text-align: right;
    font-size: 12px;
    text-transform: uppercase;
    vertical-align: center;
    padding: 5px 15px;
    border-top: solid 1px #666;
}

.search-results .division-head, .suggested-results .division-head {
    text-transform: capitalize;
    padding: 5px 10px;
    border-top: solid 1px rgba(150,150,150,.3);
    background: #f7f7f7;
    text-align: left;
}
div {
    display: block;
}


*, :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 7px;
  height: 50px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 50px;;

  border: 1px solid #00B4CC  background: #00B4CC;
  text-align: center;
  color: #0e0a0a;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
   </style>
</head>
<body>
   <form action="home.php" method="post">
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm"  id="search" name="search" placeholder="Enter a location, builder, project or RERA ID"   class="search-input js-search-input" data-ac="true"  data-initialized="true">
      <button type="submit" id="submit" name="submit" class="searchButton">



        <i class="fa fa-search"></i>
           
           




     </button>
   
   </div>
</div>


</form>
</body>

</html>



