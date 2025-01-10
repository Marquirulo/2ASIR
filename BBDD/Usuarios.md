# HAY UN FICHERO CON UN MILLON DE EJEMPLOS BIEN EXPLICAO

Lo vamos a hacer sobre ORACLE  

Es un sistema multiusuario (Gestion de usuarios de toda la vida de DIOS que porciento es Español)  
  Esquemas
  SYS => root chungo
  SYSTEM => Tareas administrativas

## Creacion de usuarios

    CREATE USER nombre IDENTIFIED BY clave
    [
      DEFALUT TABLESPACE espacio_tabla
      TEMPORARY TABLESPACE espacio_tabla
      QUOTA (K/M) | UNLIMITED ON espacio_tabla
      PROFILE perfil
    ];
## Alteracion usuario

    ALTER USER nombre (LOQUE SE MODIFICA EJ:UNLOCK...)

## DROP USER

## INFO USERS
  dba_users DESCRIBE USUARIOS    
  USER_USERS INFO DEL USUARIO ACTUAL  
  ALL_USERS   
## PRIVILEGIOS DEL SISTEMA
  *TE MIRAS LOS APUNTES TONTO QUE HAY QUE ESCRIBIR MUCHO*
## DAR PRIVILEGIOS
    GRANT priv.objeto | ALL PRIVILEGES
    columna,columna
    ON usuario:objeto
    TO usuario | rol | PUBLIC , usuario
    WITH GRANT OPTION;
## VISUALIZAR
  SESSION_PRIVS USUARIO ACTIVO  
  USER_SYS_PRIVS PRIVILEGIOS DEL SISTEMA ASIGNADOS AL USUARIO  
  DBA_SYS_PRIVS  PRIVILEGIOS DEL SISTEMA ASIGNADOS AL USUARIO O ROL  




