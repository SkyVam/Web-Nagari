-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2023 pada 21.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parikpanjang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `password_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'diva', 'diva_fardiana7@gmail.com', 'fardianarisa'),
(2, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(10) NOT NULL,
  `nama_agama` varchar(200) NOT NULL,
  `lk_agama` int(10) NOT NULL,
  `pr_agama` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`, `lk_agama`, `pr_agama`) VALUES
(1, 'Islam', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `apbd`
--

CREATE TABLE `apbd` (
  `id_apbd` int(10) NOT NULL,
  `tahun_apbd` varchar(10) NOT NULL,
  `foto_apbd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `apbd`
--

INSERT INTO `apbd` (`id_apbd`, `tahun_apbd`, `foto_apbd`) VALUES
(4, '2023', '2023_1691345692.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul_artikel` varchar(200) NOT NULL,
  `tanggal_artikel` timestamp(6) NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `tanggal_berita` datetime(6) DEFAULT current_timestamp(6),
  `isi_berita` longtext NOT NULL,
  `foto_berita` varchar(255) DEFAULT NULL,
  `nama_penulis` varchar(30) NOT NULL,
  `status` enum('pending','tolak','terbit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_berita`, `isi_berita`, `foto_berita`, `nama_penulis`, `status`) VALUES
(17, 'Web Nagari', '2019-09-26 11:48:29.448525', 'Pembuatan Website Nagari oleh Mahasiswa UNAND melalui program kerja KKN PPM UNAND 2023', 'Ini_berita_1574310962.jpg', 'Desa Sumberejo', 'terbit'),
(20, 'KKN UNAND', '2019-11-21 12:30:09.112392', 'haiiii', 'bismillah_1574314209.png', 'momo', 'terbit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `etnis`
--

CREATE TABLE `etnis` (
  `id_etnis` int(10) NOT NULL,
  `nama_etnis` varchar(200) NOT NULL,
  `lk_etnis` int(10) NOT NULL,
  `pr_etnis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(10) NOT NULL,
  `judul_foto` varchar(200) NOT NULL,
  `caption_foto` varchar(255) NOT NULL,
  `tanggal_foto` datetime DEFAULT current_timestamp(),
  `foto_galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `judul_foto`, `caption_foto`, `tanggal_foto`, `foto_galeri`) VALUES
(11, 'Goro di Dasawisma Bougenville', 'Bersama KKN UNAND', '2023-08-07 01:31:45', 'Goro_di_Dasawisma_Bougenville_1691346705.jpeg'),
(12, 'Goro Jalan Provinsi', 'Bersama Mahasiswa/i KKN UNAND dan UIN', '2023-08-07 01:33:03', 'Goro_Jalan_Provinsi_1691346783.jpeg'),
(13, 'Perpisahan KKN UIN Bukittinggi', 'Diadakan di Kantor Wali', '2023-08-07 01:33:42', 'Perpisahan_KKN_UIN_Bukittinggi_1691346822.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(10) NOT NULL,
  `email_kontak` varchar(200) NOT NULL,
  `nohp_kontak` varchar(200) NOT NULL,
  `nowa_kontak` varchar(200) DEFAULT NULL,
  `ig_kontak` varchar(200) DEFAULT NULL,
  `fb_kontak` varchar(200) DEFAULT NULL,
  `tw_kontak` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `email_kontak`, `nohp_kontak`, `nowa_kontak`, `ig_kontak`, `fb_kontak`, `tw_kontak`) VALUES
(1, 'nagariparikpanjang@gmail.com', '(0341)- 598908', NULL, 'parikpanjang', 'parikpanjang', 'parikpanjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul_layanan` varchar(256) NOT NULL,
  `tanggal_layanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isi_layanan` longtext NOT NULL,
  `foto_layanan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `judul_layanan`, `tanggal_layanan`, `isi_layanan`, `foto_layanan`) VALUES
(1, 'Pengurusan Akte Kelahiran', '2019-11-25 10:41:06', 'Alur Pengurusan Akte Kelahiran', 'Pengurusan_Akte_Kelahiran_1574678466.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id_org` int(10) NOT NULL,
  `nama_org` varchar(200) NOT NULL,
  `foto_org` varchar(255) NOT NULL,
  `deskripsi_org` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_org`, `nama_org`, `foto_org`, `deskripsi_org`) VALUES
(4, 'Karang Taruna ', 'Karang_Taruna__1569381224.png', 'Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa / Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomis produktif dengan pendayagunaan semua potensi yang tersedia dilingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur penggurus dan masa jabatan dimasing-masing wilayah mulai dari Desa / Kelurahan sampai pada tingkat Nasional. Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.\n\nKarang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai dari 11 – 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 – 35 tahun.\n\nKarang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.'),
(5, 'Linmas', 'Linmas_1569381271.png', 'Istilah Linmas yang merupakan singkatan dari Perlindungan Masyarakat telah mengalami distorsi pengertian sehingga terjebak dalam anggapan umum yang hanya mengaitkan dengan sebuah fungsi dalam masyarakat yaitu fungsi linmas atau lebih dikenal dengan Pertahanan Sipil atau Hansip. Merunut kepada kenyataan tersebut maka perlu di gali kembali tentang istilah dan pengertian dari Perlindungan Masyarakat dan Satuan Perlindungan Masyarakat (Satlinmas) itu sendiri. \r\nPengertian Satuan Perlindungan Masyarakat dapat ditemukan pada Peraturan menteri Dalam Negeri Nomor 10 Tahun 2009 tentang Penugasan Satuan Perlindungan Masyarakat Dalam Penanganan Ketenteraman, Ketertiban, Dan Keamanan Penyelenggaraan Pemilihan Umum pada pasal 1 butir 1 yaitu : Satuan Perlindungan Masyarakat yang selanjutnya disebut Satuan Linmas adalah warga masyarakat yang disiapkan dan dibekali pengetahuan serta keterampilan untuk melaksanakan kegiatan penanganan bencana guna mengurangi dan memperkecil akibat bencana, serta ikut memelihara keamanan, ketentraman dan ketertiban masyarakat, kegiatan sosial kemasyarakatan. \r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkat`
--

CREATE TABLE `perangkat` (
  `id_perangkat` int(10) NOT NULL,
  `tahun_perangkat` varchar(10) NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `jabatan_perangkat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `perangkat`
--

INSERT INTO `perangkat` (`id_perangkat`, `tahun_perangkat`, `nama_perangkat`, `jabatan_perangkat`) VALUES
(1, '2023', 'Yulianto', 'Wali Nagari'),
(2, '2023', 'Anita Wati', 'Sekretaris Nagari'),
(3, '2023', 'Elvira Linuriza', 'Kasi Pemerintahan'),
(4, '2023', 'M. Nurul Huda', 'Kasi Kesejahteraan'),
(5, '2023', 'Merry Adriyani', 'Kasi Pelayanan'),
(7, '2023', 'Anggun', 'Kaur TU dan Umum'),
(8, '2023', 'Hendri Yanti', 'Kaur Keuangan'),
(9, '2023', 'Rahmad Sholeh', 'Kaur Perencanaan'),
(10, '2023', 'Daitul Daif', 'Walijorong Mudik Sawah'),
(11, '2023', 'Maggie Orthega', 'Walijorong Parik Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id_profesi` int(10) NOT NULL,
  `nama_profesi` varchar(200) NOT NULL,
  `lk_profesi` int(10) NOT NULL,
  `pr_profesi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id_profesi`, `nama_profesi`, `lk_profesi`, `pr_profesi`) VALUES
(1, 'Buruh Tani', 7, 0),
(2, 'Petani', 260, 0),
(3, 'Peternak', 34, 0),
(4, 'Pedagang', 14, 0),
(5, 'Tukang Kayu', 6, 0),
(6, 'Tukang Batu', 6, 0),
(7, 'Penjahit', 5, 0),
(8, 'PNS', 17, 0),
(9, 'Pensiunan', 17, 0),
(10, 'TNI/Polri', 1, 0),
(11, 'Perangkat Desa', 8, 0),
(12, 'Industri Kecil', 2, 0),
(13, 'Lain-lain', 18, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `email`, `isi`) VALUES
(1, '087859342343123', 'tolong tambahkan informasi alur permintaan surat dan sebagainya'),
(2, 'ifa@gmail.com', 'pingin bisa komen bagian organisasi dong :)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `id_umkm` int(10) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `foto_umkm` varchar(255) NOT NULL,
  `deskripsi_umkm` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id_umkm`, `nama_umkm`, `foto_umkm`, `deskripsi_umkm`) VALUES
(6, 'Budidaya Bawang', 'Budidaya_Bawang_1691345962.jpg', 'Bawang merah (Allium ascalonicum) merupakan tanaman hortikultura musiman yang memiliki nilai ekonomi tinggi. Namun pada saat-saat tertentu sering mengalami banjir produksi sehingga harganya anjlok. Diperparah lagi dengan kebijakan impor yang diterapkan pemerintah yang seringkali memperparah kejatuhan harga bawang merah di pasaran.\r\n\r\nUntuk menghindari fluktuasi harga yang sangat merugikan petani, perlu upaya untuk melakukan budidaya bawang merah diluar musim. Seiring dengan pembatasan kegiatan budidaya di musim-musim puncak.\r\n\r\nBudidaya bawang merah memerlukan penyinaran matahari lebih dari 12 jam sehari. Tanaman ini cocok dibudidayakan di dataran rendah dengan ketinggian 0 hingga 900 meter dari permukaan laut. Suhu optimum untuk perkembangan tanaman bawang merah berkisar 25-32 derajat celcius. Sedangkan keasaman tanah yang dikehendaki sekitar pH 5,6-7.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `apbd`
--
ALTER TABLE `apbd`
  ADD PRIMARY KEY (`id_apbd`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `etnis`
--
ALTER TABLE `etnis`
  ADD PRIMARY KEY (`id_etnis`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_org`);

--
-- Indeks untuk tabel `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id_profesi`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `apbd`
--
ALTER TABLE `apbd`
  MODIFY `id_apbd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `etnis`
--
ALTER TABLE `etnis`
  MODIFY `id_etnis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_org` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id_perangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id_profesi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
