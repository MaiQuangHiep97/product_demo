<?php $this->render('blocks/admins/header', $this->data)?>
<?php $this->render('blocks/admins/sidebar')?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php if (!empty($_SESSION['success'])) {?>
    <div class="alert alert-success text-success text-center"><?php echo $_SESSION['success']?></div>
    <?php unset($_SESSION['success']);
} ?>
                        <h1 class="mt-0">Add Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo _DIR_ROOT;?>/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Product
                            </div>
                            <div class="card-body">
                            <form method="POST" action="<?php echo _WEB_ROOT;?>/admin/product/store" id="addProduct" enctype="multipart/form-data">
                 
                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input class="form-control" id="product-name" type="text" name="product_name" value="">
                    <?php echo(!empty($errors)&& array_key_exists('product_name', $errors))?'<span style="color: red;">'.$errors['product_name'].'</span>':false?>
                </div>
              
                <div class="form-group">
                    <label for="product-desc">Description</label>
                    <textarea class="form-control" type="text" id="product-desc" name="product_desc" rows="3" value=""></textarea>
                    <?php echo(!empty($errors)&& array_key_exists('product_desc', $errors))?'<span style="color: red;">'.$errors['product_desc'].'</span>':false?>
                </div>
                <div class="form-group">
                    <label for="product-detail">Detail</label>
                    <textarea class="form-control" type="text" id="product-detail" name="product_detail" rows="3" value=""></textarea>
                    <?php echo(!empty($errors)&& array_key_exists('product_detail', $errors))?'<span style="color: red;">'.$errors['product_detail'].'</span>':false?>
                </div>
                
                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input class="form-control" type="text" id="product-price" name="product_price" value="">
                    <?php echo(!empty($errors)&& array_key_exists('product_price', $errors))?'<span style="color: red;">'.$errors['product_price'].'</span>':false?>
                </div>
                
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="product_cat">
                        <option value="" disabled selected>-- Select Category --</option>
                        <?php foreach ($cats as $value) {?>
                            <option value="<?= $value['id'] ?>"><?= $value['cat_name']?></option>
                       <?php } ?>
                    </select>
                    <?php echo(!empty($errors)&& array_key_exists('product_cat', $errors))?'<span style="color: red;">'.$errors['product_cat'].'</span>':false?>
                </div> 
                
                <div class="form-group">
                        <label for="product-thumb">Product thumb</label>
                        <div class="custom-file">
                        <input type="file" id="product-thumb" name="product_thumb" accept=".png,.gif,.jpg,.jpeg">
                        <?php echo(!empty($errors)&& array_key_exists('product_thumb', $errors))?'<span style="color: red;">'.$errors['product_thumb'].'</span>':false?>
                        </div>
                </div>
                <div class="form-group">
                        <label for="product-images">Images</label>
                    <div class="custom-file">
                        <input type="file" id="product-images" multiple="multiple" name="product_images[]" accept=".png,.gif,.jpg,.jpeg">
                        <?php echo(!empty($errors)&& array_key_exists('product_images', $errors))?'<span style="color: red;">'.$errors['product_images'].'</span>':false?>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Add Product</button>
            </form>
                            </div>
                        </div>
                    </div>
                </main>        
<?php $this->render('blocks/admins/footer')?>
                
