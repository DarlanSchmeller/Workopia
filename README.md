# Workopia

![Workopia Screenshot](/public/images/screen.jpg)

**Workopia** is a job listing web application developed entirely with native PHP. The application features custom routing, controllers, views, middleware, and a lightweight database layer, all organized using namespaces and PSR-4 autoloading.

My goal with Workopia was to create a practical, from‑scratch a modern PHP application. Along the way, I focused on clean code practices, modular structure, and a clear separation of concerns so that others can learn and build upon this foundation.

---

## ✅ Features

- Custom Laravel-inspired routing system  
- MVC architecture (models, views, controllers)  
- Role-based authorization middleware  
- PDO-based database access  
- Session handling  
- PSR-4 autoloading  
- Clear separation of concerns

---

## 📦 Requirements

- PHP 7.4 or higher  
- MySQL 5.7 or higher  
- Composer (for autoloading setup)

---

## ⚙️ Installation

1. Clone this repository into your local web server root (e.g., `www`, `htdocs`, etc.)  
2. Create a MySQL database named `workopia`  
3. Import the `workopia.sql` file into your database  
4. Rename `config/_db.php` to `config/db.php` and configure your database credentials  
5. Run `composer install` to configure autoloading  
6. Ensure your web server’s document root is set to the `public` directory  

---

## 🌐 Setting the Document Root

Set your document root to the `public` directory to ensure correct routing and asset loading.

### PHP Built-in Server

From the project root, run:

`php -S localhost:8000 -t public`


##### XAMPP

If you are using XAMPP, you can set the document root in the `httpd.conf` file. Here is an example:

```conf
DocumentRoot "C:/xampp/htdocs/workopia/public"
<Directory "C:/xampp/htdocs/workopia/public">
```

##### MAMP

If you are using MAMP, you can set the document root in the `httpd.conf` file. Here is an example:

```conf
DocumentRoot "/Applications/MAMP/htdocs/workopia/public"
<Directory "/Applications/MAMP/htdocs/workopia/public">
```

##### Laragon

If you are using Laragon, you can set right-click the icon in the system tray and go to `Apache > sites-enabled > auto.workopia.test.conf`. Your file may be named differently.

You can then set the document root. Here is an example:

```conf
<VirtualHost *:80>
    DocumentRoot "C:/laragon/www/workopia/public"
    ServerName workopia.test
    ServerAlias *.workopia.test
    <Directory "C:/laragon/www/workopia/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

---

## 📁 Project Structure and Notes

#### Custom Laravel-like router

Creating a route in `routes.php` looks like this:

`$router->get('/lisings', 'ListingController@index');`

This would load the `index` method in the `App/controllers/ListingController.php` file.

#### Authorization Middleware

You can pass in middleware for authorization. This is an array of roles. If you want the route to be accessible only to logged-in users, you would add the `auth` role:

`$router->get('/listings/create', 'ListingController@create', ['auth']);`

If you only want non-logged-in users to access the route, you would add the `guest` role:

`$router->get('/register', 'AuthController@register', ['guest']);`

#### Public Directory

This project has a public directory that contains all of the assets like CSS, JS and images. This is where the `index.php` file is located, which is the entry point for the application.

You will need to set your document root to the `public` directory.

#### Framework Directory

All of the core files for this project are in the `Framework` directory. This includes the following files:

- **Database.php** - Database connection and query method (PDO)
- **Router.php** - Router logic
- **Session.php** - Session logic
- **Validation.php** - Simple validations for strings, email and matching passwords
- **Authorization.php** - Handles resource authorization
- **middleware/Authorize.php** - Handles authorization middleware for routes

#### 🔄 PSR-4 Autoloading

This project uses PSR-4 autoloading. All of the classes are loaded in the `composer.json` file:

```json
 "autoload": {
    "psr-4": {
      "Framework\\": "Framework/",
      "App\\": "App/"
    }
  }
```

#### Namespaces

This project uses namespaces for all of the classes. Here are the namespaces used:

- **Framework** - All of the core framework classes
- **Framework\Router** - All of the router classes
- **Framework\Session** - All of the session classes
- **Framework\Validation** - All of the validation classes
- **Framework\Authorization** - All of the authorization classes
- **Framework\Middleware\Authorize** - Authorization middleware
- **App\Controllers** - All of the controllers

#### App Directory

The `App` directory contains all of the main application files like controllers, views, etc. Here is the directory structure:

- **controllers/** - Contains all of the controllers, including listings, users, home and error
- **views/** - Contains all of the views
- **views/partials/** - Contains all of the partial views

#### Other Files

- **/index.php** - Entry point for the application
- **public/.htaccess** - Handles the URL rewriting
- **/helpers.php** - Contains helper functions
- **/routes.php** - Contains all of the routes
- **/config/db.php** - Contains the database configuration
- **composer.json** - Contains the composer dependencies
- **workopia.sql** - Contains the database dump

## 📃 License

This project is licensed under the GNU General Public License v3.0. Please see [License File](LICENSE) for more information.
