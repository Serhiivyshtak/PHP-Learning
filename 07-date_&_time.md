# 07.PHP - DATE AND TIME

## Getting current time?
Timestamp in PHP is a value, which contains seconds since January 1 1970. It is also called UNX Timestamp. To get current timestamp we can use ***time()*** function:

```php
echo time(); // in my case it returns 1705840003
```


## Formating of date and time?

We can format date and time if we know the timestamp with help of ***date()*** method:
```php
echo date("Y-m-d H:i:s", time());  // it returns "2024-01-21 12:50:30" (date and time while i writing this article)
```

first argument in this function is format, second is timestamp. We can escape second argument and it will take current timestamp:
```php
echo date("Y-m-d H:i:s");  // it returns same result as a previous example
```

For formating string we can use following characters:
- For the year:
  - Y - four digits representation of year;
  - y - two digits representation of year;
- For the month:
  - m - numeric representation of month (01 to 12);
  - n - numeric representation of month (1 to 12);
  - F - full textual representation of month;
  - M - short textual representation of month (three letters);
- For the day:
  - d - numeric representation of day (01 to 31);
  - j numeric representation of day (1 to 31);
  - D - textual representation of weekday (three letters);
- For hours:
  - h - 12 format of time (01 to 12);
  - H - 24 format of time (01 to 23);
  - g - 12 format of time (1 to 12);
  - G - 24 format of time (1 to 23);
- for minutes:
  - i - numeric representation of minutes (00 to 59);
- for seconds:
  - s - numeric representation of seconds (00 to 59);
- for part of the day:
  - A - textual representation of part of the day (uppercase, two letters);
  - a - textual representation of part of the day (lowercase, two letters);

We can format date, which was for example 1 day ago, or wich will be in one week:
```php
echo date("d-m-Y H:i:s"); // it returns current date and time: "21-01-2024 13:08:30"
echo date("d-m-Y H:i:s", time() - 60 * 60 * 24); // it returns date and time one day ago: "20-01-2024 13:08:30"
echo date("d-m-Y H:i:s", time() + 60 * 60 * 24 * 7); // it returns date which will be in one week: "28-01-2024 13:08:30"
```

Examples of different date and time formattings: 
```php
$date_format_1 = date("H:i:s");
$date_format_2 = date("h:i:s A");
$date_format_3 = date("j F Y");

echo $date_format_1."\n"; // returns "13:18:02"
echo $date_format_2."\n"; // returns "01:18:02 PM"
echo $date_format_3."\n"; // returns "21 January 2024"
```


## Parsing date and time strings into timestamp?

We often need to parse time and date string into timestamp, because it is easier to work with it. First of all we have to create a date with help of ***date_create()*** method. After that we get few methods to works with it, and one to get timestamp is ***date_timestamp_get()***:
```php
$date = date_create("22 January 2024 16:30");
$timestamp = date_timestamp_get($date);
echo $timestamp; // we will get 1705941000
```


## Getting separated parts of date?

***date_parse_form_format():***
```php
$date_string = "22 January 2024 16:30";
$parsed = date_parse_from_format("d F Y H:i", $date_string);
var_dump($parsed); // it rerturns associative array with all parts separated: ["year" => 2024, "month" => 1, "day" => 22, "hour" => 16, "minute" => 30, "seconds" => 0, "fraction" => 0, "warning_count" => 0, "warnings" => [], "error_count" => 0, "errors => []", "is_localtime" => false]

echo $parsed["year"]; // returns 2024
echo $parsed["hour"]; // returns 16
```


___
Link to the w3school reference about dates you will find 
<a href="https://www.w3schools.com/php/php_ref_date.asp">here</a>.

