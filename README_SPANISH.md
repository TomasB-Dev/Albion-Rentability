# Calculadora de Precios en Albion

## Descripción del Proyecto

La "Calculadora de Precios en Albion" es una aplicación web diseñada para ayudar a los jugadores de Albion Online a obtener información sobre los precios de diversos elementos del juego en diferentes ciudades. La aplicación permite a los usuarios seleccionar un ítem, especificar su calidad, tier y encantamiento, y luego consulta la API de Albion Online para obtener datos sobre los precios de compra y venta en varias ciudades.

## Estructura del Proyecto

El proyecto se organiza de la siguiente manera:

- **index.php**: Archivo principal que contiene la estructura HTML de la aplicación, los elementos de interfaz de usuario y la inclusión de archivos JS y PHP necesarios.

- **data/opciones.php**: Archivo PHP que incluye datos de diferentes categorías, como ropa, offhands, consumibles, capas y artefactos.

- **assets/js/Main.js**: Archivo JavaScript que maneja la lógica principal de la aplicación, incluyendo la solicitud de datos a la API de Albion Online y la presentación de resultados.

- **assets/js/Hora_UTC.js**: Archivo JavaScript que actualiza y muestra la hora UTC en la interfaz de usuario.

- **assets/js/modoOscuro.js**: Archivo JavaScript que implementa la funcionalidad de modo oscuro y guarda la preferencia del usuario en el almacenamiento local.

## Uso de la Aplicación

1. **Inicio**: Abre el archivo `index.php` en un navegador web para iniciar la aplicación.

2. **Selección de Ítem**: Utiliza el menú desplegable para seleccionar un ítem de interés.

3. **Configuración Detallada**: Elige el tier, calidad y encantamiento del ítem para obtener resultados más precisos.

4. **Consulta de Precios**: Haz clic en el botón "Consultar Precios" para obtener información sobre los precios en diferentes ciudades.

5. **Resultados Visuales**: Los resultados se mostrarán en la interfaz, incluyendo el precio mínimo y máximo de venta y compra en cada ciudad.

6. **Modo Oscuro**: Puedes alternar el modo oscuro haciendo clic en el botón con el ícono de luna.

## Recomendaciones y Tips

- **Actualización Automática**: La hora UTC se actualiza automáticamente cada segundo para mantenerte informado.

- **Gráficos Visuales**: Se incluye un gráfico visual que muestra los precios mínimos y máximos de venta por ciudad.

- **Persistencia del Modo Oscuro**: Tu preferencia de modo oscuro se guarda localmente para que se mantenga incluso después de cerrar y abrir la aplicación.

## Avisos Importantes

- **Datos en Tiempo Real**: La aplicación depende de la API de [Albion Data Project](https://www.albion-online-data.com/) y necesita conexión a internet para obtener datos actualizados.

- **Formato de Encantamiento**: Los encantamientos se indican con un número, por ejemplo, "Encantamiento 1". Asegúrate de seleccionar el encantamiento correcto.

## Colaboradores

- **Backend**: [TomasB/TomasB-Dev]
- **Frontend**: [TomasB/TomasB-Dev - IgnacioJulian]

## Licencia

Este proyecto está bajo la Licencia [LICENSE.md](LICENSE.md).

---
