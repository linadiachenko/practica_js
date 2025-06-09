document.addEventListener('DOMContentLoaded', () => {
    const searchIcon = document.getElementById('searchIcon');
    const searchInput = document.getElementById('searchInput');
    const hamburger = document.getElementById('hamburger');
    const contactBlock = document.getElementById('contactBlock');
    const closeContact = document.getElementById('closeContact');
    const navLinks = document.querySelector('.nav-links'); // For potential future mobile nav

    // Toggle search input visibility
    searchIcon.addEventListener('click', () => {
        searchInput.classList.toggle('active');
        if (searchInput.classList.contains('active')) {
            searchInput.focus(); // Focus on the input when it appears
        } else {
            searchInput.value = ''; // Clear input when hidden
        }
    });


    // Close search input if clicked outside (optional, but good UX)
    document.addEventListener('click', (event) => {
        if (!searchIcon.contains(event.target) && !searchInput.contains(event.target)) {
            searchInput.classList.remove('active');
            searchInput.value = '';
        }
    });

    // Toggle contact block visibility
    hamburger.addEventListener('click', () => {
        contactBlock.classList.add('active');
    });

    closeContact.addEventListener('click', () => {
        contactBlock.classList.remove('active');
    });

    // Close contact block if clicked outside (optional, but good UX)
    document.addEventListener('click', (event) => {
        if (!hamburger.contains(event.target) && !contactBlock.contains(event.target) && contactBlock.classList.contains('active')) {
            contactBlock.classList.remove('active');
        }
    });

    //  Close dropdown menu when clicking outside
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseleave', () => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.style.display = 'none';
            }
        });
        dropdown.addEventListener('mouseenter', () => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.style.display = 'block';
            }
        });
    });
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
   

    // --- JavaScript for Scroll to Top Button ---
hamburger.addEventListener('click', () => {
    contactBlock.classList.add('active');

    // Also toggle nav menu on small screens
    document.querySelector('nav').classList.toggle('nav-open');
});
