/*
Title: How to get Octal File Permissions from the Command Line
Description: How to get the octal file permissions for the command line.
Date: 20121119
Tags: mac,terminal,command line
*/

# How to get Octal File Permissions from the Command Line

Just putting this here as a note for myself.

> File permissions in Linux can be displayed in octal format using Linux stat command.

`
stat -c '%A %a %n' *
`

- %A Access rights in human readable form
- %a Access rights in octal
- %n File name

[How can I get octal file permissions from command line? - Ask Ubuntu](http://askubuntu.com/questions/152001/how-can-i-get-octal-file-permissions-from-command-line)
