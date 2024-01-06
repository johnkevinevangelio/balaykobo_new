<script type="text/javascript">
    // var activeMenu = "";
    // var templateURL = "<?php  bloginfo('template_url'); ?>";
    function setpartnershipsParentCont() {
        const partnershipsParentCont = document.querySelector('.partnerships-parent-cont');
        const partnershipsContentCont = document.querySelector('.partnerships-container');
        const partnershipsContentContHeight = partnershipsContentCont.offsetHeight;
        partnershipsParentCont.style.height = (partnershipsContentContHeight + 120) + 'px';
    }
    window.addEventListener('DOMContentLoaded', event => {
        const partnershipsContentCont = document.querySelector('.partnerships-container');
        // const observer = new MutationObserver(setpartnershipsParentCont);

        if (!partnershipsContentCont) return 

        const resizeObserver = new ResizeObserver(entries => {
            for (const entry of entries) {
                if (entry.target === partnershipsContentCont) {
                    setpartnershipsParentCont();
                }
            }
        });

        resizeObserver.observe(partnershipsContentCont);
        
        setpartnershipsParentCont(); // Set initial height
    });
</script>