# 03.PHP - CONSTANTS


**Constans** are almost the same thing as variables. The difference only, that you can't change a value of it during the script.

A valid constant name starts with a letter or underscore and can potentily contain numbers (no $ sign needed).

Unlike variables, constants are authomatically global.


## How to ctreate a constant?

To create one use ***define()*** function. As two arguments we should write name and value of the constant:
```php
define("constant", 123);
echo constant; // it returms 123
```

There is one more opportunity to create a constant - by using **const** keyword:
```php
const constant = 123;
echo constant; // it returms 123
```


## What are predefined constants?

Predefined constants are the constants, which are defined in PHP by default and thay contain already any value. They are usually written in uppercase. For example, ***PHP_VERSION, PHP_INT_MAX, PHP_INT_MIN*** and so on:

```php
echo PHP_VERSION; // it returns 8.3.1 (current version intalled on my PC)
echo PHP_INT_MAX; // it returns 9223372036854775807 (the biggest integer available)
echo PHP_INT_MIN; // it returns -9223372036854775808 (the smallest integer available)
```

___
Link to the w3school tutorial about constants you will find <a href="https://www.w3schools.com/php/php_constants.asp">here</a>.






