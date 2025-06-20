-- Create table 'nilai'
CREATE TABLE nilai (
    id int NOT NULL AUTO_INCREMENT,
    nomorinduksiswa char(5) NOT NULL,
    nilaiangka int NOT NULL,
    sks int NOT NULL,
    PRIMARY KEY (id)
);

-- Insert sample data
INSERT INTO nilai (nomorinduksiswa, nilaiangka, sks)
VALUES
    ('50262', 90, 4),
    ('50263', 55, 2),
    ('50264', 78, 3),
    ('50265', 30, 3),
    ('50266', 85, 4),
    ('50267', 70, 2),
    ('50268', 65, 3),
    ('50269', 45, 2),
    ('50270', 95, 4),
    ('50271', 60, 3);
