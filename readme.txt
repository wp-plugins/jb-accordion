=== JB Accordion ===
Tags: Accordion, accordions, accordions plugin, accordions plugin jquery, accordions plugin wordpress, accordions short-code, jQuery accordions, Responsive accordions
Requires at least: 3.0
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

JB Accordion is a Responsive super Multi Color and Animated Content plugin for your wordpress theme.

== Description ==

This plugin will enable Accordion in your wordpress theme. You can embed Accordion via shortcode in everywhere you want, even in theme files. 

Demo Click here: http://jobairbd.com/wpplugins/jb-accordion/

Accordions by http://jobairbd.com

Plugin Features

* Fully responsive and mobile ready.
* Unlimited accordions anywhere.
* Use via short-code.
* Different Theme color.
* Easy input field for accordions content.
* Animated accordions content.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-directory` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use shortcode in page, post or in widgets.
4. If you want news Accordion in your theme php, Place `<?php echo do_shortcode('YOUR_SHORTCODE'); ?>` in your templates.

Shortcodes

<strong>General Accordion</strong>
<pre>
[jbaccordion]
[accordion title="Title one" content="Lorem Ipsum is simply dummy text..." ][accordion title="Title one" content="Lorem Ipsum is simply dummy text..." ]
[/jbaccordion]</pre>


<strong>Change Theme of Accordion</strong>
<pre>
[jbaccordion id="1" theme="theme-orange"]
[accordion title="Title one" content="Lorem Ipsum is simply dummy text..." ][accordion title="Title two" content="Lorem Ipsum is simply dummy text..." ]
[/jbaccordion]
</pre>


<strong>Change Animation of Accordion</strong>
<pre>
[jbaccordion id="2" theme="theme-blue" animation="faderight"]
[accordion title="Title one" content="Lorem Ipsum is simply dummy text..." ][accordion title="Title two" content="Lorem Ipsum is simply dummy text..." ]
[/jbaccordion]
</pre>

 
<strong>RTL Support</strong>
<pre>
[jbaccordion id="3" rtl="true" theme="theme-red" animation="fadeleft"]
[accordion title="??? ?????? ??? ?????? ???? ???? ????? ?? ?" content=" ??????? ?????? ????? ??? ????????. ?? ???? ?? ???? ??????? ??? ????? ????????." ][accordion title="???? ????? ?? ??????? ???? ???? ????? ??" content="??????? ?????? ????? ??? ????????. ?? ???? ?? ???? ??????? ??? ????? ????????." ]
[/jbaccordion]
</pre>



* Speacial Note: If you use more than one JB Accordion shortcode in a same page or post so you must be used  different nimber id like id="1", id="2", id="3" etc.

== Frequently Asked Questions ==

= How do I install this plugin? =

You can install as others regular wordpress plugin. No different way. Please see on installation tab.

= Why this plugin doesn't support link in Accordion? =

If you need link support in Accordion, you have to purchase premium version. Premium version is coming soon. Please wait for that.



== Screenshots ==

1. Installed in demo server.


== Changelog ==

= 1.0 =
* Initial Release