/*
Title: Joomla 3 Layouts
Date: 2014-04-11
*/

# Joomla 3 Layouts

I've been working with [Joomla!](http://www.joomla.org/) for quite a while now and feel that I've pretty much mostly got the hang of it (except when I feel that I don't).

I've been using HTML overrides more and more lately. They are are very powerful way to control how your website is rendered. Although a lot of of what I do with overrides is just tidy em up so that the final HTML looks better!

I've only just started to build my first Joomla! 3 website and was putting together a blog section. I wanted the article titles to be **h3** not the default **h2**. So I naturally looked to use an HTML override. 

However I found this in the file I wanted to override:

	<?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>

After a bit of investigation I found [this information on the docs.joomla.org](http://docs.joomla.org/Sharing_layouts_across_views_or_extensions_with_JLayout) website.

<blockquote>
It is common that parts of pages are replicated across several views inside an extension, or even across several extensions. Examples might be:
<ul>
<li>
	an extension sharing some display layouts between front-end and backend views, or with one or more modules
</li>
<li>
	backend extensions that have some common settings, and thus have to replicate common display layouts to allow users to change them
</li>
</ul>

Up until Joomla! 3.0, the loading (and template overriding) of layout files was restricted to a given view. The JLayout interface and set of classes was added to Joomla! 3.0 to help solve this very problem. It encapsulates a layout and the data required to display it so that they can be reused across views and extensions
</blockquote>

The upshot of this is that for some elements within a Joomla! 3 template that you may wish to override you'll need to create *layout* overrides.

E.g. for this specific scenario I created a **layouts/joomla/content** folder structure in my template html override folder. The full path being, **templates/[templatename]/html/layouts/joomala/content/**.

I then copied the **blog_stle_default_item_title.php** file from the main layouts folder into my new override folder. I then modified the **h2** tags in that file accordingly...  Simples!


