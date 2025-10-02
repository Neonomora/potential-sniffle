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
              'ASN - PNS',
              'ASN - P3K',
              'Non ASN - Swasta',
              'Non ASN (PTT/Kontrak/THL/Magang)',
              'Purnabakti',
              'TNI/POLRI',
              'Lainnya'
            ]);

            form_select('Provinsi', 'provinsi', getProvinsiList(), false, ['class' => 'form-select select2']);
            form_select('Kabupaten', 'kabupaten', getKabupatenList(), false, ['class' => 'form-select select2']);
            form_select('Kecamatan', 'kecamatan', getKecamtanList(), false, ['class' => 'form-select select2']);
            form_select('Kategori Wilayah', 'kategori_wilayah', [
              'Kota',
              'Pedesaan',
              'Terpencil',
              'Sangat Terpencil'
            ]);
            form_input('Pekerjaan Lain', 'pekerjaan_lain');
            form_textarea('Alamat Kerja Lainnya', 'alamat_kerja', 2);
            form_radiobox('Jabatan', 'jabatan', ['ASN', 'Non ASN']);
            form_radiobox('Pemberi Layanan Kesigmul', 'pemberi_layanan', [
              'Tidak',
              'Ya(Praktik)',
              'Ya(Pendidikan)'
            ]);
            form_select('Level Kompetensi (ASN/Non ASN', 'level', [
              'PRA TGMK',
              'TGMK1',
              'TGMK2',
              'TGMK3',
              'TGMK4',
              'TGMK5'
            ]);
            form_radiobox('Penghasilan', 'gaji', [
              '0',
              '< 1.000.000',
              '1.000.000 — 1.499.999',
              '1.500.000 — 1.999.999',
              '2.000.000 — 2.999.999',
              '3.000.000 — 3.999.999',
              '4.000.000 — 5.000.000'
            ]);
            form_select('Pangkat', 'pangkat', [
              'IIA Pengatur Muda',
              'IIB Pengatur Muda Tingkat I',
              'IIC Pengatur',
              'IID Pengatur Tingkat I',
              'IIA Penata Muda',
              'IIB Penata Muda Tingkat I',
              'IIC Penata',
              'IID Penata Tingkat I',
              'IVA Pembina',
              'IVB Pembina Tingkat I',
              'IVC Pembina Utama Muda'
            ]);
            form_input('TMT', 'tmt', 'date');

            form_radiobox('Punya STR/SIP?', 'str_sip', [
              'Ya',
              'Tidak'
            ], true);
            form_input('No.', 'no', 'text', true, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Mulai Berlaku', 'tanggal_mulai', 'text', true, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Tanggal Akhir Berlaku', 'tanggal_akhir', 'text', true, [
              'placeholder' => '2027-12-01'
            ]);

            form_input('No.', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('TMT', 'tmt', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);

            echo "<p>SIP Faskes 2 (jika ada)</p>";
            form_input('No.', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('TMT', 'tmt', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            echo "<p>SIP Mandiri 1 (jika ada)</p>";
            form_input('No.', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('TMT', 'tmt', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            echo "<p>SIP Mandiri 2 (jika ada)</p>";
            form_input('No.', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('TMT', 'tmt', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            ?>

            <h5 class="mt-4">Keanggotaan & Pendidikan</h5>
            <hr>

            <?php
            form_select('Pendidikan Terakhir', 'pendidikan', [
              'SPRG',
              'D3',
              'D4/S1',
              'S2',
              'S3'
            ], true);

            echo "<p>SPRG</p>";
            form_input('Tahun Lulus', 'tahun');
            form_input('No. Ijazah', 'no', 'text', true, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Ijazah', 'tanggal', 'text', true, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Institusi Pendidikan', 'institusi');

            echo "<p>D3</p>";
            form_input('Tahun Lulus', 'tahun');
            form_input('No. Ijazah', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Ijazah', 'tanggal', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Institusi Pendidikan', 'institusi');

            echo "<p>D4/S1</p>";
            form_input('Institusi Pendidikan', 'institusi');
            form_input('Tahun Lulus', 'tahun');
            form_input('No. Ijazah', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Ijazah', 'tanggal', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Institusi Pendidikan', 'institusi');

            echo "<p>S2</p>";
            form_input('Tahun Lulus', 'tahun');
            form_input('No. Ijazah', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Ijazah', 'tanggal', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Institusi Pendidikan', 'institusi');

            echo "<p>S3</p>";
            form_input('Tahun Lulus', 'tahun');
            form_input('No. Ijazah', 'no', 'text', false, [
              'placeholder' => 'Hindari penggunaan tanda / (garis miring)'
            ]);
            form_input('Tanggal Ijazah', 'tanggal', 'text', false, [
              'placeholder' => '2025-12-01'
            ]);
            form_input('Institusi Pendidikan', 'institusi');

            form_select('DPD', 'dpd', [
              'option 1',
              'option 2',
              'option 3'
            ]);
            form_select('DPC', 'dpc', [
              'option 1',
              'option 2',
              'option 3'
            ]);

            form_radiobox('Buat Akun', 'akun', [
              'Ya',
              'Tidak'
            ], true);
            form_input('Username', 'username', 'text', true);
            form_input('Password', 'password', 'text', true);
            ?>

            <h5 class="mt-4">Upload</h5>
            <hr>

            <?php
            form_input('Photo', 'photo', 'file', true);
            ?>

            <div class="mt-4">
              <button type="submit" class="btn btn-primary">Simpan Data</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>