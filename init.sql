CREATE TABLE IF NOT EXISTS users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255),
  role VARCHAR(50)
);
CREATE TABLE IF NOT EXISTS charging_stations (
  station_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  location TEXT,
  availability BOOLEAN,
  operator_id INT
);
