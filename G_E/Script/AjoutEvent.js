let currentRow;

        document.getElementById('eventForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const eventTitle = document.getElementById('eventTitle').value;
            const eventDate = document.getElementById('eventDate').value;
            const eventDescription = document.getElementById('eventDescription').value;

            const table = document.getElementById('eventsTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            newRow.innerHTML = `
                <td>${eventTitle}</td>
                <td>${eventDate}</td>
                <td>${eventDescription}</td>
                <td>
                    <button class="btn-edit" onclick="editRow(this)">Éditer</button>
                    <button class="btn-delete" onclick="deleteRow(this)">Supprimer</button>
                </td>
            `;

            this.reset();
        });

        function editRow(button) {
            currentRow = button.closest('tr');
            const cells = currentRow.getElementsByTagName('td');
            document.getElementById('editEventTitle').value = cells[0].textContent;
            document.getElementById('editEventDate').value = cells[1].textContent;
            document.getElementById('editEventDescription').value = cells[2].textContent;
            document.getElementById('editRowIndex').value = Array.from(currentRow.parentNode.children).indexOf(currentRow);
            document.getElementById('editModal').style.display = 'flex'; // Show modal
        }

        function deleteRow(button) {
            const row = button.closest('tr');
            row.remove();
        }

        document.getElementById('editForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const eventTitle = document.getElementById('editEventTitle').value;
            const eventDate = document.getElementById('editEventDate').value;
            const eventDescription = document.getElementById('editEventDescription').value;

            const rowIndex = document.getElementById('editRowIndex').value;
            const table = document.getElementById('eventsTable').getElementsByTagName('tbody')[0];
            const row = table.rows[rowIndex];

            row.innerHTML = `
                <td>${eventTitle}</td>
                <td>${eventDate}</td>
                <td>${eventDescription}</td>
                <td>
                    <button class="btn-edit" onclick="editRow(this)">Éditer</button>
                    <button class="btn-delete" onclick="deleteRow(this)">Supprimer</button>
                </td>
            `;

            closeEditModal();
        });

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none'; // Hide modal
        }