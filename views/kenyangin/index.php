<div class="container">
    <div class="card">
        <h5 class="card-header">
            Menu Kenyangin
            <a href="<?= BASEURL ?>kenyangin/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form id="cari" action="<?= BASEURL ?>kenyangin/cari" class="input-group p-2" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Makanan atau Minuman" aria-label="cari" aria-describedby="cari" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['kenyangin']) { ?>
                <li class="list-group-item">
                    Belum ada menu
                </li>
            <?php } else {
            foreach ($data['kenyangin'] as $kenyangin) : ?>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="float-left mr-3 mw-100" src="<?= BASEURL ?>app/models/barang/<?= $kenyangin['foto1']; ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <a class="card-link float-left" href="<?= BASEURL ?>kenyangin/detail/<?= $kenyangin['id']; ?>">
                                <div class="">
                                    <h5 class="text-body"><?= $kenyangin['nama']; ?></h5>
                                    <p class="text-muted small">Ditambahkan sejak <?= $kenyangin['created_at']; ?> </p>
                                    <p class="text-muted">Rp. <?= $kenyangin['harga']; ?>/Pcs</p>
                                    <p class="text-body"><?= $kenyangin['deskripsi']; ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= BASEURL ?>kenyangin/hapus/<?= $kenyangin['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus ?');">hapus</a>
                            <a href="<?= BASEURL ?>kenyangin/ubah/<?= $kenyangin['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                        </div>
                    </div>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>