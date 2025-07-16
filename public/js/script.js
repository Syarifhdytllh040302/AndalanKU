document.addEventListener('DOMContentLoaded', function(){
    AOS.init();

    const dropdown = document.getElementById('dropdownMenu');
    const toggleBtns = document.querySelectorAll('#dropdownToggleDesktop, #dropdownToggleMobile');

    toggleBtns.forEach(toggleBtn => {
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdown.classList.toggle('show');
        });
    });

    document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target) && ![...toggleBtns].some(btn => btn.contains(e.target))) {
            dropdown.classList.remove('show');
        }
    });
});
