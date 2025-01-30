const toggleButton = document.querySelector('#toggleLanguage')
const toggleBox = document.querySelector('#languageBox')
let language = document.querySelector('input[name="language"]').value

// Set the language to the default value
document.querySelector('input[name="language"]').checked = true
toggleButton.innerHTML = language

toggleButton.addEventListener('click', () => {
     toggleBox.classList.replace('hidden', 'block')
})

const handleLanguageClose = (e) => {
     toggleBox.classList.replace('block', 'hidden')
}

toggleBox.addEventListener('click', (e) => {
     if (e.target == toggleBox) {
          handleLanguageClose()
     }
     if (!toggleBox.contains(e.target)) {
          handleLanguageClose()
     }
})

// Get all checkboxes with the name 'language'
const languageCheckboxes = document.querySelectorAll('input[name="language"]');

// Add an event listener to each checkbox
languageCheckboxes.forEach((checkbox) => {
     checkbox.addEventListener('change', (e) => {
          // Uncheck all other checkboxes when one is selected
          language = e.target.value
          toggleButton.innerHTML = language
          languageCheckboxes.forEach((cb) => {
               if (cb !== checkbox) {
                    cb.checked = false;
               }
          });
     });
});
