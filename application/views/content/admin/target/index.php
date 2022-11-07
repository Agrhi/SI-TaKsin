<section class="section">
    <div class="card">
        <div class="card-header">
            <?= $title; ?>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="mb-2 float-end">
                    <button type="button" class="btn btn-outline-primary">Lihat Rute</button>
                </div>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.393186123835!2d119.89150501371655!3d-0.8364268355342543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8be942bc0a6703%3A0xf8a9048c767a7489!2sUniversitas%20Tadulako!5e0!3m2!1sid!2sid!4v1663284583327!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <div id="mapid" style="width: 100%; height: 450px"></div>
            </div>
        </div>
    </div>

</section>

<script>
    var mymap = L.map("mapid").setView([-0.8362023, 119.8839144], 12);

    L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw", {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: "mapbox/streets-v11",
            tileSize: 512,
            zoomOffset: -1,
        }
    ).addTo(mymap);
    <?php
        foreach ($penduduk as $show) {
    ?>
        L.marker([<?= $show->latitude ?>, <?= $show->longitude ?>], { title: '<?= $show->nama; ?>', alt: '<?= $show->nama; ?>'}).addTo(mymap);
    <?php
        }
    ?>
</script>