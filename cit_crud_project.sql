-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2023 at 05:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit_crud_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = deactive',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `status`, `created_at`) VALUES
(2, 'Farzana Biswas', 'farzana@gmail.com', '$2y$10$.Xuo3PN4OmbV6hKJMOQGKehgwDq5IatwLySoQEkw.C8xmZgb2KGIO', '1677082298_63f63eba2768b_11817114_1651438338406027_2387500420965715696_n.jpg', 1, '2023-02-22'),
(3, 'Md. Sajal Sardar', 'sajal@gmail.com', '$2y$10$HP3NuWthkS4dD4HzMLlXdeR8nMviDyCZsFD27PUx37hJkGAXOwdAm', '1677082352_63f63ef08652f_323319277_2501733153298503_3145396437849882868_n.jpg', 1, '2023-02-22'),
(4, 'MD Asaduzzaman', 'asad@gmail.com', '$2y$10$Oq01snJ7VqoslMRH/nYMAuykbC2huqiDiY5ckMSS.aY5Dp7o0.08a', '1677082392_63f63f187e5ab_293292423_446217064079392_3414609490377145308_n.jpg', 1, '2023-02-22'),
(5, 'Rifat Bhuiya', 'rifat@gmail.com', '$2y$10$VLIe4b4R9VCRboHctGnJneWL7BboZUoMK8BE6Zidp3tWFKIXzTnnW', '1677082494_63f63f7ef1c38_311147234_620055642987195_5853031216685917099_n.jpg', 1, '2023-02-22'),
(6, 'Tow Fiq Ue', 'towfiq@gmail.com', '$2y$10$jI1InfvrNeLincX7oeRsS.gJCXgTNHpQ3Ypc.GONyaWihZQnEZYUq', '1677082562_63f63fc24ad57_188091007_621478929246214_5651446177960416152_n.jpg', 1, '2023-02-22'),
(7, 'Md Abu Rayhan', 'abu@gmail.com', '$2y$10$eW2Qs7IPlyeRNXmMwRNiFOnqONqiLRYMBpbvJqPgCsWwbxcSoZPp2', '1677082589_63f63fdd91f4e_323556886_1251360882109343_5915747702607252772_n.jpg', 1, '2023-02-22'),
(8, 'Shakil Khan', 'sakil@gmail.com', '$2y$10$pMlOZMnJuBEdM9WRYiNoceAw.JIEN1xf0dKNwqSgjhRRV3kFuf03y', '1677082638_63f6400e81b3e_323077517_2146526262207171_7743600186669096067_n.jpg', 1, '2023-02-22'),
(9, 'Jolly Jim', 'jolly@gmail.com', '$2y$10$mxxkiVMvO1Dep.sj/NysFOW7EmgY0jmHuBkb1JLhva/bflaaw4GEO', '1677082690_63f64042d1139_17880285_1129681497161509_7084400055178597301_o.jpg', 1, '2023-02-22'),
(10, 'Lami Sha', 'lamisha@gmail.com', '$2y$10$jw3nPDFviPmIWRQiDE2h/ercnM9a2U8JFjcAzPjyjTVUtGCefeauK', '1677082791_63f640a7b6356_pngtree-blue-ladies-suit-cartoon-character-avatar-png-image_3232195.jpg', 2, '2023-02-22'),
(11, 'Rayhanul Islam Riaj', 'riaj@gmail.com', '$2y$10$HYIBNTGBx7DVYPKFlYueUeRAmdW3ry9NaZqadwAPFWFVQloiZv3GK', '1677082817_63f640c1074ed_270202787_3070442043222764_7055784078621494320_n.jpg', 1, '2023-02-22'),
(12, 'Fardin Ahmed Sohan', 'sohan@gmail.com', '$2y$10$T0sXAIClpDZxFS1sTTt8k.nCvifZ3CcQkvxS5njGgLdu0W2UcNPOW', '1677082857_63f640e9ad7c9_328732691_3533944876829238_9204173420706059022_n.jpg', 1, '2023-02-22'),
(13, 'SoHRaB MaHmuD', 'sohrab@gmail.com', '$2y$10$Hk1aRuQDfv5eNWCrDc1KoegmcOqagk6lLC4gM51acwmhDhW1eLpby', '1677082931_63f641337651e_326311145_885736416004803_4018644690708586256_n.jpg', 1, '2023-02-22'),
(14, 'Shabuddin', 'shabuddin@gmail.com', '$2y$10$xYOyC8gS.eYpiRfwteB3nu0xo3gohIzslL7KFKX6omD/7Tod8XhtG', '1677082995_63f641730461d_327392688_1302167220573622_4742007653107128547_n.jpg', 1, '2023-02-22'),
(15, 'Bakhtear Uddin Prodhan', 'bakhtear@gmail.com', '$2y$10$e2v2CoQNyy./OkeWBJCwyeI2tegc2UU9sQTHabaMZSIJI413nCD6W', '1677083046_63f641a6a6e9c_323092599_1315208462606833_3573396390159775418_n.jpg', 1, '2023-02-22'),
(16, 'Udoy Imam', 'udoy@gmail.com', '$2y$10$tco1KASaYbPV8vdYrg88J.Dqp9WC4kr8b7tQBEobP8Hl5ENeEaNGy', '1677083106_63f641e25abfd_122457167_1753504938147490_7316266079734559085_n.jpg', 2, '2023-02-22'),
(17, 'Md. Abdullah Al Ikram', 'ikram@gmail.com', '$2y$10$Gxr0zNisc2k.T2j9eLe6d.z5xIBcDysJ.jdi04lH.HM7yPLLE8TGy', '1677083134_63f641fe08f20_310601293_1533324043762815_9204663080420993125_n.jpg', 2, '2023-02-22'),
(18, 'Jalal Arefen', 'jalal@gmail.com', '$2y$10$C1YLQG0QCz17Iz0boTclj.kD98tsqd.A8VUU2OEbyNgYnGi7T/amy', '1677083155_63f642133c3bc_329252552_715737320208199_8887036991987994927_n.jpg', 1, '2023-02-22'),
(20, 'Nazmul Alam Shaun', 'nazmul@gmail.com', '$2y$10$Nwis7kMVzBhs/gjTfP4zhOCar/x1HjfhBFhmBE.lxQdNM/2dnJOOe', '1677083227_63f6425b0482f_99292953_2607570669344963_4078047211051548672_n.jpg', 1, '2023-02-22'),
(22, 'Sadia Islam', 'sadia@gmail.com', '$2y$10$bI6WHzLiM5VcxMdNB7CXZekJv0gWK6NbeCs5SPrkMK2zRaYkFr4ou', '1677083288_63f642981a815_329096851_1886450011715618_796514367339855960_n.jpg', 1, '2023-02-22'),
(24, 'Shohan Hossain Ean', 'ean@gmail.com', '$2y$10$1PRaUZtyiIt5ZuNK9y7FHuO5SlsdkyKEtgf39.zeE0SkII01rwj3S', '1677083394_63f64302f06cf_226229722_4411014728955931_8486378817586520388_n.jpg', 2, '2023-02-22'),
(25, 'Rashed Sadat', 'rashed@gmail.com', '$2y$10$mlNgmxZ7965ebDYaTMW/WOMZmc8Toiiu77H04vnbtnggW9lCinWKq', '1677129590_63f6f776941f3_283132774_4983691478414349_475463177613157736_n.jpg', 1, '2023-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
