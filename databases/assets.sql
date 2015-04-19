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
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `description`, `name`) VALUES
(1, 'any preparation used as a preventive inoculation to confer immunity against a specific disease', 'vaccine'),
(2, 'a synthetic compound used as a drug to relieve and reduce fever, usually taken in tablet form.', 'paracetamol'),
(3, 'a box containing equipment needed to give immediate medical help in an emergency', 'First-Aid Kits,'),
(4, 'disposable gloves used during medical procedures that prevent contamination between caregivers and patients.', 'gloves'),
(5, 'a type of sweet containing medicine that you suck when you have a cough or a sore throat', 'cough syrup'),
(6, 'a strip of woven material used to bind up a wound or to protect an injured part of the body.', 'bandages'),
(7, 'a protective mask used to cover a person''s face as a defence against poison gas.', 'gas masks'),
(8, '', 'blood'),
(9, '', 'iso propyl alcohol'),
(10, '', 'clothes'),
(11, ' fluid injected into the body, esp for medicinal purposes', 'injections'),
(12, 'an instrument for measuring and indicating temperature', 'Thermometer'),
(13, 'a type of surgical or household disinfectant.', 'dettol'),
(14, 'a drug that cures illnesses and infections caused by bacteria.', 'antibiotics'),
(15, 'any disease producing agent, especially a virus or bacterium, or other microorganism', 'pathogens'),
(16, 'a drug used to treat an allergy (=a bad reaction to something you swallow or touch)', 'Antihistamines'),
(17, 'an anaesthetic that is given to someone before they have a medical operation, or the use of anaesthetics', 'anaesthesia'),
(18, 'a drug that reduces pain', 'analgesic'),
(19, 'a drug taken to reduce inflammation (=swelling, heat, and pain)', 'anti-inflammatory'),
(20, 'medicine made from plants', 'herbal-mediciene'),
(21, 'a drug that people use when they are very ill in order to feel less pain and sleep better', 'narcotic'),
(22, 'a medicine that reduces pain', 'pain-killer'),
(23, 'a pill or special food that you take or eat when your food does not contain everything that you need', 'supplement'),
(24, 'a pill containing vitamins', 'vitamins'),
(25, 'Paracetamol is used for the relief of pains associated with many parts of the body', 'paracetamol'),
(26, 'Drug for reducing pain', 'analgesic'),
(27, 'any preparation used as a preventive inoculation to confer immunity against a specific disease', 'vaccine'),
(28, 'medicine made from natural plants', 'herbal-mediciene'),
(29, 'antibiotics are often used in medical treatment of bacterial infections', 'antibiotics '),
(30, 'A bandage is a piece of material used either to support a medical device such as a dressing or splint, or on its own to provide support to the body', 'bandages'),
(31, 'A first aid kit is a collection of supplies and equipment for handling emergencies', 'First-Aid Kits'),
(32, 'an instrument for measuring temperature', 'Thermometer'),
(33, 'Dettol is a  liquid antiseptic and disinfectant', 'dettol'),
(34, 'Basic necessity', 'clothes'),
(35, 'Basic necessity', 'food'),
(36, 'Basic necessity', 'water'),
(37, 'an anaesthetic that is given to someone before they have a medical operation, or the use of anaesthetics', 'anaesthesia'),
(38, 'for medication', 'Eye drops'),
(39, 'Scissors are used for cutting various thin materials', 'Scissors'),
(40, 'They are commonly used in first aid and  cleaning, . ', 'Cotton-tipped swabs'),
(41, 'disposable gloves which  prevents contamination between caregivers and patients', 'gloves'),
(42, ' medicine that cures cough or a sore throat', 'cough syrup'),
(43, 'a drug used to treat an allergy ', 'Antihistamines'),
(44, ' Hydrogen peroxide  washes and disinfect wounds', 'Hydrogen peroxide'),
(45, 'used for hygenic purpose', 'Tissue paper'),
(46, 'for liquid intake', 'Paper cups'),
(47, ' active fire protection device used to extinguish or control small fires', 'fire extinguisher'),
(48, 'sturdy shoes  provides protection from broken glass, nails, and other debris', 'sturdy shoes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
