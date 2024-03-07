document.getElementById('sendFeedback').addEventListener('click', function() {
    var feedbackMessage = document.getElementById('feedback').value.trim();
    if (feedbackMessage === "") {
      alert("Please enter your feedback before sending.");
    } else {
      var isMessageSent = confirm("Are you sure you want to send the following feedback?\n\n" + feedbackMessage);
      if (isMessageSent) {
        alert("Feedback sent successfully!");
        document.getElementById('feedback').value = ""; // Clear the textarea after sending feedback
      }
    }
  });
  