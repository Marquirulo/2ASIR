PRÁCTICA 4.12.- INSTALACIÓN DEL SERVIDOR DE SSH

4.12.1.- En Debian Servidor instalamos el paquete ssh:

apt-get install ssh

Se genera una pareja de claves RSA y DSA que se guardan en /etc/ssh


4.12.2. - Comparar los permisos de los ficheros de la parte pública y la parte privada. ¿Tiene sentido?
**Si, los publicos tienen permiso de lectura para todos por que son los que vamos a compartir con los clientes y los privados no se deben compartir**

PRÁCTICA 4.13.- PRIMERA CONEXIÓN: COMPROBANDO EL FINGERPRINT

4.13.1.- En Debian Servidor modificamos el fichero /etc/ssh/ssh_config:

Modificamos la linea

HashknowHosts y la ponemos en NO


4.13.2.- Nos conectamos desde Debian Cliente a Debian Servidor:

ssh ip o nombre	

Nos envía la clave pública (ECDSA) y la aceptamos

**No nos deja conctarnos como root**

4.13.3.- En Debian Servidor comprobamos que nos ha enviado la clave pública

ssh-keygen -l -f /etc/ssh/ssh_host_ecdsa_key

![imagen](https://github.com/user-attachments/assets/92c3d55e-df0c-43cb-b54f-7389fece9056)



PRÁCTICA 4.14.- EL FICHERO known_hosts :

4.14.1.- Desde Debian Cliente, conectamos a Debian Servidor

¿Pide que comprobemos el fingerprint?
No, porque esta en la lista de known_hosts

Nos desconectamos de Debian Servidor


4.14.2.- En Debian Cliente abrimos el fichero ~/.ssh/known_hosts:
¿Que contiene?
**Las claves publicas del servidor**

4.14.3.- Desde Debian Cliente, conectamos por SSH a los Debian Servidores de otros compañeros:
¿Hay que validar la clave pública?
**claro que si**

4.14.4.- Comprueba el fichero known_hosts:  
![imagen](https://github.com/user-attachments/assets/c1832d38-2e53-43bc-9e52-34ff2c60f70d)


4.14.5.- Borramos la primera linea del fichero know_hosts y conectamos desde Debian Cliente:
¿Pide de nuevo que validemos la clave?
**Si**


PRÁCTICA 4.15.- COMPROBANDO LA SEGURIDAD DEL CANAL:	

4.15.1.- En Ubuntu Cliente lanzamos wireshark. Conectamos por ssh con Debian Servidor.
Ejecutamos algún comando (ej: ls):	
4.15.2.- Analizar el tráfico
    ¿La información va encriptada?	
**Va encriptado el usuario y la contraseña**


PRÁCTICA 4.16.- PERMITIR CONECTAR POR SSH AL USUARIO root:	

4.16.1.- Editamos el fichero de configuración ssh de Debian Servidor (/etc/ssh/sshd_config):
➔	Cambiamos la siguiente directiva
		PermitRootLogin yes
4.16.2.- Conectamos a Debian Servidor (ssh) desde Debian Cliente:	
		➔Primer método:
		✔ssh root@IP
		➔¿Que password pide?
  **La de root del servidor**
		➔Segundo método:
		ssh IP
		➔¿Que password nos pide?
  **La del usuario de la sesion actual, si no existe en el servidor con la misma password no nos dejara conectarnos**
➔	La sintaxis general del comando ssh es:
ssh user@hostname(o IP) [comando]
4.16.3.- Conectar a Debian Servidor (ssh) desde Debian Cliente (con los dos usuarios)añadiendo comando (ls):. .  
![imagen](https://github.com/user-attachments/assets/7224061e-0beb-433e-891e-0159a3d46e9d)

4.16.4.- Demostrar si se puede crear un archivo con los dos usuarios (root y alumno):	
![imagen](https://github.com/user-attachments/assets/9b8ae27e-71ed-43cf-b0f7-21002256e333)

![imagen](https://github.com/user-attachments/assets/152463e2-927b-466f-b6ea-efe69e9b8545)

**Nos deja crearlos en los respectivos directorios en los que tienen permisos**

4.16.5.- Comprobar que hace el comando ssh -l alumno tvp-sv00:	
**-l especifica el login-name**

4.16.6.- Comprobación del fichero /home/usuario/.ssh/known_hosts:	
**No ha creado el ficher known_hosts porque no me he logeado en local con ninguno de los debian**

4.17.1.- Borrar el contenido del fichero know de Debian Cliente, exceptuando una línea para poder comparar:

4.17.2.- Editamos el fichero **/etc/ssh/ssh_config** de Debian Cliente y cambiamos la directiva HashKnownHosty reiniciamos el servicio:

HashKnownHost no

Desde Debian Cliente conectamos a Debian Servidor mediante ssh
			la línea que nos ha generado ¿está encriptada? 

![imagen](https://github.com/user-attachments/assets/d26bfbb3-e2bc-4715-b1ae-ec3154143f4c)

PRÁCTICA 4.18.- MANIPULANDO known_hosts:

4.18.1.- En Debian Cliente comprobar la funcionalidad del comando ssh-keygen -F:
ssh-keygen -F 10.131.81.1  
**Nos da informacion relacionada con la ip que le pasamos**  
![imagen](https://github.com/user-attachments/assets/6e1adc30-7202-47c1-a885-ac898bae4275)

4.18.2.- En Debian Cliente comprobar la funcionalidad del comando ssh-keygen -R:
ssh-keygen  -R  10.131.81.1
**elimina la clave relacionada con el nombre que le pasas/IP**  
![imagen](https://github.com/user-attachments/assets/932ee17b-4d2b-4c74-9565-f1d894a8a53c)

4.18.3.- En Debian Cliente comprobar la funcionalidad del comando ssh-keygen -H:
ssh-keygen -H
**Hashea todos los known_hosts**  
![imagen](https://github.com/user-attachments/assets/d6d1ad45-9ccd-4ead-ba0c-80156da2e858)

4.18.4.- En Debian Servidor ejecutamos el siguiente comando:
ssh-keygen  -B -f /etc/ssh/ssh_host_ecdsakey  
**te muestra el tipo de cifrado de x clave privada**

PRÁCTICA 4.19.- FTP SEGURO:

➔ NOTA TEÓRICA:
ssh proporciona un ftp seguro conocido como sftp
El cliente siempre está disponible en Linux.
El servidor se instala automáticamente con ssh

4.19.1.- En Debian Cliente conectamos mediante el cliente sftp con Debian Servidor:

	sftp IP

4.19.2.- Comprobar los comandos con help:  
![imagen](https://github.com/user-attachments/assets/2924b45c-f325-47c3-8859-d5fc40639f67)

4.19.3.- Descargar algún fichero:  
**get ficherin.txt**  
4.19.4.- Subir algún fichero:  
**put ficherin.txt**  
4.19.5.- ¿ sftp utiliza la misma infraestructura que ssh ?  
**utiliza la conexion ssh para darte un entorno ftp**   
![imagen](https://github.com/user-attachments/assets/421d2481-5240-4913-9997-f3697527282e)

###SCP###

scp archivo usuario@host:rutaremota

scp usuario@host:rutaremota/archivoremoto rutalocal


1.- En Debian Servidor en el directorio personal del usuario alumno, creamos un fichero llamado copiame.tx


2.- Desde Debian Cliente conectamos con Debian Servidor mediante scp  y copiamos el fichero que hemos creado en el paso anterior y lo renombramos como copiame1.txt.

![imagen](https://github.com/user-attachments/assets/a3699613-b172-43cf-90fb-6891f7f5a3e4)


3.- En Debian Cliente vamos a copiar el fichero /etc/network/interfaces a la carpeta personal del usuario root de Debian Servidor:

![imagen](https://github.com/user-attachments/assets/4ea8cd88-77ae-4d1b-8a3d-75044412c21b)


4.- Desde Debian Cliente copiamos un fichero al directorio /home/alumno/Documentos de Debian Servidor, para ello antes debemos crear la carpeta Documentos.

![imagen](https://github.com/user-attachments/assets/2384a2fc-0ee1-4948-94a2-d8f808eaf676)

5.- Desde Debian Cliente seleccionamos el fichero a copiar /etc/passwd y
ejecutamos la copia con scp a / home/alumno/Documentos de Debian Servidor:

![imagen](https://github.com/user-attachments/assets/33e7edf2-54bc-47fd-9c46-b6d4ba9c9227)

6.- Desde Debian Cliente, copiamos el mismo fichero pero cambiándole el
nombre a passwd1.

![imagen](https://github.com/user-attachments/assets/1332286a-3421-461e-b8ce-805f4bbf7d5c)

7.- Desde Ubuntu Cliente vamos a copiar varios archivos a Debian Servidor
utilizando el comodín *.

![imagen](https://github.com/user-attachments/assets/af99be91-1d70-45de-b717-28767d5c8b39)


8.- Ahora vamos a transferir esos mismos ficheros desde Debian Servidor a la
carpeta /home/alumno/Descarga s de Ubuntu Cliente.

![imagen](https://github.com/user-attachments/assets/ab6e3d4b-3e6f-40c4-b0ee-d345ba037f0d)


9.- Realiza las cuestiones anteriores teniendo en cuenta que tu servidor es cliente del servidor de un compañero.

**Le absorbo sus datos**
![imagen](https://github.com/user-attachments/assets/3bfcbfa2-b25c-4888-acd4-dc0e42e61b22)

**Le mando un ficherin**
![imagen](https://github.com/user-attachments/assets/71eb143a-a55c-4022-bc26-fd94bc4af4ad)





