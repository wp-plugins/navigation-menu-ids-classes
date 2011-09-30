=== Navigation Menu IDs & Classes ===
Contributors: aarontgrogg
Tags: navigation, menu, id, class
Requires at least: 3.0
Tested up to: 3.2
Stable tag: 1.1

To reduce the extraneous WordPress classes and add unique IDs to navigation menus.


== Description ==

This simple plug-in removes all the extra classes WP adds to navigation menus,
adds a unique ID to each <li> (except right now I cannot figure out how to add IDs to standard menus),
and removes any empty `class` attributes.

More about this plug-in can be found at:
[http://aarontgrogg.com/2011/09/28/wordpress-plug-in-navigation-menu-ids-classes/](http://aarontgrogg.com/2011/09/28/wordpress-plug-in-navigation-menu-ids-classes/)

Please let me know if you have any questions/suggestions/thoughts,

Atg

[http://aarontgrogg.com/](http://aarontgrogg.com/)

[aarontgrogg@gmail.com](mailto:aarontgrogg@gmail.com)


== Installation ==

1. Download the ZIP
2. Unzip the ZIP
3. Copy/paste the unzipped files into your WP plug-in directory (`/wp-content/plugins/`)
4. From within WP's Plugin Admin panel, Activate the 'Navigation Menu IDs & Classes' plug-in
5. Marvel in the power of technology!


== Frequently Asked Questions ==

= Why bother? =
* WP bakes in a ton of extraneous, border-line useless, IDs and classes on navigation menu LIs (are you really going to
  target `id="menu-item-72"` or `class="page-item-58"` in your CSS?).  This reduces those classes greatly, and makes IDs that
  reflect the page namd in slug form, so you can easily target links in your CSS.
= What WP classes are allowed to remain? =
* Only `current_page_item`
= Does this work with standard and custom menus? =
* Yes, except right now I cannot figure out how to add IDs to standard menus without completely rewriting the `Walker` method,
  which then requires users to use that new method in their themes...  I assume, why WP created a new method for implementing
  custom navigation menus...


== Screenshots ==

1. [screenshot-before.png](http://aarontgrogg.com/wp-content/uploads/2011/09/screenshot-before.png)
2. [screenshot-after.png](http://aarontgrogg.com/wp-content/uploads/2011/09/screenshot-after.png)


== Changelog ==

= 1.0 =
2011-09-28:
Well, this is the first version, so... here it is, hope you like it!
