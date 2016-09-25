$(function() {
	var plants = [
		{ name: 'Saudi Arabia', coords: [23.8859, 45.0792] },
		{ name: 'United Arab Emirates', coords: [23.4241, 53.8478] }
	];

	new jvm.Map({
		container: $('#world-map'),
		map: 'world_mill',
		markers: plants.map(function(h) {
			return {
				name: h.name,
				latLng: h.coords
			}
		}),
		labels: {
			markers: {
				render: function(index) {
					return plants[index].name;
				},
				offsets: function(index) {
					var offset = plants[index]['offsets'] || [0, 0];

					return [offset[0] - 7, offset[1] + 3];
				}
			}
		},
		series: {
			markers: [
				{
					attribute: 'image',
					scale: {
						'closed': '/img/icon-np-1.png',
						'activeUntil2018': '/img/icon-np-2.png',
						'activeUntil2022': '/img/icon-np-3.png'
					},
					values: plants.reduce(function(p, c, i) {
						p[i] = c.status;
						return p;
					}, {}),
					legend: {
						horizontal: true,
						title: 'Nuclear power station status',
						labelRender: function(v) {
							return {
								closed: 'Closed',
								activeUntil2018: 'Scheduled for shut down<br> before 2018',
								activeUntil2022: 'Scheduled for shut down<br> before 2022'
							}
						}
					}
				}
			]
		}
	});
});