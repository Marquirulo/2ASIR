**VISTAS**

Una vista es una tabla virtual en la que se almacena una consulta select para simplificar

**CREATE [OR REPLACE]** **VIEW** nombre_vista
**[(COL1,...COLN)]**

**SELECT** VIEW_NAME, TEXT **FROM** USER_VIEWS;

**DROP** **VIEW** nombre _ vista;

**DESC** nombre-de-vista

No se pueden **insertar/delete** datos a la vista porque dependen de 2 tablas 
**Update** solo se puede hacer si solo afecta a 1 tabla 
