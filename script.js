

// Function to toggle the display of the baptism date field
function toggleBaptismDate() {
    var baptismDate = document.getElementById('baptism-date');
    var baptismDateLabel = document.getElementById('baptism-date-label');
    if (document.getElementById('baptised').checked) {
        baptismDate.style.display = 'block';
        baptismDateLabel.style.display = 'block';
    } else {
        baptismDate.style.display = 'none';
        baptismDateLabel.style.display = 'none';
    }
}
// Function to filter members based on search query
function filterMembers(query) {
    return fetchMembers().filter(member =>
        member.name.toLowerCase().includes(query.toLowerCase()) ||
        member.email.toLowerCase().includes(query.toLowerCase()) ||
        member.titheNumber.toLowerCase().includes(query.toLowerCase())
    );
}

// Function to perform search and populate member table
function searchMembers(query) {
    const tableBody = document.getElementById('member-table-body');
    const filteredMembers = filterMembers(query);

    tableBody.innerHTML = ''; // Clear existing table rows

    if (filteredMembers.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="15">No matching members found.</td></tr>';
        return;
    }

    filteredMembers.forEach(member => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${member.name}</td>
            <td>${member.dob}</td>
            <td>${member.gender}</td>
            <td>${member.address}</td>
            <td>${member.email}</td>
            <td>${member.contact}</td>
            <td>${member.registryDate}</td>
            <td>${member.ministry}</td>
            <td>${member.department}</td>
            <td>${member.titheNumber}</td>
            <td>${member.baptised}</td>
            <td>${member.baptismDate}</td>
            <td>${member.spouseName}</td>
            <td>${member.childrenNumber}</td>
            <td>${member.emergencyContact}</td>
        `;
        tableBody.appendChild(row);
    });
}

// Event listener for search button
document.getElementById('search-button').addEventListener('click', function(event) {
    const searchQuery = document.querySelector('.search input').value.trim();
    searchMembers(searchQuery);
});

// Event listener for search input (for real-time search)
document.querySelector('.search input').addEventListener('input', function(event) {
    const searchQuery = event.target.value.trim();
    searchMembers(searchQuery);
});
/*
// Function to initialize pagination
function initializePagination(members) {
    const totalPages = Math.ceil(members.length / 10); // Calculate total pages
    let currentPage = 1; // Initialize current page

    // Display members for the current page
    displayMembersForPage(members, currentPage, totalPages);

    // Update page number display
    document.getElementById('page-num').textContent = Page ${currentPage} of ${totalPages};

    // Event listener for previous page button
    document.getElementById('prev-page').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            displayMembersForPage(members, currentPage, totalPages);
            document.getElementById('page-num').textContent = Page ${currentPage} of ${totalPages};
        }
    });

    // Event listener for next page button
    document.getElementById('next-page').addEventListener('click', function() {
        if (currentPage < totalPages) {
            currentPage++;
            displayMembersForPage(members, currentPage, totalPages);
            document.getElementById('page-num').textContent = Page ${currentPage} of ${totalPages};
        }
    });
}

// Function to display members for the current page
function displayMembersForPage(members, page, totalPages) {
    const startIndex = (page - 1) * 10;
    const endIndex = Math.min(startIndex + 10, members.length); // Ensure endIndex does not exceed array length

    // Clear existing table rows
    const tableBody = document.getElementById('member-table-body');
    tableBody.innerHTML = '';

    // Populate table with members for the current page
    for (let i = startIndex; i < endIndex; i++) {
        const member = members[i];
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${member.name}</td>
            <td>${member.dob}</td>
            <td>${member.gender}</td>
            <td>${member.address}</td>
            <td>${member.email}</td>
            <td>${member.contact}</td>
            <td>${member.registryDate}</td>
            <td>${member.ministry}</td>
            <td>${member.department}</td>
            <td>${member.titheNumber}</td>
            <td>${member.baptised}</td>
            <td>${member.baptismDate}</td>
            <td>${member.spouseName}</td>
            <td>${member.childrenNumber}</td>
            <td>${member.emergencyContact}</td>
        `;
        tableBody.appendChild(row);
    }

    // Hide/show pagination buttons based on current page
    document.getElementById('prev-page').style.display = (page === 1) ? 'none' : 'block';
    document.getElementById('next-page').style.display = (page === totalPages) ? 'none' : 'block';
}
 */
// Add this JavaScript code to your existing script.js file or include it in a separate file

// Function to display notifications
/*
function showNotification(message, type = 'info') {
    const notificationContainer = document.getElementById('notification-container');
    const notification = document.createElement('div');
    notification.classList.add('notification', notification-$,{type});
    notification.textContent = message;
    notificationContainer.appendChild(notification);
    
    // Remove notification after a certain time (e.g., 5 seconds)
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

// Example usage:
// Call the showNotification function whenever you want to display a notification
// For example, after adding a member:


 */