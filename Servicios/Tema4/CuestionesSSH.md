1.Indica que tienes que configurar para que el usuario root no pueda conectarse con contraseña

![imagen](https://github.com/user-attachments/assets/2a2a187c-d9ff-4cdd-bf54-ff85362de612)

2.Indica que tienes que configurar para que no se puedan conectar al servidor SSH los usuarios con contraseñas vacías

![imagen](https://github.com/user-attachments/assets/57ac4c66-6b75-4d67-8c7b-00cef1c179c9)

3.Como puedes establecer que la conexión a servicio de SSh sea de 5 minutos

![imagen](https://github.com/user-attachments/assets/fd0d9ee4-ad83-43dc-a5a4-68546d773601)

4.¿Se puede editar el banner de bienvenida del servidor SSH modificando el valor?

![imagen](https://github.com/user-attachments/assets/9e0741b0-963c-4bf7-b4b7-0f20ecb931c6)

5.¿Se puede modificar el aspecto de la fecha y la hora al conectarnos al sevidor SSH?

**Si se puede**

6.¿Se puede configurar  en  el servidor SSH  la autenticación de los usuarios específicos?

/etc/ssh/sshd_config
**AllowUsers [USER | USER@HOST | * ]**

7.Enumera los comandos de SSH, pon un ejemplo de su funcionamiento.
    
    ssh usuario@IP
    ssh usuario@IP 'comando'
    scp origen user@IP:/rutadestino
    scp user@IP:/rutaorigen /destino









