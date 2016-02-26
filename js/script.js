(function($) {


    /**
     * Element equalheights
     *
     * Example markup:
     * <div data-toggle="elements-eh" data-target="SELECTOR" data-min-height="PIXEL-VALUE">
     *   <div class="SELECTOR">Equal height element 1</div>
     *   <div class="SELECTOR">Equal height element 2</div>
     *   <div>Not Equal height element</div>
     *   <div class="SELECTOR">Equal height element 3</div>
     * </div>
     *
     * @todo allow each pane to specific a target rather than self
     * ie. data-element-eh-target=".inner-content"
     */
    Drupal.behaviors.parrotEqualHeights = {
      attach: function (context) {
        var ehGroup = $('[data-toggle*="elements-eh"]', context),
            ehTargets = {};

        ehGroup.each(function() {
          ehTargets = $(this).data('target') || '[data-element-eh]';
          ehTargets = $(this).find(ehTargets);
          minHeight = $(this).data('min-height') || null;

          if (ehTargets.size() > 0) {
            ehTargets.addClass('element-eh');
            Drupal.parrotEqualHeights(ehTargets, minHeight);

            $(window).resize(function(){
              Drupal.parrotEqualHeights(ehTargets, minHeight);
            });
          }
        });
      }
    };


})(jQuery);
