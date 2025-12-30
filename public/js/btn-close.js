document.addEventListener('DOMContentLoaded', () => {
    const dropdownToggle = document.getElementById('navbarDropdown');
    dropdownToggle.addEventListener('click', () => {
        const dropdownMenu = dropdownToggle.nextElementSibling;
        dropdownMenu.classList.toggle('show');
    });
});
