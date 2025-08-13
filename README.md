# HangmanGame
Este proyecto es un simple juego del ahorcado, donde el usuario puede ir seleccionando las letras para completar una palabra, la letra se envia al backend para ser analizada y enviar la respuesta. El jugador pude ganar o perder.

# Caracteristicas principales:
- Iniciar juego
- El backend envia y guarda la palabra a buscar
- El usuario ingresa las posibles letras que considera que podria ser para formar la palabra
- El backend evalua la letra y genera una respuesta
- El frontend resibe y muestra la respuesta hasta ganar/perder
- El usuario puede volver a jugar.
  
## Tecnologías Utilizadas
- Backend: Python 3.11, Flask
- Frontend: PHP, JQuery, HTML, CSS
- Contenedor: Docker

## Instalacion local
### Clonar repositorio

### Crear y activar entorno
python -m venv env
source env/bin/activate

### Instalar los requerimientos
pip install -r requirements.txt

### Ejecutar la aplicacion
Flask run

# Licencia
MIT Licence © 2025 EdnaKL33
