// Get the current date
const currentDate = new Date();

// Create the calendar
const calendar = document.getElementById('calendar');

// Create the calendar header
const calendarHeader = document.createElement('h2');
calendarHeader.innerText = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });
calendar.appendChild(calendarHeader);

// Create the calendar table
const calendarTable = document.createElement('table');
calendar.appendChild(calendarTable);

// Create the calendar table header (days of the week)
const calendarTableHeader = document.createElement('thead');
calendarTable.appendChild(calendarTableHeader);

const calendarTableHeaderRow = document.createElement('tr');
calendarTableHeader.appendChild(calendarTableHeaderRow);

const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

daysOfWeek.forEach(dayOfWeek => {
  const calendarTableHeaderCell = document.createElement('th');
  calendarTableHeaderCell.innerText = dayOfWeek.substring(0, 2);
  calendarTableHeaderRow.appendChild(calendarTableHeaderCell);
});

// Create the calendar table body (days of the month)
const calendarTableBody = document.createElement('tbody');
calendarTable.appendChild(calendarTableBody);

// Get the number of days in the current month
const numberOfDaysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

// Get the day of the week that the first day of the month falls on
const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();

// Create the cells for each day of the month
let currentDayOfMonth = 1;

for (let i = 0; i < 6; i++) {
  const calendarTableRow = document.createElement('tr');
  calendarTableBody.appendChild(calendarTableRow);

  for (let j = 0; j < 7; j++) {
    const calendarTableCell = document.createElement('td');
    calendarTableRow.appendChild(calendarTableCell);

    if (i === 0 && j < firstDayOfMonth) {
      // Empty cell before the first day of the month
      continue;
    }

    if (currentDayOfMonth > numberOfDaysInMonth) {
      // Empty cell after the last day of the month
      continue;
    }

    calendarTableCell.innerText = currentDayOfMonth;

    if (currentDate.getFullYear() === new Date().getFullYear() &&
        currentDate.getMonth() === new Date().getMonth() &&
        currentDayOfMonth === new Date().getDate()) {
      // Today's date
      calendarTableCell.classList.add('today');
    }

    current