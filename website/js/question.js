// array of object that hold the question and answer to the quiz

const questions = [{
  "question": "What does CSS stand for?",
  "option1": "Colorful Style Sheets",
  "option2": "Creative Style Sheets",
  "option3": "Cascading Style Sheets",
  "option4": "Computer Style Sheets",
  "answer": "3"
}, {
  "question": "What does CSS language use to specify",
  "option1": "Layout",
  "option2": "Formatting",
  "option3": "Fonts",
  "option4": "All of the above",
  "answer": "3"
}, {
  "question": "When is the first CSS specification to become an official W3C Recommendation ",
  "option1": "December 1996",
  "option2": "January 1996",
  "option3": "September 1996",
  "option4": "October 1997",
  "answer": "1"
}, {
  "question": "When was CSS level 2 published?",
  "option1": "June 1998",
  "option2": "May 1998",
  "option3": "February 1998",
  "option4": "March 1998",
  "answer": "2"
}, {
  "question": "This is a language used to specify presentaions os any sturcturally marked up language.",
  "option1": "CASCADING STYLE SHEET",
  "option2": "CHSS",
  "option3": "HTTP",
  "option4": "I don't know",
  "answer": "1"
}, {
  "question": "These are essential for developing a program.",
  "option1": "CSS Preprocessores",
  "option2": "CSS",
  "option3": "HTML preprocessors",
  "option4": "CSS Libraries",
  "answer": "1"
}, {
  "question": "It provides predefined CSS design.",
  "option1": "CSS",
  "option2": "CSS Framework",
  "option3": "CSS Libraries",
  "option4": "Bootstrap",
  "answer": "2"
}, {
  "question": "This is an advanced front-end frameworks that is used by developers in designing responsive sites.",
  "option1": "CSS",
  "option2": "Materialize",
  "option3": "Foundation",
  "option4": "Bootstrap",
  "answer": "3"
}, {
  "question": "Most popular framework that supports HTML, CSS, JavaScript and JQuery.",
  "option1": "CSS",
  "option2": "Materialize",
  "option3": "Foundation",
  "option4": "Bootstrap",
  "answer": "4"
}, {
  "question": "DOM stands for:",
  "option1": "Document Object Model",
  "option2": "Distance Object Model",
  "option3": "DOM",
  "option4": "Did Out Model",
  "answer": "1"
}, {
  "question": "The HTML DOM tree of objects consists of:",
  "option1": "Root element",
  "option2": "All choices",
  "option3": "Element (body)",
  "option4": "Attributes",
  "answer": "2"
}, {
  "question": "This is a programming API for XML ang HTML objects",
  "option1": "CSS",
  "option2": "CSSDOM",
  "option3": "DOM",
  "option4": "Bootstrap",
  "answer": "3"
}, {
  "question": "This allows to specify values of several properties.",
  "option1": "Shorthand properties",
  "option2": "Vendor properties",
  "option3": "prefixes",
  "option4": "values",
  "answer": "1"
}, {
  "question": "this syntax is used to define values for css properties.",
  "option1": "CSS",
  "option2": "Values",
  "option3": "Value Processing",
  "option4": "Types",
  "answer": "2"
}, {
  "question": "this are declared, cascaded, specified, etc.",
  "option1": "dimensions",
  "option2": "Numbers",
  "option3": "Value Processing",
  "option4": "Value",
  "answer": "3"
}, {
  "question": "specifies non-standard or experimental",
  "option1": "CSS",
  "option2": "Value",
  "option3": "Vendor specific extensions",
  "option4": "Bootstrap",
  "answer": "4"
}, {
  "question": "-webkit-, -moz- and -ms- are examples of:",
  "option1": "Vendor specific extensions",
  "option2": "CSS Prepocessros",
  "option3": "Vendor specified extensions",
  "option4": "JavaScript",
  "answer": "4"
}, {
  "question": "these are  strutures used to contain in a CSS rule.",
  "option1": "CSS Selectors",
  "option2": "CSS Prepocessros",
  "option3": "Vendor specified extensions",
  "option4": "Selector Syntax",
  "answer": "1"
}, {
  "question": "This is a chain of one or more sequences of simple selectors.",
  "option1": "Selectors",
  "option2": "CSS Selctor Syntax",
  "option3": "Specificity",
  "option4": "JavaScript",
  "answer": "2"
}, {
  "question": "The following are Pseudo selectors execpt:",
  "option1": ":first-letter,::first-letter",
  "option2": ":first-line,::first-line",
  "option3": "::after,::forward",
  "option4": "::before,::before",
  "answer": "3"
}, {
  "question": "these are examples of counters except:",
  "option1": "counter-increment",
  "option2": "counter-reset:",
  "option3": "counter-reset: topic 0;",
  "option4": "counter-back",
  "answer": "4"
}, {
  "question": "The universal selector is represented by what character.",
  "option1": "*",
  "option2": "-",
  "option3": "&",
  "option4": "~",
  "answer": "1"
}];

