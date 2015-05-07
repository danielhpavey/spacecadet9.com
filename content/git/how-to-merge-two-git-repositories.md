/*
Title: How to Merge Two Git Repositories
Description: How to merge two git repositories
Date: 20150507
Tags: git

# How to Merge Two Git Repositories

So I've switched this site from our friend Wordpress to a flat file CMS based site... There a few reasons why I decided to do this, but largely I did it for fun!

I love me some [git](http://www.spacecadet9.com/tags/git) and wanted to preserve the [git](http://www.spacecadet9.com/tags/git) history of this site...

I developed the new version of the site in a seperate repository. But there came a point where I had to bite the bullit and merge the old site and the new. 

The best basic description I found on line for how to merge two [git](http://www.spacecadet9.com/tags/git) repositories is below.

> Clone both repositories into the same directory and go into repo A:
> 
> $ git clone A
> $ git clone B
> $ cd A
> 
> Add a remote called B that points to the repo B (do git remote -v to view your remotes), and fetch copies of all B’s branches:
> 
> $ git remote add B ../B
> $ git fetch B
> 
> To view all B’s branches that we’ve just fetched, do git branch -a. You should see B/master in the list. Now, still in repo A, create a branch called B-master in repo A that tracks B/master.
> 
> $ git branch B-master B/master
> 
> If you’re not already in the master branch, check it out, then merge B-master into A’s master.
> 
> $ git merge B-master
> 
> Assuming you have no merge conflicts, you’re done!
> 
> Source [Merging two git repositories | Platformability](http://blog.caplin.com/2013/09/18/merging-two-git-repositories/)

I basically followed these instructions, but added in a step where I deleted the existing site in branch B before I merged in the new site repo...


