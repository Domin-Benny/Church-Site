$(document).ready(function ($) {
    "use strict";
    gsap.registerPlugin(ScrollTrigger);

    var elementFirst = document.querySelector('.site-header');
    ScrollTrigger.create({
        trigger: "body",
        start: "30px top",
        end: "bottom bottom",
        onEnter: () => myFunction(),
        onLeaveBack: () => myFunction(),
    });

    function myFunction() {
        elementFirst.classList.toggle('sticky_head');
    }

    var service_slider = new Swiper(".service-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            },
        },
    });

    function showPopup(option) {
        // Create a div element for the pop-up
        const popup = document.createElement('div');
        popup.classList.add('popup');
        
        // Set the content based on the selected option
        let content = '';
        switch (option) {
            case 'tithes':
                content = 'Support our church through tithing. Tithing is a voluntary contribution to support the church\'s mission and activities.';
                break;
            case 'offerings':
                content = 'Contribute to our offerings for various causes. Offerings play a vital role in supporting our community outreach and charitable initiatives.';
                break;
            case 'fundraising':
                content = 'Support our fundraising campaigns. Your donations help us achieve specific goals and projects for the betterment of our community.';
                break;
                case 'events':
                    content = 'Support specific events like trips to prisons or orphanage homes. Your contributions make a meaningful impact on the success of these events.';
                    break;
                default:
                    content = 'Thank you for your support!';
            }
            
            // Set the content in the pop-up
            popup.innerHTML = `
                <h2>${option}</h2>
                <p>${content}</p>
                <button onclick="closePopup()">Close</button>
            `;
            
            // Append the pop-up to the body
            document.body.appendChild(popup);
        }
        
        function closePopup() {
            // Remove the pop-up from the DOM
            const popup = document.querySelector('.popup');
            if (popup) {
                popup.remove();
            }
        }
        


})

