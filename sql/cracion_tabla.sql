-- creamos una nueva base de datos 

create database curso 

-- creamos nuestra tabla con el nombre curso
create table curso(
    id int not null,
    nombre varchar (50),
    periodos int,
    fase varchar (50),
    instructor varchar (50),
    creditos varchar (50)

)
