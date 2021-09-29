
	<h1>Stock Details</h1>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Static Tables</title>

    <link href="../../stock/html/tblcss/bootstrap.min.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/font-awesome.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/custom.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/animate.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/style.css" rel="stylesheet">

		
	<br>
                    <br>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>DATE</th>
                                <th>X AXIS</th>
                                <th>Y AXIS</th>
                            </tr>
                            </thead>
                         <?php
			include '../../stock/php/connection.php';

			$query="select * from stock";
			$processquery=mysqli_query($con,$query);

			while($result=mysqli_fetch_assoc($processquery)){


			

		?>


	

                            <tbody>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['date']; ?></td>
                                <td><?php echo $result['xaxis']; ?></td>
                                <td><?php echo $result['yaxis']; ?></td>
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


		