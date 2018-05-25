# Prueba de desarrollo ElParking

Desarrollo de API Rest que permite consultar para un restaurante los alérgenos presenten  un plato, los platos en los que aparece un alérgeno concreto, además permite añadir ingredientes, platos y alérgenos.

## Sobre el desarrollo

El desarrollado se realizo con el framework Laravel, implementando el patrón "Repository" para separar la capa de datos, de la lógica del negocio.
En la carpeta app/Repositories se encuentran los archivos usados para el encapsulamiento.

En base de datos se realizó con MariaDB, se crearon 5 tablas: ("Allergen", "Dish", "Ingredient", y otras dos tablas relacionales de n-n entre Allergen <-> Ingredient, Dish<->Ingredient.


## Sobre la API

La api tiene el siguiente formato de consulta:
{parametro_1}/{id_parametro_1}/{parametro_2}/{id_parametro_2}

Por ejemplo esta consulta "dishes/3/allergens" obtiene los alergenos del plato con id=3

Y la siguiente "ingredients/3/dishes" obtiene los platos que tengan el ingrediente con id=3 

### Autor
* **Gustavo Galvis** 