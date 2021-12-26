var province = {
    "DKI Jakarta" : ["Kepulauan Seribu", "Jakarta Barat", "Jakarta Utara", "Jakarta Pusat", "Jakarta Selatan", "Jakarta Timur"],
    "Sumatra Utara" : ["Kabupaten Asahan", "Kabupaten Batu Bara", "Kabupaten Dairi", "Kabupaten Karo", "Kabupaten Labuhanbatu", "Kabupaten Nias"],
    "Kalimantan Barat" : ["Kabupaten Sintang", "Kabupaten Mempawah", "Kabupaten Landak", "Kabupaten Ketapang", "Singkawang", "Pontianak"],
    "Bali" : ["Kabupaten Badung", "Kabupaten Gianyar", "Kabupaten Jembrana", "Kabupaten Karangasem", "Kabupaten Tabanan", "Denpasar"],
    "Sulawesi Selatan" : ["Kabupaten Bone", "Kabupaten Gowa", "Kabupaten Luwu", "Makassar", "Palopo", "Parepare"],
    "Maluku" : ["Kabupaten Buru", "Kabupaten Maluku Tengah", "Kabupaten Kepulauan Aru", "Kabupaten Seram", "Ambon", "Tual"]
}

function showCity() {
    var input = document.getElementById("province").value;
    var city = province[input];
    var isi, text;
    const output = document.getElementById("city");

    output.innerHTML = "<option value='' disable selected hidden>Choose a City</option>";

    for(i = 0; i < city.length; i++) {
        isi = document.createElement("option");
        isi.value = city[i];
        text = document.createTextNode(city[i]);
        isi.appendChild(text);
        output.appendChild(isi);
    }
}

function showText() {
    var province = document.getElementById("province").value;
    var city = document.getElementById("city").value;
    var output = document.getElementsByTagName("h1");

    output[0].innerHTML = "Pada provinsi " + province + " ada kota " + city;
}

function changeMode() {
    var button = document.getElementsByTagName("button");
    var html = document.getElementsByTagName("html");
    var h1 = document.getElementsByTagName("h1");
    var footer = document.getElementsByClassName("copyrights");
    var header = document.getElementsByTagName("header");

    if(button[0].value == "dark") {
        html[0].style.backgroundImage = "url('dark.jpg')";
        h1[0].style.backgroundImage = "url('dark-city.jpg')";
        footer[0].style.backgroundColor = "rgba(62, 62, 62, 1)";
        footer[0].style.color = "rgba(200, 200, 200, 1)";
        header[0].style.backgroundColor = "rgba(247, 248, 249, 1)";
        button[0].value = "light";
        button[0].innerHTML = "Light Mode";
    } else {
        html[0].style.backgroundImage = "url('light.jpg')";
        h1[0].style.backgroundImage = "url('light-city.jpg')";
        footer[0].style.backgroundColor = "#34e5eb";
        footer[0].style.color = "black";
        header[0].style.backgroundColor = "#70b3b3";
        button[0].value = "dark";
        button[0].innerHTML = "Dark Mode";
    }
}