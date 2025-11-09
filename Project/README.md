# Project (converted to minimal MVC)

This repository was reorganized into a minimal PHP MVC structure. The public web root is `public/`.

What I created:
- `public/index.php` - front controller (use `?page=home` etc.)
- `public/assets/css/styles.css` - site styles (moved)
- `public/assets/js/script.js` - site JS (moved)
- `public/resources/` - place your images here (see notes)
- `app/controllers/PageController.php` - simple router/controller
- `app/models/*` - BaseModel and example UserModel
- `app/views/*` - views (header, footer, home, landing, profile, shop, about, contact, admin, games/game1)

Quick run (from project root, requires PHP installed):
```powershell
php -S localhost:8000 -t public
```

Notes:
- I copied CSS/JS into `public/assets`. Please copy the actual image files from `Backend/resources` into `public/resources` so icons and logos appear (files referenced: `logo.png`, `default-avatar.png`, `user-bg.png`, `admin-bg.png`, `game-placeholder.png`).
- The views are simple PHP partials (header/footer + body). Add business logic into `app/models` and more controllers as needed.
