const ratingIcons = document.querySelectorAll('.icon');
const ratingInput = document.getElementById('rating-input');
const feedbackTextArea = document.querySelector('.feedback-text textarea');
const submitBtn = document.getElementById('submit-btn');
const popUpContainer = document.getElementById('popup');
const closeBtn = document.getElementById('close-btn');

let ratingValue = 3;

ratingIcons.forEach((icon, index) => {
  icon.addEventListener('click', () => {
    ratingValue = index + 1;
    updateRating();
  });
});

ratingInput.addEventListener('input', () => {
  ratingValue = parseInt(ratingInput.value);
  updateRating();
});

function updateRating() {
  ratingIcons.forEach((icon, index) => {
    icon.style.color = index < ratingValue ? '#f39c12' : '#ccc';
  });
  ratingInput.value = ratingValue;
}
