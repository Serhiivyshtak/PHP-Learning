# 11.PHP - SQL database

Database is a big collection of data, which can be stored in tables on the backend of an application. Most popular database language is SQL (Structured query language) and it is made for creation of databases and tables, inserting data to the table, selecting any information and so on. In this chapter we will cover all most-used concepts of this language and we will also learn, how to manipulate with SQL from PHP code.

One of the most important parts of backend web development is storing and interaction with data, which we recieve from frontend. With help of this data we can show personalized page wich can be for example a user account. So knowing SQL or any other database language is essantial for backend developers.

## Creation and deleating of databases and tables?

For creation of any new entity in SQL we should use ***CREATE*** keyword. To create a new database, use *CREATE DATABASE* statement:
```SQL
CREATE DATABASE my_first_database
```
And CREATE TABLE for creation of table:
```SQL
CREATE TABLE users
```

***DROP TABLE*** or ***DROP DATABASE*** are made for deleating any of table or database completely:
```SQL
DROP DATABASE exicting_database_name
```
```SQL
DROP TABLE exicting_table_name
```

## SQL datatypes?

Every SQL table consists of columns, which we have to name and also to give them their own datatype. There are many datatypes in SQL, so we will cover only most common-used ones:

- Textual:
  
  - ***CHAR(size)*** - datatype for storing strings from 0 to 255 characters;
  - ***VARCHAR(size)*** - datatype for stroing strings from 0 to 65535 characters;
  - ***TEXT(size)*** - this datatype is also for strings and can contain very big textes;
  - ***LONGTEXT*** - holds absolutely huge textes, including to 4294967295 characters;
- Numeric:
  
  - ***BIT(size)*** - can hold value from 1 to 64;
  - ***INT(size)*** - can hold big integers from -2147483648 to 2147483647
  - ***BIGINT(size)*** - For absolutely huge numbers from -9223372036854775808 to 9223372036854775807.
  - ***FLOAT(size)*** - this datatype is made only for numbers with decimal point;
  - ***DOUBLE(size)*** - as *BIGINT* for integers, *DOUBLE* is made for very large numbers with decimal point;
- Date and time:

     - ***DATE*** - datatype for storing date in following format: YYYY-MM-DD;
    - ***TIME*** - datatype for storing time in following format: hh:mm:ss;
    - ***DATETIME*** - contains both of previous two ones and supports following format: YYYY-MM-DD hh:mm:ss;
    - ***YEAR*** - Coan only store four-digit value from 1901 to 2155, and 0000;
    - ***TIMESTAMP*** - for stroing number of seconds since 1970-01-01 00:00:00 UTC. To set it authomaticaly, we can use DEFAULT CURRENT_TIMESTAMP in the column definition; 

## Column definition?

We saw how to create a table with help of *CREATE TABLE* already. After writing such an expression, we will get absolutely empty table without even named columns. We can define column's names and datatypes immidiately by creation, and here how it looks like:
```sql
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username CHAR(30) NOT NULL,
    email CHAR(100) NOT NULL,
    pwd CHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
```
In this example we see a few new keywords. Let's explain them all:  
***NOT NULL*** - By using this keyword, we dont allow to be this field ever empty;
***AUTO_INCREMENT*** - It is a built-in attribute, which increments value in every new row. We make it, because id must be something special for every user in our database, so we can easily access him by searching for it.   
***PRIMARY KEY*** - As I said, every table must have a column with unique identifier, and by using *PRIMARY KEY* we mark such column;   
***DEFAULT*** - With help of this keyword we can set a default value, if this field is empty. In our case we set value *created_at* to *CURRENT_TIMESTAMP* by default;  
***CURRENT_TIMESTAMP*** - returns a timestamp (amount of seconds since 1970-01-01 00:00:00 UTC) at the time we append any new user;
