PHP MVC 4 Dummies
===========

A Simple PHP MVC Framework

### make Hello World

edit `/routes.php`

```php
Router::get("/","HomeController","index");
```

in `/controllers` make `HomeController.php` 

```php
class HomeController extends BaseController
{
      public function index(){
          $this->templateEngine->set('greeting','hello world');
          $this->templateEngine->display('home.tpl');
      }  
}
```
in `/views/templates` make  `home.tpl` 

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>hello world</title>
</head>
<body>
    <h1>{$greeting}</h1>
</body>
</html>
```


