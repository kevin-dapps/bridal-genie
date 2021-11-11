(function($, window, document, undefined) {
    'use strict';

    var gridContainer = $('.grid-container');


    /*******************************
        init cubeportfolio
     ****************************** */
    gridContainer.each(function(){
        var $this = $(this);

    
    $this.cubeportfolio({
        layoutMode:$this.data('layoutmode'),
        rewindNav: true,
        scrollByPage: false,
        filters: $this.data('filter'),
        loadMore: ($this.data('load-more')? $this.data('load-more'):false),
        loadMoreAction: 'click',
        mediaQueries: [{
            
            width:1600,
            cols:($this.data('col-num-xlarge'))? $this.data('col-num-xlarge'): 6,
        },{    
            width:1200,
            cols:($this.data('col-num-large'))? $this.data('col-num-large'): 5,

        },{
            width: 992,
            cols:($this.data('col-num-medium'))? $this.data('col-num-medium'): 4,
        }, {
            width: 768,
            cols:($this.data('col-num-smedium')) ? $this.data('col-num-smedium'): 3,
        }, {
            width: 480,
            cols:($this.data('col-num-small'))? $this.data('col-num-small'): 2,
        }, {
            width: 300,
            cols:($this.data('col-num-xsmall'))? $this.data('col-num-xsmall'): 1,
        }],
        caption: 'overlayBottomAlong',
        defaultFilter: '*',
        animationType: $this.data('animate-type'),
        gapHorizontal: ($this.data('gap-horizontal')) ? $this.data('gap-horizontal') : 0 ,
        gapVertical: ($this.data('gap-vertical')) ? $this.data('gap-vertical') : 0 ,
        gridAdjustment:$this.data('grid-adjusment'),
        displayType: 'sequentially',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} / {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageAnimation :$this.data('singlepage-animate'),
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} / {{total}}</div>',
        singlePageCallback: function(url, element) {
             
            
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;


            $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    timeout: 5000
                })
                .done(function(result) {
                    t.updateSinglePage(result);
                })
                .fail(function() {
                    t.updateSinglePage("Error! Please refresh the page!");
                });
        },

        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: $this.data('page-position'),
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    timeout: 5000
                })
                .done(function(result) {

                    t.updateSinglePageInline(result);

                })
                .fail(function() {
                    t.updateSinglePageInline("Error! Please refresh the page!");
                });
        }

    });


});


})(jQuery, window, document);




