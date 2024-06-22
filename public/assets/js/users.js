
async function fetchData() {
    try {
        const response = await fetch('http://ashello-001-site1.ktempurl.com/api/user'); 
        const data = await response.json();
        data.forEach(item => {
            const table = document.getElementById('myTable');
            const newRow = table.insertRow();
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);

            cell1.innerHTML = item.CustomerId;
            cell2.innerHTML = item.CustomerPhone || '01585884852';
            cell3.innerHTML = item.CustomerName;
            cell4.innerHTML = item.CustomerEmail || 'nada555@gmail.com';
        });
        
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}


fetchData();


