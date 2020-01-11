-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 09.38
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access`
--

CREATE TABLE `access` (
  `idAccess` int(11) NOT NULL,
  `accessname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `access`
--

INSERT INTO `access` (`idAccess`, `accessname`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(1, 'Ellsworth', 'Smith', 'gia.feest@example.org', '2011-08-23', '2002-12-06 21:44:20'),
(2, 'Abagail', 'Cronin', 'preilly@example.net', '2019-09-18', '2005-04-15 00:56:54'),
(3, 'Cesar', 'Schowalter', 'emard.aileen@example.net', '1974-07-08', '1989-10-09 15:39:54'),
(4, 'Trudie', 'Kreiger', 'jhills@example.org', '2016-03-22', '2017-01-01 07:07:32'),
(5, 'Ryley', 'Nienow', 'ryan.jermaine@example.com', '2002-12-23', '2004-10-17 21:09:22'),
(6, 'Nils', 'Harris', 'una37@example.org', '2017-01-19', '1976-07-31 15:57:48'),
(7, 'Avis', 'Glover', 'tyson.keeling@example.net', '1992-07-29', '2002-07-10 06:38:10'),
(8, 'Lela', 'Hodkiewicz', 'zemlak.frank@example.org', '1999-03-02', '1988-08-16 16:15:09'),
(9, 'Hudson', 'Bosco', 'mlehner@example.org', '1970-09-13', '1991-07-02 10:31:26'),
(10, 'Dena', 'Fay', 'goodwin.clementine@example.com', '2013-06-05', '1975-02-02 18:54:14'),
(11, 'Brielle', 'Luettgen', 'alvina86@example.net', '2003-10-26', '1998-04-04 22:54:35'),
(12, 'Tiara', 'Roob', 'ibraun@example.net', '1973-05-11', '1971-07-06 22:27:38'),
(13, 'Xavier', 'Lynch', 'ebuckridge@example.net', '1982-08-17', '1984-05-18 15:49:57'),
(14, 'Alvis', 'Quigley', 'mcdermott.amya@example.net', '2013-06-05', '2016-07-28 15:20:20'),
(15, 'Kayli', 'Rohan', 'ludwig30@example.org', '1979-03-24', '2012-04-04 16:11:24'),
(16, 'Roel', 'Rodriguez', 'watson.gibson@example.org', '1999-02-14', '1997-05-01 17:38:12'),
(17, 'Hudson', 'Bode', 'shaun.bogisich@example.org', '2000-05-21', '2006-08-30 07:47:15'),
(18, 'Lorenzo', 'Abbott', 'waelchi.kaleb@example.com', '1994-01-30', '1996-09-29 00:59:34'),
(19, 'Okey', 'Jacobson', 'ohaley@example.org', '1979-02-20', '2014-01-17 06:22:13'),
(20, 'Otha', 'Rau', 'casey88@example.org', '1979-11-23', '1976-12-17 21:12:35'),
(21, 'Fredy', 'Jenkins', 'percival29@example.com', '1981-02-22', '1997-02-04 00:26:54'),
(22, 'Robyn', 'Wyman', 'yhermann@example.net', '1986-02-19', '1991-01-15 04:58:14'),
(23, 'Yessenia', 'VonRueden', 'lula59@example.net', '2019-04-15', '1995-06-08 13:40:48'),
(24, 'Randall', 'Schaefer', 'elwyn.goodwin@example.net', '1995-02-10', '1984-11-04 00:20:13'),
(25, 'Nikolas', 'Gleichner', 'annette.armstrong@example.com', '1988-11-08', '1980-02-18 11:55:34'),
(26, 'Sarai', 'Schoen', 'huel.ona@example.org', '1987-04-09', '2019-02-07 01:30:14'),
(27, 'Kelsi', 'Bartoletti', 'mo\'keefe@example.com', '1976-08-17', '1995-07-03 16:19:29'),
(28, 'Mylene', 'Vandervort', 'cheyanne40@example.net', '1988-06-18', '2000-06-18 09:17:39'),
(29, 'Walter', 'Bergstrom', 'bella79@example.org', '1997-07-12', '2003-11-07 14:22:06'),
(30, 'Paris', 'Leuschke', 'wisoky.alfonzo@example.com', '1970-06-18', '1983-11-26 19:56:35'),
(31, 'Georgette', 'Gerhold', 'brenner@example.org', '1974-07-15', '1976-06-02 01:00:09'),
(32, 'Danial', 'Cormier', 'rico34@example.net', '1973-10-27', '2017-09-27 10:51:29'),
(33, 'Sunny', 'Altenwerth', 'bfunk@example.net', '1997-10-23', '1989-09-16 19:18:05'),
(34, 'Cameron', 'Durgan', 'edgardo.denesik@example.net', '1995-04-19', '1998-12-22 09:19:12'),
(35, 'Margarita', 'Ratke', 'goodwin.raymundo@example.com', '2019-09-13', '1988-05-06 08:14:38'),
(36, 'Claudia', 'Luettgen', 'melvina92@example.com', '2002-09-03', '1979-09-13 13:40:31'),
(37, 'Nina', 'Schoen', 'kendrick35@example.com', '1977-11-24', '1984-01-16 21:03:37'),
(38, 'Christa', 'Bode', 'deichmann@example.org', '2006-04-24', '1992-09-11 21:06:02'),
(39, 'Rebecca', 'Raynor', 'geovanny48@example.com', '2019-09-20', '2011-06-03 22:31:33'),
(40, 'Dovie', 'Kirlin', 'fiona.beer@example.net', '1976-07-10', '2015-12-27 12:22:53'),
(41, 'Rafael', 'Graham', 'hagenes.aniyah@example.org', '2019-11-18', '1997-07-31 07:15:22'),
(42, 'Akeem', 'Haley', 'keeling.kaia@example.com', '1990-03-16', '1978-09-25 21:19:00'),
(43, 'Rosario', 'Gibson', 'hintz.coy@example.com', '1997-06-15', '2009-10-31 02:59:20'),
(44, 'Eric', 'Wiegand', 'greenfelder.kurt@example.org', '2010-01-15', '2017-01-21 12:23:24'),
(45, 'Liliana', 'Collins', 'dolly34@example.net', '2009-02-28', '1987-03-28 08:25:32'),
(46, 'Emilie', 'Zieme', 'maximillia70@example.org', '2017-04-14', '1998-11-12 23:08:07'),
(47, 'Aric', 'Schultz', 'caterina.kirlin@example.org', '1998-05-25', '1997-02-26 10:40:14'),
(48, 'Aliza', 'Pagac', 'deontae30@example.com', '1987-06-11', '1981-08-30 07:21:23'),
(49, 'Otto', 'Turcotte', 'bartell.ardith@example.net', '2015-06-13', '1980-03-08 04:42:13'),
(50, 'Ally', 'Baumbach', 'paula.halvorson@example.org', '2008-09-09', '1999-11-19 22:55:52'),
(51, 'Conor', 'Bailey', 'fgaylord@example.net', '1993-09-23', '1995-04-22 22:01:00'),
(52, 'Ruthe', 'Conn', 'carroll.angelita@example.org', '1974-10-14', '1976-07-11 05:33:16'),
(53, 'Aric', 'D\'Amore', 'ohegmann@example.com', '1987-08-07', '1982-05-07 14:32:16'),
(54, 'Aracely', 'Hudson', 'schroeder.ella@example.com', '1974-11-28', '2012-01-24 19:33:43'),
(55, 'Lambert', 'Marquardt', 'davis.demond@example.com', '2010-11-26', '2008-11-21 21:08:01'),
(56, 'Tara', 'Daugherty', 'jesus02@example.org', '2009-11-30', '1978-10-26 08:31:46'),
(57, 'Adriana', 'Dare', 'mgreenholt@example.org', '1976-03-25', '2008-06-29 01:09:46'),
(58, 'Bradford', 'Wintheiser', 'berge.rita@example.com', '1983-05-11', '1987-04-23 22:08:16'),
(59, 'Timmothy', 'Gorczany', 'crawford67@example.net', '2007-12-31', '1977-03-13 00:33:11'),
(60, 'Viva', 'Toy', 'paucek.imani@example.net', '2008-02-14', '2015-12-31 10:55:05'),
(61, 'Estella', 'Jacobs', 'ppacocha@example.org', '1996-05-10', '2009-11-12 05:48:57'),
(62, 'Bridie', 'Connelly', 'maria.bergstrom@example.org', '1971-11-14', '1991-04-05 23:18:36'),
(63, 'Joanie', 'Reinger', 'kuhn.cordia@example.net', '1996-06-17', '1984-03-08 22:40:41'),
(64, 'Mariah', 'Bechtelar', 'friesen.lowell@example.net', '1986-08-31', '1973-09-08 10:34:25'),
(65, 'Marilie', 'Bins', 'ujaskolski@example.org', '1978-12-06', '2002-01-29 23:45:48'),
(66, 'Ismael', 'McGlynn', 'gschulist@example.org', '1996-08-20', '1991-02-20 18:03:54'),
(67, 'Daniella', 'Collier', 'felicita.boehm@example.org', '2000-03-02', '1975-04-04 02:08:13'),
(68, 'Erin', 'Baumbach', 'nicholaus.daniel@example.org', '1971-09-27', '1984-08-06 22:18:49'),
(69, 'Lambert', 'Raynor', 'chanelle40@example.org', '1978-10-08', '2018-06-19 07:49:07'),
(70, 'Furman', 'Schiller', 'bradtke.rosa@example.net', '1983-02-01', '1972-10-26 18:17:35'),
(71, 'Reinhold', 'Skiles', 'wendell.keeling@example.org', '2002-02-27', '1994-05-06 10:24:24'),
(72, 'Georgette', 'Welch', 'ckassulke@example.org', '1985-03-05', '2012-08-01 22:00:35'),
(73, 'Marcelina', 'Johns', 'lhagenes@example.org', '1988-03-07', '2006-06-08 11:35:28'),
(74, 'Orval', 'Stoltenberg', 'heidi24@example.net', '1986-08-24', '1986-03-01 20:05:50'),
(75, 'Lurline', 'Graham', 'nrau@example.org', '2008-07-13', '1999-11-30 08:45:42'),
(76, 'Tyra', 'Schmitt', 'estel27@example.org', '2007-01-04', '2010-10-11 03:51:02'),
(77, 'Adrienne', 'Toy', 'florida32@example.net', '1998-05-16', '1995-09-29 00:38:49'),
(78, 'Rudolph', 'Armstrong', 'lelia28@example.com', '1970-05-28', '2016-11-19 14:29:51'),
(79, 'Kailey', 'Sporer', 'tzulauf@example.com', '1997-06-17', '2000-04-07 01:22:11'),
(80, 'Cydney', 'Kutch', 'mhaag@example.org', '2003-09-03', '1981-09-10 01:08:42'),
(81, 'Paxton', 'Heathcote', 'alene.gutmann@example.org', '2016-09-10', '2013-06-20 05:03:11'),
(82, 'Jerel', 'Strosin', 'swift.alysson@example.net', '1991-10-13', '1999-01-01 05:16:53'),
(83, 'Elizabeth', 'Kris', 'dgoyette@example.com', '1978-05-19', '1982-02-18 06:15:29'),
(84, 'Hilton', 'Schneider', 'abernathy.murray@example.net', '1995-01-27', '1977-06-21 04:16:58'),
(85, 'Jalen', 'Skiles', 'lroberts@example.net', '1988-03-22', '1988-06-14 17:19:39'),
(86, 'Sidney', 'Spinka', 'schroeder.taylor@example.org', '2000-12-04', '1988-02-28 05:13:24'),
(87, 'Meghan', 'West', 'khickle@example.org', '1976-09-07', '1992-05-08 16:23:26'),
(88, 'Camron', 'Wuckert', 'lubowitz.bennie@example.net', '2008-02-25', '1999-08-20 20:43:27'),
(89, 'Paxton', 'Murphy', 'schaden.riley@example.org', '2011-09-02', '1996-04-28 22:49:05'),
(90, 'Liam', 'DuBuque', 'wilderman.declan@example.com', '1970-05-02', '1973-11-17 07:35:42'),
(91, 'Taryn', 'Blick', 'von.frankie@example.net', '2012-08-07', '2000-08-07 21:09:54'),
(92, 'Tressie', 'Wyman', 'econsidine@example.net', '1974-11-01', '2003-06-25 18:25:12'),
(93, 'Tia', 'Kassulke', 'schimmel.tyra@example.net', '2014-10-29', '1986-02-08 13:50:58'),
(94, 'Valentina', 'Macejkovic', 'glover.amir@example.org', '1981-12-19', '2018-03-21 22:47:45'),
(95, 'Omari', 'Mosciski', 'lcummerata@example.net', '1988-03-31', '1982-01-24 06:35:02'),
(96, 'Salma', 'Rodriguez', 'kiehn.madeline@example.net', '2016-05-27', '1996-10-31 02:40:28'),
(97, 'Julianne', 'Osinski', 'lhilll@example.com', '2013-11-05', '1980-03-13 22:50:48'),
(98, 'Jordane', 'Koss', 'o\'hara.minnie@example.org', '2017-08-01', '1972-11-19 14:13:04'),
(99, 'Cristopher', 'Littel', 'maxwell37@example.com', '1984-09-29', '1982-08-11 10:05:23'),
(100, 'Eulah', 'Zboncak', 'emmie.schmitt@example.com', '1983-09-08', '1993-07-04 05:59:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `titleMenu` varchar(100) NOT NULL,
  `linkMenu` varchar(100) NOT NULL,
  `iconMenu` varchar(100) NOT NULL,
  `idAccess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `titleMenu`, `linkMenu`, `iconMenu`, `idAccess`) VALUES
(1, 'USER MANAGEMENT', 'AdmUser/index', 'far fa-fw fa-user-circle', 1),
(2, 'MENU MANAGEMENT', 'menuManagement/index', 'fas fa-fw fa-bars', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `idAccess` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `username`, `email`, `pass`, `photo`, `idAccess`) VALUES
(1, 'lazuardi', 'lazuardi.reznnov@gmail.com', '1ad2abd27ef74c910c2e7617a144ab0b', 'default.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`idAccess`);

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access`
--
ALTER TABLE `access`
  MODIFY `idAccess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
