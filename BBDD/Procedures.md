## Procedimientos
```sql
  CREATE or REPLACE PROCEDURE Nombre_Procedimiento  
    [(Lista de Parametros)]  
  IS / AS 
    (Declaracion de variables locales)  
  BEGIN  
    Instrucciones  
    (EXCEPTION
        Instrucciones)  
  **END Nombre_Procedimiento**  
```

## Funciones
```sql
  CREATE or REPLACE PROCEDURE Nombre_Procedimiento  
    [(Lista de Parametros)] 
  RETURN TIPO_DE_VALOR_QUE_DEVUELVE
  IS / AS
    resultado /*Obligatoria para el return*/
BEGIN
  (CONSULTA)
  RETURN salario;
```































