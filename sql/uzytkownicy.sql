CREATE TABLE uzytkownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa_uzytkownika VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    numer_telefonu VARCHAR(20),
    haslo VARCHAR(255) NOT NULL,
    data_urodzenia DATE NOT NULL,
    plec ENUM('kobieta', 'mezczyzna') NOT NULL,
    data_rejestracji TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    robux INT DEFAULT 0
);
