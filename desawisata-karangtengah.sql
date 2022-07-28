-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 18.18
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desawisata-karangtengah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `email`, `phone`) VALUES
(1, 'admin123', 'admin123', 'Bapak ..', 'karangtengah@gmail.com', '081287756542');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `tanggal_waktu` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi`, `foto_berita`, `tanggal_waktu`, `id_user`) VALUES
(1, 'Kemitraan Mahasiswa ITTP dengan Desa Karangtengah Kec, cilongok', '<p>Sebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan Dengan desa wisata Karangtengah Kab Cilongok. Kemitraan ini untuk memenuhi project tugas aSebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan&nbsp;Kemitraan ini untuk memenuhi project tugas aSebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan&nbsp;Kemitraan ini untuk memenuhi project tugas aSebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan</p>', 'foto.png', '2022-07-07', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `maps` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`deskripsi`, `alamat`, `email`, `telepon`, `maps`, `instagram`, `facebook`, `twitter`) VALUES
('<p>Desa KarangTengah adalah desa di Kecamatan Cilongok, Banyumas, Jawa Tengah, yang terletak kurang lebih 15 Kilometer ke arah barat dari Purwokerto.</p>', '<p>Desa Karangtengah Kecamatan Cilongok Kabupaten Banyumas, Jawa Tengah</p>', 'karangtengahdesawisata@gmail.com', '081287756', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63315.911774581575!2d109.12677444999998!3d-7.326413549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8a4e4942c393%3A0xfb1656ebb45cb522!2sKarangtengah%2C%20Cilongok%2C%20Banyumas%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1651820938369!5m2!1sen!2sid\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"fast\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'desawisata_karangtengah', 'desawisata_karangtengah', 'desawisata_karangtengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama_pengurus` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto_pengurus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `jabatan`, `foto_pengurus`) VALUES
(1, 'Huda Putra Santosa', 'Kepala Desa', 'huda.png'),
(2, 'Huda Putra Santosa', 'Sekretaris', '1658896579.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_whatsapp` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `ukuran`, `deskripsi`, `alamat`, `no_whatsapp`, `foto_produk`) VALUES
(1, 'Produksi Tahu Kuning', 5000, 'kilogram', '<p>Industri Tahu ini dikelola oleh ibu murni Rt 1 Rw 1 warga desa Karangtengah</p>', 'RT 01/RW 01', '6285156890287', 'industritahu.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `deskripsi` tinytext NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`deskripsi`, `foto`) VALUES
('<p>Desa KarangTengah adalah desa di Kecamatan Cilongok, Banyumas, Jawa Tengah, yang terletak kurang lebih 15 Kilometer ke arah barat dari Purwokerto. extensive prebuilt components, and powerful JavaScript pluginsis</p>', '1658752372.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `visi_deskripsi` varchar(255) NOT NULL,
  `misi_deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`visi_deskripsi`, `misi_deskripsi`) VALUES
('<p>Menjadikan desa menjadi makmur</p>', '<ol><li>Menjadi Desa yang maju</li><li>Menjadikan desa yang makmuris</li><li>Menjadi Desa Hebat</li></ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `lokasi_wisata` varchar(255) NOT NULL,
  `gmap` text NOT NULL,
  `deskripsi_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `foto`, `lokasi_wisata`, `gmap`, `deskripsi_wisata`) VALUES
(1, 'Curug Cipendok', '1658925428.jpg', 'RT/07 RW 03', 'https://goo.gl/maps/SLwWePtWoghexBLD6', '<p>Curug Cipendok merupakan air terjun yang terletak di Desa Karangtengah, Kecamatan Cilongok, Kabupaten Banyumas. Memilikki ketinggian 92 meter dan kedalaman 20 meter, dengan lingkungan yang masih alami dan hawa yang sejuk membuat jiwa dan pikiran terasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
