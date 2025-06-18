document.addEventListener('DOMContentLoaded', () => {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            // Encuentra el 'accordion-item' padre
            const accordionItem = header.closest('.accordion-item');
            // Encuentra el 'accordion-content' dentro de ese ítem
            const accordionContent = accordionItem.querySelector('.accordion-content');

            // Alterna la clase 'active' en el header
            header.classList.toggle('active');

            // Alterna la clase 'show' en el contenido
            accordionContent.classList.toggle('show');

            
        });
    });
});