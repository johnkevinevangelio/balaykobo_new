<script type="text/javascript">
    // var activeMenu = "";
    // var templateURL = "<?php  bloginfo('template_url'); ?>";
    function setServicesParentCont() {
        const servicesParentCont = document.querySelector('.services-parent-cont');
        const servicesContentCont = document.querySelector('.services-container');
        const servicesContentContHeight = servicesContentCont.offsetHeight;
        servicesParentCont.style.height = (servicesContentContHeight + 153) + 'px';
    }
    window.addEventListener('DOMContentLoaded', event => {
        const servicesContentCont = document.querySelector('.services-container');
        // const observer = new MutationObserver(setServicesParentCont);

        if (!servicesContentCont) return 

        const resizeObserver = new ResizeObserver(entries => {
            for (const entry of entries) {
                if (entry.target === servicesContentCont) {
                    setServicesParentCont();
                }
            }
        });

        resizeObserver.observe(servicesContentCont);
        
        setServicesParentCont(); // Set initial height
    });
</script>