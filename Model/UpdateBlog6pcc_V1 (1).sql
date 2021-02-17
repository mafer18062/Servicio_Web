CREATE TABLE BlogTipoUsuario (
  idBlogTipoUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Categoria VARCHAR(50) NULL,
  PRIMARY KEY(idBlogTipoUsuario)
);

CREATE TABLE BlogUsuario (
  idBlogUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BlogTipoUsuario_idBlogTipoUsuario INTEGER UNSIGNED NOT NULL,
  Correo VARCHAR(50) NULL,
  Nombre VARCHAR(20) NULL,
  Apellido VARCHAR(20) NULL,
  Pass VARCHAR(20) NULL,
  FechaNac DATE NULL,
  Cel INT NULL,
  Foto VARCHAR(200) NULL,
  Estado BOOL NULL,
  PRIMARY KEY(idBlogUsuario),
  INDEX BlogUsuario_FKIndex1(BlogTipoUsuario_idBlogTipoUsuario),
  FOREIGN KEY(BlogTipoUsuario_idBlogTipoUsuario)
    REFERENCES BlogTipoUsuario(idBlogTipoUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE BlogPerfil (
  idBlogPerfil INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BlogUsuario_idBlogUsuario INTEGER UNSIGNED NOT NULL,
  Descripcion TEXT NULL,
  Musica TEXT NULL,
  Deporte TEXT NULL,
  Comida TEXT NULL,
  Pelicula TEXT NULL,
  LugarFavorito TEXT NULL,
  PRIMARY KEY(idBlogPerfil),
  INDEX BlogPerfil_FKIndex1(BlogUsuario_idBlogUsuario),
  FOREIGN KEY(BlogUsuario_idBlogUsuario)
    REFERENCES BlogUsuario(idBlogUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE BlogCategoria (
  idBlogCategoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BlogUsuario_idBlogUsuario INTEGER UNSIGNED NOT NULL,
  Nombre VARCHAR(100) NULL,
  Descripcion TEXT NULL,
  Foto VARCHAR(200) NULL,
  Fecha DATE NULL,
  Estado BOOL NULL,
  PRIMARY KEY(idBlogCategoria),
  INDEX BlogCategoria_FKIndex1(BlogUsuario_idBlogUsuario),
  FOREIGN KEY(BlogUsuario_idBlogUsuario)
    REFERENCES BlogUsuario(idBlogUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE BlogTema (
  idBlogTema INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BlogCategoria_idBlogCategoria INTEGER UNSIGNED NOT NULL,
  BlogUsuario_idBlogUsuario INTEGER UNSIGNED NOT NULL,
  Nombre INTEGER UNSIGNED NULL,
  Descripcion TEXT NULL,
  PRIMARY KEY(idBlogTema),
  INDEX BlogTema_FKIndex1(BlogUsuario_idBlogUsuario),
  INDEX BlogTema_FKIndex2(BlogCategoria_idBlogCategoria),
  FOREIGN KEY(BlogUsuario_idBlogUsuario)
    REFERENCES BlogUsuario(idBlogUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(BlogCategoria_idBlogCategoria)
    REFERENCES BlogCategoria(idBlogCategoria)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE BlogContenido (
  idBlogContenido INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BlogUsuario_idBlogUsuario INTEGER UNSIGNED NOT NULL,
  BlogTema_idBlogTema INTEGER UNSIGNED NOT NULL,
  Contenido TEXT NULL,
  Foto VARCHAR(200) NULL,
  Estado BOOL NULL,
  PRIMARY KEY(idBlogContenido),
  INDEX BlogContenido_FKIndex1(BlogTema_idBlogTema),
  INDEX BlogContenido_FKIndex2(BlogUsuario_idBlogUsuario),
  FOREIGN KEY(BlogTema_idBlogTema)
    REFERENCES BlogTema(idBlogTema)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(BlogUsuario_idBlogUsuario)
    REFERENCES BlogUsuario(idBlogUsuario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


