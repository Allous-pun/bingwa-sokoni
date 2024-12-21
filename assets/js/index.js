// Filter functionality for items
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        const filter = button.getAttribute('data-filter');
        window.location.href = `?filter=${filter}`;
    });
});
