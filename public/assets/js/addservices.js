// Assuming you have already retrieved the input elements
const serviceNameArabicInput = document.getElementById('mr1');
const serviceNameEnglishInput = document.getElementById('mr2');
const imageInput = document.getElementById('imageInput');

// Listen for input changes
// serviceNameArabicInput.addEventListener('input', sendData);
// serviceNameEnglishInput.addEventListener('input', sendData);
// imageInput.addEventListener('change', sendData);
const btn=document.querySelector("#submitButton");
btn.addEventListener("click",sendData);
function sendData(event) {
    event.preventDefault();
    const serviceNameArabic = serviceNameArabicInput.value;
    const serviceNameEnglish = serviceNameEnglishInput.value;
    const selectedImage = imageInput.files[0];

    const formData = new FormData();
    formData.append('ServiceName', serviceNameEnglish);
    formData.append('ServiceNameAr', serviceNameArabic);
    formData.append('ServiceIcon', selectedImage);

    const apiUrl = 'http://ashello-001-site1.ktempurl.com/api/services';

    fetch(apiUrl, {
        method: 'POST',
        body: formData,
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Data sent successfully:', data);
            // Handle any further actions (e.g., display success message)
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle error (e.g., display error message)
        });
}
