<script type="text/javascript">
    // var activeMenu = "";
    // var templateURL = "<?php  bloginfo('template_url'); ?>";
    function setBookFormParentCont() {
        const bookFormParentCont = document.querySelector('.bookForm-parent-cont');
        const bookFormContentCont = document.querySelector('.bookForm-container');
        const bookFormContentContHeight = bookFormContentCont.offsetHeight;
        bookFormParentCont.style.height = (bookFormContentContHeight + 122) + 'px';
    }
    window.addEventListener('DOMContentLoaded', event => {
        const bookFormContentCont = document.querySelector('.bookForm-container');
        // const observer = new MutationObserver(setServicesParentCont);

        if (!bookFormContentCont) return 

        const resizeObserver = new ResizeObserver(entries => {
            for (const entry of entries) {
                if (entry.target === bookFormContentCont) {
                    setBookFormParentCont();
                }
            }
        });

        resizeObserver.observe(bookFormContentCont);
        
        setBookFormParentCont(); // Set initial height
    });
</script>