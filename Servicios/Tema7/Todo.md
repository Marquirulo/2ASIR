## PRÁCTICA 7.1.- CORREO LOCAL: 

➔ NOTA TEÓRICA  
✔ El correo electrónico nació inicialmente como una forma de enviar mensajes entre usuario locales.  
✔ Debian integra un servidor de correo “exim4” configurado para soportar el correo local.  

1.- En Debian Servidor creamos dos usuarios (alumno y alumno2) y usamos dos terminales, tty2 para el usuario alumno y tty3 para el usuario alumno2:  

2.- En el terminal tty 2 abrimos como alumno el cliente de correo (si no está instalado, instalar exim4) y enviamos un correo al usuario alumno2:  
sudo apt-get install mailutils  
mail alumno2 -- (se termina el mensaje con un . o ctrl + d)  


3.- En el terminal tty 3 comprobamos como alumno2, que ha llegado el mensaje:  
mail -- (aparecerá una N – Mensaje nuevo, Origen y Asunto)  
q -- (para salir del cliente de correo)  

![imagen](https://github.com/user-attachments/assets/e68c0edc-68c9-489a-ba16-827567941495)


4.- Seguimos en el terminal tty3, vamos al directorio /var/mail (buzones de los usuarios locales). Comprobamos que existe el fichero alumno 2. Abrimos ese fichero y verificamos su contenido:  

![imagen](https://github.com/user-attachments/assets/4f5026d3-d75f-4209-aea7-e7f6f9bac155)

5.- En el terminal tty 3 lazamos el cliente de correo(mail), vemos que tenemos un mensaje sin leer ( U ), leemos el mensaje ( 1 ) y cerramos el cliente ( q):  

![imagen](https://github.com/user-attachments/assets/b24b26cc-a942-42e4-b98f-4256fd75b934)

6.- En el terminal tty 3 abrimos el cliente de correo (debe aparecer que no tiene mensajes, lo ha movido al fichero mbox).  
Comprobamos que realmente el mensaje está en ese directorio  

![imagen](https://github.com/user-attachments/assets/f08a632b-6889-4d6d-bb45-f54902cfcea2)

7.- En el terminal tty 3 enviamos un correo como alumno 2 al usuario alumno:  

8.- En el terminal tty 2 consultamos el correo que nos ha enviado alumno 2, respondemos a ese correo (r 4 ) y cerramos el cliente ( q):  

➔ ejecutar mail ¿Qué ocurre?  


✔ El cliente de correo guarda una copia de nuestra respuesta en /var/mail/alumno (es el buzón del usuario en el servidor)  

![imagen](https://github.com/user-attachments/assets/66275961-ccfc-4e02-a13a-0e2ab2a10ae6)

## PRÁCTICA 7.2.- PROTOCOLO SMTP. CORREO ENTRANTE:

➔ NOTA TEÓRICA:

✔ El protocolo SMTP se utiliza para que los clientes envíen mensajes a los servidores de correo saliente y para que los servidores de correo MTA (agentes de transporte) encaminen mensajes entre ellos. Ejemplo:  
cuando un usuario de gmail envía un mensaje a un usuario de hotmail, lo envía al servidor de correo saliente de gmail y este se encarga de enviarlo al servidor de correo entrante de hotmail donde está el buzón del destinatario.
✔ SMTP es un protocolo de texto por tanto puede ser utilizado manualmente.

1.- En Debian Servidor en el terminal tty 2 y enviamos un mensaje mediante nc, y comprobamos que llega:  
nc localhost 25  
(mensaje del servidor 220)  
HELO there  
(mensaje del servidor 250)  
MAIL FROM: ejemplo.eje@ejemplo.com  
(mensaje del servidor 250 OK)  
RCPT TO: alumnoa 
(mensaje del servidor 250 Accepted)  
DATA  
(mensaje del servidor 354)  
Escribimos el mensaje  
.
(mensaje del servidor 250 OK)  
QUIT  
(mensaje del servidor 221)  

![imagen](https://github.com/user-attachments/assets/ed4a5811-5995-4eb5-8c13-159e65646641)

## PRÁCTICA 7.3.- SMTP Y DNS:

➔ NOTA TEÓRICA:
✔ Originalmente los receptores de correo eran directamente las máquinas con el nombre de dominio, ahora en su lugar se hace uso de un tipo de registro DNS (MX).  
✔ Estos registros indican el nombre de los servidores de correo SMTP destinatarios de los mensajes de un dominio.  
✔ Además indican la preferencia en el caso de que hubiera más de un registro MX.  
✔ Cuando un servidor de correo saliente envía un mensaje a otro, primero resuelve el registro MX del dominio, escoge el servidor de más preferencia, resuelve su nombre y se conecta con él.  

1.- Con nslookup averiguamos los nombres y prioridades de los servidores de correo de un dominio (ejemplo: gmail.com):  

![imagen](https://github.com/user-attachments/assets/9acf8267-3098-41ae-a1f2-c5e6c1a16a90)

2.- Nos conectamos al puerto 25 de cualquiera de los servidores anteriores usando nc como hemos hecho en la práctica anterior  

![imagen](https://github.com/user-attachments/assets/40717eca-2b25-4480-9d71-bb1dad3cdb64)


➔ ¿Podemos comunicarnos con ese servidor utilizando SMTP?:  

![imagen](https://github.com/user-attachments/assets/6f915ba0-a479-4cea-89a6-517f6fbd6de7)

➔ ¿Podemos enviar un mensaje a cualquier cuenta de ese servidor?:  

No.

## PRÁCTICA 7.4.- PROTOCOLO SMTP. CORREO SALIENTE:  

1.- Desde Debian Servidor enviamos un mensaje utilizando el protocolo SMTP con nc:  

nc localhost 25  
HELO there  
MAIL FROM: alumno@tvp-sv00  
RCPT TO: ejemplo.eje@gmail.com  

DATA  
Mensaje…  
.

QUIT  

➔¿Funciona? Razona la respuesta  

![imagen](https://github.com/user-attachments/assets/38521e71-8386-4009-80cd-9e828bd465d7)

## PRÁCTICA 7.5.- MTA. ENTRANTE Y SALIENTE:

➔ Vamos a configurar el servidor de correo de nuestro Debian Servidor para que  
haga el papel de servidor de correo entrante y saliente al mismo tiempo:

1.- En Debian Servidor lanzamos el asistente de configuración de correo de exim:
dpkg-reconfigure exim4-config

2.- Interpretamos cada una de las ventanas que aparecen en la configuración, cuando hacen referencia a correo entrante o saliente:

2.1.- Primera pantalla elegimos la opción de internet porque el correo se envía y recibe usando SMTP:

2.2.- La segunda pantalla nos pregunta el nombre del correo local (nombre del dominio)
( mailtvp.com):

2.3.- La tercera pantalla nos pregunta en que IP's queremos que escuche el servidor exim4 (por defecto aparece la 127.0.0.1) para evitar conflictos y restricciones lo dejamos en blanco:

2.4.- La cuarta pantalla tenemos que especificar los dominio para los que nos consideremos destinatarios del correo.(lo mismo que en la pantalla 2)

2.5.- La quinta pantalla indicamos los dominios para los que reenviaremos mensajes cuando el servidor actúa de correo saliente (lo dejamos en blanco):

2.6.- La sexta pantalla está relacionada con la anterior, indicamos las ip's asociadas a los dominios de reenvío (lo dejamos en blanco):

2.7.- La séptima pantalla es informativa sobre consultas DNS (elegimos no):

2.8.- La octava pantalla nos pregunta sobre el formato de los buzones (elegimos mbox):

2.9.- La novena y última pantalla nos pregunta sobre el almacenamiento en un único fichero o en varios (elegimos un único fichero):

3.- Comprobamos el estado de los puertos para el servicio exim4:


4.- Comprobamos el funcionamiento con una conexión manual (comandos SMTP),
de correo entrante y saliente. (Utilizando Debian Servidor y Debian Cliente):

	4.1.- Correo entrante – Desde Debian Cliente enviamos un mensaje a Debian Servidor con  SMTP:

![imagen](https://github.com/user-attachments/assets/63f97705-0944-4934-b75c-a132b0a60095)

	4.2.- Correo saliente – Desde Debian Servidor enviamos el mismo mensaje de la práctica 7.4:

![imagen](https://github.com/user-attachments/assets/fd1f323e-524f-4181-8bf8-ef92b64d73c6)

## PRÁCTICA 7.6.- CONFIGURANDO DNS:

➔ NOTA TEÓRICA:

✔ Para dar a conocer a los demás que Debian Servidor puede recibir mensajes de correo es necesario dar de alta registros de recurso MX.  
✔ Queremos conseguir que desde Debian Cliente hagamos una resolución DNS preguntando por un registro tipo MX para DebianServidor.com y recibir como respuesta que “con una prioridad por ejemplo de 10, es el receptor de esos mensajes”.  
✔ Para eso tendremos que repasar DNS, debemos tener bind funcionando, Debian Cliente tiene que usar a Debian Servidor como DNS  
✔ Declaramos una nueva zona y añadir el fichero de esa zona:  

1.- En Debian Servidor editamos el fichero /etc/bind/named.conf.local para declarar la nueva zona:  

2.- Creamos el fichero para la nueva zona, incluyendo estas líneas:   

mail IN A 192.168.131.181  
@ IN MX 10 mail  

3.- Desde Debian Cliente hacemos las pruebas correspondientes de nslookup para
nuestro servidor de correo:  
![imagen](https://github.com/user-attachments/assets/a5b150b0-c13e-4692-9ed0-3d0d1d93875b)

## RÁCTICA 7.7.- UNIENDO DEBIAN SERVIDOR Y DEBIAN CLIENTE:

➔ Objetivo: Poder enviar mensajes entre las dos máquinas: 

1.- En Debian Cliente (como alumno), enviamos un mensaje a alumno2 de Debian Servidor (alumno2@mailtvp.com):  
1.1.- Repitiendo las condiciones de la práctica 7.4:  

![imagen](https://github.com/user-attachments/assets/b6ffae60-61be-4778-9b2f-bc46e55f1c7c)

1.2.- Repitiendo las condiciones de la práctica 7.5 creando un dominio para la máquina Debian Cliente:  
➔ Reconfiguramos exim4:  
dpkg-reconfigure exim4-config  

➔ Añadimos y declaramos la nueva zona de Debian Cliente, en el DNS de Debian Servidor  

➔ Comprobamos con nslookup desde Debian Cliente que tenemos esa zona funcionando:  

![imagen](https://github.com/user-attachments/assets/b3b265ed-4792-432f-a84e-3cf83de864b7)

➔ Enviamos un correo desde Debian Cliente (como alumno@mailtvpcl.com) a  
alumno2@mailtvp.com:  

¿Funciona? **NO**

➔ Revisamos el fichero /var/log/exim4/mainlog de Debian Cliente:

![imagen](https://github.com/user-attachments/assets/f22f8fe0-ff79-4839-8c2f-34ab7448c8d4)

➔ Editamos el fichero /etc/exim4/exim4.conf.template y buscamos la cadena  
“ ignore_target_hosts” y la comentamos entera:

➔Reiniciamos exim4 en Debian Cliente e intentamos envíar el mensaje:

![imagen](https://github.com/user-attachments/assets/d5091276-b275-4de9-a923-6f4be9d1b7f2)

![imagen](https://github.com/user-attachments/assets/aab63a66-a987-4f7e-9ef4-fa4c41a8c16a)

1.3.- Envía un mensaje desde tu máquina debian servidor al usuario alumno del debian servidor  de tu compañero. ¿Funciona?
enviado:  
![imagen](https://github.com/user-attachments/assets/c2fa7df5-96c0-4655-b312-e7cdb0c16193)

recibido:  

![imagen](https://github.com/user-attachments/assets/a65a9725-498a-4a90-b151-5d0ba5929eb3)


1.4.-Envía un mensaje desde tu máquina debian cliente al usuario alumno del debian servidor  de tu compañero. ¿Funciona?



## PRÁCTICA 7.8. CAPTURA DE PAQUETES UTILIZANDO WIRESHARD


En Ubuntu, con wireshark funcionado:

1. Como alumno, utilizando nc, envia un mensaje a alumno2 de Debian Servidor (alumno2@mailtvp.com), ¿aparecen  paquetes smtp, pop…?

![imagen](https://github.com/user-attachments/assets/4c30a621-a230-4826-aaa1-c21d028f33fb)

2. Como alumno, utilizando mail, envia un mensaje a alumno de Debian Cliente (alumno@mailtvpcl.com), ¿Funciona? ¿aparecen  paquetes smtp, pop**…?

**No Deja**

3. ¿Puedes conectarte al servidor de correos de Debian Servidor y enviar un correo a un usuario de Debian Cliente? ¿Y al contrario?

**deja del cliente al servidor pero no al reves**

## PRÁCTICA 7.9.1- INSTALAR Y CONFIGURAR SERVIDOR DE CORREO EN UBUNTU

1.- En la máquina Ubuntu Cliente, instalamos el paquete postfix:

Elegir: sitio internet
Definimos el dominio

2.- Reconfigurar el archivo /etc/postfix/main.cf:

3.- Instalamos  squirrelmail:

descarga:  
![imagen](https://github.com/user-attachments/assets/692c4cc2-558d-4909-a49c-a0b2fe747330)

Instalamos apache, descomprimimos el squirrel y 

![imagen](https://github.com/user-attachments/assets/5baa92b0-0092-426f-afd6-8f4cb4c281b6)

Permisos:

![imagen](https://github.com/user-attachments/assets/210faec4-af4f-415a-ae28-beb25664e87c)

4.- Configuramos squirrelmail:
**sudo perl /var/www/html/squirrelmail/config/conf.pl**

![imagen](https://github.com/user-attachments/assets/185d0c10-d991-48bc-972a-5691f61bfe28)

![imagen](https://github.com/user-attachments/assets/4be9ca94-5afa-4c63-91e1-aa64c91a28bf)


Instalamos PHP,Mysql

5.-Instalar y ejecutamos squirrelmail utilizando apache desde el navegador para entrar en el correo.

6.- Creamos dos usuarios para hacer pruebas (alu1 y alu2):

➔ Hacemos pruebas de envío y recepción local:
✔ La estructura básica de postifix sería:
telnet localhost 25
mail from: alu1
rcpt to: alu2
data
subject: Prueba de correo POSTFIX
from: alu1
to: alu2
Esta es una prueba de funcionamiento de correo POSTFIX
.
Quit

Vamos a utilizar squirrelmail para ver la recepción del correo enviado por
alu1 a alu2 y le respondemos:


