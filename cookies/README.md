# Instalar una librería de traducción
https://statickidz.com/proyectos/traductor-google-api-php-gratis/

> ***Con esta librería vamos a poder traducir textos de un idioma a otro.***
> 
* Su uso es gratuito y no requiere de una clave de acceso
```bash
composer require statickidz/php-google-translate-free

 ```

```php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'es';
$target = 'en';
$text = 'verdadero';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

echo $result;
```

