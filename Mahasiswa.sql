CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR (4) NOT NULL,
    nama VARCHAR (50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR (8) NOT NULL,
    nama VARCHAR (50) NOT NULL,
    jenis_kelamin enum ('laki-laki' , 'perempuan') NOT NULL,
    tempat_lahir VARCHAR (50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR (255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- masukkan jurusan
insert into jurusan (kode, nama) values ("APBL", "Administrasi Publik")

-- masukkan data mahasiswamu
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
values ("2", "20220002", "Rey Mysterio", "laki-laki", "Zambia", "1972-12-31", "Perumahan New Jersey Gang Bristol Kav. 96");
