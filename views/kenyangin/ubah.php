<div class="container">
    <div class="card">
        <h5 class="card-header">
            Ubah Menu
        </h5>
        <ul class="list-group list-group-flush">
            <form action="<?= BASEURL ?>kenyangin/ubahKenyangin/<?= $data['kenyangin']['id'] ?>" method="post">
                <li class="list-group-item">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Menu</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Hasil Panen" value="<?= $data['kenyangin']['nama'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="<?= $data['kenyangin']['id_kategori'] ?>"><?= $data['kenyangin']['kategori'] ?></option>
                                <option value="1">Makanan</option>
                                <option value="2">Cemilan</option>
                                <option value="3">Minuman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?= $data['kenyangin']['deskripsi'] ?>" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Harga (Rupiah/Pcs)</label>
                            <input type="number" class="form-control" name="harga" placeholder="harga" value="<?= $data['kenyangin']['harga'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Stok (Pcs)</label>
                            <input type="number" class="form-control" name="stok" placeholder="stok" value="<?= $data['kenyangin']['stok'] ?>" required>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </li>
            </form>
            <li class="list-group-item">
                <div>
                    <label> Foto </label>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto1 = $data['kenyangin']['foto1'];
                        if (!empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto1; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto1/<?= $data['kenyangin']['id'] ?>/<?= $foto1 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto1/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="foto1" required>
                                    <label class="custom-file-label" for="foto1">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto1">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto2 = $data['kenyangin']['foto2'];
                        if (!empty($foto2)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto2; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto2/<?= $data['kenyangin']['id'] ?>/<?= $foto2 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto2)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto2/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto2" name="foto2" aria-describedby="foto2" required>
                                    <label class="custom-file-label" for="foto2">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto2">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto3 = $data['kenyangin']['foto3'];
                        if (!empty($foto3)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto3; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto3/<?= $data['kenyangin']['id'] ?>/<?= $foto3 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto3)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto3/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto3" name="foto3" aria-describedby="foto3" required>
                                    <label class="custom-file-label" for="foto3">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto3">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto4 = $data['kenyangin']['foto4'];
                        if (!empty($foto4)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto4; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto4/<?= $data['kenyangin']['id'] ?>/<?= $foto4 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto4)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto4/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto4" name="foto4" aria-describedby="foto4" required>
                                    <label class="custom-file-label" for="foto4">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto4">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto5 = $data['kenyangin']['foto5'];
                        if (!empty($foto5)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto5; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto5/<?= $data['kenyangin']['id'] ?>/<?= $foto5 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto5)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto5/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto5" name="foto5" aria-describedby="foto5" required>
                                    <label class="custom-file-label" for="foto5">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto5">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto6 = $data['kenyangin']['foto6'];
                        if (!empty($foto6)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto6; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>kenyangin/hapusFoto6/<?= $data['kenyangin']['id'] ?>/<?= $foto6 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto6)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>kenyangin/ubahFoto6/<?= $data['kenyangin']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto6" name="foto6" aria-describedby="foto6" required>
                                    <label class="custom-file-label" for="foto6">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto6">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>