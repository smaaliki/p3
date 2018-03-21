# Project 3
+ By: *Samer Maaliki*
+ Production URL: <http://p3.ulaila.com>

## Outside resources
The debugbar package was added to this project to support future development:
<https://packagist.org/packages/barryvdh/laravel-debugbar>

## Code style divergences
Naming of the methods in the CalculatorsController.php file veered from the camel back style. 
The style used was "Something_Something_Calc".  This allows us to look for "_Calc" in order
to make sure that this is a calculator method.  Also, the first underscore can be replaced 
with a space which allows us to use the remaining string as the name of the calculator when
listing the calculators.

## Notes for instructor
I have not installed any other packages at this time.  I was going to install a 
user authentication package, when I realized that in the config directory, there is an 
"auth.php" file.  I figured it's better to wait till we cover this subject before 
I implement such a thing,