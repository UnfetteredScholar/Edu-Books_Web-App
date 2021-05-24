-- TOFFAH ATO KWAMENA ARKO
-- 10812592
-- CPEN 207 INTRODUCTION TO SOFTWARE ENGINEERING
-- PROJECT 1
-- E-LIBRARY

CREATE DATABASE IF NOT EXISTS `e-library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `e-library`;

CREATE TABLE `users` (
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL PRIMARY KEY,
  `username` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users` ADD UNIQUE KEY `emai` (`email`);


INSERT INTO `users` (`firstName`, `lastName`, `email`, `username`, `password`) VALUES
('Frank', 'Brown', 'example2@gmail.com', 'BlackFrank', 'qwerty'),
('Ato', 'Toffah', 'example@gmail.com', 'AKA', 'password'),
('Sai', 'Ren', 'exccsd@exmail.com', 'esai', '1234'),
('Selorm ', 'K', 'gsdgvd@example.com', 'selorm123', '1234'),
('sly', 'fre', 're@gmail.com', 'yxw', '122');

COMMIT;
