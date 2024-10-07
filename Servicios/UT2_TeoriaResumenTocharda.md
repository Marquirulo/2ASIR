**1. DHCP FAILOVER protocolo**
. Tipos de conmutación por error

  -Es un protocolo por el cual dos Servidores DHCP se comunican entre ellos.
  Dependiendo de la configuración provee redundancia y balance de carga ,de esta manera, si un servidor falla, el otro puede tomar el control y evitar la interrupción del servicio

**2. Problemas asociados a DHCP**
. DHCP es un protocolo no autentificado

-Cuando un equipo es conectado conecta a la red no necesita meter credenciales para recibir una IP.

**3. BOOTP**
. Características
.  Funcionamiento de BOOTP
. Comparación de BOOTP y DHCP

-Proporciona un método dinámico para asociar estaciones de trabajo a servidores. También ofrece un método dinámico para asignar direcciones IP.

-Cuando el servidor recibe una petición del cliente, busca su dirección IP y le devuelve una respuesta. Esta respuesta contiene tanto la dirección IP del cliente como el nombre del archivo de carga.

-BootP es un protocolo más antiguo que utiliza un proceso de asignación de direcciones estáticas . Requiere la configuración manual de cada dispositivo de la red, lo que puede llevar mucho tiempo y ser tedioso. Por otro lado, DHCP es un protocolo más nuevo que utiliza un proceso de asignación de direcciones dinámicas


**4. ¿Qué configuraciones básicas incluye el DHCP?**
   
-Proporciona un método dinámico para asociar estaciones de trabajo a servidores. También ofrece un método dinámico para asignar direcciones IP.

-Cuando el servidor recibe una petición del cliente, busca su dirección IP y le devuelve una respuesta. Esta respuesta contiene tanto la dirección IP del cliente como el nombre del archivo de carga.

-BootP es un protocolo más antiguo que utiliza un proceso de asignación de direcciones estáticas . Requiere la configuración manual de cada dispositivo de la red, lo que puede llevar mucho tiempo y ser tedioso. Por otro lado, DHCP es un protocolo más nuevo que utiliza un proceso de asignación de direcciones dinámicas



**5. El servidor DHCP escucha por____67_______**

**El cliente DHCP escucha por_________68______**

 Demuéstralo.

![imagen](https://github.com/user-attachments/assets/53fd922e-aeb6-4f83-b05e-2a2901e4de55)

![imagen](https://github.com/user-attachments/assets/22a0c5eb-254c-4f3e-a957-2017076399df)

**6. Rellena**

| ORDEN | SIgnificado | cliente/servidor |
|---------------|-----------------|-------------|
|DHCPDISCOVER|Manda Un Broadcast en busca de un servidor DHCP|Cliete|
|DHCPREQUEST|Una vez encontrado un servidor dhcp le solicita una IP|Cliente|
|DHCPRELEASE|||
|DHCPOFFER|||
|DHCPACK|||
|DHCPNAK|||

**7. Significado de estos conceptos:**

var/lib/dhcp/dhcpd.leases:

Default-lease-time:

Max-lease-time:

Option subnet-mask:

Option broadcast-address:

Option domain-name-servers:

Option domain-name:

**8.- Arranque y parada manual  del servidor DHCP**

**9.- Archivo de concesiones**

**10.- Interfaz del servidor**

**11- Ejemplo reserva por MAC**

