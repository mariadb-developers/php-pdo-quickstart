# PHP with PDO (PHP Data Objects) Quickstart

This repository contains a simple web application that demonstrates how to quickly connect to and communicate with a [MariaDB](https://mariadb.com) database using [PHP](https://www.php.net/) and [PDO (PHP Data Objects)](https://www.php.net/manual/en/book.pdo.php). 

<p align="center" spacing="10">
    <kbd>
        <img src="media/demo.gif" />
    </kbd>
</p>

> ⚠️ Interested in using MariaDB and PHP with [mysqli](https://www.php.net/manual/en/book.mysqli.php)? Check out the quickstart [here](https://github.com/mariadb-developers/php-quickstart)!

## Getting Started

The application in this repository demonstrates how to:

* Connect to a MariaDB database using [PDO (PHP Data Objects)](https://www.php.net/manual/en/book.pdo.php)
* Execute queries (`SELECT`, `UPDATE`, `INSERT` and `DELETE`) to manage _contact_ data (like a digital [rolodex](https://en.wikipedia.org/wiki/Rolodex))
* Use prepared statements

### Prepare the database

The application relies on a single database (`rolodex`) that contains a single table (`contacts`). You can find the necessary SQL for setting up the environment in [schema.sql](schema.sql).

### Run the application

After you've [pulled down this repository](https://git-scm.com/docs/git-clone), follow these steps to get the app up and running:

1. Update the database configuration settings in [src/config.php](src/config.php) (which is used across the app) to point to _your_ MariaDB database.

    _Example configuration:_

    ```php
    $dsn = "mysql:host=127.0.0.1;dbname=rolodex;charset=utf8mb4";

    $options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
    ];

    $pdo = new PDO($dsn, "app_user", "Password123!", $options);
    ```

2. Within the [src](src) directory, run the application using the [built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php).

    ```bash
    $ php -S localhost:5000
    ```

## Helpful Resources

* [MariaDB Quickstart](https://github.com/mariadb-developers/mariadb-getting-started)
* [Official MariaDB Documentation](https://mariadb.com/docs)

## Support and Contribution

Please feel free to submit PR's, issues or requests to this project directly.

If you have any other questions, comments, or looking for more information on MariaDB please check out:

* [MariaDB Developer Hub](https://mariadb.com/developers)
* [MariaDB Community Slack](https://r.mariadb.com/join-community-slack)

Or reach out to us directly via:

* [developers@mariadb.com](mailto:developers@mariadb.com)
* [MariaDB Twitter](https://twitter.com/mariadb)

## License <a name="license"></a>
[![License](https://img.shields.io/badge/License-MIT-blue.svg?style=plastic)](https://opensource.org/licenses/MIT)