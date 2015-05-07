/*
Title: IE11 Cache Issue
Date: 20140515
*/

# Interesting Internet Explorer 11 Cache Issue

We recently came across and interesting quirk in IE11 that *seems* to be an issue with its caching.

We were using the transform trick to vertically centre some images in a grid.

ie. 

    #element img{
        top:50%;
        transform:translateY(-50%);
    } 

Each grid element contained a title, which was at the top, and an image. However not all the images where the same size. Therefore to keep things tidy we decided to vertically center them. However vertically centering stuff is surprisingly hard with CSS. 

The above technique (best described on [CSS-Tricks](http://css-tricks.com/centering-percentage-widthheight-elements/)) seemed to fit the bill and worked well across all the browsers we  tested.

However someone spotted an issue!

In Internet Explorer 11 this technique worked when you first visited the page. However if you navigated away from the page, then returned to it by hitting the **back** button in the browser, the layout on the page would be broken. It appeared as if on some of the images the top:50% was not being applied, but the transform:translateY(-50%) was. Thus the images where positioned to high, sticking out of their containing grid element. *But* this was only happening on *some* of the images, not all!

However if you refreshed the page, everything would sit nicely and position correctly... My best guess was that for some reason IE11 was not caching the page correctly. And it was only IE11. 8, 9 and 10 were all fine!

We fiddled with the CSS a little to see if we could resolve the issue. We tried changing the order of the CSS, we tried adding !important to top:50%, but the issue would not go away. It was intermittent, but of course we were unhappy about this happening on our clients website!

In the end we were forced to resolve it using JavaScript. I whipped together a little script that used jQuery to calculate an appropriate margin-top for each image and apply it. The script would only run in Internet Explorer 11. All other browsers would use the original CSS solution for vertical centering.

The JavaScript is as follows:

    <script type="text/javascript">
      $(window).load(function(){
        // Test for IELL
        var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
        if(isIE11){
            // Loop through the images
            $('img').each(function(){
              $imgheight = $(this).height();
              $topmargin = (250 - $imgheight)/2;
              // Add the margin-top and remove the other styles from the images
              $(this).css('margin-top', $topmargin).css("top", "0").css("transform", "translateY(0)");
            });
        }
     });
    </script>

I'd be interested to hear if anyone else has come across this problem and if they have a better understanding of what is causing it and what other solutions for it are out there!


