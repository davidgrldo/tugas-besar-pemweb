<?= view('layouts/header'); ?>
<?= view('layouts/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php 
            $inputs = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if(!empty($errors)){ ?>
                    <div class="alert alert-danger" role="alert">
                        Whoops! Ada kesalahan saat input data, yaitu:
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <div class="card">
                        <?= form_open_multipart('product/update'); ?>
                        <div class="card-header">Form Edit Produk</div>
                        <div class="card-body">
                            <?= form_hidden('product_id', $product['product_id']); ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <?= form_label('Image', 'Image'); ?>
                                        <br>
                                        <img src="<?= base_url('uploads/'.$product['product_image']) ?>"
                                            class="img-fluid">
                                        <br>
                                        <br>
                                        <?= form_label('Ganti Image', 'Ganti Image'); ?>
                                        <?= form_upload('product_image', $product['product_image']); ?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <?= form_label('Category', 'Category'); ?>
                                        <?= form_dropdown('category_id', $categories, $product['category_id'], ['class' => 'form-control']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Name', 'Name'); ?>
                                        <?= form_input('product_name', $product['product_name'], ['class' => 'form-control', 'placeholder' => 'Product Name']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Price', 'Price'); ?>
                                        <?= form_input('product_price', $product['product_price'], ['class' => 'form-control', 'placeholder' => 'Product Price', 'type' => 'number']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('SKU', 'SKU'); ?>
                                        <?= form_input('product_sku', $product['product_sku'], ['class' => 'form-control', 'placeholder' => 'Product SKU']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?= form_label('Status', 'Status'); ?>
                                        <?= form_dropdown('product_status', ['' => 'Pilih', 'Active' => 'Active', 'Inactive' => 'Inactieve'], $product['product_status'], ['class' => 'form-control']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Description', 'Description'); ?>
                                        <?= form_textarea('product_description', $product['product_description'], ['class' => 'form-control', 'placeholder' => 'Product Description']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('product'); ?>" class="btn btn-outline-info">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= view('layouts/footer'); ?>