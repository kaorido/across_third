<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CRUDController/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Product ID</label>
                <input type="text" class="form-control" name="productID" value="<?php echo $row->productID; ?>" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="productname" value="<?php echo $row->productname; ?>" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SRP</label>
                <input type="int" class="form-control" name="SRP" value="<?php echo $row->SRP; ?>" aria-describedby="emailHelp" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Save changes</button>
            <a href="<?php echo site_url('CRUDController')?>"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
        </form>  
    </div>
  </body>
</html>