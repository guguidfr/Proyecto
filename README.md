# Proyecto final de prácticas de la formación dual
Este repositorio te permite crear 5 máquinas usando Vagrant junto con Virtual box. 4 de estas 5 servirán como servidores, los cuales son:
- Un servidor de Apache que servirá como página de redirección e información.
- Un servidor de PostgreSQL. Se puede acceder de manera remota.
- Un servidor de Grafana que podemos conectar al servidor de PostgreSQL para representar gráficamente los datos.
- Un servidor de Wordpress que corre sobre Nginx que se puede personalizar para que la página funcione como un blog.

## Descripción de las máquinas:
Lass máquinas virtuales, exceptuando la de PostgreSQL, que corre CentOS7, corren Debian 11. Todas crearse actualizan los repositorios y descargan todas las actualizaciones que encuentren. En el caso de la máquina maestra o gestora (`main`), instalará automáticamente la última versión de Python3 y Ansible mediante un script *(en concreto usará el del repositorio [get-ansible-debian](https://github.com/guguidfr/get-ansible-debian))*. Con esto la máquina estará preparada para ejecutar playbooks y roles de Ansible. Recuerda exportar la clave de SSH para trabajar cómodamente con las demás máquinas. Se hace de la siguiente manera:
```
ssh-keygen -t rsa
ssh-copy-id vagrant@192.168.151
ssh-copy-id vagrant@192.168.152
ssh-copy-id vagrant@192.168.153
ssh-copy-id vagrant@192.168.154
```
> La contraseña por defecto del usuario *`vagrant`* es *`vagrant`*.
> Puedes cambiar esto más adelante una vez creadas las máquinas o desde sus scripts en la carpeta de [Vagrant-VMs](./Vagrant-VMs).

## Funcionamiento de los roles:
Si decides cambiar las direcciones IP de las máquinas, recuerda modificar el archivo `hosts`.
1. Se creará el servidor de Grafana. Accede a la página escribiendo en el navegador `http://192.168.1.151:3000`.
2. Se creará el servidor de base de datos PostgreSQL y habilitará el acceso remoto. El usuario por defecto es `postgres` y la contraseña es `postgres`.
> Puedes cambiar las credenciales modificando las variables del archivo de [variables](./roles/postgresql/vars/main.yml).
3. Se creará la página de Wordpress, instalando Nginx junto con las extensiones de PHP necesarias y creando por defecto una base de datos de MariaDB. Después se descargará y se instalará automáticamente Wordpress. Podrás acceder a la página mediante su IP.
> La contraseña del root en MariaDB es `toor`. Puedes cambiarla en las líneas 17 (donde la establecerás en `mysql -u root --password=toor -e "select(1);"`) y 27 y 31, donde deberás poner la que hayas decidido en la línea 17. Si quieres cambiar el nombre del usuario de la base de datos de WordPress y su contraseña, modifica las líneas 33 y 34. La base de datos para WordPress será `wordpress_db`.
4. Se creará el servidor de Apache con un nuevo `index`. Esta página de inicio contendrá información acerca del proyecto y los contribuyentes. Puedes sustituir esta página cambiando el código de los archivos de HTML y CSS en la carpeta de [templates](.roles/apache/templates/).

## Roles y/o funciones que ha creado cada uno de los contribuyentes:
[guguidfr](https://github.com/guguidfr):
- Grafana
- PostgreSQL
  - Roles de: postgresql y remote
- Apache
  - HTML+CSS
- Vagrantfle
  - Scripts shell
---
[ffrias9](https://github.com/ffrias9):
- Wordpress
  - Roles de: nginx, mariadb y wordpress
- Ajustes en los otros roles
