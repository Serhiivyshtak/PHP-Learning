# 02.PHP - VARIABLES AND DATATYPES


*Variable* is a reusable container that holds any unit of data.

PHP is a dynamicly typed programming language, which means variables can contain values of different data types during their lifecycle.

Following datatypes exist in PHP: string, integer, float-number, boolean, null, array, object, resource.


## How to set a variable?

Variables in PHP must be set by using $ sign:
```php
<?php
$stringVariable = "random string";
$integerVariable = 123;
$floatVariable = 5.5;
$booleanVariable = true; // or false
$nullVariable = null; /* this datatype is used for representing a variable with no value. It can be set by developer, to write any algorythm or it can be returned, if variable is not defined yet*/
$array = array("random string", 123, true);

```


## How to find out datatype of variable?
There are a few methos, like *gettype(), is_null(), is_string(), is_bool(), is_double(), is_float(), is_int(), is_integer(), is_long(), is_numeric(),is_array(), is_object(), is_scalar()*  to check the datatype.

***gettype():***
```php
$number = 123;
$float = 1.2;
$str = "random string";
$bool = true;
echo gettype($number); // returns integer
echo gettype($float); // returns double
echo gettype($str); // returns string
echo gettype($bool); // returns boolean
```

***is_string():***
```php
$string_value = "random string";
$non_string_value = 12;
echo is_string($string_value); // returns 1 (true)
echo is_string($non_string_value); // returns nothing (false)
```

***is_null():***
```php
$null_value = null;
$non_null_value = "random string";
echo is_null($null_value); // returns 1 (true)
echo is_null($non_null_value); // returns nothing (false)
```

***is_bool():***
```php
$bool_value = null;
$non_bool_value = 123;
echo is_null($bool_value); // returns 1 (true)
echo is_null($non_bool_value); // returns nothing (false)
```

***is_int(), is_integer, is_long()***, all those methods work same way for integers:
```php
$integer_value = 123;
$non_integer_value = "random string"
echo is_int($integer_value); // returns 1 (true)
echo is_int($non_integer_value); // returns nothing (false)

// same with is_integer() and is_long()
```

***is_double(), is_float***, two those methods work same way for float-numbers:
```php
$float_value = 1.2;
$non_float_value = 123;
echo is_float($float_value); // returns 1 (true)
echo is_float($non_float_value); //returns nothing (false)

// same with doubleval()
```

***is_numeric()***, returns true if value is weather integer, float-number or numeric string*:
```php
$numeric_value_1 = 123;
$numeric_value_2 = 1.2;
$numeric_value_3 = "123";
$non_numeric_value = "random string";
echo is_numeric($numeric_value_1); // returns 1 (true)
echo is_numeric($numeric_value_2); // returns 1 (true)
echo is_numeric($numeric_value_3); // returns 1 (true)
echo is_numeric($non_numeric_value); // returns nothing (false)

/*numeric string - is a string (with quotes), which contains numeric value (weather integer, or float)*/
```

***is_array():***
```php
$array_1 = array(123, "random string", true);
$array_2 = [123, "random string", true];
$non_array = 123;
echo is_array($array_1); // returns 1 (true)
echo is_array($array_2); // returns 1 (true)
echo is_array($non_array); // returns nothing (false)
```

***isscalar()***, checks if a value is weather a number, float or a string:
```php
$string = "random string";
$number = 123;
$float = 1.2;
$array = [123, "random string", true];
echo is_scalar($string); // it returns 1 (true)
echo is_scalar($number); // it returns 1 (true)
echo is_scalar($float); // it returns 1 (true)
echo is_scalar($array); // it returns nothing (false)

```

## How to check existence of a variable?:
There are two methods, that are opposide to each other: *empty()* and *isset()*.

***empty()***, checks if a variable is empty:
```php
$empty_variable_1 = 0;
$empty_variable_2 = 0.0;
$empty_variable_3 = false;
$empty_variable_4 =  null;
$empty_variable_5 = "";
$empty_variable_6 = array();
$empty_variable_7 = "0" 
//method empty() will output 1 (true) with all of the variables above, for example:
echo empty($empty_variable_1); //returns 1 (true)
$string = "random string";
echo empty($string); //returns nothing (false)
```

***isset()***, works opposite way to *empty()*, it returns 1 (true), if variable has a value:
```php
$random_number = 123;
$empty_variable = null;
echo isset($random_number);
echo isset($empty_variable);
```


## How to convert variable?

**Type casting** in php refers to the process of converting a variable from one data type to another. It allows developers to explicitly define the desired data type for a variable, ensuring consistent behavior and accurate calculations. 

