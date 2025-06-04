-- Create table 'kue'
CREATE TABLE kue (
    ID int NOT NULL AUTO_INCREMENT,
    merkkue varchar(25) NOT NULL,
    hargakue int NOT NULL,
    tersedia boolean NOT NULL,
    berat float NOT NULL,
    PRIMARY KEY (ID)
);

-- Insert dummy data into 'kue'
INSERT INTO kue (merkkue, hargakue, tersedia, berat)
VALUES
    ('Brownies Coklat', 45000, true, 0.5),
    ('Cheesecake', 65000, true, 0.7),
    ('Black Forest', 75000, true, 1.0),
    ('Red Velvet', 80000, true, 1.0),
    ('Tiramisu', 85000, true, 0.8),
    ('Kue Lapis', 50000, false, 0.6),
    ('Kue Keju', 40000, true, 0.4),
    ('Bolu Pandan', 35000, true, 0.5),
    ('Donat Coklat', 8000, true, 0.1),
    ('Donat Gula', 7000, false, 0.1),
    ('Pie Buah', 60000, true, 0.9),
    ('Cupcake Vanilla', 12000, true, 0.15),
    ('Cupcake Coklat', 15000, true, 0.15),
    ('Croissant', 18000, false, 0.2),
    ('Roti Gandum', 25000, true, 0.4);
