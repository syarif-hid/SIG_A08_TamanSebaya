<div>
    <br><br>

    <p>Web Sistem Informasi Geografis Taman se-Surabaya merupakan
        aplikasi Informasi letak geografis taman kota di Surabaya. Terdapat 3 layout berbeda, diantaranya ;
    </p>
    <div class="col-lg-4">
        <div class="panel panel-primary text-center  no-boder" style="background-image:url('<?= base_url() ?>/template/assets/img/poi.jpg')">
            <br><br><br><br><br><br><br><br><br>
            <div class="panel-footer " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <a href="<?= base_url('home/taman') ?>" class="panel-eyecandy-title">Point Taman

                </a>
            </div>
        </div>

    </div>


    <div class="col-lg-4">
        <div class="panel panel-primary text-center  no-boder" style="background-image:url('<?= base_url() ?>/template/assets/img/rut.jpg')">
            <br><br><br><br><br><br><br><br><br>
            <div class="panel-footer " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <a href="<?= base_url('home/rute') ?>" class="panel-eyecandy-title">Rute Taman

                </a>
            </div>
        </div>

    </div>




    <div class="col-lg-4">
        <div class="panel panel-primary text-center  no-boder" style="background-image:url('<?= base_url() ?>/template/assets/img/pol.jpg')">
            <br><br><br><br><br><br><br><br><br>
            <div class="panel-footer " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <a href="<?= base_url('home/polygon') ?>" class="panel-eyecandy-title">Polygon Taman

                </a>
            </div>
        </div>



    </div>
</div>

