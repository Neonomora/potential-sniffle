<?php

if (!function_exists('getProvinsiList')) {
    function getProvinsiList(): array
    {
        return [
            'Aceh', 'Bali', 'Bangka Belitung', 'Banten', 'Bengkulu',
            'Gorontalo', 'Jakarta', 'Jambi', 'Jawa Barat', 'Jawa Tengah',
            'Jawa Timur', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur',
            'Kalimantan Utara', 'Kepulauan Riau', 'Lampung', 'Maluku', 'Maluku Utara',
            'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Papua', 'Papua Barat', 'Riau',
            'Sulawesi Barat', 'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Tenggara', 'Sulawesi Utara',
            'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara', 'Yogyakarta'
        ];
    }
}

if (!function_exists('getKabupatenList')) {
    function getKabupatenList(): array
    {
        return[
            'Aceh Barat', 'Aceh Barat Daya', 'Aceh Jaya', 'Aceh Selatan', 'Aceh Tamiang',
            'Aceh Tengah', 'Aceh Timur', 'Anambas', 'Asmat', 'Balangan',
            'Balikpapan', 'Banda Aceh', 'Bandar Lampung', 'Bandung', 'Bangka Barat',
            'Bangka Selatan', 'Bangka Tengah', 'Bangkalan', 'Banjar', 'Banyumas',
            'Banyuwangi', 'Barito Kuala', 'Barito Selatan', 'Barito Timur', 'Batam',
            'Batanghari', 'Bekasi', 'Belitung', 'Belitung Timur', 'Bengkayang',
            'Bengkulu', 'Bengkulu Selatan', 'Bengkulu Tengah', 'Bengkulu Utara', 'Berau',
            'Bima', 'Bintan', 'Bireuen', 'Blitar', 'Boalemo',
            'Bojonegoro', 'Bondowoso', 'Bone Bolango', 'Boven Digoel', 'Boyolali',
            'Buleleng', 'Bungo', 'Buru', 'Buru Selatan', 'Ciamis',
            'Cianjur', 'Cilegon', 'Cilacap', 'Cirebon', 'Demak',
            'Dompu', 'Ende', 'Flores Timur', 'Gianyar', 'Garut',
            'Gorontalo', 'Gorontalo Utara', 'Grobogan', 'Halmahera Barat', 'Halmahera Selatan',
            'Halmahera Tengah', 'Halmahera Timur', 'Halmahera Utara', 'Indramayu', 'Intan Jaya',
            'Jakarta Barat', 'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 'Jakarta Utara',
            'Jambi', 'Jembrana', 'Jepara', 'Jayapura', 'Jayawijaya',
            'Karanganyar', 'Karangasem', 'Katingan', 'Kapuas', 'Kapuas Hulu',
            'Kaur', 'Kayong Utara', 'Kepulauan Seribu', 'Kepulauan Sula', 'Ketapang',
            'Klungkung', 'Klaten', 'Kotawaringin Barat', 'Kotawaringin Timur', 'Kota Banda Aceh',
            'Kota Balikpapan', 'Kota Bandar Lampung', 'Kota Bandung', 'Kota Batam', 'Kota Bengkulu',
            'Kota Bogor', 'Kota Cilegon', 'Kota Denpasar', 'Kota Gorontalo', 'Kota Jakarta Barat',
            'Kota Jakarta Pusat', 'Kota Jakarta Selatan', 'Kota Jakarta Timur', 'Kota Jakarta Utara', 'Kota Jambi',
            'Kota Jayapura', 'Kota Kupang', 'Kota Mataram', 'Kota Palangka Raya', 'Kota Pangkalpinang',
            'Kota Pontianak', 'Kota Semarang', 'Kota Sorong', 'Kota Sorong Selatan', 'Kota Surabaya',
            'Kota Tangerang', 'Kota Tarakan', 'Kota Ternate', 'Kupang', 'Kutai Barat',
            'Kutai Kartanegara', 'Kutai Timur', 'Landak', 'Lampung Barat', 'Lampung Selatan',
            'Lampung Tengah', 'Lampung Timur', 'Lampung Utara', 'Lanny Jaya', 'Lebak',
            'Lebong', 'Lembata', 'Lingga', 'Lombok Barat', 'Lombok Tengah',
            'Lombok Timur', 'Lombok Utara', 'Malang', 'Malinau', 'Maluku Barat Daya',
            'Maluku Tengah', 'Maluku Tenggara', 'Maluku Tenggara Barat', 'Mamberamo Raya', 'Manokwari Selatan',
            'Manokwari', 'Manggarai', 'Maybrat', 'Mesuji', 'Mimika',
            'Muaro Jambi', 'Mukomuko', 'Nabire', 'Natuna', 'Nunukan',
            'Pandeglang', 'Paser', 'Pasuruan', 'Penajam Paser Utara', 'Puncak',
            'Raja Ampat', 'Rejang Lebong', 'Rote Ndao', 'Sabu Raijua', 'Samarinda',
            'Sambas', 'Sanggau', 'Serang', 'Seram Bagian Barat', 'Seram Bagian Timur',
            'Sidoarjo', 'Sikka', 'Sintang', 'Sorong', 'Sorong Selatan',
            'Sumbawa', 'Sumbawa Barat', 'Surabaya', 'Tabalong', 'Tambrauw',
            'Tangerang', 'Tangerang Selatan', 'Tanjung Jabung Barat', 'Tanjung Jabung Timur', 'Tana Tidung',
            'Tanah Bumbu', 'Ternate', 'Tolikara', 'Tulang Bawang', 'Tulang Bawang Barat',
            'Wakatobi', 'Yahukimo'
        ];
    }
}

