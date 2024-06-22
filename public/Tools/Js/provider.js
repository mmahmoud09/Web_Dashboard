const batchTrack = document.getElementById("batchSelect");

        async function getBatchData() {
            try {
                const response = await fetch("http://ashello-001-site1.ktempurl.com/api/services");
                const data = await response.json();

                data.forEach((batch) => {
                    const newOption = document.createElement("option");
                    newOption.value = batch.ServiceNameAr; 
                    newOption.text = batch.ServiceNameAr;
                    batchTrack.appendChild(newOption);
                    console.log(newOption);
                });
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        }

        getBatchData();