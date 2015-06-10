ALTER TABLE `tbl_admin` ADD `mobile_phone` INT NOT NULL AFTER `user_type`, 
ADD `address` VARCHAR(255) NOT NULL AFTER `mobile_phone`;
ALTER TABLE `tbl_admin` CHANGE `mobile_phone` `mobile_phone` VARCHAR(64) NOT NULL;
