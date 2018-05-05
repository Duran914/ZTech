// Js functions for Z-Tech Web Design site

//Error varibles for forms
var fnameError = "Enter A First Name";
var lnameError = "Enter A Last Name";
var emailError = "Enter A Vaild Email Address";
var textaError = "Plase Enter A Message";
var selectError ="Choose A Reason";
var subscribe = "Thank You For Subscribing";


// Jquery for responsive menu
$(document).ready(function(){
  $('#menu').click(function(){
    $('ul').toggleClass('active');
    $('#menu').toggleClass('activeMenu');
  });
});

// X button on newsletter
$(document).ready(function(){
  $('#fa-x').click(function(){
    $('#newsBanner').remove();
  });
});

function subMessage(){
   var sub_email = document.forms["sub"]["email"].value;
   if ( sub_email !== "") {
     document.getElementById('newsBanner').remove();
     document.getElementById('subBanner').innerHTML = subscribe;
     document.getElementById('subBanner').style.padding = "20px";
     document.getElementById('emptyEmail').remove();
  }
  else{
    document.getElementById("emptyEmail").innerHTML = emailError;
    document.getElementById('emptyEmail').style.color = " #ff0000";
    return false;
   }
 }


//validates form input on services page
function quoteValidate(){
  var quote_fname = document.forms["quoteForm"]["fname"].value;
  if (quote_fname == "") {
    document.getElementById("fname_error").innerHTML = fnameError;
    document.getElementById('fname_error').style.color = " #ff0000";
  }

  var quote_lname = document.forms["quoteForm"]["lname"].value;
  if (quote_lname == "") {
    document.getElementById("lname_error").innerHTML = lnameError;
    document.getElementById('lname_error').style.color = " #ff0000";
  }

  var quote_email = document.forms["quoteForm"]["email"].value;
  if (quote_email == "") {
    document.getElementById("email_error").innerHTML = emailError;
    document.getElementById('email_error').style.color = " #ff0000";
  }

  var quote_texta = document.forms["quoteForm"]["texta"].value;
  if (quote_texta == "") {
    document.getElementById("texta_error").innerHTML = textaError;
    document.getElementById('texta_error').style.color = " #ff0000";
    return false;
  }

}

//validates form input on about us page
function contactValidate(){

  var contact_fname = document.forms["contactForm"]["fname"].value;
  if (contact_fname == "") {
    document.getElementById("fname_error").innerHTML = fnameError;
    document.getElementById('fname_error').style.color = " #ff0000";
  }
  var contact_lname = document.forms["contactForm"]["lname"].value;
  if (contact_lname == "") {
    document.getElementById("lname_error").innerHTML = lnameError;
    document.getElementById('lname_error').style.color = " #ff0000";
  }
  var contact_email = document.forms["contactForm"]["email"].value;
  if (contact_email == "") {
    document.getElementById("email_error").innerHTML = emailError;
    document.getElementById('email_error').style.color = " #ff0000";
  }
  var contact_texta = document.forms["contactForm"]["texta"].value;
  if (contact_texta == "") {
    document.getElementById("texta_error").innerHTML = textaError;
    document.getElementById('texta_error').style.color = " #ff0000";
    return false;
  }
}

//******** YELP CODE */
// yelp zipcode search input
const searchZipBtn = document.querySelector('#yelpForm');

searchZipBtn.addEventListener('submit', (e) => {
  // will migrate css in dedicated css file in actual project
  if (document.querySelector('#zipcode').value === '') {
   document.querySelector('#error').style.display = 'block';
    document.querySelector('#error').style.backgroundColor = 'red';
     document.querySelector('#error').style.width = '200px';
      document.querySelector('#error').style.padding = '5px';
       document.querySelector('#error').style.color = 'white';
        document.querySelector('#error').innerHTML = "Please enter a vaild city or zipcode";
  }else{
  document.querySelector('#error').style.display = "none";
   document.querySelector('#loading').style.display = 'block';
    document.querySelector('#results').innerHTML = '';
     queryBrewsResults();
  }
e.preventDefault();
});

function queryBrewsResults(e) {
const zipCode = document.querySelector('#zipcode').value;
const radius = document.querySelector('input[name="mi"]:checked').value * 1609.344; //convert meters to miles
 let xhttp = new XMLHttpRequest;
  xhttp.open("GET", `https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search?categories=breweries&limit=20&location=${zipCode}&distance=${radius}`, true)
   xhttp.setRequestHeader("Authorization", "Bearer " + yelpApiKey);
    xhttp.onreadystatechange = function(){
      if(this.readyState === 4 && this.status === 200){
        const data = JSON.parse(this.responseText);
        let brews = data.businesses;
        let output = '';
          for (let i = 0; i < brews.length; i++) {
            output += `<div class="searchedReturn">
            <img class="yelpImg" src='${brews[i].image_url}'><br>
            <strong>Brewery Name:</strong> <i class="fas fa-beer"></i> ${brews[i].name}<br>
            <strong>Location:</strong> <i class="fas fa-map-marker"></i> ${brews[i].location.address1}, 
            ${brews[i].location.city} ${brews[i].location.state}<br>
            <strong>Phone Number:</strong> <i class="fas fa-phone"></i> ${brews[i].phone}<br>
            <strong>Price Range:</strong> <i class="far fa-credit-card"></i> ${brews[i].price}<br>
            <strong>Rating:</strong> <i class="fas fa-star"></i> ${brews[i].rating}/5<br>
            <strong>View on Yelp:</strong> <i class="fas fa-yelp"></i> <a href="${brews[i].url}">Click Me</a><br>
            </div><br>
            `;
          }
       document.querySelector('#error').style.display = 'none';
       document.querySelector('#loading').style.display = 'none';
       document.querySelector('#results').innerHTML = output;
      clearFields(zipCode);
       }
       else {
        document.querySelector('#error').style.display = "block";
        document.querySelector('#error').innerHTML = "No brewery found!";
        document.querySelector('#loading').style.display = 'none';
       }  
    }
    xhttp.send();
  }

  clearFields = (zipCode) => {
    zipCode = '';
  }