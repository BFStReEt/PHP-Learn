-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(3, 'admin', '', '$2y$10$pttOcPPY7uLoySo3rYMfIuJilDI/WT3dpdhFcD/u1T7iE379LYviW'),
(4, 'admin', '', '$2y$10$eKetgoZRvmfkEkvS8hQ9IejZoktMd9lE6hOcI2Wa1t.OpKftQeMru'),
(5, '2011064314', '', '$2y$10$BgMg0NKed7mqHgwFzgybsuJMQuafd31sOjIb9ZrzY2DYnJ0uUPsFC'),
(6, '2011064314', '', '$2y$10$nx.3oHKvi9niL.pX1b49ROMaOecWlAgzl98Y8/d4snFInenZ/EgMu'),
(7, '2011064314', '', '$2y$10$7LAmoqt1rfhRm33MIep.seZPgWdGMdC7k1mu4eoPXjYj.XnVQ2u8O'),
(8, 'admin1', '', '$2y$10$0WIlR6mIpkaEhkA2q7/KFe8wa.sdjDEa1mMjQp.hs0EKI7/Gqyg5i'),
(9, 'admin2', '', '$2y$10$7ObGAxreif8ErLhUYc5KyuV/UidKLnzubKZXOr4PwEvoTSdhRCO0e'),
(10, 'admin4', '', '$2y$10$Tea1He7cmGj7CsJ4Z.q5Qudy/PANKbl.aB8aXM9ZPAszLRJ97.lAi'),
(11, 'admin5', '', '$2y$10$bxyq2TGxMdrW/c7oTrfc2.ZHow34e.GaR5dQd4N22XQUxvG9Q85ZC'),
(14, 'adriana28_siva@hotmail.com', 'Nguyễn Anh Tới', '$2y$10$5Cr2G5TZOu7iHfdVNFAI4eERWuQ/0xi0evBTmmwoaBv3Mp2LBTZDS'),
(15, 'toidxbp09@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$txOoVJATYbly6Hsc1rv5M.6OKdaPfazjo6ms3ercWzMadrCGOQBoq'),
(16, 'toidxbp02@gmail.com', 'Nguyễn 2', '$2y$10$61oDyfdCcqpeOeYZ7fF0heVWVL9ku.UqpcRl5s2GZZulwopFxW45.'),
(17, 'ahihi@gmail.com', 'Nguyễn Anh Tới', '$2y$10$NKvfQvyAPDiZ4oR0dqKWaOFVqhlks9ayCF9CKSna6YCPNNg0ZSRFe'),
(18, 'toidxbp020@gmail.com', 'Nguyễn Anh Tới', '$2y$10$kJgW/GhzmBxAv3Fhh7g1KuJMO0mOvfyxWn9qka0Zc8./1daXS5JHq'),
(19, 'toidxbp0020@gmail.com', 'Nguyễn Anh Tới', '$2y$10$F3AexwhLOx604CWri4T2Xe1xaBf9ilqyKGxoRVAj3KPDi9muvI1MO'),
(20, 'toidxbp02@gmail.com1', 'Nguyễn Anh Tới1', '$2y$10$s5gzgElh6xONAYa6PjnShe7FwCzdJ5jwCRkEI9YQkbRMF5DFIwvdG'),
(21, 'aaaaaaaaaa@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$toutq4atjiJoTfBmMQ4FX.wsjwgz0CG7ZqvPVo73w6ZYOM7ey8xzO'),
(22, 'aaaaaaaaaa1@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$pBcwSy21lhJGp4UWa5tCDOMoMXIkPldtMKKMF6MSs7lrD7x04KnWq'),
(23, 'aaaaaaaaaa12@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$v79VTRm0C.zC8qsis6njsu9WazcLjdt6aUtG.D8pXtXHrIDHIc/La'),
(24, 'aaaaaaaaaa123@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$ro8GoVMqd/8JgAOY8RTym.MmQRgGky/n2lo5l6Twj08HJ8QBimzFG'),
(25, 'aaaaaaaaaa124443@gmail.com', 'Nguyễn Anh Tới1', '$2y$10$DxOtSZgLZWC83RTNB5r5uOCmqXusCpLvF4lZ8FTvHNNh9jgapVH5W'),
(26, 'admin1111@gmail.com', 'Nguyễn Anh Tới', '$2y$10$vrhbeJ6PHa3l2dITyIaDk.goPvV5mQcjH9sqC34CPtwPdlPLStTU6'),
(27, 'admin111221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$8n53OsahUdS5uRfDxjIRtelFqrOxWOopNEQntapJmniHqWk1CwUGi'),
(28, 'admin1112323221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$6qRI9WCO55/EaelGN8No8u4mg025XVU7jiCx.wbe6inFv4cJx.iai'),
(29, 'admin1112323222221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$55E6sU9nCuYa/rNMVNWQj.LcNg/9U9G/0/r3RXuQw.AzrcfszfLce'),
(30, 'admin11123232222323221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$KfOQDE9J.fZ2GXNg4d3OleWIKq6pDIM.hXNapLbdYGjnzIJFHiUcG'),
(31, 'admin1112323222232323233221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$msNw.Ekr9.XpaqLdF1OFCex79wP1OpntPtTPjqprtyy9nVe9bl4QW'),
(32, 'admin111232322231321232323233221@gmail.com', 'Nguyễn Anh Tới', '$2y$10$cv/.NWxsf9BcJ761PqfrTuOliclw17TYgBy.Q27EdhRGxaALxsMnK'),
(33, 'admin1112323232112231321232323233221@gmail.com', 'Toi Nguyen', '$2y$10$xen.RtIqj7AAiojt5eC9Auz3.7ubIbEX45EQXFpCZt.M2oqWbH3IK'),
(34, 'bongdungmuonkhoc@gmail.com', 'Toi Nguyen', '$2y$10$iXhHOtjXOvS4XzcfoQl3Z.dVYDrqaIgtBA2vfFlh7SiX7Gf6msUMW'),
(35, 'bongdungmuonkhoc1@gmail.com', 'Toi Nguyen', '$2y$10$G12e4Bz.PFRfd4oxwOeJxO8WgbKxNqEsLx1ZutX/xAKVltbPosmVS'),
(36, 'bongdungmuonkhoc2@gmail.com', 'Toi Nguyen', '$2y$10$jAdRDduCmU8q4QJLUTpgB.aVDWe7cismpYOPShoOtjDKwTuTbqpa6'),
(37, 'bongdungmuonkhoc23@gmail.com', 'Toi Nguyen', '$2y$10$iHDKq5I83607Vuu3R1HWQ.LjM9QqxjpxMnohEmU3N6ICo3ixEAdjG'),
(38, 'bongdungmuonkhochuhu@gmail.com', 'admin', '$2y$10$p7W8X09dW4c0Gj.Sorco4OyHn3uxwRgaC9vVm7d5sR1N5nqgCfc5a'),
(39, 'toidxbpb02@gmail.com', 'Nguyễn Anh Tới', '$2y$10$JOXKYzodvhpLG9k4zsGMX.p8W/Vpv0EMXZzKlLfcXUvz0de7mnX6O'),
(40, 'toidxbpbb02@gmail.com', 'Nguyễn Anh Tới', '$2y$10$YKCsuHTX5hPJecmQ5aZ0COSw5wGR11fAWx6JuQIRXJ91fjOX42hle'),
(41, 'toidxbpbb0222@gmail.com', 'Nguyễn Anh Tới', '$2y$10$AOoP.0xw.Pv.VrMdYQqDsuhpD1PpaZw87WBpUTtYAFWgonuYJMUCu'),
(42, 'toid@gmail.com', 'Nguyễn Anh Tới', '$2y$10$7rAC96ta./QBYMvdZdEWKuKACcAgwV0NSgVl71yT8nb4lEGX7EbSu'),
(43, 'adminv@gmail.com', 'Lee Thuy Dun', '$2y$10$xvDwvL4P4ZPNLuIQoT.GjeIowaDH4LABprrjGDT.5WzLuYj/KuNI.'),
(44, 'toidxbp03@gmail.com', 'Nguyễn Văn Toàn', '$2y$10$wTrh3fguBdcarLDfBNUz4u8NzV6iQJWHvc9Wd5EDnUbWRzfgIEKBi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
