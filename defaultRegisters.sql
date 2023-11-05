-- Creación de roles --
INSERT INTO roles(nombre) VALUES ('Administrador'), ('Cocinero'), ('Usuario');

-- Creación de usuarios --
-- La contraseña por defecto es prueba1234
INSERT INTO users(cedula, nombre, apellidos, telefono, email, password, roleId)
    VALUES ('1002633963', 'Julián', 'Pachón Castrillón', '3146587759', 'jupachon@unal.edu.co', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 1),
           ('1027379538', 'Estefany', 'Ocampo López', '3451234567', 'eocampol@unal.edu.co', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 2),
           ('1036548910', 'Juan', 'González Navarro', '3148674212', 'jugonzalesn@unal.edu.co', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 3),
           ('1002635471', 'Admin', 'Prueba', '3451234567', 'admin@gmail.com', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 1),
           ('1002756891', 'Cocinero', 'Prueba', '3451234567', 'cocinero@gmail.com', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 2),
           ('1002635061', 'Usuario', 'Prueba', '3451234567', 'usuario@gmail.com', '$2y$10$3u8smL.7SNtzNRGEF/327O9MrZd/aDtyU4cL4w04e0bspGQU7rbUa', 3);


-- Creación de productos --
INSERT INTO platos(nombrePlato, precio, imagen)
VALUES
    ('Hamburguesa', 16000, 'img/platos/hamburguesa.jpg'),
    ('Lasaña', 15000, 'img/platos/lasagna.jpg'),
    ('Pizza Personal', 14000, 'img/platos/pizza.jpg'),
    ('Perro Caliente', 17000, 'img/platos/perroCaliente.jpg'),
    ('Carne Asada de Res', 35000, 'img/platos/carneAsada.jpg'),
    ('Pollo Frito', 38000, 'img/platos/polloFrito.jpg'),
    ('Carne Asada de Cerdo', 27000, 'img/platos/cerdoAsado.jpg'),
    ('Waffle', 15000, 'img/platos/waffles.jpg'),
    ('Creppe', 16000, 'img/platos/creppes.jpg'),
    ('Aromatica', 5000, 'img/platos/te.jpg'),
    ('Papas Fritas', 7000, 'img/platos/papasFritas.jpg'),
    ('Chocolate', 6000, 'img/platos/chocolate.jpg'),
    ('Costillas BBQ', 40000, 'img/platos/costillaBBQ.jpg'),
    ('Pollo a la Plancha', 26000, 'img/platos/polloAsado.jpg'),
    ('Ajiaco', 40000, 'img/platos/1683391815-Ajiaco.jpg');


-- Creación de mesas --
INSERT INTO mesas(nombreMesa)
VALUES
    ('Mesa #1');


-- Creación de pedidos --
INSERT INTO pedidos(cedulaUsuario, idMesa, idPlato)
VALUES
    (1002635061,1,1),
    (1002635061,1,8);

-- Creación de roles --
INSERT INTO rol_empleados(nombre)
VALUES
    ('Cocinero'),
    ('Mesero'),
    ('Personal de limpieza');

-- Creación de usuarios --
INSERT INTO empleados(cedula, nombre, apellidos, email, foto, idRolEmpleado)
VALUES
    (1003456781, 'José', 'Rivera López', 'jorilo@gmail.com', 'img/empleados/jorilo@gmail.com.jpg', 1),
    (1003412578, 'Luisa', 'Ocampo Gómez', 'luocgo@gmail.com', 'img/empleados/luocgo@gmail.com.jpg', 2),
    (1002637485, 'Samuel', 'Quintero Estrada', 'saques@gmail.com', 'img/empleados/saques@gmail.com.jpg', 3);

-- Creación de reservas --
INSERT INTO reserva_locals(cedula, fechaReservaLocal)
VALUES
    (1002635061, '2023-06-18'),
    (1036548910, '2023-06-04');
