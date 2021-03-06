=== Redirector ===
Contributors: Horttcore
Donate link: http://www.horttcore.de
Tags: redirect, page
Requires at least: 3.3
Tested up to: 3.3
Stable tag: 2.0

Redirect a page to an URL 

== Description ==

With this Plugin you can redirect a page in your WordPress installation to any other URL, to a page in your WordPress installation, to the first child page or to https.

!!! WARNING !!!
If you update to version 2.0 via auto update, please deactivate the plugin and reactivate it, else your redirections won't work. Sorry for all the hassle!

== Installation ==

*   Put the plugin file in your plugin directory and activate it in your WP backend.
*   Go to edit a page
*   Scroll down to 'Redirector' meta box
*   Select a WordPress page of you installation or enter a valid URL or select the 'first child page'

== Screenshots ==

1. Screenshot of the Meta box in the content
2. Screenshot of the Meta box in the sidebar

== Frequently Asked Questions ==

= There is no redirect box when I create a new page! =
You have to save it once to get access to the redirecor settings. Sorry for that!

= Are there any filters I can use? =
Sure here is a list
1. redirector_dropdown
1. redirector_url
1. redirector_redirect

= Where can I get support or report bugs?=
Please use the github to report bugs or add feature requests!
https://github.com/Horttcore/Redirector

= Are there any actions I can hook on? =
Sure here is a list
*   redirector_metabox_begin
*   redirector_metabox_end
*   redirector_types
*   redirector_uninstall

== Changelog ==

2.0
*   Core function rewritten
*   Updated JS/CSS
*   Fully extendable with filters and actions
*   Custom Post Type Support 
*   New redirect Method (HTTPS)
*   Moved files into folders

1.2
*   Moved the code into class

1.1
*   Proper multilanguage support
*   CSS moved to redirector.css
*   JS moved to redirector.js

… 
