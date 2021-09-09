# MODELO DE CAJA

El **modelo de caja** es la manera en que se representan todos los elementos **HTML** en una pagina. Cada Elemento genera una caja, el comportamiento de esa caja depende de su clasificacion: si es de linea o de bloque.  
  
A todas las cajas se les puede aplicar las siguientes propiedades: **width, height, padding, margin, border, background**. Lo particular de este concepto es que por defecto el **width** se refiere al **ancho del contenido** de un elemento (no al ancho total, de borde a borde).
  
* El **borde (border)**, es el límite que separa el interior del exterior del elemento.  
* El **márgen (margin)**, es la parte exterior del elemento, por fuera del borde.  
* El **relleno (padding)**, es la parte interior del elemento, entre el contenido y el borde.  
* El **contenido**, dentro del cuadrado es la parte interior del elemento, excluyendo el relleno.
  
Aqui anexo una imagen de como se comporta cada una de las propiedades.  

![ModelodeCaja](modelo-de-caja.png)
  
# ZONAS DE UN ELEMENTO
Antes de continuar, es importante saber que en CSS existen ciertas palabras clave para hacer referencia a una zona u orientación concreta sobre un elemento. Son conceptos muy sencillos y prácticamente lógicos, por lo que no tendrás ningún problema en comprenderlos. Son los siguientes:
  
![Positions](positions.png)

  
+ **Top:** Se refiere a la parte superior del elemento.  
+ **Left:** Se refiere a la parte izquierda del elemento.  
+ **Right:** Se refiere a la parte derecha del elemento.  
+ **Bottom:** Se refiere a la parte inferior del elemento.  
+ **Center:** En algunos casos se puede especificar el valor center para referirse a la posición central entre los extremos horizontales o verticales.
  
Estas son palabras clave que se utilizan muy a menudo en diferentes propiedades de CSS para hacer referencia a una zona particular.