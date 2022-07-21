var map = L.map('map').setView([19.47178618,-99.15352590], 10);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	L.Control.BrowserPrint().addTo(map);

	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h4>Nivel de contaminación</h4>' +  (props ?
			//'<b>' + props.o3_mean + '</b><br />' + props.density + ' people>' : 'Hover over a state');
			'<b>' + props.valor + '</b><br />' + '' + ' puntos ' : '');
	};

	info.addTo(map);


	// get color depending on population density value
	function getColor(d) {
		return d > 38 ? '#800026' :
			d > 36  ? '#BD0026' :
			d > 34  ? '#E31A1C' :
			d > 32  ? '#FC4E2A' :
			d > 30   ? '#FD8D3C' :
			d > 28   ? '#FEB24C' :
			d > 26   ? '#FED976' : '#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.valor)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	/* global statesData */
	/* ORIGINAL
	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map); */

	const api = "php/contaminantes.php";
	console.log(api);
	async function fetchData(url) {
		try {
			const response = await fetch(url);
			const data = await response.json();
			return data;
			console.log("data:"+data);
		} catch (err) {
			console.error(err);
		}
	};

	fetchData(api)
		.then(data => {
			L.geoJson(data, {
				style: style,
				onEachFeature: onEachFeature
			}).addTo(map);
	});

	map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');


	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend');
		var grades = [0, 26, 28, 30, 32, 34, 36, 38];
		var labels = [];
		var from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	