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
                Data Berkas
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <a href="<?= base_url(); ?>/berkas/create" class="btn btn-primary">Upload</a>
                <hr />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($berkas as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/berkas/" . $row->berkas; ?>"></td>
                                <td><?= $row->keterangan; ?></td>
                                <td><a class="btn btn-info" href="<?= base_url(); ?>/berkas/download/<?= $row->id_berkas; ?>">Download</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>