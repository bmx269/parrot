if(typeof(CKEDITOR) !== 'undefined') {
  CKEDITOR.addStylesSet( 'drupal',
      [
        /* Block Styles */

        // These styles are already available in the "Format" drop-down list, so they are
        // not needed here by default. You may enable them to avoid placing the
        // "Format" drop-down list in the toolbar, maintaining the same features.
        /*
         { name : 'Paragraph'       , element : 'p' },
         { name : 'Heading 1'       , element : 'h1' },
         { name : 'Heading 2'       , element : 'h2' },
         { name : 'Heading 3'       , element : 'h3' },
         { name : 'Heading 4'       , element : 'h4' },
         { name : 'Heading 5'       , element : 'h5' },
         { name : 'Heading 6'       , element : 'h6' },
         { name : 'Preformatted Text', element : 'pre' },
         { name : 'Address'         , element : 'address' },
         */

        { name : 'Blue Title'       , element : 'h3', styles : { 'color' : 'Blue' } },
        { name : 'Red Title'        , element : 'h3', styles : { 'color' : 'Red' } },

        /* Inline Styles */

        // These are core styles available as toolbar buttons. You may opt enabling
        // some of them in the "Styles" drop-down list, removing them from the toolbar.
        /*
         { name : 'Strong'          , element : 'strong', overrides : 'b' },
         { name : 'Emphasis'            , element : 'em'    , overrides : 'i' },
         { name : 'Underline'       , element : 'u' },
         { name : 'Strikethrough'   , element : 'strike' },
         { name : 'Subscript'       , element : 'sub' },
         { name : 'Superscript'     , element : 'sup' },
         */

        { name : 'Marker: Yellow'   , element : 'span', styles : { 'background-color' : 'Yellow' } },
        { name : 'Marker: Green'    , element : 'span', styles : { 'background-color' : 'Lime' } },

        { name : 'Big'              , element : 'big' },
        { name : 'Small'            , element : 'small' },
        { name : 'Typewriter'       , element : 'tt' },

        { name : 'Computer Code'    , element : 'code' },
        { name : 'Keyboard Phrase'  , element : 'kbd' },
        { name : 'Sample Text'      , element : 'samp' },
        { name : 'Variable'         , element : 'var' },

        { name : 'Deleted Text'     , element : 'del' },
        { name : 'Inserted Text'    , element : 'ins' },

        { name : 'Cited Work'       , element : 'cite' },
        { name : 'Inline Quotation' , element : 'q' },

        { name : 'Language: RTL'    , element : 'span', attributes : { 'dir' : 'rtl' } },
        { name : 'Language: LTR'    , element : 'span', attributes : { 'dir' : 'ltr' } },

        /* Object Styles */

        {
          name: 'Left Slideshow Block',
          element: 'div',
          attributes:
          {
            'class': 'leftslideblock'
          }
        },

        {
          name: 'Right Slideshow Block',
          element: 'div',
          attributes:
          {
            'class': 'rightslideblock'
          }
        }

      ]);
}
