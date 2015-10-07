CREATE DATABASE `cmsv3`;

USE `cmsv3`;

CREATE TABLE `user_role` (
	`role_id` INT, /* Indexing 0==Admin, 1==Instructor, 3==Student */
	`role` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`role_id`)
);

CREATE TABLE `user` (
	`user_id` VARCHAR(7) NOT NULL UNIQUE,
	`role_id` INT NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`status` INT DEFAULT 1,
	`fname` VARCHAR(50),
	`mname` VARCHAR(50),
	`lname` VARCHAR(50),
	`birthdate` DATE,
	`contact_no` VARCHAR(11),
	PRIMARY KEY (`user_id`),
	FOREIGN KEY (role_id) 
    REFERENCES user_role(role_id)
);

CREATE TABLE `course` (
	`course_id` VARCHAR(5),
	`course_name` VARCHAR(60),
	PRIMARY KEY (`course_id`)
);

CREATE TABLE `student` (
	`student_id` VARCHAR(7) NOT NULL UNIQUE,
	`course_id` VARCHAR(5),
	`year_level` INT,
	PRIMARY KEY (`student_id`),
	FOREIGN KEY (student_id) REFERENCES user (user_id) ON DELETE CASCADE,
	FOREIGN KEY (course_id) 
    REFERENCES course(course_id)
);

CREATE TABLE `instructor` (
	`instructor_id` VARCHAR(7) NOT NULL UNIQUE,
	`position` VARCHAR(50),
	PRIMARY KEY (`instructor_id`),
	FOREIGN KEY (instructor_id) 
    REFERENCES user(user_id) ON DELETE CASCADE

);

CREATE TABLE `room_type` (
	`room_type_id` INT(1), /* 1==Lecture, 2==Lab */
	`room_type` VARCHAR(50),
	PRIMARY KEY (`room_type_id`)
);

CREATE TABLE `room` (
	`room_id` VARCHAR(6),
	`room_type` INT(1),
	PRIMARY KEY (`room_id`),
	FOREIGN KEY (room_type) 
    REFERENCES room_type(room_type_id)

);

CREATE TABLE `subject` (
	`subject_code` VARCHAR(7) UNIQUE, /* ex. ICT141, ICT201n */
	`subject_title` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`subject_code`)
);


CREATE TABLE `academic_year` (
	`academic_year_id` INT AUTO_INCREMENT,
	`academic_year` VARCHAR(9) UNIQUE,
	PRIMARY KEY (`academic_year_id`)
);

CREATE TABLE `semester` (
	`semester_id` INT AUTO_INCREMENT,
	`semester` VARCHAR(50),
	`academic_year_id` INT,
	`start_date` DATE,
	`end_date` DATE,
	PRIMARY KEY (`semester_id`),
	FOREIGN KEY (academic_year_id) 
    REFERENCES academic_year(academic_year_id)
);

CREATE TABLE `seat_plan` (
	`seat_id` INT,
	`row` INT(2) NOT NULL,
	`column` INT(2) NOT NULL,
	PRIMARY KEY (`seat_id`)

);

CREATE TABLE `class` (
	`class_id` INT AUTO_INCREMENT,
	`subject_code` VARCHAR(7),
	`room_id` VARCHAR(6),
	`semester_id` INT,
	`start_time` TIME,
	`end_time` TIME,
	`days` VARCHAR(3),
	`instructor_id` VARCHAR(7),
	PRIMARY KEY (`class_id`),
	FOREIGN KEY (semester_id) 
    REFERENCES semester(semester_id),
    FOREIGN KEY (subject_code) 
    REFERENCES subject(subject_code),
    FOREIGN KEY (room_id) 
    REFERENCES room(room_id),
    FOREIGN KEY (instructor_id) 
    REFERENCES instructor(instructor_id)
);

CREATE TABLE `class_member` (
	`student_id` VARCHAR(7),
	`class_id` INT NOT NULL,
	`status` VARCHAR(15) NULL,
	`seat_id` INT,
	PRIMARY KEY (`student_id`),
	FOREIGN KEY (student_id) 
    REFERENCES student(student_id) ON DELETE CASCADE,
	FOREIGN KEY (class_id) 
    REFERENCES class(class_id),
    FOREIGN KEY (seat_id) 
    REFERENCES seat_plan(seat_id)
);

CREATE TABLE `attendance_status` (
	`attendance_status` INT(1),
	`definition` VARCHAR(50),
	PRIMARY KEY (`attendance_status`)

);

