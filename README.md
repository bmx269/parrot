Parrot for Drupal 8 (TWIG)
==========

Parrot sits on the shoulders of some great projects. Parrot is a Drupal 8 theme
that uses "some" Bootstrap CSS structure, with SASS & Compass.

What is Bootstrap? http://twitter.github.com/bootstrap/

How is this theme using Twitter Bootstrap? The theme uses "some" of the files
provided in Bootstrap, to give the theme a structured set of SASS files, as a
way to organize the theme's styles. Bootstrap provided the best overall
structure that could be generally used for most projects. There are some files
removed from the structure, so do not count on this being a 100% working
Bootstrap.

## Requirements

* Drupal 8 website
* SASS installed. The theme uses SASS to build the css.
* Compass installed.

## Grid System

Parrot includes Susy http://susy.oddbird.net/ as well as Zen Grids
http://zengrids.com/ grid frameworks, and now the Singularity Grid System
https://github.com/Team-Sass/Singularity/. These are both useful and approach
the grid differently, depending on your needs, you may find one better then the
other.

Susy is enabled by default, to change that comment out the require 'susy', and
uncomment the require 'zen' or 'singularitygs' from the config.rb and the
_grid.scss. This is made this way so you can add you own grid framework if you
like, while still following the structure of the css.

The chosen grid framework will need to be installed via the GEM file.

### Susy
`gem install susy -v 1.0.9` Check that the version used is at least 1.0.8, but
not yet version 2+.

### Zen Grids
`gem install zen-grids`

### Singularity Grid System
`gem install singularitygs`


## CSS Helpers

Parrot comes with the CSS fixing toolkit called, well, Toolkit
https://github.com/team-sass/toolkit, brought to you by the same people that
made Singularity. This makes some of the common css trouble, a lot easier.

This will need to be installed via the GEM file.

### Toolkit
`gem install toolkit`


## Media Queries

Parrot includes Breakpoint https://github.com/canarymason/breakpoint to help you
build your media queries in SASS. If you are using Susy for your grids, you do
not need to enable this. This is called in the _grid.scss to ensure media
queries are used in the grids as well as the rest of the theme. If you are using
Susy, comment out the import at the top of the _grid.scss.

This will need to be installed via the GEM file.

### Breakpoint
`gem install breakpoint`


## How do you use the theme?

