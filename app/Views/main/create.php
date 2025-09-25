<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="">Form</h2>
    <hr>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/main/store') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK *</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?= old('nik') ?>" required>
        </div>

        <!-- input nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama *</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
        </div>

        <!-- input gelar depan -->
        <div class="mb-3">
            <label for="gelar_depan" class="form-label">Gelar Depan</label>
            <input type="text" class="form-control" id="gelar_depan" name="gelar_depan" value="<?= old('gelar_depan') ?>">
        </div>

        <!-- input gelar belakang -->
        <div class="mb-3">
            <label for="gelar_belakang" class="form-label">Gelar Belakang</label>
            <input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" value="<?= old('gelar_belakang') ?>">
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ?>" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" disabled selected>Pilih jenis kelamin</option>
                <option value="Laki-laki" <?= old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ibu_kandung" class="form-label">Ibu Kandung *</label>
            <input type="text" class="form-control" id="ibu_kandung" name="ibu_kandung" value="<?= old('ibu_kandung') ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat_lengkap" class="form-label">Alamat Lengkap *</label>
            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3" required><?= old('alamat_lengkap') ?></textarea>
        </div>

        <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi *</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= old('provinsi') ?>" required>
        </div>

        <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten *</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= old('kabupaten') ?>" required>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan *</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= old('kecamatan') ?>" required>
        </div>

        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan *</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= old('kelurahan') ?>" required>
        </div>

        <div class="mb-3">
            <label for="rt_rw" class="form-label">RT / RW *</label>
            <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="<?= old('rt_rw') ?>" required>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama *</label>
            <input type="text" class="form-control" id="agama" name="agama" value="<?= old('agama') ?>" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status *</label>
            <input type="text" class="form-control" id="status" name="status" value="<?= old('status') ?>" required>
        </div>

        <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP *</label>
            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= old('nomor_hp') ?>" required>
        </div>

        <div class="mb-3">
            <label for="nomor_wa" class="form-label">Nomor WA *</label>
            <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" value="<?= old('nomor_wa') ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook" value="<?= old('facebook') ?>">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter" value="<?= old('twitter') ?>">
        </div>

        <div class="mb-3">
            <label for="pekerjaan_utama" class="form-label">Pekerjaan Utama</label>
            <input type="text" class="form-control" id="pekerjaan_utama" name="pekerjaan_utama" value="<?= old('pekerjaan_utama') ?>">
        </div>

        <div class="mb-3">
            <label for="pekerjaan_lain" class="form-label">Pekerjaan Lain</label>
            <input type="text" class="form-control" id="pekerjaan_lain" name="pekerjaan_lain" value="<?= old('pekerjaan_lain') ?>">
        </div>

        <div class="mb-3">
            <label for="alamat_kerja" class="form-label">Alamat Kerja</label>
            <textarea class="form-control" id="alamat_kerja" name="alamat_kerja" rows="2"><?= old('alamat_kerja') ?></textarea>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= old('jabatan') ?>">
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="<?= old('level') ?>">
        </div>

        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="number" class="form-control" id="gaji" name="gaji" value="<?= old('gaji') ?>">
        </div>

        <div class="mb-3">
            <label for="pangkat" class="form-label">Pangkat</label>
            <input type="text" class="form-control" id="pangkat" name="pangkat" value="<?= old('pangkat') ?>">
        </div>

        <div class="mb-3">
            <label for="tmt" class="form-label">TMT</label>
            <input type="date" class="form-control" id="tmt" name="tmt" value="<?= old('tmt') ?>">
        </div>

        <div class="mb-3">
            <label for="str_sip" class="form-label">STR/SIP</label>
            <input type="text" class="form-control" id="str_sip" name="str_sip" value="<?= old('str_sip') ?>">
        </div>

        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= old('pendidikan') ?>">
        </div>

        <div class="mb-3">
            <label for="dpd" class="form-label">DPD</label>
            <input type="text" class="form-control" id="dpd" name="dpd" value="<?= old('dpd') ?>">
        </div>

        <div class="mb-3">
            <label for="dpc" class="form-label">DPC</label>
            <input type="text" class="form-control" id="dpc" name="dpc" value="<?= old('dpc') ?>">
        </div>

        <div class="mb-3">
            <label for="akun" class="form-label">Akun</label>
            <input type="text" class="form-control" id="akun" name="akun" value="<?= old('akun') ?>">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo (URL / Nama File)</label>
            <input type="text" class="form-control" id="photo" name="photo" value="<?= old('photo') ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
</div>
</body>
</html>
