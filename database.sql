--localhost
--user : tekom
--password : 12345
CREATE database data_sekoalah;

CREATE TABLE berita(
    id_berita int(11) PRIMARY key NOT NULL AUTO_INCREMENT,
    judul varchar(50),
    jenis varchar(50),
    tanggal timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    isi text
);

CREATE TABLE jadwal(
    id_jadwal int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    hari date,
    jam varchar(20),
    matapelajaran varchar(30),
    guru varchar(40),
    kelas varchar(10)
);

CREATE TABLE materi(
    id_materi int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    matapelajaran varchar(50),
    nama_guru varchar(40),
    username varchar(50),
    kelas varchar(10),
    tanggal timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    file varchar(50) NOT NULL
)

CREATE TABLE data_guru(
    id_guru int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama_guru varchar(30),
    nik varchar(15),
    tempat_lahir varchar(25),
    tanggal_lahir date,
    Jabatan varchar(25),
    alamat varchar(30),
    no_telp varchar(15),
    pendidikan_terakhir varchar(30),
    username varchar(20),
    password int(5),
    gambar varchar(50) NOT NULL
);

CREATE TABLE data_siswa(
    idsiswa int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama_siswa varchar(30),
    nisn varchar(15),
    tempat_lahir varchar(25),
    tanggal_lahir date,
    tahun_masuk varchar(4),
    jenis_kelamin varchar(2),
    alamat varchar(30),
    agama varchar(10),
    nomor_telp varchar(15),
    email varchar(50),
    hobby varchar(50),
    ayah varchar(50),
    pendidikan_ayah varchar(50),
    pekerjaan_ayah varchar(50),
    alamat_ayah varchar(50),
    ibu varchar(50),
    pendidikan_ibu varchar(50),
    pekerjaan_ibu varchar(50),
    alamat_ibu varchar(50),
    username varchar(20),
    password int(5),
    gambar varchar(50) NOT NULL
);

CREATE TABLE pendaftaran(
    id_pendaftaran int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama_siswa varchar(30),
    nisn varchar(15),
    tempat_lahir varchar(25),
    tanggal_lahir date,
    jenis_kelamin varchar(2),
    alamat varchar(30),
    agama varchar(10),
    nomor_telp varchar(15),
    email varchar(50),
    hobby varchar(50),
    ayah varchar(50),
    pendidikan_ayah varchar(50),
    pekerjaan_ayah varchar(50),
    alamat_ayah varchar(50),
    ibu varchar(50),
    pendidikan_ibu varchar(50),
    pekerjaan_ibu varchar(50),
    alamat_ibu varchar(50),
    gambar varchar(50) NOT NULL
);

CREATE TABLE logadmin (
    id int(11) NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
    userId int(11) NOT NULL,
    username varchar(255) NOT NULL,
    userIp varbinary(16) NOT NULL,
    loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE logguru (
  id int(11) NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
  userId int(11) NOT NULL,
  username varchar(255) NOT NULL,
  userIp varbinary(16) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE logsiswa(
  id int(11) NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
  userId int(11) NOT NULL,
  username varchar(255) NOT NULL,
  userIp varbinary(16) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE user_admin(
    idadmin int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama varchar(30),
    username varchar(20),
    password varchar(10)
);
insert into user_admin values ("", "admin", "admin", "12345");