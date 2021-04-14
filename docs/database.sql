-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 14, 2021 at 05:14 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `NetApi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_category`
--

CREATE TABLE `tm_category` (
                               `cat_id` int(11) NOT NULL,
                               `cat_name` varchar(50) NOT NULL,
                               `cat_obs` varchar(200) NOT NULL,
                               `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tm_category`
--

INSERT INTO `tm_category` (`cat_id`, `cat_name`, `cat_obs`, `state`) VALUES
(1, 'Televisores', 'Observación TV', 0),
(2, 'Refrigeradoras', 'Observación de refrigeradoras', 1),
(3, 'Estufas', 'Observación de Estufas', 1),
(4, 'Laptops', 'Observación laptops', 1),
(5, 'Teclados', 'Observación teclados', 1),
(6, 'Iphone', 'Obs iphone', 1),
(7, 'Macbook', 'Observación macbook', 1),
(8, 'iMac', 'Observación iMac', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_category`
--
ALTER TABLE `tm_category`
    ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_category`
--
ALTER TABLE `tm_category`
    MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
