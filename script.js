foodType(null);

function foodType(type) {
    $.getJSON('data.json', function (data) {
        let menu = data.menu;

        if (type) {
            menu = menu.filter(function (value) {
                return value.jenis === type; 
            });
        }

        console.log(menu);

        $('#food-list').empty().append(
            menu.map(function (food) {
                return `<div class="position">
                            <div class="card">
                                <img src="image/${food.gambar}" alt="" style="width:110%; height:250px; margin-left: -21px; border: black solid 0.5px;">
                                <h1>${food.nama}</h1>
                                <p>${food.deskripsi}</p>
                                <p>Rp ${food.harga},00
                                    <span>${food.estimasi}</span>
                                </p>
                                <p>
                                    <a class="button">Pesan Sekarang</a>
                                </p>
                            </div>
                        </div>`;
            })
        );
    });
} 