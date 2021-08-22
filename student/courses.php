<?php //include 'classes/store.php'; ?>
<?php include './includes/header.php';?>
<?php 
  	$server = 'localhost';
    $user = 'root';
    $password = 'festus123';
    $database = 'dms';
  
    // create connection to my database and server
    $connection=mysqli_connect($server, $user,$password,$database);
    error_reporting(1);
?>



<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
             <?php include './includes/topheader.php'; ?>
             <?php include './includes/sidebar.php'; ?>
        <div class="content-wrapper">

            <!-- Code box -->
            <section class="content">

<div class="row">
 <div class="col-md-12">
        <div class="well panel-primary text-success">
        <center>Manage Student Courses</center>
       </div>
      </div>
	<div class="col-md-4">

<div class="panel panel-secondary">
	 			<div class="panel-heading text-primary">Register Your courses</div>
	 			<div class="panel-body">
        <div class="alert_message_mod">

	 </div>

   <?php
      if (isset($_POST["addCourse"])) {
        $courseName = $_POST["coursename"];
        $courseCode = $_POST["coursecode"];
        $courseUnit = $_POST["courseunit"];
        $lecturer = $_POST["lecturer"];

        $sql = mysqli_query($connection, "insert into courses(course_name,course_code,course_unit,lecturer)
            values('$courseName','$courseCode','$courseUnit','$lecturer'");
            if ($sql) {
              # code...
              echo '<script>alert("Course inserted successfully..");</script>';
            }
            else {
              # code...
              echo 'input ghhg';
              echo '<script>alert("Course not added, make sure all field are correctly filled");</script>';
          }
      }
 

?>

            <form method="post"  class="addCourse" role="form">
<!-- <input type="hidden" name="action" value="addCourse"> -->

 <div class="form-group">
				<label>Course Name</label>
				<input type="text" name="coursename" id="coursename" class="form-control">
   </div>

 <div class="form-group">
				<label>Course Code</label>
				<input type="text" name="coursecode" id="coursecode" class="form-control">
   </div>

 <div class="form-group">
				<label>Course Unit</label>
				<input type="text" name="courseunit" id="courseunit" class="form-control">
   </div>
   <div class="form-group">
  				<label>Lecturer</label>
  				<input type="text" name="lecturer" id="lecturer" class="form-control">
     </div>



            <div class="form-group">

             <button type="submit" name="addCourse" class="btn btn-primary"><span class="fas fa-save"></span> Add Course</button>
             </div>


            </form>
 <div class="alert_message_mod">

	 </div>   </div>
</div>
 </div>
    <div class="col-md-8">
 <table class="table table-striped table-bordered table-hover userList" border="0">
			<thead class="thead">
				<tr>
					<th>Course Name</th>
					<th>Course Code</th>
					<th>Course Unit</th>
          <th>Lecturer</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
    </div>
</div>

            </section>
        </div>
    </div>

             <?php include './includes/footer.php'; ?>
</body>
</html>
