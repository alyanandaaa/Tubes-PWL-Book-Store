-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 07:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wrusf`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `address` varchar(225) NOT NULL,
  `order_date` datetime NOT NULL,
  `payment_due` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `address`, `order_date`, `payment_due`) VALUES
(13, 'alya ananda', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-06 01:03:57', '2019-07-07 01:03:57'),
(14, 'alya ananda', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-06 13:46:31', '2019-07-07 13:46:31'),
(15, 'alya ananda', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-07 19:18:31', '2019-07-08 19:18:31'),
(16, 'alya ananda', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-07 20:12:24', '2019-07-08 20:12:24'),
(17, 'Harry Potter', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-07 22:14:26', '2019-07-08 22:14:26'),
(18, 'Harry Potter', 'sddddddddddddfgsd', '2019-07-08 09:56:49', '2019-07-09 09:56:49'),
(19, 'Harry Potter', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-08 10:17:07', '2019-07-09 10:17:07'),
(20, 'alya ananda', 'asdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2019-07-08 10:31:03', '2019-07-09 10:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komen_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(29, 'Kisah Cinta Sejati Angelina Jolie Brad Pitt', 'Banyak hal yang menarik dan mengejutkan dalam hubungan selebritis Brangelina (Brad Pitt - Angelina Jolie). Keduanya berangkat dari latar belakang keluarga yang bertolak belakang, tapi keduanya sama-sama memiliki ambisi yang k', 'Biografi', 59000, 11, '52.jpg'),
(32, 'Rajutan Oma Ira', 'Oma Ira seorang single-mother yang ditinggal oleh suaminya di saat anaknya masih kecil. Beliau berjuang sedemikian rupa menyekolahkan anaknya hingga lulus sebagai dokter muda. Tetapi, kejadian di bulan Mei 1998 merubah itu se', 'Biografi', 36000, 0, '54.jpg'),
(33, 'Catatan Najwa', 'Catatan Najwa berisi refleksi Najwa Shihab atas isu yang dibahas di program Mata Najwa. Dengan gaya rima yang khas, Catatan Najwa menggelitik dengan sindiran, menohok tajam, kadang seperti ajakan merenung. Inilah narasi-naras', 'Biografi', 72000, 14, '97424.jpg'),
(38, 'Never Be Us', 'Bagi Naya, Rafa nyebelin, usil, dan pengacau. Naya selalu kesal oleh tingkah Rafa yang tak henti mengganggunya. Beda banget dengan sahabat Rafa, Dimas. Di mata Naya, Dimas cowok yang perhatian, bikin Naya jatuh hati. Naya menggantung harapan tinggi pada Dimas karena sikapnya seolah juga menaruh hati pada cewek itu. Namun, pada saat yang sama, Alya, sahabatnya bilang bahwa ia menyukai Dimas. Belum lagi, lama-kelamaan Rafa tak henti melempar kode cinta yang entah serius atau tidak. Rumit! Naya bingung, perasaannya terombang-ambing. Mana yang harus dia korbankan antara persahabatan dan cinta?', 'Romance', 79000, 22, '59.jpg'),
(40, 'The Royal Tutor 4', 'Guru Heine dan murid-murid pangerannya berusaha keras menggapai impian menjadi raja dengan langkah yang berbeda-beda. Namun, ternyata mereka tidak punya cita rasa seni! Selain itu, sang pekerja keras, Bruno, mengalami kebimbangan dalam mewujudkan impiannya. Inilah volume 4 yang berkisah tentang kesiapan untuk menggapai impian dalam suasana komedi keluarga kerajaan.', 'Fiksi', 25000, 11, 's.jpg'),
(41, 'Dragon Ball Super Vol. 4', 'Goku Black yang sedang merajalela di pararel world masa depan dan bermaksud menghancurkan umat manusia itu, ternyata adalah Zamasu. Pemuda ini mempunyai pemikiran yang keliru tentang apa yang dinamakan keadilan. Goku yang sudah menyempurnakan tehnik melawan Zamasu yang imortal, berangkat kembali ke masa depan bersama Vegeta.', 'Romance', 40000, 21, 't.jpg'),
(44, 'Cerita Horor True Story', 'Tok ... tok ... tok ..   Aku tersentak. Siapa itu tengah malam begini? Tidak mau banyak prasangka, aku melanjutkan kegiatan  beres-beres, mematikan laptop, dan bergegas tidur. Namun,  baru saja aku menaikkan selimut sampai dada... terdengar suara lirih.  \"Teh Amas... Teh Amas... buka pintunya, Eni mau masuk...\"  Suara ketukan di pintu kembali terdengar. Bukan di pintu kamar atau  pintu rumahku, melainkan dari pintu rumah tetanggaku--Teh Amas.   Aku baru ingat, Teh Amas adalah kakak ipar dari almarhum  Eni. Eni? Tanpa pikir panjang, aku keluar kamar, menuruni  tangga dengan langkah yang mengendap-endap.  Lalu ketika ku buka pintu...  Krieet...  \"ALLAHU AKBAR!\"  -----------  Seperti judulnya, Cerita Horor True Story adalah kumpulan kisah nyata dari para pencerita di podcast Do You See What I See. Mari membaca untuk mendengar  suara mereka dengan cara yang berbeda.', 'Horor', 70125, 99, 'w.jpg'),
(45, 'Humor Horor Dunia Santri', 'Humor Horor Dunia Santri', 'Horor', 46500, 123, 'x.jpg'),
(46, 'Mereka Ada', '\"Kisah ini merupakan kisah nyata yang diambil dari narsumber yang jelas kebenarannya. Dan setiap kejadian yang dibuat dalam rangkaian cerita memang benar adanya, kecuali nama dan tempat tinggal yang disamarkan.\"', 'Horor', 81600, 11, 'y.jpg'),
(47, 'Psychic Detective Yakumo - Secret Files - Bond', 'Haruka meneteskan air matanya mendengarkan masa lalu Yakumo yang mengejutkan, yang diceritakan oleh Isshin— Akemi Takagishi, seorang guru SMP, mengkhawatirkan seorang anak laki-laki yang berdiri di dalam ruang kelas dengan mata kesepian dan tidak mengizinkan orang lain untuk mendekatinya. Nama anak itu adalah Yakumo Saitou. Ada rumor yang mengatakan bahwa dia dapat melihat hantu. Dia dikucilkan oleh teman-teman sekelasnya dan Akemi berusaha untuk memahaminya, akan tetapi… sebuah kasus dan tragedi yang mengerikan sedang membayangi mereka. Saat hal itu terjadi, apa yang akan dilakukan Yakumo? Masa kecil Yakumo yang mengejutkan dan dipenuhi misteri akhirnya terungkap!', 'Horor', 79000, 20, 'z.jpg'),
(49, 'HI-FI', 'Terjadi pembunuhan mengerikan terhadap seorang anak laki-laki di kota tempat Honami tinggal. Korban bahkan diperkosa setelah dibunuh.  Berita itu membuat Honami mengkhawatirkan keselamatan putri satu-satunya yang dia miliki. Yang gratis memang selalu menarik perhatian…  Dimas menyesal telah menyebarkan password MiFi, perangkat WiFi miliknya, ke teman-temannya ketika tugas kelompok, karena setelah itu selalu ada satu gadget yang tersambung ke benda kecil sumber internetnya sehari-hari itu.  Tersangka utama yang dicurigai Dimas adalah Steffi, si juara kelas cantik yang juga seorang Kpopers sejati...Apa yang akan dia lakukan untuk melindungi putri tunggalnya itu?', 'Fiksi', 82500, 76, 'b1.jpg'),
(51, 'Travelova Days In Yogya', 'Kalya mendapat penugasan untuk meliput destinasi wisata di Yogyakarta. Namun, fotografer pengganti yang ikut serta dalam liputan ternyata sangat menyebalkan. Tak hanya itu, Fiko sang fotografer pengganti itu juga bertingkah seolah dia mengenal Kalya dan Renal, kekasih Kalya. Meski menjengkelkan, Kalya akhirnya bisa bekerja sama dengan baik dengan Fiko. Kalya bimbang karena ia merasa ada yang tumbuh di hatinya kala ia bersama Fiko. Apalagi, hubungannya dengan Renal juga sedang tak baik-baik saja. Yang mengejutkan, kehadiran Fiko di kehidupan Kalya ternyata juga mengungkap satu rahasia tentang dia dan Renal.', 'Fiksi', 45000, 19, 'd1.jpg'),
(52, 'Memory In A Sketch', 'Raka tak pernah tahu alasan Ifah membencinya. Tiap kali Raka menyapa dan bersikap ramah pada gadis itu, selalu respons ketus yang didapatnya. Dia bisa saja mengabaikannya. Sayangnya, ada sesuatu pada gadis itu yang membuatnya tak mampu menjauh meski terus dimusuhi. Sementara itu, Ifah sulit menerima gagasan sang ayah untuk pindah ke Jakarta. Terlalu banyak yang harus ditinggalkan dan diterima masuk dalam kehidupannya, terutama teman-teman dan lingkungan baru. Juga cowok yang merusak hari-hari damainya di kampus. Ketika nasib tak jemu mempertemukan mereka, akankah Ifah tetap mengabaikan perhatian Raka atau menerima kehadirannya?', 'Fiksi', 67000, 33, 'e1.jpg'),
(53, 'Crying In My Porsche', '“DIA TERLIHAT PALING RANUM DI ANTARA BUAH TERLARANG LAINNYA....”  Seumur hidup, Mikela Chalid selalu berusaha jadi anak yang baik, membuat orangtuanya senang dan jadi cucu kebanggaan omanya. Tapi ketika bertemu lagi dengan senior klub tenis semasa sekolah dulu, Miki malah bersikap sebaliknya. Jeron Immanuel Vimana adalah cowok paling seksi yang pernah dilihatnya—dulu maupun sekarang. Meskipun tahu perasaan ini terlarang, Miki tak mampu menyurutkan ketertarikannya sama sekali.  “TAK PERLU BISIKAN IBLIS UNTUK MEYAKINKANKU MEMETIKNYA DARI POHON DAN MEMAKANNYA....”  Semua orang tahu perseteruan legendaris keluarga Chalid dan Vimana. Kebencian yang berkerak itu melarang keras untuk berteman, apalagi sampai berpacaran. Itulah sebabnya semasa sekolah dulu Jeron sebisa mungkin menjaga jarak dengan Miki, meskipun diam-diam jatuh cinta padanya. Sekarang pun seharusnya dia melakukan hal serupa. Tapi sekali ini Jeron nggak bisa..., dan nggak ingin juga.  “TAHUKAH KAMU, KENAPA AKU TAK BISA BERHENTI MENDAMBAKANNYA? KARENA HANYA CINTA TERLARANG YANG BISA MENJANJIKAN BAHAGIA, BAHKAN DI TENGAH-TENGAH KETIDAKBAHAGIAAN....”  Miki dan Jeron sama-sama nggak mau jadi pemicu kemurkaan keluarga besar mereka. Tapi semakin banyak alasan untuk menjauh dari satu sama lain, semakin besar juga keinginan mereka untuk bersama. Mungkin benar kata orang, buah terlarang memang paling manis rasanya. And swear on this life, her taste is the sweetest....', 'Thriller', 99000, 99, 'f1.jpg'),
(54, 'Jalaluddin Rumi: Sebuah Biografi', 'Dunia sufi Islam merupakan sebuah dunia yang cukup menarik untuk diperbincangkan. Sejak zaman dahulu, embrio-embrio mistik telah ada dalam sanubari setiap muslim. Namun, tokoh-tokoh yang melambungkan ajaran tersebut.  Salah satu tokoh yang terkenal dengan mistiknya adalah Maulana Jalaluddin Rumi. Seorang ahli mistik yang tak hanya tenggelam dalam kesufiannya secara personal. Namun, ia juga menjadi seorang pioneer atas berdirinya tarekat yang berusaha untuk ber-taqarrub dengan Sang Pencipta. Dalam ajaran-ajarannya, Rumi mengajarkan bahwa ekstase cinta merupakan hal penting untuk mencapai kedekatan yang sesungguhnya. Dalam jejak sang sufi tersebut tentunya tersimpan banyak pelajaran yang dapat dijadikan pijakan untuk generasi sekarang yang mulai minim akan kecintaannya terhadap Dzat Yang Maha Pencipta.', 'Biografi', 40000, 44, 'g1.jpg'),
(55, 'Cinta, Kesehatan, dan Munajat Emha Ainun Nadjib', 'CINTA, KESEHATAN DAN MUNAJAT EMHA AINUN NADJIB', 'Biografi', 75650, 77, 'h1.png'),
(56, 'Ajaran-Ajaran Gus Dur', 'Buku ini adalah syarah dari 9 nilai utama yang menjadi dasar bagi sosok Gus Dur dalam berpikir, bersikap, dan berjuang mengarungi samudera kehidupan di tengah-tengah masyarakat Indonesia. Selamat mempelajari, mengenal, serta mengembangkan cita-cita Gus Dur dan pemikirannya.', 'Biografi', 60000, 60, 'i1.jpg'),
(57, 'Pertempuran Britania', 'Sejarah mencatat sebuah pertempuran udara besar yang menunjukkan keterampilan, kegigihan dan tekad sebuah negara untuk bertahan dari ancaman Nazi Jerman. Inggris, dengan bermodalkan tekad, keberanian dan teknologi, berhasil menghalau setiap serangan udara Jerman yang sangat mengerikan, baik dalam hal daya hancur maupun frekuansi serangan. Pertempuran Britania mengisahkan hari demi hari, penerbang muda Inggris bekerjasama dengan para operator radar dan ahli strategi di darat, dalam sebuah kerja tim harmonis yang bernama Royal Air Force, mengusir Luftwaffe kembali ke negaranya.', 'Biografi', 150000, 15, 'j1.jpg'),
(58, 'Urban Thriller: Ve', 'Orangtua berhak membunuhmu.   Perempuan tidak usah karena ilmu selain dari Bapak itu sia-sia.   Jika tidak patuh, pukuli sampai sekarat atau kubur sekalian.', 'Thriller', 59000, 59, 'k1.jpg'),
(59, 'Nemesis', 'Nemesis', 'Thriller', 63000, 63, 'l1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `id_inv` int(11) NOT NULL,
  `id_stck` int(11) NOT NULL,
  `name_stck` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `price` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `id_inv`, `id_stck`, `name_stck`, `jumlah`, `price`, `pilihan`) VALUES
(10, 10, 1, 'Supra Mk5', 1, 718000000, ''),
(11, 13, 23, 'dsss', 2, 28000, ''),
(12, 14, 26, 'dsss', 1, 234444, ''),
(13, 15, 29, 'Kisah Cinta Sejati Angelina Jolie Brad Pitt', 1, 59000, ''),
(14, 16, 29, 'Kisah Cinta Sejati Angelina Jolie Brad Pitt', 3, 59000, ''),
(15, 17, 7, 'Dia Adalah Kakakku', 1, 85000, ''),
(16, 17, 29, 'Kisah Cinta Sejati Angelina Jolie Brad Pitt', 3, 59000, ''),
(17, 18, 32, 'Rajutan Oma Ira', 1, 36000, ''),
(18, 18, 33, 'Catatan Najwa', 1, 72000, ''),
(19, 19, 32, 'Rajutan Oma Ira', 4, 36000, ''),
(20, 20, 32, 'Rajutan Oma Ira', 1, 36000, ''),
(21, 20, 33, 'Catatan Najwa', 1, 72000, '');

--
-- Triggers `tb_order`
--
DELIMITER $$
CREATE TRIGGER `unit` AFTER INSERT ON `tb_order` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_stck;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'admin', 'admin', 'admin', 1),
(6, 'alyaananda', 'alyaa', '12345', 2),
(7, 'Iin Sembiring', 'iin', 'qwerty', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komen_id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
