/*
Title: Joomla Header
Date: 2013-05-28
*/

# Joomla Header

Joomla!, Joomla!, Joomla!, so great and so bloody awful all at the same time.

I've been working with the [Joomla!](http://Joomla.org) beast off and on for a number of years now and it has only been recently that I've started to really get it under my control. 

My most recent conquest in my battle with Joomla! is to reign in some of the bloat in the header.  Joomla! is not alone in the CMS world for getting a bit bloated and this is only natural with CMSs (and I won't criticise it hear). However it is nice to be able to control some of the excesses of extraneous inclusion of JavaScript and css files... (especially in this responsive, mobile first world that we now develop in)

So, in order to remove all the Mootools stuff from your Joomla! header put the following in the top of your template index.php file:

<script src="https://gist.github.com/spacecadet9/5666255.js"></script>

Of course you can edit this to suit your own purposes.

Hope it helps!

<img src = "http://www.spacecadet9.com/images/joomla_logo.jpg" alt = "Joomla Logo" />
