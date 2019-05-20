-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2019 at 10:41 PM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_ad` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `name`, `pass`) VALUES
(1, 'othmane', 'f7a59384b0a31a5e059321d8ecd2914e37a2619a');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `id_admin` int(11) NOT NULL,
  `da` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `label` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_article`),
  KEY `article_fk0` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `contenu`, `id_admin`, `da`, `label`, `views`) VALUES
(1, 'Activision est en train de prÃ©parer le lancement de son prochain Call of Duty (CoD), mais cette fois-ci sur mobile. Une version Ã  part entiÃ¨re dâ€™une des plus grandes franchises du jeu vidÃ©o.\r\nActivision cherche Ã  rÃ©itÃ©rer ses succÃ¨s Ã©normes â€” comme Modern Warfare 2 et Black Ops â€” sur mobile, Ã  lâ€™image de PUBG Mobile et Fortnite. Pas de rÃ©elles surprises, CoD:Mobile est un FPS mobile qui proposera de nombreux modes de jeu, cartes et bien Ã©videmment des armes identiques aux autres jeux de la franchise, nÃ©anmoins Activision a promis une expÃ©rience mobile rÃ©ussie.', 1, '2019-05-19 16:17:06', 'Call of Duty Mobile sur Android et iOS!!!?', 11),
(2, 'Dun point de vue frÃ©quences, les deux APUs gagnent quelques mÃ©gahertz au travers de ce changement de gÃ©nÃ©ration. Cest du moins ce que pense savoir le leaker thaÃ¯landais TUM_APISAK, qui indique que le Ryzen 3 3200G profiterait dune frÃ©quence de base calÃ©e Ã  3,60 GHz pour un boost Ã  4 GHz (contre 3,5/3,7 GHz sur le Ryzen 3 2200G). Toujours selon TUM_APISAK, le Ryzen 5 3400G passerait pour sa part Ã  des frÃ©quences comprises entre 3,70 GHz et 4,20 GHz (au lieu des 3,6/3,9 GHz du Ryzen 5 2400G).', 1, '2019-05-19 16:39:10', 'AMD Ryzen \"Picasso\", les vitesses dhorloge des APUs dÃ©voilÃ©es', 316),
(3, 'Xiaomi a commencÃ© Ã  dÃ©velopper son logiciel appelÃ© MIUI bien avant de construire ses smartphones (et tout autre appareil, dailleurs). Depuis, MIUI a beaucoup Ã©voluÃ©, il a maintenant atteint sa dixiÃ¨me version et est plus intÃ©ressant que jamais. Avez-vous un smartphone Xiaomi ? Si cest le cas, vous devez absolument connaÃ®tre ces astuces.Lun des aspects les plus amusants (et agrÃ©ables) de MIUI est la possibilitÃ© de personnaliser le smartphone dans les dÃ©tails, sans perdre le style que Xiaomi propose avec son logiciel et sans recourir Ã  des applications externes.\r\n\r\nPour changer le thÃ¨me de votre smartphone, vous devrez dabord en tÃ©lÃ©charger de nouveaux. Pour ce faire, il vous suffit douvrir lapplication ThÃ¨mes que vous trouverez sur votre page daccueil. Vous serez immÃ©diatement redirigÃ© vers la boutique en ligne oÃ¹ vous pourrez rechercher, tÃ©lÃ©charger ou acheter de nouvelles apparences pour votre smartphone.', 1, '2019-05-19 16:46:34', 'MIUI : les trucs et astuces pour tirer le meilleur parti de votre Xiaomi', 4),
(4, 'Microsoft vient de confirmer de nouveaux problÃ¨mes avec plusieurs de ses rÃ©centes mises Ã  jour cumulatives pour Windows 10. DÃ©ployÃ©es Ã  lâ€™occasion du Patch Tuesday de mai 2019, elles sont Ã  lâ€™origine de soucis dâ€™ouverture de certaines sites Web.\r\n\r\nPlus prÃ©cisÃ©ment Redmond explique que certains sites Web gouvernementaux du Royaume-Uni ne sont plus accessibles au travers des navigateurs Internet Explorer et Microsoft Edge.\r\n\r\nÂ« AprÃ¨s lâ€™installation des mises Ã  jour cumulatives du 14 mai 2019, certains sites Web de gov.uk qui ne prennent pas en charge la sÃ©curitÃ© HSTS (HTTP Strict Transport Security) peuvent ne pas Ãªtre accessibles via Internet Explorer 11 ou Microsoft Edge Â».\r\n\r\nLe gÃ©ant affirme que ses Ã©quipes sont au travail pour trouver une solution. Un correctif est dÃ©jÃ  annoncÃ© mais sans calendrier prÃ©cis. Nous savons seulement que Microsoft souhaite le publier Â« le plus rapidement possible Â».\r\n\r\nKB4494441 et dâ€™autres mises Ã  jour cumulatives Windows 10, vive Firefox ou Chrome ?\r\nEn ce qui concerne les mises Ã  jour cumulatives Ã  lâ€™origine de ce nouveau bug, voici la liste\r\n\r\nKB4494441 pour Windows 10 v1809 (OS 17763.503)\r\nKB4499167 pour Windows 10 v1803 (OS 17134.765),\r\nKB4499179 pour Windows 10 v1709 (OS 16299.1146),\r\nKB4499181 pour Windows 10 v 1703 (OS 15063.1805),\r\nKB4494440 pour Windows 10 v1607 (OS 14393.2969),\r\nKB4499154 â€‹â€‹ pour Windows 10 (OS 10240.18215).', 1, '2019-05-19 16:47:26', 'KB4494441 et dâ€™autres mises Ã  jour cumulatives Windows 10, Microsoft annonce de nouvelles dÃ©faillances', 7),
(5, 'Voici une nouvelle GTX 1650, toujours basÃ©e sur lâ€™architecture Turing mais sans RT Core et Tensor Core. Lors de la sortie de la GTX 1660 Ti, nous avancions que les GTX basÃ©es sur lâ€™architecture Turing ne pouvait pas gÃ©rer le ray tracing, cette affirmation nest plus vrai, car ce mois-ci Nvidia a ouvert le support du ray tracing Ã  certaines de ses GTX, celles Ã©videmment basÃ©es sur larchitecture Turing, et certaines issues de larchitecture Pascal (Ã  partir de la GTX 1060). Nous testons la GTX 1650 ROG Strix Gaming dASUS. La carte profite de tous les raffinements liÃ©s Ã  la gamme premium dASUS, avec une backplate, un refroidissement assurÃ© par deux ventilateurs de 100 mm et des leds RGB adressables. Cette petite GTX 1650 profite de tous les raffinements de la gamme ROG Strix dASUS, on sattend donc Ã  une carte trÃ¨s discrÃ¨te.', 1, '2019-05-19 16:48:57', 'ASUS GTX 1650 ROG Strix Gaming OC', 5),
(6, 'Les onglets groupÃ©s dÃ©barquent en test sur la version Android de Google Chrome, une fonctionnalitÃ©s qui en intÃ©ressera plus dun et plus dune !\r\nIl est maintenant possible de bÃ©nÃ©ficier des onglets groupÃ©s sur Google Chrome pour Android. Si vous voulez tester cette fonctionnalitÃ© inÃ©dite en avant-premiÃ¨re, il est possible de tÃ©lÃ©charger lâ€™APK de Chrome Canary, la version test du navigateur web.', 1, '2019-05-19 16:51:34', 'Les onglets groupÃ©s dÃ©barquent sur Chrome', 39),
(7, 'Les Xiaomi Mi AirDots se rangent dans la catÃ©gorie des Ã©couteurs sans fil et ils reprennent Ã  leur compte le form factor des Galaxy Buds et de tous les autres accessoires du mÃªme genre.\r\n\r\nLes Ã©couteurs sont ainsi trÃ¨s compacts et trÃ¨s lÃ©gers. Suffisamment en tout cas pour se faire oublier une fois calÃ©s dans le conduit auditif. Ils ne pÃ¨sent en effet pas plus de 5 grammes. Rien Ã  dire de spÃ©cial au niveau des finitions, Xiaomi a optÃ© pour un plastique blanc laquÃ© assez chouette.\r\n\r\nLâ€™autonomie des Ã©couteurs est limitÃ©e Ã  quatre heures environ. Ce nâ€™est pas Ã©norme, certes, mais il suffira de les placer dans leur boÃ®te de rangement pour les recharger. Et attention, car cette derniÃ¨re pourra leur redonner trois fois des couleurs dâ€™affilÃ©e.', 1, '2019-05-19 16:54:20', 'ðŸ”¥ Les Xiaomi Mi AirDots passent Ã  27 â‚¬', 11),
(8, 'Le Redmi Go est ainsi le premier tÃ©lÃ©phone de la marque chinoise Ã  embarquer Android Go, une version allÃ©gÃ©e dâ€™Android 8.1 Oreo, dÃ©veloppÃ©e par Google pour des smartphones de 1 GB de mÃ©moire vive. Ce smartphone embarque par ailleurs un Ã©cran 16:9 LCD HD de 5 pouces, un SoC Qualcomm Snapdragon 425 et une batterie de 3000 mAh. CÃ´tÃ© photo, le Redmi Go sâ€™offre une camÃ©ra 8 MP avec un flash LED Ã  lâ€™arriÃ¨re et Ã  lâ€™avant une camÃ©ra 5 MP. Enfin, il peut contenir 2 cartes SIM et accueillir une carte microSD jusquâ€™Ã  128GB.', 1, '2019-05-19 16:54:58', 'Le Redmi Go Ã  54 euros !', 11),
(9, 'La loi Informatique et libertÃ©s demande que les donnÃ©es des utilisateurs aient une garantie de confidentialitÃ©. Si votre base de donnÃ©es est piratÃ©e et quaucune protection valable ne garantissait la sÃ©curitÃ© et la confidentialitÃ© des donnÃ©es qui y Ã©taient contenues, vous pouvez Ãªtre tenu pour responsable devant un tribunal.\r\n\r\nNous allons donc maintenant voir comment sÃ©curiser nos mots de passe grÃ¢ce au chiffrement et au hashage.\r\n\r\n', 1, '2019-05-20 22:36:51', 'Pourquoi sÃ©curiser les mots de passe ?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_cmt` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `comment` text NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `date_cmt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cmt`),
  KEY `comment_fk0` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `id_article`, `comment`, `nickname`, `date_cmt`) VALUES
(1, 7, 'bon article\r\n', 'user1', '2019-05-19 16:56:38'),
(2, 7, 'je suis daccord', 'user2', '2019-05-19 16:56:54'),
(9, 6, 'test de commentaire par lutilisateur 1', 'utilisateur 1', '2019-05-19 22:30:24'),
(10, 4, 'tset tsetse tset se', 'test ', '2019-05-20 00:38:17'),
(11, 8, '&lt;script&gt;alert(Il y a une faille XSS)&lt;/script&gt;', 'test xss', '2019-05-20 21:53:46'),
(12, 8, 'test', 'test', '2019-05-20 22:35:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_fk0` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_ad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
