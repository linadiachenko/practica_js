
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const faqQuestion = item.querySelector('.faq-question');

        faqQuestion.addEventListener('click', () => {
            // Close all other open FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });

            // Toggle the active class on the clicked item
            item.classList.toggle('active');
        });
    });
});