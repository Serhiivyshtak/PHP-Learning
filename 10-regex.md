# 10.PHP - REGEX

Regular expression is a sequence of characters that allows you to search for any pattern in text. It is used also to replace certain characters inside a string.

In PHP it is often used for checking and validating of forms inputs of user.

# Basic interaction with regular expressions in PHP?

Regex must be consisting of quotes and to forward slashes. The most easy thing we can do with it is, to search for certain value in a string. ***preg_match()*** allows to do us it in PHP:
```php
$str = "Hello from the other side!";
var_dump(preg_match("/t/", $str)); // this method is searching for a letter "t" inside of $str. In our case it returns int(1), which represents boolean true.
var_dump(preg_match("/?/", $str)); // in this situation we get bool(false), because we haven't question mark in our string
```

With *preg_match()* method we can use third parameter, wich will be representing an array, which contains all the matches. Let's se how it works:
```php
$str = "Hello from the other side!";
preg_match("/t/", $str, $matches);

var_dump($matches); // it will return ["t"]
```
It is strange, isn't? We got only one match, even thow we have a few "t" letters inside our string. It happens because *preg_match()* returns only first match found. To grab all matches use ***preg_match_all()*** instead:
```php
$str = "Hello from the other side!";
preg_match_all("/t/", $str, $matches);

var_dump($matches); // now it returns an array with all matches: [["t", "t"]]
```

To replace a certain value with another one, use ***preg_replace()*** function:
```php
$str = "Hello from the other side!";
$modified_str = preg_replace("/other/", "digital", $str);
echo $modified_str; // It will return "Hello from the digital side!"

// It is a good practice to put modified string with help of preg_string() into a new variable. 

// This method also works with multiply replacements
```

We can split a string by character or few characters with help of regular expressions. Method ***preg_split()*** is exactly for it:
```php
$date = "1970-01-01 00:00:00";
$components_of_date = preg_split("/[-\s:\/]/", $date);
var_dump($components_of_date); // we will get an erray: ["1970", "01", "01", "00", "00", "00"]. "/[-\s:\/]/" is more edvanced regular expression, wich will be explained in few seconds below
```

## More edvanced regular expressions?
You can search for more complicated things than just a substring like "/something/" in your main string. Here you find possible expressions.

To search for multiply characters, use square brackets:
```php
$str = "Hello from the other side!";
preg_match_all("/[fo!]/", $str, $matches);

var_dump($matches); // it returns ["o", "f", "o", "o", "!"]
```

To search for all characters, except certain ones, use this:
```php
$str = "Hello from the other side!";
preg_match_all("/[^toi]/", $str, $matches);

var_dump($matches); // it returns ["H", "e", "l", "l", " ", "f", "r", "m", " ", "h", "e", " ", "h", "e", "r", " ", "s", "d", "e"]
```

We can also search for letters in range, so we for example recive only letters "a" to "g" for lowercase and also "A" to "G" for uppercase:
```php
$str = "Hello from the other side!";
preg_match_all("/[a-gA-G]/", $str, $matches);

var_dump($matches); // it returns ["e", "f", "e", "e", "d", "e"]

// same scenario can be made with digits, for example "/[0-5]/"
```

## Metacharacters?

***|*** - helps to match any of patterns, so we can check the string:
```php
$str = "150px";
preg_match("/px|vw|%/", $str, $unit);
echo $unit; // it returns an array: ["px"]
```

***.*** - point matches either all characters (if nothing else), or returns all symbols of one letter:
```php
$str = "hello from the other side!";
preg_match_all("/./", $str, $matches);
var_dump($matches); // it will return all of characters splited int an array;

preg_match_all("/l./", $str, $letters);
var_dump($letters); // it returns ["l", "l"]
```




