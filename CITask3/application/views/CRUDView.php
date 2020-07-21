<?php $this->load->view('includes/header')?>
 <div class="container">
 <br>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Product
  </button>
  <br>
  <br>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-body">
      <form method="post" action="<?php echo site_url('CRUDController/create')?>">
        <div class="form-group">
        <label for="exampleInputEmail1">Product ID</label>
            <input type="text" class="form-control" name="productID" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" name="productname" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">SRP</label>
            <input type="text" class="form-control" name="SRP" aria-describedby="emailHelp" placeholder="">
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"value="save">Save</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">SRP</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $row) {?>
            <tr>
            <th scope="row"><?php echo $row->id; ?></th>
            <td><?php echo $row->productID; ?></td>
            <td><?php echo $row->productname; ?></td>
            <td><?php echo $row->SRP; ?></td>
            <td> <a href="<?php echo site_url('CRUDController/edit');?>/<?php echo $row->id;?>">Edit</a> |
                 <a href="<?php echo site_url('CRUDController/delete');?>/<?php echo $row->id;?>" class="text-danger">Delete</a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
  </body>
</html>