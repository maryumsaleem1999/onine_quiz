Your storage is full. … You can't upload new files to Drive and may not be able to send or receive emails in Gmail.Learn more
<?php
session_start();
error_reporting(0);?>	
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #FFEB3B;    }
    49%{    color: #FF5722; }
    60%{    color: #429600; }
    99%{    color: #e91e1e;  }
    100%{   color: #FFF;    }
}
.data {
  background: url('new.jpg') center / cover no-repeat;
}
</style>
<body class = "data" style="background:#607d8b">
 
<div class="container ">
  <h2 class="text-center" style="color:white">Online Quiz</h2>
   <?php echo '<h1 class="text-center blinking" style="color:white">  Welcome '.$_SESSION['user'].' take a quiz test</h1>'; ?><div class="card">
 
    
    
	<?php
include('db.php');

?>
<form action="http://localhost/crud/quiz/result.php" method = "post">
	<?php 
    for($i=1;$i<3;$i++){
	$sql = "select * from questions where id =  $i";
	$data = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($data)){
			
			?>
			<div class="card-header text-center">
			<h3><?php echo $row['question']; ?></h3>
			</div>	
			<div class="card-body">
			<?php
			$sql = "select * from answer where ans_id = $i";
	$data1 = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($data1)){
			?>
		
		<input type="radio" name='check[<?php echo $row['ans_id']; ?>]' value = "<?php echo $row['aid']?>" > <?php echo $row['answer']?><br>
		
		<?php
		}
		}
	}
	?>
	</div>

    <div class="card-footer text-center">
	<input type="submit" name = "sub"  class="btn btn-primary"><br><br>
	<a href = 'http://localhost/crud/quiz/logout.php'>
	<button class="btn btn-primary">Log out</button></a></div>
  </div>
  </form>
</div>

</body>
</html>

	