CREATE TABLE `attendance` (
	`attendance_id` INT AUTO_INCREMENT,
	`class_id` INT NOT NULL,
	`student_id` VARCHAR(7),
	`attendance_datetime` DATETIME,
	`attendance_status` INT,
	PRIMARY KEY (`attendance_id`),
	FOREIGN KEY (attendance_status) 
    REFERENCES attendance_status(attendance_status),
    FOREIGN KEY (class_id) 
    REFERENCES class_member(class_id),
    FOREIGN KEY (student_id) 
    REFERENCES class_member(student_id)
);

CREATE TABLE `class_calendar` (
	`class_calendar_id` INT AUTO_INCREMENT,
	`class_id` INT NOT NULL,
	`event_date` DATETIME,
	`event` TEXT,
	PRIMARY KEY (`class_calendar_id`),
	FOREIGN KEY (class_id) 
    REFERENCES class(class_id)

);

CREATE TABLE `consultation` (
	`consultation_id` INT AUTO_INCREMENT,
	`instructor_id` VARCHAR(7) NOT NULL,
	`class_id` INT NOT NULL,
	`datetime_scheduled` DATETIME,
	`start_time` TIME,
	`end_time` TIME,
	`issue_topic` TEXT,
	`remarks` TEXT,
	PRIMARY KEY (`consultation_id`),
	FOREIGN KEY (instructor_id) 
    REFERENCES instructor(instructor_id),
    FOREIGN KEY (class_id) 
    REFERENCES class(class_id)

);

CREATE TABLE `consultee` (
	`consultation_id` INT,
	`student_id` VARCHAR(7) NOT NULL,
	PRIMARY KEY (`consultation_id`),
    FOREIGN KEY (consultation_id) 
    REFERENCES consultation(consultation_id),
    FOREIGN KEY (student_id) 
    REFERENCES class_member(student_id)
	
);

INSERT INTO `user_role` (`role_id`, `role`)
VALUES (0, 'Admin');

INSERT INTO `user_role` (`role_id`, `role`)
VALUES (1, 'Staff');

INSERT INTO `user_role` (`role_id`, `role`)
VALUES (2, 'Teacher');

INSERT INTO `user_role` (`role_id`, `role`)
VALUES (3, 'Student');

INSERT INTO `academic_year` (`academic_year`)
VALUES ('2015-2016');

INSERT INTO `semester` (`semester`, `academic_year_id`, `start_date`, `end_date`)
VALUES ('First Semester', 1, '2015-06-01', '2015-10-30');

INSERT INTO `course` (`course_id`, `course_name`)
VALUES ('bsict', 'Bachelor of Science in Information and Communications Technology');

INSERT INTO `course` (`course_id`, `course_name`)
VALUES ('bsit', 'Bachelor of Science in Information Technology');

INSERT INTO `course` (`course_id`, `course_name`)
VALUES ('bscs', 'Bachelor of Science in Computer Science');


INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict110', 'Programming 1');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict116', 'Programming 2');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict121', 'Programming 3');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict117', 'Software Application A');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict122', 'Software Application B');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict123', 'Intro to Management');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict131', 'Database 1');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict201n', 'Capstone Proposal');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict126', 'Video Editing');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict141', 'Web Application');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict207', 'Linux');

INSERT INTO `subject` (`subject_code`, `subject_title`)
VALUES ('ict136', 'Database 2');


INSERT INTO `user` (`user_id`, `role_id`, `password`)
VALUES ('admin', 0, 'admin');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1101220', 3, '20001231', 'Paul', 'Bolotaolo');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1142562', 3, '20001231', 'Jazzmine', 'Boncales');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1145776', 3, '20001231', 'Earl', 'Delos Santos');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1134123', 3, '20001231', 'Aimee', 'Vidal');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('student', 3, 'student', 'Spongebob', 'Squarepants');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('teacher', 2, 'teacher', 'Mary Jane', 'Sabellano');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122331', 2, '20001231', 'Tok', 'Mendoza');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122332', 2, '20001231', 'Stephanie', 'Polinar');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122333', 2, '20001231', 'Joan', 'Tero');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122334', 2, '20001231', 'Rabe', 'Briton');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122335', 2, '20001231', 'John Ray', 'Hernani');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122336', 2, '20001231', 'Glenn', 'Pepito');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122337', 2, '20001231', 'Mark', 'Quevedo');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122338', 2, '20001231', 'Christian', 'Maderazo');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122339', 2, '20001231', 'Daphne', 'Sabang');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122330', 2, '20001231', 'Antonette', 'Cantara');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122341', 2, '20001231', 'Don', 'Singh');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122342', 2, '20001231', 'Mona', 'Inso');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1122343', 2, '20001231', 'David', 'Maldonado');