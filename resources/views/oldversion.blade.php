<!DOCTYPE html>
<html lang="en">
<head>
<title>Keith McKnight Home Page</title>
<meta name="description" content="Displays posts mainly about Keith McKnight's programming and tech interests.">
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

  <style>
  /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */

/**
 * 1. Change the default font family in all browsers (opinionated).
 * 2. Correct the line height in all browsers.
 * 3. Prevent adjustments of font size after orientation changes in
 *    IE on Windows Phone and in iOS.
 */

/* Document
   ========================================================================== */

html {
  font-family: sans-serif; /* 1 */
  line-height: 1.15; /* 2 */
  -ms-text-size-adjust: 100%; /* 3 */
  -webkit-text-size-adjust: 100%; /* 3 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers (opinionated).
 */

body {
  margin: 0;
}

/**
 * Add the correct display in IE 9-.
 */

article,
aside,
footer,
header,
nav,
section {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * Add the correct display in IE 9-.
 * 1. Add the correct display in IE.
 */

figcaption,
figure,
main { /* 1 */
  display: block;
}

/**
 * Add the correct margin in IE 8.
 */

figure {
  margin: 1em 40px;
}

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * 1. Remove the gray background on active links in IE 10.
 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
 */

a {
  background-color: transparent; /* 1 */
  -webkit-text-decoration-skip: objects; /* 2 */
}

/**
 * Remove the outline on focused links when they are also active or hovered
 * in all browsers (opinionated).
 */

a:active,
a:hover {
  outline-width: 0;
}

/**
 * 1. Remove the bottom border in Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 */

b,
strong {
  font-weight: inherit;
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font style in Android 4.3-.
 */

dfn {
  font-style: italic;
}

/**
 * Add the correct background and color in IE 9-.
 */

mark {
  background-color: #ff0;
  color: #000;
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Add the correct display in IE 9-.
 */

audio,
video {
  display: inline-block;
}

/**
 * Add the correct display in iOS 4-7.
 */

audio:not([controls]) {
  display: none;
  height: 0;
}

/**
 * Remove the border on images inside links in IE 10-.
 */

img {
  border-style: none;
}

/**
 * Hide the overflow in IE.
 */

svg:not(:root) {
  overflow: hidden;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers (opinionated).
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: sans-serif; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
 *    controls in Android 4.
 * 2. Correct the inability to style clickable types in iOS and Safari.
 */

button,
html [type="button"], /* 1 */
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; /* 2 */
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Change the border, margin, and padding in all browsers (opinionated).
 */

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * 1. Add the correct display in IE 9-.
 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  display: inline-block; /* 1 */
  vertical-align: baseline; /* 2 */
}

/**
 * Remove the default vertical scrollbar in IE.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10-.
 * 2. Remove the padding in IE 10-.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in IE 9-.
 * 1. Add the correct display in Edge, IE, and Firefox.
 */

details, /* 1 */
menu {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Scripting
   ========================================================================== */

/**
 * Add the correct display in IE 9-.
 */

canvas {
  display: inline-block;
}

/**
 * Add the correct display in IE.
 */

template {
  display: none;
}

/* Hidden
   ========================================================================== */

/**
 * Add the correct display in IE 10-.
 */

[hidden] {
  display: none;
}

</style>





  <style>
  html, body {
  height: 100%;
}

body{
  font-family: 'Helvetica Neue','Avenir Next', 'HelveticaNeue-Light', Helvetica, Arial, sans-serif;


}

.container{
  display: flex;
  min-height: 100%;
  flex-direction: column;
  align-items: center;/*typically means centered from top to bottom. Here it means centered from left to right.*/
  width:100%;

}

.signature_container{
  display:flex;
  width:85%;
  height: 100px;
  align-items: center;/*centers signature and eye from top to bottom*/
  justify-content: center;
  
}

.sig_image{
  max-width:80%;
  max-height: 100%;
  padding-top: 10px;
  padding-left: 30px;

}



header{
  display:flex;
  justify-content: space-between;
  background:black;
  align-items: center;/*centers item from top to bottom*/
  width:100%;
}

ul{
  list-style: none;
  margin: 0;
}

.left-header-links{
  display:flex;
  justify-content: space-between;
}

li{

  padding: 1em;
}

.toplistelements{
  color:#898989;


}

main{
  display:flex;
  background:purple;
}

footer{
  background:yellow;
  margin-top: auto;
  width:100%;
}

aside{
  margin-right: 40px;
}

h3{
  margin:0;
  padding:0;
  color: #898989;

}

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
}

/*.kmlogo{
  font-size: 1.2em;
  margin: 0.25em;
}*/


#outer-circle {
   background: black;
   border-radius: 50%;
   height: 20px;
   width: 20px;
   position: relative;
   /* 
    Child elements with absolute positioning will be 
    positioned relative to this div 
   */
 }

 #inner-circle {
   position: absolute;
   background: #d8d8d8;
   border-radius: 50%;
   height: 18px;
   width: 18px;
   /*
    Put top edge and left edge in the center
   */
   top: 50%;
   left: 50%;
   margin: -9px 0px 0px -9px;
   /* 
    Offset the position correctly with
    minus half of the width and minus half of the height 
   */
 }

 #inner-inner-circle {
   position: absolute;
   background: black;
   border-radius: 50%;
   height:10px;
   width: 10px;
   /*
    Put top edge and left edge in the center
   */
   top: 50%;
   left: 50%;
   margin: -5px 0px 0px -5px;
   /* 
    Offset the position correctly with
    minus half of the width and minus half of the height 
   */
 }

.blog_post_description{
  display:flex;
  width: 90%;
}

.blog_post_description_text{
margin-left: 10px;
}

.blog_post_description_text h3{
color:black;
font-family: 'Roboto', sans-serif;
font-size: 1.4em;
}

.blog_post_description_text h4{
  margin-top: 0.25em;
color:#898989;
}



footer{
  display:flex;
  justify-content: space-around;
  background:black;

}

.footerlinks{
  list-style-type: none;
}

.footerlinks a{
text-decoration: none;
color:#898989;

}

.up_left_km{
  padding: 0.5em;
}

.up_right_link{
  padding: 0.5em;
}
</style>

  </head>


<body>
  <div class="container">
        <header>
        <h3 class="up_left_km">Keith<br>McKnight</h3>
          <ul class="left-header-links">
            <li class="toplistelements">Posts</li>
            <li class="toplistelements">Your Comments</li>
            <li class="toplistelements">Your Profile</li>
            <li class="toplistelements">Inbox <span class="badge">42</span></li>
          </ul>
            <h3 class="up_right_link">Log Out</h3>
        </header>

        <div class="signature_container">
            <img src="eye.png" alt="eye">
            <img class="sig_image" src="kmsignature.png" alt="Keith McKnight signature">
         </div>
         <h1>Recent Posts</h1>

         <div class="blog_post_description">
            <div id="outer-circle"><div id="inner-circle"></div></div><!--these 2 divs create one small circle-->
            <div class="blog_post_description_text">
            <h3>Marketing a podcast--lessons learned</h3>
            <h4>October 24, 2016</h4>
            </div><!--blog_post_description_text-->
         </div><!--blog_post_description-->

         <div class="blog_post_description">
            <div id="outer-circle"><div id="inner-circle"></div><div id="inner-inner-circle"></div></div><!--these 3 divs create one small circle-->
            <div class="blog_post_description_text">
            <h3>Marketing a podcast--lessons learned</h3>
            <h4>October 24, 2016</h4>
            </div><!--blog_post_description_text-->
         </div><!--blog_post_description-->

         <div class="blog_post_description">
            <div id="outer-circle"><div id="inner-circle"></div></div><!--these 2 divs create one small circle-->
            <div class="blog_post_description_text">
            <h3>Marketing a podcast--lessons learned</h3>
            <h4>October 24, 2016</h4>
            </div><!--blog_post_description_text-->
         </div><!--blog_post_description-->




    




      
        <footer>
            <ul class="footerlinks">
            <li><a href="http://www.keithmcknight.com/">Contact Me</a></li>
            <li><a href="http://www.keithmcknight.com/">Coupon Codes</a></li>
            <li><a href="http://www.keithmcknight.com/">Social Media Stuff</a></li>
            </ul>

            <ul class="footerlinks">
            <li><a href="http://www.keithmcknight.com/">Past Projects</a></li>
            <li><a href="http://www.keithmcknight.com/">Resume</a></li>
            <li><a href="http://www.keithmcknight.com/">All Posts Listed</a></li>
            </ul>

            <ul class="footerlinks">
            <li><a href="http://www.keithmcknight.com/">Links I like</a></li>
            <li><a href="http://www.keithmcknight.com/">Sign In</a></li>
            <li><a href="http://www.keithmcknight.com/">EfficientSeats.com</a></li>
            </ul>
          
        </footer>
  </div><!--container-->
</body>
</html>