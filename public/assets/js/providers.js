async function fetchData() {
    try {
        // Fetch data from the first API
        const response = await fetch('http://ashello-001-site1.ktempurl.com/api/Provider');
        const providers = await response.json();

        console.log(providers); // Log providers to check the data

        // Fetch data from the second API
        const response22 = await fetch('http://ashello-001-site1.ktempurl.com/api/services');
        const services = await response22.json();

        // Create a mapping from ServiceId to Service details
        const serviceMap = {};
        services.forEach(service => {
            serviceMap[service.ServiceId] = service;
        });

        // Create a mapping from ServiceId to the number of providers
        const providerCount = {};
        providers.forEach(provider => {
            if (!providerCount[provider.ServiceId]) {
                providerCount[provider.ServiceId] = 0;
            }
            providerCount[provider.ServiceId]++;
        });

        // Insert provider rows into the table
        const table = document.getElementById('myTable');
        providers.forEach(provider => {
            const newRow = table.insertRow();
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            const cell5 = newRow.insertCell(4);
            const cell6 = newRow.insertCell(5);

            cell1.innerHTML = provider.ProvicderId;
            cell2.innerHTML = provider.ProviderName;
            const service = serviceMap[provider.ServiceId];
            if (service) {
                cell3.innerHTML = service.ServiceName;
                cell4.innerHTML = service.ServiceNameAr;
            } else {
                cell3.innerHTML = 'Unknown';
                cell4.innerHTML = 'Unknown';
            }
            cell5.innerHTML = provider.Area;
            cell6.innerHTML = `<button class='removeprovider' data-providerid="${provider.ProvicderId}">Remove</button>`;
        });

        // Add event listeners to the remove buttons after they are created
        document.querySelectorAll('.removeprovider').forEach(button => {
            button.addEventListener('click', async () => {
                const providerId = button.dataset.providerid;
                console.log(providerId); // Log providerId to check its value
                const rowToRemove = button.closest('tr');
                if (rowToRemove) {
                    // Make an API call to delete the item from the server
                    try {
                        const response = await fetch(`http://ashello-001-site1.ktempurl.com/api/Provider/${providerId}`, {
                            method: 'DELETE',
                        });
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        console.log(`Provider ${providerId} deleted successfully.`);
                        // Remove from table
                        rowToRemove.remove();
                    } catch (error) {
                        console.error('Error deleting provider:', error);
                    }
                }
            });
        });

        // Display the count of providers for each service
        const countTable = document.getElementById('countTable');
        Object.keys(providerCount).forEach(serviceId => {
            const service = serviceMap[serviceId];
            const newRow = countTable.insertRow();
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);

            cell1.innerHTML = serviceId;
            cell2.innerHTML = service ? service.ServiceName : 'Unknown';
            cell3.innerHTML = providerCount[serviceId];
        });

    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// Call the fetchData function to load the data and set up the event listeners
fetchData();



