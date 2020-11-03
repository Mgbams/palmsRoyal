<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## BASIC LARAVEL ARTISAN COMMANDS

* php artisan list
* php artisan help migrate
* php artisan make:controller ControllerName
* php artisan make:model ModelName -m
* php artisan migrate
* php artisan tinker

## PREREQUISITE
 You could try install them in these order

* XAMPP Server
* Text Editor e.g VsCode
* NodeJs
* Composer

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
Search for the link  Composer-Setup.exe under Windows Installer and click on it to download composer
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

* Open phpmyadmin and create your database
* In Laravel project, open **.env** and under mysql fill in the informations necessary like name of the database you just created.
* In app->config->database.php modify your database connection adding the necessary connection info.
* Open another terminal in your project and type this command to activate the database schemas in your project:

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
It will also generate a **HomeController.php** file in  **app->Http->Controllers**

Then finally, run this below commands
```bash
    npm install
    npm run dev
```

**NOTE** If you see the error **SQLSTATE[HY000] [1049] Unknown database 'laravel'** while trying to register
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
**NOTE** __Table names__ can be written with underscores too e.g password_resets.
**NOTE** Your model name should be in singular form and must start in capital letter  E.g Category
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
 *  Session::get('nameOfKey');
 *  Session('nameOfKey');

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

## Installing jquery to your project

```bash
npm install jquery-ui --save-dev
```
Then go to  **resources/js/app.js** and add these codes

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

1. Add the below lines to  resources/js/app.js
```
// resources/js/app.js

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';//add as many widget as you may need
```
2. Add the below line to  resources/sass/app.scss

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

**IMPORTANT** Minimum size for slider images should be  2000 x 1300px

## Adding Font Awesome Icons
Install it by running the below code

```bash
$ npm install font-awesome --save
```
Then import it in your app.scss file as shown below

```resources/sass/app.scss
@import "node_modules/font-awesome/scss/font-awesome.scss";
```
Finally compile it by running the below command

```
npm run dev
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
