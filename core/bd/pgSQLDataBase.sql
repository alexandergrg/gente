

-- 1. - CREAR EL TABLE ESPACE

CREATE TABLESPACE tbl_sigcombdb LOCATION '/var/mydatabases/sigcomb';
-- 2.- CREACION DEL USUARIO DE DATOS.
CREATE ROLE is_sigcombdb LOGIN PASSWORD 'admin123456';
-- 3.- CREACION DE LA BASE DE DATOS
CREATE DATABASE sigcombdb OWNER = is_sigcombdb TABLESPACE = tbl_sigcombdb;
