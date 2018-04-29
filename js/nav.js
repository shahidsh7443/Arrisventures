// JavaScript Document
/*Responsive navigation*/
$("#nav").addClass("js");

$("#logo").addClass("js").after('<div id="menu">☰</div>');
//<div id="menu">☰</div>
$("#menu").click(function(){
	/*$("#nav").toggle();*/
	$("#nav").slideToggle(300);
});
$(window).resize(function(){
	if(window.innerWidth > 768) {
		$("#nav").removeAttr("style");
	}
});
/* Home Page Carousel Effect*/
   /* $(document).ready(function() {
        //rotation speed and timer
        var speed = 3000;
        var run = setInterval('rotate()', speed);

        //grab the width and calculate left value
        var item_width = $('#slides li').outerWidth();
        var left_value = item_width * (-1);
    //move the last item before first item, just in case user click prev button
        $('#slides li:first').before($('#slides li:last'));

        //set the default item to the correct position
        $('#slides ul').css({'left' : left_value});*/
    //if user clicked on prev button
        /*$('#prev').click(function() {
            //get the right position
            var left_indent = parseInt($('#slides ul').css('left')) + item_width;
            //slide the item
            $('#slides ul').animate({'left' : left_indent}, 200,function(){
    //move the last item and put it as first item
                $('#slides li:first').before($('#slides li:last'));
                //set the default item to correct position
                $('#slides ul').css({'left' : left_value});

            });
            //cancel the link behavior
            return false;
        });*/
    //if user clicked on next button
        /*$('#next').click(function() {

            //get the right position
            var left_indent = parseInt($('#slides ul').css('left')) - item_width;

            //slide the item
            $('#slides ul').animate({'left' : left_indent}, 200, function () {
    //move the first item and put it as last item
                $('#slides li:last').after($('#slides li:first'));

                //set the default item to correct position
                $('#slides ul').css({'left' : left_value});

            });

            //cancel the link behavior
            return false;

        });*/

        //if mouse hover, pause the auto rotation, otherwise rotate it
       /* $('#slides').hover(

            function() {
                clearInterval(run);
            },
            function() {
                run = setInterval('rotate()', speed);
            }
        );
    });*/
    //a simple function to click next link
    //a timer will call this function, and the rotation will begin :)
	/*var item_width = $('#slides li').outerWidth();
	var left_value = item_width * (-1);
    function rotate() {
        /*$('#next').click();
		//get the right position
		var as=parseInt($('#slides ul').css('left'));

            var left_indent = parseInt($('#slides ul').css('left')) - item_width;

            //slide the item
            $('#slides ul').animate({'left' : left_indent}, 200, function () {
    //move the first item and put it as last item
                $('#slides li:last').after($('#slides li:first'));

                //set the default item to correct position
                $('#slides ul').css({'left' : left_value});

            });

            //cancel the link behavior
            return false;
    }*/


/* Home Page Carousel Effect for banner*/
    /*$(document).ready(function() {
        //rotation speed and timer
        var speed1 = 5000;
        var run2 = setInterval('rotate1()', speed1);

        //grab the width and calculate left value
        var item_width1 = $('#slides1 li').outerWidth();
        var left_value1 = item_width1 * (-1);
    //move the last item before first item, just in case user click prev button
        $('#slides1 li:first').before($('#slides1 li:last'));

        //set the default item to the correct position
        $('#slides1 ul').css({'left' : left_value1});

        //if mouse hover, pause the auto rotation, otherwise rotate it
        $('#slides1').hover(

            function() {
                clearInterval(run2);
            },
            function() {
                run2 = setInterval('rotate1()', speed1);
            }
        );
    });
    //a simple function to click next link
    //a timer will call this function, and the rotation will begin :)
	var item_width1 = $('#slides1 li').outerWidth();
	var left_value1 = item_width1 * (-1);
    function rotate1() {*/
        /*$('#next').click();*/
		//get the right position
		/*var as=parseInt($('#slides1 ul').css('left'));

            var left_indent1 = parseInt($('#slides1 ul').css('left')) - item_width1;

            //slide the item
            $('#slides1 ul').animate({'left' : left_indent1}, 200, function () {
    //move the first item and put it as last item
                $('#slides1 li:last').after($('#slides1 li:first'));

                //set the default item to correct position
                $('#slides1 ul').css({'left' : left_value1});

            });

            //cancel the link behavior
            return false;
    }*/
/*end of home page effects*/





$(document).ready(function(){
	$('.js li').on('click', function(){
	    $('.js li').removeClass('active');
	    $(this).addClass('active');
	});
	$("a").on('click', function() {
  var hash=this.hash;
        scroll2hash(hash);

    });
		if (window.location.hash){
			 scroll2hash(window.location.hash);
		}
});


function scroll2hash(hash){
	$("html,body").animate({

			scrollTop: $( hash).offset().top-35
	}, 600);
}
/*Clients Carousel*/
    $(document).ready(function() {

            //move the last list item before the first item. The purpose of this is if the user clicks previous he will be able to see the last item.
            $('#carousel_ul li:first').before($('#carousel_ul li:last'));
			var run1=setInterval('abc()', 3000); })
			$('#carousel_ul li').hover(function() {
						clearInterval(run1);
				},
				function() {
						run1 = setInterval('abc()', 3000);
				});
            //when user clicks the image for sliding right
			function abc(){
				 //get the width of the items ( i like making the jquery part dynamic, so if you change the width in the css you won't have o change it here too ) '
				var item_width = $('#carousel_ul li').outerWidth() + 30;

                //calculate the new left indent of the unordered list
                var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;

                //make the sliding effect using jquery's anumate function '
				//{queue:false, duration:500}
                $('#carousel_ul').animate({'left' : left_indent},500,function(){
                    //get the first list item and put it after the last list item (that's how the infinite effects is made) '
                    $('#carousel_ul li:last').after($('#carousel_ul li:first'));

                    //and get the left indent to the default -210px
                    $('#carousel_ul').css({'left' : '-135px'});
				})
				}

            //when user clicks the image for sliding left
            $('#left_scroll img').click(function(){

                var item_width = $('#carousel_ul li').outerWidth() + 10;

                /* same as for sliding right except that it's current left indent + the item width (for the sliding right it's - item_width) */
                var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;

                $('#carousel_ul').animate({'left' : left_indent},{queue:false, duration:500},function(){

                /* when sliding to left we are moving the last item before the first item */
                $('#carousel_ul li:first').before($('#carousel_ul li:last'));

                /* and again, when we make that change we are setting the left indent of our unordered list to the default -210px */
                $('#carousel_ul').css({'left' : '-210px'});
                });

            });

//TOOLTIPS
$(function() {
    if ($.browser.msie && $.browser.version.substr(0,1)<7)
    {
      $('.tooltip').mouseover(function(){
            $(this).children('span').slideDown(1500);
          }).mouseout(function(){
            $(this).children('span').hide();
          })
    }
  });
