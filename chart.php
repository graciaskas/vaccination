   <?php
      session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
       
    ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/theus/chart.css/v1.0.0/dist/chart.css" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/a/csss/font-awesome.min.css">
	<script type="text/javascript"  src="js/Chart.min.js"></script>

	
</head>
<body>
	 <div class="container-fluid">
	 	<!--header -->
	 	<?php require 'header.php';?>
	 	<!---end of header / -->

	 	<!--- main section -->
		 	<div class="main-section">
		 		
		 		<?php require 'menuLeft.php';?>
		 		<div class="main-section-operations">
		 			
		 		<div class="chart" style="padding: 40px;border:1px solid #555;">
		 			
<div class="charts charts--vertical">

  <div class="charts__chart">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p80">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p60">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p100   chart--hover">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p80  chart--blue    chart--hover">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p60  chart--green   chart--hover">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p40  chart--red     chart--hover">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->

  <div class="charts__chart chart--p20  chart--yellow  chart--hover chart-lg">
    <span class="charts__percent"></span>
  </div><!-- /.charts__chart -->



</div><!-- /.charts -->
		 		</div>
		 		<!-- chart/ -->
		 		<div class="info">
		 		  
		 	
		 		</div>
		 		</div>
		 	</div>
	 	<!-- end main section -->


	 </div>
	 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
    }else{header('location:login.php?err=notConnected');}
?>
