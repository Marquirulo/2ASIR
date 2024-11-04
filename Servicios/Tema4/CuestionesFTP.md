
1. ¿Qué modos de conexión existen en ftp?  
**Modo activo el servidor inicia la conexion y modo pasivo el cliente inicia la conexion**

2. ¿Qué tipos de transferencia de ficheros existen en ftp?
**ASCII**
**BINARIOS**
3. ¿Dónde se realiza la configuración del servidor ftp?
**etc/vsftpd.conf**
4. Tenemos que subir un fichero a un servidor ftp ¿Cómo lo harías?
**#ftp 'ip'**
**put fichero**
5. Desde una consola en una maquina Windows/linux nos conectamos por ftp a un servidor “ftp público”, como usuario anónimo, saca un listado de los directorios que existen  
![imagen](https://github.com/user-attachments/assets/fd6c78e9-dc3a-437b-9f10-f8e2a082e888)

6. Entra en el primer directorio de la lista de la cuestión anterior.
![imagen](https://github.com/user-attachments/assets/d768a5d0-99f6-4ac6-b959-df3c664f908c)

7. Lista los archivos del directorio anterior,  y descárgate el primer fichero de la lista.
![imagen](https://github.com/user-attachments/assets/dd0b382a-5402-40e4-ac7b-2b40a17a148c)

8. Intenta subir un fichero tuyo a dicho servidor, ¿Qué ocurre?  
![imagen](https://github.com/user-attachments/assets/917597b4-c84d-4f7c-a584-bf519198db96)

9. Intenta descargar un archivo en modo pasivo y otro en modo activo ¿Es posible? ¿Cuáles son las principales diferencias entre el modo pasivo y el activo?
**en activo no me deja**
10. ¿Se puede limitar el número de conexiones a un servidor ftp? Razónalo.

Si
max_clients:10
max_per_ip:10


11. Escribe el comando para establecer el mensaje de bienvenida en un servidor FTP  
  ![imagen](https://github.com/user-attachments/assets/ecc28bf1-8f6e-4258-9ce8-51bf88c8e47a)

12. ¿Qué operaciones podría realizar un usuario con todos los permisos en un servidor FTP?
    **Todo lo que permite FTP**

14. En un servidor ftp ¿Cómo podemos saber cuáles son los comandos que se pueden utilizar?
  **help**

15. Conéctate a un servidor ftp externo desde el navegador
**ftp ftp.rediris.es**

16. Máximo  de clientes que pueden conectarse al servidor ftp
    
max_clients:10
max_per_ip:10

17. Diferencias entre FTPS, SFTP y SECURE FTP:

**sftp es ssh sobre ftp**
**ftps ftp pero con certificados digitales**
secure ftp

18. Activar el log de registro para que se registren las peticiones y establecer donde estará su ubicación.  
![imagen](https://github.com/user-attachments/assets/bba98901-b3d0-4481-b7a1-8bdfb88ec385)

![imagen](https://github.com/user-attachments/assets/a885c7c0-b4c5-459c-abef-6190732e265d)

20. Configuración de windows 10 para que haga servicio de ftp  
![imagen](https://github.com/user-attachments/assets/be3898f0-c563-4984-a825-56a27a49a724)


