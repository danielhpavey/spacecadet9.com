/*
Title: Joomla File Permissions Error
Date: 2013-08-16
*/

# Joomla File Permissions Error

I've recently been having file permissions errors with a couple of Joomla installations.

I've not had these issues before so can only assume that they are somehow related to a recent change in my workflow.  I've recently started deploying websites with [git](http://www.spacecadet9.com/category/git/).

I'm not entirely sure why this might be the case (any suggestions would be gratefully received!), although I'm suspicious that our web host may have made some changes to their security too!

Simple fix though!  Ensure that the file permissions of the index.php file in both the website root and your template route is set to 644.

The gotcha I had was that I also need to set the file permissions of the template folder to be 755.  For some reason it was set as 775!!

With this change made everything worked great!
