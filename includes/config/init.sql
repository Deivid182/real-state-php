-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema real-estate
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema real-estate
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `real-estate` ;
USE `real-estate` ;

-- -----------------------------------------------------
-- Table `real-estate`.`sellers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `real-estate`.`sellers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `phone` VARCHAR(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `real-estate`.`properties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `real-estate`.`properties` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `price` DECIMAL(10) NULL,
  `image` VARCHAR(200) NULL,
  `description` LONGTEXT NULL,
  `rooms` INT(1) NULL,
  `bathrooms` INT(1) NULL,
  `parking` INT(1) NULL,
  `created_at` DATE NULL,
  `sellers_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_properties_sellers_idx` (`sellers_id` ASC) VISIBLE,
  CONSTRAINT `fk_properties_sellers`
    FOREIGN KEY (`sellers_id`)
    REFERENCES `real-estate`.`sellers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `real-estate`.`sellers`
-- -----------------------------------------------------
START TRANSACTION;
USE `real-estate`;
INSERT INTO `real-estate`.`sellers` (`id`, `first_name`, `last_name`, `phone`) VALUES (1, 'Dave', 'Dev', '5523232323');
INSERT INTO `real-estate`.`sellers` (`id`, `first_name`, `last_name`, `phone`) VALUES (2, 'Ryan', 'Ray', '523242526');

COMMIT;

