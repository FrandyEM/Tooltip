# Notas
### Instrucciones para agregar esta Tooltip

Esta **Tooltip** informativa se realizo con el proposito de inyectar de forma optima los **creditos de mis paginas web** (*o sea quien hizo y/o desarrollo la pagina*), debajo del mismo proyecto sin que interfiera con el codigo de la pagina del cliente, para dar mis links y redes sociales de contacto.

### Como se usa?

Para utilizar este pedazo de codigo en la pagina principal del tema de Divi se de integrar **jQuery** con alguna CDN.
Con eso nos aseguramos que el codigo AJAX funcionara de manera correcta.

##### Nota:
*Estoy utilizanod esta version de jQuery pero no se si pueda actualizarse y funcionar igual*

```
<head>
  "<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>" 
</heade>

```

#### Poniendo el codigo en un div al final de la pagina

Ejemplo de como deberia de colocarse el codigo al final de la pagina en div cerca del footer

```

<div id="github-content">
<script>
$(document).ready(function() {
    $.ajax({
        url: 'https://raw.githubusercontent.com/FrandyEM/frandyem.github.io/main/index.html', // Ruta a tu archivo HTML en GitHub
        type: 'GET',
        success: function(data) {
            $('#github-content').html(data); // Inserta el contenido HTML en el contenedor
        }
    });
});
</script>
</div>

```
**Nota:**
*La url que esta treyendo el codigo es la URL del repositorio de GitHub en **Raw***

Con esto deberia bastar para colocar todo correctamente.