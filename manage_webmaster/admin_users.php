<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getAdminUsersData = getDataFromTables('admin_users',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); $i=1; ?>
     
      <div class="site-content">
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_admin_users.php" style="float:right">Add Admin User</a>
            <h3 class="m-t-0 m-b-5">Admin Users</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Admin Name</th>
                    <th>Admin Email</th>
                    <th>created_at</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getAdminUsersData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['admin_name'];?></td>
                    <td><?php echo $row['admin_email'];?></td>
                    <td><?php echo $row['created_at'];?></td>                    
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success'>Active</span>" ;} else{ echo "<span class='label label-outline-info'>In Active</span>" ;}?></td>
                    <td> <i class="zmdi zmdi-edit"></i> &nbsp; <i class="zmdi zmdi-delete zmdi-hc-fw"></i> &nbsp;<i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#successModal2" class=""></i></td>

                    <!-- Open Modal Box  here -->
                    <div id="successModal2" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                              </span>
                            </button>
                            <center><h4 class="modal-title">Modal title</h4></center>
                          </div>
                        <div class="modal-body">

            						<div class="Name">Name: &nbsp&nbsp&nbsp&nbsp&nbspSwapna </div>
            						  <div class="Email">Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbspswapnaireddy@gmail.com</div>
            						  <div class="tel">Number: &nbsp&nbsp987654321</div>
            						  <div class="Date">Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp28/08/2017</div>
            						  <div class="Status">Status: &nbsp&nbsp&nbsp&nbsp&nbspActive </div>
            						</div>
                        <div class="modal-footer">
                        <!--<button type="button" data-dismiss="modal" class="btn btn-success">Continue</button>-->
                        <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>
          							
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Box  here -->
                    
                  </tr>
                  <?php  $i++; } ?>                  
                </tbody>                
              </table>
            </div>
          </div>
        </div>      
        
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>