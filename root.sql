-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2023 at 07:11 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otahub`
--
CREATE DATABASE IF NOT EXISTS `otahub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `otahub`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(100) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `userid`, `date_posted`, `fullname`, `attachment`, `post`) VALUES
(1, '39', '2023-05-03 03:10:43', 'kheu3h', '01052023153408.jpg', 'efhjkhutoirtdkjfkhdiufyeui'),
(2, ' ', '2023-05-03 03:10:43', 'john Michael', '01052023190118.jpg', 'Messagejapogk[appgp[oag'),
(3, ' 21', '2023-05-03 03:10:43', 'mark', '0205202384501.jpg', 'mfhkhafn, /nla, na.m/ ka;fn.an.nb\r\nambkanan,a.nv.an.nk,f a\r\nmambfbf,bvbm,ngan,b.,n,.b\r\nsnabfa,bfa,fn,.vm.mf.as'),
(4, ' 21', '2023-05-03 03:10:43', 'john Michael', '', 'idhhfuieryuehjifhd'),
(7, ' 2', '2023-05-03 03:10:43', 'martha', '', 'Message84u84584789476irty'),
(6, ' 2', '2023-05-03 03:10:43', 'martha', '02052023122931.jpg', 'fgkfhkghkghjkfhfghdhdghdtrjghdgfjgjfghfghf'),
(8, ' 43', '2023-05-03 03:10:43', 'love', '', 'rutyruthrfyuiyeruy'),
(9, ' 44', '2023-05-03 03:18:10', 'blessed', '03052023101810.jpg', 'hjkhlkjk;jkklhk;j;kljklgygygftgdfuyfg'),
(10, ' 44', '2023-05-03 03:25:40', 'blessed', '03052023102540.jpg', 'ghrtytrtrdf'),
(11, ' 44', '2023-05-03 03:30:32', 'blessed', '03052023103032.jpg', 'hrrjkhtiriut'),
(12, ' 44', '2023-05-03 03:35:45', 'blessed', '03052023103545.jpg', 'ghjkkHc KB d,ha kld\r\n'),
(13, ' 44', '2023-05-03 03:36:41', 'blessed', '03052023103641.jpg', 'gagkgkjlkhvilv\r\nfnKBJBMBJ,KBV\r\nNABVSMbD'),
(14, ' 44', '2023-05-03 04:23:55', 'blessed', '03052023112355.jpg', 'hfjktrutuirytirjhgjjhritui'),
(15, ' 44', '2023-05-03 04:27:17', 'blessed', '03052023112717.jpg', 'jrtkrhtuyruiu'),
(16, ' 44', '2023-05-03 04:32:47', 'blessed', '', 'jhfrhtrit'),
(17, ' 44', '2023-05-03 04:34:27', 'blessed', '', 'jhfrhtrit'),
(18, ' 44', '2023-05-03 04:34:27', 'blessed', '', 'jhfrhtrit'),
(19, ' 44', '2023-05-03 06:58:33', 'blessed', '', 'ury4yruytuh5ih5'),
(20, ' 44', '2023-05-03 06:58:33', 'blessed', '', 'ury4yruytuh5ih5');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `sessionofadmission` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `userid`, `fullname`, `username`, `email`, `phone`, `gender`, `sessionofadmission`, `image`) VALUES
(1, 23, 'john shaibu', 'sirnice', 'erkortko@gmail.com', '00808', 'male', '2022/2023', '0080826042023104951.jpg'),
(2, 24, 'desire', 'desr', 'gdyyioret@gmail.com', '367879008888', 'male', '2021/2022', '36787900888826042023120620.jpg'),
(3, 28, 'Leviticus Numbers', 'deutronomy', 'leviticus@gmail.com', '090382600', 'male', '2020/2021', '0903826002704202391745.jpg'),
(4, 29, 'greeer', 'grey', 'great@gmail.com', '0955645642', 'female', '2021/2022', '095564564227042023103517.jpg'),
(5, 30, 'sueer', 'KK', 'faith@gmail.com', '090566777', 'male', '2021/2022', '09076554727042023112224.jpg'),
(6, 31, 'praise', 'orghru', 'odaudu@gmail.com', '09859598', 'male', '2022/2023', '0985959829042023205037.jpg'),
(7, 32, 'lizabeth', 'lizzx', 'lizzy@gmail.com', '57743436', 'female', '2021/2022', '5774343629042023211111.jpg'),
(8, 35, 'ygerg', 'vnvn dvd', 'joy@gmail.com', '5657433', 'male', '2020/2021', '565743329042023234205.jpg'),
(9, 36, 'chidera', 'rade', 'dera@gmail.com', '8678698', 'female', '2021/2022', '867869830042023133037.jpg'),
(10, 37, '67867565', 'good', 'good@gmail.com', '897477', 'male', '2021/2022', '89747730042023184219.jpg'),
(11, 38, 'ggy', 'utrhjthhr', 'praise@gmail.com', '7587658678', 'female', '2021/2022', '758765867830042023213009.jpg'),
(12, 39, 'john Michael', 'sirnice', 'isa@gmail.com', '090485786', 'male', '2021/2022', '09048578601052023140141.jpg'),
(13, 40, 'jjhk', 'jhkk', 'enelove@gmail.com', '9899786', 'female', '2022/2023', '989902052023104142.jpg'),
(14, 2, 'martha', 'mary', 'martha@gamil.com', '343554', 'male', '2021/2022', '34355402052023122101.jpg'),
(15, 21, 'nice', 'ahmed', 'sirniceshiabu@gmail.com', '09038648314', 'male', '2021/2022', '090386483140305202383513.jpg'),
(16, 43, 'love', 'jerry', 'locey@gmail.com', '09039485385', 'female', '2022/2023', '090394853850305202384040.jpg'),
(17, 44, 'blessed', 'ckesss', 'bless@gmail.com', '7868679899', 'female', '2021/2022', '78686798990305202395038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'amen@gmail.com', '12345'),
(2, 'martha@gamil.com', '12345'),
(21, 'sirniceshiabu@gmail.com', '12345'),
(5, 'jaja2@gmail', '12345'),
(6, 'hdjkfklskfdj@gmail.com', '12345'),
(7, 'johnshaibu2022@gmail.com', '12345'),
(8, 'johny454@gmail.com', '12345'),
(9, 'johnshaibu2034@gmail.com', '12345'),
(10, 'jajashwaione@gmail.com', '12345'),
(11, 'martha@gamil.co12345', '12345'),
(12, 'martha@gamil.co', '12345'),
(13, 'martha@gamil.coyri', '12345'),
(14, 'jajasweeet@gmail.com', '12345'),
(15, 'mike@gmail.com', '12345'),
(16, 'makeet@gmail.com', '12345'),
(17, 'mlgjudbxb@gmail.com', '12345'),
(18, 'dgakhzyuiaj@gmail.com', '123456'),
(19, 'djkdhki@gmail.com', '123456'),
(20, 'ytfghjutyfg@gmail.com', '123456'),
(22, 'makegdhgkgj@gmail.com', '123456'),
(23, 'erkortko@gmail.com', 'iiiii'),
(24, 'gdyyioret@gmail.com', '1234567'),
(25, 'isama@gmail.com', '123456'),
(26, 'michael@gmail.com', 'michael'),
(27, 'adanu@gmail.com', 'adanu'),
(28, 'leviticus@gmail.com', 'moses'),
(29, 'great@gmail.com', '123456'),
(30, 'faith@gmail.com', '09876'),
(31, 'odaudu@gmail.com', '09876'),
(32, 'lizzy@gmail.com', '56789'),
(33, 'esy@gmail.com', '654321'),
(34, 'debo@gmail.com', '76543'),
(35, 'joy@gmail.com', 'dearst'),
(36, 'dera@gmail.com', '98765'),
(37, 'good@gmail.com', '765432'),
(38, 'praise@gmail.com', 'rewqa'),
(39, 'isa@gmail.com', '543210'),
(40, 'enelove@gmail.com', '6543219'),
(41, 'wini@gmail.com', '6543218'),
(42, 'kudi@gmail.co', '678901'),
(43, 'locey@gmail.com', '678901'),
(44, 'bless@gmail.com', '543219');
--
-- Database: `phptutorials`
--
CREATE DATABASE IF NOT EXISTS `phptutorials` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phptutorials`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `email`, `phone`, `image`) VALUES
(6, 'PKPJ', 'Female', 'johnshaibu2022@gmail.com', '08109121026', '0810912102618042023133105.jpg'),
(5, 'john shaibu', 'Male', 'sirniceshiabu@gmail.com', '08109121045', '0810912104517042023131152.jpg'),
(4, 'mark lizzy', 'Female', 'hfkskjhjhkhselkjl@gmail.com', '90365956284', '9036595628417042023131001.jpg'),
(7, 'ene', 'Female', 'erkortko@gmail.com', '09038648414', '0903864841425042023200936.jpg'),
(8, 'desire', 'Male', 'gdyyioret@gmail.com', '367879008888', '36787900888826042023122041.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'sirniceshiabu@gmail.com', '12345'),
(2, 'hfkskjhjhkhselkjl@gmail.com', '12345'),
(3, 'mike@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
