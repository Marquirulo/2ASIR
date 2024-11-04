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





