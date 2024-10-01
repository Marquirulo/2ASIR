# Obtener información del sistema y del hardware en Linux

| COMANDO  | EXPLICACION  |
|----------|--------------|
| lsb_release -a   | **# Muestra la version del linux**  |
| uname -a   | **# Informacion sobre el kernel**  |
| whatis   | **# Explicacion sobre la función del comando**  |
| apropos   | **# Da todos los comandos en cuyo manual se menciona la busqueda**|
| lscpu   | **# Info de la CPU**  |
| cpuid   | **# Info de la CPU (Necesita instalar)**  |
| lspci   | **# Info sobre dispositivos PCI**  |
| neofetch   | **# Resumen del HW**  |
| lsusb -vvv   | **# Info sobre los USB con 3 verbose**  |
| lsscsi   | **#**  |
| lshw   | **# Herramienta principal para info sobre todo el HW**  |
|   \\_ -html>/*doc.html* | **# Exporta la info a un HTML**  |
|   \\_ -c *tipoHW* | **# Permite filtar por tipo de HW**  |
|   \\_ -x | **# Muestra una GUI**  |
|   \\_ -short | **# Forma abreviada**  |
| inxi   | **# Resumen del HW con colores**  |
| ethtool *interfaz*   | **# Info sobre la interfaz ethernet**  |
| dmidecode   | **# Info sobre el HW**  |
|   \\_ -t *tipo* | **# Filtra y si se pone sola la opción lista todos los posibles valores**  |
|   \\_ -s *keyword* | **# Filtra y si se pone sola la opción lista todos los posibles valores**  |
| lsdev   | **# Lista todos los dispositivos E/S**  |
| swapon -s   | **# Info sobre el swap (cat /proc/swaps)**  |
| free -h   | **# Info sobre la memoria (cat /proc/meminfo)**  |
| acpi -v   | **# Info sobre la baterí ay el AC**  |
| lsmod   | **# Lista los drivers**  |
| modinfo *modulo*  | **# Info sobre el driver indicado**  |
| modprobe *modulo* | **# Añade o quita drivers al kernel**  |
| ifconfig   | **# Configuracion de interfaces ethernet**  |
| iwconfig   | **# Configuracion de interfaces inalámbricas**  |
| lsblk   | **# Lista los discos y sus puntos de montaje**  |
| fdisk   | **# Trabaja con volúmenes y particiones**  |
| \\_ -l   | **# Lista particiones**  |
| mount   | **# Monta dispositivos**  |
| sysinfo   | **# Información del sistema con GUI**  |
| hdparm   | **# Modifica parámetros de los volúmenes**  |
| **No entra**  | **Comandos para monitor y gráfica** |
| glxinfo   | **#**  |
| xrandr   | **#**  |
| aplay -l | **#**  |
