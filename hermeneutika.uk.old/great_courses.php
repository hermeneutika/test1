<!DOCTYPE html>

<html>
<head>
<link href="menu1.css" rel="stylesheet" type="text/css" />
<title>The Great Courses</title>
<?php include ("link.php") ?>


</head>
<body>
<script>
    function setActive() {
      aObj = document.getElementById('nav').getElementsByTagName('a');
      for(i=0;i<aObj.length;i++) { 
        if(document.location.href.indexOf(aObj[i].href)>=0) {
          aObj[i].className='active';
        }
      }
    }
    window.onload = setActive;
		</script>
<h2> University courses currently being annotated</h2>
<div class="nav">
<a href="virtue.php">A Republic of Virtue</a>
	<a href="philoscience.php">Philosopy of science</a>




</div>



</body>
</html>
