-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 10:58 AM
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
-- Table structure for table `organisations`
--

CREATE TABLE IF NOT EXISTS `organisations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `home_country` varchar(255) NOT NULL,
  `founded` varchar(255) NOT NULL,
  `logo` longblob NOT NULL,
  `description` text NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `home_country`, `founded`, `logo`, `description`, `contact_id`) VALUES
(166, 'World Health Organization', 'Switzerland', '1948', '', 'The World Health Organization, the United Nations specialized agency for health. WHO is the directing and coordinating authority for health within the United Nations system. It is responsible for providing leadership on global health matters, shaping the health research agenda, setting norms and standards, articulating evidence-based policy options, providing technical support to countries and monitoring and assessing health trendsIndian HQ- New Delhi', 95),
(167, 'Indian Red Cross Society', 'India', '1863', '', 'The IRCS is very active in the prevention Of HIV / AIDS. It trains youth to disseminate information about the prevention of HIV / AIDS through Youth Peer Education Programme. It also has programmes and projects for children of HIV positive mothers, to provided comprehensive care.', 94),
(168, 'GlobalGiving', 'USA', '2002', '', 'GlobalGiving is a charity fundraising web site that gives social entrepreneurs and non-profits from anywhere in the world a chance to raise the money that they need to improve their communities. They run projects and organizations that are working to educate children, feed the hungry, build houses, train women (and men) with job skills', 93),
(169, 'Ramakrishna Math & Ramakrishna Mission', 'India', '1897', '', 'The Ramakrishna Math and the Ramakrishna Mission have been ever ready to promptly organize ameliorative and healing services whenever the nation has been faced with sudden calamities caused by freaks of nature, follies of men, or scourges of epidemics.', 92),
(170, 'Relief India Trust', 'India', '2000', '', 'All the support and indoctrination required are offered by Relief India Trust while addressing epidemics related to AIDs and HIV. To agencies in the private sector, governments of developing nations and non-government organizations, the Trust provides white-collar and technical assistance as well as all-embracing training. The Trust also designs, manages and evaluates all-inclusive prevention of HIV and AIDS.', 91),
(171, 'Emmanuel Hospital Association', 'India', '1970', '', 'Emmanuel Hospital Association (EHA) was founded in 1970 as an indigenous Christian health and development agency serving the people of North India.', 90),
(172, 'THE EVANGELICAL FELLOWSHIP OF INDIA COMMISSION ON RELIEF', 'India', '2000', '', 'EFICOR helps rebuild lives of disaster affected communities in line with international humanitarian standards , i.e., Red Cross Code of Conduct, Sphere International and HAP Standards. EFICOR advocates on Right to Aid in Relief, at local, regional, national and international levels through various networks.', 89),
(173, 'UNAIDS', 'Switzerland', '1994', '', 'The mission of UNAIDS is to lead, strengthen and support an expanded response to HIV and AIDS that includes preventing transmission of HIV, providing care and support to those already living with the virus, reducing the vulnerability of individuals and communities to HIV and alleviating the impact of the epidemic. UNAIDS seeks to prevent the HIV/AIDS epidemic from becoming a severe pandemic.', 88),
(174, 'ORISSA DISASTER MITIGATION MISSION', 'India', '2000', '', 'The health teams comprising of a doctor, paramedic and volunteers are moving to different locations to provide relief to the ailing people and check the spread of epidemics in the affected areas. The health teams from ODMM and AIIMS are stationed in Ersama and moving to different Gram Panchayats to provide health services to the community. Doctors from AIIMS have split into four groups under the arrangements of Orissa Volunteer Health Association (OVHA).', 87),
(175, 'ActionAid', 'USA', '1972', '', 'Over the past five years, ActionAid has responded to 87 significant natural disaster in countries where we work, affecting reaching approximately 7 million people.', 86),
(176, 'Direct Relief', 'USA', '1948', '', 'Direct Relief works to improve the health of people living in high-need areas by strengthening fragile health systems and increasing access to quality health care in 70 countries around the world. Direct Relief supports health professionals in developing countries combat high-burden communicable and non-communicable diseases that affect the health and wellbeing of the people they serve. To achieve this goal, Direct Relief partners with local health providers, leading healthcare companies, and business leaders, to deliver medicines, medical supplies and equipment through transparent, reliable, and cost-effective channels.', 85),
(177, 'UNDAC', 'Switzerland', '1993', '', 'The United Nations Disaster Assessment and Coordination (UNDAC) is part of the international emergency response system for sudden-onset emergencies. Recently UNDAC has deployed members in Liberia to help coordinating the response for the Ebola outbreak. The UNDAC team in Liberia provides support to the Government in the relief efforts, and helps coordinate the humanitarian actors on the ground and the inter-cluster mechanism.', 84),
(178, 'Doctors without Borders', 'Holland', '1971', '', 'Doctors Without Borders / Médecins Sans Frontières (MSF)  is an international humanitarian aid organisation that provides emergency medical assistance to populations in danger in more than 65 countries. MSF has been setting up emergency medical aid missions around the world since 1971.', 83),
(179, 'CDC Foundation', 'USA', '1995', '', 'The Centers for Disease Control and Prevention is the leading national public health institute of the United States. The CDC is a federal agency under the Department of Health and Human Services. Established by Congress as an independent, nonprofit organization, the CDC Foundation connects the Centers for Disease Control and Prevention (CDC) with private-sector organizations and individuals to build public health programs that make our world healthier and safer.', 82),
(180, 'Adventist Health International', 'USA', '2000', '', 'Adventist Health International is a management organization committed to partnering with health care services in developing countries.', 81),
(181, 'World Food Programme', 'Italy', '1961', '', 'The World Food Programme is the food assistance branch of the United Nations and the world''s largest humanitarian organization addressing hunger and promoting food security. The objective is to prevent a health crisis from becoming a food crisis. The WFP works to help people who are unable to produce or obtain enough food for themselves and their families.', 80),
(182, 'International Medical Corps', 'USA', '1984', '', 'International Medical Corps is widely recognized as a pre-eminent first responder with a global reach, delivering humanitarian relief to individuals and communities in need for more than three decades. Such work depends on trained, experienced personnel, and we maintain an active roster of experts with skills in emergency response operations.Combined with pre-positioned stocks of essential supplies, and ongoing partnerships with both international and local aid groups, we maintain the needed surge capacity to respond to emergencies in the most challenging environments.', 79),
(183, 'ONE campaign', 'USA', '2002', '', 'ONE is an international campaigning and advocacy organization of more than 6 million people taking action to end extreme poverty and preventable disease. Cofounded by Bono, we raise public awareness and work with political leaders to combat AIDS and preventable diseases, increase investments in agriculture and nutrition.', 78),
(184, 'The Global Fund', 'Switzerland', '2002', '', 'The Global Fund is a 21st-century organization designed to accelerate the end of AIDS, tuberculosis and malaria as epidemics.Working together, we have saved millions of lives and provided prevention, treatment and care services to hundreds of millions of people, helping to revitalize entire communities, strengthen local health systems and improve economies.', 77),
(185, ' National AIDS Control Organisation (NACO)', 'India', '1992', '', 'NACO is a division of India''s Ministry of Health and Family Welfare that provides leadership to HIV/AIDS control programme in India through 35 HIV/AIDS Prevention and Control Societies, and is the nodal organisation for formulation of policy and implementation of programs for prevention and control of HIV/AIDS in India.', 76),
(186, 'MSF India', 'India', '1996', '', 'MSF India is a humanitarian aid organisation that provides emergency medical assistance to populations in danger .', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`), ADD KEY `organisatios_ibfk_1` (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=187;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `organisations`
--
ALTER TABLE `organisations`
ADD CONSTRAINT `organisatios_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
