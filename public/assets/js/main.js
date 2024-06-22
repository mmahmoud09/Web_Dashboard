let t_users=document.querySelector('.users')
let t_services=document.querySelector('.services');
let t_requests=document.querySelector('.requests');
let t_providers=document.querySelector('.providers')
let t_sales=document.querySelector('.sales');
let t_requests2=document.querySelector('.requests2');
// for users
const apiUrl = 'http://ashello-001-site1.ktempurl.com/api/user';

fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log('users:', data.length);
    t_users.innerHTML=data.length;
  })
  .catch(error => {
    console.error('Error:', error);
  });

// for services
const apiUrl2 = 'http://ashello-001-site1.ktempurl.com/api/services';
let services_count=0;
fetch(apiUrl2)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    for (const obj of data) {
      console.log(obj.ServiceName);
      services_count+=1
  }
  t_services.innerHTML=services_count;
  })
  .catch(error => {
    console.error('Error:', error);
  });  


// for requests
const apiUrl3 = 'http://ashello-001-site1.ktempurl.com/api/requestProvider';

fetch(apiUrl3)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log("requsest:" ,data.length);
    t_requests.innerHTML=data.length;
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });


//for sales
  let sum_sales=0;
  fetch(apiUrl3)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log("requsest:" ,data);
    data.forEach((request) => {
      console.log(request.Cost); // Access the 'name' property
      // console.log(person.age);  // Access the 'age' property
      sum_sales+=request.Cost;
  });
    t_sales.innerHTML=sum_sales+"$";
  })
  .catch(error => {
    console.error('Error:', error);
  });
  
// for providers
const apiUrl4 = 'http://ashello-001-site1.ktempurl.com/api/Provider';

fetch(apiUrl4)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log('providers:', data.length);
    t_providers.innerHTML=data.length;
  })
  .catch(error => {
    console.error('Error:', error);
  });
