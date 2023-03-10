CREATE TABLE uzytkownicy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    dane_kontaktowe VARCHAR(255) NOT NULL,
    haslo VARCHAR(255) NOT NULL,
    data_urodzenia DATE NOT NULL,
    plec ENUM('kobieta', 'mezczyzna') NOT NULL,
    data_rejestracji TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
