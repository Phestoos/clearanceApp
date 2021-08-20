<?php include 'classes/store.php'; ?>
<?php include './includes/header.php'; ?>



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

            <form method="post"  class="addCourse" role="form">
<input type="hidden" name="action" value="addCourse">

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

             <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Add Course</button>
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
