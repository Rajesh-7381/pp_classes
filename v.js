// Get the gender radio buttons and error message element
var genderRadios = document.getElementsByName('gender');
var genderError = document.getElementById('genderError');

// Get the board select element and error message element
var boardSelect = document.getElementById('board');
var boardError = document.getElementById('boardError');

// Get the grade select element and error message element
var gradeSelect = document.getElementById('standard');
var gradeError = document.getElementById('gradeError');

// Function to validate the gender input
function validateGender() {
    // Loop through the gender radio buttons and check if any is selected
    for (var i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            // Gender is selected, clear the error message and return true
            genderError.textContent = '';
            return true;
        }
    }
    // No gender is selected, display the error message and return false
    genderError.textContent = 'Please select a gender.';
    return false;
}

// Function to validate the board input
function validateBoard() {
    // Check if a board is selected
    if (boardSelect.value !== 'not selected') {
        // Board is selected, clear the error message and return true
        boardError.textContent = '';
        return true;
    }
    // No board is selected, display the error message and return false
    boardError.textContent = 'Please select a board.';
    return false;
}

// Function to validate the grade input
function validateGrade() {
    // Check if a grade is selected
    if (gradeSelect.value !== 'not selected') {
        // Grade is selected, clear the error message and return true
        gradeError.textContent = '';
        return true;
    }
    // No grade is selected, display the error message and return false
    gradeError.textContent = 'Please select a grade.';
    return false;
}

// Function to validate the entire form
function validateFORM() {
    // Call the individual validation functions for each field
    var isGenderValid = validateGender();
    var isBoardValid = validateBoard();
    var isGradeValid = validateGrade();

    // Return true if all fields are valid, otherwise return false
    return isGenderValid && isBoardValid && isGradeValid;
}