// currebtQuestion is set to zero
var currentQuestion = 0;
// the starting score is zero
var score = 0;
// the totQuestion is variable that store the total length of the question array
var totQuestions = questions.length;

var selectedOption = document.querySelectorAll('input[type=radio]');


// declearing variables to getElement by there id names
var container = document.getElementById("quizContainer");
var questionElement = document.getElementById("question");
var opt1 = document.getElementById("opt1");
var opt2 = document.getElementById("opt2");
var opt3 = document.getElementById("opt3");
var opt4 = document.getElementById("opt4");
var nextButton = document.getElementById("nextButton");
var resultCont = document.getElementById("result");


// this is a function that load the question from the question.js files been define earlier on.
// this function only has one parameter which is the questionIndex
function loadQuestion(questionIndex) {
  // creating a variable q to store the questions index
  // questionindex will load the next question will have on the array of object
  var q = questions[questionIndex];
  // questionElement.textcontext is populating the question to the view from the question.js file
  questionElement.textContent = ` ${questionIndex + 1}  ${'. '} ${q.question}`;
  // opt.textContent is going to return the option we have on the question.js file
  opt1.textContent = q.option1;
  opt2.textContent = q.option2;
  opt3.textContent = q.option3;
  opt4.textContent = q.option4;
};
nextButton.setAttribute("disabled", true)

function checkRadio() {
  return selectedOption.forEach(function(radio) {
    radio.addEventListener('click', function(e) {
      // console.log(e);
      if (e.target.checked) {
        nextButton.removeAttribute("disabled")
      }
    })
  });
}
checkRadio();

function loadNextQuestion(e) {
  // the selectedoption is a new var to get the input on the html ui
  var option = document.querySelector("input[type=radio]:checked");
  // the if statement is to check if the any option is been selected or not
  // the var answer is going the store the total questions the user answer correctly by inreament it by 5
  var answer = option.value;

  if (questions[currentQuestion].answer == answer) {
    score += 1;
  }

  // the selectedoption is set to false not pick any option by default

  selectedOption.forEach(function(option) {
    option.checked = false;
    nextButton.disabled = true;
  });

  // currentQuestion++ is going to increament the question by one
  currentQuestion++;

  // if the currentQuestion is equal to totQuestions before the last question,  it will show you just finish the quiz on the submit button
  if (currentQuestion == totQuestions - 1) {
    nextButton.textContent = 'Last question';
  }
  if (currentQuestion == totQuestions) {
    // this is going to hide the container of the quiz and show the result container
    container.style.display = 'none';
    // this is going to display the result of the quiz
    resultCont.style.display = '';
    // this will populate the toatal score of the user up.
    resultCont.textContent = 'Your score is: ' + score;
    return;
  }
  loadQuestion(currentQuestion);
}
loadQuestion(currentQuestion);