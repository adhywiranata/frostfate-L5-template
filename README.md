# frostfate-L5-template

This is the template of the all-new Laravel 5 for personal use. Enjoy!

This L5 is using PSR-4 php method so maybe u want to read a bit 'bout it. 

This template is using the Apache2 server. For other server , please use your own server configuration. Tt's not much different. You can still follow the below configurations.


####Database

configure database connection, user, and password on the ".env" file 

``` DB_HOST=localhost

DB_DATABASE='frostfate-L5-db'

DB_USERNAME='YOUR-APACHE-USERNAME'

DB_PASSWORD='YOUR-APACHE-PASSWORD' ```


####Migration

Migration :

``` $ php artisan migrate ``` 

rollback a migration:

``` $ php artisan migrate:rollback ```

IF you have migrated the database before, please run

``` $ composer dumpautoload

$ php artisan migrate:rollback ```

DATABASE Seeding:

========================================================================
Themes are using Bootstrap and Bootstrap Zero.
Coded with Love and Care, notice me or send issues on bugs.

Ciao~ 

Frostfate