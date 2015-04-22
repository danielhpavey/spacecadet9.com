/*
Title: A Couple of Tips for Using PHP at the Command Line
Date: 2015-04-21
Tags: php,web development,terminal,commandline
*/

On vary rare occasion I find it useful to run php in the command line.

There are a couple of easy ways to do this, but the first thing you might want to do is check your php version.

This is easily done with the following command:

`
php -v
`

Then if you want to quickly execute some php directly in the terminal you can use the -r switch:

`
php -r '
>
> echo "Boo!";
>'
`

But if you want to run some more complex php you'll probably want to code it up in a file and then run that from the command line like so:

`
php -f my-great-php-file.php
`


