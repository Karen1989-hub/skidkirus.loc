
(function() {

    console.log(window.screen.width);

    let menu=document.querySelectorAll('.bottom__sub-menue'),
        links=document.querySelectorAll('.link');

    let bottom__menue=document.querySelectorAll('.bottom__links ');


    for(let i=0;i<menu.length;i++) {
        menu[i].style.display='none';


    }




    links[0].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[0].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })
    links[1].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[1].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })
    links[2].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[2].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })
    links[3].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[3].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })
    links[4].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[4].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })
    links[5].addEventListener('click',() => {
        menu.forEach(e => e.style.display='none')
        menu[5].style.display='flex';
        bottom__menue.forEach(e => e.style.display='none')

    })



})();



(function() {

    let burger=document.querySelector('.burger'),
        menue=document.querySelector('.left__menue'),

        links=menue.querySelectorAll('ul .left__links');




    let subMenue=document.querySelectorAll('.left__submenue');

    for(let i=0;i<subMenue.length;i++) {
        subMenue[i].style='display: none;'



    }

    links[0].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }
        subMenue[0].style='display: block;'
    });

    links[1].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[1].style='display: block;'
    });

    links[2].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[2].style='display: block;'
    });

    links[3].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[3].style='display: block;'
    });

    links[4].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[4].style='display: block;'
    });


    links[5].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[5].style='display: block;'
    });

    links[6].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

    });

    links[7].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }
    });

    links[8].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }
    });

    links[9].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

        subMenue[6].style='display: block;'
    });

    links[10].addEventListener('click',function() {

        for(let i=0;i<subMenue.length;i++) {
            subMenue[i].style='display: none;'
        }

    });


    window.addEventListener('scroll',show);
    burgerIcon=burger.querySelector('img');
    burger.addEventListener('click',clickBurger);
    menue.style.width=' 50px'

    let isbool=false;

    function show() {
        if(pageYOffset>50&&isbool==false) {
            menue.style='width: 200px'
        }

    }


    function clickBurger() {
        let burgerIcon=burger.querySelector('img');
        if(menue.style.width=='200px') {


            isbool=true;

            menue.style=`
             width: 50px;
             overflow:hidden;
             `;
            burgerIcon.src='./img/burger.svg';
            burger.classList.remove('active')
            for(let i=0;i<subMenue.length;i++) {
                subMenue[i].style='display: none;'
            }

            // if(window.screen.width<650) {
            //     menue.style.width=' 40px'
            // }



        } else {

            menue.style=`
            width: 200px; 
            overflow: visible;
            `;
            burgerIcon.src='./img/close.svg';
            burger.classList.add('active');


            for(let i=0;i<subMenue.length;i++) {
                subMenue[i].style='display: none;'
            }
        }
    }

})();




$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });