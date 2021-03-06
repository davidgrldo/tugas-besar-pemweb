<?= view('layouts/header'); ?>
<?= view('layouts/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Show Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Show Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= base_url('uploads/'.$product['product_image']) ?>" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <dl class="dl-horizontal">
                                        <dt>SKU / Kode Product</dt>
                                        <dd><?= $product['product_sku']; ?></dd>
                                        <dt>Kategori Product</dt>
                                        <dd><?= $product['category_name']; ?></dd>
                                        <dt>Nama Product</dt>
                                        <dd><?= $product['product_name']; ?></dd>
                                        <dt>Harga Product</dt>
                                        <dd><?= 'Rp. '.number_format($product['product_price']); ?></dd>
                                        <dt>Status Product</dt>
                                        <dd><?= $product['product_status']; ?></dd>
                                        <dt>Description Product</dt>
                                        <dd><?= $product['product_description']; ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('product'); ?>" class="btn btn-outline-info float-right">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= view('layouts/footer'); ?>