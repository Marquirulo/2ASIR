# PRÁCTICA 2.9: CLIENTE    DORMIDO DE DHCP

## EDITAR /etc/network/interfaces EN “DEBIAN CLIENTE”

![imagen](https://github.com/user-attachments/assets/89c16078-5328-4ed5-9dce-49c0f3053afd)

![imagen](https://github.com/user-attachments/assets/b42d80a3-9b8d-441c-8070-950e4e9ed66f)

Se le asigna una dirección estática cualquiera, menos la que le asigna por defecto el DHCP, por ejemplo: 10.131.72.30


## BAJAR Y SUBIR LA TARJETA
  #ifdown ens32
  
  #ifup ens32

## LANZAR WIRESHARK EN “UBUNTU”

![imagen](https://github.com/user-attachments/assets/6eb38f15-02c9-4e6b-ad6e-b7a34abdf604)


## COMPROBAR LA ASIGNACIÓN DE IP

![imagen](https://github.com/user-attachments/assets/066d86bd-bad8-406a-ab69-d2ed5b38033f)

## PASADOS 30 Segundos vuelve a asignarle por DHCP la ip correspondiente

![imagen](https://github.com/user-attachments/assets/7c99c794-f505-4e87-864a-2d2ab3f29004)
