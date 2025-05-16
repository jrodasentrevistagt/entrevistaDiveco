# Aplicación Laravel

Esta es una aplicación Laravel desarrollada para Olympia.

## Usuarios predeterminados

La aplicación cuenta con un usuario predeterminado para iniciar sesión:

- **Nombre de usuario:** hmerida
- **Correo electrónico:** hmerida@grupo-diveco.com
- **Contraseña:** password

## Instalación

1. Clonar el repositorio
2. Ejecutar `composer install`
3. Configurar el archivo `.env`
4. Ejecutar `php artisan migrate`
5. Ejecutar `php artisan db:seed` para cargar los usuarios predeterminados
6. Ejecutar `npm install`
7. Ejecutar `npm run dev` para compilar los recursos

## Ejecución en PowerShell

Si encuentras problemas para ejecutar scripts en PowerShell, necesitarás cambiar la política de ejecución:

```
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
```

Después podrás ejecutar `npm run dev` sin problemas. 