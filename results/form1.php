<?php
session_start();
    include('dbconnect.php');
		$sql="SELECT * FROM user1";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		$pageno=ceil($count/6);
		for($i=1;$i<=$pageno;$i++) {
			$page_no = "<li><a href='#' page='$i' class='page'>$i</a></li>";
        }
        $td = "";
while ($row = mysqli_fetch_assoc($run_query)) {
    $id = $row['id'];
    $student_name = $row['student_name'];

    $td .= "<tr>
    <td>$id</td>
    <td>$student_name</td>
    </tr>";
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles\project.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<body>
    
        <div class="main_content" style="float:center;">
        <div class="content">
        <center><h2 style="float:center; color:black;">KASULU HIGH SCHOOL<br>TERMINAL EXAMINATION 2021<br>FORM ONE RESULTS</h2></center>
        <table border="1" width="100%">
          <tr>
          <td>
              S/N
             </td>
             <td>
             Student Name
             </td>
             <td>
             CIVICS
             </td>
             <td>
             HISTO
             </td>
             <td>
             GEOG
             </td>
             <td>
             KISWA
             </td>
             <td>
             BIOS
             </td>
             <td>
             ENGL
             </td>
             <td>
             CHEM
             </td>
             <td>
             PHYS
             </td>
             <td>
             MATH
             </td>
             <td>
             TOTAL
             </td>
             <td>
             AVERAGE
             </td>
             <td>
             GRD
             </td>
             <td>
             REMARK
             </td>
          </tr>
          <?php echo $td;?>
          
        </table>
        </div> 
    </div>    
</body>
</html>