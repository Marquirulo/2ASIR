PRÁCTICA 2.3: CONFIGURACIÓN DEL SERVIDOR DHCP

    1. Actualizar repositorios en “debian servidor”
        #apt update
        #apt upgrade
    2. Instalar el paquete isc-dhcp-server
        #apt install isc-dhcp-server
    3. Asignar el interfaz para el servicio dhcp:

        Indicar el fichero:/etc/default/isc-dhcp-server
        Indicar el nombre del  interfaz:INTERFACESv4=”ens34” (La que esta en modo Bridge)

    4. Editar el fichero /etc/dhcp/dhcpd.conf


- Añadir configuración dhcp:
  
  ![imagen](https://github.com/user-attachments/assets/f6705917-80ed-4a4e-826a-05111f2b3eac)

    5. Reiniciar el servicio
      #systemctl restart isc-dhcp-server.service
    6. En “debian cliente”, bajar y subir la tarjeta
      #ifdown ens32
      #ifup ens32
    7. Comprobar la ip de “debian cliente”
 
  ![imagen](https://github.com/user-attachments/assets/91dea5a8-2729-4b62-b736-bb4d20a3eb8d)



