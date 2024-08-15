let currentRow;

document.getElementById('feesForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const studentName = document.getElementById('studentName').value;
    const amount = document.getElementById('amount').value;
    const descri = document.getElementById('Description').value;
    const paymentDate = document.getElementById('paymentDate').value;

    const table = document.getElementById('feesTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
    newRow.innerHTML = `
        <td>${studentName}</td>
        <td>${amount}€</td>
        <td>${descri}</td>
        <td>${paymentDate}</td>

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
    document.getElementById('editStudentName').value = cells[0].textContent;
    document.getElementById('editAmount').value = cells[1].textContent.replace('Ar', '');
    document.getElementById('editDescription').value = cells[2].textContent;
    document.getElementById('editPaymentDate').value = cells[2].textContent;
    document.getElementById('editRowIndex').value = Array.from(currentRow.parentNode.children).indexOf(currentRow);
    document.getElementById('editModal').style.display = 'flex'; 
}

function deleteRow(button) {
    const row = button.closest('tr');
    row.remove();
}

document.getElementById('editForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const studentName = document.getElementById('editStudentName').value;
    const amount = document.getElementById('editAmount').value;
    const descri = document.getElementById('editDescription').value;
    const paymentDate = document.getElementById('editPaymentDate').value;

    const rowIndex = document.getElementById('editRowIndex').value;
    const table = document.getElementById('feesTable').getElementsByTagName('tbody')[0];
    const row = table.rows[rowIndex];

    row.innerHTML = `
        <td>${studentName}</td>
        <td>${amount}Ar</td>
        <td>${descri}</td>
        <td>${paymentDate}</td>
        <td>
            <button class="btn-edit" onclick="editRow(this)">Éditer</button>
            <button class="btn-delete" onclick="deleteRow(this)">Supprimer</button>
        </td>
    `;

    closeEditModal();
});

function closeEditModal() {
    document.getElementById('editModal').style.display = 'none'; 
}