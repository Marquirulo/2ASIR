PRÁCTICA 2.3: CONFIGURACIÓN DEL SERVIDOR DHCP

1. Actualizar repositorios en “debian servidor”
   
   **#apt update**
   **#apt upgrade**
   
3. Instalar el paquete isc-dhcp-server
   
   **#apt install isc-dhcp-server**
   
5. Asignar el interfaz para el servicio dhcp:
   
   Indicar el fichero:**/etc/default/isc-dhcp-server**
   
   Indicar el nombre del  interfaz:**INTERFACESv4=”ens34” (La que esta en modo Bridge)**

7. Editar el fichero /etc/dhcp/dhcpd.conf

    Añadir configuración dhcp:
  
  ![imagen](https://github.com/user-attachments/assets/f6705917-80ed-4a4e-826a-05111f2b3eac)
  
5. Reiniciar el servicio
    
      **#systemctl restart isc-dhcp-server.service**
      
6. En “debian cliente”, bajar y subir la tarjeta
    
      **#ifdown ens32**
   
      **#ifup ens32**
      
8. Comprobar la ip de “debian cliente”
 
  ![imagen](https://github.com/user-attachments/assets/91dea5a8-2729-4b62-b736-bb4d20a3eb8d)

8. UBUNTU DHCP
  ![imagen](https://github.com/user-attachments/assets/77b57914-dc61-48a8-999b-ab7bbd3a3cb2)

# IP FIJA

/etc/dhcp/dhcpd.conf

![Selección_008](https://github.com/user-attachments/assets/34f47c16-daa4-40ae-abd2-3feb1858ae90)


# Tiempo de renovacion de IP

![imagen](https://github.com/user-attachments/assets/cd409bae-10aa-47dd-bd42-2d757afcb02a)


## Fichero dhcp.leases

-ABRIR EL FICHERO /var/lib/dhcp/dhcpd.leases EN “DEBIAN SERVIDOR”

- ¿APARECE LA ANOTACIÓN DE PRÉSTAMO DE TODAS LAS MÁQUINAS? Razona la respuesta.
- 
  ![imagen](https://github.com/user-attachments/assets/7e654391-44d1-4665-b1fc-d8a998a75414)


Salen todas las ip que no tiene asignadas en dcp conf
