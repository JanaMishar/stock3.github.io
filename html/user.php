<?php

	session_start();

	if(!isset($_SESSION['name'])){
		header('location:../../stock/html/login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>User <?php echo $_SESSION['name']; ?></h1>

<a href="../../stock/php/logout.php">Logout</a>

<br>
<br>

<a href="../../stock/html/viewstocks.php">View Stock</a>

<br>
<br>
<br>
<br>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Static Tables</title>

    <link href="../../stock/html/tblcss/bootstrap.min.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/font-awesome.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/custom.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/animate.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/style.css" rel="stylesheet">

</head>

<body>


                    <br>
                    <br>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Utype</th>
                                <th>Password</th>
                            </tr>
                            </thead>
            <?php
                       include '../../stock/php/connection.php';
                       $email=$_SESSION['email'];

                       $query="select * from stocktbl where email='$email' && utype='user'";
                       $processquery=mysqli_query($con,$query);
                         while($result=mysqli_fetch_assoc($processquery)){
                            		
                            	

                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['utype']; ?></td>
                                <td><?php echo $result['password']; ?></td>
                            </tr>
                            
                            </tbody>
                            <?php
                            	}

                            ?>
                        </table>

                    </div>
                </div>
  
    <script src="../../stock/html/js/jquery-3.1.1.min.js"></script>
    <script src="../../stock/html/js/popper.min.js"></script>
    <script src="../../stock/html/js/bootstrap.js"></script>
    <script src="../../stock/html/js/jquery.metisMenu.js"></script>
    <script src="../../stock/html/js/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="../../stock/html/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../stock/html/js/inspinia.js"></script>
    <script src="../../stock/html/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="../../stock/html/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="../../stock/html/js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>
</html>