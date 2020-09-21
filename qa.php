	
<!DOCTYPE html>
<html lang="en">

	<head>
	<script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
	
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	
	
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png">
  </head>

	
  <body>
  <style>body {
  display: flex;
  flex-direction: column;
  justify-content: right;
  align-items: right;
  height: 100vh;
  background: #f39c12;
}
h1 {
  margin: 0 0 0.25em;
}
/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 10em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
</style>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
    responsive:true
} );
  </script>
 
  <div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
	<?php
    include("header_QA_admin.php")?>
		<!--space header-->
	    <div class="main-panel">
          <div class="content-wrapper">
             
			 <li class="nav-item sidebar-actions">
              <span class="nav-link">  
			
                </a>
              </span>
			  
            </li>
			 
			 
              <span class="nav-link">  
			
                </a>
              </span>
		
			 
			 
			<!--space header-->
			
			  <div class="card-header headC">
    <center style="color:white;"><h4><b>Manage Role QA</b><h4></center>
  </div>
			 <div class="card">
			
    <div class="card-body">
			
			   <form class="forms-sample">
			       <div class="data-table-area">
			<!---->
      <!--select-->
			<table><tr>
			<td><button type="button" class="btn btn-primary"data-toggle="modal" data-target="#addApprover">+Add approver</button>
            &emsp;</td>

	<td>			
<div class="select">
  <select name="slct" id="slct">
    <option value = "1"selected >All</option>
    <option value="2">QAC</option>
    <option value="3">QAP</option>
    <option value="4">BKD</option>
  </select>
</div></td>
</tr></table>
  <!--select-->

      
            <div class="card-body">
							  <div class="table-responsive">
							  <table id="example" class="table table-hover ">
							  <thead>
							  
								    <tr>
                          <th><center>No</center></th>
                          <th><center>Name</center></th>
                          <th><center>Position</center></th>
                          <th><center>Role</center></th>
                          <th><center>Company</center></th>
                          <th><center>Section</center></th>
                          <th><center>Actions</center></th>
              
              

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center>1</center></td>
						  <td><center>Jacob j.</center></td>
						  <td><center>AM</center></td>
						<td><center>QAP</center></td> 
						<td>SDM</td>
						<td>Diesel Solenoid</td>
            <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
              <td><center>2</center></td>
						  <td><center>Loling j.</center></td>
						  <td><center>Sr.staff</center></td>
						  <td><center>BKD</center></td>  
						  <td>SDM</td>	
						  <td>DPE-MC</td>
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
                           <td><center>3</center></td>

						  <td><center>Kingkaew K.</center></td>
						  <td><center>Staff</center></td>
						  <td><center>QAC</center></td>  
							<td>SDM</td>
							<td>SIFS</td>							
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
              <td><center>4</center></td>
						  <td><center>Timapron W.</center></td>
						  <td><center>Staff</center></td>
						  <td><center>QAC</center></td>   
						  <td>SDM</td>	
							<td>GPE-Assy</td>
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
              <td><center>5</center></td>
						  <td><center>Jack j</center></td>
						  <td><center>Sr.staff</center></td>
						  <td><center>QAC</center></td>  
							<td>SDM</td>
							<td>GPE-MC</td>								
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center></tr>
				
								
								
							  </tbody>
							</table>													
							</div>
						  </div>
			
			
</div>
<form>
			
			</div>
				
	
               
		
<!---->
              </div>
            </div>
			
	</div>

	</div>	
	   </div>
  </body>
  
  <style>
.headC{
	background-color: #b66dff;
	height: 45px;
}
button.one {
	background-color: #4CAF50;
	font-size: 10px;
	}
.icon{
  max-height: 15px;
max-width: 25px;
width: 15px;
height: 25px;
}
</style>



<!--Data table -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<!-- Modal HTML -->
<!--confirm button-->
<div id="mydelete" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
									
				<h4 class="modal-title w-100">Are you sure to delete?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
      <button style ="background-color:#7eb73d; border-color:#7eb73d;" type="button" class="btn btn-danger">Yes</button>
				<button style ="background-color:#686868 ; border-color:#686868 ;"type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <h3 class="modal-title" id="exampleModalLabel"><center>Edit Role</center></h3>
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Emp Code:</label>
            <input type="text" class="form-control" id="emp">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name:</label>
            <input placeholder = "Kan Y." type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Role :</label>
            <input placeholder = "Creator"type="text" class="form-control" id="role">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Change to :</label>
            <select class="form-control" id="role">
                  <option value="creator">Creator</option>
                  <option value="bkd">BKD</option>
                  <option value="qap">QAP</option>
                  <option value="qac">QAC</option>
</select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
      <button style ="background-color:#7eb73d; border-color:#7eb73d;" type="button" class="btn btn-danger">Submit</button>
				<button style ="background-color:#686868 ; border-color:#686868 ;"type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>

<!--confirm button-->
<!--Add Role-->
<div class="modal fade" id="addApprover" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <h3 class="modal-title" id="exampleModalLabel"><center>Add Approver</center></h3>
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Emp Code:</label>
            <input type="text" class="form-control" id="emp">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name:</label>
            <input placeholder = "Kan Y." type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Role:</label>
            <select class="form-control" id="role">
                  <option value="creator">Creator</option>
                  <option value="bkd">BKD</option>
                  <option value="qap">QAP</option>
                  <option value="qac">QAC</option>
</select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Company:</label>
            <select class="form-control" id="role">
                  <option value="creator">SKD</option>
                  <option value="bkd">SDM</option>
                  
</select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>
<style>
<!--confirm button-->
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
<!--confirm button-->
</style>

  
</html>