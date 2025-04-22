## POWERSHELL
- La salida de un Cmdlet es un objeto o una lista de objetos con sus clases y parámetros
- Es extensible, podemos crear nuestros propios de Cmdlets
- Permite permite navegar por el registro como si fuera un arbol de directorios
- No solo sirve para automatizar tareas sino que se puede usar para gestion de la nube, AD, Exchange, DSC...
- Depende de la version de PSH varian los Cmdlets

| Orden | Breve descripción |
|-------|-------------------|
|Get-Host|**# Muestra informacion sobre el terminal entre ellos la version de PSH**|
|$PSVersionTable|**# Muestra la version de Powershell**|
|Get-Command|**#**|
|\\_ -verb *Get*|**# Es como poner \*Get\***|
|\\_ -noun *Service*|**# Es como poner \*Service\***|
|\\_ -CommandType *Alias*|**# Permite filtrar por alias,cmdlet...**|
|Get-Module|**# Los módulos son los "plugins" que añaden cmdlets a PSH**|
|\\_ -All|**# Muestra todos los modulos anidados**|
|\\_ -ListAvailable|**# Para ver todos los comandos relacionados con un módulo**|
|Get-Help *Cmdlet*|**# Muestra ayuda del comando (Hay que tenerlo actualizado con Update-Help)**|
|Stop-Computer|**# Apaga el PC**|
|Restart-Computer|**# Reinicia el PC**|
|Get-History|**# Muestra el historial (ALIAS: h)**|
|\\_ -Id *n*|**# Muestra el comando en la posicion indicada**|
|Invoke-History *n*|**# Ejecuta el comando en esa posicion**|
|Start-Sleep -Seconds *segundos*|**# Es el sleep de Linux**|
|Get-PSProvider|**# Permite ver los proveedores por los que nos podemos mover con cd (C:, HKLM, Alias...)**|
|New-PSDrive|**# Crea una nueva unidad**|
|\\_ -Name Office|**# Da el nombre a la unidad**|
|\\_ -PSProvider FileSystem|**# Indica tipo de proveedor**|
|\\_-Root "C:\Program Files\Microsoft Office\OFFICE11|**# Indica la ruta a la que se asocia**|
|Get-ChildItem|**# ls**|
|\\_ -Recurse|**# Muestra las subcarpetas**|
|\\_ -Force|**# Muestra los archivos ocultos y losprotegidos por el sistema**|
|Out-*|**# Redirigen a la salida indicada (Out-File, Out-Host...), con -Paging hace como el more**|
|\|Get-Member|**# Muestra las propiedades y métodos del objeto**|
|Get-Date|**# Saca la fecha**|
|ConvertTo-*|**# Convierte las salidas a HTML, CSV...**|
|Select-Object|**# Te permite extraer solo x propiedades del objeto (Se puede usar -First y -Last como head y tail)**|
|Sort-Object|**# Ordena (-Descending pra la inversa)**|
|Copy-Item|**# Copia**|
|New-Item|**# Con -ItemType indicas que tipo quieres crear**|
|Rename-Item|**# Renombra**|
|Measure-Object|**# Cuenta**|
|Set-Content|**# Es el equivalente a >**|
|Add-Content|**# Es el equivalente a >>**|
|Select-string|**#búsqueda de texto y patrones en cadenas y archivos. Por defecto busca la primera ocurrencia en cada línea. Similar a find o findstr en Windows y grep en \*nix.**|
|\\_-Path|**#ruta del archivo donde buscar**|
|\\_-AllMatches|**#todas las ocurrencias en cada línea**|
|\\_-Pattern|**#patrón o expresión regular para la búsqueda**|
|\\_-CaseSensitive|**#Determina que debe distinguirse entre mayúsculas y minúsculas.**|
|\\_-Exclude ”string”|**#Excluye los elementos especificados**|
|\\_-Include “string”|**#Incluye únicamente los elementos especificados**|
|\\_-NotMatch “patrón”|**#Busca texto que no coincide con el patrón especificado**|
|\\_-Context <Int32>|**#Captura el número especificado de líneas antes y después de la línea con la coincidencia. Permite ver la coincidencia en su contexto.**|
|Test-Path *ruta*|**# Verifica si la ruta existe**|
|Compress-Archive|**# Comprime un archivo**|
|Expand-Archive|**# Descomprime archivo**|
|Tee-Object \[-Append\] -file *fichero de salida*|**# El tee**|
|Find-Package\|Module\|Script|**# Busca paquetes instalables en el repo de powershell**|
|\*-Printer|**#**|
|\*-PrinterDriver|**#**|
|Get-SmbShare|**# Muestra los recursos compartidos**|
||**#**|
||**#**|
||**#**|
||**#**|
||**#**|
||**#**|
||**#**|

