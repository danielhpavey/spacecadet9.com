/*
Title:How to transition height auto in CSS3
Date: 2014-05-09
Tags: css,web design
*/

# How to transition height auto in CSS3

The short answer - you can't..!

It is not possible to transition height zero to auto.

i.e.

	div{
		height:0;
		transition:height 2s ease;
	}

	div:hover{
		height:auto;
	}

...will not work... Despite the fact that this seems like a fairly natural thing to want to do.

However there is a trick to simulate this behaviour. That trick is to use **max-height**.

i.e.

	div{
		max-height:0;
		transition:max-height 2s ease;
	}

	div:hover{
		max-height:500px; // Make sure your max height is set to a height you're sure is bigger than the content will be.
	}

Just use **max-height** instead of height and set the **max-height** you are going to transition to as much larger than the content will be. It should now work just lovely..!
