# Instructions to Enable PHP intl Extension

The Filament admin panel requires the PHP `intl` extension to work properly, especially with French locale.

## For Herd Lite (Windows)

1. Open the PHP configuration file:
   ```
   C:\Users\lahbo\.config\herd-lite\bin\php.ini
   ```

2. Find the line that says:
   ```
   ;extension=intl
   ```

3. Remove the semicolon to uncomment it:
   ```
   extension=intl
   ```

4. Save the file and restart your web server (Herd Lite).

5. Verify the extension is loaded:
   ```bash
   php -m | findstr intl
   ```

## Alternative: Using XAMPP/WAMP

If you're using XAMPP or WAMP:
1. Open `php.ini` in your PHP installation directory
2. Find `;extension=intl` and uncomment it
3. Restart Apache

## Verify Installation

After enabling, run:
```bash
php -m | findstr intl
```

You should see `intl` in the output.

## Note

If you cannot enable the intl extension, the admin panel will still work but may have limited localization features. The current setup will automatically fall back to English if intl is not available.

