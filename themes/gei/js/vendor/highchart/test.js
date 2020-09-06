$(function () {
    $('#container').highcharts({
        
				// chart setup
				chart: {
					//renderTo: 'edu_dt-map', // map container

					// drilldown event
					events: {
						drilldown: function(e) {

							var chart = this;

							// if point is already selected, deselect it
							if(e.point.selected) { 
								e.point.select(false,true);
								return false;
							}

							// if region of point is already selected, do drilldown to regions
							else if(window.Edudata.countSelectedPoints(e.point.data) > 0) { 
								window.Edudata.drilldownToRegion(e,chart);
							}

							// nothing selected yet
							else {

								// init dialog
								regionSelectDialog.dialog({
									closed: function(event,data){

										// user wants to select a region of this country
										if(data.value === 'region') {
											window.Edudata.drilldownToRegion(e,chart);
										}
										
										// user wants to select this country
										else if(data.value === 'country') {
											e.point.select(null,true);
											return false;
										}
									}
								});

								// change labels on dialog
								regionSelectDialog.find('.edu_dt__region-select__dialog__country-string').text(e.point.title);
								regionSelectDialog.find('.edu_dt__region-select__dialog__region-plural-string').text(e.point.regionTitlePlural);
								
								// open dialog
								regionSelectDialog.dialog('open');		
							}			

						},
						drillup: function() {
							$drillUpButton.addClass('edu_dt-map__drillup__btn--hidden').blur();
						}
					},

					// styling
					backgroundColor: 'transparent',
					spacing: [0,0,0,0],
					style: {
						fontFamily: 'Gesta, sans-serif',
						fontSize: '16px'
					}
				},

				// map data
				series : [{
					mapData: Highcharts.maps['custom/world'], // map source
					data: edudata.countries, // active countries
					joinBy: ['hc-key', 'id'],
					id: 'selectableCountries'
				}],

				// map navigation options
				mapNavigation: {
					enabled: true,
					enableButtons: false, // use external buttons
					enableMouseWheelZoom: false,
				},

				// map colors
				plotOptions: {
					map: {
						allowPointSelect: true,
						cursor: 'pointer',
						borderColor: '#f2f2f2',
						borderWidth: '1',
						color: '#009ee0',
						nullColor: '#ccc',
						states: {
							hover: {
								brightness: 0.15
							},
							select: {
								color: '#b00046'
							}
						},
						tooltip: {
							followPointer: false,
							headerFormat: '',
							pointFormat: '{point.title}'
						}
					},
					series: {
						point: {
							events: {
								// overwrite default behaviour, which only allows single selection
								click: function() {

									// selected point doesn't have drilldown data
									if(!this.drilldown) {
										this.select(null,true); // allow selection of multiple points
									}
									return false;
								},
								select: function() {
									window.Edudata.addCountry(this.id);

									// selected point is a region
									/*if(this.isRegion) {
										// TODO: add different color to parent map
									}*/						
								},
								unselect: function() {
									window.Edudata.removeCountry(this.id);
								},
							}
						}
					}
				},

				//tooltips
				tooltip: {
					backgroundColor: null,
					borderWidth: 0,
					shadow: false,
					useHTML: true,
					style: {
						color: '#fff',
						fontSize: '16px',
						padding: '4px 12px'
					},
					hideDelay: '0'
				},

				// disable labels, legends, credits, drillUpButton
				title: {
					text: null
				},
				legend: {
					enabled: false
				},
				credits: {
					enabled: false
				},
				drilldown: {
					drillUpButton: false
				}
    });
});