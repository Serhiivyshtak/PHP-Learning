# 05.PHP - STRINGS

## What is interpolation and concatenation?
Strings in PHP can be wrapped into weather double or single quotation marks. Only difference is, that the string wrapped by single quotes does not support interpolation*:

```php
$value2embed = "interessting";
echo "random $value2embed string"; // with double quotes it returns "random interessting string"
echo 'random $value2embed string'; // with single quotes it returns 'random $value2embed string'

// interpolation - is a process of inserting already known variables to the string. In PHP exist two syntaxes for it: first - just a name of variable: $value2embed, and second - with curly braces: {$value2embed}
```

Another altarnative for interpolation is concatenation*. It works with both types of quotation marks:

```php
$value2embed = "interessting";
echo "random ".$value2embed." string"; // returns "random interessting string"
echo 'random '.$value2embed.' string'; // returns 'random interessting string'

// concatenation - is a process of joining a few parts of variables into one. Syntax for concatenation in PHP uses simply a dot (.)
```


## String methods?

***strlen():***
```php
$str = "random string";
echo strlen($str); // it counts characters in the string na returns 13
```

***trim(), ltrim(), rtrim()***, all methods are for deleating spaces:
```php
$str = "   random string   ";
echo trim($str); // it returns a string without spaces at the start and at the end: "random string"
echo ltrim($str); // it returns a string without spaces at the beginning: "random string   "
echo rtrim($str); // it returns a string without spaces at the end: "   random string"
```

***str_word_count():***
```php
$str = "random string";
echo str_word_count($str); // it counts words in the string and in our situation returns 2
```

***strrev():***
```php
$str = "random string";
echo strrev($str); // reverses the characters in the string and in our situation returns "gnirts modnar"
```

***strtoupper(), strtolower, ucfirst(), lcfirst(), ucwords()***, for interacting with case of the string:
```php
$str = "Random String";
echo strtoupper($str); // it transforms whole string to the upper case and returns RANDOM STRING
echo strtolower($str); // it transforms whole string to the lower case and returns random string
echo ucfirst($str); // it transforms the first letter of the string to the upper case and returns "Random String"
echo lcfirst($str); // it transforms a first letter of the string to the lower case and returns "random String"
echo ucwords($str); // it transforms first letters of all words in the string and in our situation doesn't bring changes to it: "Random String"
```

***strpos(), stripos(), strrpos()***, methodds for finding matches inside of a string:
```php
$str = "Hello from the outside";
echo strpos($str, "h"); // it retuns 13, that is the index of first match found. It doesn't grab first "h" from "Hello", because it is in uppercase. This function is case-sensitive
echo stripos($str, "h"); // it returns 0, even though first "h" is in uppercase, stripos() ignores it
echo strrpos($str, "o"); // it reurns 15, that is the index of last "o" found. 
```

***substr():***
```php
$str = "Hello from the outside";
echo substr($str, 15); // if only one argument given (except string), substring will be cut from index which is our second argument (it is 15) to the end, in our case it returns "outside"
echo substr($str, 6, 4); // if two arguments given (except string), substring will be started cuting from index which is our second argument, and this string will have length which equals to our third argument. In our case it returns "from"
```

***substr_count():***
```php
$str = "Hello from the outside";
echo substr_count($str, "l"); // this functions counts the amount of repetition of given substring and in our case returns 2
```

***str_repeat():***
```php
$str = "Hello from the outside";
echo str_repeat($str, 10); // this function allows you to repeat any string so many times you want. In our case it is 13 and it returns "Hello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outsideHello from the outside"
```

***str_replace():***
```php
$str = "Hello from the outside";
echo str_replace("l", "/", $str); // it replaces all the l's with slashes and returns "He//o from the outside"
```

***str_pad():***
```php
$str = "page99";
$str1 = "page100";
echo str_pad($str, 20, ".", STR_PAD_RIGHT); // it will pad such amount of dots to the right side of value, so it makes a length of 20 characters. In our case it returns "page99.............."
echo str_pad($str1, 20, ".", STR_PAD_RIGHT); // it will pad such amount of dots to the right side of value, so it makes a length of 20 characters. In our case it returns "page100............."

// Insted of STR_PAD_RIGHT, it also could be STR_PAD_LEFT and STR_PAD_BOTH
```

***nl2br()***, appending our string to HTML page, whole text will be written as a single-line text, even if this text contains line brakes in our code in PHP. If we want to show exactly tha same text with line breaks, use this method. It replaces all the new lines to br HTML tag:
```php
$str = "Hello, 
my name is Serhii and 
I am a beginner 
PHP developer";

echo $str; // output to the HTML page will be as a single-line text
echo nl2br($str); // output will be written exactly the same as the variable $str
```

***explode(), implode(), str_split(), join()***, are the functions to transform a string into an array and conversely:
```php
$str = "random string, random value";
$arr = ["hello", "my", "dear", "friend"];
var_dump(explode(" ", $str)); // this method splits a string by separetor and returns an array: [0]=> string(6)"random"[1]=> string(7)"string," [2]=> string(6)"random" [3]=> string(5)"value". Separator can't be empty

var_dump(explode(",", $str)); // in this case separator is ",", that is why it returns [0]=> string(13)"random string [1]=> string(13)" random value"

var_dump(str_split($str, 1)); // str_split() is the alternative to explode() function and it works a bit different. It cuts string not by given separator, but it cuts the string for chuncs, length of wich we type as a second argument (in our case it is 1). It returns a huge array with every letter as separate item of it: ["r", "a", "n", "d", "o", "m" (and so on...)]

var_dump(join($arr, " ")); // it appends each array item to th string and pastes a separator: "hello my dear friend"
var_dump(join($arr, "/")); // returns "hello/my/dear/friend"

var_dump(implode($arr, " ")); // works absolutely the same way as join() method and returns "hello my dear friend"
var_dump(implode($arr, "/")); // returns "hello/my/dear/friend"

```