# 06.PHP - ARRAYS

In PHP, there are three types of arrays:
- **Indexed arrays** - Arrays with a numeric indexes;
- **Associative arrays** - Arrays with named keys;
- **Multidimensional arrays** - Arrays containing one or more arrays. This type of arrays is preaty easy to understand if you know all basic things about normal array, so we will not cover them here.

## Basic interaction with arrays?

We have two opportunities to create an array in PHP, which give us the same result:
```php
$arr_1 = [123, "random string", true];
$arr_2 = array(123, "random string", true);
// boths those ways return same array: [0]=> int(123) [1]=> string(13)"random string" [2]=> bool(true)
```

to acces any item of an array we can use square brackets and index of item:
```php
$array = [123, "random string", true];
echo $array[0]; // it returns 123
echo $array[1]; // returns "random string"
echo $array[2]; // returns true
```

We can set new and reset old items by using following syntax:
```php
$array = [123, "random string", true];
$array[0] = 987; 
$array[3] = "another string";

var_dump($array); // it returns [987, "random string", true, "another string"]
```

***count()***, function to figure out the length of an array:
<span id="count"></span>
```php
$array = [123, "random string", true];
echo count($array);
```


***in_array():***
<span id="in_array"></span>
```php
$array = [123, "random string", true];
var_dump(in_array(123, $array)); // it checks if 123 exists in $array and returns bool(true)
var_dump(in_array(987, $array)); // it checks if 987 exists in $array and returns bool(false)
```

***array_search():***
<span id="array_search"></span>
```php
$array = [123, "random string", true];
var_dump(array_search("random string"), $array); // searches for "random string" in $array and returns it's index: int(1). If no match found, returns bool(false)
```

***$arr[] = value, array_push(), array_pop(), array_shift(), array_unshift()***, ways to append and remove items out of an array:
<span id="array_add_remove"></span>
```php
$array = [123, "random string", true];

$array[] = "new item"; // if we do not write index new item will be appended to the end
array_push($array, 987); // one more way to appent new item to the end
array_pop($array); // removes last item in array
array_shift($array); // removes first item in array
array_unshift($array, false); // appends new item to the start

var_dump($array); // it returns an array after all manipulations we made: [false, "random string", true, "new item"]

//all those methods change initial array
```

## Array methods?

***array_reverse():***
<span id="array_revere"></span>
```php
$array = [123, "random string", true];
$new_array = array_reverse($array);
var_dump($new_array); // it is now reversed array: [true, "random string", 123]

//array_reverse() doesn't change initial array and creates a new one
```

***sort(), rsort()***, functions for sorting:
<span id="sort"></span>
```php
$numeric_array = [3, 5, 4, 7, 9, 10, 2, 11, 1, 8, 6];
$array_of_strings = ["PHP", "is", "nice", "language", "to", "learn"];
$cars = ["Volvo", "Volkswagen", "Ford", "BMW", "Tesla"];

sort($numeric_array);
sort($array_of_strings);

var_dump($numeric_array); // it sorts from lowest do greatest number and returns [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
var_dump($array_of_strings); // it sorts according to alphabet and returns ["PHP", "is", "language", "learn", "nice", "to"]

sort($cars);
var_dump($cars); // sorts usual way and returns ["BMW", "Ford", "Tesla", "Volkswagen", "Volvo"]
rsort($cars);
var_dump($cars); // sorts and reverses array. In our case returns ["Volvo", "Volkswagen", "Tesla", "Ford", "BMW"]

//sort() and rsort() change initial array
```

***array_merge():***
<span id="array_merge"></span>
```php
$array_1 = ["Volvo", "Volkswagen", "Tesla"];
$array_2 = ["Ford", "BMW"];
$array_3 = array_merge($array_1, $array_2);
var_dump($array_3); // array_merge() concatenates two or more arrays into 1

// array_merge() doesn't change initial arrays and creates a new one
```

