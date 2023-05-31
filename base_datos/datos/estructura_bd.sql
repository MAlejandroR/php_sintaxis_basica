-- Creamos las tablas
-- Por si queremos modificar añadir alguna tabla añadimos IF NOT EXISTS

CREATE TABLE IF NOT EXISTS usuarios
(
    codigo    INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre   VARCHAR(100) NOT NULL,
    password VARCHAR(200) NOT NULL
) ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS tienda
(
    cod    INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tlf    VARCHAR(13) NULL
) ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS producto
(
    cod          VARCHAR(12)    NOT NULL,
    nombre       VARCHAR(200) NULL,
    nombre_corto VARCHAR(50)    NOT NULL,
    descripcion  TEXT NULL,
    PVP          DECIMAL(10, 2) NOT NULL,
    familia      VARCHAR(6)     NOT NULL,
    PRIMARY KEY (cod),
    INDEX (familia ),
    UNIQUE (nombre_corto),
    CONSTRAINT producto_ibfk_1
        FOREIGN KEY (familia) REFERENCES familia (cod)
            ON UPDATE CASCADE

) ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS familia
(
    cod    VARCHAR(6)   NOT NULL,
    nombre VARCHAR(200) NOT NULL,
    PRIMARY KEY (cod)
) ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS stock
(
    producto VARCHAR(12) NOT NULL,
    tienda   INT         NOT NULL,
    unidades INT         NOT NULL,
    PRIMARY KEY (producto, tienda),
    CONSTRAINT stock_ibfk_2
        FOREIGN KEY (tienda) REFERENCES tienda (cod)
            ON UPDATE CASCADE,
  CONSTRAINT stock_ibfk_1
        FOREIGN KEY (producto) REFERENCES producto (cod)
        ON UPDATE CASCADE
) ENGINE = INNODB;
