## PRÁCTICA 7.9.1- INSTALAR Y CONFIGURAR SERVIDOR DE CORREO EN UBUNTU

1.- En la máquina Ubuntu Cliente, instalamos el paquete postfix:

Elegir: sitio internet  
![imagen](https://github.com/user-attachments/assets/68341f28-5414-4ed7-823f-f50f026c9890)

Definimos el dominio

![imagen](https://github.com/user-attachments/assets/e78f2f10-0f9d-47a2-b7b9-c4edf502ce8c)

2.- Reconfigurar el archivo /etc/postfix/main.cf:  
	**dominio:grabanzo.com**
 
3.- Instalamos  squirrelmail:  

![imagen](https://github.com/user-attachments/assets/b115cecc-4baf-4b88-85d6-0560e6091cd4)

Buzones:  

![imagen](https://github.com/user-attachments/assets/660be721-08c8-4903-b767-b35a15633edf)


4.- Configuramos squirrelmail:  
**sudo perl /var/www/html/squirrelmail/config/conf.pl**

elegimos 2 Server Settings:

![imagen](https://github.com/user-attachments/assets/965d9d8f-0f03-42c2-aa61-8a067bdd3be5)

![imagen](https://github.com/user-attachments/assets/85841d6e-614b-4512-8e7d-464b91dabbe5)

5.-Instalar y ejecutamos squirrelmail utilizando apache desde el navegador para entrar en el correo.

![imagen](https://github.com/user-attachments/assets/10835858-49a2-4bae-b3d6-be05b7315112)

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

![imagen](https://github.com/user-attachments/assets/30ea81af-01af-4e98-898d-854d6f21201a)


![imagen](https://github.com/user-attachments/assets/077f09a3-fb89-40fd-a9ba-3bbe6347777b)


Vamos a utilizar squirrelmail para ver la recepción del correo enviado por
alu1 a alu2 y le respondemos:

![imagen](https://github.com/user-attachments/assets/7c31a087-2a96-485b-bef2-75095c7354c3)
