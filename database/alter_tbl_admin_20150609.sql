ALTER TABLE `tbl_admin` ADD `mobile_phone` INT NOT NULL AFTER `user_type`, 
ADD `address` VARCHAR(255) NOT NULL AFTER `mobile_phone`;
