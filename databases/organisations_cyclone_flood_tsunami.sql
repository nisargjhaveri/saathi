-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 11:38 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `home_country`, `founded`, `logo`, `description`, `contact_id`) VALUES
(187, 'India Red Cross Society', 'India', '1863', '', 'The Red Cross responds to approximately 70,000 disasters in the United States every year, ranging from home fires that affect a single family to hurricanes that affect tens of thousands, to earthquakes that impact millions. In these events, the Red Cross provides shelter, food, health and mental health services to help families and entire communities get back on their feet. Although the Red Cross is not a government agency, it is an essential part of the response when disaster strikes. We work in partnership with other agencies and organizations that provide services to disaster victims.', 96),
(188, 'World Food Programme', 'Delhi', '1961', '', 'The World Food Programme is the world''s largest humanitarian agency fighting hunger worldwide.In emergencies, we get food to where it is needed, saving the lives of victims of war, civil conflict and natural disasters. After the cause of an emergency has passed, we use food to help communities rebuild their shattered lives. WFP is part of the United Nations system and is voluntarily funded.\r\n', 97),
(189, 'World Vision India', 'India', '1958', '', 'World Vision is a Christian humanitarian organization dedicated to working with children, families, and their communities worldwide to reach their full potential by tackling the root causes of poverty and injustice.\r\n', 98),
(190, 'Lutheran World Service', 'India', '1950', '', 'LWR promotes sustainabledevelopment by helping communities increase the quality of life, engage in FairTrade, and be better equipped to handle emergencies.  LWR began working in India in the 1950s by sending relief supplies to address the needs of those affected by famine and disease.\r\n LWR’s work has evolved significantly over time to focus on long-term \r\ndevelopment needs. LWR’s approach in India focuses on breaking the cycle\r\n of poverty for the most marginalized populations, including tribals, \r\nDalits and women, through agriculture, climate change and emergency \r\noperations programs. LWR works in partnership with Indian civil society \r\ngroups in Bihar state.', 99),
(191, 'CARE India', 'India', '1946', '', 'The vision and mission of CARE India guide us towards our goal of overcoming poverty, and ensuring a life of dignity and security for the marginalized populations. We focus on women and girls to enable them to realise their rigths, avail resources and opportunities, fight social injustice, develop leadership capabilities and build a better future for themselves.\r\n', 100),
(192, 'OXFAM', 'India', '2000', '', 'Oxfam India works to address root causes of poverty and inequality. We see poverty as a problem where people are deprived of opportunities, choices, resources, knowledge and protection. Poverty is something more than mere lack of income, health and education. It is also people''s frustration on being excluded from decision-making. While the Universal Declaration of Human Rights is the guiding framework under which Oxfam India functions, we also derive our mandate from the Constitutional Rights promised to every citizen of the country.\r\n', 101),
(193, 'Blazeaid', 'Australia', '2009', '', 'BlazeAid is a volunteer-based organisation that works with families and individuals in rural Australia after natural disasters such as fires and floods.\r\n', 102),
(194, 'PlanIndia', 'India', '2000', '', 'Plan in India is part of Plan International, one of the world''s largest community development organisations. Plan’s vision is of a world in which all children realise their full potential in societies which respect people’s rights and dignity. Plan is independent, with no religious, political or governmental affiliations.\r\n', 103),
(195, 'MAP', 'USA', '1954', '', 'While "MAP" historically stood for "Medical Assistance Programs," our work has long since expanded beyond medical assistance. Today, our nonprofit aims to empower individuals and families living in poor communities so that they are able to create their own solutions to improve their own health and development. This is what we call Total Health—the capacity for people to work together and transform their situation in a sustainable way so they can advance their physical, emotional, social, economical, environmental, and spiritual well-being.  Since 2002, Charity Navigator has awarded only the most fiscally responsible organizations a 4-star rating\r\n', 104),
(196, 'IGSSS', 'INDIA', '1961', '', 'Indo-Global Social Service Society (IGSSS) is a non-profit organisation working with the mandate for a humane social order based on truth, justice, freedom and equity. Established in 1960, IGSSS works for development, capacity building and enlightenment of the vulnerable communities across the country for their effective participation in development.With its presence in 25 states and one Union Territory of India, IGSSS has set its thematic focus on promoting sustainable livelihood, energising the youth as change makers, protecting lives, livelihood and assets from the impact of hazards, advocating for the rights of CityMakers (Homeless Residents) and developing cadre of leaders from the community and civil society organisations. Gender and Youth are underlining theme across all its interventions. \r\n', 105),
(197, 'National Disaster Risk Management (NDMA)', 'INDIA', '2005', '', 'National Disaster Management Authority (NDMA) is an agency of the Ministry of Home Affairs whose primary\r\npurpose is to coordinate response to natural or man-made disasters and for capacity-building in disaster \r\nresiliency and crisis response.NDMA was established through the Disaster Management Act enacted by\r\n the Government of India in December 2005.The Prime Minister is the defacto chairperson of NDMA. \r\nThe agency is responsible for framing policies, laying down guidelines and best-practices and coordinating \r\nwith the State Disaster Management Authorities (SDMAs) to ensure a holistic and distributed approach to \r\ndisaster management.', 106),
(198, 'India Development and Relief Fund (IDRF)', 'India', '1988', '', 'India Development and Relief Fund (IDRF) is an American nonprofit which supports grassroots development \r\nprojects implemented by Indian NGOs.The organization works on education, healthcare, ecofriendly \r\ndevelopment, women’s empowerment, governance, and disaster rehabilitation; in 2012, it funded its first \r\nproject in Nepal Dr. Vinod Prakash, a former World Bank economist, and his wife Sarla Prakash founded \r\nIDRF in 1988. There has been controversy over the way the funds were used.', 107),
(199, 'International Development and Releif Foundation (IDRF)', 'Canada', '1984', '', 'IDRF (International Development and Relief Foundation) is a Canadian, registered charitable organization, dedicated to empowering the disadvantaged people of the world. IDRF provides effective humanitarian aid and sustainable development programs, without discrimination, based on the Islamic principles of human dignity, self reliance and social justice.', 108),
(200, 'Ramakrishna Math and Ramakrishna Mission', 'India', '1897', '', 'Ramakrishna Mission and Math have together conducted hundreds of relief works in India, Burma, Bangladesh and Sri Lanka, during calamities and hardships issuing from such a variety of causes as famines, floods, fires, epidemics, cyclones, tornados, riots, earth­quakes, landslides and droughts. Relief works for evacuees and refugees were carried out on a very large scale during some of the worst national calamities\r\n', 109),
(201, 'Red Crescent society of India(RCSI)', 'India', '1950', '', 'The Red Crescent society of India is a \r\nregistered body under the Charitable Trust Act. Of 1950 at Mumbai having\r\n 80 G sanction. For its contributions to the service of Mankind the \r\nPrajapita Brahma Kumari''s Ishwariya Vishwa Vidayala,complimented the Red\r\n Crescent society of India and honored its chairman Mr. Arshad Siddiqui \r\nas the Special Guest at the World Politicians Conference, with their \r\nconviction that Mr. Arshad Siddiqui (In their wording) is a II Vital \r\nlink between the Creator and present mankind. The foresaid Vidyalaya is \r\none of the largest spirituous social organizations having the network of\r\n more than 6200 branches in India and 52 other countries.\r\n', 110),
(202, 'Rapid Response', 'INDIA', '2000', '', 'Rapid Response is a registered non-profit organization based in Chennai, Tamilandu, India. As a disaster relief agency,to provide immediate, effective and sustainable support for the victims of natural disasters\r\nwe help people to survive and rebuild their lives through our food, medical, shelter, education and livelihood programs.\r\n', 111),
(203, 'Action Aid India', 'Delhi', '1972', '', 'Working in partnership with formations of excluded people, mass \r\nmovements, knowledge institutions and civil society organisations,Standing with people in their struggle towards a world free of poverty, exclusion, patriarchy and injustice,Rooted with communities and social formations, learning from people’s actions and building on alternatives,Promoting a critical yet constructive engagement with the state to advance and promote peoples’ action for claiming rights,Engaged in varied roles, as a support and an implementing agency, which requires us to continuously learn and evolve.', 112),
(204, 'Khalsa aid', 'India', '1999', '', 'international non-profit aid and relief organization founded on the Sikh\r\n principles of selfless service and universal love. Khalsa Aid is a UK \r\nRegistered Charity (#1080374) with the UK Charities Commission and also \r\nhas volunteers in North America & Asia. Khalsa Aid has provided \r\nrelief assistance to victims of disasters, wars, and other tragic events\r\n around the world.', 113),
(205, 'Pragya', 'India', '1995', '', 'Pragya works for the appropriate development of vulnerable communities and sensitive ecosystems of the world. We reach the benefits of development to the most remote and least developed regions, delivering an array of development services to isolated and underserved communities, and building their capacity to help themselves. We also research and support reform of programs and policies, and advise and train development actors, in order to spur development action in these regions.\r\n', 114),
(206, 'IAHV-India', 'India', '2000', '', 'In an initiative to provide immediate material and trauma \r\nrelief to the evacuees of the calamity-struck Uttarakhand, The Art of \r\nLiving volunteers in Dehradun and North India under the aegis of \r\nVolunteer For A Better India (VBI) have been working with the \r\nparamilitary forces, the IAF and disaster management teams. The Art of \r\nLiving''s sister organisation, the International Association for Human \r\nValues (IAHV) united in all its relief efforts.\r\n\r\nThe IAHV in partnership with The Art of Living Foundation (Art of\r\n Living) has established a disaster relief fund to provide humanitarian \r\nassistance to the victims of the floods in Uttarakhand.', 115),
(207, 'Indian Red Cross Society', 'India', '1963', '', 'The Indian Red Cross is a voluntary humanitarian organization having a network of over 700 branches throughout the country, providing relief intimes of disasters/emergencies and promotes health & care of the vulnerable people and communities. It is a leading member of the largest independent humanitarian organization in the world, the International Red Cross & Red Crescent Movement.', 116),
(208, 'ADRA -  Adventist Development and Relief Agency  INDIA', 'India', '1984', '', 'ADRA India was officially registered in 1992 under the SOCIETIES REGISTRATION ACT OF 1860. ADRA India has being growing rapidly since then, striving to meet the massive needs that India’s undeveloped and developing communities have. The Tsunami in 2004 was a big challenge for us and we were forced to expand quickly to help as many affected communities as possible. Since then we are expanding our development program both geographically and thematically in the sectors of Health, Livelihood, Education and Refugees to name a few.\r\n', 117),
(209, 'Indo Global-Social Service Society', 'India', '1979', '', 'The primary goal of the program is to secure basic humanitarian aid for the Internally Displaced People (IDPs), ensuring that they receive their entitlements and assistance without any violation of the principles of equality and non-discrimination, and promoting and sustaining the basic rights of shelter, education, food, health and livelihood.\r\n', 118),
(210, 'Evangelical Social Action Forum(ESAF)', 'India', '2000', '', 'Disaster preparedness committees have been formed and are functioning in eight different villages.\r\nParticipatory Disaster Risk assessment has been conducted in four \r\nvillages. A draft report of the study has been submitted to TEAR Fund.\r\n18 (including 7 orientations) Disaster Preparedness training sessions has been conducted in various schools.\r\nFour Rapid Action Forces are formed and are functioning. Updating of the RAF has been conducted on a monthly basis.\r\nOne (1) Mobile Assistance and Relief Unit have been set up and is functioning.\r\nSeven training on Disaster preparedness has been conducted for the \r\nfishermen folk and 762People from the community participated. Apart from\r\n this 10 Street plays on disaster preparedness have been conducted in \r\npartnership with UNDP and the state government.', 119);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=211;
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
