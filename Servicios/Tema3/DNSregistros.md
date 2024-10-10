    • Registro A: Este registro se utiliza para convertir nombres de host en direcciones IP.
    • Registro CNAME: Se utiliza para crear nombres de host adicionales (alias), y para crear diferentes servicios bajo una misma dirección IP.
    • Registro NS: indica los servidores de DNS autorizados para el dominio, es decir, a quién hay que preguntar para saber acerca de los registros de midominio.info.
    • Registro MX: Se utiliza para asociar un nombre de dominio a una lista de servidores de correo para la recepción de emails. Nos interesa si queremos realizar redirecciones de nuestro correo o utilizar nuestro correo electrónico con otro proveedor.
    • Registro SPF: define qué servidores están autorizados para enviar correo electrónico con nuestro dominio.

  A  
El registro "A" hace referencia a la Dirección y es el tipo más básico de sintaxis de DNS.  Indica la dirección de IP real de un dominio.  El registro "AAAA" (también conocida como dirección IPV6) indica el nombre de alojamiento a una dirección IPv6 de 128 bits.  Las direcciones DNS normales se mapean para direcciones IPv4 de 32 bits.  
CNAME  
El registro de "CNAME" significa nombre canónico y su función es hacer que un dominio sea un alias para otro. El CNAME generalmente se utiliza para asociar nuevos subdominios con dominios ya existentes de registro A.  
MX  
El registro "MX" o intercambio de correo es principalmente una lista de servidor de intercambio de correo que se debe utilizar para el dominio.  
PTR  
El registro "PTR" significa "Punto de terminación de red". La sintaxis de DNS es responsable del mapeo de una dirección Ipv4 para el CNAME en el alojamiento.  
NS  
El registro "NS" significa Servidor de nombres e indica qué nombre del servidor es el autorizado para el dominio.  
SOA  
Un registro "SOA" significa "Comienzo de autoridad". Evidentemente, es uno de los registros DNS más importantes, dado que guarda información esencial, como la fecha de la última actualización del dominio y otros cambios y actividades.  
SRV  
Un registro "SRV" significa "Servicio". Se utiliza para la definición de un servicio TCP en el que opera el dominio.  
TXT    
Un registro "TXT" significa "Texto". Esta sintaxis de DNS permite que los administradores inserten texto en el registro DNS. A menudo se utiliza para denotar hechos o información sobre el dominio.  


    ejercicios 3.3:

    
1.- UTILIZACIÓN DE FORMA INTERACTIVA:

**apt install dnsutils**

![imagen](https://github.com/user-attachments/assets/2a48c128-3342-41c7-a018-10ccf107517f)

 
  • El nombre canónico de un dominio  
  ![imagen](https://github.com/user-attachments/assets/194eb6db-b23a-4bb8-aaf5-98ac1fb93553)

  • Consultar para el tipo de registro AAAA  
  ![imagen](https://github.com/user-attachments/assets/e27ba25b-2036-4f17-a65e-a81e9cedd276)

  • Consultar para el registro PTR  

  ![imagen](https://github.com/user-attachments/assets/5784145d-ed74-4fcf-ba49-ab309a2db331)

  
  • Consultar para el registro MX  
![imagen](https://github.com/user-attachments/assets/23dcea9d-cf1e-452c-ace3-caaebc75ed68)


2.- CONSULTAR DE MANERA NO INTERACTIVA:

  • El nombre canónico de un dominio

  ![imagen](https://github.com/user-attachments/assets/22ea0e5d-9c6a-4e91-9b88-26df849d5605)

  • Consultar para el tipo de registro AAAA

  ![imagen](https://github.com/user-attachments/assets/7babf7b5-9f6d-4cfd-9088-52f68c67f68b)

  • Consultar para el registro PTR

![imagen](https://github.com/user-attachments/assets/e737efe4-a777-4a7c-a9e0-786430413582)

  
  • Consultar para el registro MX 

  ![imagen](https://github.com/user-attachments/assets/7832c971-c762-44f2-884c-7f8ee99ec489)


  1. EJEMPLOS:
  • dig www.elpais.es

  ![imagen](https://github.com/user-attachments/assets/0cdeb392-4816-473d-ad5f-438a0dd66be1)


  • dig -x 8.8.8.4

  ![imagen](https://github.com/user-attachments/assets/092fb37f-1f2f-4481-97fe-df4eea309d39)


  • dig @8.8.8.8 es ns  

  ![imagen](https://github.com/user-attachments/assets/decda6c7-72f7-48cc-910d-eb41db85d36c)

  • dig www.marca.com @8.8.8.8

  ![imagen](https://github.com/user-attachments/assets/81ad1c38-a996-49c8-943a-4d672fa6ec25)


  • dig  -t CNAME.

  ![imagen](https://github.com/user-attachments/assets/016a4780-ee4f-492b-8d17-c3577f56761a)


2. Utilizas todas las opciones con otros dominios:
