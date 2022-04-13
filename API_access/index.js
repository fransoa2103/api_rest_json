/***********************************
Test method FETCH from JavaScript
************************************/ 

"use strict";
const url = "https://fcb-test-api.herokuapp.com/?arrival=paris";
// const url = "https://fcb-test-api.herokuapp.com";

async function recupererPrix() {
  const requete = await fetch(url, {
    method: 'GET'
  });
  if(!requete.ok) {
    alert('Un problème est survenu.');
  } else {
    let donnees = await requete.json();
    console.log(donnees);
    document.querySelector('span').textContent = donnees.results.flights[0]['arrival'];
  }
}

// setInterval(recupererPrix, 1000);
recupererPrix();