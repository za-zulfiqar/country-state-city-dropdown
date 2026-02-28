function getStates(country_id) {
    fetch("get_states.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "country_id=" + country_id
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("state").innerHTML = data;
        document.getElementById("city").innerHTML = "<option>Select City</option>";
        document.getElementById("postal").innerHTML = "<option>Select Postal Code</option>";
    });
}

function getCities(state_id) {
    fetch("get_cities.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "state_id=" + state_id
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("city").innerHTML = data;
        document.getElementById("postal").innerHTML = "<option>Select Postal Code</option>";
    });
}

function getPostal(city_id) {
    fetch("get_postal.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "city_id=" + city_id
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("postal").innerHTML = data;
    });
}