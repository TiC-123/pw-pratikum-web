const kategori = [
    ["Sosial", 10000, 300, 0],
    ["Rumah", 30000, 500, 10],
    ["Apartemen", 50000, 750, 15],
    ["Industri", 75000, 1000, 20],
    ["Villa", 100000, 1250, 25]
];

function showKategori(category) {
    var text = "<tr>" + 
                    "<th>Kategori</th>" +
                    "<th>Abodemen</th>" +
                    "<th>Tarif per-KWH</th>" +
                    "<th>Pajak</th>" +
               "</tr>";
    
    for (let i = 0; i < category.length; i++) {
        text += "<tr>";

        for (let j = 0; j < category[0].length; j++) {
            text += "<td>";

            if (j == category[0].length - 1)
                text += category[i][j] + "%";
            else 
                text += category[i][j];

            text += "</td>";
        }

        text += "</tr>";
    }

    document.getElementById("kategori-table").innerHTML = text;
}

function resultInitial() {
    document.getElementById("tagihan").innerHTML = "";
    document.getElementById("rincian").innerHTML = "";
}

function checkRequest() {
    var nama = document.getElementById("nama").value, arr;
    var kat = document.getElementById("kategori").value;
    var pemakaian = document.getElementById("pemakaian").value;

    if(nama == "") {
        alert("fields Nama Pelanggan harus diisi!");
        resultInitial();
    } else if(kat == "Pilih Kategori") {
        alert("fields Kategori harus diisi!");
        resultInitial();
    } else if(pemakaian == "") {
        alert("fields Jumlah pemakaian harus diisi!");
        resultInitial();
    } else if(pemakaian > 30 || pemakaian == 0) {
        alert("Jumlah hari tidak valid");
        resultInitial();
    } else {
        arr = [
            ['Nama Pelanggan', nama],
            ['Kategori', kat],
            ['Jumlah pemakaian', pemakaian]
        ]

        alert("permintaan anda diterima!");
        showRequest(arr);
    }
}

function showRequest(arr) {
    var text = "";

    document.getElementById("tagihan").style.visibility = "visible";
    document.getElementById("tagihan").innerHTML = "<h1 style='margin-bottom: 1%;'>TAGIHAN LISTRIK</h1>" +
                                                   "<table id='request-table' class='request'></table>";

    for(let i = 0; i < arr.length; i++) {
        text += "<tr style='background-color: white;'>" +
                    "<td>" + arr[i][0] + "</td>" +
                    "<td style='text-align: left;'>:" + arr[i][1] + "</td>" +
                "</tr>";
    }

    document.getElementById("request-table").innerHTML = text;

    showRincian(arr[1][1], arr[2][1]);
}

function showRincian(kat, pemakaian) {
    document.getElementById("rincian").innerHTML = 
        "<h1 style='margin-bottom: 2%;'>Rincian Tagihan</h1>" +
        "<table id='rincian-table' cellspacing='0' style='margin-bottom: 10%; margin-left: auto; margin-right: auto;'></table>";
    
    var abodemen, kwh, pajak, temp, subtotal, arr; 
    var style = "<td class='no-border'>";
    var text = "<tr>" +
                    "<th class='no-border'>Jumlah</td>" + 
                    "<th class='no-border'>Tarif per KWH</td>" + 
                    "<th class='no-border'>Abodemen</td>" + 
                    "<th class='no-border'>SubTotal</td>" + 
                "</tr>";

    for(let i = 0; i < kategori.length; i++) {
        if(kategori[i][0] == kat) {
            abodemen = kategori[i][1];
            kwh = kategori[i][2];
            pajak = kategori[i][3];
            break;
        }
    }

    temp = kwh;
    subtotal = kwh + abodemen;

    for(let i = 0; i < pemakaian; i++) {
        if(i == pemakaian - 1)
            style = "<td class='bottom-border'>";
        
        text += "<tr>" +
                    style + (i + 1) + "</td>" +
                    style + temp + "</td>" +
                    style + abodemen + "</td>" +
                    style + subtotal + "</td>" +
                "</tr>";
        
        if(i < pemakaian - 1) {
            temp += kwh;
            subtotal += kwh;
        }
    }

    style = "<td class='no-border'>";
    pajak = subtotal / 100 * pajak;
    arr = [
        ['Subtotal', subtotal],
        ['Pajak', pajak],
        ['Bayar', subtotal + pajak]
    ];

    for(let i = 0; i < arr.length; i++) {
        text += "<tr>" +
                    style + arr[i][0] + "</td>" +
                    style + "</td>" +
                    style + "</td>" +
                    style + arr[i][1] + "</td>" +
                "</tr>";
    }

    document.getElementById("rincian-table").innerHTML += text;
}