/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     22/06/2018 9:50:32                           */
/*==============================================================*/


drop table if exists orden_produccion;

drop table if exists usuario;

/*==============================================================*/
/* Table: orden_produccion                                      */
/*==============================================================*/
create table orden_produccion
(
   numero_orden         int not null auto_increment,
   id_usuario           smallint,
   fecha_ingreso        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   nombre_cliente       varchar(50),
   desarrollador_asignado int,
   resumen_activ        varchar(50),
   prioridad_orden      varchar(10),
   estado_orden         varchar(15),
   primary key (numero_orden)
);

/*==============================================================*/
/* Table: usuario                                               */
/*==============================================================*/
create table usuario
(
   id_usuario           smallint not null auto_increment,
   rol_usuario          varchar(50) not null,
   name                 varchar(50) not null,
   password             varchar(50) not null,
   primary key (id_usuario)
);

alter table orden_produccion add constraint fk_rl_usario_desarrollador foreign key (id_usuario)
      references usuario (id_usuario) on delete restrict on update restrict;

