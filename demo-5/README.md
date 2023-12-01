# SQL Inyection 

- El usuario puede inyectarnos codigo sql mediante distintos medios, como por ejemplo mediante queries en la url en el navegador. puede cambiar la query por ejemplo, si una ruta esta preparada para que sea "example.com/?id=1" la puede cambiar a "example.com/?id=1;drop table users;". 

#### nunca hay que hacer esto, inyectar valores directamente a una query de esta manera: 
    $id = $_GET['id'];
    $query = 'select * from posts where id = {$id}; 

## solución:
- Dividir la query en dos partes. Primera parte sin los params de la query:
    $id = $_GET['id'];
    $query = 'select * from posts where id = ?; 
- Segunda parte:  pasar los params al metodo query($query, [$id]) de la clase Database y luego 
    enviarlos en el metodo execute($params).