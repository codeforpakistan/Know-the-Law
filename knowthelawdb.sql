-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2015 at 11:06 AM
-- Server version: 5.1.73-community
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knowthelawdb`
--
CREATE DATABASE IF NOT EXISTS `knowthelawdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `knowthelawdb`;

-- --------------------------------------------------------

--
-- Table structure for table `children_right_laws`
--

CREATE TABLE IF NOT EXISTS `children_right_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `children_right_laws`
--

INSERT INTO `children_right_laws` (`id`, `title`, `description`) VALUES
(1, 'child abuse', '1164 A this article shall be known and may be cited as the child abuse and neglect reporting. ');

-- --------------------------------------------------------

--
-- Table structure for table `civil_laws`
--

CREATE TABLE IF NOT EXISTS `civil_laws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `civil_laws`
--

INSERT INTO `civil_laws` (`id`, `title`, `description`) VALUES
(1, 'Children', 'children are not to be treated in in-human manners');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_right_laws`
--

CREATE TABLE IF NOT EXISTS `consumer_right_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `consumer_right_laws`
--

INSERT INTO `consumer_right_laws` (`id`, `title`, `description`) VALUES
(1, 'consumer 1', 'this is consumer law 1');

-- --------------------------------------------------------

--
-- Table structure for table `crime_laws`
--

CREATE TABLE IF NOT EXISTS `crime_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `crime_laws`
--

INSERT INTO `crime_laws` (`id`, `title`, `description`) VALUES
(1, 'Procuration of Minor Girl', 'Whoever by any means whatsoever, induces any minor girl under the age of eighteen years to go from any place or to do any act with intent that such girl may be, or knowing that it is likely that she will be, forced or seduced to illicit intercourse with another person shall be punishable with imprisonment which may extend to ten years and shall also be liable to fine.(Section 366-A)'),
(2, 'Importation of girl from foreign country', 'Whoever imports into Pakistan from any country outside Pakistan any girl under the age of twenty-one years with intent that she may be, or knowing it to be likely that she will be, forced or seduced to illicit intercourse with another person, shall be punishable with imprisonment which may extend to ten years and shall also be liable to fine.(Section 366-B)'),
(3, 'Kidnapping from lawful guardianship', 'Whoever takes or entices any minor under fourteen years of age if a male, or under sixteen years of age if a female, or any person of unsound mind, out of the keeping of the lawful guardian of such minor or person of unsound mind, without the consent of such guardian, said to kidnap such minor or person from lawful guardianship.(Section 361 ).\r\nException: This section does not extend to the act of any person who in good faith believes himself to be the father of an illegitimate child or who in good faith believes himself to be entitled to the lawful custody of such child, unless such act is committed for an immoral or unlawful purpose.(Section 361)'),
(4, 'Punishment for kidnapping', 'Whoever kidnaps any person from Pakistan or from lawful guardianship, shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine.(Section 363)'),
(5, 'Selling person for purposes of prostitution', 'Whoever sells, lets to hire, or otherwise disposes of any person with intent that such a person shall at any time be employed or used for the purpose of prostitution or illicit intercourse with any person or for any unlawful and immoral purpose, or knowing it to be likely that such person shall at any time be employed or used for any such, purpose, shall be punished with imprisonment which may extend to twenty-five years, and shall also be liable to fine.\r\n\r\nExplanations:- (a) When a female is sold, let for hire, or otherwise disposed of to a prostitute or to any person who keeps or manages a brothel, the person so disposing of such female shall, until the contrary is proved, be presumed to have disposed of her with the intent that she shall be used for the purpose of prostitution.(Section 371A)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `crime_sentences`
--

CREATE TABLE IF NOT EXISTS `crime_sentences` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `crime_sentences`
--

INSERT INTO `crime_sentences` (`id`, `title`, `description`) VALUES
(1, 'crime sentennes', 'this is crime sentennes');

-- --------------------------------------------------------

--
-- Table structure for table `govt_service_laws`
--

CREATE TABLE IF NOT EXISTS `govt_service_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `govt_service_laws`
--

INSERT INTO `govt_service_laws` (`id`, `title`, `description`) VALUES
(1, 'govt 1', 'this is govt service law 1');

-- --------------------------------------------------------

--
-- Table structure for table `human_right_laws`
--

