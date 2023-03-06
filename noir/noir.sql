-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 05:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Iphone Case Matte', 'Blvck', 'Accessories', 530000, 10, 'iphone_matte.jpg'),
(2, 'Iphone Case Rose', 'Blvck', 'Accessories', 450000, 20, 'iphone_case_rose.jpg'),
(3, 'Iphone Case Snake', 'Blvck', 'Accessories', 750000, 10, 'iphone_case_snake.jpg'),
(4, 'Bracelet', 'Blvck', 'Accessories', 320000, 20, 'bracelet.jpg'),
(5, 'Rose Cap', 'Blvck', 'Accessories', 470000, 10, 'rose_cap.jpg'),
(6, 'Phanter Sweater', 'Blvck', 'Clothing', 1450000, 5, 'phanter.jpg'),
(7, 'Signature Hoodie', 'Blvck', 'Clothing', 1850000, 5, 'signature.jpg'),
(8, 'Stripe Hoodie', 'Blvck', 'Clothing', 2150000, 5, 'stripe.jpg'),
(9, 'Snake Hoodie', 'Blvck', 'Clothing', 2150000, 10, 'snake1.jpg'),
(10, 'Camo Sweater', 'Blvck', 'Clothing', 1750000, 10, 'camo1.jpg'),
(11, 'Bold Hoodie', 'Blvck', 'Clothing', 1250000, 10, 'bold.jpg'),
(12, 'Essential Hoodie', 'Blvck', 'Clothing', 1150000, 10, 'essential.jpg'),
(13, 'Sleeve Tee', 'Blvck', 'Clothing', 850000, 10, 'sleeve.jpg'),
(14, 'Square Tee', 'Blvck', 'Clothing', 620000, 20, 'square.jpg'),
(15, 'Leather Wallet', 'Blvck', 'Leather', 350000, 10, 'wallet1.jpg'),
(16, 'MacBook Sleeve', 'Blvck', 'Leather', 670000, 5, 'macbook_sleeve.jpg'),
(17, 'Zipped Wallet', 'Blvck', 'Leather', 700000, 10, 'zipped_wallet.jpg'),
(18, 'Leather Backpack', 'Blvck', 'Leather', 630000, 5, '21.jpg'),
(19, 'Blvck Mug', 'Blvck', 'Other Items', 250000, 15, 'blvck_mug.jpg'),
(20, 'Blvck Notebook', 'Blvck', 'Other Items', 470000, 15, 'notebook.jpg'),
(21, 'Blvck Playing Cards', 'Blvck', 'Other Items', 350000, 15, 'playing_cards.jpg'),
(22, 'Blvck Water Bottle', 'Blvck', 'Other Items', 540000, 10, 'water_bottle.jpg'),
(23, 'Blvck Airpods', 'Blvck', 'Other Items', 3200000, 10, 'airpods22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_accessories`
--

CREATE TABLE `tbl_barang_accessories` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang_accessories`
--

INSERT INTO `tbl_barang_accessories` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Matte iPhone Case', 'Blvck', 'Accessories', 530000, 20, 'iphone_matte2.jpg'),
(2, 'Rose iPhone Case', 'Blvck', 'Accessories', 450000, 20, 'iphone_case_rose.jpg'),
(3, 'Snake iPhone Case', 'Blvck', 'Accessories', 750000, 10, 'iphone_case_snake.jpg'),
(4, 'Bracelet', 'Blvck', 'Accessories', 320000, 20, 'bracelet.jpg'),
(5, 'Rose Cap', 'Blvck', 'Accessories', 530000, 10, 'rose_cap1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_clothing`
--

CREATE TABLE `tbl_barang_clothing` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang_clothing`
--

INSERT INTO `tbl_barang_clothing` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(6, 'Stripe Hoodie', 'Blvck', 'Male / Female', 2150000, 5, 'stripe.jpg'),
(7, 'Signature Hoodie', 'Blvck', 'Male / Female', 1850000, 5, 'signature.jpg'),
(8, 'Snake Hoodie', 'Blvck', 'Male / Female', 2150000, 5, 'snake1.jpg'),
(9, 'Camo Sweater', 'Blvck', 'Male / Female', 1750000, 10, 'camo1.jpg'),
(10, 'Essential Hoodie', 'Blvck', 'Male / Female', 1150000, 10, 'essential.jpg'),
(11, 'Sleeve Tee', 'Blvck Tee', 'Male / Female', 850000, 10, 'sleeve.jpg'),
(12, 'Square Tee', 'Blvck Tee', 'Male / Female', 620000, 20, 'square.jpg'),
(13, 'Phanter Sweater', 'Blvck', 'Male / Female', 1450000, 5, 'phanter.jpg'),
(14, 'Bold Hoodie', 'Blvck', 'Male / Female', 1250000, 10, 'bold.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_leather`
--

CREATE TABLE `tbl_barang_leather` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang_leather`
--

INSERT INTO `tbl_barang_leather` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(15, 'Leather Wallet', 'Blvck', 'Leather', 350000, 10, 'wallet1.jpg'),
(16, 'MacBook Sleeve', 'Blvck', 'Leather', 670000, 5, 'macbook_sleeve.jpg'),
(17, 'Zipped Wallet', 'Blvck', 'Leather', 700000, 10, 'zipped_wallet.jpg'),
(18, 'Leather Backpack', 'Blvck', 'Leather', 630000, 5, '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_others`
--

CREATE TABLE `tbl_barang_others` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang_others`
--

INSERT INTO `tbl_barang_others` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(19, 'Blvck Mug', 'Blvck', 'Other Items', 250000, 15, 'blvck_mug.jpg'),
(20, 'Blvck Notebook', 'Blvck', 'Other Items', 470000, 15, 'notebook.jpg'),
(21, 'Blvck Playing Cards', 'Blvck', 'Other Items', 350000, 15, 'playing_cards.jpg'),
(22, 'Blvck Water Bottle', 'Blvck', 'Other Items', 540000, 10, 'water_bottle.jpg'),
(23, 'Blvck Airpods', 'Blvck', 'Other Items', 3200000, 10, 'airpods22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'Auzan Zaky', 'auzanzaky63@gmail.com', 'Bagus cok'),
(2, 'Denis Cinangneng', 'auzanzaky63@gmail.com', 'Bagus cok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(33, 'Denis Cinangneng', 'Cinangneng Edan', '2020-02-03 09:14:29', '2020-02-04 09:14:29'),
(34, 'Auzan Zaky', 'Cinangneng Edan', '2020-02-07 07:11:44', '2020-02-08 07:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 11, 22, 'sabun bolong', 100, 1800000, '');

--
-- Triggers `tbl_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN
	UPDATE tbl_barang_others SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    UPDATE tbl_barang_leather SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    UPDATE tbl_barang_clothing SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    UPDATE tbl_barang_accessories SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Auzan Zaky', 'auzanzaky63@gmail.com', '2.jpg', '$2y$10$2iN/nU1iUp1Z/457zshWYuK6mA1IULgsB.hRBqJwH5e9d04MMrKCe', 1, 1, 1577926327),
(5, 'Slyzyy', 'slyzyy04@gmail.com', 'trees-1061623.jpg', '$2y$10$oGMDPnotasnnDJbEiVWilupxkUzpTKexJlhZT4GvLRfiowo7B2MDy', 2, 1, 1577937464),
(12, 'wayoeh', 'wayoeh@gmail.com', 'default.jpg', '$2y$10$k7C11/kcaeAaQU1j2JZHmeKQz4GPyuWZIA7o6aNMVZK6rAIIlpS5K', 2, 1, 1579849987);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Manage'),
(7, 'Contact'),
(8, 'Category');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-bars', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-ellipsis-v', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 1, 'Item List', 'admin_cart/data_barang', 'fas fa-fw fa-sitemap', 1),
(11, 1, 'Invoice', 'invoice/', 'fas fa-fw fa-receipt', 1),
(12, 1, 'Contact / Messages', 'contact/list', 'fas fa-fw fa-inbox', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_barang_accessories`
--
ALTER TABLE `tbl_barang_accessories`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_barang_clothing`
--
ALTER TABLE `tbl_barang_clothing`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_barang_leather`
--
ALTER TABLE `tbl_barang_leather`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_barang_others`
--
ALTER TABLE `tbl_barang_others`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_barang_accessories`
--
ALTER TABLE `tbl_barang_accessories`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_barang_clothing`
--
ALTER TABLE `tbl_barang_clothing`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6123125;

--
-- AUTO_INCREMENT for table `tbl_barang_leather`
--
ALTER TABLE `tbl_barang_leather`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_barang_others`
--
ALTER TABLE `tbl_barang_others`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
