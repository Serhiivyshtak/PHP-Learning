# 04.PHP - NUMBERS

## All math operators?

As well as in other programming languages, PHP has following types of math operators: 
- **Arythmetic operators:**
  - "+" - addition;
  - "-" - substruction;
  - "/" - division;
  - "*" - multiplication;
  - "%" - modulus;
  - "**" - exponentiation;
- **Assignment operators:**
  - "=" - normal assignment operator;
  - "+=" - assignment with addition;
  - "-=" - assignment with substruction;
  - "/=" - assignment with division;
  - "*=" - assignment with multipilcation;
  - "%=" - assignment with modulus;
-  **Comparison operators:**
   -  "==" - equal;
   -  "===" - strictly equal (with comparison of datatypes);
   -  "!=" - not equal;
   -  "<>" - also not equal;
   -  "!==" - strictly not equal (with comparison of datatypes);
   -  ">" - greater than;
   -  "<" - less than;
   -  ">=" - greater than or less to;
   -  "<=" - less than or equal to;
- **Increment and decrement:**
  - "++$variable" - increments by one and returns $variable;
  - "$variable++"- returns $variable first and than increments it by one;
  - "--$variable" - decrements by one and returns $variable;
  - "$variable" - returns $variable first and than decrements it by one;


## All math methods?
**abs()**, returns absolut value of number(without a sign):
```php
echo abs(-123); //it returns number 123
echo abs(123); // it returns itself
```

**ceil(), round(), floor()**, all round the numbers, but different way:
```php
echo ceil(1.2); // rounds to greatest and returns 2
echo round(1.2); // rounds according to arytmetic rools and returns 1
echo round(1.5); // rounds according to arytmetic rools and returns 2
echo floor(1.8); // rounds to smallest and returns 1
```

**pi():**
```php
echo pi(); // it returns value of PI (3.1415926535898)
```

**pow():**
```php
echo pow(2, 4); // it makes an exponentation to 4 with base 2 and returns 16
```

**rand(), mt_rand():**
```php
echo rand(); //returns absolutely random number, for example 1701583815
echo rand(10, 100) // if two arguments written, returns random number between 10 and 100, for example 81

// The same for mt_rand()
```

**sqrt():**
```php
echo sqrt(9); // gets a square root out of number and returns 3
echo sqrt(-9); // returns NAN, because it is imposible to get a square root out of negative value   
```

**min(), max():**
```php
echo max (-2, -4, 6.4, 8.1, 10); // it returns the greatest value of range, in our situation 10
echo min(-2, -4, 6.4, 8.1, 10); // it returns the smallest value of range, in our situation -4
```

***bindec(), decbin(), decoct(), octdec(), hexdec(), dechex(), base_convert()**, that are all the functions which allow to convert from any numeral system to another:
```php
$binary_value = 1111011;
$decimal_value = 123;
$octal_value = 173;
$hexadecimal_value = "7b";

echo bindec($binary_value); // it converts from binary to decimal and returns 123
echo dechex($decimal_value); // it converts from decimal to hexadecimal and returns 7b
echo octdec($octal_value); // it converts from octal to decimal and returns 123

echo base_convert($binary_value, 2, 10); // base_convert() method can convert from any numeral system to any other. First argument is number to convert, second - numeral system of this number and third - numeral system we want to convert to. And in our situation we convert from binary to decimal and it returns 123
echo base_convert($octal_value, 8, 16); // it converts from octal to hexadecimal and returns 7b
```

***rad2deg(), deg2rad()***, functions to convert radians to degrees and conversely:
```php
$angle_1 = 360;
$angle_2 = 180;
$angle_3 = 90;
echo deg2rad($angle_1); // converts from degrees to radians and returns 6.2831853071796
echo deg2rad($angle_2); // it returns 3.1415926535898
echo deg2rad($angle_3); // it returns 1.5707963267949

echo rad2deg(pi() * 2); // converts from radians to degrees and returns 360
echo rad2deg(pi()); // it returns 180
echo rad2deg(M_PI_2); // it returns 90 (M_PI_2 is a built-in constnt which contains pi() / 2)
```

***is_finite(), is_infinite(), is_nan()***, methods to check type of number:
```php
echo is_nan(sqrt(-4)); // it returns 1 (true)
echo is_finite(2000); // it returns 1 (true)
echo is_infinite(log(0)); // it returns 1 (true)
```


___
Link to the w3school reference about numbers you will find 
<a href="https://www.w3schools.com/php/php_ref_math.asp">here</a>.