<script type="text/javascript">
    // JavaScript to set the clicked image in the modal
    const modalImage = document.getElementById('modalImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
	const imgDescription = document.getElementById('imageDescription')
	const filterLinks = document.querySelectorAll('.filter-link')
	const modalDialog = document.getElementById('modalDialog');

    thumbnails.forEach(thumbnail => {
			thumbnail.addEventListener('click', () => {
				const imageUrl = thumbnail.getAttribute('src');
				const description = thumbnail.getAttribute('data-desc');
				const isLarge = thumbnail.getAttribute('is-large');
				if (isLarge == 'true') {
					modalDialog.className = 'modal-dialog'
				}
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
		document.querySelectorAll('.gallery-images .gallery-item').forEach(function (image) {
			const filterGroup = image.getAttribute('image-group');
			if (!filterGroup) return
			if (filterGroup !== filter)
				image.classList.add('hidden');
		});
	}

	function resetFilter() {
		document.querySelectorAll('.gallery-images .gallery-item').forEach(function (image) {
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
	document.addEventListener("DOMContentLoaded", function() {
		const images = document.querySelectorAll('.gallery-images .gallery-item');
		images.forEach(function(img) {
			img.style.setProperty('--random-width', `${65 + Math.random() * 35}%`);
			img.style.setProperty('--random-top', `${Math.random() * 40}%`);
			img.style.setProperty('--random-left', `${Math.random() * 35}%`);
		});
	});
	function setDisplayOption(option) {
		const gallery = document.querySelector ('.gallery-images');

		if (!gallery) return
		// Remove existing Bootstrap column classes
		gallery.classList.remove('cols-3', 'cols-6', 'cols-12', 'abstract');

		// Add Bootstrap column class based on the selected option
		if (option === 'cols-3') {
			gallery.classList.add('cols-3');
		} else if (option === 'cols-6') {
			gallery.classList.add('cols-6');
		} else if (option === 'cols-12') {
			gallery.classList.add('cols-12');
		} else if (option === 'abstract') {
			gallery.classList.add('abstract');
		}
	}
</script>