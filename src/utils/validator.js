document.addEventListener("DOMContentLoaded", function () {
  var passwordInput = document.getElementById("password");
  var confirmPasswordInput = document.getElementById("confirm-password");
  var firstNameInput = document.getElementById("first-name");
  var lastNameInput = document.getElementById("last-name");
  var cityInput = document.getElementById("city");
  var phoneNumberInput = document.getElementById("phone-number");

  passwordInput.addEventListener("input", validatePasswordLength);
  confirmPasswordInput.addEventListener("input", validatePasswordMatch);
  firstNameInput.addEventListener("input", validateAlphabeticWithSpaces);
  lastNameInput.addEventListener("input", validateAlphabeticWithSpaces);
  cityInput.addEventListener("input", validateAlphabeticWithSpaces);
  phoneNumberInput.addEventListener("input", validatePhoneNumber);

  function validatePasswordLength() {
      var password = passwordInput.value;
      var passwordLengthMessage = document.getElementById("password-length-message");

      if (password.length >= 8) {
          passwordInput.setCustomValidity("");
          passwordLengthMessage.style.display = "none";
      } else {
          passwordInput.setCustomValidity("Password must be at least 8 characters");
          passwordLengthMessage.style.display = "block";
      }
  }

  function validatePasswordMatch() {
      var password = passwordInput.value;
      var confirmPassword = confirmPasswordInput.value;
      var confirmPasswordMessage = document.getElementById("confirm-password-message");

      if (password == confirmPassword) {
          confirmPasswordInput.setCustomValidity("");
          confirmPasswordMessage.style.display = "none";
      } else {
          confirmPasswordInput.setCustomValidity("Passwords must match");
          confirmPasswordMessage.style.display = "block";
      }
  }

  function validateAlphabeticWithSpaces() {
      var input = this.value;
      var errorMessage = "";
      var isValid = /^[A-Za-z\s]+$/.test(input);

      if (!isValid) {
          errorMessage = "Please enter alphabetic characters only";
      }

      this.setCustomValidity(errorMessage);
  }

  function validatePhoneNumber() {
      var phoneNumber = phoneNumberInput.value;
      var errorMessage = "";
      var isValid = /^\+251\d{9}$/.test(phoneNumber);

      if (!isValid) {
          errorMessage = "Please enter a valid Ethiopian phone number with country code (+251) and 9 digits";
      }

      this.setCustomValidity(errorMessage);
  }

  var form = document.getElementById("signup-form");

  form.addEventListener("submit", function (event) {
      if (!form.checkValidity()) {
          event.preventDefault(); // Prevent form submission if there are validation errors
      }
  });
});
