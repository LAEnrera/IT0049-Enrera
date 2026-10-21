## Setup

1. Clone the repository.
2. Open the TFA2 folder.
3. Run `composer install`.
4. Import `tfa2_pos.sql` in phpMyAdmin.
5. Create `.env` from `env` and set:

database.default.hostname = localhost
database.default.database = tfa2_pos
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306

6. Run `php spark serve`.
7. Open http://localhost:8080