We can cast variables to another datattypes with help of casting functions(boolval(), doubleval(), floatval(), intval(), strval()), or with help of casting operators((string), (int), (float), (bool), (array), (object), (unset)).

***boolval():***
```php
$empty_string = "";
$string = "random string"
echo boolval($empty_string); // returns nothing (false)
echo boolval($string); // returns 1 (true)
```

***doubleval(), floatval()***, both are for converting variables to float datatype:
```php
$numeric_string = "200.5px";
$string = "random string";
echo floatval($numeric_string); //it returns 200.5 as a float
echo floatval($string); // it always retirns a 0 with unconvertable values

//same with doubleval()
```

***intval()***
```php
$numeric_string = "123px";
$string = "random string";
echo intval($numeric_string); // it returns 123 as an integer
echo intval($string); // it always returns a 0 with unconvertable values
```

***strval()*** works only for sclar values* and null:
```php
$integer_value = 123;
$float_value = 1.2;
$null_value = null;
$boolean_true_value = true;
$boolean_false_value = false;
echo strval($integer_value); // it returns string "123"
echo strval($float_value); // it returns string "1.2"
echo strval($null_value); // it returns nothing
echo strval($boolean_true_value); // it returns string "1"
echo strval($boolean_false_value); // it returns nothing


// sclar datatypes are the primitive datatypes: string, integer and float
```

Casting operators give the same result as casting functions, so there is no need to explain it additionally.


## Variables scope?

The scope of a variable is the context where it was defined. In PHP there are three types of scope:
- global (if variable was defined out of any function);
- local (if wariable was defined inside of any function);
- static (almost same as local but a bit different);

***Global scope:***
```php
$global_variable = 16;

function root () {
    echo sqrt($global_variable);
}

root(); // it will not work, because $global_variable has global scope
```

As you see in previous example, even if variable defined outside any function, it is not accessible everywhere. To access any global variable from a function, you need to keep it as a parameter, or use *global* keyword:

```php

$global_variable = 16;

function root ($num) {
    echo sqrt($num);
}

root($global_variable); // now it works and outputs 4
```
or
```php
$global_variable = 16;

function root () {
    global $global_variable;
    echo sqrt($global_variable);
}

root(); // now it works and outputs 4
```

***Local scope:***

```php
function calculate_area ($radius) {
    $pi = 3.14; // local variable
    echo $area = $pi * pow($radius, 2);
}

calculate_area(12); // this function is absolutely valid and outputs 452.16
```
In situation above we have a variable *$pi*, which was defined inside of function *calculate_area*. That means, we can not access it outside this function.

***static scope:***
Static scope is a unique type of scope, because it has a special ability to remember all changes to the value in function. What doe's it mean? Let's see an example:
```php
$random_int = 7;

function inc () {
    global $random_int;
    $value = 1;
    echo $random_int + $value;
    $value++;
}

inc(); // returns 8
```
Function *inc()* increments a global variable *\$random_int* and as expected returns 8. At the end of the function we increment *\$value* itself, so we expect, that by multiplay calling of this function, we will get outputs every time greather by one. But it won't:
```php
$random_int = 7;

function inc () {
    global $random_int;
    $value = 1;
    echo $random_int + $value;
    $value++;
}

inc(); // returns 8
inc(); // returns 8
inc(); // returns 8
inc(); // returns 8
```
It happens becaues this variable isn't static and it doesn't remember all changes that have been made to it. What will happen, if we use *static* keyword:
```php
$random_int = 7;

function inc () {
    global $random_int;
    static $value = 1;
    echo $random_int + $value;
    $value++;
}

inc(); // returns 8
inc(); // returns 9
inc(); // returns 10
inc(); // returns 11
```
Now we see, that *$value* isn't 1 anymore. It changes every time we call *inc()* function.

## What is important else?

Below you will find a few more useful functions to handle variables:

***get_defined_vars():***
```php
$string = "random string";
echo get_defined_vars(); // returns an array with all variables defined, in our situation $string only
```

You may notice, that some of the values, like null and false, return always nothing. It happens because by the inputing variables with those values, interpreter automaticaly makes the strings out of them. And string out of false and null is actually nothing. If you want to have an ability to see whole output of such variables use var_dump() function:

***var_dump():***
```php
$bool_variable = false;
$null_variable = null;
$string = "random string";
$float = 1.2;
echo var_dump($bool_variable); // it returns a string "bool(false)"
echo var_dump($null_variable); // it returns a string "NULL"
echo var_dump($string); // it returns a string "string(13)"
echo var_dump($float); // it returns a string "float(1.2)"
```


___
Link to the w3school reference about variables you will find <a href="https://www.w3schools.com/php/php_ref_variable_handling.asp">here</a>.