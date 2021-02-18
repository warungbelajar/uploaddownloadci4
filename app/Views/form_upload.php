<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Upload Berkas
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/berkas/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <input type="file" class="form-control" id="berkas" name="berkas">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= old('keterangan'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Upload" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>