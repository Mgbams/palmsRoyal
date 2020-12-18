<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## BASIC LARAVEL ARTISAN COMMANDS

-   php artisan list
-   php artisan help migrate
-   php artisan make:controller ControllerName
-   php artisan make:model ModelName -m
-   php artisan migrate
-   php artisan tinker

## PREREQUISITE

You could try install them in these order

-   XAMPP Server
-   Text Editor e.g VsCode
-   NodeJs
-   Composer

# NOTE: PROBLEMS

**IMPORTANT**: Install your xampp server before installing composer

1. NO BASH PROMPT IN YOUR TERMINAL
   Your composer command will not work if you are on powershell terminal on vscode. so to add bash terminal, do as follows:

Click on **settings->features->terminal**
Under **integrated->automation Shell:Linux**, Click **edit in settings.json**. Then paste this code below inside the curly brackets

```bash
{

"terminal.integrated.shell.windows": "C:\\Program Files\\Git\\bin\\bash.exe"
}
```

2: The term 'php' is not recognised as an internal command

You need to Go to **My Computer->properties->Advanced system setting**
Under **system variables**, click on **path** then click on **new** and add this below:

```system variables
C:\xampp\php
```

## INSTALLING COMPOSER

Visit [composer](https://getcomposer.org/)
Click Getting started -> Globally -> download.
Search for the link Composer-Setup.exe under Windows Installer and click on it to download composer
**NOTE:** After installation of composer, open your terminal and type:

```bash
    composer
```

If your composer installed fine you will see a lists of composer command line commands. But if not, then add
composer to your environment variables as follows: Copy the path you chose for your composer during installation and add it to the path of system variables i.e

```system variables
    C:\php\composer
```

## INSTALLING LARAVEL

You can install laravel installer using the below command

```bash
    composer global require laravel/installer
```

## Create a laravel project using Composer command

You may also install Laravel by issuing the Composer create-project command in your terminal as follows:

```bash
    composer create-project --prefer-dist laravel/laravel projectName
```

## Creating and configuring database

-   Open phpmyadmin and create your database
-   In Laravel project, open **.env** and under mysql fill in the informations necessary like name of the database you just created.
-   In app->config->database.php modify your database connection adding the necessary connection info.
-   Open another terminal in your project and type this command to activate the database schemas in your project:

```bash
    php artisan migrate
```

**NOTE** If this command shows error then verify app -> providers -> AppServiceProvider.php to know if it contains the line below.

```AppServiceProvider.php
    use Illuminate\Support\Facades\Schema;
```

And in the boot function, add this:

```AppServiceProvider.php
    Schema::defaultStringLength(191);
```

If it doesn't contain it, then add it at the top of the file.

This will generate 4 tables in your database. they are

1. migrations
2. failed_jobs
3. password_resets
4. users

It will also generate a **User.php** model in **app** folder

## IF YOU NEED TO ADD AUTHENTICATION TO YOUR PAGE

The below codes helps you add a register, login page to your application.

```bash
    $ composer require laravel/ui --dev
    $ php artisan ui bootstrap --auth
```

You can run **php artisan migrate** command if you've not run it earlier.

Once you run **php artisan ui bootstrap --auth** command, it will generate the below routes in
**routes -> web.php**

```web.php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
```

It will also generate a **home.blade.php** file in resources->views folder.
It will also generate a **app.blade.php** file
It will also generate an **Auth** folder in resources->views folder.
It will also generate an **Auth** folder in **app->Http->Controllers** folder.
It will also generate a **HomeController.php** file in **app->Http->Controllers**

Then finally, run this below commands

```bash
    npm install
    npm run dev
```

**NOTE** If you see the error **SQLSTATE[HY000][1049] Unknown database 'laravel'** while trying to register
a user, It means laravel is still holding on to your previous contents. Follow the below stepsto resolve it:

```bash
    $ php artisan config:cache
    $ php artisan migrate
```

Refresh your page, and click the register button again to start registration.

These npm commands will add **app.js** file to your project. NOTE: Very important is, we do not modify the
**app.js** file in **public** folder because it is the file that was compiled. we only modify the app.js file in resources folder. Also note that compiled files always end up inside the public directory.
This modifies your website with the necessary css.

NOTE: The css file that is to be modified is found in **resources -> sass -> app.scss**.

## Adding Debugbar to your app

Execute this command to add debugbar capability:

```bash
composer require barryvdh/laravel-debugbar --dev
```

To activate debugging during boot, add this to your boot function located in
**app->providers-AppServiceProvider.php**

```bash
\Debugbar::enable(); // you can disable it if you wish with \Debugbar::disable();
```

For more help, visit [Debugbar](github.com/barryvdh/laravel-debugbar).

## Creating Migrations for each table you create

To create migrations for your table, type

```bash
    php artisan make:migration create_nameOfTable_table --create
```

Where nameOfTable is the name of the table you are creating.
You can find your created migrations in **app->database->migrations**
Finally, define the fields of your tables in the schemas.

**NOTE** It is necessary that you create a schema for each table to be created as the schema holds the necessary informations for the table when it is finally created.

To finally create your tables in your database, you need to migrate your schemas and they will be turned into tables. Use this command to migrate your schemas

```bash
php artisan migrate
```

NOTE: You can use php artisan migrate:rollback to undo changes to your database if you made an error during migration. you could repeat the command severally depending on how many times you need to move backwards.

## Creating a model

We use a model to interact with our database.
You must create a model for each table in your database.
**NOTE** Controller names are in singular forms and starts in Capital letters
**NOTE** also that your database tables names are all in plurals and in small letters
e.g categories, profiles e.t.c.
**NOTE** **Table names** can be written with underscores too e.g password_resets.
**NOTE** Your model name should be in singular form and must start in capital letter E.g Category
Below is how to create a model:

```bash
    $ php artisan make:model ModelName
```

Where ModelName is the name of your model.
**NOTE**: Auth::user() gives you an object information of the currently logged in user.

## Alert box with close button

```bash
     <div class="alert alert-success alert-block" style="height:40px;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
```

## Getting data on template from data passed from controller

We can use session in either these two formats.
Data are passed in key, value pairs from controller.

-   Session::get('nameOfKey');
-   Session('nameOfKey');

## Setting up git for your project

```bash
    $ git init
    $ git add .
    $ git commit -m "installation of laravel"
    $ git remote add origin https://github.com/Mgbams/palmsRoyal.git
    $  git push -u origin master
```

## Installing npm

```bash
    $ npm install
```

## Check if you installed node and npm by using

```bash
    $ node -v
    $ npm -v
```

## Installing bootstrap to laravel

The below codes helps you add a register, login page to your application.

```bash
    $ composer require laravel/ui --dev
    $ php artisan ui bootstrap
```

After the above commands then run this below comands to compile your project

```bash
    $ npm install
    $ npm run dev
```

## To use slick

Visit this site to copy the links
[slick](https://cdnjs.com/libraries/slick-carousel)
copy these links and paste in the head section of your blade template

```bash
npm install slick-carousel
```

```blade
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
```

Also load jquery by visiting [jquery][https://cdnjs.com/libraries/jquery]
and adding a minified script link as shown below

```jquery
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
```

You can also visit this below site for more settings of your slick carousel
[slick carousel](https://www.npmjs.com/package/slick-carousel)

**NOTE** when you're extending a master template and using slick, you only need define the html part of your slick on the child page and jquery script part should be defined on the parent. You can see fifth block in room-details.blade.php and see how it is used in room-navigation-menu.blade.php which is the parent layout.

## Installing jquery to your project

```bash
npm install jquery-ui --save-dev
```

Then go to **resources/js/app.js** and add these codes

```resources/js/app.js

import $ from 'jquery';
window.$ = window.jQuery = $;
```

## JQUERY WIDGETS

To use jquery widgets, visit the site below
[jquery widgets](https://jqueryui.com/widget/)
To know how to add jquery widgets to your project, visit the site below
[widget addition to project](https://medium.com/@nedsoft/how-to-add-jquery-ui-plugin-to-a-laravel-app-using-laravel-mix-e85bf0244fc1)

The steps are

1. Add the below lines to resources/js/app.js

```
// resources/js/app.js

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';//add as many widget as you may need
```

2. Add the below line to resources/sass/app.scss

```
// resources/sass/app.scss

@import '~jquery-ui/themes/base/all.css';
```

3. Assuming the class of the element you want to add the datepicker widget is .datepicker, then add the following line of code to your resources/js/app.js

```
// resources/js/app.js

$('.datepicker').datepicker();
e.g <input type="text" class="datepicker" />
```

Finally run the command

```bash
npm run dev
```

**IMPORTANT** Minimum size for slider images should be 2000 x 1300px

## Adding Font Awesome Icons

Install it by running the below code

```bash
$ npm install @fortawesome/fontawesome-free --save
```

This dependency entry should now be in your **package.json**

// Font Awesome
"dependencies": {
"@fortawesome/fontawesome-free": "^5.13.0",

Then import one or more styles in your app.scss file as shown below

```resources/sass/app.scss
// Font Awesome
@import '~@fortawesome/fontawesome-free/scss/fontawesome';
@import '~@fortawesome/fontawesome-free/scss/regular';
@import '~@fortawesome/fontawesome-free/scss/solid';
@import '~@fortawesome/fontawesome-free/scss/brands';
```

Finally compile it by running the below command for developement

```
$ npm run dev
```

OR

```
$ npm run production
```

**Finally**, reference your generated CSS file in your Blade template/layout.
To use font awesome by using font awesome kit, Go to
[fontawesome kit](https://fontawesome.com/start) and create your own kit.

```
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
```

## Centering a div vertically in another div

You can visit the below link for solution
[w3school](https://www.w3schools.com/howto/howto_css_center-vertical.asp)

## Multi Line slide elements

You can achieve images slides in multi lines using

```
$('.about-slick').slick({
	dots: true,
    slidesPerRow: 3,
	rows: 2,
	responsive: [{
	breakpoint: 478,
	settings: {
		slidesPerRow: 1,
		rows: 1,
	    }
    }]
});
```

Other slide settings are found in
[slicker slide settings](https://stackoverflow.com/questions/29876185/change-the-arrow-buttons-in-slick-slider)

## ADDING A FOREIGN KEY TO A TABLE

Below is an example of adding room_id as a foreign key

```
 $table->bigInteger('room_id')->unsigned();
$table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
```

**NOTE:** Make sure you have already created and migrated the table that has the key that would serve as a foreign key in another table else you will have error in linking the tables.

## ADDING A COLUMN TO AN ALREADY EXISTING TABLE

You can visit the below site below for clarification
[stackoverflow](https://stackoverflow.com/questions/16791613/add-a-new-column-to-existing-table-in-a-migration)

example

```
php artisan make:migration add_columnName_to_users_table --table=users
```

You will have a file like 2018_08_08_093431_add_store_id_to_users_table.php created in database->migrations folder. Then add the column you want to add in the migration file as shown below

```
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStoreIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            // 1. Create new column
            // You probably want to make the new column nullable
            $table->integer('store_id')->unsigned()->nullable()->after('password');

            // 2. Create foreign key constraints
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            // 1. Drop foreign key constraints
            $table->dropForeign(['store_id']);

            // 2. Drop the column
            $table->dropColumn('store_id');
        });
    }
}
```

From the above, i created a column called **store-id** which references **id** on **stores** table and i made the column to appear after the **password** column in the database.

## Fatal error: Allowed memory size of 1610612736 bytes exhausted

Visit the below page to solve this problem

[stackoverflow](https://stackoverflow.com/questions/49212475/composer-require-runs-out-of-memory-php-fatal-error-allowed-memory-size-of-161)
Or simply type

```bash
$ php --ini
```

The above command shows you the location of your php.ini file. Then navigate on your system to that file and open the php.ini file in note pad or block note. Search for memory_limit and change it's value to -1.
e.g

```
memory_limit = -1
```

## Using laravel Form command to create forms in laravel

You have to install laravelcollective for this to work.
[stackoverflow](https://stackoverflow.com/questions/60921933/class-form-not-found-in-laravel-7)

```bash
$ composer require laravelcollective/html
```

You can check if you already have it installed by running the below command

```bash
$ composer show -- laravelcollective/html
```

After succesfull installation, you can use Form to create forms as shown below

```blade

{{ Form::checkbox('admin', 'yes', true) }}
```

The below link explains working with checkboxes in laravel
[checkboxes](https://stackoverflow.com/questions/26973442/laravel-blade-check-box)

## Using Route in web.php

```web.php
Route::get('/neighbourhood', [
    'uses' => 'NeighbourhoodController@show',
    'as' => 'neighbourhood.show'
]);
```

Then in blade template, use the keyword **route** to get the url as shown below

```blade
    <a href="{{ route('neighbourhood.show') }}">EXPLORE</a>
```

## Making Svg Responsive

The example below explains it better

```blade
    <div class="svg-container">
	    <svg version="1.1" viewBox="0 0 500 500"
            preserveAspectRatio="xMinYMin meet" class="svg-content">
	        <circle fill="#F7941E" stroke="#231F20" stroke-width="10"
	        stroke-miterlimit="10" cx="250" cy="250" r="200" opacity="0.6" />
	    </svg>
    </div>
```

```app.scss
    .svg-container {
	display: inline-block;
	position: relative;
	width: 100%;
	padding-bottom: 100%;
	vertical-align: middle;
	overflow: hidden;
}

.svg-content {
	display: inline-block;
	position: absolute;
	top: 0;
	left: 0;
}
```

## Dompdf

1. Run the under-mentioned command to install DomPDF

```bash
$ composer require barryvdh/laravel-dompdf
```

2. Open **config/app.php** file and incorporate DomPDF service provider in providers array along with DomPDF facade to the aliases array.

```php
    'providers' => [
  Barryvdh\DomPDF\ServiceProvider::class,
],

'aliases' => [
  'PDF' => Barryvdh\DomPDF\Facade::class,
]
```

3. Execute the following command to publish the assets from vendor

```bash
$ php artisan vendor:publish
```

A handful of packages list appeared on your terminal window, and we have to select the **“Provider: Barryvdh\DomPDF\ServiceProvider”** option from the list. It will create the new file config/dompdf.php, holding global configurations for the DomPDF plugin.

This will create **dompdf** file in **config.php** file.

4. Create your controller for the logic e.g

```php
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Employee;
use PDF; //This line is very important

class EmployeeController extends Controller {

    // Generate PDF
    public function createPDF() {
        //pdf_view is the blade template containing the codes
      $pdf = PDF::loadView('pdf_view');

      // download PDF file with download method
      //pdf_file.pdf is the name the file will be downloaded with
      return $pdf->download('pdf_file.pdf');
    }
}
```

5. create your blade template

```php
pdf_view.blade.php
```

6. create your route that links to the controller e.g

```php
Route::get('/employee/pdf','EmployeeController@createPDF');
```

7. In your blade template, link to your controller using an anchor tag e.g

```
<a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
```

For more information, visit

[DomPdf](https://www.positronx.io/laravel-pdf-tutorial-generate-pdf-with-dompdf-in-laravel/)

## Passing Data from blade to controller

This example simplifies it

In your route file, you can create the data to be passed in url with two curly braces {} e.g

```php
Route::put('user/{name}', 'UserController@show');
```

then in your controller, you just pass a variable to the function that is to be executed.

```php
public function show( $name)
{
    dd($name);
}
```

Finally in your blade template, you link to your controller passing it the variable
e.g

```php
<a href="{{ URL::to('user/variableToBePassed') }}">MENU PRINCIPAL</a>
//variableToBePassed is the variable we will be passing
```

For more info, visit

[Passing data through url](https://stackoverflow.com/questions/37013941/passing-page-url-parameter-to-controller-in-laravel-5-2)

## Adminlte integration

You can run the below commands to install it.

```bash
$ composer require infyomlabs/laravel-ui-adminlte
$ php artisan ui adminlte --auth
$ php artisan ui adminlte
$ npm install
$ npm run dev
```

Visit [adminlte](https://github.com/InfyOmLabs/laravel-ui-adminlte) for more information.

## preventing href link from getting appended to current url

To avoid laravel adding links to our url, always reference your local url using {{}} e.g

Instead of

```
<link rel="stylesheet" type="text/css" href="css/header-effects-component.css" />
<script src="js/header-effects-modernizr-custom.js"></script>
```

USE this below by adding {{url('')}}

```php
<link rel="stylesheet" type="text/css" href="{{url('css/header-effects-component.css')}}" />
<script src="{{url('js/header-effects-modernizr-custom.js')}}"></script>
```

## Creating Repositories in laravel

Create a folder called **Repositories**.
Then install the below package

```bash
$ composer require jason-guru/laravel-make-repository --dev
```

After installation, you can use it as below:

```bash
$ php artisan make:repository your-repository-name
```

For more information, you can visit the below link
[Laravel Repository](https://github.com/jason-guru/laravel-make-repository)

## Replacing strings with other stymbols or spaces

```php
 str_replace("-", " ", $name);  // Replace hyphen with spaces
 str_replace(' ', '-', $name); //Replace spaces with hyphen
```

## Datepicker usage

For more information, you can visit
[datepicker](http://www.daterangepicker.com/)

To get started, include jQuery, Moment.js and Date Range Picker's files in your webpage:

```php
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
```

Then attach a date range picker to whatever you want to trigger it:

```php
<input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
```

## Converting datetime from datepicker in milliseconds and then in days

```
var departureDate = picker.startDate.format('YYYY-MM-DD'); // date from datetimepicker
var departure = new Date(departureDate).getTime(); // Convert datetime to milliseconds
var Days = Math.ceil(Days / (1000 * 3600 * 24)); // Convert dates in Days
```

## How to use Flatpickr in Laravel

Install flatpickr using:

```bash
$ npm i flatpickr --save
```

Then in the blade template where you want to use it, add this css and script link

```
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
```

Then in resources/js/app.js, add this line of code

```app.js
//flatpickr
const flatpickr = window.flatpickr = require("flatpickr");
```

You can visit the link below for more information
[Flatpickr](https://flatpickr.js.org/getting-started/)

## Getting tomorrow's date by adding to new date function

```js
var today = new Date(); // current date
var tomorrow = today.setDate(today.getDate() + 1); //tomorrow by adding to today's date
```

## Laravel yajra datatable

1. Install it with the command

```bash
$ composer require yajra/laravel-datatables
```

2. open config->app.php and add the following into providers and aliases part of the code

```php
.....
.....
'providers' => [
	....
	....
	\Yajra\DataTables\DataTablesServiceProvider::class,
]
'aliases' => [
	....
	....
	'DataTables' => Yajra\DataTables\Facades\DataTables::class,
]
```

After this configuration, publish it using the below command:

```bash
$ php artisan vendor:publish --provider="Yajra\DataTables\DataTablesServiceProvider"
```

3. Add the css links for the bootstrap and datatable to function at the head of your blade template

```php
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
```

4. Add the js links for the bootstrap and datatable to function at the head of your blade template

```php
<!--Js for datatables-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
```

**NOTE**: For the links above, you can get them from visiting the following link. Jquery cdn should be the
first link you add to your site and **ADD THESE LINKS AT THE TOP OF YOUR HTML in the head section**

-   [jquery cdn](https://code.jquery.com/)
    click on the minified link and copy and paste the js code in your project

-   [datatables cdn](http://cdn.datatables.net/)
    Visit the link, click on Bootstrap 4, then copy and paste the two js links and one css link appearing on the website into your project

-   [bootstrap cdn](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
    Visit the link, copy and paste the two css links from the site into your website.
    Also copy the three Js links and paste into your website. Finlly remove the below js link from
    your project to avoid duplication of jquery link:
    remove this link from your project

```php
//Link with slim.min.js that you copied from bootstrap page
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
```

5. In resourses/js/bootstrap.js, add the code below

```resourses/js/bootstrap.js
//Datatables
require('datatables.net-bs4');
require('datatables.net-buttons-bs4');
```

6. In resourses/sass/app.scss, add the code below

```resourses/js/bootstrap.js
//Datatables
@import "~datatables.net-bs4/css/dataTables.bootstrap4.css";
@import "~datatables.net-buttons-bs4/css/buttons.bootstrap4.css";
```

7. In your controller, add

```php
use DataTables;
```

8. You need two routes for each page to make the yajra table work. Your index link that will return a view to your blade template and another route that would make the yajra queries e.g
   To display a lists of countries, i used the below two routes

```web.php
Route::get('countries', 'Admin\CountryController@index');
Route::get('countries/list', 'Admin\CountryController@getCountries')->name('get.countries');
```

And in the controller i added the functions as shown below:

```php
// returning the view admin.show.country
 public function index()
    {
        return view('admin.show.country');
    }

    //Getting data from database
    public function getCountries(Request $request)
    {
        if ($request->ajax()) {
            $data = Country::select('nom_en_gb', 'nom_fr_fr')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button type="button" name="edit" class="edit btn btn-success btn-sm"     id="'.$data->id.'"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
                    $actionBtn .=  '
                                &nbsp; &nbsp; &nbsp;<button
                                type="button" name="delete" class="delete btn btn-danger btn-sm" id="'.$data->id.'"><i class="fa fa-trash-alt"></i>&nbsp;Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
```

For more information, visit:
[Yajra datatables](https://www.positronx.io/laravel-datatables-example/)

## Laravel Tips

Visit the following site for more explanation:
[Laravel Tips](https://laraveldaily.com/8-tricks-with-laravel-timestamps/)

## Modal showing but with no opacity

Add the below code to your app.scss to set opacity when modal appears

```app.scss
.modal {
  background: rgba(0,0,0,0.8) !important;
}
```

## Making YajraTable responsive

In the parameters passed in DataTables in your jquery script, add the following

```php
 $('.countries-datatable').DataTable({
    responsive: true,
    autoWidth: false,
 });
```

**NOTE:** The autoWidth property set to false makes the table to change width on different screen sizes.

## Adding Bootstrap active class dynamically to an active link

To make the active link have an active class, add **{{ request()->is('admin/countries') ? 'active' : ''}}** to the **anchor tag** that is the **a** tag
**NOTE** Replace the **admin/countries** link with the appropriate link your a tag links to
E.g

```php
<li class="nav-item">
    <a href="{{ route('countries') }}" class="nav-link countries  {{ request()->is('admin/countries') ? 'active' : ''}}">
        <i class="nav-icon fas fa-flag"></i>
        <p style="color: white;">Countries</p>
    </a>
</li>
```

## For validating a checkbox

I used this below

```php
//used for validating a checkbox
$request->validate([
            'name' => 'required|max:255',
            'terms' => 'accepted'
        ]);

//Or use the below to verify if the checkbox was checked
if($request->has('terms')){
            //Checkbox checked
        }else{
            //Checkbox not checked
        }
```

For more informations on checkbox visit,

[checkboxes](https://5balloons.info/working-with-checkbox-input-in-laravel-form/)

## Dynamically checking or unchecking a checkbox depending on the value from database

Visit the link below to understand more
[Checking a checkbox](https://stackoverflow.com/questions/426258/setting-checked-for-a-checkbox-with-jquery)

## Image uploads using dropzone

follow the following steps

1. Install the Dropzone library using the following command.

```bash
$ npm install dropzone --save
```

2. Now, include this library inside resources >> js >> bootstrap.js file. We need to add the code inside that file.

```php
// bootstrap.js

/**
 * Dropzone
 */

 window.Dropzone = require('dropzone');
 Dropzone.autoDiscover = false;
```

3.  import the Dropzone CSS files inside resources >> sass >> app.scss file, add the following code.

```scss
// Dropzone
@import "~dropzone/dist/min/dropzone.min.css";

.dropzone {
    margin-bottom: 20px;
    min-height: auto;
}
```

4. In your blade template, add these links as a fallback option incase your imports in app.scss fails

```blade
    <!--dropzone script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

<!--dropzone stylesheet-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
```

5. Add your dropzone area in your form as shown below

```blade
<div class="form-group row ">
    <div class="col-md-10">
        <div id="file" class="dropzone"></div>
    </div>
</div>
```

6. Write your jquery code to handle dropzone e.g is shown below

```js
var drop = new Dropzone("#file", {
    createImageThumbnails: true,
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    parallelUploads: 5,
    url: "{{url('dropzone/store')}}",
    headers: {
        "X-CSRF-TOKEN": document.head.querySelector('meta[name="csrf-token"]')
            .content
    },
    success: function(file, response) {
        console.log(response);
        $("#hidden_images_names").val(response.success);
        /********** Attach a hidden input field to store the uploaded files **********/
        $("#file").append(
            '<input type="hidden" name="files[]" value="' +
                response.success +
                '">'
        );
    },
    error: function(file, response) {
        console.log("errorrrr");
        return false;
    },
    addRemoveLinks: true,
    removedfile: function(file) {
        var name = file.upload.filename;
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": document.head.querySelector(
                    'meta[name="csrf-token"]'
                ).content
            },
            type: "POST",
            url: '{{ url("delete-uploaded-image") }}',
            data: {
                filename: name
            },
            success: function(data) {
                console.log("File has been successfully removed!!");
            },
            error: function(e) {
                console.log(e);
            }
        });
        var fileRef;
        return (fileRef = file.previewElement) != null
            ? fileRef.parentNode.removeChild(file.previewElement)
            : void 0;
    }
});
```

**IMPORTANT** Use to different functions in your controller to handle dropzone file upload and your blade form submit function. e.g

1. function store() {
   //Your form submit goes here
   }

2. function dropZoneImageUpload() {
   //Your dropzone image upload code goes here
   }

You can check my **Controllers/Admin/RoomController.php** for the dropzone and form submit function codes
Also attach the response from the controller dynamically by appending a hidden input field and passing the result from the contriller into it e.g

```blade
    $('#file').append('<input type="hidden" name="files[]" value="'+ response.success +'">');
```

For more information, please visit
[DropZone](https://appdividend.com/2018/08/15/laravel-file-upload-example/)

**Dropzone CSRF token mismatch**: If you see this error when using an ajax request, access your token as follows instead

```js
     headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
    },
```

## What to do if you want your login and register links to be on other page that's not home page

You need to manually define all the Auth routes in web.php as shown below

```php
/***Login Route ***/
Route::post('login', 'Auth\LoginController@login');

/***Register Route ***/
Route::post('register', 'Auth\RegisterController@login');

/***Logout Route ***/
Route::post('logout', 'Auth\LoginController@logout');
```

Visit **app/providers/RouteServiceProvider.php** and add the link to be redirected to e.g

```php
public const ROOM = '/show-rooms';
//Where '/show-rooms' is the route to the room page declared in routes/web.php
```

Then in **Http/Controllers/Auth/LoginController.php** and **Http/Controllers/Auth/RegisterController.php**, change the page to be redirected to if the page is different from HOME e.g

```php
protected $redirectTo = RouteServiceProvider::ROOM;
```

## Using fieldset and legend in bootstrap

Visit this stackoverflow page for more info
[fieldset](https://stackoverflow.com/questions/16852484/use-fieldset-legend-with-bootstrap)
