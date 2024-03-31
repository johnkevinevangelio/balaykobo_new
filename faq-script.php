<script>
    document.addEventListener('DOMContentLoaded', function () {
        const collapseElements = document.querySelectorAll('.collapse');
        collapseElements.forEach(function (collapseElement) {
            const toggleButton = collapseElement.previousElementSibling;
            const toggleIcon = toggleButton.querySelector('.plusIcon');

            collapseElement.addEventListener('show.bs.collapse', function () {
            toggleIcon.textContent = '-'; // Change icon to "remove" when collapsing
            });

            collapseElement.addEventListener('hide.bs.collapse', function () {
            toggleIcon.textContent = '+'; // Change icon to "add" when expanding
            });
        });
    });
</script>