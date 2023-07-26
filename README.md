# PHP CRUD Users API

API CRUD in PHP

The repository contains the backend an API developed in PHP.

### System requirements for this project to work includes

- PHP(v8.0 or higher)
- XDebug (for code coverage)
- Composer
- MySQL
- Any IDE of your choice (VS Code is recommended)

### Running the project

To run the project on your local machine, follow the steps below:

### Database

- $hostname = 'localhost'
- $database ='phpcrud'
- $username = 'phpcrud'
- $password = 'phpcrud'

- Change the `PROJECT_ENV` variable in the **.env** file to `development`
- Update the config variables in the `DbConnection.php` file contained in the `api` folder to suit your MySQL credentials
- Run the `setup.sql` file in the mysql console with a similar command:

```bash
source path/file.sql
```

- Install all dependencies by running the following command:

```bash
composer install
```

- To start the server, run the following command:

```bash
composer start
```

- To run the unit tests, hange the `PROJECT_ENV` variable in the **.env** file to `test` and run the following command:

```bash
composer test
```

## License
Not defined.

## Author
Jonathan Sanchez Rodriguez - jsanchez.dev1991@gmail.com

## Screenshot
[![screenshot-1](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-1.png "screenshot-1")](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-1.png "screenshot-1")

[![screenshot-2](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-2.png "screenshot-2")](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-2.png "screenshot-2")

[![screenshot-3](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-3.png "screenshot-3")](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-3.png "screenshot-3")

[![screenshot-4](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-4.png "screenshot-4")](https://raw.githubusercontent.com/jonsanchezr/php-crud-users-api/main/z-screenshots/screenshot-4.png "screenshot-4")