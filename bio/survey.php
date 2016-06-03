
<?php 
// echo $bio;
if (empty($passion1)){
echo "<div  id= 'zoomiframe' ><div class = 'margin-container'> <iframe id = 'firstiframe' src = 'bio/newuser.php'></iframe></div></div>";
	
}
if (isset($passion1)){
//echo 'existing';	
}

?>
<style>
#zoomiframe {
	width:100%;
	height:100%;
	background-color: rgba(31, 16, 16, 0.46);
	position: absolute;
	top:0;
	left:0;
	z-index: 9999;
}
.margin-container {
	margin: auto;
	width: 90%;
}
#firstiframe {
	width: 100%;
	position: relative;
	top: 100;
	z-index: 99999;
	overflow: hidden;
	height: 425;
	background-color:rgba(255, 255, 255, 0.95);
	margin: auto;
	
}


</style>
