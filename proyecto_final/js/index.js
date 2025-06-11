document.addEventListener('DOMContentLoaded', () => {
    const searchIcon = document.getElementById('searchIcon');
    const searchInput = document.getElementById('searchInput');
    const hamburger = document.getElementById('hamburger');
    const contactBlock = document.getElementById('contactBlock');
    const closeContact = document.getElementById('closeContact');
    const contactInfo = document.getElementById('contactInfo');
    const mobileMenu = document.getElementById('mobileMenu');
    let isContactOpen = false;

    // --- reload page ---//
    document.querySelectorAll('.logo, .footer-logo').forEach(function(el) {
        el.addEventListener('click', function() {
          location.reload();
        });
      });
    // --- Hamburger ---
    if (hamburger && contactBlock && contactInfo && mobileMenu) {
        hamburger.addEventListener('click', () => {
            isContactOpen = !isContactOpen;
            contactBlock.classList.toggle('active', isContactOpen);

            if (window.innerWidth <= 630) {
                if (isContactOpen) {
                    contactInfo.style.display = 'none';
                    mobileMenu.style.display = 'flex';
                    mobileMenu.style.flexDirection = 'column';
                    mobileMenu.style.gap = '10px';
                } else {
                    contactInfo.style.display = 'block';
                    mobileMenu.style.display = 'none';
                }
            } else {
                // On desktop, always show contactInfo and hide mobileMenu
                contactInfo.style.display = 'block';
                mobileMenu.style.display = 'none';
            }

            // close all dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.maxHeight = null;
            });
        });

        // Handle window resize to update menu visibility
        window.addEventListener('resize', () => {
            if (window.innerWidth > 630) {
                contactInfo.style.display = 'block';
                mobileMenu.style.display = 'none';
                contactBlock.classList.remove('active');
                isContactOpen = false;
            } else if (isContactOpen) {
                contactInfo.style.display = 'none';
                mobileMenu.style.display = 'flex';
                mobileMenu.style.flexDirection = 'column';
                mobileMenu.style.gap = '10px';
            } else {
                contactInfo.style.display = 'block';
                mobileMenu.style.display = 'none';
            }
        });
    }

    // --- close contact block ---//
    if (closeContact && contactBlock && contactInfo && mobileMenu) {
        closeContact.addEventListener('click', () => {
            contactBlock.classList.remove('active');
            isContactOpen = false;
            contactInfo.style.display = 'block';
            mobileMenu.style.display = 'none';

            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.maxHeight = null;
            });
        });
    }

    // --- search icon ---
    if (searchIcon && searchInput) {
        searchIcon.addEventListener('click', () => {
            searchInput.classList.toggle('active');
            searchInput.classList.contains('active') ? searchInput.focus() : searchInput.value = '';
        });
    }

    document.addEventListener('click', (e) => {
        if (!searchIcon.contains(e.target) && !searchInput.contains(e.target)) {
            searchInput.classList.remove('active');
            searchInput.value = '';
        }

        if (!hamburger.contains(e.target) && !contactBlock.contains(e.target) && isContactOpen) {
            contactBlock.classList.remove('active');
            isContactOpen = false;
            contactInfo.style.display = 'block';
            mobileMenu.style.display = 'none';
        }
    });

    // --- Dropdowns: mobile logic ---
    document.querySelectorAll('.toggle-dropdown').forEach(toggle => {
        toggle.addEventListener('click', e => {
            e.preventDefault();

            const dropdownMenu = toggle.nextElementSibling;

            // close all other dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu !== dropdownMenu) menu.style.maxHeight = null;
            });

            // animate the clicked dropdown
            if (dropdownMenu.style.maxHeight) {
                dropdownMenu.style.maxHeight = null;
            } else {
                dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px";
            }
        });
    });

    // --- Dropdowns: desktop logic ---
    if (window.innerWidth > 630) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                const menu = dropdown.querySelector('.dropdown-menu');
                menu.style.display = 'block';
            });
            dropdown.addEventListener('mouseleave', () => {
                const menu = dropdown.querySelector('.dropdown-menu');
                menu.style.display = 'none';
            });
        });
    }
});
 // --- New JavaScript for Testimonial Slider (Basic) ---
 const testimonialDots = document.querySelectorAll('.testimonial-pagination .dot');
 const testimonialText = document.querySelector('.testimonial-text p');
 const testimonialAuthor = document.querySelector('.testimonial-author');

 // Example testimonial data (you would load this from an array or API)
 const testimonials = [
     {
         text: "Lorem ipsum dolor sit, consectetur adipiscing elit. Fusce dictum libero nunc, get interdum odio vestibulum at. Pellentesque vehicula eros.",
         author: "FRANK RUPERT"
     },
     {
         text: "This bakery makes the most delicious pastries I've ever tasted! A true delight every morning.",
         author: "MARIA GOMEZ"
     },
     {
         text: " DELIBAKE has truly mastered the art of baking. Their bread is simply divine and always fresh.",
         author: "DAVID SMITH"
     },
     {
         text: "A wonderful experience every time. The staff are friendly, and the quality is consistently excellent.",
         author: "ANNA LEE"
     },
     {
         text: "I can't imagine my mornings without their coffee and croissants. Highly recommended!",
         author: "PETER CHEN"
     }
 ];

 let currentTestimonialIndex = 0;

 function updateTestimonial(index) {
     // Update text and author
     testimonialText.textContent = testimonials[index].text;
     testimonialAuthor.textContent = testimonials[index].author;

     // Update active dot
     testimonialDots.forEach((dot, idx) => {
         if (idx === index) {
             dot.classList.add('active');
         } else {
             dot.classList.remove('active');
         }
     });
     currentTestimonialIndex = index;
 }

 // Add click listeners to dots
 testimonialDots.forEach((dot, index) => {
     dot.addEventListener('click', () => {
         updateTestimonial(index);
     });
 });

 // Auto-advance testimonials
 let autoSlideInterval = setInterval(() => {
     let nextIndex = (currentTestimonialIndex + 1) % testimonials.length;
     updateTestimonial(nextIndex);
 }, 5000); // Change testimonial every 5 seconds

 // Optional: Pause auto-slide on hover
 const testimonialSection = document.querySelector('.testimonial-section');
 testimonialSection.addEventListener('mouseenter', () => {
     clearInterval(autoSlideInterval);
 });
 testimonialSection.addEventListener('mouseleave', () => {
     autoSlideInterval = setInterval(() => {
         let nextIndex = (currentTestimonialIndex + 1) % testimonials.length;
         updateTestimonial(nextIndex);
     }, 5000);
 });


   // --- JavaScript for Video Play/Pause ---
   const heroVideo = document.getElementById('heroVideo');
   const playPauseButton = document.getElementById('playPauseButton');
   const videoPoster = document.getElementById('videoPoster');
   
   playPauseButton.addEventListener('click', () => {
       if (heroVideo.paused || heroVideo.ended) {
           heroVideo.play();
           videoPoster.style.display = 'none';
       } else {
           heroVideo.pause();
           videoPoster.style.display = 'block';
       }
   });
   
   heroVideo.addEventListener('play', () => {
       playPauseButton.classList.remove('fa-play');
       playPauseButton.classList.add('fa-pause');
       videoPoster.style.display = 'none';
   });
   
   heroVideo.addEventListener('pause', () => {
       playPauseButton.classList.remove('fa-pause');
       playPauseButton.classList.add('fa-play');
       videoPoster.style.display = 'block';
   });
