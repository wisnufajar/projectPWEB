<div class="container">
    <div class="card mt-5">
        <h5 class="card-header">
             Menu Kenyangin
        </h5>
        <ul class="list-group list-group-flush">
            <?php if (!$data['jenis_makanan']) { ?>
                <li class="list-group-item">
                    Kosong
                </li>
            <?php } else {
            foreach ($data['jenis_makanan'] as $kenyangin) : ?>
                <li class="list-group-item ">
                    <a class="card-link" href="<?= BASEURL ?>kenyangin/detail/<?= $kenyangin['id']; ?>">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <img class="" src="<?= BASEURL ?>app/models/barang/<?= $kenyangin['foto1']; ?>" alt="" width="100%;">
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-body"><?= $kenyangin['nama']; ?></h5>
                                <p class="text-body"><?= $kenyangin['deskripsi']; ?></p>
                            </div>
                            <div class="col-md-3 d-flex align-items-end flex-column">
                                <p class="text-muted">Rp. <?= $kenyangin['harga']; ?>/Pcs</p>
                                <p class="text-muted small mt-auto">
                                    Ditambahkan sejak <?= $kenyangin['created_at']; ?> <br>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>