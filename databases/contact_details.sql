-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 11:39 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saathi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE IF NOT EXISTS `contact_details` (
  `id` int(11) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mailing_list` varchar(255) NOT NULL,
  `mailing_address` varchar(255) NOT NULL,
  `longitude` decimal(11,8) DEFAULT '0.00000000',
  `latitude` decimal(10,8) DEFAULT '0.00000000'
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `phone_no`, `email`, `mailing_list`, `mailing_address`, `longitude`, `latitude`) VALUES
(1, '+418059644767', '', '', 'Gachibowli, Hyderabad, Telangana, India', '78.34891680', '17.44008020'),
(2, '131312313', 'a@a.com', '', '', '0.00000000', '0.00000000'),
(3, '', '', '', 'U.S. Department of Homeland Security 500 C Street SW, Washington, DC 20472', '-76.99360000', '38.91740000'),
(4, '', '', '', 'BlazeAid Inc, 70 Kilmore East Rd,Kilmore East, Victoria 3764', '144.98438700', '-37.28949700'),
(5, '', '', '', 'Administrative Access Scheme GPO Box 1425 Brisbane ', '153.02344890', '-27.47101070'),
(6, '+81352535111', '', '', '1-2 Kasumigaseki 2-chome, Chiyoda-ku. Tokyo 100-8926, Japan', '139.75128200', '35.67562150'),
(7, '', '', '', 'Fire Protection Association,London Road,Moreton in Marsh,Gloucestershire,GL56 0RH', '-1.69078740', '51.98981170'),
(8, '', '', '', '4, Taiye Alabi Avenue, Idi Ape-Basorun Road, Ibadan, Oyo State,Nigeria', '3.92582370', '7.40326360'),
(9, '', '', '', 'Fire Rescue Development Program C.P. 35 Bracciano I-00062 Roma - Italia ', '12.18614470', '42.07694800'),
(10, '01609780150', '', '', 'North Yorkshire Fire & Rescue Service Headquarters Thurston Road Northallerton North Yorkshire ', '-1.44096480', '54.35048890'),
(11, '', '', '', 'GFP Enterprises, Inc. 307 W. Sisters Park Dr. Sisters OR 97759', '-121.55273200', '44.29486760'),
(12, '0262078609', 'farmfirewise@act.gov.au', 'rfsadmin@act.gov.au', 'ACT, Australia', '149.01236790', '-35.47346790'),
(13, '200065395', '', '', '1750 New York Avenue, NW Suite 300 Washington, DC 20006-5395', '-77.04112600', '38.89570300'),
(14, '', '', '', '1750 New York Avenue, NW Suite 300', '-73.95490020', '40.60370590'),
(15, '+3124619600', '', '', '180 N. Wabash Avenue, Suite 401,  Chicago, IL 60601', '-87.62654790', '41.88551920'),
(16, '+4402086925050', 'iafssmembers@dial.pipex.com', 'iafssmembers@dial.pipex.com', 'West Yard House, Guildford Grove,  London SE10 8JT, UK', '-0.01641900', '51.47393140'),
(17, '3017182910', '', '', '9711 Washingtonian Blvd, Suite 380 Gaithersburg, MD 20878', '-77.19154770', '39.11181810'),
(18, '', '', '', '602 Gods Gift Tower, Yari Road, Versova, Andheri West, Mumbai, Maharashtra, India 400061', '72.80757500', '19.14233360'),
(19, '', '', '', 'AIZWAL,MIZORAM', '92.71763890', '23.72710700'),
(20, '', '', '', 'RAMAKRISHNA MATH & RAMAKRISHNA MISSION,BELUR MATH-711202, WEST BENGAL, INDIA.', '88.35550250', '22.62638060'),
(21, '', '', '', 'Avani Sringeri Nagar, BDA Road, BTM 6th Stage,  BANGALORE -560076  Karnataka , India', '77.50891100', '12.88258670'),
(22, '', '', '', 'Fire Protection Association of India  212 Sanghavi Square, M.G. Road,  Ghatkopar(W),  Mumbai - 400086 India.', '72.90766690', '19.09080630'),
(23, '', '', '', 'Laxmi Nagar , New Delhi, INDIA', '77.27480700', '28.63673600'),
(24, '', '', '', '719, Jaina Towers - 1, District Centre, Janak Puri, New delhi- 110 058', '77.08119070', '28.62999540'),
(25, '', '', '', 'Municipal Corporation of Greater Mumbai,  Head Quarter,  Mumbai ', '72.87765590', '19.07598370'),
(26, '+912226677555', 'info@mahafireservice.gov.in', 'info@mahafireservice.gov.in', 'DIRECTORATE OF MAHARASHTRA FIRE SERVICES,  MAHARASHTRA FIRE SERVICES ACADEMY,  HANS BHUGRA MARG, KALINA, SANTACRUZ (EAST),  MUMBAI- 400 098', '72.86539970', '19.07627700'),
(27, '+911124632950', '', '', 'Corporate Office :  Airports Authority of India, Rajiv Gandhi Bhawan, Safdarjung Airport, New Delhi-110003', '77.23178630', '28.59164680'),
(28, '+919601952421', '', '', 'CENTRE FOR FIRE SAFETY MANAGEMENT & TRAINING Plot no 975, Khasra no 298, Metro piller no 506-507, Next to Hanuman mandir, Mundka, New Delhi - 110041, India', '77.03044900', '28.68249860'),
(29, '+911126701729', 'website@ndma.gov.in', 'website@ndma.gov.in', 'Postal Address: NDMA Bhawan, A-1, Safdarjung Enclave, New Delhi - 110029', '77.19687890', '28.56352180'),
(30, '+911123702442', 'help@nidm.gov.in', 'help@nidm.gov.in', 'NATIONAL INSTITUTE OF DISASTER MANAGEMENT, Mahatma Gandhi Marg,  New Delhi - 110 002', '77.24624100', '28.62994990'),
(31, '', '', '', 'Directorate General , NDRF , Sector-1 R K Puram,New Delhi -66', '77.18230550', '28.56338130'),
(32, '', '', '', 'Indian Red Cross Society 1, Red Cross Road New Delhi', '77.21044960', '28.61821570'),
(33, '+9127579924', 'nsci@mtnl.net.in', 'nsci@mtnl.net.in', 'NATIONAL SAFETY COUNCIL HQs & Institute Building  Plot No.98-A, Institutional Area, Sector 15, CBD Belapur, Navi Mumbai - 400 61', '73.03446000', '19.00849500'),
(34, '+913612637680', '', '', 'Guwahati', '0.00000000', '0.00000000'),
(35, '', '', '', 'Inderprasth, Jogiwala Ring Road, Dehradun -248001(Uttrakhand)', '78.07444240', '30.29821840'),
(36, '+910222227616', 'dir-fire.goa@nic.in', 'dir-fire.goa@nic.in', 'Goa, India', '74.12399600', '15.29932650'),
(37, '', '', '', '13D, Mirza Ghalib Street, Taltala, Kolkata, West Bengal 700016, India', '88.35498400', '22.55782600'),
(38, '', '', '', 'Batmaloo Srinagar-190001 Gandhi Nagar Jammu-180004.', '74.86094720', '32.70343220'),
(39, '+911126701700', 'website@ndma.gov.in', 'website@ndma.gov.in', 'NDMA Bhawan, A-1, Safdarjung Enclave, New Delhi - 110029', '77.19687890', '28.56352180'),
(40, '+412026462500', '', '', 'Federal Emergency Management Agency U.S. Department of Homeland Security 500 C Street SW, Washington, DC 20472', '-77.01877740', '38.88568600'),
(41, '+41227913111', '', '', 'World Health Organization, Avenue Appia,  Geneva , Switzerland', '6.13545060', '46.23026270'),
(42, '', '', '', 'American Red Cross National Headquarters 2025 E Street, NW Washington, DC 20006', '-77.04596930', '38.89644790'),
(43, '', '', '', 'India Development and Relief Fund 5821 Mossrock Drive North Bethesda, MD 20852-3238 USA', '-77.11827400', '39.03781600'),
(44, '', '', '', 'International Organization for Migration (IOM) 17, Route des Morillons CH-1211 Geneva 19 Switzerland', '0.00000000', '0.00000000'),
(45, '', '', '', 'Headquarters United Nations Development Programme One United Nations Plaza New York, NY 10017 USA', '-73.96916850', '40.75040170'),
(46, '', '', '', 'Dasra - India:  M.R.Co-op Housing Society Bldg No. J/18, 1st floor Opposite Raheja College of Arts and Commerce Relief Road, Off Juhu Tara Rd Santa Cruz (West), Mumbai 400 054', '72.83767550', '19.08150870'),
(47, '', '', '', 'Lions Clubs International Headquarters 300 West 22nd Street Oak Brook, IL', '-87.92811960', '41.84851640'),
(48, '', '', '', 'OCHA, USA', '-84.43310050', '42.78538740'),
(49, '', '', '', 'Headquarters Viale delle Terme di Caracalla  00153 Rome, Italy ', '0.00000000', '0.00000000'),
(50, '', '', '', 'Headquarter UNICEF House 3 United Nations Plaza New York, New York 10017 U.S.A.', '0.00000000', '0.00000000'),
(51, '', '', '', 'Headquarter Via Cesare Giulio Viola 68 Parco dei Medici 00148 - Rome - Italy ', '0.00000000', '0.00000000'),
(52, '', '', '', 'Japan Society 333 East 47th Street  New York, New York 10017', '-73.96827940', '40.75250770'),
(53, '', '', '', '456 Hornet Avenue | Joint Base Pearl  Harbor-Hickam, HI 96860-3503', '-157.95913470', '21.36038260'),
(54, '', '', '', 'Adrc Ml, Franklin County, NY, United States', '0.00000000', '0.00000000'),
(55, '', '', '', '12501 Old Columbia Pike Silver Spring, MD 20904 ', '-76.96575460', '39.06123350'),
(56, '', '', '', 'Seva Bharathi, 3-2-106, Nimboli Adda, Kachiguda, Hyderabad Telangana', '78.49579400', '17.38269760'),
(57, '', '', '', 'BAPS Shri Swaminarayan Mandir Shahibaug Road Ahmedabad 380004 Gujarat India ', '72.58947240', '23.04510420'),
(58, '', '', '', '"CARE INDIA HEADQUARTERS Address: E-46/12, Okhla Industrial Area  Phase II, New Delhi', '77.36546110', '28.61302950'),
(59, '', '', '', 'Gandhi Ashram Ahmedabad Gujarat - 380 027', '72.58088680', '23.06077230'),
(60, '', '', '', 'Swamiji, Shri Ramkrishna Mission  Ashram, Dr. Yagnik Road, Rajkot', '70.79221730', '22.29218240'),
(61, '', '', '', 'Indian Red Cross Society  New Delhii 110001 ', '77.04999340', '28.47134770'),
(62, '', '', '', 'Kalyan, Maharashtra, India', '0.00000000', '0.00000000'),
(63, '', '', '', 'The Gujarat State Disaster Management Authority Government Of Gujarat Block No.11 , 5thFloor, Udyog Bhavan , Sector-11 , Gandhinagar', '72.64616110', '23.21927200'),
(64, '', '', '', 'Joint Assistant Centre  C7 / 150, Lawrence Road,  Keshav Puram, Delhi-110035', '77.15144440', '28.68481310'),
(65, '', '', '', '101 Wakefield House Sprott Road, Ballard Estate Mumbai 400 001 ', '72.84037290', '18.93437740'),
(66, '', '', '', 'Ranga Reddy district, Telangana, India', '0.00000000', '0.00000000'),
(67, '', '', '', '', '0.00000000', '0.00000000'),
(68, '', '', '', '', '0.00000000', '0.00000000'),
(69, '', '', '', 'Kalyan Nagar, 112/147, Chikkatayappa Reddy Layout, Chelekere, Bangalore, Karnataka 560043, India', '77.64102810', '13.02697880'),
(70, '', '', '', 'Gandhi Ashram Ahmedabad Gujarat- 380 027 INDIA', '72.58088680', '23.06077230'),
(71, '', '', '', 'Mata Amritanandamayi Math, Amritapuri.p.o, Kollam, Kerala, India', '76.48713800', '9.08934100'),
(72, '', '', '', 'Navajivan Trust Ahmedabad - 380014  Gujarat, India ', '72.56600450', '23.03956770'),
(73, '', '', '', 'Patan – 384265, North Gujarat', '72.12662550', '23.84932460'),
(74, '', '', '', 'Shree Patan Jain Mandal  77, Patan Jain Mandal Marg,  Marine Drive, Mumbai-400020', '72.82393070', '18.93978310'),
(75, '+911166564800', '', '', 'WHO Country Office Rooms 533-537, ', '73.00773650', '26.26956270'),
(76, '+9111237164412', '', '', '1, Red Cross RoadNew Delhii 110001INDIA', '77.21115730', '28.61838240'),
(77, '+912022325784', '', '', '', '0.00000000', '0.00000000'),
(78, '+913326541144', '', '', 'P.O. Belur Math-711202Dist Howrah, West Bengal.', '88.35589120', '22.63218530'),
(79, '18001031777', '', '', 'D-22, Sector 3Noida – Uttar Pradesh', '77.31831800', '28.58210900'),
(80, '+01130882008', '', '', '808/92 Deepali Building Nehru PlaceNew Delhi- 110019', '77.25287900', '28.54866800'),
(81, '+911125516383', '', '', '308, Mahatta TowerB Block Community Centre, Janakpuri New Delhi - 110058', '77.08826950', '28.62174260'),
(82, '+911141354545', '', '', 'UNAIDS Secretariat 20,  Geneva', '6.14229610', '46.19839220'),
(83, '+91674582377', '', '', 'ORISSA DISASTER MITIGATION MISSION CONTROL ROOM DRTC, (Near XIM,B Square, CYSD) BHUBANESWAR ORISSA ', '85.82453980', '20.29605870'),
(84, '+911140640500', '', '', 'R 7, Hauz Khas Enclave,New Delhi 110016', '77.20099320', '28.54795580'),
(85, '+418059644767', '', '', 'Direct Relief HQ27 S. La Patera LaneGoleta, CA 93117 USA', '-119.86966910', '34.43016560'),
(86, '+410229172010', '', '', 'Palais des Nations,8-14 Avenue de la Paix,1211, Geneva, Switzerland', '6.13974500', '46.22426970'),
(87, '+911149010000', '', '', 'AISF Building, First floor,Amar Colony, Lajpat Nagar -IV,New-Delhi-110024,India', '77.24267900', '28.56173180'),
(88, '+1114046530790', '', '', 'CDC Foundation55 Park Place NE, Suite 400Atlanta, Georgia 30303', '-84.38837170', '33.75571100'),
(89, '+419095584540', '', '', 'Adventist Health International11060 Anderson St.Loma Linda, CA 92350', '-117.26337600', '34.05241490'),
(90, '+390665131', '', '', 'World Food Programme, 2 Poorvi Marg, Vasant Vihar, New Delhi 110057', '77.16713690', '28.56099280'),
(91, '+3108267800', 'inquiry@internationalmedicalcorps.org', 'inquiry@internationalmedicalcorps.org', '12400 Wilshire Blvd.Suite 1500Los Angeles, CA 90025', '-118.46982790', '34.04175040'),
(92, '+12024952700', '', '', '1400 Eye StreetSuite 600Washington, DC 20005', '-77.03225680', '38.90103490'),
(93, '+41587911700', '', '', 'Geneva SecretariatChemin de Blandonnet 81214 VernierGeneva, Switzerland', '6.14229610', '46.19839220'),
(94, '+911143509999', '', '', 'National AIDS Control OrganisationDepartment of Health & Family WelfareGovernment of India6th & 9th Floor, Chanderlok Building36, Janpath, New Delhi, India', '77.21895940', '28.62781720'),
(95, '', '', '', 'C-106Defence ColonyNew Delhi 11 00 24', '77.23282160', '28.56615860'),
(96, '', '', '', 'Indian Red Cross Society     1, Red Cross Road   New Delhi 110001  INDIA', '77.21044960', '28.61821570'),
(97, '', '', '', 'World Food Programme, 2 Poorvi Marg, Vasant Vihar, New Delhi 110057', '77.16713690', '28.56099280'),
(98, '', '', '', 'National Office16,VOC Main Road, Kodambakkam,Chennai - 600 024', '80.18986880', '13.07912520'),
(99, '', '', '', '189, Jodhpur Park, Ground Floor    Kolkata - 700068    West Bengal, India', '88.36399860', '22.50581750'),
(100, '', '', '', 'E-46/12, Okhla Industrial Area - Phase II, New Delhi, India-110020 ', '77.26849200', '28.53578200'),
(101, '', '', '', 'Oxfam India, Shriram Bharatiya Kala Kendra 4th and 5th Floor 1, Copernicus Marg New Delhi-110001', '77.22677700', '28.62107000'),
(102, '', '', '', 'BlazeAid Inc 70 Kilmore East Rd Kilmore East, Victoria 3764', '144.98438700', '-37.28949700'),
(103, '', '', '', '', '0.00000000', '0.00000000'),
(104, '', '', '', '', '0.00000000', '0.00000000'),
(105, '', '', '', '', '0.00000000', '0.00000000'),
(106, '', '', '', 'NDMA Bhawan, A-1, Safdarjung Enclave, New Delhi - 110029', '77.19687890', '28.56352180'),
(107, '', '', '', 'India Development and Relief Fund 5821 Mossrock Drive North Bethesda, MD 20852-3238 USA', '-77.11827400', '39.03781600'),
(108, '', '', '', '908 The East Mall, 1st Floor Toronto, Ontario, M9B 6K2, Canada ', '-79.57198170', '43.67001800'),
(109, '', '', '', 'RAMAKRISHNA MATH & RAMAKRISHNA MISSION,BELUR MATH-711202, WEST BENGAL, INDIA.', '88.35550250', '22.62638060'),
(110, '', '', '', 'Regd.Off. : 202, Embassy Center,  Nariman Point Mumbai- 400 009', '72.82422210', '18.92557280'),
(111, '', '', '', '#261, SRK Complex,  CTH Road, Avadi,  Chennai – 600 054, Tamilnadu, INDIA.', '78.65689420', '11.12712250'),
(112, '', '', '', 'R 7, Hauz Khas Enclave,New Delhi 110016', '77.20099320', '28.54795580'),
(113, '', '', '', 'Big Yellow Offices,         111 Whitby Road,         Sloughz, SL1 3DR', '-0.61306470', '51.51724300'),
(114, '', '', '', 'Pragya India   83, Sector-44 Institutional Area                                        Gurgaon-122003,Haryana, India', '77.04061470', '28.44436830'),
(115, '', '', '', 'International  Association for Human Values, VVMVP Campus, 21st Km, Kanakapura Road,  Udaipura, Bangalore - 560082, Karnataka, India', '77.50515010', '12.79301290'),
(116, '', '', '', '1, Red Cross Road New Delhii 110001 INDIA ', '77.21044960', '28.61821570'),
(117, '', '', '', ' 45 Kusum Marg,  DLF, 1Gurgaon HR, 122002', '77.10346550', '28.47584360'),
(118, '', '', '', 'Indo-Global Social Service Society   28, Institutional Area, Lodhi Road,   New Delhi-110003  ', '77.22758230', '28.58849330'),
(119, '', '', '', 'Viswas Bhavan, Kundukulam Road, Mannuthy P.O Thrissur Kerala 680651 India', '76.26239450', '10.55019850');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
