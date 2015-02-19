# frostfate-L5-template

This is the template of the all-new Laravel 5 for personal use. Enjoy!

The template is for your everydays blogging platform 

This L5 is using PSR-4 php method so maybe u want to read a bit 'bout it. 

This template is using the Apache2 server. For other server , please use your own server configuration. It's not much different. You can still follow the below configurations.


##Database

to install the database, you need to :

1. Create the database locally

2. Configure the .env file

3. Migrate the tables

4. Seed the datas

5. Your database is ready to be served !

####Configuration

create a new database in your phpmyadmin, with name "frostfate-L5-db"

configure database connection, user, and password on the ".env" file 

``` 
DB_HOST=localhost

DB_DATABASE='frostfate-L5-db'

DB_USERNAME='YOUR-APACHE-USERNAME'

DB_PASSWORD='YOUR-APACHE-PASSWORD' 

```


####Migration

Migration :

``` $ php artisan migrate ``` 

rollback a migration:

``` $ php artisan migrate:rollback ```

IF you have migrated the database before, please run

```
$ composer dumpautoload

$ php artisan migrate:rollback 

```

####Seed

Seeding :

```
$ php artisan db:seed

```

##Controllers

Controller Validation

check on: apps > Http > Requests > .php files for Requests

Registering a Request

use namespaces on the Controllers

```
use L5template\http\Requests

use L5template\Http\Requests\CreatePostRequest; 
```

####Namespaces

For this project I'm using custom namespace, the "L5template"

so when we need to declare namespaces, just put it just like this

```
namespace L5template\Http\Controllers;
```

the above example is for the Controllers namespaces.


##Things to Note

1. Read the basic Composer and Laravel 5 Installation 

2. if you haven't understand Namespaces, better learn the basics, since L5 heavily utilizes Namespaces.

3. Play with PHP artisan and composer. It helps A LOT.

4. This Laravel 5 template is using Eloquent. The recommended way to do things with databases

5. This Laravel 5 template is using RESTful method. Checkout the Routes.php file for it

========================================================================
Themes are using Bootstrap and Bootstrap Zero.
Coded with Love and Care.

Frostfate