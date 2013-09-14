$(function(){

    Parallax();

});


$(window).load(function() {
    slabTextHeadlines();
});


// Function to slabtext the hero panel
function slabTextHeadlines() {
    $('html:not(.ie8)').find('.slab').slabText({
        // Don't slabtext the headers if the viewport is under 380px
        "viewportBreakpoint":380
    });
};


// Function to create subtle parallax space effect
function Parallax() {
    $('body').parallax({
        'elements': [
            {
              'selector': '.bg-1',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0.02,
                    'invert': true
                  }
                }
              }
            },
            {
              'selector': '.bg-2',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0.06,
                    'invert': true
                  }
                }
              }
            },
            {
              'selector': '.bg-3',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0.2,
                    'invert': true
                  }
                }
              }
            }
        ]
    });
}
;