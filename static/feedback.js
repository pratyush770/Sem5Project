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

submitBtn.addEventListener('click', () => {
  const feedbackText = feedbackTextArea.value.trim();

  if (feedbackText !== '') {
    // Perform any actions with the feedback data (e.g., send to a server)
    // For this example, we will simply show the thank you pop-up

    // Hide the feedback form
    //document.querySelector('.feedback-container').style.display = 'none';

    // Show the thank you pop-up with a smiley face
   popUpContainer.style.display = 'flex';
  }
});

// ... (previous code) ...

closeBtn.addEventListener('click', () => {
    // Close the pop-up when the close button is clicked
    popUpContainer.style.display = 'none';
  
    // Reset the feedback form and display it again
    const feedbackForm = document.querySelector('.feedback-container form');
    feedbackForm.reset(); // Reset the form to its default values
    ratingValue = 3; // Reset the rating value to the default (3 stars)
    updateRating(); // Update the displayed rating value
  });
  
  // ... (previous code) ...
  