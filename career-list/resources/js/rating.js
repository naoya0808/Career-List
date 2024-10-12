function updateStars(rating) {
    const stars = document.querySelectorAll('.rating label');
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.add('selected');
        } else {
            star.classList.remove('selected');
        }
    });
}

window.onload = function() {
    updateStars(1);
};