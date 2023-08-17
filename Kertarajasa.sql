-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Agu 2023 pada 13.10
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `tanggal`, `isi`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `created_at`, `updated_at`) VALUES
(4, 'Supervisor Pabrik PT Kerta Rajasa Raya Paksakan Buat Surat Perjanjian Terselubung', '2021-07-09', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kasus dugaan melakukan pemerasan kepada karyawan PT Kerta rajasa raya, jalan raya Tropodo 1 kecamatan waru kota sidoarjo masuk tahap gelar perkara yang segera bergulir di polsek waru sidoarjo,Kamis,09/07/2021. Pada waktu pihak supervisor mengajak UH yang tak lain sebagai orang tua salah satu karyawan pabrik mengajak pertemuan di salah satu rumah makan Gringing waru yang di hadiri kisriyanto sebagai supervisor di dampingi kedua kepala sift Sahroel dan ridwan serta 2 karyawan pabrik inisial HT dan AD dalam pertemuan itu tidak ada perjanjian hitam di atas putih dalam pertemuan tersebut,Namun setelah kasus tersebut bergulir di kepolisian tiba2 muncul surat perjajian di selembaran kerta folio yang bermatrei yang mencatut nama UH dalam surat itu walaupun surat tersebut ada nama UH,Namun tidak ada tanda tangan dan tanpa ada pemberitahuan kepada UH atas pembuatan perjanjian surat tersebut. Adanya info surat tersebut UH langsung mengecek ada info tersebut ke pihak polsek waru,Ternyata Tikno sebagai penyidik kasus tersebut membenarkan bahwa Kisriyanto telah membuat surat pernyataan tersebut dengan mencatut nama UH orang tua karyawan pabrik namun dalam isi surat itu tanpa ada di tanda tangani dan di setujui UH,Terkesan surat itu di paksakan. \"Tidak cukup di surat perjanjian itu supervisor juga terkesan memaksakan semua karyawan di panggil di rumahnya untuk bersaksi dan mengucapkan sahadat bahwa semua kejadian dan penarikan uang bulanan itu semua karyawan iklas, nyatanya karyawan keberatan dalam hal dan merugikan karyawan setiap bulan. Bahkan, sangat di sayangakan kedua saksi di paksakan oleh Kisriyanto untuk tidak mau menjadi saksi. Ini sangat jelas jelas hal itu sama halnya menghambat langkah lidik pihak kepolisian dalam mengusut kasus tersebut. Kanit Reskrim saat di UH di ruang kerja mengatakan segera akan melakukan gelar perkara terkait kasus itu,kami minta waktu karena masih suasana berkabung orang kami meninggal ungkap Aman kanit reskrim kepada awak media jawa pes.</div>', '1692277551.jpg', '', '', '', '', '2023-07-27 23:08:44', '2023-08-17 06:05:51'),
(5, 'Diduga Lakukan Pungutan Liar Tiga Karyawan PT Kerta Rajasa Raya Penuhi Panggilan Polsek Waru', '2021-06-19', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;M&nbsp; ali Hasan&nbsp; ketua DPC Kongress Advokat Indonesia kabupaten Sidoarjo mengawal pengaduan karyawan tantang&nbsp; dugaan pungutan liar yang diduga dilakukan oleh oknum pabrik PT Kerta Rajasa Raya yang beralamat di jalan raya tropodo ke pihak kepolsian polsek Waru. Kapolsek Waru Kompol Bunari membenarkan telah memanggil ketiga oknum untuk di mintai keterangan dalam dugaan kasus punguntan liar kepada karyawan PT Kerta Rajasa Raya dan dalam kasus kapolsek Kompol Bunari di serahkan ke penyidik unit reskrim polsek waru,Ungkap Bunari kepada awak media&nbsp; lewat telephone whastapnya. Masih di saat yang sama dalam dugaan kasus pungutan liar ini yang di lakukan Kisriyanto Cs kepada karyawan pabrik unit reskrim sudah memanggil korban yang berinisial AD dan WHY,YG&nbsp; untuk di mintai keterangan terkait dugaan pungli sebesar 250 ribu kepada karyawan ketika karyawan tersebut membenarkan hal tersebut kepada unit reskrim polsek waru yang di pimpin Tikno selaku penyidik dalam kasus pungli ini. Di saat Penyidik di hubungi awak media melalu telephone WhatsAap sudah menghadirkan ketiga Karyawan Kisriyanto selaku SPV dan kedua kepala sift Sahroel dan Ridwan untuk di mintai keterangan,Tinggal menunggu hasil gelar perkara,Pungkasnya.(Umar/munawar)</div>', '1692277572.jpg', '', '', '', '', '2023-07-27 23:10:31', '2023-08-17 06:06:12'),
(6, 'Ribuan Buruh Pabrik Plastik Sebut Khofifah Pemimpin Jujur dan Religius', '2021-05-16', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Calon gubernur Jawa Timur nomor urut satu, Khofifah Indar Parawansa melakukan kunjungan ke ke perusahaan plastik PT. Kerta Rajasa Raya di Jalan Raya Tropodo No 1 Waru, Sidoarjo, Rabu, (18/4). Hal ini merupakan bagian dari navigasi program yang rutin dilakukan oleh Khofifah selama masa kampanye. Kedatangan calon orang nomor satu di Jatim ini disambut langsung oleh jajaran Direksi. Setelah itu, Khofifah didampingi Direksi PT. Kerta Rajasa Raya, Rudy Santoso berkeliling ke gudang produksi. Sampai di ruang produksi, Khofifah langsung disambut antusias para pekerja di perusaan tersebut. Mereka berebut ingin menyalami dan swafoto dengan ketua Pengurus Pusat Muslimat NU itu. Bahkan suara gemuruh dukungan kepada Khofifah yang berpasangan dengan Emil Elestianto Dardak ini menggema menyambut Khofifah. \"Coblos nomor satu, Khofifah-Emil menang,\" teriak para karyawan PT Kerta Rajasa Raya di ruang produksi.&nbsp; Tidak hanya itu, keriangan para buruh di pabrik plastik itu terus bertambah ketika kandidat nomor urut 1 ini masuk ke ruang Kasir. Para buruh berjubel mengantri foto bersama Khofifah. Mereka sangat girang mendapat kunjungan mantan Menteri Sosial (Mensos) periode 2014-2018 ini. \"Kami semua senang, karena Bu Khofifahitu kan pernah jadi menteri sosial terus sowan ke sini memberi motivasi buat pekerja seperti kami ini,\" ungkap Yani salah satu karyawan di ruang kasir. Yani beserta ribuan karyawan lainya ini memiliki penilaian khusus kepada Khofifah. Menurutnya, wanita kelahiran Surabaya itu merupakan sosok perempuan pemberani menolak kebijakan yang tidak sejalan dengan kebutuhan publik. Khofifahdikatakan konsisten mengangkat martabat perempuan. \"Ibu Khofifahmenurut saya seorang sosok perempuan yang tangguh dan pemberani. Waktu orde baru beliau sering mengatakan tidak setuju kalau ada kebijakan yang tidak sesuai dengan keinginan masyarakat. Bahkan beliau mengangkat derajat perempuan yang dikatakan orang lemah. Sempai sekarang beliau masih tetap konsisten,\" imbuhnya. Sementara Irma, menyampaikan harapannya secara langsung kepada Khofifah. Ia berharap jika Khofifahterpilik kelak supaya membawa Jawa Timur ke arah yang lebih baik. Dan juga mengingat para pekerja buruh serta orang-orang muskin di Jawa Timur.&nbsp; \"Semoga terpilih dan bisa lebih baik memimpin Jawa Timur. Bisa memberi perlindungan terhadap kami kaum buruh serta memperhatikan masyarakat yang miskin,\" pungkas Irma. Atas dukungan para karyawan ini, Khofifah nampak begitu sumeringah. Tidak ada kata lain yang diucapkan oleh mantan Menteri Pemberdayaan Perempuan dan Kepala BKKBN era Presiden KH. Abdurrahman Wahid (Gus Dur) ini selain ungkapan terima kasih. \"Matur nuwun atas dukungannya bapak ibu sekalian,<em> nyuwun pengestune ngeh</em>,\" ucap Khofifah kepada para karyawan.</div>', '1692277605.webp', '', '', '', '', '2023-07-27 23:11:57', '2023-08-17 06:06:45'),
(7, 'Pabrik Karung Plastik Kerta Rajasa Terbakar', '2014-05-12', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kebakaran terjadi di sebuah pabrik pembuatan karung plastik, PT Kerta Rajasa Raya, di Jalan Raya Tropodo 1, Waru, Sidoarjo, Ahad malam, 11 Mei 2014. Api menyambar ruang elektrik yang terletak di bagian utara area pabrik. Menurut salah seorang saksi mata yang juga karyawan pabrik, Sarpani, api pertama kali terlihat di ruang elektrik sekitar pukul 19.30 WIB. \"Tiba-tiba ada api langsung besar,\" kata pria 43 tahun itu. Tidak lama setelah itu, petugas pemadam kebakaran datang ke lokasi. Sarpani bersama pegawai yang saat itu mendapat jatah kerja malam pun langsung diperintahkan keluar. Tidak ada suara ledakan ketika api mulai membesar. Pegawai lain yang juga berada di lokasi, Abdul Yadi, 42 tahun, mengatakan api dengan cepat merembet ke kantor koperasi yang berada di depan ruang elektrik. Pabrik yang berdiri pada 1975 itu memiliki tiga bagian, yaitu bagian utara, tengah, dan selatan. Bagian utara terdiri atas koperasi, ruang elektrik atau bengkel, dan kantor serikat pekerja. Sedangkan bagian tengah adalah bangunan utama untuk produksi karung plastik dan terpal. Biasanya karung plastik itu dipakai untuk mengemas semen atau pupuk dan terpal yang akan diekspor ke luar negeri sebagai bahan pembuatan tas. Adapun bagian selatan dipakai sebagai gudang. Masing-masing bagian terpisah jarak tiga-empat meter. Komandan Peleton Pemadam Kebakaran Sidoarjo, Subandi, mengatakan penyebab kebakaran diduga hubungan arus pendek atau korsleting listrik. \"Kami belum bisa memastikan. Tapi dugaanya karena arus pendek,\" katanya. Delapan unit mobil pemadam kebakaran dikerahkan. Empat unit didatangkan dari kantor induk di Sidoarjo, dua dari Krian, dan sisanya datang dari Surabaya. Subandi mengakui pihaknya sempat mengalami kendala ketika melakukan pemadaman lantaran banyaknya plastik di ruang koperasi. Sekitar pukul 22.00 WIB api berhasil dipadamkan. Pantauan <em>Tempo</em> di lokasi, api membakar bangunan seluas 20 x 40 meter itu. Atap yang sebagian besar terdiri atas asbes dan dinding bangunan tampak menghitam bekas terbakar. Saat kebakaran terjadi, aliran listrik langsung dipadamkan. Belum diketahui seberapa parah kerusakan dan kerugian yang ditimbulkan kebakaran ini. Sang pemilik pabrik, Cahyo Santoso, sudah berada di lokasi tapi tidak bersedia memberikan keterangan. Sejumlah anggota satuan keamanan swakarsa pabrik berpakaian preman melarang wartawan masuk ke area pabrik.</div>', '1692277632.jpg', '', '', '', '', '2023-07-29 19:51:01', '2023-08-17 06:07:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontaks`
--

INSERT INTO `kontaks` (`id`, `jenis`, `isi`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Alamat', 'Alamat Kerta Rajasa Raya', 'Jl. Raya Tropodo no. 1 Waru – Sidoarjo 61256, East Java , Indonesia', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(2, 'Phone', 'Hunting', '+62-31-866-9966', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(3, 'Phone', 'Hunting', '+62-31-866-9595', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(4, 'Fax', 'Kerta Rajasa Raya', '+62-31-866-9989', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(5, 'Fax', 'Kerta Rajasa Raya', '+62-31-867-5315', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(6, 'Email', 'Kerta Rajasa Raya', 'sales@kertarajasa.co.id', '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(7, 'Email', 'Kerta Rajasa Raya', 'mkt168@kertarajasa.co.id', '2023-07-20 23:40:59', '2023-07-20 23:40:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_17_181222_create_permission_tables', 1),
(6, '2023_07_18_074625_create_kontaks_table', 1),
(7, '2023_07_19_131723_create_produks_table', 1),
(8, '2023_07_19_144816_create_beritas_table', 1),
(9, '2023_07_19_152959_create_profils_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama`, `deskripsi`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `created_at`, `updated_at`) VALUES
(1, 'Block Bottom Valve Bag', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our bags come with block bottom shape that can minimize space for storage and during transportation process, combined with valve for easy filling, especially for cement industry that is commonly using rotary packer to maximize their filling capacity. It is also stronger and more durable than multi-ply kraft paper or PP woven sandwiched kraft paper cement bag. Cement bag is generally made from multi-ply / multi layer kraft paper (up to 5 ply) or PP woven sandwiched kraft paper (up to 3 ply). But nowadays with our latest European Technology, we can eliminate the usage of kraft paper and replace it with only 1 ply high tenacity laminated woven PP fabric that is fully recyclable so it means the bag is more eco friendly. They also have micro perforations technology to assure that they have highest standard on air permeability. This fully adjustable conversion system giving the ability for the bag to be airtight to highly air-permeable for filling or breathing the goods and yet ensure perfect protection for the products. This block bottom bag can be used for cement, resin, and other bulk material.</div>', '1691737747.png', '', '', '', '', '2023-07-20 23:40:59', '2023-08-11 00:09:07'),
(2, 'Bulk Container Bag (FIBC)', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FIBC is a container bag in large dimensions for storing and transporting various products which form is granular, powder, or flakes for example cement, sand, fertilizers, plastic resin and so on. It is made of woven polypropylene and normally have customable size depends on the kind of product will be filled into. Its capacity is normally 500 kg – 2.000 kg and can be more. Transporting and loading is done on either pallets or by lifting it in loops. Bags are made with either one loop or four lifting loops. Emptying is made easy by a special opening in the bottom or by simply cutting it open. We can put a tube liner made of LDPE inside to protect the product from humidity and also we can add more protection by coating the fabric using PP Lamination. At first the FIBC as we know it today were manufactured from PVC rubber and generally utilised within the rubber industry for the transportation of Carbon Black to be used as a reinforcing agent in a variety of rubber products.&nbsp;By the 1960s development of polypropylene, combined with advances in weaving, the bigbags as we know it today came into being and was rapidly adopted by a wide variety of oil and chemical companies to store and transport powdered and granular products. It was during the oil crisis of the 1970s that the FIBC really came into its own for transporting huge quantities of cement to the Middle East from across Europe for the rapid expansion of the oil producing countries. At its zenith, upwards of 50,000 metric tons of cement was being shipped out on a weekly basis to feed the vast building programmed. The modern FIBC transports a growing figure of over ¼ billion tonnes of product each year and is used to handle, store and move products as varied as cereals to powdered chemicals and flour to animal feeds. With a capacity of up to 3m³ and load capability ranging from ½ a tonne to two tonnes FIBCs are highly cost effective, easily recyclable and ideal for virtually any free-flowing granule, powder, pellet or flake.</div>', '1692277521.png', '', '', '', '', '2023-07-20 23:40:59', '2023-08-17 06:05:21'),
(3, 'PP Woven Bag', '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PP Woven Bag is a bag made of woven polypropylene, mostly made on milky white color or transparent for various granular, powder, pellet or flake product in food and chemical industry. But especially for rice grain industry, nowadays they prefer to use the colorful one because they believe it is more attractive and very useful to build their brand image in the rice market. The size and the strength of these bags are various, customable for customer needs. Its load capacity ranging from ten kilograms to one hundred kilograms. The fabric can be uncoated or coated and also we can insert a tube PE inner to give more protection to the product. This polypropylene woven bag is printable using flexo gravure technology and also rotogravure technology by using PP extrude lamination as adhesive agent to put the identity or trademark of the product to be easily recognized in the market.</div>', '1691737797.png', '', '', '', '', '2023-07-20 23:40:59', '2023-08-11 00:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'PT Kerta Rajasa Raya - Sidoarjo', '<div>The Biggest Capacity</div><div><br>Responsible Corporate</div><div><br>Quality Assurance</div><div><br>Solid Team</div><div><br>Over 25 Years Experience</div>', '1692277427.jpg', '2023-08-17 05:58:38', '2023-08-17 06:03:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2023-07-20 23:40:58', '2023-07-20 23:40:58'),
(2, 'admin', 'web', '2023-07-20 23:40:58', '2023-07-20 23:40:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Moh. Daniel Akbar', 'danzstt99@gmail.com', NULL, '$2y$10$NtP41dUI1YdJQMI6Fhhjs.B65U3ohZUipz2PbAgf2ijezxxtClJsu', NULL, '2023-07-20 23:40:59', '2023-07-20 23:40:59'),
(2, 'Daniel Akbar', 'danielakbar@gmail.com', NULL, '$2y$10$El1mWNIV8CyQLl0HdGkqGONzSAsMAQsbuoZY0xzDDp7DwKFLcaWF6', NULL, '2023-07-20 23:40:59', '2023-07-20 23:40:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
