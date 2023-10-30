module.exports = {
    proxy: "localhost", // Reemplaza con la ruta adecuada a tu proyecto
    files: [
      "app/**/*.php",
      "recs/**/*.css" // Agrega las rutas de tus archivos CSS aquí
    ],
    reloadDelay: 100
  };