
    SQL%FOUND
    SQL%notFOUND 
    SQL%ISOPEN
    SQL%ROWCOUNT

### Bucle WHILE
        
        Declare 
        CURSOR C1 IS  SELECT * FROM t1  
        **registro** c1%ROWTYPE  
    BEGIN  
    open c1;  
    fectch c1 into **registro**  ;
      while c1%FOUND loop  
        dbms.output.put_line(registro.c1);
        fetch c1 found registro;
    end loop;  
    close c1;  

### Bucle FOR  
    Declare 
    CURSOR C1 IS  SELECT * FROM t1  
      registro = c1%ROWTYPE  
    begin  
    for registro in c1 loop  
      dbms...  
    end loop  


### CURSORES DE ACTUALIZACION/DELETEACION

    declare c1 is select d.nombre, e.nombre, salario FROM dept d, emple e  
      where d.num=e.depno  
    for update salario  
    begin   
    for registro in c1 loop  
      update empleados   
        set salario = salario + 1000  
      where current of c1  
    end loop;  


