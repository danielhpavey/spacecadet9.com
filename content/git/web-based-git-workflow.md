/*
Title: Set up web based git workflow
Date: 20130417
Tags: git
*/

# Set up web based git workflow

You cannot push to a live working directory - throws errors and can cause many issues.  Therefore need to set up a more complex git setup.

Here are the steps

**NB you'll need terminal / ssh access to the web server**

Set up website as standard in web location.

SSH to web server and navigate to folder (e.g. public_html)

Set up git in the web directory folder using:

> git init

Then to the first git commit using:

> git commit -am "First Commit"

You then create a "Hub" folder outside of the web folder (You can do this in terminal or via an FTP client)

Then in terminal navigate to that hub folder and setup a "bare" git repository using:

> git init --bare

Then in terminal navigate back to the Web folder

We are now going to link the live website with the "hub" by making the hub a remote to the main site using:

> git remote add hub [path to hub]

We then need to "push" from the web site to the "hub" using:

> git push master hub

We then need to set up "hooks" in the website and the hub so that any changes on each are transferred to the other

In **hub** setup "post-update" hook (Hooks are stored in .git/hooks folder)

Copy and rename post-update-sample file to post-update and put the following in the file:

> cd $HOME[Path to Website Directory] || exit
> unset GIT_DIR
> git pull hub master
> exec git-update-server-info

We then make the file executable
chmod +x post-update

Then in the web directory we add a "post-commit" hook

Again browse the hooks folder, copy and rename post-commit-sample to post-commit.

Then add the following into the file:

> git push hub

Again make executable
chmod +x post-commit

The hub and the website will now update each other when either gets and update….

We now clone the **hub** to our local machine for working on using.  It's easiest if in terminal we navigate to the parent directory of where we want to put out git folder and then use:

> git clone [username]@[domain]:[Path to Hub] [Folder name of your choice]

We can now work locally and push changes to the website using:

> git push


Sources:
http://danbarber.me/using-git-for-deployment/
http://joemaller.com/990/a-web-focused-git-workflow/
