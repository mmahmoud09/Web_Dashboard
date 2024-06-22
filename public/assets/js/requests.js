
async function fetchData() {
    try {
        const response = await fetch('http://ashello-001-site1.ktempurl.com/api/requestProvider');
        const data = await response.json();
        data.forEach(item => {

            if(item.IsResponse==true){
                const table = document.getElementById('myTable');
                const newRow = table.insertRow();
                const cell1 = newRow.insertCell(0);
                const cell2 = newRow.insertCell(1);
                const cell3 = newRow.insertCell(2);
                const cell4 = newRow.insertCell(3);
                const cell5 = newRow.insertCell(4);
                const cell6 = newRow.insertCell(5);
                cell1.innerHTML = item.ID;
                cell2.innerHTML = item.CustomerId;
                cell3.innerHTML = item.CustomerName;
                cell4.innerHTML = item.ProviderId;
                cell5.innerHTML = item.ProviderName;
                cell6.innerHTML = `${item.Cost}L.E`;
            }

            // cell4.innerHTML = item.ProviderId;

        });

    } catch (error) {
        console.error('Error fetching data:', error);
    }
}


fetchData();


