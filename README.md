# Proyecto de Consultas SQL con Laravel (Query Builder)

Este proyecto contiene una serie de ejercicios diseñados para practicar el uso de **Query Builder en Laravel**, junto con migraciones, seeders y endpoints tipo API para ejecutar cada consulta.

El proyecto incluye:
- Migraciones para las tablas `usuarios` y `pedidos`
- Seeders para insertar datos de prueba
- Controladores API con una función por cada ejercicio solicitado
- Uso de Postman para probar los endpoints

---
## Seeders (Datos de prueba)

En este proyecto se incluyen seeders que insertan al menos 8 usuarios y varios pedidos (cada usuario tiene uno o más pedidos).
Estos seeders facilitan las pruebas y la evaluación.

php artisan migrate --seed

---

## Endpoints
| Ejercicio | Descripción                                                                 | Endpoint sugerido |
| --------- | --------------------------------------------------------------------------- | ----------------- |
| 1         | Insertar 5+ usuarios y pedidos (implementado en seeders)                    | —                 |
| 2         | Obtener pedidos del usuario con ID 2                                        | `/api/ejer2`  |
| 3         | Obtener pedidos con datos del usuario (join)                                | `/api/ejer3`  |
| 4         | Pedidos con total entre $100 y $250                                         | `/api/ejer4`  |
| 5         | Usuarios cuyo nombre inicia con "R"                                         | `/api/ejer5`  |
| 6         | Contar pedidos del usuario con ID 5                                         | `/api/ejer6`  |
| 7         | Pedidos con usuario ordenados por total desc                                | `/api/ejer7`  |
| 8         | Suma total del campo `total`                                                | `/api/ejer8`  |
| 9         | Pedido más económico con nombre del usuario                                 | `/api/ejer9`  |
| 10        | Producto, cantidad y total agrupados por usuario (agrupación en Collection) | `/api/ejer10` |