***array_rand():***
<span id="array_rand"></span>
```php
$a = array("red","green","blue","yellow","brown");
echo array_rand($a); // returns a random index of given array, for example 4
```

***array_filter():***
<span id="array_filter"></span>
```php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filtered = array_filter($array, fn($item) => $item % 2 === 0);
var_dump($filtered); // we got array of filtered values [2, 4, 6, 8, 10]

// array_filter() doesn't change initial arrays and creates a new one
```

***array_reduce():***
<span id="array_reduce"></span>
```php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = array_reduce($array, fn($sum, $next) => $sum + $next); 
echo $sum; // reduces an array to single value and in our case returns 55

// doesn't change initial array and creates a new single value
```

***array_map():***
<span id="array_map"></span>
```php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$doubled_array = array_map(fn($item) => $item * 2, $array);
var_dump($doubled_array); // array_map() makes an operation for each item in th array. In our cas it multiplies each value by 2 and returns [2, 4, 6, 8, 10, 12, 14, 16, 18, 20]

// doesn't change initial array and creates a new one
```

***array_unique():***
<span id="array_unique"></span>
```php
$array = [1, 2, 3, 1, 2, 3];
$result = array_unique($array);
var_dump($result); // it removes all items, which repeat few times and in our case returns [1, 2, 3]


// doesn't change initial array and creates a new one
```

***array_slice():***
<span id="array_slice"></span>
```php
$array = ["hello", "from", "the", "other", "side"];
$sliced = array_slice($array, 1, 3); 

var_dump($sliced); // it creates a subarray. First argument is array, second - index where to start cutting, and third - length of subarray. In or case it returns ["from", "the" "other"]

// doesn't change initial array and creates a new one
```

***array_splice():***
<span id="array_splice"></span>
```php
$array = ["hello", "from", "the", "other", "side"];
$spliced = array_splice($array, 3, 1); 
var_dump($array); // returns ["hello", "from", "the", "side"]
var_dump($spliced); // returns ["other"]

// array_splice() deleates items from an array and makes a new array out of those items. That is why this method changes initial array and also creates a new one
```

***shuffle():***
<span id="shuffle"></span>
```php
$array = ["hello", "from", "the", "other", "side"];
shuffle($array);
var_dump($array); // it shuffles the array random way and returns for example ["side", "from", "the","hello", "other"];

// shuffle() method changes initial array
```

***arrayy_diff(), array_intersect()***, methods for finding differences and matches:
<span id="array_diff_intersect"></span>
```php
$array_1 = [1, 2, 3, 4, 5];
$array_2 = [1, 2, 6, 7, 8];

$differences = array_diff($array_1, $array_2);
$matches = array_intersect($array_1, $array_2);

var_dump($differences); // array_diff() returns a new array with all of items from first array, that are do not exist in second one. In our caes it will be [3, 4, 5]
var_dump($matches); // array_intersect() returns a new array with all matches from both arrays given: [1, 2]

// array_diff() and array_intersect() do not change initial arrays and create new ones
```


## What is associative array and how to interact with it?

Associative arrays uses keys instead of indexes. It might be looking the same as objects.

All of normal array methods like *array_filter(), array_search(), count()*, can be used with associative arrays.

 Here is syntax for creating it:
```php
$array = ["item1" => "value1", "item2" => "value2", "item3" => "value3"];
```

Use following syntax to set new and to change old values:
```php
$person = ["name" => "Serhii", "age" => 17, "city" => "Kyiw"];
$person["city"] = "Titisee-Neustadt";
$person["hobbies"] = ["football", "basketball", "coding"];

var_dump($person); //  it will return ["name" => "Serhii", "age" => 17, "city" => "Titisee-Neustadt", hobbies => ["football", "basketball", "coding"]]
```

