# Usa una imagen oficial de PHP con servidor embebido
FROM php:8.2-cli

# Copia todos los archivos del proyecto al contenedor
COPY . /usr/src/myapp

# Establece el directorio de trabajo
WORKDIR /usr/src/myapp

# Puerto en el que correrá la app
EXPOSE 10000

# Comando que inicia el servidor PHP
CMD ["php", "-S", "0.0.0.0:10000", "status.php"]