The theme is not intended to be a *"base theme"*, it is meant to be a *"starter
theme"* where you rename it and use it as your theme. The *"base theme"* that is
to be used with this theme is the Drupal 7 version of Mothership
(http://drupal.org/project/mothership).

To install, copy the folder "parrot" from this repo into /sites/all/themes/ of
your Drupal 7 site. Rename the folder to your desired theme name, as well,
rename the "parrot.info" file to match the theme name. You will also have to
search the "template.php" for "parrot" and replace the name with your new theme
name. This name must be lowercase, with no spaces, as it is a machine name. You
can then inside the .info file add your Fancy theme title. Renaming is not
required for use.

The theme uses SASS to build the CSS, then is compiled into the /css/style.css
file. The SASS files are organized in a file structure that is based on overall
site structure, not specific components. The structure is as follows in the
/css/sass folder:

* /base
* /components
* /layout

Let's look at these folders, and how the SASS files inside each are intended to
be used. The files included are based on the Twitter Bootstrap 2.1.1 files, and
include *some* of the markup from Twitter Bootstrap. These files include common
markup already, as well as SASS Mixins that can be used on your theme.


### The files in /base and their intended use:

* **_code.scss** - This contains the common CSS selectors used to display *Code*
  visually on your site. If you need to edit or add custom *Code* related CSS,
  it should be placed in this file.
* **_font-awesome.scss** - This is a `@mixin` file containing icons that can be
  added to elements. To use this on any CSS selector, use the `@include icon-
  name;` on the selector, and the icon will be added, as a font based icon. To
  see the icons included, visit http://fortawesome.github.com/Font-Awesome/. The
  names are included beside the icon samples.
* **_forms.scss** - This contains the common CSS selectors used to display Forms
  visually in html. If you need to edit or add custom *Form* related CSS, it
  should be placed in this file.
* **_mixins.scss** - This is a `@mixin` file containing common and CSS3 styles
  that can be applied to your theme. To use this on any CSS selector, use the
  `@include mixin-name;` on the selector, and the *@mixin* will be added. For
  example `@include inline-block;` will add all the needed css for a IE7+
  compatible `display: inline-block;` display. This is where you would add your
  own custom *@mixin* or find ones to use.
* **_tables.scss** - This contains all common CSS selectors used to display
  *Tables* visually on you site. If you need to edit or add custom *Table*
  related CSS, it should be placed in this file.
* **_type.scss** - This contains all *Typography* styles for your site,
  including base fonts, headings, and more. If you need to edit or add custom
  *Type* related CSS, it should be placed in this file.
* **_variables.scss** - This contains the *Variables* used in the other CSS
  selectors, for example, theme specific colors. If you need to edit or add
  custom *Variables*, they should be placed in this file.


### The files in /base and their intended use:

* **_accordion.scss** - This contains the common CSS selectors used to display
  *Accordions* visually on your site. If you need to edit or add custom
  *Accordion* related CSS, it should be placed in this file.
* **_alerts.scss** - This contains the common CSS selectors used to display
  *Alerts* or *Messages* visually on your site. If you need to edit or add
  custom *Alert* related CSS, it should be placed in this file.
* **_breadcrumbs.scss** - This contains the common CSS selectors used to display
  *Breadcrumbs* visually on your site. If you need to edit or add custom
  *Breadcrumbs* related CSS, it should be placed in this file.
* **_buttons.scss** - This contains the common CSS selectors used to display
  *Buttons* visually on your site. If you need to edit or add custom *Button*
  related CSS, it should be placed in this file.
* **_media.scss** - This contains the common CSS selectors used to display all
  *Media*, like images, videos, flash, audio, overlays, etc type components
  visually on your site. If you need to edit or add custom *Media* related CSS,
  it should be placed in this file.
* **_sprites.scss** - This is where you should put the CSS related to *Sprite
  Images* used on your site.
* **_rotato.scss** - This contains the common CSS selectors used to display
  *Rototo's* or *Slideshows* visually on your site. If you need to edit or add
  custom *Rotato* or *Slideshow* related CSS, it should be placed in this file.
* **_labels-badges.scss** - This contains the common CSS selectors used to
  display *Labels* visually on your site. If you need to edit or add custom
  *Lable* related CSS, it should be placed in this file.
* **_navs.scss** - This contains the common CSS selectors used to display
  *Navigation* or *Menus* visually on your site. If you need to edit or add
  custom *Navigation* related CSS, it should be placed in this file.
* **_pager.scss** - This contains the common CSS selectors used to display
  *Pager* visually on your site. If you need to edit or add custom *Pager*
  related CSS, it should be placed in this file.
* **_elements.scss** - This is where you should put the CSS related to the
  custom *Elements* the do not fall into the files above, which are used on your
  site.


### The files in /layout and their intended use:

* **_grid.scss** - This contains the *Grid* settings for your site, along with
  the *Media Queries* for the site. The *Grid* included with the theme by
  default is the Susy grid framework. You should use this file to layout the
  sites grid structure as well as block placement. It is recommended to keep the
  style and placement of block elements separated, allowing quick placement of
  blocks, and then style is based on the type of block is in the appropriate
  SASS file.
* **_scaffolding.scss** - This contains the basic *Body* styles that the theme
  uses. This file is getting the styles from the *Variables* file, and is a
  great place to declare the base region specific styles, i.e. wrapper
  backgrounds for the header and footer.

## Please Note

This project is a on Drupal.org as well, but does not include some of the non-
gpl libraries. This github project will remain, as it allows you to Fork it, and
improve the theme by adding Pull Requests.

Drupal.org Parrot Theme https://drupal.org/project/parrot

The development of this theme is sponsored in part by ImageX Media.
