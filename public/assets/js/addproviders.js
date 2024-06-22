// async function fetchData() {
//     try {
//         const response = await fetch('http://ashello-001-site1.ktempurl.com/api/Provider');
//         const data = await response.json();
//         data.forEach(item => {
//             const table = document.getElementById('myTable');
//             const newRow = table.insertRow();
//             const cell1 = newRow.insertCell(0);
//             const cell2 = newRow.insertCell(1);
//             const cell3 = newRow.insertCell(2);
//             const cell4 = newRow.insertCell(3);
//             const cell5 = newRow.insertCell(4);
//             const cell6 = newRow.insertCell(5);
//             const cell7 = newRow.insertCell(6);
//             const cell8 = newRow.insertCell(7);
//             cell1.innerHTML = item.ProvicderId;
//             cell2.innerHTML = item.ProviderName;
//             cell3.innerHTML = item.ServiceName;
//             cell4.innerHTML = item.ServiceNameAr;
//             cell5.innerHTML = item.Area;
//             cell6.innerHTML = item.Area
//             cell7.innerHTML = item.Area;
//             cell8.innerHTML = "<a href='removeprovider' class='removeprovider'>confirm</a> <a href='removeprovider' class='removeprovider'>cancel</a>"

//         });
//         //
//     } catch (error) {
//         console.error('Error fetching data:', error);
//     }
// }


// fetchData();
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("thumbnail");
var modalImg = document.getElementById("img01");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Also close the modal when clicking outside the image
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// async function fetchData() {
//     try {
//         const response = await fetch('http://ashello-001-site1.ktempurl.com/api/Provider');
//         const data = await response.json();
//         data.forEach(item => {
//             const table = document.getElementById('myTable');
//             const newRow = table.insertRow();
//             const cell1 = newRow.insertCell(0);
//             const cell2 = newRow.insertCell(1);
//             const cell3 = newRow.insertCell(2);
//             const cell4 = newRow.insertCell(3);
//             const cell5 = newRow.insertCell(4);
//             const cell6 = newRow.insertCell(5);
//             const cell7 = newRow.insertCell(6);
//             const cell8 = newRow.insertCell(7);
//             cell1.innerHTML = item.ProviderId;
//             cell2.innerHTML = item.ProviderName;
//             cell3.innerHTML = item.ServiceName;
//             cell4.innerHTML = item.ServiceNameAr;
//             cell5.innerHTML = item.Area;
//             cell6.innerHTML = item.Area;
//             cell7.innerHTML = item.Area;
//             cell8.innerHTML = "<a href='removeprovider' class='removeprovider confirm'>confirm</a> <a href='removeprovider' class='removeprovider cancel'>cancel</a>"
//         });
//     } catch (error) {
//         console.error('Error fetching data:', error);
//     }
// }
//
// fetchData();

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("thumbnail");
var modalImg = document.getElementById("img01");

img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Also close the modal when clicking outside the image
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.confirm').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const id = row.cells[0].textContent;
            const ProviderName = row.cells[1].textContent;
            const address = row.cells[2].textContent;
            const jobTitle = row.cells[5].textContent;
            const imageUrl = row.cells[6].textContent;

            const data = {
                ProviderId: id,
                ProviderName: ProviderName,
                Description: "مهارات فنية متقدمة في تركيب وصيانة الأنظمة الكهربائية",
                Lat: 26.5609,
                Long: 31.7441,
                ImageName: "https://t3.ftcdn.net/jpg/04/91/72/14/360_F_491721409_XsNIt0w3QTCLh9qIXvVP0p7lyuUDPeBI.jpg",
                Rating: 2,
                Area: address,
                ratting: 2.75,
                ServiceId: getServiceId(jobTitle)
            };

            const apiUrl = 'http://ashello-001-site1.ktempurl.com/api/Provider';

            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(responseData => {
                    console.log('Data sent successfully:', responseData);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
});

function getServiceId(jobTitle) {
    switch (jobTitle) {
        case "كهربائي":
            return 1;
        case "سباك":
            return 2;
        case "نجار":
            return 3;
        case "نقاش":
            return 4;
        case "سيراميك":
            return 5;
        case "حداد":
            return 6;
        case "باركية":
            return 7;
        case "تكييف":
            return 8;
        case "خياط":
            return 9;
        case "تنظيف":
            return 10;
        default:
            return null;
    }
}
