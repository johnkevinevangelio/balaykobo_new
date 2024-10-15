document.addEventListener('DOMContentLoaded', function() {
    const backgroundImages = [
        'https://balaykobo.com/wp-content/uploads/2024/06/slide-1.png',
        'https://balaykobo.com/wp-content/uploads/2024/06/slide-2.png',
        'https://balaykobo.com/wp-content/uploads/2024/06/new_landing_2-scaled.jpg',
        'https://balaykobo.com/wp-content/uploads/2024/06/new_landing_3-scaled.jpg',
        'https://balaykobo.com/wp-content/uploads/2024/06/new_landing_4-scaled.jpg',
        'https://balaykobo.com/wp-content/uploads/2024/06/new_landing_5-scaled.jpg',
        'https://balaykobo.com/wp-content/uploads/2024/06/new_landing_6.jpg'
        // Add more URLs if you have more background images
    ];

    backgroundImages.forEach(imageUrl => {
        const img = new Image();
        img.src = imageUrl;
    });
    console.log('All images loaded');
});