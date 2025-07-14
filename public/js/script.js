document.addEventListener('DOMContentLoaded', function(){
    AOS.init();

    const toggleBtn = document.getElementById('dropdownToggle');
    const dropdown = document.getElementById('dropdownMenu');

    toggleBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdown.classList.toggle('show');
    });

    document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target) && !toggleBtn.contains(e.target)) {
        dropdown.classList.remove('show');
        }
    });
});
