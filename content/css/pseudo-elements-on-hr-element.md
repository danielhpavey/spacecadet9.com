/*
Title: Pseudo Elements on hr Tag in IE
Date:2014-05-09
*/

# Pseudo Elements on hr Tag in IE

I'm more and more doing silly things with pseudo elements to add stying to a website design without having to add obtrusive or un-semantic markup.

On a recent project I was using pseudo elements on an hr element to provide some fancy lines for the design.

However when I opened the site in Internet Explorer, surprise surprise there was a problem, the pseudo elements were not visible.

After a bit of digging I discovered that, as I was negatively positioning the pseudo elements I needed to add overflow:visible; to the hr styling.

I'm guessing that in IE anything positioned outside the hr element was not visible but other browsers didn't seem to mind...

