<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getBannersData = getDataFromTables('banners',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); $i=1; ?>
     
      <div class="site-content">
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_banners.php" style="float:right">Add Banners</a>
            <h3 class="m-t-0 m-b-5">Banners</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Banner</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getBannersData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><img src="<?php echo $base_url . 'uploads/banner_images/'.$row['banner'] ?>" height="100" width="100"/></td>                    
                    <td><?php if ($row['status']==1) { echo "<span class='label label-outline-success'>Active</span>" ;} else{ echo "<span class='label label-outline-info'>In Active</span>" ;}?></td>
                    <td> <a href="edit_banners.php?bid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_banners.php?bid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td> 
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