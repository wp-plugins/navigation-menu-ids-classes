=== Navigation Menu IDs & Classes ===
Contributors: aarontgrogg
Tags: navigation, menu, id, class, semantic, clean
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 2.0

To reduce the extraneous WordPress classes and add unique IDs to navigation menus.


== Description ==

This plug-in limits the classes WordPress added to navigation menus to only those desired by the Theme owner,
adds a unique ID to each `&lt;li&gt;` (except right now I cannot figure out how to add IDs to standard menus),
and removes any empty `class` attributes.

More about this plug-in can be found at:
[http://aarontgrogg.com/2011/09/28/wordpress-plug-in-navigation-menu-ids-classes/](http://aarontgrogg.com/2011/09/28/wordpress-plug-in-navigation-menu-ids-classes/)
(including screenshots, because I STILL cannot figure out how the `== Screenshots ==` section of this is supposed to work...).

Please let me know if you have any questions/suggestions/thoughts,

Atg

[http://aarontgrogg.com/](http://aarontgrogg.com/)

[aarontgrogg@gmail.com](mailto:aarontgrogg@gmail.com)


== Installation ==

1. Download the ZIP
2. Unzip the ZIP
3. Copy/paste the unzipped files into your WP plug-in directory (`/wp-content/plugins/`)
4. From within WP's Plugin Admin panel, Activate the 'Navigation Menu IDs & Classes' plug-in
5. Choose which, if any, WP classes you wish to have in your HTML
6. Marvel at the power of technology!


== Frequently Asked Questions ==

= Why bother? =
* WP bakes in a ton of extraneous, border-line-useless, IDs and classes on navigation menu LIs (are you really going to
  target `id="menu-item-72"` or `class="page-item-58"` in your CSS?).  This plug-in greatly reduces those classes,
  and adds classes that reflect the link's page name, in slug form, so you can easily target menu LIs in your CSS.
= What WP classes are allowed to remain? =
* Any that you choose.
= Does this work with standard and custom menus? =
* Yes, both standard and custom menus will get class names that reflect the page name from the link they contain, such as:
  `<li class="about-us"><a href="about-us">About Us</a></li>`


== Screenshots ==

1. [screenshot-before.png](http://aarontgrogg.com/wp-content/uploads/2011/09/screenshot-before.png)
2. [screenshot-after.png](http://aarontgrogg.com/wp-content/uploads/2011/09/screenshot-after.png)


== Changelog ==

= 2.0 =
2012-10-03:
* Finally added the admin screen!
* Added `if ( ! function_exists( '...' ) ):` blocks around each plug-in function
* Changed function namesspace from `nmic` to `NMIC`
* Still want to find a way to gather possible WP class names programmatically, for "this" version of WP; any ideas?

= 1.2 =
2012-02-27:
* Page name slug classes were not working; this has been fixed.  Thanks to Christopher Bright for getting me to look into this.
* Removed nmic_remove_empty_classes function, as it is no longer necessary now that all nav menu LIs will have at least one class: the page name slug.

= 1.0 =
2011-09-28:
Well, this is the first version, so... here it is, hope you like it!
