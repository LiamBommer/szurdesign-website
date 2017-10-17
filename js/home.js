$(document).ready(function(){

    /*
     * carousel settings
     */
    // 初始化轮播
    $('.carousel').carousel();

    // 全宽轮播
    $('.carousel .carousel-slider').carousel({fullWidth: true});


    /*
     * slider settings
     */
    // slider with 600px's height
    $('.slider').slider({
        height: 550,
        indicators: false
    });
    
    $('#arrow-back').click(function() {
        $('.slider').slider('prev');
    });

    $('#arrow-forward').click(function() {
        $('.slider').slider('next');
    });


    /*
     * scrollfire settings
     */
    var options = [
    {selector: '#up-div', offset: 350, callback: function(el) {
        Materialize.showStaggeredList($(el));
                                                            }},
    {selector: '#down-div', offset: 320, callback: function(el) {
        Materialize.showStaggeredList($(el));
                                                               }},
    ];

    // operate
    Materialize.scrollFire(options);
});

