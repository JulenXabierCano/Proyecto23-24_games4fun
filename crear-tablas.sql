SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `salas` (
  `id_sala` int NOT NULL,
  `jugador_1` varchar(255) NOT NULL,
  `jugador_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movimiento_j1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movimiento_j2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `oauth_clients` (
    `user_id` int NOT NULL,
    `name` VARCHAR(255),
    `secret` VARCHAR(255),
    `provider` VARCHAR(255),
    `redirect` VARCHAR(255),
    `personal_access_client` TINYINT(1),
    `password_client` TINYINT(1),
    `revoked` TINYINT(1),
    `updated_at` TIMESTAMP,
    `created_at` TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `oauth_personal_access_clients` (
    `client_id` int NOT NULL,
    `updated_at` TIMESTAMP,
    `created_at` TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`client_id`);

ALTER TABLE `salas`
  MODIFY `id_sala` int NOT NULL AUTO_INCREMENT;

COMMIT;