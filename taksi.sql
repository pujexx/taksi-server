-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2011 at 08:52 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e5730070ac42e26070cefe9cfefbe479', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KH', 1321715784, 'a:1:{s:15:"flash:old:notif";s:29:"Anda telah keluar dari sistem";}'),
('a4d09d7dbf74666c11836e725f681b5c', '127.0.0.1', 'Mozilla/5.0 (Linux; U; Android 2.2; en-us; google_', 1321797472, ''),
('920d2de8a08da523e240f187e4658032', '127.0.0.1', 'Apache-HttpClient/UNAVAILABLE (java 1.4)', 1321838178, ''),
('f48d29217485ecf6b31203495ef99ca6', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KH', 1321838207, 'a:2:{s:2:"id";s:1:"2";s:5:"login";s:4:"true";}'),
('d22f6a2d93a9b079178dcca3fa45dd1c', '127.0.0.1', 'Mozilla/5.0 (Linux; U; Android 2.2; en-us; google_', 1321838389, ''),
('9658a64dbb70a38e40a688fead76e880', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KH', 1321847126, ''),
('717cdb27577331f5b11e63d8eefecc8c', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KH', 1321858648, 'a:2:{s:2:"id";s:1:"2";s:5:"login";s:4:"true";}');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `id_datauser` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(255) NOT NULL,
  `alamat_pemesan` text NOT NULL,
  `waktu_pemesan` datetime NOT NULL,
  `nomor_telephon` varchar(100) NOT NULL,
  `tujuan` text NOT NULL,
  `jumlah_orang` int(5) NOT NULL,
  `status` enum('belum','tolak','terima','batal') NOT NULL DEFAULT 'belum',
  PRIMARY KEY (`id_datauser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_datauser`, `nama_pemesan`, `alamat_pemesan`, `waktu_pemesan`, `nomor_telephon`, `tujuan`, `jumlah_orang`, `status`) VALUES
(1, 'danang', 'godean', '2011-11-05 00:00:00', '08562864223', 'yogyakarta', 10, 'tolak'),
(2, 'puji', 'rahasias', '2011-11-16 00:36:00', '6789', 'ghg', 2345, 'terima'),
(3, 'androi', 'd', '2011-11-16 08:39:00', '7', 'dfgh', 2, 'terima'),
(5, 's', 's', '2011-11-19 21:29:15', 'sss', 'sss', 3, 'terima'),
(6, 'dimas', 'jalan glagah', '2011-11-22 09:13:00', '085888', 'sleman', 3, 'tolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`) VALUES
(1, 'didi', 'admin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
