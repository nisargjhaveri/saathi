-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 06:13 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `home_country`, `founded`, `logo`, `description`, `contact_id`) VALUES
(1, 'FEMA', 'USA', '1979', '', 'FEMA’s mission is to support citizens and first responders to ensure that as a nation we work together to build, sustain and improve our capability to prepare for, protect against, respond to, recover from and mitigate all hazards.', 3),
(2, 'BLAZEAID', 'Australia', '2009', '', 'Out of the ashes of Black Saturday 2009 came an urgent need for fences to be rebuilt and communities restored.Thus, BlazeAid was born.', 4),
(3, 'Queensland Fire and Emergency Services', 'New Zealand', '1860', '', 'The QFES aims to protect person, property and the environment through the delivery of emergency services, awareness programs, response capability and capacity (preparedness), and incident response and recovery for a safer Queensland.\r\n', 5),
(4, 'Fire and Disaster management agency', 'Japan', '1980', '', 'Fire and Disaster Management Agency will contribute to the construction of a society where each person has a strong sense of fire defense and disaster prevention and where it will not staggered by a disaster. We will continue to strive to minimize loss of life and injury during various disasters including fires, earthquakes, storms and floods, always giving the first priority to people''s lives.\r\n', 6),
(5, 'Fire Protection Association', 'UK', '1946', '', 'The Fire Protection Association (FPA) is the UK''s national fire safety organisation and we work to identify and draw attention to the dangers of fire and the means by which their potential for loss is kept to a minimum.\r\n', 7),
(6, 'Center for disaster risk and Crisis Management', 'Nigeria', '2006', '', 'Came into existence as a result of a dire need of an indigenous organization which will harness local, national and foreign resources to reduce risks and manage disasters in Nigeria having in mind the increasing profile of both natural and human induced disasters in the country.\r\n', 8),
(7, 'Fire Rescue Development Programme', 'Italy', '1997', '', 'The Fire Rescue Equipment Exchange (F.R.E.E.) project was created to collect and utilize fire equipment and supplies that are no longer of use to western fire departments, and redistribute that equipment in developing and war-torn countries.\r\n', 9),
(8, 'North Yorkshire Fire and Rescue Service', 'North Yorkshire', '2000', '', 'We provide an emergency response service to fire and other emergencies, including road traffic collisions, chemical spillages and flooding. Although not a legal duty, the service will respond to any potentially life threatening incident at the time of call.\r\n', 10),
(9, 'GFP Fire Emergency Services', 'USA', '1988', '', 'GFP is an emergency response company focused on catastrophe management, remote base camp and fire suppression solutions. We are a company of more than 450 first responders (Firefighters, EMTs, security, ex-military) trained in the Incident Command System and supported by experienced operations and logistics professionals.\r\n', 11),
(10, 'ACT Rural Fire Service (ACTRFS)', 'Australia', '2000', '', 'The ACT Rural Fire Service (ACTRFS) is responsible for protecting life, property and the environment from all bush and grass fires that occur within rural areas or non-suburban of the ACT.\r\nThe ACTRFS has both volunteer brigades and a brigade of TAMS employees who work together responding to bush and grass fires, and conducting hazard reduction burning to mitigate against the fire threat to the ACT.', 12),
(11, 'International Association of Fire Fighters', 'USA', '1918', '', 'The IAFF was formed in 1918 to unite fire fighters—for better wages, improved safety, and greater service for their communities.', 13),
(12, 'ACT Fire & Rescue', 'Australian Captial Teritory (ACT)', '2000', '', '"The Australian Capital Territory Fire & Rescue is a diverse organisation with legislated responsibility in a variety of areas related to fire and rescue.\r\nFirefighters in the ACT provide many functions ranging from fire suppression to rescue capabilities to community safety activities."\r\n', 14),
(13, 'National Association of Fire Equipment Disributors', 'USA', '1963', '', 'The National Association of Fire Equipment Distributors (NAFED) was established in 1963 with the mission of continuously improving the economic environment, business performance, and technical competence in  the fire protection industry. Today, this association continues to operate with the principal objective of gathering and disseminating information and ideas that will improve the world''s fire protection and increase the fire protection industry''s competence.', 15),
(14, 'International Association For Fire Safety Science', 'England', '2000', '', 'IAFSS was founded with the primary objective of encouraging research into the science of preventing and mitigating the adverse effects of fires and of providing a forum for presenting the results of such research.The International Association for Fire Safety Science perceives its role to lie in the scientific bases for achieving progress in unsolved fire problems. It will seek cooperation with other organizations, be they concerned with application or with the sciences that are fundamental to our interests in fire.\r\n', 16),
(15, 'Society of Fire Protection Engineers', 'USA', '1971', '', 'The Society of Fire Protection Engineers was established in 1950 and incorporated as an independent organization in 1971. \r\nIt is the professional society representing those practicing the field of fire protection engineering. The Society has over 4500 members globally and over 60 regional chapters.The purpose of the Society is to advance the science and practice of fire \r\nprotection engineering and its allied fields, to maintain a high ethical standard among \r\nits members and to foster fire protection engineering education.', 17),
(16, 'Trishul(NGO)', 'INDIA', '1996', '', 'A registered charitable organisation working towards building self-sustainable communities in slums, urban andeconomically backward rural villages as well as environment conservation for almost two decades.A Community Based Disaster Risk Management Program to organize people in the community for disaster preparedness.\r\n', 18),
(17, 'Department of Disaster Management & Rehabilitation', 'INDIA', '2000', '', 'The main activities/functions of the department was giving immediate relief to the victims of natural calamities.The purview of the department has been further expanded towards Disaster Risk Management as Mizoram falls under seismic Zone.\r\n', 19),
(18, 'Ramakrishna Math and Ramakrishna Mission', 'INDIA', '1897', '', 'Ramakrishna Mission and Math have together conducted hundreds of relief works in India, Burma, Bangladesh and Sri Lanka, during calamities and hardships issuing from such a variety of causes as famines, floods, fires, epidemics, cyclones, tornados, riots, earth­quakes, landslides and droughts. Relief works for evacuees and refugees were carried out on a very large scale during some of the worst national calamities\r\n', 20),
(19, 'Fire & Security Association of India (FSAI)', 'INDIA', '2000', '', 'FIRE & SECURITY ASSOCIATION OF INDIA (FSAI) is a non-profit organization representing the Fire Protection, Life Safety, Security, Building Automation, Loss Prevention and Risk Management domains.Its primary aims and objectives are  to foster a spirit of safe living among all citizens of India and inculcate a proactive mind-set towards safety and security at all times, to foster fire safety and security engineering education and awareness.', 21),
(20, 'Fire Protection Association Of India', 'INDIA', '1999', '', 'Fire Protection Association of India was created  to take up issues related to Fire Protection Industry in India. Fire Protection Association of India was registered under Public trust Act. Over the years the Fire Protection Association of India has been taking up issues related to Fire Protection Industry. We regularly conduct Board meetings, general Body Meetings as well as take up issues related to the Industry through advisory and Consultative process. \r\n', 22),
(21, 'Delhi Fire Service (DFS) ', 'INDIA', '1942', '', 'Delhi Fire Service (DFS) is the state-owned service that attends fire/rescue calls in the National Capital Territory of Delhi in India. The service consists of 53 fire stations and 3616 personnel (3280 firefighters, 289 mechanics), and attends to 22,000 fire and rescue calls on an average every year.The administrative control of The Delhi Fire Service rests with the Government of National Capital Territory of Delhi. The average number of fire/rescue calls attended by DFS is much more than any other metropolitan fire services in India.\r\n', 23),
(22, 'Institute of Fire Engineers', 'INDIA', '1973', '', 'The Institution of Fire Engineers (India) was established on the recommendations of the standing \r\nFire Advisory Council constituted by the Chiefs of Fire Services in India and headed \r\nby DG, NDRF & CD, Ministry of Home Affairs, Govt. of India. \r\nThe Institution was founded in the year 1973 as a premier non-government organization (NGO) \r\nand professional body registered under the Societies \r\nAct, 1860 as resolved ', 24),
(23, 'Mumbai Fire Brigade', 'INDIA', '1887', '', 'The Mumbai Fire Brigade is the fire brigade serving the city of Mumbai, Maharashtra. It is responsible for the provision of fire protection as well as responding to building collapses, drownings, gas leakage, oil spillage, road and rail accidents, bird and animal rescues, fallen trees and taking appropriate action during natural disasters.', 25),
(24, 'MAHARASHTRA FIRE SERVICES ', 'INDIA', '1887', '', 'Maharashtra Government decided to bring in uniformity of rules & set up a post of Fire Advisor to the Government in 1954. \r\nThe subject of Fire Services in the State of Maharashtra is vested with the Urban Local Bodies. Accordingly the provisions exist in the Bombay Municipal Corporation Act, 1888, Maharashtra Provincial Municipal Corporation Act, 1949 maintained as the Maharashtra Regional Town and Industrial Township Planning Act 1966.', 26),
(25, 'Airport Rescue and Fire Fighting (ARFF)', 'INDIA', '2000', '', 'To provide excellent Rescue and Fire Fighting Services to save life and property at AAI Airports.\r\nTo impart emergency response training to Rescue and Fire Fighters to update their professional skills and knowledge.\r\nTo meet the deficiency of trained Fire Personnel as well as to upgrade the professional skills and human behavior in Fire Services.', 27),
(26, 'CENTRE FOR FIRE SAFETY MANAGEMENT & TRAINING', 'INDIA', '2000', '', 'The institute provides a training program including introduction of computer, personality development and first aid to the injured, besides other relevant subject of Fire Science.\r\nSpecial care is taken to insure that the students get a working knowledge of computer Application and Network Application skill. In depth knowledge is imparted in the field of Paramedic Science and First Aid to injured in Collaboration with Red Cross St. Johns Ambulance Organization', 28),
(27, 'National Disaster Management Authority(NDMA)', 'INDIA', '2000', '', 'To build a safer and disaster resilient India by a holistic, pro-active, technology driven and sustainable development strategy that involves all stakeholders and fosters a culture of prevention, preparedness and mitigation.', 29),
(28, 'National Institute of Disaster Management', 'INDIA', '1995', '', 'The National Institute of Disaster Management (NIDM) was constituted under an Act of Parliament with a vision to play the role of a premier institute for capacity development in India and the region. Under the Disaster Management Act 2005, NIDM has been assigned nodal responsibilities for human resource development, capacity building, training, research, documentation and policy advocacy in the field of disaster management\r\n', 30),
(29, 'NDRF', 'INDIA', '2006', '', 'The DM Act has made the statutory provisions for constitution of National Disaster Response Force (NDRF) for the purpose of specialized response to natural and man-made disasters\r\n', 31),
(30, 'INDIAN RED CROSS SOCIETY', 'INDIA', '1920', '', 'The Mission of the Indian Red Cross is to inspire, encourage and initiate at all times all forms of humanitarian activities so that human suffering can be minimized and even prevented and thus contribute to creating more congenial climate for peace.\r\n', 32),
(31, 'National Safety Council (NSC)', 'INDIA', '1966', '', 'To fulfill its objective NSC carries out various activities. These include organising and conducting specialised training courses, conferences, seminars & workshops; conducting consultancy studies such as safety audits, hazard evaluation & risk assessment; designing and developing HSE promotional materials & publications; facilitating organisations in celebrating various campaigns e.g. Safety Day, Fire Service Week, World Environment Day. A computerised Management Information Service has been setup for collection, retrieval and dissemination of information on HSE aspects.\r\n', 33),
(32, 'Fire & Emergency Services, Assam', 'INDIA', '1956', '', 'Fire Fighting in case of fire accidents.\r\nTo save life & property of all citizens in case of fire hazards and in other natural calamities.\r\nFire prevention & protection of all buildings, industries, commercial & public places etc.\r\nInspection of all high-rise buildings & other establishments & assess their Fire preventiveness ', 34),
(33, 'Institute Fire Safety Management ', 'INDIA', '2000', '', 'Institute of FIRE & SAFETY has introduce FIRE SAFETY COURSES Certificate, Diploma & PG Diploma courses NITMs Society has plan to introduce at least 100 center in NORTH INDIAN STATES to provide Full Time Courses and Fire Safety Courses.Safety in an important part of all kind of industries whether it is small or big. \r\n', 35),
(34, 'Directorate of Fire & Emergency Services', 'INDIA', '2000', '', 'Fire has been viewed as a force both beneficent and destructive.The role of public fire protection service is to save life and property from fire and allied incidents and to minimize the outbreak of fires and its consequential loss within the jurisdiction of its responsibilities.', 36),
(35, 'West Bengal Fire And Emergency Services', 'INDIA', '2000', '', 'FIRE BRIGRADE is maintained for the purpose of extinguishing fire and protecting lives and property in case of fire and for rescue purposes in connection with any emergency like building collapse, road traffic accidents, human and animal rescue from a well etc. It is also an emergency support function during any disaster. The role of fire services also includes effective fire prevention, creating awareness on fire safety', 37),
(36, 'Fire And Emergency Services Jammu Kashmir', 'Jammu, INDIA', '2000', '', 'To Safeguard life and property of common masses,Fire fighting and mitigation of losses in fires even during Fidayeen attacks, cross firing, bomb/ mine blasts,Rescue during floods/ flash floods;', 38);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
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
