-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Tem 2020, 16:59:34
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fly`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alinan`
--

CREATE TABLE `alinan` (
  `id` int(11) NOT NULL,
  `sehir` text NOT NULL,
  `tarih` text NOT NULL,
  `fiyat` text NOT NULL,
  `sahibi` text NOT NULL,
  `pnr` text NOT NULL,
  `ucusid` text NOT NULL,
  `satinalanid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `alinan`
--

INSERT INTO `alinan` (`id`, `sehir`, `tarih`, `fiyat`, `sahibi`, `pnr`, `ucusid`, `satinalanid`) VALUES
(17, 'Kastamonu-Rize', '15.12.2021', '350', 'berkay aydin', '3yjoROpSq3', '10', '39'),
(18, 'Kars-İzmir', '31.07.2021', '700', 'berkay aydin', 'f4GWwvHavC', '3', '39'),
(19, 'Ankara-Adana', '19.11.2020', '35', 'berkay aydin', 'tk3SdQgBee', '9', '39'),
(20, 'Ankara-Adana', '19.11.2020', '35', 'berkay aydin', 'DNBsxhU7cT', '9', '39'),
(21, 'Kars-İzmir', '31.07.2021', '700', 'berkay aydin', '4eL9SeMaR4', '3', '39'),
(22, 'Kars-İzmir', '31.07.2021', '700', 'Berkay Aydin', 'JBoAOgJrdz', '3', '7'),
(23, 'Kars-İzmir', '31.07.2021', '770', 'Berkay Aydin', '1Uy1NPmb56', '3', '7'),
(25, 'Ankara-Adana', '19.11.2020', '35', 'Kullanıcı.', 'OYbmbVbhM8', '9', '53'),
(27, 'Ankara-Antalya', '12.07.2020', '400', 'Berkay Aydin', 'N7ULrKbWJ3', '14', '2'),
(29, 'Ankara-Adana', '19.11.2020', '35', 'Ceren Beyza Samancı', 'UkV9A6Q12l', '9', '55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

CREATE TABLE `satis` (
  `id` int(11) NOT NULL,
  `sehirler` text NOT NULL,
  `kapasite` text NOT NULL,
  `fiyat` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`id`, `sehirler`, `kapasite`, `fiyat`, `tarih`) VALUES
(1, 'İstanbul-Ankara', '0', '400', '12.12.2020'),
(3, 'Kars-İzmir', '85', '700', '31.07.2021'),
(9, 'Ankara-Adana', '496', '35', '19.11.2020'),
(10, 'Kastamonu-Rize', '89', '350', '15.12.2021'),
(11, 'Samsun-Trabzon', '75', '120', '12.09.2021'),
(14, 'Ankara-Antalya', '0', '400', '12.07.2020'),
(15, 'Konya-Ankara', '1', '1', '12.06.2020');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `ceptel` text NOT NULL,
  `parola` text NOT NULL,
  `kredikart` text NOT NULL,
  `ccv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `ceptel`, `parola`, `kredikart`, `ccv`) VALUES
(2, 'Berkay Aydin', 'berkay11@gmail.com', '05462853294', 'Asd123', '4444333322221111', '123'),
(4, 'admin', 'admin@admin.com', '00000000001', '123', '12345678', '155'),
(5, 'asdasdasd', '12312@asdasd.com', '1231231231', '2131212312313', '1231233123123123', '123'),
(6, 'brkyaydn', 'berkay2@gmail.com', '123213123123123', 'Berkay123', '123123123123213', '123'),
(7, 'Berkay Aydin', 'berkay06@gmail.com', '05462853295', 'aNils5', '9876543212345', '333'),
(31, 'berkay', 'berkay3@gmail.com', '12345678910', '1231231aA', '1234123412341234', '123'),
(32, 'berkay', 'berkay4@gmail.com', '12345678910', '123123Aasadasd', '1234123412341234', '123'),
(33, 'Cihat Yaşar BK.', 'b_fatalrhyme_cihat@hotmail.com', '12345212341', 'Aasd1234', '1234123412341234', '123'),
(34, 'berkay aydin', 'berkay5@gmail.com', '12341234123', '123123Aasd', '1234123412341234', '123'),
(35, 'Enes Zengin', 'enzngn@gmail.com', '12341234123', 'Zengin06', '1234123412341234', '333'),
(36, 'berkay aydin', 'berkay23@gmail.com', '12341234123', '123Aas', '1234123412341234', '123'),
(37, 'berkay aydin', 'asdasdsdasdas@email', '12341234123', 'a1A345123', '1234123412341234', '123'),
(39, 'berkay aydin', 'berkay@gmail.com', '11111111111', 'Asd123', '1234123412341234', '124'),
(40, 'asd123', 'asdasda@mail.com', '33333333333', 'asdasdAsdasd123', '3333333333333333', '333'),
(41, 'anil sezen', 'anils55@gmail.com', '12341234123', 'asdasdASdasd123', '1234123412341234', '333'),
(42, '1231231', 'asdasd@gmail.com', '12312312312', 'asdasdASd123', '1234123412341234', '123'),
(43, 'berkay aydin', 'anils45@gmail.com', '12311111111', 'asdasdasdASD123123123', '3123312312222222', '123'),
(44, 'Cihat Yaşar BK94', '333333333@gmail.com', '12341234123', '123123ASdasd', '2111111111111111', '333'),
(45, '213123123', '11@mail.com', '11111111111', '123123aASDasd', '1111111111111111', '111'),
(46, '123123Aa', 'berka41221y@gmail.com', '12341234123', '123123ASdasd', '1234123412341234', '123'),
(47, 'anil sezen', '3333@gmail.com', '12333333333', '123Asd', '1232333333333333', '333'),
(48, '12323123', '2a12312@gmc.c', '11111111111', '123123Asadasd', '123123123', '213'),
(49, '12323123', 'asdasd@asd.c', '12111111111', '12312Aasdasd', '1111111111111111', '111'),
(50, '123123123', '33333@casd.c', '11111111111', '12312ASdasdasda', '3333333333333333', '333'),
(51, 'Berkay', '33333333@gmail.com', '11111111111', 'Asd1234', '3333333333333333', '333'),
(52, 'Berkay Aydın', '3c@gmail.com', '11111111111', 'Eee123', '3333333333333333', '333'),
(53, 'Kullanıcı.', 'kullanici1@gmail.coooommm', '44444444444', 'Asd123', '4444444444444444', '444'),
(54, 'user user', 'user@user.com', '44444444444', 'Asd123', '4444444444444444', '333'),
(55, 'Ceren Beyza Samancı', 'cerennssamanci@gmail.com', '05342213143', 'meliH123', '3333333333333333', '333');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alinan`
--
ALTER TABLE `alinan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `satis`
--
ALTER TABLE `satis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alinan`
--
ALTER TABLE `alinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `satis`
--
ALTER TABLE `satis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
