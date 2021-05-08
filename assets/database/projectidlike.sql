-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2021 pada 18.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectidlike`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hit`
--

CREATE TABLE `hit` (
  `idhit` int(11) NOT NULL,
  `tgl_hit` date NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `kerjaan_idkerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `projectidlike`.`tmst_status`
( `id_status` INT(5) NULL AUTO_INCREMENT ,
`status` VARCHAR(50) NOT NULL , PRIMARY KEY (`id_status`)) ENGINE = InnoDB;


-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjaan`
--

CREATE TABLE `kerjaan` (
  `idkerjaan` int(11) NOT NULL,
  `judul_kerjaan` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_submit` date NOT NULL,
  `deadline` date NOT NULL,
  `kategori_idkategori` int(11) NOT NULL,
  `kabupaten_idkabupaten` int(11) NOT NULL,
  `harga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nama_role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`idrole`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `star_point`
--

CREATE TABLE `star_point` (
  `idstar_point` int(11) NOT NULL,
  `star_point` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_profil` varchar(45) NOT NULL,
  `role_idrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `email`, `password`, `nama_user`, `tanggal_lahir`, `no_hp`, `foto_profil`, `role_idrole`) VALUES
(1, 'user', 'user@test.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', '2021-01-12', '6285233039160', 'picture.png', 2),
(2, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2021-01-12', '6285233039160', 'picture.png', 1);
-- fungsi untuk menghitung hit user

DELIMITER $$
CREATE FUNCTION F_hitunghit (x1 int)
    RETURNS int
    DETERMINISTIC
BEGIN
  DECLARE dist int;
select count(*) into dist from hit where hit.kerjaan_idkerjaan=x1;
RETURN dist;
END$$
DELIMITER ;
-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_kabupaten`
--

CREATE TABLE `wilayah_kabupaten` (
  `id_kabupaten` int(4) NOT NULL,
  `nama_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah_kabupaten`
--

INSERT INTO `wilayah_kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1101, 'Kab. Simeulue'),
(1102, 'Kab. Aceh Singkil'),
(1103, 'Kab. Aceh Selatan'),
(1104, 'Kab. Aceh Tenggara'),
(1105, 'Kab. Aceh Timur'),
(1106, 'Kab. Aceh Tengah'),
(1107, 'Kab. Aceh Barat'),
(1108, 'Kab. Aceh Besar'),
(1109, 'Kab. Pidie'),
(1110, 'Kab. Bireuen'),
(1111, 'Kab. Aceh Utara'),
(1112, 'Kab. Aceh Barat Daya'),
(1113, 'Kab. Gayo Lues'),
(1114, 'Kab. Aceh Tamiang'),
(1115, 'Kab. Nagan Raya'),
(1116, 'Kab. Aceh Jaya'),
(1117, 'Kab. Bener Meriah'),
(1118, 'Kab. Pidie Jaya'),
(1171, 'Kota Banda Aceh'),
(1172, 'Kota Sabang'),
(1173, 'Kota Langsa'),
(1174, 'Kota Lhokseumawe'),
(1175, 'Kota Subulussalam'),
(1201, 'Kab. Nias'),
(1202, 'Kab. Mandailing Natal'),
(1203, 'Kab. Tapanuli Selatan'),
(1204, 'Kab. Tapanuli Tengah'),
(1205, 'Kab. Tapanuli Utara'),
(1206, 'Kab. Toba Samosir'),
(1207, 'Kab. Labuhan Batu'),
(1208, 'Kab. Asahan'),
(1209, 'Kab. Simalungun'),
(1210, 'Kab. Dairi'),
(1211, 'Kab. Karo'),
(1212, 'Kab. Deli Serdang'),
(1213, 'Kab. Langkat'),
(1214, 'Kab. Nias Selatan'),
(1215, 'Kab. Humbang Hasundutan'),
(1216, 'Kab. Pakpak Bharat'),
(1217, 'Kab. Samosir'),
(1218, 'Kab. Serdang Bedagai'),
(1219, 'Kab. Batu Bara'),
(1220, 'Kab. Padang Lawas Utara'),
(1221, 'Kab. Padang Lawas'),
(1222, 'Kab. Labuhan Batu Selatan'),
(1223, 'Kab. Labuhan Batu Utara'),
(1224, 'Kab. Nias Utara'),
(1225, 'Kab. Nias Barat'),
(1271, 'Kota Sibolga'),
(1272, 'Kota Tanjung Balai'),
(1273, 'Kota Pematang Siantar'),
(1274, 'Kota Tebing Tinggi'),
(1275, 'Kota Medan'),
(1276, 'Kota Binjai'),
(1277, 'Kota Padangsidimpuan'),
(1278, 'Kota Gunungsitoli'),
(1301, 'Kab. Kepulauan Mentawai'),
(1302, 'Kab. Pesisir Selatan'),
(1303, 'Kab. Solok'),
(1304, 'Kab. Sijunjung'),
(1305, 'Kab. Tanah Datar'),
(1306, 'Kab. Padang Pariaman'),
(1307, 'Kab. Agam'),
(1308, 'Kab. Lima Puluh Kota'),
(1309, 'Kab. Pasaman'),
(1310, 'Kab. Solok Selatan'),
(1311, 'Kab. Dharmasraya'),
(1312, 'Kab. Pasaman Barat'),
(1371, 'Kota Padang'),
(1372, 'Kota Solok'),
(1373, 'Kota Sawah Lunto'),
(1374, 'Kota Padang Panjang'),
(1375, 'Kota Bukittinggi'),
(1376, 'Kota Payakumbuh'),
(1377, 'Kota Pariaman'),
(1401, 'Kab. Kuantan Singingi'),
(1402, 'Kab. Indragiri Hulu'),
(1403, 'Kab. Indragiri Hilir'),
(1404, 'Kab. Pelalawan'),
(1405, 'Kab. S I A K'),
(1406, 'Kab. Kampar'),
(1407, 'Kab. Rokan Hulu'),
(1408, 'Kab. Bengkalis'),
(1409, 'Kab. Rokan Hilir'),
(1410, 'Kab. Kepulauan Meranti'),
(1471, 'Kota Pekanbaru'),
(1473, 'Kota D U M A I'),
(1501, 'Kab. Kerinci'),
(1502, 'Kab. Merangin'),
(1503, 'Kab. Sarolangun'),
(1504, 'Kab. Batang Hari'),
(1505, 'Kab. Muaro Jambi'),
(1506, 'Kab. Tanjung Jabung Timur'),
(1507, 'Kab. Tanjung Jabung Barat'),
(1508, 'Kab. Tebo'),
(1509, 'Kab. Bungo'),
(1571, 'Kota Jambi'),
(1572, 'Kota Sungai Penuh'),
(1601, 'Kab. Ogan Komering Ulu'),
(1602, 'Kab. Ogan Komering Ilir'),
(1603, 'Kab. Muara Enim'),
(1604, 'Kab. Lahat'),
(1605, 'Kab. Musi Rawas'),
(1606, 'Kab. Musi Banyuasin'),
(1607, 'Kab. Banyu Asin'),
(1608, 'Kab. Ogan Komering Ulu Selatan'),
(1609, 'Kab. Ogan Komering Ulu Timur'),
(1610, 'Kab. Ogan Ilir'),
(1611, 'Kab. Empat Lawang'),
(1671, 'Kota Palembang'),
(1672, 'Kota Prabumulih'),
(1673, 'Kota Pagar Alam'),
(1674, 'Kota Lubuklinggau'),
(1701, 'Kab. Bengkulu Selatan'),
(1702, 'Kab. Rejang Lebong'),
(1703, 'Kab. Bengkulu Utara'),
(1704, 'Kab. Kaur'),
(1705, 'Kab. Seluma'),
(1706, 'Kab. Mukomuko'),
(1707, 'Kab. Lebong'),
(1708, 'Kab. Kepahiang'),
(1709, 'Kab. Bengkulu Tengah'),
(1771, 'Kota Bengkulu'),
(1801, 'Kab. Lampung Barat'),
(1802, 'Kab. Tanggamus'),
(1803, 'Kab. Lampung Selatan'),
(1804, 'Kab. Lampung Timur'),
(1805, 'Kab. Lampung Tengah'),
(1806, 'Kab. Lampung Utara'),
(1807, 'Kab. Way Kanan'),
(1808, 'Kab. Tulangbawang'),
(1809, 'Kab. Pesawaran'),
(1810, 'Kab. Pringsewu'),
(1811, 'Kab. Mesuji'),
(1812, 'Kab. Tulang Bawang Barat'),
(1813, 'Kab. Pesisir Barat'),
(1871, 'Kota Bandar Lampung'),
(1872, 'Kota Metro'),
(1901, 'Kab. Bangka'),
(1902, 'Kab. Belitung'),
(1903, 'Kab. Bangka Barat'),
(1904, 'Kab. Bangka Tengah'),
(1905, 'Kab. Bangka Selatan'),
(1906, 'Kab. Belitung Timur'),
(1971, 'Kota Pangkal Pinang'),
(2101, 'Kab. Karimun'),
(2102, 'Kab. Bintan'),
(2103, 'Kab. Natuna'),
(2104, 'Kab. Lingga'),
(2105, 'Kab. Kepulauan Anambas'),
(2171, 'Kota B A T A M'),
(2172, 'Kota Tanjung Pinang'),
(3101, 'Kab. Kepulauan Seribu'),
(3171, 'Kota Jakarta Selatan'),
(3172, 'Kota Jakarta Timur'),
(3173, 'Kota Jakarta Pusat'),
(3174, 'Kota Jakarta Barat'),
(3175, 'Kota Jakarta Utara'),
(3201, 'Kab. Bogor'),
(3202, 'Kab. Sukabumi'),
(3203, 'Kab. Cianjur'),
(3204, 'Kab. Bandung'),
(3205, 'Kab. Garut'),
(3206, 'Kab. Tasikmalaya'),
(3207, 'Kab. Ciamis'),
(3208, 'Kab. Kuningan'),
(3209, 'Kab. Cirebon'),
(3210, 'Kab. Majalengka'),
(3211, 'Kab. Sumedang'),
(3212, 'Kab. Indramayu'),
(3213, 'Kab. Subang'),
(3214, 'Kab. Purwakarta'),
(3215, 'Kab. Karawang'),
(3216, 'Kab. Bekasi'),
(3217, 'Kab. Bandung Barat'),
(3218, 'Kab. Pangandaran'),
(3271, 'Kota Bogor'),
(3272, 'Kota Sukabumi'),
(3273, 'Kota Bandung'),
(3274, 'Kota Cirebon'),
(3275, 'Kota Bekasi'),
(3276, 'Kota Depok'),
(3277, 'Kota Cimahi'),
(3278, 'Kota Tasikmalaya'),
(3279, 'Kota Banjar'),
(3301, 'Kab. Cilacap'),
(3302, 'Kab. Banyumas'),
(3303, 'Kab. Purbalingga'),
(3304, 'Kab. Banjarnegara'),
(3305, 'Kab. Kebumen'),
(3306, 'Kab. Purworejo'),
(3307, 'Kab. Wonosobo'),
(3308, 'Kab. Magelang'),
(3309, 'Kab. Boyolali'),
(3310, 'Kab. Klaten'),
(3311, 'Kab. Sukoharjo'),
(3312, 'Kab. Wonogiri'),
(3313, 'Kab. Karanganyar'),
(3314, 'Kab. Sragen'),
(3315, 'Kab. Grobogan'),
(3316, 'Kab. Blora'),
(3317, 'Kab. Rembang'),
(3318, 'Kab. Pati'),
(3319, 'Kab. Kudus'),
(3320, 'Kab. Jepara'),
(3321, 'Kab. Demak'),
(3322, 'Kab. Semarang'),
(3323, 'Kab. Temanggung'),
(3324, 'Kab. Kendal'),
(3325, 'Kab. Batang'),
(3326, 'Kab. Pekalongan'),
(3327, 'Kab. Pemalang'),
(3328, 'Kab. Tegal'),
(3329, 'Kab. Brebes'),
(3371, 'Kota Magelang'),
(3372, 'Kota Surakarta'),
(3373, 'Kota Salatiga'),
(3374, 'Kota Semarang'),
(3375, 'Kota Pekalongan'),
(3376, 'Kota Tegal'),
(3401, 'Kab. Kulon Progo'),
(3402, 'Kab. Bantul'),
(3403, 'Kab. Gunung Kidul'),
(3404, 'Kab. Sleman'),
(3471, 'Kota Yogyakarta'),
(3501, 'Kab. Pacitan'),
(3502, 'Kab. Ponorogo'),
(3503, 'Kab. Trenggalek'),
(3504, 'Kab. Tulungagung'),
(3505, 'Kab. Blitar'),
(3506, 'Kab. Kediri'),
(3507, 'Kab. Malang'),
(3508, 'Kab. Lumajang'),
(3509, 'Kab. Jember'),
(3510, 'Kab. Banyuwangi'),
(3511, 'Kab. Bondowoso'),
(3512, 'Kab. Situbondo'),
(3513, 'Kab. Probolinggo'),
(3514, 'Kab. Pasuruan'),
(3515, 'Kab. Sidoarjo'),
(3516, 'Kab. Mojokerto'),
(3517, 'Kab. Jombang'),
(3518, 'Kab. Nganjuk'),
(3519, 'Kab. Madiun'),
(3520, 'Kab. Magetan'),
(3521, 'Kab. Ngawi'),
(3522, 'Kab. Bojonegoro'),
(3523, 'Kab. Tuban'),
(3524, 'Kab. Lamongan'),
(3525, 'Kab. Gresik'),
(3526, 'Kab. Bangkalan'),
(3527, 'Kab. Sampang'),
(3528, 'Kab. Pamekasan'),
(3529, 'Kab. Sumenep'),
(3571, 'Kota Kediri'),
(3572, 'Kota Blitar'),
(3573, 'Kota Malang'),
(3574, 'Kota Probolinggo'),
(3575, 'Kota Pasuruan'),
(3576, 'Kota Mojokerto'),
(3577, 'Kota Madiun'),
(3578, 'Kota Surabaya'),
(3579, 'Kota Batu'),
(3601, 'Kab. Pandeglang'),
(3602, 'Kab. Lebak'),
(3603, 'Kab. Tangerang'),
(3604, 'Kab. Serang'),
(3671, 'Kota Tangerang'),
(3672, 'Kota Cilegon'),
(3673, 'Kota Serang'),
(3674, 'Kota Tangerang Selatan'),
(5101, 'Kab. Jembrana'),
(5102, 'Kab. Tabanan'),
(5103, 'Kab. Badung'),
(5104, 'Kab. Gianyar'),
(5105, 'Kab. Klungkung'),
(5106, 'Kab. Bangli'),
(5107, 'Kab. Karang Asem'),
(5108, 'Kab. Buleleng'),
(5171, 'Kota Denpasar'),
(5201, 'Kab. Lombok Barat'),
(5202, 'Kab. Lombok Tengah'),
(5203, 'Kab. Lombok Timur'),
(5204, 'Kab. Sumbawa'),
(5205, 'Kab. Dompu'),
(5206, 'Kab. Bima'),
(5207, 'Kab. Sumbawa Barat'),
(5208, 'Kab. Lombok Utara'),
(5271, 'Kota Mataram'),
(5272, 'Kota Bima'),
(5301, 'Kab. Sumba Barat'),
(5302, 'Kab. Sumba Timur'),
(5303, 'Kab. Kupang'),
(5304, 'Kab. Timor Tengah Selatan'),
(5305, 'Kab. Timor Tengah Utara'),
(5306, 'Kab. Belu'),
(5307, 'Kab. Alor'),
(5308, 'Kab. Lembata'),
(5309, 'Kab. Flores Timur'),
(5310, 'Kab. Sikka'),
(5311, 'Kab. Ende'),
(5312, 'Kab. Ngada'),
(5313, 'Kab. Manggarai'),
(5314, 'Kab. Rote Ndao'),
(5315, 'Kab. Manggarai Barat'),
(5316, 'Kab. Sumba Tengah'),
(5317, 'Kab. Sumba Barat Daya'),
(5318, 'Kab. Nagekeo'),
(5319, 'Kab. Manggarai Timur'),
(5320, 'Kab. Sabu Raijua'),
(5371, 'Kota Kupang'),
(6101, 'Kab. Sambas'),
(6102, 'Kab. Bengkayang'),
(6103, 'Kab. Landak'),
(6104, 'Kab. Pontianak'),
(6105, 'Kab. Sanggau'),
(6106, 'Kab. Ketapang'),
(6107, 'Kab. Sintang'),
(6108, 'Kab. Kapuas Hulu'),
(6109, 'Kab. Sekadau'),
(6110, 'Kab. Melawi'),
(6111, 'Kab. Kayong Utara'),
(6112, 'Kab. Kubu Raya'),
(6171, 'Kota Pontianak'),
(6172, 'Kota Singkawang'),
(6201, 'Kab. Kotawaringin Barat'),
(6202, 'Kab. Kotawaringin Timur'),
(6203, 'Kab. Kapuas'),
(6204, 'Kab. Barito Selatan'),
(6205, 'Kab. Barito Utara'),
(6206, 'Kab. Sukamara'),
(6207, 'Kab. Lamandau'),
(6208, 'Kab. Seruyan'),
(6209, 'Kab. Katingan'),
(6210, 'Kab. Pulang Pisau'),
(6211, 'Kab. Gunung Mas'),
(6212, 'Kab. Barito Timur'),
(6213, 'Kab. Murung Raya'),
(6271, 'Kota Palangka Raya'),
(6301, 'Kab. Tanah Laut'),
(6302, 'Kab. Kota Baru'),
(6303, 'Kab. Banjar'),
(6304, 'Kab. Barito Kuala'),
(6305, 'Kab. Tapin'),
(6306, 'Kab. Hulu Sungai Selatan'),
(6307, 'Kab. Hulu Sungai Tengah'),
(6308, 'Kab. Hulu Sungai Utara'),
(6309, 'Kab. Tabalong'),
(6310, 'Kab. Tanah Bumbu'),
(6311, 'Kab. Balangan'),
(6371, 'Kota Banjarmasin'),
(6372, 'Kota Banjar Baru'),
(6401, 'Kab. Paser'),
(6402, 'Kab. Kutai Barat'),
(6403, 'Kab. Kutai Kartanegara'),
(6404, 'Kab. Kutai Timur'),
(6405, 'Kab. Berau'),
(6409, 'Kab. Penajam Paser Utara'),
(6471, 'Kota Balikpapan'),
(6472, 'Kota Samarinda'),
(6474, 'Kota Bontang'),
(6501, 'Kab. Malinau'),
(6502, 'Kab. Bulungan'),
(6503, 'Kab. Tana Tidung'),
(6504, 'Kab. Nunukan'),
(6571, 'Kota Tarakan'),
(7101, 'Kab. Bolaang Mongondow'),
(7102, 'Kab. Minahasa'),
(7103, 'Kab. Kepulauan Sangihe'),
(7104, 'Kab. Kepulauan Talaud'),
(7105, 'Kab. Minahasa Selatan'),
(7106, 'Kab. Minahasa Utara'),
(7107, 'Kab. Bolaang Mongondow Utara'),
(7108, 'Kab. Siau Tagulandang Biaro'),
(7109, 'Kab. Minahasa Tenggara'),
(7110, 'Kab. Bolaang Mongondow Selatan'),
(7111, 'Kab. Bolaang Mongondow Timur'),
(7171, 'Kota Manado'),
(7172, 'Kota Bitung'),
(7173, 'Kota Tomohon'),
(7174, 'Kota Kotamobagu'),
(7201, 'Kab. Banggai Kepulauan'),
(7202, 'Kab. Banggai'),
(7203, 'Kab. Morowali'),
(7204, 'Kab. Poso'),
(7205, 'Kab. Donggala'),
(7206, 'Kab. Toli-toli'),
(7207, 'Kab. Buol'),
(7208, 'Kab. Parigi Moutong'),
(7209, 'Kab. Tojo Una-una'),
(7210, 'Kab. Sigi'),
(7271, 'Kota Palu'),
(7301, 'Kab. Kepulauan Selayar'),
(7302, 'Kab. Bulukumba'),
(7303, 'Kab. Bantaeng'),
(7304, 'Kab. Jeneponto'),
(7305, 'Kab. Takalar'),
(7306, 'Kab. Gowa'),
(7307, 'Kab. Sinjai'),
(7308, 'Kab. Maros'),
(7309, 'Kab. Pangkajene Dan Kepulauan'),
(7310, 'Kab. Barru'),
(7311, 'Kab. Bone'),
(7312, 'Kab. Soppeng'),
(7313, 'Kab. Wajo'),
(7314, 'Kab. Sidenreng Rappang'),
(7315, 'Kab. Pinrang'),
(7316, 'Kab. Enrekang'),
(7317, 'Kab. Luwu'),
(7318, 'Kab. Tana Toraja'),
(7322, 'Kab. Luwu Utara'),
(7325, 'Kab. Luwu Timur'),
(7326, 'Kab. Toraja Utara'),
(7371, 'Kota Makassar'),
(7372, 'Kota Parepare'),
(7373, 'Kota Palopo'),
(7401, 'Kab. Buton'),
(7402, 'Kab. Muna'),
(7403, 'Kab. Konawe'),
(7404, 'Kab. Kolaka'),
(7405, 'Kab. Konawe Selatan'),
(7406, 'Kab. Bombana'),
(7407, 'Kab. Wakatobi'),
(7408, 'Kab. Kolaka Utara'),
(7409, 'Kab. Buton Utara'),
(7410, 'Kab. Konawe Utara'),
(7471, 'Kota Kendari'),
(7472, 'Kota Baubau'),
(7501, 'Kab. Boalemo'),
(7502, 'Kab. Gorontalo'),
(7503, 'Kab. Pohuwato'),
(7504, 'Kab. Bone Bolango'),
(7505, 'Kab. Gorontalo Utara'),
(7571, 'Kota Gorontalo'),
(7601, 'Kab. Majene'),
(7602, 'Kab. Polewali Mandar'),
(7603, 'Kab. Mamasa'),
(7604, 'Kab. Mamuju'),
(7605, 'Kab. Mamuju Utara'),
(8101, 'Kab. Maluku Tenggara Barat'),
(8102, 'Kab. Maluku Tenggara'),
(8103, 'Kab. Maluku Tengah'),
(8104, 'Kab. Buru'),
(8105, 'Kab. Kepulauan Aru'),
(8106, 'Kab. Seram Bagian Barat'),
(8107, 'Kab. Seram Bagian Timur'),
(8108, 'Kab. Maluku Barat Daya'),
(8109, 'Kab. Buru Selatan'),
(8171, 'Kota Ambon'),
(8172, 'Kota Tual'),
(8201, 'Kab. Halmahera Barat'),
(8202, 'Kab. Halmahera Tengah'),
(8203, 'Kab. Kepulauan Sula'),
(8204, 'Kab. Halmahera Selatan'),
(8205, 'Kab. Halmahera Utara'),
(8206, 'Kab. Halmahera Timur'),
(8207, 'Kab. Pulau Morotai'),
(8271, 'Kota Ternate'),
(8272, 'Kota Tidore Kepulauan'),
(9101, 'Kab. Fakfak'),
(9102, 'Kab. Kaimana'),
(9103, 'Kab. Teluk Wondama'),
(9104, 'Kab. Teluk Bintuni'),
(9105, 'Kab. Manokwari'),
(9106, 'Kab. Sorong Selatan'),
(9107, 'Kab. Sorong'),
(9108, 'Kab. Raja Ampat'),
(9109, 'Kab. Tambrauw'),
(9110, 'Kab. Maybrat'),
(9171, 'Kota Sorong'),
(9401, 'Kab. Merauke'),
(9402, 'Kab. Jayawijaya'),
(9403, 'Kab. Jayapura'),
(9404, 'Kab. Nabire'),
(9408, 'Kab. Kepulauan Yapen'),
(9409, 'Kab. Biak Numfor'),
(9410, 'Kab. Paniai'),
(9411, 'Kab. Puncak Jaya'),
(9412, 'Kab. Mimika'),
(9413, 'Kab. Boven Digoel'),
(9414, 'Kab. Mappi'),
(9415, 'Kab. Asmat'),
(9416, 'Kab. Yahukimo'),
(9417, 'Kab. Pegunungan Bintang'),
(9418, 'Kab. Tolikara'),
(9419, 'Kab. Sarmi'),
(9420, 'Kab. Keerom'),
(9426, 'Kab. Waropen'),
(9427, 'Kab. Supiori'),
(9428, 'Kab. Mamberamo Raya'),
(9429, 'Kab. Nduga'),
(9430, 'Kab. Lanny Jaya'),
(9431, 'Kab. Mamberamo Tengah'),
(9432, 'Kab. Yalimo'),
(9433, 'Kab. Puncak'),
(9434, 'Kab. Dogiyai'),
(9435, 'Kab. Intan Jaya'),
(9436, 'Kab. Deiyai'),
(9471, 'Kota Jayapura');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hit`
--
ALTER TABLE `hit`
  ADD PRIMARY KEY (`idhit`),
  ADD UNIQUE KEY `kerjaan_idkerjaan` (`kerjaan_idkerjaan`),
  ADD KEY `user_iduser` (`user_iduser`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `kerjaan`
--
ALTER TABLE `kerjaan`
  ADD PRIMARY KEY (`idkerjaan`),
  ADD KEY `kategori_idkategori` (`kategori_idkategori`),
  ADD KEY `kabupaten_idkabupaten` (`kabupaten_idkabupaten`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indeks untuk tabel `star_point`
--
ALTER TABLE `star_point`
  ADD PRIMARY KEY (`idstar_point`),
  ADD KEY `user_iduser` (`user_iduser`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `role_id` (`role_idrole`);

--
-- Indeks untuk tabel `wilayah_kabupaten`
--
ALTER TABLE `wilayah_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hit`
--
ALTER TABLE `hit`
  MODIFY `idhit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `star_point`
--
ALTER TABLE `star_point`
  MODIFY `idstar_point` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hit`
--
ALTER TABLE `hit`
  ADD CONSTRAINT `hit_ibfk_1` FOREIGN KEY (`kerjaan_idkerjaan`) REFERENCES `kerjaan` (`idkerjaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hit_ibfk_2` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kerjaan`
--
ALTER TABLE `kerjaan`
  ADD CONSTRAINT `kerjaan_ibfk_1` FOREIGN KEY (`kategori_idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kerjaan_ibfk_2` FOREIGN KEY (`kabupaten_idkabupaten`) REFERENCES `wilayah_kabupaten` (`id_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `star_point`
--
ALTER TABLE `star_point`
  ADD CONSTRAINT `star_point_ibfk_1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
