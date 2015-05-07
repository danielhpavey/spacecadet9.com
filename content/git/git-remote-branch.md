/*
Title: Git Remote Branches
Date: 20130404
Tags: git
*/

# Git Remote Branches

[Git](http://git-scm.com/) is awesome, no question and the more I use it the more confident I am with it and generally happy with the world I am!

If you want to pull a branch into your repository from a remote one (not necessarily the origin of the one you're working in) the process is fairly simple:

> commands to track remote branch
> git checkout -b [remotename][branch]

This starts tracking the remote branch and checks it out for you.

> then
> git pull [remote] [branch]

This pulls across any changes in that remote branch.

> eg
> git checkout -b dev/area-list-amends
> git pull dev area-list-amends

I do seem to keep having the same issue with [git](http://www.spacecadet9.com/category/git/)… A lot of what I want to do is really quite simple, but a lot of the time the simple answer is hard to find… Do you know what I mean?

Hopefully the above gives you an easy solution to what you are trying to do!


<img src = "http://www.spacecadet9.com/images/Git-Logo-2Color.png" alt = "Git Logo" />