We can check if any value or any key is in array. For value we use *in_array()*, for keys - *isset()*:
```php
$person = ["name" => "Serhii", "age" => 17, "city" => "Kyiw"];

var_dump(isset($person["name"])); // it returns true, because we have the key "name"
var_dump(in_array("name", $person)); // it returns false, because we have no value "name", we have it as the key
```

***array_keys(), array_values()***, methods to get either all keys or all values:
<span id ="array_keys_values"></span>
```php
$person = ["name" => "Serhii", "age" => 17, "city" => "Kyiw"];

var_dump(array_keys($person)); // it returns ["name", "age", "city"]
var_dump(array_values($person)); // it returns ["Serhii", 17, "Kyiw"]

// array_values() can be also potentially used with indexed arrays but it makes no sense, beacuse it will just return itself
```

***extract():***
<span id="extract"></span>
```php
    $array = ["name" => "Serhii", "age" => 17, "is_pupil" => true];
    extract($array); // this method extracts key-value pairs from associative array and makes separated variables out of them

    echo $name; // returns "Serhii"
    echo $age; // returns 17
    echo $is_pupil; // returns 1 (true)
```

***array_flip():***
<span id="array_flip"></span>
```php
    $array = ["name" => "Serhii", "age" => 17, "is_pupil" => true];
    $fliped = array_flip($array);

    var_dump($fliped); // it flips keys and values and in our situation returns ["Serhii" => "name", "17" => age]. We got no "is_pupil" => true key, because this methid just ignores boolean values

    // array_flip() doesn't change initial array and creates a new one
```

## Summarize methods?
- <a href="#count">count($array)</a> - returns length of array;
- <a href="#in_array">in_array("item", $array)</a> - checks if value is in array;
- <a href="#array_search">array_search("item", $array)</a> - returns index of searched item;
- <a href="#array_add_remove">array_push($array, "item")</a> - adds new item to the end of array;
- <a href="#array_add_remove">array_pop($array)</a> - removes an item from the end of array;
- <a href="#array_add_remove">array_unshift($array, "item")</a> - adds new item to the start of array;
- <a href="#array_add_remove">array_shift($array)</a> - removes an item from the start of array;
- <a href="#array_revere">array_reverse($array)</a> - reverses an array;
- <a href="#array_rand">array_rand($array)</a> - returns a random index from array;
- <a href="#array_merge">array_merge()</a> -allows to concatenate two or more arrays;
- <a href="#sort">sort($array)</a> - sorts an array. Is siutable for numeric and string values;
- <a href="#sort">rsort($array)</a> - sorts and reverses an array;
- <a href="#array_filter">array_filter($array, callback)</a> - allows to filter array;
- <a href="#array_map">array_map(calback, $array)</a> - makes same opearation for all items in array;
- <a href="#array_reduce">array_reduce($array, calback)</a> - reduces all values of an array to a single value;
- <a href="#array_slice">array_slice($array, index, length)</a> - allows to create a subarray;
- <a href="#array_splice">array_splice($array, index, length)</a> - allows to deleate items from an array;
- <a href="#array_unique">array_unique($array)<a> - deleates all repeatable values;
- <a href="#shuffle">array_shuffle($array)</a> - shuffles array randomly;
- <a href="#array_diff_intersect">array_diff($array_1, $array_2)</a> - compares two arrays and returns differences;
- <a href="#array_diff_intersect">array_intersect($array_1, $array_2)</a> - compares two arrays and returns matches;
- <a href="#array_keys_values">array_keys($array)</a> - returns all keys in associative array;
- <a href="#array_keys_values">array_values($array)</a> - returns all values in associative array;
- <a href="#array_flip">array_flip($array)</a> - flipes keys and values in associative arrays;
- <a href="#extract">array_extract($array)</a> - extracts key-value pairs and creates global scoping variables out of them;


___
Link to the w3school reference about numbers you will find 
<a href="https://www.w3schools.com/php/php_ref_array.asp">here</a>.

