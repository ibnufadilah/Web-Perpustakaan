-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Okt 2019 pada 05.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id_bukusiswa` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `tgl_penerima` varchar(50) NOT NULL,
  `no_invetaris` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id_bukusiswa`, `no_buku`, `tgl_penerima`, `no_invetaris`, `judul`, `pengarang`, `penerbit`, `jumlah`, `jenis`, `bahasa`, `asal`, `keterangan`) VALUES
(18, '508', '2017-02-02', '0508/17', 'Indonesia ku !', 'Prof.Dr.H.A.R Tilaar', 'Grasindo', 10, 'Referensi', 'Indonesia', 'SMAN 1 Klapanunggal', 'SMAN 1 Klapanunggal'),
(19, '516', '2017-02-02', '0516/17', '5 Matahari Motivasi Tanpa Teriakan', 'Budi.S Tanuwibowo', 'Gramedia', 11, 'Referensi', 'Dan Lain-lain', 'SMAN 1 Klapanunggal', 'SMAN 1 Klapanunggal'),
(20, '523', '2017-02-02', '0523/17', 'Rahasia Menang Perang W', 'Jubilee Enterprise', 'Elex Media K', 16, 'Referensi', 'Dan Lain-lain', 'SMAN 1 Klapanunggal', 'SMAN 1 Klapanunggal'),
(21, '554', '2017-03-06', '0554/17', 'Syahid Samurai', 'Afifah Afra. A', 'Era Adicitra I', 0, 'Referensi', 'Dan Lain-lain', 'Denda', 'Denda Buku (Salsabila XIA3)'),
(22, '560', '2017-03-06', '0560/17', 'Silent Love', 'Dien Ilmi', 'Euthenia', 4, 'Referensi', 'Dan Lain-lain', 'Denda', 'Denda Buku (Putri.A XIA3)'),
(23, '564', '2017-07-18', '0564/17', 'Matematika Wajib Kelas XI', 'Drs. B.K Noormandiri', 'Erlangga', 280, 'Referensi', 'Dan Lain-lain', 'Bos Pusat', 'Bos Pusat'),
(24, '565', '2017-07-18', '0565/17', 'Penjas Kelas XI', 'Muhajir', 'Erlangga', 280, 'Referensi', 'Dan Lain-lain', 'Bos Pusat', 'Bos Pusat'),
(25, '568', '2019-07-18', '0568/17', 'B.Indonesia Kelas XI', 'Engkos Kosasih', 'Erlangga', 280, 'Referensi', 'Dan Lain-lain', 'Bos Pusat', 'Bos Pusat'),
(26, '563', '2017-03-06', '0563/17', 'Profesor Pancake', 'Icha', 'Dar Mizan', 1, 'Referensi', 'Dan Lain-lain', 'Denda', 'Denda Buku (Amila XIA1)'),
(27, '566', '2017-07-18', '0566/17', 'Matematika Peminatan Kelas XI', 'Drs. B.K Noormandiri', 'Erlangga', 41, 'Referensi', 'Dan Lain-lain', 'Bos Pusat', 'Bos Pusat'),
(28, '567', '2017-07-18', '0567/17', 'Biologi Kelas XI ', 'Irnangtyas, Yossa Istiadi', 'Erlangga', 47, 'Referensi', 'Dan Lain-lain', 'Bos Pusat', 'Bos Pusat'),
(29, '199', '', '0199/16', 'The Hard Boys', 'Franklin W.D', 'Alex Media K', 1, 'Referensi', 'Dan Lain-lain', 'Bos Reguler', 'Bos Reguler'),
(30, '200', '', '0200/16', 'Winter Dreams', 'Maggie Tiojakin', 'Gramedia Pustaka', 1, 'Referensi', 'Dan Lain-lain', 'Bos Reguler', 'Bos Reguler'),
(31, '201', '', '0201/16', 'Opera Indonesia', 'Joko Santoso. HP', 'Gramedia Pustaka', 2, 'Referensi', 'Dan Lain-lain', 'Bos Reguler', 'Bos Reguler'),
(32, '202', '', '0202/16', 'Luluergic', 'Mia Arsjad', 'Gramedia Pustaka', 1, 'Referensi', 'Dan Lain-lain', 'MUI.Kab Bogor', 'Bos Reguler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bukuguru`
--

CREATE TABLE `data_bukuguru` (
  `id_bukuguru` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `tgl_penerima` varchar(50) NOT NULL,
  `no_invetaris` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_bukuguru`
--

INSERT INTO `data_bukuguru` (`id_bukuguru`, `no_buku`, `tgl_penerima`, `no_invetaris`, `judul`, `pengarang`, `penerbit`, `jumlah`, `jenis`, `bahasa`) VALUES
(16, '496', '2017-01-27', '0496/17', 'Bahasa Inggris kelas X', 'Utami Widiati, dkk', 'Kemendikbud', 2, 'Referensi', 'Dan Lain-lain'),
(17, '614', '2018-05-30', '0614/18', 'B.Indonesia Kelas XI', 'Engkos Kosasih', 'Kemendikbud', 1, 'Referensi', 'Indonesia'),
(18, '570', '2017-07-18', '0570/17', 'Ekonomi Kelas XI', 'Alam, Rudianto, Th. M Sudarwati', 'Erlangga', 1, 'Referensi', 'Dan Lain-lain'),
(19, '571', '2017-07-18', '0571/17', 'B.Inggris Kelas XI', 'Th. M Sudarwati', 'Erlangga', 3, 'Referensi', 'Dan Lain-lain'),
(20, '564', '2017-07-18', '0564/17', 'Matematika Wajib Kelas XI', 'Drs. B.K Noormandiri', 'Erlangga', 2, 'Referensi', 'Dan Lain-lain'),
(21, '573', '2017-07-18', '0573/17', 'Fisika Kelas XI', 'Marthen Kanginan', 'Erlangga', 4, 'Referensi', 'Dan Lain-lain'),
(22, '574', '2017-10-08', '0574/17', 'Kimia Kelas X', 'Unggul Sudarmo', 'Erlangga', 3, 'Referensi', 'Dan Lain-lain'),
(23, '575', '2017-10-08', '0575/17', 'Sosiologi Kelas XI', 'Kun Maryati, Juju S', 'Erlangga', 4, 'Referensi', 'Dan Lain-lain'),
(24, '60', '', '0060/15', 'Sejarah Kelas X Semester 1', 'Ratna H , M. Adil', 'Erlangga', 3, 'Referensi', 'Dan Lain-lain'),
(25, '68', '', '0068/15', 'PAI Kelas X Semester 1', '', 'Erlangga', 6, 'Referensi', 'Dan Lain-lain'),
(26, '572', '2017-07-18', '0572/17', 'Biologi Kelas X', 'Irnangtyas', 'Erlangga', 4, 'Referensi', 'Dan Lain-lain'),
(27, '48', '', '0048/15', 'Geografi Kelas XI Semester 2', '', 'Esis', 2, 'Referensi', 'Dan Lain-lain'),
(28, '19', '', '0019/15', 'PKN Kelas X Semester 1', '', 'Kemendikbud', 2, 'Referensi', 'Dan Lain-lain'),
(29, '20', '', '0020/15', 'PKN Kelas X Semester 2', '', 'Kemendikbud', 3, 'Referensi', 'Dan Lain-lain'),
(30, '27', '', '0027/15', 'Prakarya Kelas XI Semester 1', '', 'Kemendikbud', 1, 'Referensi', 'Dan Lain-lain'),
(31, '32', '', '0032/15', 'PENJAS Kelas XI Semester 1', '', 'Kemendikbud', 2, 'Referensi', 'Dan Lain-lain'),
(32, '18', '', '0018/15', 'Seni Budaya Kelas X', '', 'Kemendikbud', 2, 'Referensi', 'Dan Lain-lain'),
(33, '34', '', '0034/15', 'Seni Budaya Kelas XI Semester 2', '', 'Kemendikbud', 3, 'Referensi', 'Dan Lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_guru`
--

CREATE TABLE `peminjaman_guru` (
  `id_pinjamguru` int(10) NOT NULL,
  `id_bukuguru` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_guru`
--

INSERT INTO `peminjaman_guru` (`id_pinjamguru`, `id_bukuguru`, `no_buku`, `nama`, `judul`, `tgl_pinjam`, `tgl_kembali`, `jumlah`, `status`) VALUES
(12, 16, '496', 'Muzaiyanah', 'Bahasa Inggris kelas X', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(13, 25, '68', 'Abdul Wahid', 'PAI Kelas X Semester 1', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(14, 19, '571', 'Hendri Supriadi', 'B.Inggris Kelas XI', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(15, 28, '19', 'Inti Nur Anesa', 'PKN Kelas X Semester 1', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(16, 19, '571', 'Emi Tyasma ', 'B.Inggris Kelas XI', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(17, 22, '574', 'Arini Megiandari', 'Kimia Kelas X', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(18, 21, '573', 'Wiwi Mulyani', 'Fisika Kelas XI', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(19, 23, '575', 'Tia Nuriatifah', 'Sosiologi Kelas XI', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(20, 30, '27', 'Nurul Farhanah', 'Prakarya Kelas XI Semester 1', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(21, 18, '570', 'Subarkah', 'Ekonomi Kelas XI', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(22, 31, '32', 'Asep Sumaryana', 'PENJAS Kelas XI Semester 1', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(23, 32, '18', 'Adya Pratama', 'Seni Budaya Kelas X', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(24, 26, '572', 'Eka Ratna Safitri', 'Biologi Kelas X', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(25, 19, '571', 'dedeh ratnaningsih', 'B.Inggris Kelas XI', '2019-10-10', '2019-10-12', 1, 'Telah Dikembalikan'),
(26, 25, '68', 'Abdul Wahid', 'PAI Kelas X Semester 1', '2019-10-11', '2019-10-12', 1, 'Telah Dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_siswa`
--

CREATE TABLE `peminjaman_siswa` (
  `id_pinjamsiswa` int(10) NOT NULL,
  `id_bukusiswa` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_siswa`
--

INSERT INTO `peminjaman_siswa` (`id_pinjamsiswa`, `id_bukusiswa`, `no_buku`, `judul`, `nisn`, `nama`, `tgl_pinjam`, `tgl_kembali`, `jumlah`, `status`) VALUES
(24, 18, '508', 'Indonesia ku !', '0032832088', 'Alya Syifa Andini', '2019-10-09', '2019-10-11', 1, 'Rusak'),
(25, 20, '523', 'Rahasia Menang Perang W', '0036307465', 'Ilham Raihan', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(26, 22, '560', 'Silent Love', '0038024976', 'Gilang Sandika', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(27, 23, '564', 'Matematika Wajib Kelas XI', '0032824521', 'Alifah Husna', '2019-10-09', '2019-10-11', 1, 'Hilang'),
(28, 22, '560', 'Silent Love', '0037329939', 'Adena Syafa Salsabila', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(29, 26, '563', 'Profesor Pancake', '0036087555', 'Andini Widia Anjarsari', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(30, 31, '201', 'Opera Indonesia', '0038568870', 'Andreas Marlas Raja Pardamaian', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(31, 28, '567', 'Biologi Kelas XI ', '0030597958', 'Gatot Priyo Santoso', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(32, 23, '564', 'Matematika Wajib Kelas XI', '0027654055', 'Bayu Satrio Abdilah', '2019-10-10', '2019-10-12', 33, 'Telah Dikembalikan'),
(33, 32, '202', 'Luluergic', '0016511674', 'Franklin Hosea Talentaro', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(34, 25, '568', 'B.Indonesia Kelas XI', '0022415859', 'Febyan Ajie Saputro', '2019-10-10', '2019-10-12', 20, 'Telah Dikembalikan'),
(35, 24, '565', 'Penjas Kelas XI', '0016511674', 'Franklin Hosea Talentaro', '2019-10-10', '2019-10-12', 20, 'Telah Dikembalikan'),
(36, 22, '560', 'Silent Love', '0013268536', 'Annisa Septina Sari Harahap', '2019-10-10', '2019-10-12', 1, 'Telah Dikembalikan'),
(37, 22, '560', 'Silent Love', '0039994264', 'Afifah Ghina Aqilah', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(38, 29, '199', 'The Hard Boys', '0039994264', 'Afifah Ghina Aqilah', '2019-10-09', '2019-10-11', 1, 'Telah Dikembalikan'),
(39, 22, '560', 'Silent Love', '0026928329', 'Anggreini Artna Pardede', '2019-10-09', '2019-10-11', 1, 'Pinjam'),
(40, 19, '516', '5 Matahari Motivasi Tanpa Teriakan', '0032832088', 'Alya Syifa Andini', '2019-10-10', '2019-10-12', 1, 'Telah Dikembalikan'),
(41, 23, '564', 'Matematika Wajib Kelas XI', '0024451213', 'Dewi Ratnasari Tamba', '2019-10-11', '2019-10-13', 1, 'Telah Dikembalikan'),
(42, 27, '566', 'Matematika Peminatan Kelas XI', '0038568870', 'Andreas Marlas Raja Pardamaian', '2019-10-12', '2019-10-14', 1, 'Pinjam'),
(43, 18, '508', 'Indonesia ku !', '0039994264', 'Afifah Ghina Aqilah', '2019-10-16', '2019-10-18', 1, 'Pinjam'),
(44, 21, '554', 'Syahid Samurai', '0039994264', 'Afifah Ghina Aqilah', '2019-10-16', '2019-10-18', 1, 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_guru`
--

CREATE TABLE `pengembalian_guru` (
  `id_kembaliguru` int(10) NOT NULL,
  `id_pinjamguru` int(10) NOT NULL,
  `id_bukuguru` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian_guru`
--

INSERT INTO `pengembalian_guru` (`id_kembaliguru`, `id_pinjamguru`, `id_bukuguru`, `no_buku`, `nama`, `judul`, `tgl_pinjam`, `tgl_kembali`, `jumlah`) VALUES
(1, 24, 26, '572', 'Eka Ratna Safitri', 'Biologi Kelas X', '2019-10-09', '2019-10-11', 1),
(2, 23, 32, '18', 'Adya Pratama', 'Seni Budaya Kelas X', '2019-10-09', '2019-10-11', 1),
(3, 22, 31, '32', 'Asep Sumaryana', 'PENJAS Kelas XI Semester 1', '2019-10-09', '2019-10-11', 1),
(4, 13, 25, '68', 'Abdul Wahid', 'PAI Kelas X Semester 1', '2019-10-09', '2019-10-11', 1),
(5, 14, 19, '571', 'Hendri Supriadi', 'B.Inggris Kelas XI', '2019-10-09', '2019-10-11', 1),
(6, 17, 22, '574', 'Arini Megiandari', 'Kimia Kelas X', '2019-10-09', '2019-10-11', 1),
(7, 19, 23, '575', 'Tia Nuriatifah', 'Sosiologi Kelas XI', '2019-10-09', '2019-10-11', 1),
(8, 18, 21, '573', 'Wiwi Mulyani', 'Fisika Kelas XI', '2019-10-09', '2019-10-11', 1),
(9, 25, 19, '571', 'dedeh ratnaningsih', 'B.Inggris Kelas XI', '2019-10-10', '2019-10-12', 1),
(10, 26, 25, '68', 'Abdul Wahid', 'PAI Kelas X Semester 1', '2019-10-11', '2019-10-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_siswa`
--

CREATE TABLE `pengembalian_siswa` (
  `id_kembalisiswa` int(10) NOT NULL,
  `id_pinjamsiswa` int(10) NOT NULL,
  `id_bukusiswa` int(10) NOT NULL,
  `no_buku` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah` int(255) NOT NULL,
  `denda` varchar(50) NOT NULL,
  `telat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian_siswa`
--

INSERT INTO `pengembalian_siswa` (`id_kembalisiswa`, `id_pinjamsiswa`, `id_bukusiswa`, `no_buku`, `judul`, `nisn`, `nama`, `tgl_pinjam`, `tgl_kembali`, `jumlah`, `denda`, `telat`) VALUES
(29, 25, 20, '523', 'Rahasia Menang Perang W', '0036307465', 'Ilham Raihan', '2019-10-09', '2019-10-11', 1, '0', '0'),
(30, 26, 22, '560', 'Silent Love', '0038024976', 'Gilang Sandika', '2019-10-09', '2019-10-11', 1, '0', '0'),
(31, 34, 25, '568', 'B.Indonesia Kelas XI', '0022415859', 'Febyan Ajie Saputro', '2019-10-10', '2019-10-12', 20, '0', '0'),
(32, 35, 24, '565', 'Penjas Kelas XI', '0016511674', 'Franklin Hosea Talentaro', '2019-10-10', '2019-10-12', 20, '0', '0'),
(33, 32, 23, '564', 'Matematika Wajib Kelas XI', '0027654055', 'Bayu Satrio Abdilah', '2019-10-10', '2019-10-12', 33, '0', '0'),
(34, 31, 28, '567', 'Biologi Kelas XI ', '0030597958', 'Gatot Priyo Santoso', '2019-10-09', '2019-10-11', 1, '0', '0'),
(35, 33, 32, '202', 'Luluergic', '0016511674', 'Franklin Hosea Talentaro', '2019-10-09', '2019-10-11', 1, '0', '0'),
(36, 36, 22, '560', 'Silent Love', '0013268536', 'Annisa Septina Sari Harahap', '2019-10-10', '2019-10-12', 1, '0', '0'),
(37, 37, 22, '560', 'Silent Love', '0039994264', 'Afifah Ghina Aqilah', '2019-10-09', '2019-10-11', 1, '0', '0'),
(38, 38, 29, '199', 'The Hard Boys', '0039994264', 'Afifah Ghina Aqilah', '2019-10-09', '2019-10-11', 1, '0', '0'),
(39, 40, 19, '516', '5 Matahari Motivasi Tanpa Teriakan', '0032832088', 'Alya Syifa Andini', '2019-10-10', '2019-10-12', 1, '0', '0'),
(40, 41, 23, '564', 'Matematika Wajib Kelas XI', '0024451213', 'Dewi Ratnasari Tamba', '2019-10-11', '2019-10-13', 1, '0', '0'),
(41, 24, 18, '508', 'Indonesia ku !', '0032832088', 'Alya Syifa Andini', '2019-10-09', '2019-10-11', 1, '2500', '5'),
(42, 28, 22, '560', 'Silent Love', '0037329939', 'Adena Syafa Salsabila', '2019-10-09', '2019-10-11', 1, '2500', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(10) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nisn`, `nama`, `kelas`, `jenis_kelamin`, `tujuan`) VALUES
(7, '0027654055', 'Bayu Satrio Abdilah', 'X IPS 2', 'Laki-laki', 'Meminjam'),
(8, '0039994264', 'Afifah Ghina Aqilah', 'X IPS 1', 'Perempuan', 'Meminjam'),
(9, '0032832088', 'Alya Syifa Andini', 'X IPS 1', 'Perempuan', 'Membaca'),
(10, '0036327637', 'Ramdika', 'X IPS 2', 'Laki-laki', 'Membaca'),
(12, '0038024976', 'Gilang Sandika', 'X IPS 3', 'Laki-laki', 'Membaca'),
(13, '0036087555', 'Andini Widia Anjarsari', 'X MIPA 3', 'Perempuan', 'Meminjam'),
(15, '0039994264', 'Afifah Ghina Aqilah', 'X IPS 1', 'Perempuan', 'Meminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_siswa` int(10) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_siswa`, `nisn`, `password`, `nama`, `kelas`, `jenis_kelamin`, `ttl`, `no_telp`, `alamat`) VALUES
(2, '0039994264', '0039994264', 'Afifah Ghina Aqilah', 'X IPS 1', 'Perempuan', 'Bogor 20/01/2003', '085714289086', 'KP NAROGONG '),
(4, '0032832088', '	0032832088', 'Alya Syifa Andini', 'X IPS 1', 'Perempuan', 'Jakarta 08/09/2003', '085921809378', 'Perum Grand Kahuripan Cluster Patuha 1 Blok EE 07'),
(5, '0026928329', '	0026928329', 'Anggreini Artna Pardede', 'X IPS 1', 'Perempuan', 'Bogor 21/11/2003', '085311083818', 'Perum Green Residence Klapanunggal Blok A7/3'),
(6, '0030830353', '0030830353', 'Ayu Melinda', 'X IPS 1', 'Perempuan', 'Bogor 03/06/2003', '089518343521', 'Kp. Cibugis'),
(7, '0031204454', '0031204454', 'Cikal Agustin Putri Setiawan', 'X IPS 1', 'Perempuan', 'Jakarta 28/08/2003', '083811997278', 'Kp. Cibeber 2 No 46'),
(8, '0023335760', '0023335760', 'Amelia Yuningsih', 'X IPS 2', 'Perempuan', 'Bogor 28/05/2003', '087870667771', 'Kp. Walahir Rt 07 Rt 04 Ds. Nambo, Kec. Klapanungg'),
(9, '0027654055', '0027654055', 'Bayu Satrio Abdilah', 'X IPS 2', 'Laki-laki', 'Bekasi 05/10/2002', '081384723099', 'Kp. Binong Rt 03 Rw 05 Ds. Situsari Kec. Cileungsi'),
(10, '0030598119', '0030598119', 'Erzan Tri Wibowo', 'X IPS 2', 'Perempuan', 'Bogor 03/01/2003', '081315932152', 'Perum Villa Dayeuh Blok GD 02'),
(11, '0036327637', '0036327637', 'Ramdika', 'X IPS 2', 'Laki-laki', 'Jakarta 18/11/2002', '082123767294', 'Perum Pesona Palad Blok MM No. 23'),
(12, '0036307465', '0036307465', 'Ilham Raihan', 'X IPS 2', 'Laki-laki', 'Bogor 08/02/2003', '081806166245', 'Kp. Poncol'),
(13, '0038601693', '0038601693', 'Abhie Whizesa Putra', 'X IPS 3', 'Laki-laki', 'Tangerang 22/04/2003', '08557623291', 'Perum Grand Kahuripan Cluster Merapi Blok IA 1'),
(14, '0032824521', '0032824521', 'Alifah Husna', 'X IPS 3', 'Perempuan', 'Bogor 22/07/2003', '089608743460', 'Kp. Bojong'),
(15, '0038024976', '0038024976', 'Gilang Sandika', 'X IPS 3', 'Laki-laki', 'Bogor 27/01/2003', '085770299691', 'Kp. Cibeber '),
(16, '0034561188', '0034561188', 'Indri Veronika', 'X IPS 3', 'Laki-laki', 'Bogor 19/04/2003', '082311499363', 'Perum Coco Garden Cluster Modesta K18/6'),
(17, '0044091672', '0044091672', 'Kayla Nadifah', 'X IPS 3', 'Perempuan', 'Jakarta 16/06/2004', '081382958227', 'Perum BCI Blok B7 No 3'),
(18, '0037329939', '0037329939', 'Adena Syafa Salsabila', 'X MIPA 1', 'Perempuan', 'Purworejo 07/12/2002', '085215824177', 'Kp. Cibugis'),
(19, '0039198724', '0039198724', 'ANANDA PUTRI ISNAINI', 'X MIPA 1', 'Perempuan', 'Bogor 14/08/2003', '087873850250', 'Perum Grand Kahuripan Cluster Papandayan CC 06'),
(20, '0039534374', '0039534374', 'ANASTASYA SIMANJUNTAK', 'X MIPA 1', 'Perempuan', 'Bogor 01/02/2003', '081383373118', 'Kp. Tegal'),
(21, '0027361256', '0027361256', 'Ariq Dimas Rabbani', 'X MIPA 1', 'Laki-laki', 'Sumedang 08/10/2002', '089505238635', 'Perum Pesona Vista D1/5'),
(22, '0038254494', '0038254494', 'Burhanudin Yusuf Habibi', 'X MIPA 1', 'Laki-laki', 'Bogor 18/08/2003', '0895355722005', 'Perum. Griya Bukit Jaya, Blok R5/9'),
(23, '0035343761', '0035343761', 'Alyah Lamnun', 'X MIPA 2', 'Perempuan', 'Bogor 24/08/2003', '08988895985', 'Jl. Narogong Rt 01 Rw 01 Desa Klapanunggal, Kec. K'),
(24, '0024662513', '0024662513', 'Anida Fitriyana', 'X MIPA 2', 'Perempuan', 'Bogor 29/11/2002', '085691486298', 'Kp. Bojong Rt5 Rw3 Desa Bojong Kec. Klapanunggal, '),
(25, '0034113034', '0034113034', 'Andhika Rizky Reihansyah', 'X MIPA 2', 'Laki-laki', 'Bogor 09/08/2003', '082112088952', 'Perum Mega Residence Blok A6/12A Rt 3 Rw 16 Desa C'),
(26, '0024451215', '0024451215', 'Mutiara Firyal Humaira', 'X IPS 2', 'Perempuan', '03/11/2002', '08780989556', 'Kp. Narogong Rt 06 Rw 02 Desa Kembang Kuning Kec. '),
(27, '0038569298', '0038569298', 'Muhammad Iqbal Fajri', 'X MIPA 2', 'Laki-laki', 'Jakarta 03/03/2003', '082112873132', 'Perum Pondok Damai Blok G Ill /5 Rt 05 Rw 13 Desa '),
(28, '0036087555', '0036087555', 'Andini Widia Anjarsari', 'X MIPA 3', 'Perempuan', 'Bogor 15/01/2003', '082125189434', 'Kp. Cibeber 1'),
(29, '0038568870', '0038568870', 'Andreas Marlas Raja Pardamaian', 'X MIPA 3', 'Laki-laki', 'Bogor 14/11/2003', '085881994421', 'Kp. Tegal'),
(30, '0024451213', '0024451213', 'Dewi Ratnasari Tamba', 'X MIPA 3', 'Perempuan', 'Bogor 30/10/2002', '082123654701', 'Kp. Kubang'),
(31, '0030597958', '0030597958', 'Gatot Priyo Santoso', 'X MIPA 3', 'Laki-laki', 'Jakarta 12/06/2003', '081386289498', 'Perum Ambar Graha Permai A4/22'),
(32, '0044927193', '0044927193', 'Isma Nazwa Firmansyah', 'X MIPA 3', 'Perempuan', 'Cianjur 07/03/2004', '081318807114', 'Perum Grand Kahuripan Blok GV 31 No 17'),
(33, '0033297477', '0033297477', 'Al Varezi', 'X MIPA 4', 'Laki-laki', 'Karawang 14/04/2003', '081288269139', 'Kp. Cikuda'),
(34, '0040310857', '0040310857', 'Amelia Priyatna', 'X MIPA 4', 'Perempuan', 'Bogor 03/01/2004', '081290410490', 'Kp. Cibugis'),
(35, '0024451241', '0024451241', 'Annisa Chaya Imani', 'X MIPA 4', 'Perempuan', 'Bogor 27/12/2002', '082111377330', 'Kp. Dayeuh'),
(36, '0015784546', '0015784546', 'Fadli Muhamad', 'X MIPA 4', 'Laki-laki', 'Bogor 09/11/2001', '081247956258', 'Perum Metland Cileungsi Cluster Mawar Blok DK/1/13'),
(37, '0030598227', '0030598227', 'Feny Awanti Zulkarnain', 'X MIPA 4', 'Perempuan', 'Jakarta 07/05/2003', '087870027989', 'Kp. Babakan'),
(38, '0013268536', '0013268536', 'Annisa Septina Sari Harahap', 'XI IPS 1', 'Perempuan', 'Bogor 14/09/2001', '085210813415', 'Kp Narogong Rt 08/03 Ds. Kembang Kuning, Kec. Klap'),
(39, '0016517226', '0016517226', 'DELIANA SAPITRI', 'XI IPS 1', 'Perempuan', 'Nanjungan 09/12/2001', '081514695595', 'Kp. Cikadu Rt 02/02 Ds. Dayeuh, Kec. Cileungsi, Ka'),
(40, '0018623312', '0018623312', 'Desiana Fitri Anggraini', 'X IPS 1', 'Perempuan', 'Jakarta 14/12/2001', '089660172187', 'Perum Grand Kahuripan Cluster Bromo Blok BH/07 rt '),
(41, '0022415859', '0022415859', 'Febyan Ajie Saputro', 'X IPS 1', 'Laki-laki', 'Jakarta 18/02/2002', '082114212498', 'Perum Puri Harmoni Blok BI No 5 Rt 02/11 Ds. Dayeu'),
(42, '0016511674', '0016511674', 'Franklin Hosea Talentaro', 'XI IPS 1', 'Laki-laki', 'Jakarta 27/06/2001', '082110025219', 'Perum Coco Garden Blok K 24 No 7 Rt 01/01 Ds. Klap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_bukusiswa`);

--
-- Indexes for table `data_bukuguru`
--
ALTER TABLE `data_bukuguru`
  ADD PRIMARY KEY (`id_bukuguru`);

--
-- Indexes for table `peminjaman_guru`
--
ALTER TABLE `peminjaman_guru`
  ADD PRIMARY KEY (`id_pinjamguru`);

--
-- Indexes for table `peminjaman_siswa`
--
ALTER TABLE `peminjaman_siswa`
  ADD PRIMARY KEY (`id_pinjamsiswa`);

--
-- Indexes for table `pengembalian_guru`
--
ALTER TABLE `pengembalian_guru`
  ADD PRIMARY KEY (`id_kembaliguru`);

--
-- Indexes for table `pengembalian_siswa`
--
ALTER TABLE `pengembalian_siswa`
  ADD PRIMARY KEY (`id_kembalisiswa`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id_bukusiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `data_bukuguru`
--
ALTER TABLE `data_bukuguru`
  MODIFY `id_bukuguru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `peminjaman_guru`
--
ALTER TABLE `peminjaman_guru`
  MODIFY `id_pinjamguru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `peminjaman_siswa`
--
ALTER TABLE `peminjaman_siswa`
  MODIFY `id_pinjamsiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pengembalian_guru`
--
ALTER TABLE `pengembalian_guru`
  MODIFY `id_kembaliguru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengembalian_siswa`
--
ALTER TABLE `pengembalian_siswa`
  MODIFY `id_kembalisiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