> **Algunos tienen la opción -ErrorAction para indicar que hacer en caso de error.**

**Tipos de Comandos que se pueden ejecutar en PowerShell**  
- **Alias**: Nombre alternativo para un cmdlet o un elemento de un comando, como una función, un script, un archivo o un archivo ejecutable
- **Application**: Archivos no PowerShell que se encuentran en rutas de PATH (.exe habitualmente)
- **Cmdlet (Command-Let)**: son los comandos nativos de PowerShell orientados a tareas administrativas y basados en objetos.
- **Function**: es una lista de instrucciones que tiene el nombre que se le asigna. Cuando se ejecuta una función, se escribe su nombre. Las instrucciones de la lista se ejecutan como si las hubiera escrito en el símbolo del sistema.
- **ExternalScript/Script**: un archivo de texto sin formato que contiene uno o varios comandos de Windows PowerShell. Los scripts de Windows de PowerShell tienen la extensión .ps1
- **WorkFlow**: secuencia ordenada de actividades relacionadas que se ejecutan durante perídos extensos de tiempo para hacer cambios en cientos de ordenadores que pueden ser heterogéneos. Se escriben en lenguaje XAML propio de Microsoft para estos flujos.

```bat
:: Para crear un fichero vacio (0 bytes) en windows (Esto funciona con cualquier comando que no exista)
eco hola > ficherovacio.txt 2> nul
:: Para crear un fichero vacio (0 bytes) en windows (Esto funciona con cualquier comando existente)
echo hola > nul 2> ficherovacio.txt
```

### WINGET
```ps1
winget search <paquete>
	Nombre             Id                           Versión   Origen
	-----------------------------------------------------------------
	PowerShell         Microsoft.PowerShell         7.4.6.0   winget
	PowerShell Preview Microsoft.PowerShell.Preview 7.5.0.101 winget
winget install --id <paquete> --source <origen>
	winget install --id Microsoft.PowerShell --source winget
```

### Operadores de salida
Write-Warning \  
Write-Error----  Todos funcionan como echo per se formatean con distintos colores  
Write-Output  /  
Write-Information  /  
Write-Host / Es instantaneo, ya que interfiere en el piepline directamente  
Write-Verbose /  

|Valor | Descripción | Introduced in |
|------|-------------|---------------|
| 1 | Success Stream | PowerShell 2.0 |
| 2 | Error Stream | PowerShell 3.0 |
| 3 | Warning Stream | PowerShell 3.0 |
| 4 | Verbose Stream | PowerShell 3.0 |
| 5 | Debug Stream | PowerShell 5.0 |
| 6 | Information Stream | PowerShell 3.0 |

**$null y Out-Null*** son lo mismo  

**$?** Funciona como en Linux con true o False  
**$LASTEXITCODE** Da el código de error  

