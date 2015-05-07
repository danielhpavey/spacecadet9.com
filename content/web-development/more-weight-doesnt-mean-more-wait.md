/*
Title: Super Read -> More Weight Doesn't Mean More Wait
Description: Very informative and interesting article from the Filament Group about ways to increase web page performance without necessarily reducing page size.
Date: 20150420
Tags: web development,responsive web design
*/

# Super Read -> More Weight Doesn't Mean More Wait

> Formerly, much of the focus in web performance was concerned with optimizing assets like images and fonts, which does make for a shorter overall page load time. But today there are techniques we can use in addition to file optimization that have an arguably larger impact on how soon our users can see and use the content we're delivering.

[More Weight Doesn't Mean More Wait | Filament Group, Inc., Boston, MA](http://www.filamentgroup.com/lab/weight-wait.html)

This is a great article. Key points for me are:

- [WebPageTest.org](http://WebPageTest.org) provides some super cool page rendering screen shots that show you how your page looks as it loads. (The site also provides a truck load of super useful information.)
- Improving percieved performance is a great aim.
- You should also try to improve rendering start time.

Key techniques that where used in the article:

- Extract and Inline “Critical” CSS
- Load full StyleSheets asynchronously (cached for return visits)
- Load all JavaScript asynchronously (yes, ads too!)
- Load fonts asynchronously and apply them in a progressive manner (fallback first)
- Style fallback fonts to match custom font sizes
