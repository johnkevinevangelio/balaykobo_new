<script type="text/javascript">
    // JavaScript to set the clicked image in the modal
    const modalImage = document.getElementById('modalImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
		const imgDescription = document.getElementById('imageDescription')

    thumbnails.forEach(thumbnail => {
			thumbnail.addEventListener('click', () => {
				const imageUrl = thumbnail.getAttribute('src');
				const description = thumbnail.getAttribute('data-desc');
				
				modalImage.setAttribute('src', imageUrl);
				if (!description) return
				imageDescription.textContent = description;
			});
    });
</script>