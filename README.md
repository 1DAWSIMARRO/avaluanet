# avaluanet
## 1.Actualizar BD.
## 2. FILE ESTRUCTURE
```
  modules
  └── Nom_Modul(Ex:Alumne)
      ├── controller
      │    └── NomModulController(Ex:AlumneController)
      ├── model
      │   └── NomModulModel(Ex:AlumneModel)
      └── view
          ├── vista.html(Ex:FormAlumne)
          └── NomVista.js(Ex:FormAlumne)
```
 
Les classes controller i model tenen el mateix nom que el arxiu.
## 4.Crear rutes en paths.php (explicacio dins el arxiu).
## 5.Cambiar rutes en el controller i model si fa falta.
Exemple ruta a AlumneModel.php: MODEL_ALUMNE.’AlumneModel.php’. 
Igual en totes les rutes que es fagen a vista i controller.
## 6.Acces a modul
Per accedir a un modul fer un link/boto amb un enllaç al vostre modul i funcio a probar, el link te que tindre aquesta sintaxis: index.php?module=nomModule&function=nomFunction. Example: index.php?module=Alumne&function=alta.
Per probar, al principi es pot agregar en el header (utils/view/header.html). Cuan acabem les vistes cada grup estos link cambiaran de lloc al adecuat.
