  • CONFIGURAR EL DNS

En el archivo “/etc/resolv.conf” se añade una línea indicando la dirección del servidor que el equipo usará como DNS.

  • EN “DEBIAN SERVIDOR”, MODIFICAR EL FICHERO CON UNA IP NULA  
![imagen](https://github.com/user-attachments/assets/0b18c5c1-08ce-4cbd-830b-e8f993caadbc)

  • AL LANZAR UN PING, ¿QUÉ ERROR SALE? Razona la respuesta.
![imagen](https://github.com/user-attachments/assets/c3eecb67-6efc-4765-89af-d5081fdb8888)
**Da error porque no tiene forma de resolver el nombre debido a que el resolv.conf esta roto xd**

  • CONSULTAR “/etc/resolv.conf” EN “DEBIAN CLIENTE”  
  ![imagen](https://github.com/user-attachments/assets/526e8b52-5adf-455a-9804-b7caa74ba953)

  • BAJAR TARJETA EN “DEBIAN CLIENTE”  
  • CONSULTAR “/etc/resolv.conf”, ¿HA CAMBIADO ALGO?  
  **No**
  • MODIFICAR “/etc/resolv.conf” Y PONER IP NULA  
  ![imagen](https://github.com/user-attachments/assets/cad9c31e-514c-4e33-86f8-b7a6333e1c2c)
  • SUBIR TARJETA  
  • CONSULTAR “/etc/resolv.conf”, ¿HA CAMBIADO EL CONTENIDO? Razona la respuesta.  
  ![imagen](https://github.com/user-attachments/assets/1ca58047-b24f-4786-9080-46a942bdbcc4)
  **Se "renueva" el fichero del dns porque se lo da el servidor dhcp**

