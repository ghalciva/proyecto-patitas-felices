﻿SELECT 
  persona.id_persona, 
  persona.nombre, 
  persona.apellido, 
  persona."contraseña", 
  persona.correo, 
  persona.direccion, 
  persona.fecha_nac
FROM 
  public.persona, 
  public.usuario;
