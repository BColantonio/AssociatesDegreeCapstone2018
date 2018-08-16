<?php
	require_once 'db.php';
	
	$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_STRING) ?? 
		filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING) ?? null;
		
	$item = filter_input(INPUT_POST, "item", FILTER_SANITIZE_STRING) ?? 
		filter_input(INPUT_GET, "item", FILTER_SANITIZE_STRING) ?? null;
		
echo '<script language="javascript">';
echo 'alert("'.$item.'")';
echo '</script>';
?>

<!DOCTYPE HTML>
<html lang = "en">
<head>
  <meta charset = "UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <!-- Design CSS -->
  <link rel="stylesheet" type="text/css" href="design.css">

  <!-- SmartCart -->
  <title>SmartCart</title>
  
</head>
<body>

<!-- Search form -->
<div class="form-horizontal" id="searchForm">
	<!--logo-->
	<h1>SmartCart</h1>
	
	Search:<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
	<input type="text" name="item" id="item"/>
	<button type="submit" id="submit">submit</button>
	
	<a name="resultArea"></a>
	<h2>Result</h2>
	<a name="resultArea2"></a>
	<pre id="result"></pre>
	</form>
</div>
<!-- end of search form -->	
	
<!-- Side Nav -->	
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="#">About</a>
	<a href="#">Services</a>
	<a href="#">Clients</a>
	<a href="#">Contact</a>	
</div>
<!-- End of side nav -->

<!-- Use any element to open the sidenav -->
<span onclick="openNav()"><a href="#">open</a></span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  ...
</div>
  
	<script src="design.js"></script>
	<script type="text/javascript" src="../js/json.js"></script>
	<script type="text/javascript">
	$(document.ready(function(){
		$('#searchForm').submit(function(){
			$('#result').html('Processing your request...');
			$('html,body').animate({scrollTop: $("a[name='resultArea']").offste().top}, 'fast');
			$.post('process-item.php', {'param' : $('#searchForm').serialize()},
				if($("#result") != null) {
					$('#result').html(JSON.stringify(jQuery.parseJSON(searchResult), null, '\t'));
				else
					$('#result').html(searchResult);
				$('html,body').animate({scrollTop: $("a[name='resultArea2']").offset().top},'fast');
				]);
				return false;
				});
		});					
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?
include 'footer.html';
?>