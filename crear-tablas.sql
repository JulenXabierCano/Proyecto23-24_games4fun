SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `salas` (
  `id_sala` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `jugador_1` VARCHAR(255) NOT NULL,
  `jugador_2` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movimiento_j1` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movimiento_j2` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j1` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j2` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `oauth_clients` (
    `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    `secret` VARCHAR(255),
    `provider` VARCHAR(255),
    `redirect` VARCHAR(255),
    `personal_access_client` TINYINT(1),
    `password_client` TINYINT(1),
    `revoked` TINYINT(1),
    `updated_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `oauth_personal_access_clients` (
    `client_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `updated_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

COMMIT;
