-- Create table 'karyawan'
CREATE TABLE karyawan (
    kodepegawai char(5) NOT NULL,
    namalengkap varchar(50) NOT NULL,
    divisi char(5) NOT NULL,
    departemen varchar(10) NOT NULL,
    PRIMARY KEY (kodepegawai)
);

-- Insert dummy data into 'karyawan'
INSERT INTO karyawan (kodepegawai, namalengkap, divisi, departemen)
VALUES
    ('KP001', 'Ahmad Firdaus', 'HR001', 'hr'),
    ('KP002', 'Siti Rahmawati', 'FIN02', 'fin'),
    ('KP003', 'Budi Santoso', 'IT003', 'it'),
    ('KP004', 'Dewi Anggraini', 'MKT04', 'mkt'),
    ('KP005', 'Rizky Pratama', 'PROD5', 'prd'),
    ('KP006', 'Nita Lestari', 'HR001', 'hr'),
    ('KP007', 'Indra Kusuma', 'IT003', 'it'),
    ('KP008', 'Maya Putri', 'FIN02', 'fin'),
    ('KP009', 'Agus Wijaya', 'PROD5', 'prd'),
    ('KP010', 'Linda Wati', 'MKT04', 'mkt'),
    ('KP011', 'Deni Firmansyah', 'IT003', 'it'),
    ('KP012', 'Ratna Sari', 'HR001', 'hr'),
    ('KP013', 'Hadi Susanto', 'FIN02', 'fin'),
    ('KP014', 'Rina Fitriani', 'PROD5', 'prd'),
    ('KP015', 'Farhan Hakim', 'MKT04', 'mkt');
