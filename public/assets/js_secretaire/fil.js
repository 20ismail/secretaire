const addGroupButtons = document.querySelectorAll('.add-group-container button'); // Select all buttons

const addGroupModal = document.getElementById('add-group-modal');
const confirmAddGroupButton = document.getElementById('confirm-add-group');
const cancelAddGroupButton = document.getElementById('cancel-add-group');
const groupList = document.getElementById('group-list');

// Loop through all buttons and add event listener to each
for (const button of addGroupButtons) {
  button.addEventListener('click', () => {
    addGroupModal.style.display = 'block'; // Show the modal
  });
}

cancelAddGroupButton.addEventListener('click', () => {
  addGroupModal.style.display = 'none'; // Hide the modal
});

const addGroupForm = document.getElementById('add-group-form');

addGroupForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission

  const groupNumber = document.getElementById('group-number').value;
  const studentCount = document.getElementById('student-count').value;

  // Add validation if needed (e.g., check if group number already exists)

  // Create a new table row for the new group
  const newRow = document.createElement('tr');

  const groupNumberCell = document.createElement('td');
  groupNumberCell.textContent = `Groupe ${groupNumber}`;
  newRow.appendChild(groupNumberCell);

  const studentCountCell = document.createElement('td');
  studentCountCell.textContent = studentCount;
  newRow.appendChild(studentCountCell);

  groupList.appendChild(newRow);

  // Clear the form fields
  addGroupForm.reset();

  addGroupModal.style.display = 'none'; // Hide the modal after adding
});
