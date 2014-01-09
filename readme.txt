AngularPHP,   By Uri Goren (goren4u.com)
===========================================
AngularPHP is a very light weight quick-start project for PHP server support for angular SPAs.
Just copy it to your public_html folder, and its up and running.
 
AngularPHP auto generates a routing scheme for the AngularJS controllers and partial views,
It creates an single angular service for all the PHP API access, and handles the serialization/deserialization among the way.
And it merges all javascript files into a single request to save loading time.
AngularPHP relies on a very simple folder structure convention to do its magic.

AngularPHP was designed with maintainability and simplicity in mind,
The entire project is 3 files with less than 100 lines of code, so you can jump right into it.

===========
CONVENTIONS
=============
There are 3 simple conventions that needs to be followed, and the rest is done by magic.

1) All the javascript files should be in /js/
- For example, controller "x" should be in its own separate file located in /js/x.js
- Additional JS files in this folder will be merged and sent to the user automatically

2) All the partial views should be in /views/
- For example, a partial view "x" correlated with the controller "x" should be in "/views/x.html" and will be loaded when the user goes to "#/x"

3) All API functions should be located in /api/
- For example, an api function p() should be in its own separate file located in /api/p.php