### Añadidos a regex
![imagen](https://github.com/user-attachments/assets/9ecb5c72-8908-4033-80d4-ae511581dc63)

### El Registro
Para trabajar con los registros se usan los comandos **ItemProperty**
![imagen](https://github.com/user-attachments/assets/664f131c-49ce-4813-a45e-a97734fed15e)

### Usuarios y Grupos
#### Usuarios
```find-Module localaccount```
Todos los comandos **_Verb_-LocalUser**
El UID 500 siempre es el Administrador

```ps1
# Para crear usuarios la contraseña debe ser SecureString
$Password = Read-Host -AsSecureString
$UserAccount = Get-LocalUser -Name "Anacleto”
$UserAccount | Set-LocalUser -Password $Password
# Otra forma equivalente sería:
Set-LocalUser -Name "Anacleto” -Password $Password -PasswordNeverExpires $true
```
#### Grupos
Todos los comandos **_Verb_-LocalGroup y _Verb_-LocalGroupMember**

#### Impresión
Se encuentra en **C:\Windows\System32\spool** 
```bat
echo "lo que sea" > lpt1 & :: Reenvía el texto a la impresora conectada por el puerto lpt1
:: Se puede realizar configuracion de impresoras con CMD mediante WMIC
```
```Get-Command [-Module PrintManagement | *print*]```
Comandos **_Verb_-Printer y _Verb_-PrinteDriver**  
Con Out-Printer se manda la salida de un comando a imprimir

##### Lenguajes de impresión:  
- **PostScript** -> Creado por Adobe y apoyado por Apple, este es un lenguaje de programación real, este asegura que el documento se vera igual independientemenet de laimpresora
- **PCL** -> Desarrollado por HP actualmente se ha convertido en un estándar, es mucho más simple y consume menos recursos
- **PDF** -> Desarrollado por Adobe es la "evolución" de PostScript, es multiplataforma, está muy utilizado, hay herramientas de software libre, permite aseguar el formato final

Tipos de permisos de impresión.  
- Administracionn de documentos
- Administracionn del servidor de impresion
- Capacidad de imprimir

```ps1
# Añadimos el driver (.inf)
pnputil /add-driver ".\HPLJ1020.INF" /install

# Instalar el driver
Add-PrinterDriver -Name "Xerox 1500 series" # El nombre debemos buscarlo
Get-PrinterDriver

# Agregar puerto
Add-PrinterPort -Name "LPTx:" # Impresora local
Add-PrinterPort -Name "TCPPort:" -PrinterHostAddress "192.168.137.100" # Impresora remota
Get-PrinterPort

# Agregar impresora
Add-Printer -Name "Xerox" -DriverName "Xerox 1500 series" -PortName "LPTx:“

# Compartir Impresora
Set-Printer -Name "Xerox" -Shared $True -ShareName "Xerox_Finanzas"
```

#### Recursos Compartidos
PowerShell si puede ver los recursos compartido ocultos de otros equipos
```ps1
Get-SMBShare # Muestra los recursos compartidos por el equipo
Get-SMBShareAccess # Muestra los permisos de un recurso compartido
New-SMBShare # Comparte un nuevo equipo
Grant-SMBShareAccess # Añade permisos de un recurso compartido
Revoke-SMBShareAccess # Revoca permisos de un recurso compartido
```

#### Gestion de Discos
```ps1
Get-Disk
Get-Partition
Get-Volume
```
###### Crear VHDs
```ps1
# Habilita Hyper-V
Get-WindowsOptionalFeature -Online -FeatureName Microsoft-Hyper-V
Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Hyper-V-All

# Discos VHDX permite mas tamaño y resistencia a cortes de suministro
New-VHD -Path d:\disco1.vhd -SizeBytes 2GB -Fixed # Crea disco de 2GB fijos
New-VHD -Path d:\disco2.vhdx -SizeBytes 3GB -Dynamic # Crea disco de 3GB dinámico

Mount-VHD -Path d:\disco1.vhd
Mount-VHD -Path d:\disco2.vhdx

Initialize-Disk -PartitionStyle GPT # Por DF lo inicializa como cd GPT

Set-Disk -Number 2 -PartitionStyle MBR

New-Partition -DiskNumber 2 -UseMaximumSize -DriveLetter H

Format-Volume -DriveLetter H -FileSystem NTFS

Clear-Disk -Number 1 -RemoveData
```
#### Gestion de Eventos
Los logs de eventos, por norma general funcionan de manera circular, es decir una vez se ha llenado la cuota de memoria dedicada a cada tipo de log (DF 20MB) se empiezana borrar los logs mas antiguos para escribir los nuevos.  
```ps1
Get-Eventlog
	-List
	-LogName # Muestra los tipos de logs
	-Newest n
Get-WinEvent -Listlog * # Sin el * los logs con 0 entradas dan errores
	-FilterHashtable @{LogName='system'} # permite filtrar logs grandes
Para filtrar por fechas es recomendable usar variables y Get-date
```
