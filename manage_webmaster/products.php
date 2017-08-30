<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getProductsData = getAllDataWithActiveRecent('banners'); $i=1; ?>
     
      <div class="site-content">
        
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_products.php" style="float:right">Add Products</a>
            <h3 class="m-t-0 m-b-5">Products</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Products</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getProductsData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><img src="<?php echo $base_url . 'uploads/product_images/'.$row['banner'] ?>" height="100" width="100"/></td>                    
                    <td><?php if ($row['status']==1) { echo "<span class='label label-outline-success'>Active</span>" ;} else{ echo "<span class='label label-outline-info'>In Active</span>" ;}?></td>
                    <td> <a href="edit_products.php?bid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_products.php?bid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td> 
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