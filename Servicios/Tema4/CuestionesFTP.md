
1. ¿Qué modos de conexión existen en ftp?  
**Modo activo y modo pasivo**

2. ¿Qué tipos de transferencia de ficheros existen en ftp?
**ASCII**
**BINARIOS**
3. ¿Dónde se realiza la configuración del servidor ftp?
**etc/vsftpd.conf**
4. Tenemos que subir un fichero a un servidor ftp ¿Cómo lo harías?
**#ftp 'ip'**
**put fichero**
6. Desde una consola en una maquina Windows/linux nos conectamos por ftp a un servidor “ftp público”, como usuario anónimo, saca un listado de los directorios que existen  
![imagen](https://github.com/user-attachments/assets/fd6c78e9-dc3a-437b-9f10-f8e2a082e888)

7. Entra en el primer directorio de la lista de la cuestión anterior.
![imagen](https://github.com/user-attachments/assets/d768a5d0-99f6-4ac6-b959-df3c664f908c)

9. Lista los archivos del directorio anterior,  y descárgate el primer fichero de la lista.
![imagen](https://github.com/user-attachments/assets/dd0b382a-5402-40e4-ac7b-2b40a17a148c)

10. Intenta subir un fichero tuyo a dicho servidor, ¿Qué ocurre?  
![imagen](https://github.com/user-attachments/assets/917597b4-c84d-4f7c-a584-bf519198db96)

11. Intenta descargar un archivo en modo pasivo y otro en modo activo ¿Es posible? ¿Cuáles son las principales diferencias entre el modo pasivo y el activo?
**en activo no me deja**
12. ¿Se puede limitar el número de conexiones a un servidor ftp? Razónalo.

Si
max_clients:10
max_per_ip:10







