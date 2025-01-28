# Table Spaces
    CREATE TABLESPACE nombre_tablespace
    DATAFILE ‘ruta/nombre_archivo’ [SIZE entero [K|M]
    [REUSE]]
    [AUTOEXTEND {OFF|ON claúsulas}],
    [‘nombre_archivo’ [SIZE entero [K|M][REUSE]
    [AUTOEXTEND {OFF|ON claúsulas}], ...] ...
    [DEFAULT STORAGE
    (INITIAL tamaño
    NEXT tamaño
    MINEXTENTS tamaño
    MAXEXTENTS tamaño
    PCTINCREASE valor
    )]
    [ONLINE|OFFLINE]

      
**DATAFILE**: Especifica los archivos de datos que componen el
tablespace.  
Para cada archivo tenemos las clausulas:  
**REUSE**: Reutiliza el archivo, si ya existe, o lo crea si no
existe.  
**SIZE** entero: Especifica el tamaño del tablespace, en
KB o MB(Tamaño mínimo de 1 GB de espacio con
cambio de tamaño automático.)  
**ONLINE**: El tablespace está disponible después de
crearlo. Activa tablespaces. Es el valor por defecto
**OFFLINE**: Desactiva el tablespace e impide el acceso al
mismo, cuando se vaya a alterar o borrar el tablespace
se recomienda desactivarlo, para evitar accesos durante
el proceso .  

**AUTOEXTEND**: Activa o desactiva el crecimiento automático de los
archivos de datos del tablespace.  
**AUTOEXTEND OFF**desactiva el crecimiento automático.  
**AUTOEXTEND ON**:  
Con está activada la opción el tablespace se expandirá automáticamente
en incrementos predefinidos cuando se alcance su límite de tamaño inicial.  
Formato:  
**AUTOEXTEND ON NEXT** entero {K|M} **MAXSIZE** {UNLIMITED| entero{K|M}}

**NEXT Nro entero:** Es el incremento de espacio en disco expresado en
Kilobytes o en Megabytes que se reservara automáticamente para el
archivo.  
**MAXSIZE**: es el máximo espacio en disco reservado para la extensión
automática del archivo.  
**UNLIMITED**: Significa que no hay limite del espacio en el disco reservado.
La vista para ver los tablespaces desde system :DBA_DATA_FILES.  
    SELECT FILE_NAME,DBA_DATA_FILES;FILE_ID,TABLESPACE_NAME,BYTES
      FROM
      
**DEFAULT STORAGE**: Define el almacenamiento por omisión para todos los
objetos que se creen en ese espacio de tabla con las siguiente clausulas.
initial: tamaño de la extensión inicial (10k).  
**next**: tamaño de la siguiente extensión a asignar (10k).  
minextents: número de extensiones asignadas en el momento de la creación
del espacio de tablas (1).  
**maxextents**: número máximo de extensiones.(99)  
**pctincrease**: Porcentaje en el que crecerá la siguiente extensión.
Por defecto es 50, lo que significa que cada extensión subsiguiente será un 50%
más grande que la extensión anterior.