CREATE TABLE IF NOT EXISTS `human_right_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `human_right_laws`
--

INSERT INTO `human_right_laws` (`id`, `title`, `description`) VALUES
(1, 'Security of a person', 'According to this law no person shall be deprived of life or liberty save in accordance with law. (Article 9)'),
(2, 'Equal human rights, without any discrimination.', 'Everyone is entitled to all the rights and freedoms set forth in this Declaration, without distinction of any kind, such as race, colour, sex, language, religion, political or other opinion, national or social origin, property, birth or other status. Furthermore, no distinction shall be made on the basis of the political, jurisdictional or international status of the country or territory to which a person belongs, whether it be independent, trust, non-self-governing or under any other limitation of sovereignty. (Article 2)'),
(3, 'Freedom of Speech ', 'Freedom of speech, etc. Every citizen shall have the right to freedom of speech and expression, and there shall be freedom of the press, subject to any reasonable restrictions imposed by law in the interest of the glory of Islam or the integrity, security or defence of Pakistan or any part thereof, friendly relations with foreign States, public order, decency or morality, or in relation to contempt of court [commission of] or incitement to an offence.(Article 19)'),
(4, 'Right to Information', 'Every citizen shall have the right to have access to information in all matters of public importance subject to regulation and reasonable restrictions imposed by law.(Article 19A. )'),
(5, 'Freedom of Religion', 'Both constitution of Islamic rebublic of Pakistan and Islam gived freedom to profess religion and to manage religious institutions.(Article 20)'),
(6, 'Right to Fair Trial', 'For the determination of his/her civil rights and obligations or in any criminal charge against him/her a person shall be entitled to a fair trial and due process.(Article 10A)');

-- --------------------------------------------------------

--
-- Table structure for table `knl`
--

CREATE TABLE IF NOT EXISTS `knl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `knl`
--

INSERT INTO `knl` (`id`, `Name`) VALUES
(1, 'Civil Laws'),
(2, 'Govt Services laws'),
(3, 'Consumer Laws'),
(4, 'Offences'),
(5, 'Cime Laws'),
(6, 'Labour Laws'),
(7, 'Traffic Laws'),
(8, 'Women Laws'),
(9, 'Crime Sentences'),
(10, 'Children Laws'),
(11, 'Other'),
(12, 'Human Right Laws');

-- --------------------------------------------------------

--
-- Table structure for table `labour_laws`
--

CREATE TABLE IF NOT EXISTS `labour_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `labour_laws`
--

INSERT INTO `labour_laws` (`id`, `title`, `description`) VALUES
(1, 'labour 1', 'this is labour law one');

-- --------------------------------------------------------

--
-- Table structure for table `offences_law`
--

CREATE TABLE IF NOT EXISTS `offences_law` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `offences_law`
--

INSERT INTO `offences_law` (`id`, `title`, `description`) VALUES
(1, 'offence 1', 'this is offences law');

-- --------------------------------------------------------

--
-- Table structure for table `traffic_laws`
--

CREATE TABLE IF NOT EXISTS `traffic_laws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `traffic_laws`
--

INSERT INTO `traffic_laws` (`id`, `title`, `description`) VALUES
(1, 'Drive without license', 'Driving without a licence, or without a licence which is effective, or without a licence applicable to the vehicle driven (section 3).'),
(2, 'Unfit to drive', 'Driving when mentally or physically unfit to drive (section 101).'),
(3, 'License Renewal', 'Refusing or failing within specified time to produce license (section 90). '),
(4, 'Fitness certificate', 'Driving a transport vehicle not covered by a certificate of fitness is crime and violates driving rules. (section 39).'),
(5, 'Over Loading', 'Driving a vehicle exceeding the permissible limit of weight (section 107).');

-- --------------------------------------------------------

--
-- Table structure for table `women_right_laws`
--

CREATE TABLE IF NOT EXISTS `women_right_laws` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `women_right_laws`
--

INSERT INTO `women_right_laws` (`id`, `title`, `description`) VALUES
(1, 'Criminal intimidation by an anonymous communication', 'Whoever commits the offence of criminal intimidation by an anonymous communication, or having taken precaution to conceal the name or abode of the person from whom the threat comes, shall be punished with imprisonment of either description for a term which may extend to two years, in addition to the punishment provided for the offence by the last preceding section.(Section 507 )'),
(2, 'Punishment for extortion', 'Whoever, commits extortion shall be punished with imprisonment of either description for a term which may extend to three years, or with fine, or with both.(Section 384 )'),
(3, 'Enticing  or taking away or detaining with criminal intent a woman', 'Whoever takes or entices away any woman with intent that she may have illicit intercourse with any person, or conceals or detains with that intent any woman, shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine.\r\n(Section 496A)'),
(4, 'Kidnapping, abducting or inducing woman to compel for marriage', 'Whoever kidnaps or abducts any woman with intent that she may be compelled, or knowing it to be likely that she will be compelled, to marry any person against her will, or in order that she may be forced, or seduced to illicit intercourse, or knowing it to be likely that she will be forced or seduced to illicit intercourse, shall be punished with imprisonment for life, and shall also he liable to fine; and whoever by means of criminal intimidation as defined in this Code, or of abuse of authority or any other method of compulsion, induces any woman to go from any place with intent that she may be, or knowing that it is likely that she will be, forced or seduced to illicit intercourse with another person shall also be punishable as aforesaid.\r\n(Section 365B)'),
(5, 'Assault or criminal force to woman with intent to outrage her modesty', 'Whoever assaults or uses criminal force to any woman, intending to outrage or knowing it to be likely that he will thereby outrage her modesty, shall be punished with imprisonment of either description for a term which may extend to two years or with fine, or with both.\r\n(Section 354)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
