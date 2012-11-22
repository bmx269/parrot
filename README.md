Mothership Strappy
==========

Drupal 7 Mothership subtheme that uses "some" Bootstrap CSS structure, with SASS &amp; Compass. 

What is Bootstrap? http://twitter.github.com/bootstrap/

How is this theme using Twitter Bootstrap?
The theme uses "some" of the files provided in Bootstrap, to give the theme a structured set of SASS files, as a way to organize the theme's styles. Bootstrap provided the best overall structure that could be generally used for most projects. There are some files removed from the structure, so do not count on this being a 100% working Bootstrap.

## Requirements

* Drupal 7 website
* Mothership base theme http://drupal.org/project/mothership
* SASS installed. The theme uses SASS to build the css.
* Compass installed.

## Grid System

Mothership Strappy includes the markup to use Zen Grids http://zengrids.com/. This can be modified in the config.rb, and imported into the _grid.scss. This is made this way so you can add you own grid framework if you like, while still following the structure of the css. 

This will need to be installed via the GEM file.

<gem install zen-grids>

## Media Queries

Mothership Strappy includes Breakpoint https://github.com/canarymason/breakpoint to help you build your media queries in SASS. This is called in the _grid.scss to ensure media queries are used in the grids as well as the rest of the theme. 

This will need to be installed via the GEM file.

<gem install breakpoint>