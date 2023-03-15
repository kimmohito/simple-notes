## CRUD (Create, Read, Update, Delete)

First, you need a database. And connect it by using command below.

```php
$DB_HOSTNAME = 'localhost',
$DB_USERNAME = 'root',
$DB_PASSWORD = '',
$DB_DATABASE = 'database',

$connect = mysqli_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
```

To first create row, use insert

```php

$query = "INSERT INTO tables (table_title) VALUES ('$value')";
$result = mysqli_query($connect, $query);

```

If you are using the same query within the connect inside one file, you can use `$query`, without require `connect.php`;


To read, simple.

```php

$query = "SELECT * FROM tables";
$result = mysqli_query($connect, $query);

```

To UPDATE, make sure to have WHERE clause or it will affected all rows. 1 can be any based on use case.

```php

$query = "UPDATE tables SET table_title='$values' WHERE table_id=1";
$result = mysqli_query($connect, $query);

```

To DELETE, much easier. similar to UPDATE but doesn't need values.

```php

$query = "DELETE FROM tables WHERE table_id=1";
$result = mysqli_query($connect, $query);

```