# ASIGNAR por DHCP IP FIJA

1.Editar del fichero de configuración del dhcp

  **#nano /etc/dhcp/dhcpd.conf**
  
 ![imagen](https://github.com/user-attachments/assets/85fa7bf5-1beb-4c3e-94a8-4b3f6e69aa27)

2.Añadir una ip (10.x.y.2) utilizando la Mac de de debian cliente

3.Reiniciar el servicio dhcp

  **#systemctl restart isc-dhcp-server.service**
      
4.En “debian cliente”, bajar y subir la tarjeta

  **#ifdown ens32**
  **#ifup ens32**
       
5.Comprobar ip de “debian cliente
  **#ip a s**
  
![imagen](https://github.com/user-attachments/assets/d0719890-3a5b-442d-8aa2-00bc5843343a)

6.En “ubuntu”, configurar la tarjeta para el dhcp

![imagen](https://github.com/user-attachments/assets/051ae271-80d4-407b-84bb-1536364d5e9e)

       
7.En “debian servidor”, añadir “ubuntu” al dhcp para asignarle ip fija (10.x.y.3), comprobar ip en "ubuntu"

 ![imagen](https://github.com/user-attachments/assets/4db01d9d-bfa1-4073-93cd-d15ebcd286e3)

8.Ver la configuración del dns

  **#cat /etc/resolv.conf**
  
![imagen](https://github.com/user-attachments/assets/8b58fa40-5945-4eff-b7e2-f537ffcb50ef)

## UBUNTU


1.En Ubuntu desactivar la tarjeta

  **#sudo ip link set ens37 down // ifdown esn37**
  
2.Iniciar captura con wireshark
       
3.Subir la tarjeta

  **#sudo ip link set ens37 up // ifup esn37**
    
4.Detener la captura

5.Analizar las tramas

![imagen](https://github.com/user-attachments/assets/39f68e1c-1bb9-4ccf-b06f-451b5215cd23)



