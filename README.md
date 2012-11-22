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

Mothership Strappy includes Zen Grids http://zengrids.com/ and Susy http://susy.oddbird.net/ grid frameworks. These are both useful and approach the grid differently, depending on your needs, you may find one better then the other.

Zen Grids is enabled by default, to change that uncomment the require susy from the config.rb and the _grid.scss. This is made this way so you can add you own grid framework if you like, while still following the structure of the css.

The chosen grid framework will need to be installed via the GEM file.

Zen Grids
`gem install zen-grids`

Susy
`gem install susy`

## Media Queries

Mothership Strappy includes Breakpoint https://github.com/canarymason/breakpoint to help you build your media queries in SASS. If you are using Susy for your grids, you do not need to enable this. This is called in the _grid.scss to ensure media queries are used in the grids as well as the rest of the theme. If you are using Susy, comment out the import at the top of the _grid.scss.

This will need to be installed via the GEM file.

`gem install breakpoint`