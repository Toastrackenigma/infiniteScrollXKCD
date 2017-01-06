# infiniteScrollXKCD

Infinite Scroll XKCD is a small webapp that I made to improve the experience of reading Randall Munroe's webcomic, XKCD.

Rather than having to read the comic, hover over it to read the mouse-over text, and then click next to view the next one, this webapp shows mouse-over text on the page, and to read the next one, just scroll down - when you hit the bottom the next 10 comics just load underneith.

# How This Works

xkcd offers JSON files about comics as described on their about page (http://xkcd.com/about/). Using PHP as a back end, I am simply reading the file for each comic, and generating HTML elements - the title, date stamp, image and mouse-over text. Javascript detects when the user reaches the bottom of the page, and sends an AJAX request to get the next ten.

# License

This code is licensed under the same license as XKCD - Creative Commons Attribution-NonCommercial 2.5 License (https://creativecommons.org/licenses/by-nc/2.5/)

Have fun :)
