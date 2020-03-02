let slider=document.querySelector('.auto__slider'),
    items=document.querySelectorAll('.slider-items');

let arr=['red','blue','orange'];
items[0].style=`background:${arr[arr.length-1]}`;
items[1].style=`background:${arr[0]}`;
items[2].style=`background:${arr[1]}`;

setInterval(() => {
    slider.style=` animation-name: Anim2;`;
    let save=arr.shift();
    arr.push(save)

    setTimeout(() => {

        slider.style=` transform: translateX(0px); `;
        items[0].style=`background:${arr[arr.length-1]}`;
        items[1].style=`background:${arr[0]}`;
        items[2].style=`background:${arr[1]}`;
    },1000)

},5000);

$('.slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,

    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,

            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }

    ]

});

;

$('.slider_shop').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,

    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,

            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});
