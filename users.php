<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getUsersData = getDataFromTables('users',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); $i=1; ?>
     
      <div class="site-content">
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Users</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Mobile</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getUsersData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['user_name'];?></td>
                    <td><?php echo $row['user_email'];?></td>
                    <td><?php echo $row['user_mobile'];?></td>                    
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success'>Active</span>" ;} else{ echo "<span class='label label-outline-info'>In Active</span>" ;}?></td>
                    <td> <i class="zmdi zmdi-edit"></i> &nbsp; <i class="zmdi zmdi-edit"></i></td>
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