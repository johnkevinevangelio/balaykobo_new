<script type="text/javascript">
    // JavaScript to set the clicked image in the modal
    const modalImage = document.getElementById('modalImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
	const imgDescription = document.getElementById('imageDescription')
	const filterLinks = document.querySelectorAll('.filter-link')

    thumbnails.forEach(thumbnail => {
			thumbnail.addEventListener('click', () => {
				const imageUrl = thumbnail.getAttribute('src');
				const description = thumbnail.getAttribute('data-desc');
				
				modalImage.setAttribute('src', imageUrl);
				if (!description) return
				imageDescription.textContent = description;
			});
    });

	filterLinks.forEach(function (link) {
		link.addEventListener('click', function (event) {
			event.preventDefault(); // Prevent default link behavior
			const filter = this.getAttribute('data-filter');
			
			if (this.classList.contains('active')) {
				this.classList.remove('active')
				resetFilter();
			} else {
				resetFilter();
				hideImages(filter);
				this.classList.add('active');	
			}
		});
	});

	function hideImages(filter) {
		document.querySelectorAll('.gallery-images .row .gallery-image').forEach(function (image) {
			const filterGroup = image.getAttribute('image-group');
			if (!filterGroup) return
			if (filterGroup !== filter)
				image.classList.add('hidden');
		});
	}

	function resetFilter() {
		document.querySelectorAll('.gallery-images .row .gallery-image').forEach(function (image) {
			image.classList.remove('hidden');
		});

		filterLinks.forEach(function (link) {
			link.classList.remove('active')
		});
	}

	function removeActiveFilter() {
		filterLinks.forEach(function (link) {
			link.classList.remove('active')
		});
	}
</script>