/*
Title: error-500-php-regularexpression-limit-reached
Date: 2012-11-19
*/

# 500 - PHP regular expression limit reached

Starting getting this error message on a Joomla site I'm working on:

500 - PHP regular expression limit reached (pcre.backtrack_limit)

I'm building my own component for the site.

The weird thing was the error message went away when I echoed out the MySQL query...

But as soon as I stopped doing the echo I was getting this error!

Couldn't figure out what was going on, especially as I wasn't doing anything with Regular Expressions!!

After some Googling I found that I could get rid of the error my running the following php commands:

ini_set('pcre.backtrack_limit',1000000);
ini_set('pcre.recursion_limit',1000000);

I put them in my index.php file in my Joomla template.

I'm a little uncomfortable with this as I'm not really sure what's causing this issue... But for the time being it's a fix and I think I'll just have to go with it!


