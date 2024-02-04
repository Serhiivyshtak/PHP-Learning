# 08.PHP - SUPERGLOBAL VARIABLES

Superglobals are the built-in variables, which are accessible from enywhere in code. Usually their names starts with "_" and is in uppercase.

The PHP superglobal variables are:
- $GLOBALS
- $_SERVER
- $_REQUEST
- $_POST
- $_GET
- $_FILES
- $_ENV
- $_COOKIE
- $_SESSION

## How to get all global variables?

***$GLOBALS:***
```php
$devs_name = "Serhii";
var_dump($GLOBALS); // it returns huge array of all predefined variables and also all user-defined global scoped variables. That means, that $devs_name is also in this array
```

Unlike to other programming languages, in PHP it is impossible to get any variable from outer code to a function (except superglobals).
To use access user-defined global variable in a function, we have to use $GLOBALS superglobal.
```php
$name = "Serhii";

function say_hi () {
    echo "Hello, my name is {$GLOBALS["name"]} and I am a developer";
}

say_hi(); // it returns "Hello, my name is Serhii and I am a developer"
```
Example bellow is invalid:
```php
$name = "Serhii";

function say_hi () {
    echo "Hello, my name is $name and I am a developer";
}

say_hi(); // Warning: Undefined variable $name
```

Also we can define global variables and use them in global scope:
```php
function name () {
    $GLOBALS["random"] = rand(1, 100);
}

name();

echo $random; // returns for example 48
```

## Another superglobals?

***$_SERVER:***

This superglobal gives information about headers, paths, and script locations:
```php
echo $_SERVER['PHP_SELF']; // in my case returns "/PHP_learning/index.php"
echo $_SERVER['SERVER_NAME']; // returns "localehost"
echo $_SERVER['HTTP_HOST']; // returns "localehost"
echo $_SERVER['HTTP_REFERER']; // undefined, because no referer
echo $_SERVER['HTTP_USER_AGENT']; // returns "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
echo $_SERVER['SCRIPT_NAME']; // returns "/PHP_learning/index.php"
```

***$_POST*** - this super global variable contains all the data we recieve from html form or javascript using post method;

***$_GET*** - returns information, which comes with help of get method;

***$_REQUEST*** - contains all information from $_GET, $_POST and $_COOKIE;

