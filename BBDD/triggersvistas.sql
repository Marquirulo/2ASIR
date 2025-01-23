/*Basicamente al hacer un insert a una vista hacemos un trigger que haga que lo inserte en la tabla real 
y de esa  manera no mutan las tablas porque la PK se la damos en el trigger*/

/*ejemplo*/

create or replace view v_listaclientes(nomb,ape)
as select nombre,apellido1 from cliente;

create or replace trigger vtrigger
instead of insert into v_listaclientes
for each row
begin
  insert into clientes ((select max(nrocli)+1 from clientes),:NEW.nomb,:NEW.ape);
end;

/
##########VISTA###########
create or replace view v_lista(nomb,ape1,ape2,cred,total)
as select nombre,apellido1,apellido2,credito,total_pedido
      from clientes c, pedidos p
      where c.nrocli = p.nrocli;
#####trigger0##########
create or replace trigger trigger2
instead of insert into v_lista
for each row
declare
    nuevo number;
begin
  nuevo := select max(nrocli)+1 from  clientes
  insert into clientes (nrocli,nombre,apellido1,apellido2) values (nuevo,:NEW.nomb,:NEW.ape1,:NEW.ape2,:NEW.cred);
  insert into pedidos (nroped,fecha,total,nrocli) values ((select max(nroped)+1 from pedidos),sysdate,:NEW.total,nuevo);
end;
##############trigger1##############
create or replace trigger trigger3
insetead of update of v_lista
for each row 
declare
    cliente number
begin
  select nrocli into cliente from clientes
      where nombre = :NEW.nombre;
update cliente
    set credito = :NEW.credito
  where nrocli = cliente;
update pedidos
  set total_pedidos = :NEW.total_pedido
  where nrocli = cliente
end;
