
let menu = document.querySelector('#menu-bar');
        let navbar = document.querySelector('.navbar');
        let isNavbarVisible = false;
        const toggleNavbar = () => {
menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
        isNavbarVisible = !isNavbarVisible;
        };
        menu.addEventListener('click', toggleNavbar);
        menu.addEventListener('touchstart', toggleNavbar);
        window.onscroll = () => {
if (isNavbarVisible) {
toggleNavbar();
}
};
        var swiper = new Swiper(".home-slider", {
        effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: true
                },
                autoplay: {
                delay: 2000,
                        disableOnInteraction: false
                }
//        loop: true,
//                pagination: {
//                el: ".swiper-pagination"
//                }
        });
//        autoplay: {
//        delay: 3000,
//                disableOnInteraction: false
//        }

/*var swiper = new Swiper(".review-slider", {
 slidesPreView: 1,
 grabCursor: true,
 loop: true,
 spaceBetween: 10,
 breakpoints:{
 0: {
 slidePreView: 1
 },
 700: {
 slidePreView: 2
 },
 1050: {
 slidePreView: 3
 }
 },
 autoplay: {
 delay: 5000,
 disableOnInteraction: false
 }
 });*/