<p>Layout Keseluruhan (Titik, Polygon dan Rute) :
</p>
</div>
<div id="map" style="height: 1000px;"></div>


    <script>
        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        });

        var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/satellite-v9'
        });


        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
        });




        var map = L.map('map', {
            center: [-7.2725946615463615, 112.74438325483835],
            zoom: 14,
            layers: [peta1]
        });

        var baseMaps = {
            "Light": peta1,
            "Satelite": peta2,
            "Streets": peta3,
            "Dark": peta4,
        };

        L.control.layers(baseMaps).addTo(map);


        L.Routing.control({
            waypoints: [
                <?php foreach ($taman as $key => $value) { ?>
                    L.latLng(<?= $value->latitude ?>, <?= $value->longitude ?>),
                <?php } ?>
                // L.latLng(-7.3098004, 112.7268992),
                 L.latLng(-7.3002958376499265, 112.67292536138672)
            ],
            routeWhileDragging: true
        }).addTo(map);



        var polygon = L.polygon([
            [-7.2769897151484395, 112.74581013366192],
            [-7.276598357520351, 112.74655885401747],
            [-7.276500518060001, 112.74612621021919],
            [-7.276784478172732, 112.74532391960233],
            [-7.276876214914946, 112.74563333338745],
            [-7.276920384450808, 112.74571439751566]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Persahabatan</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.312422952190555, 112.7890951471712],
            [-7.312448237168023, 112.78879481589378],
            [-7.311903980103073, 112.78870764683045],
            [-7.31188012483426, 112.78899878868346]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Kebun Bibit Wonorejo  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.272973595425363, 112.74416889106347],
            [-7.273213495845295, 112.74403147838723],
            [-7.273884125884517, 112.74366870892203],
            [-7.273941374743897, 112.74382535937292],
            [-7.273371611961062, 112.74408094695067],
            [-7.2729463340058995, 112.74430080723262],
            [-7.2726382798508915, 112.74447119895112],
            [-7.2725946615463615, 112.74438325483835]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Keputran   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.282804963483621, 112.73707164354904],
            [-7.282941211616253, 112.73669162454021],
            [-7.28312968813308, 112.73615364581117],
            [-7.283236415763178, 112.7359064045283],
            [-7.283413538157055, 112.73561337782269],
            [-7.283536161311975, 112.73569579158674],
            [-7.283527078116466, 112.73580109805907],
            [-7.283402184159698, 112.73608954622242],
            [-7.283181916551129, 112.73648330085808],
            [-7.28290487878671, 112.73702585811768],
            [-7.282700506555692, 112.73742648056677]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Korea  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.266133260111406, 112.75100004976507],
            [-7.265798887404532, 112.75098038040805],
            [-7.265076866481311, 112.75086766640487],
            [-7.2658628414942035, 112.7508598333989],
            [-7.266190496178392, 112.75082492050807],
            [-7.266253280650516, 112.75094650923853]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Kota Sungai   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.299695983444053, 112.73092135829012],
            [-7.300074770678911, 112.73042770530043],
            [-7.300247996441613, 112.73019717866843],
            [-7.300291880290843, 112.73022279273866],
            [-7.29969367376481, 112.73170840881144],
            [-7.29936569919089, 112.73137775445039]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Ronggolawe   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.329371781988676, 112.69108654817974],
            [-7.328128079750404, 112.69126663620581],
            [-7.328300081330674, 112.69205368757898],
            [-7.329805487333031, 112.69183557833439],
            [-7.329901338772448, 112.69155826016703],
            [-7.329997190191231, 112.69138178496965],
            [-7.329951348210917, 112.69112547575438]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Hutan Kota Bayang Klumprik  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.306841397583348, 112.73524483737064],
            [-7.30656696886086, 112.73548851482383],
            [-7.306186796682447, 112.73580326486753],
            [-7.305997969321291, 112.73601648263907],
            [-7.3061616197055725, 112.73596063988938],
            [-7.306363035480866, 112.73589718221928],
            [-7.307012600737692, 112.73570934751577],
            [-7.307176250750384, 112.73562304508444],
            [-7.307203945361993, 112.73538952085846],
            [-7.3070277068952265, 112.73518391800734]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Mayangkara   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.260399164059276, 112.74611175233451],
            [-7.259350209314053, 112.74639698070999],
            [-7.2596227997627265, 112.74760746210835],
            [-7.260751115432239, 112.74725962262606]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Surya   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.247737736683487, 112.64554759595862],
            [-7.2475755583567665, 112.64499453118636],
            [-7.248207018319592, 112.64483800341932],
            [-7.2483829988072666, 112.64538411140653]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Anggrek  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.255360656742551, 112.742987608405],
            [-7.255570067797374, 112.74338715006785],
            [-7.255325280419221, 112.74334959914258],
            [-7.2547186328599125, 112.74369292189387]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Buah Undaan  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.2908685324236595, 112.74277570987316],
            [-7.291022302373247, 112.74305650695457],
            [-7.291210888088377, 112.74291025847467],
            [-7.291103539306419, 112.7426762609068]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Jembatan Ujung Galuh </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.254793450930077, 112.75504209627566],
            [-7.255242021946447, 112.75663520102869],
            [-7.255138505597733, 112.75497948517182]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b> Taman Teratai Surabaya   </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.317139564748106, 112.78402220293759],
            [-7.317470771151232, 112.78441873993184],
            [-7.318616191399917, 112.78426569056563],
            [-7.318685192525813, 112.7838969807289]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Kunang Kunang  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.270613003331046, 112.75035927651888],
            [-7.27114513153926, 112.74977455496341],
            [-7.2713579826459975, 112.75033781884711]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Lansia  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.263373847553802, 112.74250499943334],
            [-7.263619957183902, 112.74321772476424],
            [-7.264206145032946, 112.74295609141492],
            [-7.26387054139612, 112.74235613907942]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Apsari  </b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.242047806303674, 112.6297429987996],
            [-7.24191490753238, 112.62991843240911],
            [-7.242126912696556, 112.63046387144958],
            [-7.242370560299441, 112.63042559502567]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>  Taman Pakal  </b></h5>").addTo(map);
        var polygon = L.polygon([
            [-7.267411225322756, 112.74419008368463],
            [-7.26731475067941, 112.74423905013086],
            [-7.26722960948242, 112.74407275317229],
            [-7.267298786706189, 112.74403721390291],
            [-7.267304108030664, 112.74404660163445],
            [-7.267330714652045, 112.74403386114166],
            [-7.267411225322756, 112.74419008368463]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman AIS Nasution Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.291870652571039, 112.73910963953229],
            [-7.291904870841319, 112.74020856483041],
            [-7.2916760663789555, 112.74054518206353],
            [-7.291357519999229, 112.74067306959142],
            [-7.291022959536236, 112.74050341986961],
            [-7.290852086085493, 112.7390471128624],
            [-7.291870652571039, 112.73910963953229]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Bungkul Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.296302506323925, 112.80512800452208],
            [-7.294703834528848, 112.80538131919553],
            [-7.2942433434001765, 112.80192291162504],
            [-7.294645520093207, 112.8019073036157],
            [-7.29466813434265, 112.80207896499674],
            [-7.29551227378041, 112.80197261383324],
            [-7.29552890187365, 112.80205576231455],
            [-7.295695256476117, 112.80202676886697],
            [-7.296302506323925, 112.80512800452208]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Harmoni Keputih Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.2625107826496444, 112.74442612658095],
            [-7.262350476012867, 112.74446233640352],
            [-7.262278239568062, 112.74420305542715],
            [-7.262175802912308, 112.74397305600412],
            [-7.261850533122305, 112.74348288230406],
            [-7.2616649496407515, 112.74327970496869],
            [-7.260498536693785, 112.74270410005856],
            [-7.260415389732989, 112.74271080558127],
            [-7.259774825018114, 112.74313124184546],
            [-7.259689682391593, 112.7430051780217],
            [-7.260219881299992, 112.74260659491961],
            [-7.260887717556039, 112.74249394214095],
            [-7.262071727609008, 112.7431671766099],
            [-7.262510747785778, 112.74442537288799],
            [-7.2625107826496444, 112.74442612658095]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Prestasi Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.252046866552701, 112.75516285838405],
            [-7.251468817701039, 112.75526444705154],
            [-7.251247636463725, 112.75423563308748],
            [-7.2513560623063915, 112.75417394228356],
            [-7.251713933926168, 112.75414108522344],
            [-7.2517698097659435, 112.75415449626777],
            [-7.252046866552701, 112.75516285838405]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Mundu Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.226013989797453, 112.78865608426433],
            [-7.224803864418906, 112.78844204509191],
            [-7.2248492037711625, 112.78750358731567],
            [-7.225606898090707, 112.78751163394759],
            [-7.226013989797453, 112.78865608426433]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Suroboyo Park</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.297488885946848, 112.76196591774175],
            [-7.293786808333062, 112.76230856994587],
            [-7.293785792126643, 112.7612109576086],
            [-7.297394365803195, 112.76113288519501],
            [-7.297488885946848, 112.76196591774175]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Flora Bratang Surabaya</b></h5>").addTo(map);

        var polygon = L.polygon([
            [-7.328390329963641, 112.73104243309008],
            [-7.328397645785725, 112.73139112024266],
            [-7.326765837228703, 112.73172273176635],
            [-7.326568974339677, 112.73154034155563],
            [-7.326474533330158, 112.73112728138037],
            [-7.326912819261873, 112.73069946905255],
            [-7.327032533100311, 112.73070215126458],
            [-7.327752634329196, 112.73080230733883],
            [-7.328390329963641, 112.73104243309008]
        ], {
            color: 'green',
            fillColor: '#008000',
            fillOpacity: 0.8,
        }).bindPopup("<h5><b>Taman Pelangi Surabaya</b></h5>").addTo(map);

        <?php foreach ($taman as $key => $value) { ?>
            L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
            .bindPopup("<h5><b><?=$value->nama_taman ?></b></h5><br>alamat : <?=$value->alamat ?>").addTo(map);
        <?php } ?>
    </script>
