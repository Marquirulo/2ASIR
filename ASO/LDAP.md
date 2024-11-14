# Ejemplos
dn: dc=curso01,dc=ies  
objectClass: top  
objectClass: dcObject  
objectClass: organization  
o: curso01.ies  
dc: curso01  

dn: cn=admin,dc=curso01,dc=ies  
objectClass: simpleSecurityObject  
objectClass: organizationalRole  
cn: admin  
description: LDAP administrator  

## Unidad Organizativa: "People"  
dn: ou=People,dc=curso01,dc=ies  
objectClass: organizationalUnit  
ou: People  

## Usuario capella
dn: uid=capella,ou=People,dc=curso01,dc=ies  
objectClass: inetOrgPerson  
objectClass: posixAccount  
objectClass: shadowAccount  
Jesús Contreras  

uid: capella  
sn: de Auriga  
givenName: Capella  
cn: Capella de Auriga  
displayName: Capella  
uidNumber: 10000  
gidNumber: 5012  
userPassword: capella  
loginShell: /bin/bash  
homeDirectory: /home/capella  
