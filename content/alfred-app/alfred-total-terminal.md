/*
Title: Alfred & Total Terminal Integration
Date: 20130731
Tags: alfred
*/

# Alfred & Total Terminal Integration

I'm a **BIG** [Alfred](http://www.alfredapp.com/) fan and use it all the time!

I've also recently become a big [TotalTerminal](http://totalterminal.binaryage.com/) fan too.  I'm using the Terminal on my Macs more and more these days.

With Alfred you can compose terminal commands in the app and then send them to terminal, which can be very useful.  However I was having trouble getting it to play nice with TotalTerminal.

Alfred give you the option of using Terminal or iTerm or use a custom script to control the function.

I was not able to get the custom script to send my commands from  Alfred to TotalTerminal.  

However a loverly chap on the [Alfred Forum](http://www.alfredforum.com/topic/2904-total-terminal-in-terminal-shell-settings/) helped me out.

The script you need to make Alfred send terminal commands to TotalTerminal is:

<code>
on alfred_script(q)
     tell application "Terminal"
          activate
          tell application "System Events" to tell process "Terminal.app" to keystroke "t" using command down
          do script q in front window
     end tell
end alfred_script
</code>

This will open a new tab in TotalTerminal.  If you want the command to run in the current tab just remove the line that starts "tell application…"

Have fun.




<img src = "http://www.spacecadet9.com/images/totalterminalalfredintegration.jpg" alt = "Alfred & TotalTerminal Integration" style = "max-width:100%" />