if (!function_exists('getKecamatanList')) {
    function getKecamtanList(): array
    {
        return [
            'Abang', 'Abiansemal', 'Air Gegas', 'Andir', 'Anambas',
            'Baiturrahman', 'Bakam', 'Balangan', 'Bangka Barat', 'Bangka Selatan',
            'Bangka Tengah', 'Bangkalan', 'Banjarangkan', 'Bantul', 'Banyuasin I',
            'Banyuasin II', 'Banyuasin III', 'Banyumas', 'Banyuangi', 'Barito Selatan',
            'Barito Timur', 'Batam', 'Batang', 'Beban', 'Bekasi Barat',
            'Bekasi Selatan', 'Bekasi Timur', 'Bekasi Utara', 'Belinyu', 'Belitung Timur',
            'Bengkayang', 'Bengkulu Selatan', 'Bengkulu Tengah', 'Bengkulu Utara', 'Berau',
            'Bintan', 'Bireuen', 'Blahbatuh', 'Blitar', 'Boalemo',
            'Bogor Barat', 'Bogor Selatan', 'Bogor Timur', 'Bogor Utara', 'Bolsel',
            'Bontang', 'Boyolali', 'Brebes', 'Bungo', 'Buru Selatan',
            'Bulungan', 'Ciamis', 'Cilandak', 'Cimahi Selatan', 'Cimahi Tengah',
            'Cimahi Utara', 'Cimanggung', 'Cirebon', 'Coblong', 'Dawan',
            'Demak', 'Depok Barat', 'Depok Timur', 'Denpasar Barat', 'Denpasar Selatan',
            'Denpasar Timur', 'Denpasar Utara', 'Dompu', 'Ende', 'Gabek',
            'Gantung', 'Gianyar', 'Grobogan', 'Gunungpati', 'Hulu Sungai Selatan',
            'Hulu Sungai Tengah', 'Indrapuri', 'Jagong Jeget', 'Jangka', 'Jepara',
            'Jeunieb', 'Jatinangor', 'Kaliwungu', 'Kambang', 'Kampung',
            'Kampung Dalam', 'Kanigoro', 'Karanganyar', 'Karangasem', 'Kayong Utara',
            'Kebayoran Baru', 'Kecamatan Air Salek', 'Kecamatan Banyuasin I', 'Kecamatan Banyuasin II', 'Kecamatan Banyuasin III',
            'Kecamatan Batam', 'Kecamatan Bekasi Barat', 'Kecamatan Bekasi Selatan', 'Kecamatan Bekasi Timur', 'Kecamatan Bekasi Utara',
            'Kecamatan Belinyu', 'Kecamatan Blahbatuh', 'Kecamatan Bogor Barat', 'Kecamatan Bogor Selatan', 'Kecamatan Bogor Timur',
            'Kecamatan Bogor Utara', 'Kecamatan Ciamis', 'Kecamatan Cilandak', 'Kecamatan Cimahi Selatan', 'Kecamatan Cimahi Tengah',
            'Kecamatan Cimahi Utara', 'Kecamatan Cimanggung', 'Kecamatan Cirebon', 'Kecamatan Coblong', 'Kecamatan Dawan',
            'Kecamatan Demak', 'Kecamatan Depok Barat', 'Kecamatan Depok Timur', 'Kecamatan Denpasar Barat', 'Kecamatan Denpasar Selatan',
            'Kecamatan Denpasar Timur', 'Kecamatan Denpasar Utara', 'Kecamatan Dompu', 'Kecamatan Ende', 'Kecamatan Gabek',
            'Kecamatan Gantung', 'Kecamatan Gianyar', 'Kecamatan Grobogan', 'Kecamatan Gunungpati', 'Kecamatan Hulu Sungai Selatan',
            'Kecamatan Hulu Sungai Tengah', 'Kecamatan Indrapuri', 'Kecamatan Jagong Jeget', 'Kecamatan Jangka', 'Kecamatan Jepara',
            'Kecamatan Jeunieb', 'Kecamatan Jatinangor', 'Kecamatan Kaliwungu', 'Kecamatan Kambang', 'Kecamatan Kampung',
            'Kecamatan Kampung Dalam', 'Kecamatan Kanigoro', 'Kecamatan Karanganyar', 'Kecamatan Karangasem', 'Kecamatan Kayong Utara',
            'Kecamatan Kebayoran Baru', 'Kecamatan Ketapang', 'Kecamatan Klaten', 'Kecamatan Klungkung', 'Kecamatan Kota Juang',
            'Kecamatan Kota Kudus', 'Kecamatan Kota Pangkalpinang', 'Kecamatan Kota Pangkalpinang', 'Kecamatan Kota Tangerang', 'Kecamatan Kotawaringin Barat',
            'Kecamatan Kotawaringin Timur', 'Kecamatan Kubu', 'Kecamatan Kubu Raya', 'Kecamatan Kudus', 'Kecamatan Kupang',
            'Kecamatan Kupang', 'Kecamatan Kuta', 'Kecamatan Kuta Alam', 'Kecamatan Kuta Baro', 'Kecamatan Kuta Selatan',
            'Kecamatan Kuta Utara', 'Kecamatan Kwitang', 'Kecamatan Lampung Barat', 'Kecamatan Lampung Selatan', 'Kecamatan Lampung Tengah',
            'Kecamatan Lampung Timur', 'Kecamatan Lampung Utara', 'Kecamatan Landak', 'Kecamatan Lanny Jaya', 'Kecamatan Lembata',
            'Kecamatan Lebak', 'Kecamatan Lepar Pongok', 'Kecamatan Leupung', 'Kecamatan Lingga', 'Kecamatan Lhoknga',
            'Kecamatan Lubuk Besar', 'Kecamatan Lubuk Linggau Barat I', 'Kecamatan Lubuk Linggau Barat II', 'Kecamatan Lubuk Linggau Selatan I', 'Kecamatan Lubuk Linggau Timur I',
            'Kecamatan Lubuk Linggau Timur II', 'Kecamatan Lumajang', 'Kecamatan Lueng Bata', 'Kecamatan Luwu Timur', 'Kecamatan Mampang Prapatan',
            'Kecamatan Mamberamo Raya', 'Kecamatan Mando', 'Kecamatan Manggarai', 'Kecamatan Manggar', 'Kecamatan Manokwari Selatan',
            'Kecamatan Manokwari', 'Kecamatan Mappi', 'Kecamatan Maros', 'Kecamatan Mataram', 'Kecamatan Mendo Barat',
            'Kecamatan Mengwi', 'Kecamatan Mengwi', 'Kecamatan Merawang', 'Kecamatan Merauke', 'Kecamatan Merauke',
            'Kecamatan Mesuji', 'Kecamatan Mimika', 'Kecamatan Mimika', 'Kecamatan Muara Enim', 'Kecamatan Mukomuko',
            'Kecamatan Mungkid', 'Kecamatan Muntilan', 'Kecamatan Nabire', 'Kecamatan Namang', 'Kecamatan Natuna',
            'Kecamatan Nusa Penida', 'Kecamatan Nunukan', 'Kecamatan Pancoran Mas', 'Kecamatan Pamekasan', 'Kecamatan Pangkal Balam',
            'Kecamatan Pangkal Lalang', 'Kecamatan Pandeglang', 'Kecamatan Pangkajene', 'Kecamatan Pangkep', 'Kecamatan Pangkep',
            'Kecamatan Pangkep', 'Kecamatan Pasar Kliwon', 'Kecamatan Pasar Minggu', 'Kecamatan Paser', 'Kecamatan Pasuruan',
            'Kecamatan Pegasing', 'Kecamatan Pegunungan Bintang', 'Kecamatan Pekalongan', 'Kecamatan Pelalawan', 'Kecamatan Penajam Paser Utara',
            'Kecamatan Penajam Paser Utara', 'Kecamatan Perbaungan', 'Kecamatan Pesanggrahan', 'Kecamatan Pesawaran', 'Kecamatan Pesisir Barat',
            'Kecamatan Pohuwato', 'Kecamatan Pontianak', 'Kecamatan Pontianak', 'Kecamatan Pontianak Selatan', 'Kecamatan Pontianak Timur',
            'Kecamatan Pontianak Utara', 'Kecamatan Puncak', 'Kecamatan Puncak', 'Kecamatan Purwokerto Barat', 'Kecamatan Purwokerto Selatan',
            'Kecamatan Purwokerto Timur', 'Kecamatan Purwokerto Utara', 'Kecamatan Raja Ampat', 'Kecamatan Rangkui', 'Kecamatan Riau Silip',
            'Kecamatan Rote Ndao', 'Kecamatan Samarinda', 'Kecamatan Sambas', 'Kecamatan Sampit', 'Kecamatan Sampang',
            'Kecamatan Samalanga', 'Kecamatan Sarolangun', 'Kecamatan Sarolangun', 'Kecamatan Sarolangun', 'Kecamatan Selat',
            'Kecamatan Selat', 'Kecamatan Seluma', 'Kecamatan Semarang Selatan', 'Kecamatan Semarang Tengah', 'Kecamatan Semende Darat Laut',
            'Kecamatan Semende Darat Laut', 'Kecamatan Serbajadi', 'Kecamatan Seram Bagian Barat', 'Kecamatan Seram Bagian Timur', 'Kecamatan Serengan',
            'Kecamatan Sidoarjo', 'Kecamatan Sijuk', 'Kecamatan Sikakap', 'Kecamatan Sikka', 'Kecamatan Sintang',
            'Kecamatan Sintang', 'Kecamatan Sorong', 'Kecamatan Sorong Selatan', 'Kecamatan Sukajadi', 'Kecamatan Sukawati',
            'Kecamatan Sukoharjo', 'Kecamatan Sungai Liat', 'Kecamatan Sumenep', 'Kecamatan Sumur', 'Kecamatan Sumur',
            'Kecamatan Sumbawa', 'Kecamatan Sumbawa Barat', 'Kecamatan Sumur', 'Kecamatan Surabaya', 'Kecamatan Surakarta',
            'Kecamatan Tabalong', 'Kecamatan Tabanan', 'Kecamatan Tabanan', 'Kecamatan Tambrauw', 'Kecamatan Tamiang',
            'Kecamatan Tamiang Hulu', 'Kecamatan Tanjung Jabung Barat', 'Kecamatan Tanjung Jabung Timur', 'Kecamatan Tanjung Karang', 'Kecamatan Tanjung Pinang',
            'Kecamatan Tanjung Pinang', 'Kecamatan Tanjung Selor', 'Kecamatan Tanjung Selor', 'Kecamatan Tanjung Selatan', 'Kecamatan Tanjung Tinggi',
            'Kecamatan Tanjung Tengah', 'Kecamatan Tanjung Timur', 'Kecamatan Tanjung Uban', 'Kecamatan Tanjung Uban', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur',
            'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur', 'Kecamatan Tanjung Uban Timur'
        ];
    }
}
