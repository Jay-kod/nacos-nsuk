document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    // Initialize Isotope for event filtering
    let eventsContainer = document.querySelector('.events-container');
    if (eventsContainer) {
        let eventsIsotope = new Isotope(eventsContainer, {
            itemSelector: '.events-item',
            layoutMode: 'fitRows'
        });

        let eventsFilters = document.querySelectorAll('#events-flters li');

        eventsFilters.forEach(function(el) {
          el.addEventListener('click', function(e) {
            e.preventDefault();
            eventsFilters.forEach(function(li) {
              li.classList.remove('filter-active');
            });
            this.classList.add('filter-active');

            const filterValue = this.getAttribute('data-filter');
            const eventItems = eventsContainer.querySelectorAll('.events-item');

            // Adjust column classes based on filter
            if (filterValue === '*') {
              eventItems.forEach(item => {
                item.classList.remove('col-lg-12');
                item.classList.add('col-lg-6');
              });
            } else {
              eventItems.forEach(item => {
                item.classList.remove('col-lg-6');
                item.classList.add('col-lg-12');
              });
            }

            eventsIsotope.arrange({
              filter: filterValue
            });

            eventsIsotope.on('arrangeComplete', function() {
              AOS.refresh();
            });

          });
        });
    }

});
