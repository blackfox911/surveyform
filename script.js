document.addEventListener("DOMContentLoaded", function() {
    const nextBtn = document.getElementById("nextBtn");
    const submitBtn = document.getElementById("submitBtn");
    const questions = document.querySelectorAll(".questions");
  
    let currentQuestionIndex = 0;
  
    function showQuestion(index) {
      questions.forEach((question, i) => {
        if (i === index) {
          question.classList.add("active");
        } else {
          question.classList.remove("active");
        }
      });
  
      if (index === questions.length - 1) {
        nextBtn.style.display = "none";
        submitBtn.style.display = "block";
      } else {
        nextBtn.style.display = "block";
        submitBtn.style.display = "none";
      }
    }
  
    nextBtn.addEventListener("click", function() {
      currentQuestionIndex++;
      showQuestion(currentQuestionIndex);
    });
  });
  