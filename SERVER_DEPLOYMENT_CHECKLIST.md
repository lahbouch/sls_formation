# Server Deployment Checklist for Recrutement Page

## Common Issues When Page Works Locally But Not on Server

### 1. Storage Symlink Missing
**Problem**: Images won't load because `public/storage` symlink doesn't exist.

**Solution**: Run on server:
```bash
php artisan storage:link
```

**Verify**: Check if `public/storage` exists and points to `storage/app/public`

---

### 2. Database Table Missing
**Problem**: The `offres_emploi` table might not exist on server.

**Solution**: Run migrations on server:
```bash
php artisan migrate
```

**Verify**: Check database:
```sql
SHOW TABLES LIKE 'offres_emploi';
```

---

### 3. File Permissions
**Problem**: Storage directories might not have write permissions.

**Solution**: Set proper permissions:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

---

### 4. Route Caching
**Problem**: Routes might be cached with old configuration.

**Solution**: Clear route cache:
```bash
php artisan route:clear
php artisan route:cache
```

---

### 5. View Caching
**Problem**: Views might be cached with old code.

**Solution**: Clear view cache:
```bash
php artisan view:clear
```

---

### 6. Config Caching
**Problem**: Configuration might be cached.

**Solution**: Clear config cache:
```bash
php artisan config:clear
php artisan config:cache
```

---

### 7. Component Files Missing
**Problem**: Blade components `x-navbar` or `x-footer` might not exist.

**Verify**: Check these files exist:
- `resources/views/components/navbar.blade.php`
- `resources/views/components/footer.blade.php`
- `app/View/Components/Navbar.php` (if using class-based component)

---

### 8. Environment Variables
**Problem**: `APP_URL` or other env vars might be incorrect.

**Solution**: Check `.env` file on server:
```env
APP_URL=https://your-domain.com
APP_ENV=production
APP_DEBUG=false
```

---

### 9. PHP Extensions Missing
**Problem**: Required PHP extensions might not be installed.

**Verify**: Check these extensions are installed:
- `pdo_mysql` or `pdo_pgsql` (for database)
- `fileinfo` (for file uploads)
- `mbstring` (for string functions)

---

### 10. Error Logs
**Check Laravel logs**:
```bash
tail -f storage/logs/laravel.log
```

**Check web server error logs**:
- Apache: `/var/log/apache2/error.log`
- Nginx: `/var/log/nginx/error.log`

---

## Quick Fix Commands (Run on Server)

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Create storage symlink
php artisan storage:link

# Run migrations
php artisan migrate

# Set permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Debugging Steps

1. **Enable debug mode temporarily** (in `.env`):
   ```
   APP_DEBUG=true
   ```

2. **Check browser console** for JavaScript errors

3. **Check network tab** for failed requests (404, 500 errors)

4. **Test the route directly**:
   ```bash
   php artisan route:list | grep recrutement
   ```

5. **Test database connection**:
   ```bash
   php artisan tinker
   >>> \App\Models\OffreEmploi::count()
   ```

---

## Most Common Issue

**90% of the time**, the issue is:
1. **Storage symlink missing** - Run `php artisan storage:link`
2. **Route cache** - Run `php artisan route:clear`

