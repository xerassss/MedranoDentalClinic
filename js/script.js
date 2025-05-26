let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
    let header = document.querySelector('.header');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }
}
// Fade in effect for home content
window.addEventListener('DOMContentLoaded', function() {
    const homeContent = document.querySelector('.home .content');
    if(homeContent) {
        setTimeout(() => {
            homeContent.classList.add('visible');
        }, 100); // slight delay for smoothness
    }
});

/*
let current = 0;

function renderReview(idx) {
  const review = reviews[idx];
  document.getElementById('review-img').src = review.img;
  document.getElementById('review-title').textContent = review.title;
  document.getElementById('review-text').textContent = review.text;
  document.getElementById('review-author').textContent = review.author;

  // Render stars
  let starsHTML = '';
  let fullStars = Math.floor(review.stars);
  let halfStar = review.stars % 1 !== 0;
  for (let i = 0; i < fullStars; i++) starsHTML += '<i class="fas fa-star"></i>';
  if (halfStar) starsHTML += '<i class="fas fa-star-half-alt"></i>';
  document.getElementById('review-stars').innerHTML = starsHTML;
}

document.getElementById('next-review').addEventListener('click', () => {
  const card = document.getElementById('review-card');
  // Slide down and fade out
  card.classList.add('hide');
  setTimeout(() => {
    // Prepare card above and invisible
    card.classList.remove('hide');
    card.classList.add('show');
    // Change content while invisible and above
    current = (current + 1) % reviews.length;
    renderReview(current);
    setTimeout(() => {
      // Slide in from above and fade in
      card.classList.remove('show');
    }, 20); // Short delay to trigger transition
  }, 500);
});

// Initial render
renderReview(current);
</script>
*/