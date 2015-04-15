CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `camps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `organisation_id` int(11) NOT NULL,
  `camp_head` int(11) NOT NULL,
  `population` text NOT NULL,
  `volunteers` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `contact_details` (
  `id` int(11) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mailing_list` varchar(255) NOT NULL,
  `mailing_address` varchar(255) NOT NULL,
  `longitude` DECIMAL(11,8) DEFAULT 0,
  `latitude` DECIMAL(10,8) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `missing_persons` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `body_marks` text NOT NULL,
  `height` varchar(255) NOT NULL,
  `hair` varchar(255) NOT NULL,
  `eye_color` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `last_seen` text NOT NULL,
  `status` text NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `organisations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `home_country` varchar(255) NOT NULL,
  `founded` varchar(255) NOT NULL,
  `logo` longblob NOT NULL,
  `description` text NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `photo` longblob NOT NULL,
  `contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL,
  `organisation_id` int(11) NOT NULL,
  `supplier_id` int(11) NULL,
  `asset_id` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `fulfill_date` date NULL,
  `priority` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `camps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `missing_persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `organisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `camps`
  ADD CONSTRAINT `camps_ibfk_3` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camps_ibfk_1` FOREIGN KEY (`camp_head`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camps_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `missing_persons`
  ADD CONSTRAINT `missing_persons_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `missing_persons_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `organisations`
  ADD CONSTRAINT `organisatios_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contact_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

