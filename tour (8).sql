-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Mei 2016 pada 04.13
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tour`
--
CREATE DATABASE IF NOT EXISTS `tour` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tour`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1997, 'admin', 'setia25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(7) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama`, `foto`) VALUES
(111, 'Pantai Romantis', 'pantai-romantis-4.jpg'),
(112, 'Air Terjun Suhom', 'air_terjun_suhoom.jpg'),
(113, 'Pulau Keluang', 'Pulau-Keluang-Aceh-Jaya-Aceh-@tahmidillh.jpg'),
(114, 'Pulau Seudun', 'pulauseuduen_acehjaya.jpg'),
(115, 'Pantang Terong', 'New Picture (3).bmp'),
(121, 'Pasie Saka', 'pasie saka.jpg'),
(123, 'Pasir Putih', 'images (8).jpg'),
(125, 'Jalan Terowongan', 'jalan_terowongan.jpg'),
(126, 'Rumah Pohon', 'rmh_pohon.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pick_up`
--

CREATE TABLE IF NOT EXISTS `pick_up` (
  `id_pick_up` int(8) NOT NULL AUTO_INCREMENT,
  `no_reserv` int(10) NOT NULL,
  `date` date NOT NULL,
  `no_flight` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` enum('Ready','Not Yet') NOT NULL,
  PRIMARY KEY (`id_pick_up`),
  KEY `no_reserv` (`no_reserv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `pick_up`
--

INSERT INTO `pick_up` (`id_pick_up`, `no_reserv`, `date`, `no_flight`, `alamat`, `status`) VALUES
(16, 1, '2016-04-23', 'F54211', 'Bandara SIM', 'Ready'),
(17, 2, '2016-05-01', '', 'Kuta Alam, Asrama TNI', 'Not Yet'),
(18, 3, '2016-05-05', 'GT32151', 'Bandara Malikussaleh Lhoksemawe', 'Not Yet'),
(19, 4, '2016-04-30', 'JK62611', 'Bundaran Lambaro', 'Ready'),
(20, 5, '2016-04-30', '', 'Sp. Dodi', 'Ready'),
(21, 6, '2016-04-24', '', 'Sp. Dodi', 'Not Yet'),
(22, 7, '2016-04-23', 'HTW121', 'Bandara SIM', 'Not Yet'),
(23, 8, '2016-05-07', '', 'Amiki, Sp Mesra', 'Ready'),
(24, 9, '2016-05-08', 'JK62611', 'Bandara SIM', 'Not Yet'),
(25, 10, '2016-05-08', 'Hts1212', 'Sp Mesra', 'Ready'),
(26, 2, '2016-05-07', 'gddf', 'rdhtdhgkgkgk', ''),
(27, 6, '2016-05-20', 'ft', 'drhdfjjf', 'Ready'),
(29, 1, '2016-05-12', 'sdf', 'sfsdd', ''),
(30, 1, '2016-05-12', 'sdf', 'sfsdd', ''),
(31, 6, '2016-05-12', 'ytjt', 'hkgkxfddfxhnxfd', ''),
(32, 6, '2016-05-12', 'ytjt', 'hkgkxfddfxhnxfd', ''),
(35, 9, '2016-05-14', 'fcfdhfdh', 'gfdghg', ''),
(36, 9, '2016-05-14', 'fcfdhfdh', 'gfdghg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reserv`
--

CREATE TABLE IF NOT EXISTS `reserv` (
  `no_reserv` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jmlh_tour` varchar(8) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tgl_reserv` date NOT NULL,
  PRIMARY KEY (`no_reserv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `reserv`
--

INSERT INTO `reserv` (`no_reserv`, `nama`, `email`, `no_hp`, `jmlh_tour`, `lokasi`, `tgl_reserv`) VALUES
(1, 'Alvien', 'apin23@gmail.com', '085277712613', '4', 'Hidden Beach', '2016-04-01'),
(2, 'Adzkia', 'kian_tik11@yahoo.com', '052363896166', '3', 'Mon Ceunong', '2016-04-05'),
(3, 'Muna Asyraf', 'mumun_smutt@gmail.com', '08235987234', '5', 'Air Terjun Blang Kolam', '2016-04-09'),
(4, 'Putri Sausan', 'Ocant_1999@gmail.com', '08634112611', '3', 'Air Terjun Kuta Malaka', '2016-04-11'),
(5, 'Ryan Hidayatullah', 'Ryannta_kk92@yahoo.com', '081265418911', '2', 'Pulo Bate', '2016-04-13'),
(6, 'Syakir', 'kir_akir@yahoo.com', '085299716414', '2', 'Hidden Beach', '2016-04-06'),
(7, 'Dzaki', 'jacki_kiki@gmail.com', '082397653677', '5', 'Pulo Batee', '2016-04-04'),
(8, 'Khairatun', 'khaira22@gmail.com', '082376229851', '3', 'Pasir Putih', '2016-05-12'),
(9, 'Qia Qhi', 'Qiaaaa55@gmail.com', '085241771781', '4', 'Pulo Batee', '2016-04-14'),
(10, 'Runaldi', 'naldie73@yahoo.com', '082357185357', '3', 'Kolam Air Panas', '2016-05-18'),
(26, 'NVB', 'melly_startlove@yahoo.com', '63436', 'FGJFGJ', 'ss', '2016-05-11'),
(29, 'drgffhfg', 'fgjgk', '74674', '4', 'fhfhfg', '2016-05-03'),
(30, 'hjghk', 'khk', 'ity', '6456', 'ghfghfgh', '2016-05-09'),
(31, 'kgk', 'gf', '56456', '4', 'thfgfc n ', '2016-05-14'),
(32, 'rtfh', 'trtr', '555', '4', 'fghfgfg', '2016-05-06'),
(33, 'fd', 'dsgsdg', 'fsdg', 'ssd', 'sdsd', '2016-05-14'),
(34, 'rrr', 'rr', 'ru', '12', 'ssdfd', '2016-05-13'),
(35, 'rrr', 'rr', 'ru', '12', 'ssdfd', '2016-05-13'),
(36, 'fgg', 'ff', '3', '4', 'fghfghd', '2016-05-12'),
(37, 'fgg', 'ff', '3', '4', 'fghfghd', '2016-05-12'),
(38, 'bgcj', 'fjfj', 'fj', '3', 'rtgdfh', '2016-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
  `id_wisata` int(5) NOT NULL AUTO_INCREMENT,
  `nama_wisata` varchar(100) NOT NULL,
  `destinasi` varchar(50) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3251 ;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `destinasi`, `durasi`, `gambar`, `keterangan`) VALUES
(3241, 'Air Terjun Kuta Malaka', 'Samahanii', '2 hours', '8bca8e6eb79ec192dc9c45b1042cb071.jpg', '<p>Air terjun yang sedang anda lihat sekarang bernama air terjun Kuta Malaka berada di Kuta Malaka, Samahani, Aceh Besar. Air terjun ini selain menjadi obyek wisata dan tempat rekreasi, juga digunakan untuk kepentingan masyarakat. Seperti Pengairan/Irigasi di sawah-sawah, untuk mandi, dan keperluan masyarakat lainnya. Tidak banyak rakyat Indonesia, khususnya rakyat Aceh yang tahu dimana obyek wisata ini. Oleh karena itu kewajiban Saya sebagai warga kuta malaka untuk memberitahukan keberadaan tempat ini. Untuk menuju tempat ini kita harus mendaki bukit dan gunung, tapi saya berani jamin bahwa anda tidak akan rugi dan bosan karena anda akan ditemani oleh udara yang sejuk dan panorama yang indah. Sehinga rasa lelah dan capek yang anda rasakan akan hilang dan ditebus dengan kesenangan yang tiada tara. Kali ini kita mengunjungi salah satu obyek wisata air terjun yang berada di Kuta Malaka, Kecamatan Kuta Malaka, Kabupaten Aceh Besar. \n<br><br>\nAir terjun ini berada pada ketinggin lebih kurang 600 m DPL, yang bertingkat-tingkat. Konon kata masyarakat setempat mencapai 8 tingkat dan ada yang mengatakan 20 tingkat.Untuk menuju ke lokasi kita harus menempuh perjalanan sejauh 30 km dari pusat kota Banda Aceh. \n<br><br>\nLokasi wisata ini memang belum dikelola secara profesional baik oleh Pemda Aceh Besar maupun swasta, sehingga tidak banyak para wisata yang berkunjung dan fasilitas tidak tersedia. Lokasi yang dilingkupi oleh hutan perawan yang sangat sejuk dan memberikan nuansa tersendiri dan jalan menuju ke lokasi harus melalui pegunungan yang sangat indah.</p> '),
(3242, 'Pulo Batee', 'Aceh Besar', '2 Days', 'Pulau-Batee-Aceh-Besar-@teuku_chaidil.jpg', '	<p>Pulo Batee berarti Pulau Batu, yang merupakan sebuah atol yang terletak di ujung Pulau Sumatera. Konon ceritanya, Pulo Batee merupakan pulau pribadi yang tidak berpenduduk dengan luar sekitar 70-100 hektare. Pulau warisan dari keluarga Teuku Teungoh Meuraxa ini berada di Kecamatan Peukan Bada, Kabupaten Aceh Besar Provinsi Aceh. \n					<br><br>Pulau yang masih sangat alami (natural) ini menawarkan konsep bagi Anda yang ingin berlibur yang pastinya sangat berbeda dengan berlibur di tempat manapun. Di pulau ini hanya dihuni oleh satwa liar, seperti babi hutan, burung elang laut serta ada sapi dan anjing. Pulo Batee adapat dicapai dengan terlebih dahulu tiba di Kota Banda Aceh, yang merupakan ibukota dari Propinsi Aceh.\n					<br><br>Di Pulo Batee, kita dapat menikmati beragam aktifitas wisata pantai seperti snorkling, diving dan fishing. Taman karang di sekitar Pulo Batee cukup indah untuk dijelajahi. Tapi Anda juga dapat melakukan perburuan babi liar dengan disertai anjing-anjing peliharaan yang terlatih. Juga hiking, mini jungle tracking serta yang berpengalaman dapat menyelusuri gua-gua di bawah lautnya. Pulau ini menawarkan sensasi aura alami, walau terkesan terisolir dari hiruk pikuk peradaban manusia, tapi Anda tak perlu khawatir karena di pulau ini masih terdapat sinyal untuk selular, dan tetap bisa berkomunikasi dengan dunia luar melalui internet.\n				</p>'),
(3243, 'Hidden Beach ', 'Lhoong', '2 hours', 'images (5).jpg', '<p>Aceh merupakan tempat 1001 pantai indah. Salah satu pantai yang tersembunyi dan belum terjamah oleh orang banyak namanya Teluk Jantang, nama yang lagi ngetren sama netizen Aceh “Hidden Beach” katanya.\r\n<br><br>Pantai ini terletak di Lhoong, Aceh Besar, Tepatnya di desa Jantang Meunasah Krueng Kala Pasie Blang Raya. Butuh waktu sekitar 1 jam lebih kalau berangkat dari Banda Aceh. Tempat detailnya pas didepan tambang bijih besi di lhoong. Laki dan perempuan bisa kesana, namun harus izin dulu sama orang kampung disana. Dan ini bukan tempat untuk berduaan lawan jenis.\r\n<br><br>Kalau kesini jangan lupa cash baterai kamera sampai penuh. Karena waktu sampai kesana akan disuguhi pemandangan yang sangat menakjubkan, sangat disayangkan kalau tidak diabadikan dengan jepretan kamera.\r\nSelamat menikmati Pantai tersembunyi di Lhoong Aceh Besar :)</p>'),
(3244, 'Pemandian air panas', 'Krueng Raya', '1 Day', 'images (7).jpg', '<p>Objek wisata Pemandian Air Panas Desa Ie Suum merupakan salah tempat wisata yang terdapat di pedalaman Aceh Besar. Ie Suum dalam bahasa Indonesia berarti air panas. Meski berada di wilayah pedalaman, namun jaraknya relatif dekat, 45 kilometer atau sekitar kurang lebih satu jam perjalanan dari Kota Banda Aceh.\n<br><br>Disini Anda dapat marasakan sensasi berendam di air panas  yang berada persis di kaki bukit Gunoeng Meuh (Gunung Emas) sambil menikmati indahnya perbukitan yang mengelilingi.\n<br><br>Sumber air panas di objek wisata ini berasal dari pegunungan Seulawah. Dan tentu saja, air panas tersebut mengandung berbagai zat yang baik untuk kesehatan tubuh. Bahkan baik untuk pengobatan penyakit, seperti penyakit kulit.\n\n<br><br>Khususnya pada hari libur, objek wisata yang terbilang langka ini ramai didatangi pengunjung. Mereka menghabiskan waktu sambil berendam di dalam kolam yang telah dibangun oleh pengelola.\n\n<br><br>Ada dua kolam yang terdapat di lokasi ini. Satu kolam untuk kaum perempuan, dan satu lagi bagi kaum laki-laki. Asap pertanda panasnya air mengepul dari kedua kolam, hal itu semakin memperindah asrinya panorama pemandian air panas Desa Ie Suum.\nSelain itu, pengunjung dapat melihat-lihat aliran air panas di sekitar kaki bukit yang berbentuk saluran-saluran kecil yang mengeluarkan asap.</p>'),
(3245, 'Monceunong', 'Indrapuri', '1 Day', 'Mon-Ceunong-Indrapuri-piasan-com3.jpg ', '		<p>Salah satu tempat yang tersembunyi yang masih perawan terletak dikabupaten Aceh Besar ialah air terjun mon ceunong. Hanya sedikit orang yang tau akan keindahannya. Kabupaten Aceh Besar, Provinsi Aceh, masih memiliki banyak objek wisata alam yang menarik untuk dikunjungi. Selain masih perawan dan memiliki medan yang sangat menantang. Hutan belantara dengan jalan setapak seadanya, plus batu-batu gunung besar yang semakin menghambat jalan sehingga pengunjung merasa tertantang untuk  menjelajah keasrian panorama alamnya. Perjalanan akses untuk sampai ke sana, bisa dibilang amat susah.\n					<br><br>Jarak dari Banda Aceh ke Simpang Boarding School Omar Dian sekitar 40 menit dengan menggunakan kendaraan bermotor. Mon Ceunong berada di Kecamatan Indrapuri Aceh Besar. Menuju ke kawasan ini, jalan tidak mulus dan suasana sepi, setelah berjalan 2 kilometer dari Simpang Oemar Dian maka akan terlihat pertenakan sapi. Nah, dari sinilah akan terasa perjuangan melewati jalan berbatu dan berdebu.\n					<br><br>Setelah melewati beberapa anak sungai, nanti akan ada dua tanjakan yang sangat curam dan batu besar gunung menghalang perjalanan. Saran saya sebelum kemari harus servis kenderaannya dulu dan sangat dianjurkan tidak membawa motor matik jika tidak ingin ambil resiko.\n					 </p>'),
(3246, 'Air Terjun Blang Kolam', 'Aceh Utara', '2 Days', 'air.jpg', '<p>Salah satu air terjun terindah yang berada di Aceh adalah air terjun blang kolam.  Lokasi air terjun ini adalah di dalam hutan Aceh Utara, tempatnya yang sejuk sangat cocok untuk anda berlibur dengan keluarga. Disini anda juga dapat berendam dibawah air terjun. Sambil berendam anda bisa menikmati pemandangan alam yang sangat indah di hutan ini.\n					<br><br>Air Terjun Blang Kolam Berlokasi di hutan yang teduh dan terdapat di Kabupaten Aceh Utara dengan ketinggian sekitar 75 Meter. Tempatnya yang sejuk dengan alam yang masih asri sekali. Bagi yang ingin merasakan dinginnya air terjun, bisa berendam disini atau sekedar bersantai diakhir pekan. Tempat ini sangat cocok sebagai rekreasi keluarga.\n					\n					<br><br>Dulu sebelum konflik melanda Aceh, tempat ini adalah tempat yang menarik, tiap akhir pekan banyak dikunjungi oleh remaja dan keluarga untuk berekreasi. Namun ketika konflik berkecamuk di Serambi Mekkah tempat ini menjadi hutan belantara, tangga yang dulunya dibangun sebagai sarana untuk mencapai puncak bukit dikelilingi semak dan rusak dimakan waktu. Tidak ada seorangpun yang berani memarkir kendaraannya.\n					\n					<br><br>Sekarang keadaan sudah damai, dan Air Terjun Blang Kolam pun kembali menunjukan kegairahannya, bagaimanapun air terjun blang kolam pernah menjadi tempat favorit. Untuk mencapai lokasi Blang Kolam sebenarnya tidak sulit, cukup banyak jalur yang bisa ditempuh, bisa melalui Cunda Kota Lhokseumawe, Kandang Aceh Utara dan kawasan muara satu kota lhokseumawe, namun sayang kondisi jalan. menuju objek Wisata Blang Kolam sangat memprihatinkan. Selain hal itu, kondisi jalan yang terjal dan licin juga menjadi salah satu penghambat bagi pengunjung yang ingin menikmati objek wisata ini. Hal lain yang kurang dalam objek wisata ini adalah sarana pendukung seperti Mushalla, MCK, dan tali pembatas jalur.\n					</p>'),
(3247, 'Air Terjun Alue Aie Gadang', 'Aceh Selatan', '3 Days', 'aa.jpg', '		<p>Halo temen-temen backpacker semuanya. Semoga selalu ada budged untuk kelayapan ya..haha. buat sahabat backpacker yang suka dengan keindahan alam dan hobi tracking, temen-temen semua mesti coba salah satu tempat wisata baru di Aceh selatan, tepatnya di tapak tuan yaitu air terjun Alue aie Gadang yang terletak di dusun Hulu Lhok Bengkuang, tidak jauh dari pusat kota tapak tuan sekitaran 2 KM.\n			<br><br>\n			Untuk menuju ke lokasi air terjun kita harus menggunakan sepeda motor trail dan di teruskan dengan berjalan kaki selama 1 jam perjalanan.. Dalam perjalanan nanti kita akan mendapati aliran sungai2 kecil yang begitu jernih dan di selimuti pohon yang begitu menjulang tinggi dan rindang, membuat perjalanan semakin tertantang.. kondisi jalan tidak terlalu baik dan naik turun tapi itu tidak akan jadi rintangan kalau kita bersemangat(jadi teringat iklan one heart,hahaha), so hati-hati di jalan. jadi teman2 harus membawa pemandu yang mengerti lokasi dan medan menuju lokasi air terjun Alue aie Gadang .\n			<br><br><br>Tak banyak para wisatawan yang tau air terjun alue aie gadang , karena perjalanan dan medannya begitu extrim, jadi klo para pengunjung tidak di saran kan membawa keluarga atau perempuan yang bukan muhrimnya kecuali ada izin dari pihak kampung, so teman2 jangan kawatir untuk meminta izin dengan warga gampong tersebut, karena warga kampung lhok bengkuang begitu ramah dan bersahabat. dan tidak hanya itu, fisik juga harus di utamakan ..\n			\n		</p>'),
(3249, 'Arung jeram di Sungai Alas', 'Takengon', '3 Days', 'sungaialas_1.jpg', '<p>Bersiaplah untuk arung jeram di Sungai Alas yang terletak di 165 km tenggara Kota Takengon, Aceh Tengah. Sungai ini mengalir langsung ke Samudera Hindia. Sehingga, sungai ini memiliki arus yang kuat! Tak hanya itu, jeram-jeram di Sungai Alas pun terkenal menegangkan.\n<br><br>\nArus yang deras dan berkelok-kelok serta jeram-jeram yang menantang akan menguji keseimbangan Anda dan tim. Ditambah suasana hutan yang rimbun, Anda benar-benar bertualang di alam bebas. Sesekali, Anda bisa melihat satwa seperti rusa, monyet, atau burung-burung yang sedang minum di tepian sungai.\n<br><br>\nGrade Sungai Alas adalah 3-4. Dengan total perjalanan selama 6 jam, dijamin stamina akan terkuras. Bagi pemula, pengarungan Sungai Alas dimulai dari Muarasitulan di Kota Kutacane hingga Kota Gelombang. Sedangkan untuk yang profesional, Anda bisa mengambil rute yang lebih jauh, yaitu mulai dari Angusan dekat Blangkejeran. Berani? </p>'),
(3250, 'Sebelum berlibur ke luar daerah, coba kunjungi dulu tempat yang satu ini di Ujung Pancu', 'Mata Ie', '3 Hours', 'acehplanet__lhokmata ie 06.jpg', '<p> Kebanyakan mereka yang memiliki budget besar memilih tempat liburan yang paling populer dan biasaya harus diluar daerah, selain bisa menikmati keindahan indonesia didaerah lain berwisata keluar daerah akan dipandang sebagai sesuatu yang lebih dibandingkan memilih berlibur di daerah sendiri. Tentunya berwisata ke luar daerah harus memiliki waktu dan budget yang memadai, bila kedua syarat tersebut tidak anda miliki bersiaplah mencari tempat wisata didaerahmu sendiri.<br><br>Di Aceh sendiri memiliki beberapa tempat wisata yang tidak kalah indah dari daerah lain, bahkan beberepa tempat masih jarang dikunjungi karena keterbatasan informasi dan sulitnya medan yang harus ditempuh seperti halnya tempat wisata lhokmata ie yang berada di kecamatan peukan bada kabupaten aceh besar. Lhokmata ie jarang memiliki panorama dan keindahan yang masih alami, lautnya yang jernih dan kehijauan akan menambah daya tarik tersendiri bagi pengunjung.<br><br>Untuk mencapai lokasi wisata lhokmata ie dari banda aceh ke ujung pancu kecamatan peukan bada memerlukan waktu lebih kurang 20 menit. Memarkirkan kenderaan ditempat yang telah disediakan dan membayar Rp. 5.000 ongkos parkir selanjutnya akan ditempuh berjalan kaki dengan medan berlumpur bila musim hujan dan lembab serta sedikit mendaki. Perjalanan akan ditemani kicauan burung dan segarnya alam pegunungan, sebagai tambahan lokasi wisata lhok mata ie dilarang bagi pengunjung perempuan yang bukan muhrim maupun muhrim kecuali mendapatkan izin resmi dari kepala desa setempat.</p>');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `pick_up_ibfk_1` FOREIGN KEY (`no_reserv`) REFERENCES `reserv` (`no_reserv`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
