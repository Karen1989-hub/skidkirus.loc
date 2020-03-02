$( document ).ready(function() {
    let n = localStorage.getItem("menuHeading");
    if(n == "height"){
        $('.menuHeading').parent().attr('id','height');
    } else {
        $('.menuHeading').parent().attr('id','null');
    }
});

$( document ).ready(function() {
let n1 = localStorage.getItem("menuHeading1");
    if(n1 == "height1"){
        $('.menuHeading1').parent().attr('id','height1');
    } else {
        $('.menuHeading1').parent().attr('id','null1');
    }
});


//update panel open/closed
$('.adminsBlokLists .btn-success').click(function(){
    $(this).parent().parent().parent().toggleClass('height500');
});

$('.adminsBlokLists #popHotelUpdate').click(function(){
    $(this).parent().parent().parent().toggleClass('height250');
});

$('.adminsBlokLists #popToursUpdate').click(function(){
    $(this).parent().parent().parent().toggleClass('height400');
});

$('.adminsBlokLists #allToursUpdate').click(function(){
    $(this).parent().parent().parent().toggleClass('height400');
});

//update panel open/closed end   /allToursUpdate


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
        $(this).parent().attr("id","height1");
        localStorage.setItem("menuHeading1","height1");
    } else {
        $(this).parent().attr("id","null1");
        localStorage.setItem("menuHeading1","null1");
    }
});

//menu lists anim end

//menu lists hover
$('.big div').not('.menuHeading').not('.menuHeading1').mouseenter(function () {
    $(this).css({"background":"#F0F0F0"});
});
$('.big div').not('.menuHeading').not('.menuHeading1').not('.activPage').mouseleave(function () {
    $(this).css({"background":"white"});
});

//menu lists hover end



