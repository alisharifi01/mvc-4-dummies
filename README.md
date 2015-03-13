PHP MVC 4 Dummies
===========

A Simple PHP MVC Framewok

### make a Hello World

edit `routes.php`:

```php
Router::get("/","HomeController","index");
```

in controllers folder make HomeController 

```php
	class HomeController extends BaseController
  {
      public function index(){
          $this->templateEngine->assign('greeting','hello world');
          $this->templateEngine->display('home.tpl');
      }  
  }
```
in views/templates make  home.tpl 

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>hello world</title>
</head>
<body>
    <div id="container">
        <div style="text-align: center">
        <h1>{$greeting}</h1>
    </div>
    </div>
</body>
</html>
```


