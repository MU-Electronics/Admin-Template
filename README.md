# Admin Template For Manchester University

This package is designed to apply a quick and easy template into a laravel application

The idea is for all electronics web applications to use this template/package.
This should make it easier to keep multiple applications up to date and enable quicker development.



# Install and Use

Publishing of views is currently not recommended due to any modifications being over written when an updated is pulled and re published.

Referencing the template and login view via the laravel special method [ return view('manchesterTemplate::template'); ] is more appropriate.

Although the public files will need publishing via [ php artisan MU-Electronics:admin-template --tag=public --force ]



# Contribution

This template is a modified version of gentelella template.

Modifications include:

  * Colours to match The University of Manchester colours.
  * Addition of JS libraries etc
  * Addition of CSS etc
  * Images
