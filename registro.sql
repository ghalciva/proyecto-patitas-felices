SELECT 
  persona.id_persona, 
  persona.nombre, 
  persona.apellido, 
  persona."contraseña", 
  usuario.id_usuario, 
  usuario.id_persona, 
  usuario."contraseña_user"
FROM 
  public.persona, 
  public.usuario
WHERE 
  persona.id_persona = usuario.id_persona;
