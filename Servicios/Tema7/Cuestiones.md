CUESTIONES SERVICIO DE CORREO ELECTRÓNICO

**1.- Comenta que diferencias hay entre un buzón y un alias**  
Un buzón es el espacio en el servidor donde se almacenan los mensajes de correo electrónico asociados a una cuenta. Un alias, por otro lado, es una dirección de correo que redirige los mensajes recibidos a otra cuenta de correo dentro del mismo dominio. Mientras que el buzón es un espacio físico para guardar correos, el alias es simplemente un redireccionador virtual dentro del sistema de correo​

**2.- Si lees frecuentemente el correo desde múltiples lugares, por ejemplo a través de un webmail y en nuestra casa con thunderbird, ¿qué protocolo recomendarías que se usara, POP o IMAP?**
El protocolo IMAP es el más adecuado para esta situación, ya que permite acceder y gestionar correos directamente en el servidor desde múltiples dispositivos. IMAP mantiene los mensajes en el servidor y sincroniza las acciones realizadas (como leer o borrar mensajes) en todos los dispositivos​

**3.-¿Qué relación existe entre un MTA, un MUA y un MDA? ¿Cuáles de ellos usan los protocolos SMPT, POP e IMAP? Describe el funcionamiento de cada uno de los protocolos.**

    MTA (Mail Transfer Agent): Se encarga de transferir mensajes entre servidores mediante el protocolo SMTP (Simple Mail Transfer Protocol).
    MUA (Mail User Agent): Es el cliente de correo que permite al usuario enviar y recibir mensajes. Utiliza SMTP para enviar correos y POP/IMAP para recibirlos.
    MDA (Mail Delivery Agent): Recibe mensajes del MTA y los entrega en el buzón del destinatario. Los protocolos POP e IMAP son utilizados por el MDA para la gestión del correo​

Descripción de los protocolos:

    SMTP: Protocolo para el envío de correos electrónicos. Se comunica entre cliente y servidor usando comandos y respuestas en el puerto 25.
    POP: Descarga mensajes del servidor al cliente y los elimina del servidor (generalmente). Opera en el puerto 110.
    IMAP: Mantiene los mensajes en el servidor, permitiendo gestionarlos desde varios dispositivos. Funciona en el puerto 143​

    .
**4.- ¿Existe algún tipo de prioridad si, para un dominio, existe más de un servidor de correo? Si es así ¿cómo se establece?**
Si existen múltiples servidores de correo para un dominio, las prioridades se establecen mediante los registros MX (Mail Exchange) del DNS. Cada registro MX tiene un valor de prioridad numérico, donde un número más bajo indica mayor prioridad​

**5.- Si uno de los servidores de correo devuelve un error permanentemente, ¿se sigue intentando con el siguiente?**

No, si un servidor devuelve un error permanente, el mensaje no será reenviado a otro servidor. Se considera que el destino no es alcanzable​

**6.- Si uno de los servidores de correo devuelve un error temporal, ¿qué ocurre?**
En caso de un error temporal, el MTA intentará reenviar el mensaje más tarde. Los reintentos pueden variar dependiendo de la configuración del servidor de correo​

**7.-En tu gestor de correo favorito, o en tu webmail busca la forma de mostrar el contenido fuente de un correo electrónico.
Busca una cabecera que nos indique el cliente de correo electrónico que ha usado el remitente.**
En el encabezado de un correo electrónico, el campo "User-Agent" o "X-Mailer" indica el cliente de correo que utilizó el remitente. Este campo está disponible al visualizar el contenido fuente del mensaje en la mayoría de los clientes de correo.

**8.-Busca en Internet cuatro proveedores de correo electrónico que ofrezcan cuentas de correo gratuitas. Haz un análisis de las prestaciones de las cuentas y de los extras de pago que ofrecen. (Dos conocidas y dos poco conocidas).**

    Conocidos:
        Gmail: Ofrece 15 GB de almacenamiento gratuito, integración con otros servicios de Google y opciones de búsqueda avanzadas. Extras de pago incluyen más espacio y funciones profesionales en Google Workspace.
        Outlook: Incluye 15 GB gratuitos, acceso a Microsoft Office online y calendario integrado. Extras de pago añaden más almacenamiento y funciones empresariales.
    Poco conocidos:
        ProtonMail: Se enfoca en la privacidad con cifrado de extremo a extremo. La versión gratuita ofrece 1 GB de espacio. Extras de pago incluyen almacenamiento adicional y dominios personalizados.
        Tutanota: Seguridad orientada con cifrado. La cuenta gratuita incluye 1 GB. Planes premium ofrecen más almacenamiento y funciones como dominios personalizados.

**9. Usando dig o nslookup descubre la lista de servidores de correo de un proveedor de correo en el que tengas una cuenta abierta. Indica cual es el servidor más prioritario.**
Usando comandos como dig mx dominio.com o nslookup -query=mx dominio.com, puedes identificar los servidores de correo de un dominio. El servidor con el valor más bajo en el campo de prioridad es el más prioritario.

![imagen](https://github.com/user-attachments/assets/c35d80e1-27a1-4b34-90b6-a4aae19fe53f)

**10. ¿Te puedes conectar al servidor anterior mediante telnet, para enviar un correo en el que tú seas el destinatario y el remitente?**

Puedes usar telnet para conectarte a un servidor SMTP. Comandos básicos para enviar un correo incluyen:

**No deja**

![imagen](https://github.com/user-attachments/assets/9ea13b8b-f1b0-44b9-9545-cd7204ef06c3)


**11. Busca información sobre los comandos extendidos de SMTP: AUTH y STARTTLS.
Concepto de smarthost.**

    AUTH: Permite la autenticación del usuario en el servidor SMTP para enviar correos, mejorando la seguridad.
    STARTTLS: Habilita cifrado TLS para proteger la comunicación.
    Smarthost: Es un servidor intermedio que retransmite correos a otros servidores. Se utiliza, por ejemplo, para enviar correos desde redes que restringen el tráfico SMTP saliente

