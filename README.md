# Admin Template For Manchester University

This package is designed to apply a quick and easy template into a laravel application

The idea is for all electronics web applications to use this template/package.
This should make it easier to keep multiple applications up to date and enable quicker development.



# Install and Use

**Download the packages**

<pre>
 $ composer require "mu-electronics/admin-template:dev-master"
 $ composer require "illuminate/html:~5.0"
</pre>


**Add the template package to Laravel's service providers (config/app.php)**

*For < 5.1*
<pre>
MUElectronics\adminTemplate\app\Providers\AdminTemplate::class,
</pre>

*For > 5.1*
<pre>
"MUElectronics\adminTemplate\app\Providers\AdminTemplate",
</pre>

**Add Laravel's HTML/FORM package into Laravel's service providers (config/app.php)**

*For < 5.1 into providers array*
<pre>
Illuminate\Html\HtmlServiceProvider::class,
</pre>

*For > 5.1 into providers array*
<pre>
"MUElectronics\adminTemplate\app\Providers\AdminTemplate",
</pre>

**Add packages into Laravel's aliases array**

*For < 5.1 into providers array*
<pre>
'Form'      => Illuminate\Html\FormFacade::class,
'Html'      => Illuminate\Html\HtmlFacade::class,
</pre>

*For > 5.1 into providers array*
<pre>
'Form'      => 'Illuminate\Html\FormFacade',
'Html'      => 'Illuminate\Html\HtmlFacade',
</pre>



**Run the below command to publish package files**

<pre>
php artisan vendor:publish --force
</pre>



# Usage

@todo check this

Taking a new install of laravel open up routes file and past in the below. Navigate to your laravel url and enjoy the template.

<pre>
    Route::get('/', function () {
        return view('vendor.manchesterTemplate.dashboard');
    });
</pre>




# Contribution

This template is a modified version of gentelella template.

Modifications include:

  * Colours to match The University of Manchester colours.
  * Addition of JS libraries etc
  * Addition of CSS etc
  * Images
