Parrot Bootstrap 3
==========

Parrot sits on the shoulders of some great projects. Parrot is a Drupal 7 Mothership subtheme that uses the Twitter Bootstrap 3 framework. Parrot is intended to by used by professional developers and themers who want to focus on custom layouts and theming, without having to deal with the assumptions that a lot of beginner friendly themes provide. This theme can also work well for one of the benefits found in Twitter Bootstrap, which is rapid prototyping, as all the templates for the pages, panels and minipanels are included in the theme, in an easy to understand structure. Parrot stays away from a lot of preprocessed page templates, so you know exactly what you are outputting and from where.

### What is Bootstrap? http://getbootstrap.com/

How is this theme using Twitter Bootstrap?
The theme takes the LESS css files provided with Twitter Bootstrap 3, then organizes them to give the theme an additional layer of organization. This organization provides excellent structure for collaboration between development teams, as well as simplifying the approach to all the files.

Parrot Bootstrap 3 provides benefits beyond just a css structure. With Panels templates included with the theme, you have access to 12 Panel Page Layouts, and 7 Minipanel Layouts, that have been built with the Bootstrap Grid, and can be used to build and infinite range of layouts. Also included are Panels Styles, which are enabled with the CTools Stylizer module, that allow you to assign grid widths to blocks within a Panel layout. This feature can allow even more custom layout options for your content.

For the Twitter Bootstrap information, and how to use it, please visit http://getbootstrap.com/getting-started/



## Requirements

* Drupal 7 website
* Mothership base theme http://drupal.org/project/mothership
* LESS compiler installed. The theme uses LESS to build the css. http://incident57.com/less/ has a great Mac compiler.

Parrot Bootstrap 3 includes all JS libraries as well as the CSS structure. To use the JS included, please include the following:

* jQuery Update 7.x-2.x-dev version. https://drupal.org/project/jquery_update. Set *"Default jQuery Version"* to 1.9, and *"Alternate jQuery version for administrative pages"* to 1.5 or 1.8.


## Grid System

The theme uses the full Bootstrap 3 grid system, so you can use the mixins in the LESS file or the classes on your markup, and the elements will flow into the grid as you would expect. More details on how to use the grid can be found: http://getbootstrap.com/css/#grid

## How do you use the theme?

The theme is not intended to be a *"base theme"*, it is meant to be a *"starter theme"* where you rename it and use it as your theme. The *"base theme"* that is to be used with this theme is the Drupal 7 version of Mothership (http://drupal.org/project/mothership).

To install, copy the folder "parrot" from this repo into /sites/all/themes/ of your Drupal 7 site. Rename the folder to your desired theme name, as well, rename the "parrot.info" file to match the theme name. You will also have to search the "template.php" for "parrot" and replace the name with your new theme name. This name must be lowercase, with no spaces, as it is a machine name. You can then inside the .info file add your Fancy theme title. Renaming is not required for use.

To use the Parrot Styles feature, you have to edit: /plugins/styles/parrot_styles/parrot_styles.inc and change Line 16 theme name to your theme's name.

```php
Line 15: // Change theme name 'parrot' to match changed theme name.
Line 16: 'path' => drupal_get_path('theme', 'parrot') . '/plugins/styles/parrot_styles',
```

If theme was called mythemename:

```php
Line 15: // Change theme name 'parrot' to match changed theme name.
Line 16: 'path' => drupal_get_path('theme', 'mythemename') . '/plugins/styles/parrot_styles',
```

The theme uses LESS to build the CSS, then is compiled into the /css/style.css file. The LESS files are organized in a file structure that is based on overall site structure, not specific components. The structure is as follows in the /css folder:

* /base
* /components
* /layout

Let's look at these folders, and how the LESS files inside each are intended to be used. The files included are based on the Twitter Bootstrap 3 files. These files include common markup already, as well as LESS Mixins that can be used on your theme.


### Files of note in /base and their intended use:

* **forms.less** - This contains the common CSS selectors used to display Forms visually in html. If you need to edit or add custom *Form* related CSS, it should be placed in this file.
* **mixins.less** - This is a `@mixin` file containing common and CSS3 styles that can be applied to your theme. To use this on any CSS selector, use the `.mixin-name;` on the selector, and the *@mixin* will be added. For example `.inline-block;` will add all the needed css for a IE7+ compatible `display: inline-block;` display. This is where you would add your own custom *@mixin* or find ones to use.
* **tables.less** - This contains all common CSS selectors used to display *Tables* visually on you site. If you need to edit or add custom *Table* related CSS, it should be placed in this file.
* **type.less** - This contains all *Typography* styles for your site, including base fonts, headings, and more. If you need to edit or add custom *Type* related CSS, it should be placed in this file.
* **variables.less** - This contains the *Variables* used in the other CSS selectors, for example, theme specific colors. If you need to edit or add custom *Variables*, they should be placed in this file.


### Files of note in /base and their intended use:

* **alerts.less** - This contains the common CSS selectors used to display *Alerts* or *Messages* visually on your site. If you need to edit or add custom *Alert* related CSS, it should be placed in this file.
* **breadcrumbs.less** - This contains the common CSS selectors used to display *Breadcrumbs* visually on your site. If you need to edit or add custom *Breadcrumbs* related CSS, it should be placed in this file.
* **buttons.less** - This contains the common CSS selectors used to display *Buttons* visually on your site. If you need to edit or add custom *Button* related CSS, it should be placed in this file.
* **media.less** - This contains the common CSS selectors used to display all *Media*, like images, videos, flash, audio, overlays, etc type components visually on your site. If you need to edit or add custom *Media* related CSS, it should be placed in this file.
* **carousel.less** - This contains the common CSS selectors used to display *Slideshows* visually on your site. If you need to edit or add custom *Carousel* or *Slideshow* related CSS, it should be placed in this file.
* **navs.less** - This contains the common CSS selectors used to display *Navigation* or *Menus* visually on your site. If you need to edit or add custom *Navigation* related CSS, it should be placed in this file.
* **pager.less** - This contains the common CSS selectors used to display *Pager* visually on your site. If you need to edit or add custom *Pager* related CSS, it should be placed in this file.


### Files of note in /layout and their intended use:

* **grid.less** - This contains the *Grid* settings for your site, along with the *Media Queries* for the site. The *Grid* included with the theme by default is the Susy grid framework. You should use this file to layout the sites grid structure as well as block placement. It is recommended to keep the style and placement of block elements separated, allowing quick placement of blocks, and then style is based on the type of block is in the appropriate LESS file.
* **scaffolding.less** - This contains the basic *Body* styles that the theme uses. This file is getting the styles from the *Variables* file, and is a great place to declare the base region specific styles, i.e. wrapper backgrounds for the header and footer.

There is more to this theme then this readme can explain in a short amount of time. This version along with the original Parrot theme have been used successfully across many large organization level sites, being flexible and powerful at the same time.

The development of this theme is sponsored in part by ImageX Media.
