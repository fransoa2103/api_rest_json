/***********************************
Test method FETCH from JavaScript
************************************/ 

"use strict";

const url = "https://fcb-test-api.herokuapp.com/?arrival=paris";

async function findFlightByArrival()
{
    const req = await fetch(url, {
        method: 'GET'
    });

    if(!req.ok) {
        alert('connexion failure!');
    }
    else {
        let data = await req.json();
        console.log(data);
    }
}

findFlightByArrival();