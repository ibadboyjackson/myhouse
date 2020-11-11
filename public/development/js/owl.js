$(document).ready(function() {

    let sync1 = $("#sync1");
    let sync2 = $("#sync2");

    let sync3 = $("#sync3");
    let sync4 = $("#sync4");

    let sync5 = $("#sync5");
    let sync6 = $("#sync6");

    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        navigationText : ["<img src='/images/residential/single/r-left.svg'></img>" , "<img src='/images/residential/single/r-right.svg'></img>"],
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
    });

    sync2.owlCarousel({
        stagePadding : 50,
        margin : 10,
        navigation: true,
        navigationText: ["<img src='/images/residential/single/right.svg'></img>" , "<img src='/images/residential/single/right.svg'></img>"],
        items : 6,
        itemsDesktop      : [1199,6],
        itemsDesktopSmall     : [979,8],
        itemsTablet       : [768,4],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });


    sync3.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        navigationText : ["<img src='/images/residential/single/r-left.svg'></img>" , "<img src='/images/residential/single/r-right.svg'></img>"],
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
    });

    sync4.owlCarousel({
        stagePadding : 50,
        margin : 10,
        navigation: true,
        navigationText: ["<img src='/images/residential/single/right.svg'></img>" , "<img src='/images/residential/single/right.svg'></img>"],
        items : 10,
        itemsDesktop      : [1199,6],
        itemsDesktopSmall     : [979,8],
        itemsTablet       : [768,4],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });


    function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
            .find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
            center(current)
        }
    }

    $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });

    function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
            if(num === sync2visible[i]){
                var found = true;
            }
        }

        if(found===false){
            if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
            }else{
                if(num - 1 === -1){
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if(num === sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
            sync2.trigger("owl.goTo", num-1)
        }

    }

});
