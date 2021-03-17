<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/product-form') ?>" class="btn btn-success mb-2">Add Product</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="products-list">
       <thead>
          <tr>
             <th>Product Id</th>
             <th>Name</th>
             <th>Description</th>
             <th>Price</th>
             <th>Creation date</th>
             <th>Update date</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($product): ?>
          <?php foreach($product as $product): ?>
          <tr>
             <td><?php echo $product['id']; ?></td>
             <td><?php echo $product['name']; ?></td>
             <td><?php echo $product['description']; ?></td>
             <td><?php echo $product['price']; ?></td>
             <td><?php echo $product['created_at']; ?></td>
             <td><?php echo $product['updated_at']; ?></td>
             <td>
              <a href="<?php echo base_url('index.php/edit-view/'.$product['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('index.php/delete/'.$product['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#products-list').DataTable();
  } );
</script>
</body>
</html>