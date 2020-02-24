$( document ).ready(function() {
    let n = localStorage.getItem("menuHeading");
    if(n == "height"){
        $('.menuHeading').parent().attr('id','height');
    } else {
        $('.menuHeading').parent().attr('id','null');
    }
});



//update panel open/closed
$('.adminsBlokLists .btn-success').click(function(){
    $(this).parent().parent().parent().toggleClass('height500');
});

$('.adminsBlokLists #popHotelUpdate').click(function(){
    $(this).parent().parent().parent().toggleClass('height250');
});

//update panel open/closed end   /


//menu lists anim
$('.menuHeading').click(function () {
    if($(this).parent().attr('id')=="null"){
        $(this).parent().attr("id","height");
        localStorage.setItem("menuHeading","height");
    } else {
        $(this).parent().attr("id","null");
        localStorage.setItem("menuHeading","null");
    }
});

$('.menuHeading1').click(function () {
    if($(this).parent().attr('id')=="null1"){
        $(this).parent().attr("id","height");
    } else {
        $(this).parent().attr("id","null1");
    }

});

//menu lists anim end

//menu lists hover
$('.big div').not('.menuHeading').mouseenter(function () {
    $(this).css({"background":"#F0F0F0"});
});
$('.big div').not('.menuHeading').not('.activPage').mouseleave(function () {
    $(this).css({"background":"white"});
});
//menu lists hover end



