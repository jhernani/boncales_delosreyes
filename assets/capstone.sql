CREATE DATABASE `cramsdb`;

USE `cramsdb`;

CREATE TABLE `user_role` (
	`user_role_id` INT AUTO_INCREMENT,
	`user_title` VARCHAR(100),
	PRIMARY KEY (`user_role_id`)
);

CREATE TABLE `user` (
	`user_id` INT AUTO_INCREMENT,
	`school_id` INT(7) UNIQUE,
	`password` VARCHAR(100),
	`user_role_id` INT(1),
	`active` INT(1)
	PRIMARY KEY (`user_id`),
	FOREIGN KEY (user_role_id) 
    REFERENCES user_role(user_role_id)
    ON DELETE CASCADE
);

CREATE TABLE `user_role` (
	`user_role_id` INT AUTO_INCREMENT,
	`user_title` VARCHAR(100),
	PRIMARY KEY (`user_role_id`)
);

CREATE TABLE `program` (
	`program_id` INT AUTO_INCREMENT,
	`program_title` VARCHAR(100)
	PRIMARY KEY (`program_id`)
);

CREATE TABLE `course` (
	`course_id` INT AUTO_INCREMENT,
	`course_code` VARCHAR(10),
	`program_id` INT(1)
	PRIMARY KEY (`course_id`),
	FOREIGN KEY(program_id)
	REFERENCES program(program_id)
	ON DELETE CASCADE
);

CREATE TABLE `student_info` (
	`student_info_id` INT AUTO_INCREMENT,
	`student_id` INT NOT NULL,
	`firstname` VARCHAR(100),
	`middlename` VARCHAR(100),
	`lastname` VARCHAR(100),
	`program_id` INT(1),
	`year_level` INT(1)
	PRIMARY KEY (`log_id`),
	FOREIGN KEY (student_id) 
    REFERENCES user(user_id)
    ON DELETE CASCADE,
    FOREIGN KEY (program_id) 
    REFERENCES program(program_id)
    ON DELETE CASCADE
);

CREATE TABLE `teacher_info` (
	`teacher_info_id` INT AUTO_INCREMENT,
	`teacher_id` INT NOT NULL,
	`firstname` VARCHAR(100),
	`middlename` VARCHAR(100),
	`lastname` VARCHAR(100)
	PRIMARY KEY (`log_id`),
	FOREIGN KEY (teacher_id) 
    REFERENCES user(user_id)
    ON DELETE CASCADE
);

CREATE TABLE `class` (
	`class_id` INT AUTO_INCREMENT,
	`teacher_id` INT NOT NULL,
	`firstname` VARCHAR(100),
	`middlename` VARCHAR(100),
	`lastname` VARCHAR(100)
	PRIMARY KEY (`log_id`),
	FOREIGN KEY (teacher_id) 
    REFERENCES user(user_id)
    ON DELETE CASCADE
);
