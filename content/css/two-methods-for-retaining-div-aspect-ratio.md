/*
Title: Two Methods for Retaining Div Aspect Ratio
Description: Two method for retaining div and other html block elements aspect ratio
Date: 20150508
Tags: css,webdev,webdesign
*/
# Two Methods for Retaining Div Aspect Ratio

I recently found that I needed to maintain the aspect ratio of a div as the browser resizes. I wanted to maintain the ratio as I was using it as part of an image slide show.

I found 2 good solutions, one seemingly a lot simpler than the other. However I can't work out if one is *better* than the other...

## Solution 1

> If the vertical paddings (and margins) are specified in percent (%) values the size is a percent of the width of the containing element.
> 
> So if you write:
> 
> `
> width: 50%;
> height: 0;
> padding-bottom: 50%;
> `
> 
> you get a fluid square box with only a three row CSS declaration.
> 
> [Full CSS Fluid Squares (or Rectangles, or... - position: absolute;](http://absolide.tumblr.com/post/7317210512/full-css-fluid-squares)

## Solution 2

> ### HTML
>
> `
> <div class='box'> 
>     <div class='content'>Aspect ratio of 1:1</div> 
> </div>
> `
>
> We need two block elements to achieve the desired behaviour. No images, no Javascript.
> 
> ### CSS
>
> `
> .box{
>     position: relative;
>     width: 50%;width/* desired width */
> }
> .box:before{
>     content: "";
>     display: block;
>     padding-top: 100%;  /* initial ratio of 1:1*/
> }
> `
>
> [ HEIGHT EQUALS WIDTH WITH PURE CSS ](http://www.mademyday.de/css-height-equals-width-with-pure-css.html)

I do love using pseudo elements, hover solution 1 does seem significantly simpler...


