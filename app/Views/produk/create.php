<!-- app/Views/produk/create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Produk</title>
</head>
<body>

    <h2>Tambah Produk</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('/produk/store') ?>" method="post">
        <p>
            <label>Nama Produk</label><br>
            <input type="text" name="nama_produk" required>
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" step="0.01" name="harga" required>
        </p>

        <p>
            <label>Kategori</label><br>
            <select name="kategori_id" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach($kategori as $k): ?>
                    <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

</body>
</html>
