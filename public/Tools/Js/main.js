document.getElementById('callButton').onclick = function() {
  window.location.href = 'tel:+201067946524';
};

document.getElementById('callButton2').onclick = function() {
    window.location.href = 'tel:+201118549985';
  };
  const spans = document.querySelectorAll('.word span');

  spans.forEach((span, idx) => {
    span.addEventListener('click', (e) => {
      e.target.classList.add('active');
    });
    span.addEventListener('animationend', (e) => {
      e.target.classList.remove('active');
    });
    
    // Initial animation
    setTimeout(() => {
      span.classList.add('active');
    }, 750 * (idx+1))
  });

 // Burger menus
document.addEventListener('DOMContentLoaded', function() {
  // open
  const burger = document.querySelectorAll('.navbar-burger');
  const menu = document.querySelectorAll('.navbar-menu');

  if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }

  // close
  const close = document.querySelectorAll('.navbar-close');
  const backdrop = document.querySelectorAll('.navbar-backdrop');

  if (close.length) {
      for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }

  if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }
});



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
  })
  .catch(error => {
    console.error('Error:', error);
  });


// for services
const apiUrl2 = 'http://ashello-001-site1.ktempurl.com/api/services';

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
  }
  
  })
  .catch(error => {
    console.error('Error:', error);
  });  


// for users
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
  })
  .catch(error => {
    console.error('Error:', error);
  });
  

// for providers
const apiUrl4 = 'http://ashello-001-site1.ktempurl.com/api/serviceprovider/25';

fetch(apiUrl4)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log('providers', data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

//   function addList() {
//     var select = document.getElementById("job");
//     const response = await fetch('http://ashello-001-site1.ktempurl.com/api/services'); 

//     // for (var i = 2011; i >= 1900; --i) {
//     //     var option = document.createElement('option');
//     //     option.text = option.value = i;
//     //     select.add(option, 0);
//     // }

// }
