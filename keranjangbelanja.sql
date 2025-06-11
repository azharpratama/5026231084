-- Create table 'keranjangbelanja'
CREATE TABLE keranjangbelanja (
    ID int NOT NULL AUTO_INCREMENT,
    KodeBarang int NOT NULL,
    Jumlah int NOT NULL,
    Harga int NOT NULL,
    PRIMARY KEY (ID)
);

-- Insert dummy data into 'keranjangbelanja'
INSERT INTO keranjangbelanja (KodeBarang, Jumlah, Harga)
VALUES
    (1001, 2, 25000),
    (1002, 1, 15000),
    (1003, 5, 8000),
    (2001, 3, 45000),
    (2002, 2, 36000),
    (3001, 1, 125000),
    (3002, 4, 12500),
    (4001, 2, 75000),
    (4002, 1, 95000),
    (5001, 3, 22000);
