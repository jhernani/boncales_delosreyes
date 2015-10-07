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
VALUES ('1142562', 2, '20001231', 'Jazzmine', 'Boncales');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1145776', 3, '20001231', 'Earl', 'Delos Santos');

INSERT INTO `user` (`user_id`, `role_id`, `password`, `fname`, `lname`)
VALUES ('1134123', 3, '20001231', 'Aimee', 'Vidal');

