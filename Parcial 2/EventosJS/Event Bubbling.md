 # <center> **EVENT BUBBLING** <center/>

El flujo de eventos DOM (flujo de eventos) tiene tres etapas:
- Etapa de captura de eventos 
- Etapa de destino 
- Etapa de burbujeo de eventos.

**Captura de eventos(event capturing):** La comprensión popular es que cuando el mouse hace clic o activa el evento dom, el navegador comenzará desde el nodo raíz de afuera hacia adentro para la propagación de eventos, es decir, si se hace clic en el elemento secundario, si el elemento primario registra el evento correspondiente a través de la captura de eventos, el evento vinculado al elemento primario se activará primero.

**Evento burbujeante(dubbed  bubbling):** Contrariamente a la captura de eventos, la secuencia de burbujeo de eventos es de adentro hacia afuera propague el evento hasta el nodo raíz.

**La secuencia de activación del flujo de eventos estándar dom es:** Atrapa primero y luego burbujea es decir, cuando se desencadena el evento dom, el evento se capturará primero y el evento se burbujeará a través de la propagación del evento después de capturar la fuente del evento. Diferentes navegadores tienen diferentes implementaciones de esto, IE10 y versiones posteriores no admiten eventos de captura, por lo que hay una etapa de captura de eventos menos: existen navegadores como **IE11, Chrome, Firefox y Safari al mismo tiempo.**

## **addEventListener()método**
Este método establece un detector de eventos, y cuando ocurre un evento, la operación se realiza a través de los parámetros establecidos. La sintaxis es:

**addEventListener(event, function, useCapture)**

      Parámetroevent Es obligatorio. Significa que los eventos monitoreados, como clic, inicio táctil, etc., son eventos que no tenían el prefijo antes.


**Parámetrofunction** También es obligatorio, lo que significa que la función que se llamará después de que se active el evento puede ser una función definida externamente o una función anónima.  

**ParámetrouseCapture** Es opcional, complete true o false, Se utiliza para describir si el evento está burbujeando o capturando, verdadero significa capturar y el valor predeterminado falso significa burbujear.

## **Eliminar escucha de eventos**
Si desea eliminar el detector de eventos agregado por addEventListener (), useremoveEventListener(), La sintaxis es:

### **removeEventListener(event, function)**

Los parámetros son los mismos que addEventListener ().

## **Compatibilidad**
IE 8 y versiones anteriores, y Opera 7.0 y versiones anteriores, no son compatibles con los métodos addEventListener () y removeEventListener (). En su lugar, utilizan los siguientes métodos:

- Añadir evento:
attachEvent(event, function)

- Eliminar evento:
detachEvent(event, function) 