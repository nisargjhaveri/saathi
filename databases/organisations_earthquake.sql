-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 07:41 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `home_country`, `founded`, `logo`, `description`, `contact_id`) VALUES
(37, 'National Disaster Management Authority (NDMA)', 'INDIA', '2005', '', 'National Disaster Management Authority (NDMA) is an agency of the Ministry of Home Affairs whose primary\r\npurpose is to coordinate response to natural or man-made disasters and for capacity-building in disaster \r\nresiliency and crisis response.NDMA was established through the Disaster Management Act enacted by\r\n the Government of India in December 2005.The Prime Minister is the defacto chairperson of NDMA. \r\nThe agency is responsible for framing policies, laying down guidelines and best-practices and coordinating \r\nwith the State Disaster Management Authorities (SDMAs) to ensure a holistic and distributed approach to \r\ndisaster management.', 39),
(38, 'FEMA', 'U.S.A.', '1978', '', 'FEMA’s mission is to support our citizens and first responders to ensure that as a nation we work together\r\n to build, sustain and improve our capability to prepare for, protect against, respond to, recover from and \r\nmitigate all hazards.', 40),
(39, 'WHO', 'Switzerland', '1948', '', 'WHO is the directing and coordinating authority for health within the United Nations system. It is responsible \r\nfor providing leadership on global health matters, shaping the health research agenda, setting norms and \r\nstandards, articulating evidence-based policy options, providing technical support to countries and monitoring \r\nand assessing health trends.', 41),
(40, 'American Red Cross  (ARC)', 'U.S.A.', '1881', '', 'The American Red Cross (ARC), also known as the American National Red Cross, is a humanitarian \r\norganization that provides emergency assistance, disaster relief and education inside the United States. \r\nIt is the designated U.S. affiliate of the International Federation of Red Cross and Red Crescent Societies.', 42),
(41, 'India Development and Relief Fund (IDRF)', 'India', '1988', '', 'India Development and Relief Fund (IDRF) is an American nonprofit which supports grassroots development \r\nprojects implemented by Indian NGOs.The organization works on education, healthcare, ecofriendly \r\ndevelopment, women’s empowerment, governance, and disaster rehabilitation; in 2012, it funded its first \r\nproject in Nepal Dr. Vinod Prakash, a former World Bank economist, and his wife Sarla Prakash founded \r\nIDRF in 1988. There has been controversy over the way the funds were used.', 43),
(42, 'International Organization for  Migration', ' Switzerland', '1951', '', 'IOM works to help ensure the orderly and humane management of migration, to promote international\r\n cooperation on migration issues, to assist in the search for practical solutions to migration problems and \r\nto provide humanitarian assistance to migrants in need, including refugees and internally displaced people.', 44),
(43, 'United Nations Development  Programme(UNDP)', 'U.S.A.', '1965', '', 'UNDP advocates for change and connects countries to knowledge, experience and resources to help people \r\nbuild a better life. It provides expert advice, training, and grant support to developing countries, with increasing\r\n emphasis on assistance to the least developed countries.UNDP works to reduce the risk of armed conflicts or \r\ndisasters, and promote early recovery after crisis have occurred.', 45),
(44, 'Dasra', 'India', '2000', '', 'Dasra''s strategic approach to social problems has dramatically increased the impact and scale of social change \r\nin India. Till date; we have directed over USD $37 million in funding commitments to help scale promising \r\nnonprofits and social businesses to positively impact thousands of lives. Our success lies with our unique \r\nability to work with both philanthropists and social entrepreneurs and bring together knowledge, funding \r\nand people to catalyze social change.', 46),
(45, 'Lions Clubs International', 'U.S.A', '1917', '', 'Much of the focus of Lions Clubs International work as a service club organization is to raise money for worthy \r\ncauses. All funds raised by Lions Clubs from the general public are used for charitable purposes, and \r\nadministrative costs are kept strictly separate and paid for by members. Some of the money raised for a club’s \r\ncharity account goes toward projects that benefit the local community of an individual club.', 47),
(46, 'Office for the Coordination of  Humanitarian Affairs (OCHA) ', 'USA', '2010', '', 'The United Nations Office for the Coordination of Humanitarian Affairs (OCHA) is a United Nations (UN) body\r\n formed in December 1991 by General Assembly Resolution 46/182.[1] The resolution was designed to\r\n strengthen the UN''s response to complex emergencies and natural disasters. Earlier UN organizations with \r\nsimilar tasks had been the Department of Humanitarian Affairs (DHA), and its predecessor, the Office of the \r\nUnited Nations Disaster Relief Coordinator (UNDRC). In 1998, due to reorganization, DHA merged into the \r\nOCHA and was designed to be the UN focal point on major disasters. It is a sitting observer of the United \r\nNations Development Group', 48),
(47, 'Food and Agriculture Organization', ' Italy', '1945', '', 'The Food and Agriculture Organization of the United Nations (FAO; French: Organisation des Nations unies \r\npour l''alimentation et l''agriculture, Italian: Organizzazione delle Nazioni Unite per l''Alimentazione e l''Agricoltura) \r\nis an agency of the United Nations that leads international efforts to defeat hunger. Serving both developed and \r\ndeveloping countries, FAO acts as a neutral forum where all nations meet as equals to negotiate agreements \r\nand debate policy. FAO is also a source of knowledge and information, and helps developing countries and\r\n countries in transition modernize and improve agriculture, forestry and fisheries practices, ensuring good \r\nnutrition and food security for all. Its Latin motto, fiat panis, translates as ""let there be bread"". As of\r\n 8 August 2013, FAO has 194 member states, along with the European Union (a ""member organization""),\r\n and the Faroe Islands and Tokelau, which are associate members', 49),
(48, 'United Nations Children''s Fund', 'USA', '1946', '', 'The United Nations Children’s Emergency Fund (UNICEF) works to uphold children’s rights, survival, \r\ndevelopment and protection by intervening in health, education, water, sanitation, hygiene and protection.\r\nUNICEF was created by the United Nations General Assembly on December 11, 1946, to provide emergency\r\n food and healthcare to children in countries that had been devastated by World War II. Ludwik Rajchman, \r\na Polish bacteriologist, is regarded as the founder of UNICEF and was its first chairman from 1946 to 1950.\r\n In 1953, UNICEF became a permanent part of the United Nations System and its name was shortened from \r\nthe original United Nations International Children''s Emergency Fund but it has continued to be known by the \r\npopular acronym based on this previous title.', 50),
(49, 'World Food Programme', 'Italy', '1961', '', 'The World Food Programme is the food assistance branch of the United Nations and the world''s largest \r\nhumanitarian organization addressing hunger and promoting food security. On average, the WFP provides \r\nfood to 90 million people per year, of whom 58 million are children.From its headquarters in Rome and more\r\n than 80 country offices around the world, the WFP works to help people who are unable to produce or obtain \r\nenough food for themselves and their families. It is a member of the United Nations Development Group and \r\npart of its Executive Committee.', 51),
(50, 'Japan Earthquake Relief Fund', 'Japan', '2011', '', 'On March 12, 2011, Japan Society created the Japan Earthquake Relief Fund, a disaster relief fund to aid \r\nvictims of the Great East Japan Earthquake. One hundred percent of your tax-deductible contributions to \r\nthe Japan Earthquake Relief Fund go to organizations that directly help victims of the March 11 disaster.\r\nJapan’s recovery is expected to take five years or more. With this in mind, Japan Society is working to gauge \r\nthe long-term needs of those affected by the disaster with the goal of supporting organizations that will\r\n contribute to continuing recovery and reconstruction', 52),
(51, 'Center of Excellence in Disaster  Management and Humanitarian  Assistance', 'United States', '1994', '', 'The Center for Excellence in Disaster Management and Humanitarian Assistance (CFE) is a direct reporting\r\n unit to the U.S. Pacific Command (USPACOM) and principal agency to promote disaster preparedness and\r\n societal resiliency in the Asia-Pacific region. As part of its mandate, CFE facilitates education and training in\r\n disaster preparedness, consequence management and health security to develop domestic, foreign and\r\n international capability and capacity.', 53),
(52, 'Asia Disaster Reduction Center', 'Asia', '1998', '', 'The Asian Disaster Reduction Center was established in Kobe, Hyogo prefecture, in 1998, with mission to\r\n enhance disaster resilience of the member countries, to build safe communities, and to create a society \r\nwhere sustainable development is possible. The Center works to build disaster resilient communities and to\r\n establish networks among countries through many programs including personnel exchanges in this field.', 54),
(53, 'Adventist Development and Relief  Agency International', 'USA', '1956', '', 'The Adventist Development and Relief Agency Internationa is a humanitarian agency operated by the \r\nSeventh-day Adventist Church for the purpose of providing individual and community development and \r\ndisaster relief. It was founded in 1956, and it is headquartered in Silver Spring, Maryland, United States of \r\nAmerica.In 2004, ADRA reported assisting nearly 24 million people with more than US$159 million in aid. Its \r\nstaff numbered over 4,000 members.As of the end of 2007, it had operations in 125 countries.According to \r\nForbes in 2005, ADRA ranked among America''s 200 largest charities.', 55),
(54, 'Seva Bharati', 'India', '1979', '', 'As many as 25,000 volunteers, including 600 doctors, from Seva Bharati, worked to rescue and rehabilitate \r\nthe victims of the 2001 Gujarat earthquake. Nearly 10,000 operations were performed and over 19,000 patients\r\n were treated of injuries and other ailments. Besides, the organisation sent huge amounts of relief material for \r\nthe quake-hit victims from different parts of the country', 56),
(55, '"Bochasanwasi Shri Akshar  Purushottam Swaminarayan  Sanstha (BAPS)"', 'INDIA', '1907', '', 'Relieving human suffering in times of humanitarian emergencies remains an important component of BAPS \r\nCharities’ work. Within hours after the 2001 Gujarat Earthquake, BAPS Charities volunteers began providing\r\n victims with daily hot meals, clean water, and clothing and assisted with debris removal and search and rescue\r\n missions; the organization also adopted more than 10 villages in which they rebuilt the entire community, \r\nincluding all infrastructure and thousands of earthquake-resistant homes', 57),
(56, 'CARE India', 'India', '1945', '', 'It has been two years since the January 26, 2001, earthquake in India that left death and devastation in its wake. As one of the first \r\nhumanitarian organizations to respond, CARE began providing lifesaving emergency supplies and services to four of the hardest-hit areas\r\n of Kutch District. Yet, even after basic needs were met -- and the television crews went home, CARE stayed on the scene to help\r\n survivors recover and rebuild.', 58),
(57, 'Manav Sadhna', 'India', '1995', '', 'Manav Sadhna is a non profit organization based in a quiet corner of Mahatma Gandhi’s Ashram, Ahmedabad.\r\n Our mission is simply to serve the underprivileged. At Manav Sadhna, we navigate with the philosophy of love all,\r\n serve all. By seeing God in every individual (Manav), mere service is transformed into worship (Sadhna). To this end,\r\n Manav Sadhna is engaged in constructive humanitarian projects that cut across barriers of class and religion while\r\n addressing issues faced by socio-economically neglected segments of society. In executing this mission, Manav Sadhna\r\n is guided by Mahatma Gandhi’s unshakable beliefs in love, peace, truth, non-violence and compassion.\r\n', 59),
(58, 'RAMAKRISHNA MISSION ASHRAMA ,BELGAUM', 'India', '1998', '', 'Ashram works for social issues.Had done major relief campaign during Earthquakes in Gujarat', 60),
(59, 'Indian RedCross Society', 'INDIA', '1920', '', 'The mission of the Indian Red Cross is to inspire,encourage and initiate at all \r\ntimes all forms of humanitarian activities so that human sufferings can be minimized and\r\n even prevented and this contribute to create climate for peace', 61),
(60, 'Maitri', 'India', '1997', '', 'Response to disaster: With the help of generous support from some of the corporate\r\ndonors as well as huge support from individual donors Gujarat Earthquake Relief\r\nProgram was Launched by Maitri The emphasis was clearly on housing and\r\nMAITRI has had clear policy on working directly with the victims of the disaster.\r\nProviding immediate relief and rehabilitation, environmental sanitation and housing were\r\nthe key priorities of the MAITRI Gujarat Earthquake Relief Program.', 62),
(61, 'Gujarat State Disaster Management  Authority (GSDMA)', 'India', '2001', '', 'The Government of Gujarat (GOG) established the Gujarat State Disaster \r\nManagement Authority on February 8, 2001 to co-ordinate the comprehensive earthquake \r\nrecovery program. The GSDMA is registered as a society under the Societies Registration Act', 63),
(62, 'Joint Assistance Centre, Gurgaon, Haryana', 'India', '1977', '', 'The Joint Assistance Centre (JAC) was established in New Delhi as an All India Voluntary Agency for \r\nassistance in disaster situations in 1970 in the aftermath of the terrible cyclone of November 1977 that devastated the \r\nChirala-Divi region of Andhra Pradesh, killing over 10,000 people. ', 64),
(63, 'Tata Relief Committee', 'India', '1931', '', 'On January 29, 2001, Tata Group chairman Ratan Tata appealed for donations to finance the work \r\nTRC had begun. Employees of almost every Tata company donated a day''s salary each. Their respective\r\n companies then put in a matching contribution, with some companies exceeding their employees'' contribution. \r\nThe Sir Dorabji Tata Trust donated an amount of Rs1.50 crore towards the TRC operations. \r\nThe corpus of TRC''s relief and rehabilitation fund totalled Rs9.37 crore.', 65),
(64, 'Word & Deed India', 'INDIA', '1984', '', 'Word & Deed India is a Christian Voluntary organization, established in the year 1984. Its objective is to uplift the poor, \r\ndowntrodden and abandoned people by sharing the love of our Lord Jesus Christ.Was involved in  Gujarat Earthquake relief', 66),
(65, 'ACIL - Navasarjan Rural Dev.  Foundation', 'India', '1997', '', 'ACIL involved in Gujarat Earthquake Relief & Rehabilitation efforts\r\n', 67),
(66, 'Akhil Vishwa Gayatri Parivar', 'India', '1965', '', ' Ashapura Foundation was established with an aim to carry out social, cultural and rural development activities in Kutchh District of \r\n       Gujarat state in INDIA.Kutchh is the most rural in character, consisting of about 900 villages, spread over 40,000 sq km of area,\r\n known \r\n       for its diversity of people, culture and geography. It lacks in basic amenities like water, power, communication etc. Besides that land \r\nof\r\n earthquakes, \r\ndroughts and cyclones', 68),
(67, 'Diya Jot Foundation', 'India', '1999', '', 'It was involved in Gujarat Earthquake Relief & Rehabilitation efforts. \r\nDiya Foundation (Diya) is a Vocational Training Center Cum Sheltered Workshop in Bangalore providing training and \r\nemployment to differently\r\n abled individuals. Founded in 1999, DIYA is a registered charitable trust. \r\nThe idea for the centre grew out of a growing need for vocational training once basic schooling is completed. \r\nThere were very few work options available to challenged young adults, particularly the intellectually challenged.', 69),
(68, 'Manav Sadhna', 'India', '1995', '', 'Manav Sadhna is a non profit organization based in a quiet corner of Mahatma Gandhi’s Ashram, Ahmedabad. Our mission is simply \r\nto serve the underprivileged. At Manav Sadhna, we navigate with the philosophy of love all, serve all. By seeing God in every\r\n individual (Manav), mere service is transformed into worship (Sadhna)', 70),
(69, 'Mata Amritanandmayi Math', 'India', '1981', '', 'The Mata Amritanandamayi Math is an international charitable organization aimed at the spiritual and material upliftment of humankind.\r\n It was founded by spiritual leader and humanitarian Mata Amritanandamayi in 1981,[1] with its headquarters in Paryakadavu, Alappad\r\n Panchayat, Kollam District, Kerala. Along with its sister organization, the Mata Amritanandamayi Mission Trust, MAM conducts \r\ncharitable work including disaster relief, healthcare for the poor, environmental programs, fighting hunger and scholarships for \r\nimpoverished students, amongst others', 71),
(70, 'Navjeevan Trust', 'INDIA', '1946', '', 'Founded by Mahatma Gandhi, Navajivan Trust is a publishing house of great repute having to its credit publications of more than 800\r\n titles in English, Gujarati, Hindi and other languages so far.', 72),
(71, 'Patan Jain Mandal', 'India', '1912', '', 'Shree Patan Jain Mandal was established on December 16, 1912, as a Social Charitable organization with the objective of serving the\r\n Patan Jain Community. For over 100 years, Patan Jain Mandal continues to serve the community by way of providing sahay for\r\n Education, Medical, Food, Housing, Community Development, and other areas through its various programmes. The day-to-day activities\r\n of the Mandal are managed from their office in Mumbai through individual committee set up for each activity; these include Atithi\r\n Committee, Education Committee, Jivan Committee, Medical & Seva Committee, Program Committee, Samaj Vikas Committee,\r\n Sampadak, Sports Committee, Vidhyalaya Committee and Viklang Committee. ', 73),
(72, 'Yuvak Paristhan', 'India', '1980', '', 'Yuvak Pratisthan and Cocoon Fertility have teamed to raise public awareness and understanding about the infertility. This is a first of\r\n sorts to be done in India to provide important fertility related information to the public.The programme has been organized on the 22\r\n February 2014, 2 to 6 pm at Balaji Hall (Gopuram Hall) Purshottam Kheraj Estate. Dr. R.P. Road, Next to Gyan Sarita School Mulund\r\n (W) Mumbai 80', 74);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
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
