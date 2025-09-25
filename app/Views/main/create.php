<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
        <h5 class="mt-4">Identitas Pribadi</h5>
        <hr>

        <?= csrf_field() ?>

        <?php
        form_input('NIK', 'nik', 'text', true);
        form_input('Nama', 'nama', 'text', true);
        form_input('Gelar Depan', 'gelar_depan', 'text', false, [
            'placeholder' => 'Kosongkan jika tidak ada'
        ]);
        form_input('Gelar Belakang', 'gelar_belakang', 'text', false, [
            'placeholder' => 'Kosongkan jika tidak ada'
        ]);
        form_input('Tempat Lahir', 'tempat_lahir', 'text', true);
        form_input('Tanggal Lahir', 'tanggal_lahir', 'date', true);
        form_select('Jenis Kelamin', 'jenis_kelamin', ['Laki-laki', 'Perempuan'], true);
        form_input('Ibu Kandung', 'ibu_kandung', 'text', true);
        form_select('Agama', 'agama', ['Islam', 'Kristen', 'Budha', 'Konghucu'], true);
        form_select('Status', 'status', ['Menikah', 'Lajang'], true);
        ?>

        <h5 class="mt-4">Alamat Lengkap</h5>
        <hr>

        <?php
        form_textarea('Alamat Lengkap', 'alamat_lengkap', 3, true);
        form_select('Provinsi', 'provinsi', getProvinsiList(), true, ['class' => 'form-select select2']);
        form_select('Kabupaten', 'kabupaten', getKabupatenList(), true, ['class' => 'form-select select2']);
        form_select('Kecamatan', 'kecamatan', getKecamtanList(), true, ['class' => 'form-select select2']);
        form_input('Kelurahan', 'kelurahan', 'text', true);
        form_input('RT / RW', 'rt_rw', 'text', true);
        ?>

        <h5 class="mt-4">Kontak & Sosial Media</h5>
        <hr>

        <?php
        form_input('Nomor HP', 'nomor_hp', 'text', true);
        form_input('Nomor WA', 'nomor_wa', 'text', true);
        form_input('Email', 'email', 'email', true);
        form_input('Facebook', 'facebook', 'text', false, [
            'placeholder' => 'Optional'
        ]);
        form_input('Twitter', 'twitter', 'text', false, [
            'placeholder' => 'Optional'
        ]);
        ?>

        <h5 class="mt-4">Pekerjaan</h5>
        <hr>

        <?php
        form_select('Pekerjaan Utama', 'pekerjaan_utama', [
            'ASN - PNS', 'ASN - P3K', 'Non ASN - Swasta',
            'Non ASN (PTT/Kontrak/THL/Magang)', 'Purnabakti',
            'TNI/POLRI', 'Lainnya'
        ]);
        form_input('Pekerjaan Lain', 'pekerjaan_lain');
        form_textarea('Alamat Kerja', 'alamat_kerja', 2);
        form_input('Jabatan', 'jabatan');
        form_input('Level', 'level');
        form_input('Penghasilan', 'gaji', 'number');
        form_input('Pangkat', 'pangkat');
        form_input('TMT', 'tmt', 'date');
        form_input('STR/SIP', 'str_sip');
        ?>

        <h5 class="mt-4">Keanggotaan & Pendidikan</h5>
        <hr>

        <?php
        form_input('Pendidikan', 'pendidikan');
        form_input('DPD', 'dpd');
        form_input('DPC', 'dpc');
        form_input('Akun', 'akun');
        ?>

        <h5 class="mt-4">Upload</h5>
        <hr>

        <?php
        form_input('Photo (URL / Nama File)', 'photo');
        ?>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Aktifkan Select2 untuk semua select dengan class 'select2'
    $('.select2').select2({
        placeholder: "Pilih",
        allowClear: true
    });
});
</script>
</body>
</html>
