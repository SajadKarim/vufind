/*!
 * EDU|DATA Country Selection
 *
 * @desc: EDU|DATA Country Selection Workflow 
 * @author: @herrschuessler
 *
 * Dependencies:
 * - jQuery
 * - highmaps.js
 * - handlebars.js
 * 
 * (c) Christoph Schuessler 2014
 */
 (function($, Highcharts, Handlebars, edudata, window, undefined) {

 	window.Edudata = (function() {

 		var _init = false,
		
 		app = { },
		cntryMap, // the country map object

		
		// DOM Elements
		$cntrySelector = $('#edu_dt-cntry-selector__select'),
		$cntryList = $('#edu_dt-cntry-selector__cntry-list'),
		$drillUpButton = $('#edu_dt-map__drillup__btn'),
		$submitButton = $('#edu_dt-cntry-selector__submit'),
		$nullLabel = $('#edu_dt-cntry-selector__null-label');
		$eduDialog = $('#edu_dt__region-select__dialog');
		$cntrytmpl = $('#edu_dt-cntry-selector__cntry--tmpl');
		
		console.log($cntrytmpl.html());
		//////////////////////////
		// INIT UI
		////////////////////////// 
		app.init = function() {
			// run once only!
			if (_init || !$eduDialog || !$cntrySelector|| !$cntryList|| !$drillUpButton|| !$submitButton|| !$nullLabel || !$cntrytmpl || !$cntrytmpl.html()) {
				return;
			}
			_init = true;
			
			// construct HTML from templates
			window.Edudata.tmplCntryBtns();
			window.Edudata.tmplCntrySelect();

			var regionSelectDialog = $eduDialog.dialog();

			//////////////////////////
			// Init Map
			//////////////////////////
			
			// initiate the map
			cntryMap = new Highcharts.Map({

				// chart setup
				chart: {
					renderTo: 'edu_dt-map', // map container

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

			/////////////////////////
			// User interaction / Event handlers
			////////////////////////// 

			// user clicks on zoom buttons
			/////////////////////////
			$('#edu_dt-map__zoom__btn--in').on('click', function(){
				cntryMap.mapZoom(0.5); // zoom in
			});
			$('#edu_dt-map__zoom__btn--out').on('click', function(){
				cntryMap.mapZoom(2); // zoom out
			});

			// user clicks on drillup button
			/////////////////////////
			$drillUpButton.on('click', function(){
				if (typeof cntryMap.drilldownLevels !== 'undefined') {
					cntryMap.drillUp();
				}
			});

			// user selects a country from select box element
			/////////////////////////
			$('#edu_dt-cntry-selector__select').on('change', function(){
				
				// get selected value
				var val = $(this).find('option:selected').val();

				// show country button in country list
				window.Edudata.addCountry(val);

				// select country in current map
				if(cntryMap.get(val)) { // found val in current map...

					// toggle point selection on map
					cntryMap.get(val).select(null,true);
				}

				// select country in drilldown map
				else {
					window.Edudata.changeSelectedState(val, true);
				}

				// reset select box to default option
				$(this).prop('selectedIndex', 0);
			});

			// user clicks on selected country label in list
			/////////////////////////
			$('.edu_dt-cntry-selector__cntry-btn').on('click', function(){
				
				// get associated checkbox
				var cb = $('#' + $(this).attr('for')),
				val = cb.val();

				// unselect country currently on map
				if(cntryMap.get(val)) {
					cntryMap.get(val).select(false,true);
				}

				// country is not on current map
				else {
					window.Edudata.removeCountry(val);
					window.Edudata.changeSelectedState(val, false);
				}

				// do not execute default event, checkbox will be unchecked by function removeCountry()
				return false;
			});

			// init country selector clone
			window.Edudata.cloneCountrySelector();

			//-- end init
		};

		/////////////////////////
		// Init country button template
		////////////////////////// 
		app.tmplCntryBtns = function() {
			var source = $('#edu_dt-cntry-selector__cntry--tmpl').html(), // html template
			template = Handlebars.compile(source),
					rendered = template(edudata); // fill template with data

			// append data to target elememt
			$cntryList.html(rendered);
		};

		/////////////////////////
		// Init country select template
		////////////////////////// 
		app.tmplCntrySelect = function() {
			var source = $('#edu_dt-cntry-selector__select--tmpl').html(), // html template
			template = Handlebars.compile(source),
					rendered = template(edudata); // fill template with data

			// append data to target elememt
			$cntrySelector.html(rendered);
		};

		/////////////////////////
		// Add country to country list
		// var code (string): ISO country code
		////////////////////////// 
		app.addCountry = function(code) {

			var $curCntry = $('.edu_dt-cntry-selector__cntry[value="' + code + '"]'),
			$curOption = $cntrySelector.find('option[value="' + code + '"]');

			// move country to last position
			$curCntry.parent().appendTo($cntryList);

			// check checkbox of country button
			$curCntry.prop('checked', true);

			// disable country option in country selector
			$curOption.attr('disabled',true);

			// if country option is within an optgroup, also disable first country option before this optgroup
			$curOption.parent('optgroup').prev().attr('disabled',true);
			
			// if country option followed by an optgroup, also disable all options in this optgroup
			$curOption.next('optgroup').find('option').attr('disabled',true);

			// adjust UI
			window.Edudata.toggleActiveUI();
			window.Edudata.cloneCountrySelector();
		};

		/////////////////////////
		// Remove country from country list
		// var code (string): ISO country code
		////////////////////////// 
		app.removeCountry = function(code) {

			var $curOption = $cntrySelector.find('option[value="' + code + '"]');

			// uncheck checkbox of country button
			$('.edu_dt-cntry-selector__cntry[value="' + code + '"]').prop('checked', false);

			// enable country option in country selector
			$curOption.attr('disabled',false);

			// if country option is within an optgroup and all sibling options are now enabled, also reenable first country option before this optgroup
			if( ($curOption.parent('optgroup').length > 0) && ($curOption.siblings(':disabled').length === 0) ) {
				$curOption.parent('optgroup').prev().attr('disabled',false);
			}

			// if country option followed by an optgroup, also reneable all options in this optgroup
			$curOption.next('optgroup').find('option').attr('disabled',false);

			// adjust UI
			window.Edudata.toggleActiveUI();
			window.Edudata.cloneCountrySelector();

		};

		/////////////////////////
		// drill down to a regional map of a country
		// var e (object): the event object (drilldown after click on a map point)
		// var charts (object): the chart object
		////////////////////////// 
		app.drilldownToRegion = function(e,chart) {

			// user wants drilldown and drilldown not yet loaded
			if (!e.seriesOptions) {

				var mapKey = e.point.drilldown,
				drilldownData = e.point.data,

				// Handle error, the timeout is cleared on success
				fail = setTimeout(function () {
					if (!Highcharts.maps[mapKey]) {
						chart.showLoading('Failed loading ' + e.point.name);

						fail = setTimeout(function () {
							chart.hideLoading();
						}, 1000);
					}
				}, 3000);

				// add parameter isRegion to each region object
				$.each(drilldownData, function(){
					this.isRegion = true;
				});

				// show the loading indicator
				chart.showLoading('Loading');

				// Load the drilldown map - TODO: use local path?
				$.getScript('http://code.highcharts.com/mapdata/' + mapKey + '.js', function () {

					// Hide loading and add series
					chart.hideLoading();
					$drillUpButton.removeClass('edu_dt-map__drillup__btn--hidden');
					clearTimeout(fail);

					chart.addSeriesAsDrilldown(e.point, {
						mapData: Highcharts.geojson(Highcharts.maps[mapKey]), // map source
						data: drilldownData, // active countries
						joinBy: ['hc-key', 'id'],
						id: 'selectableRegions',
						color: '#009ee0',
						states: {
							hover: {
								brightness: 0.15
							},
							select: {
								color: '#b00046'
							}
						}
					});
				});
			}
			return true;
		};

		/////////////////////////
		// Toggle the activation status of labels and buttons
		////////////////////////// 
		app.toggleActiveUI = function() {

			var $firstOption = $cntrySelector.find('option').first(); // label of country selector

			// if no country is currently selected...
			if( $('.edu_dt-cntry-selector__cntry:checked').length === 0) {

				// change selector label to single-label
				$firstOption.text($cntrySelector.data('single-label'));

				// disable submit button
				$submitButton.prop('disabled',true);

				// show null label
				$nullLabel.show();
			}
			// if at least one country is currently selected...
			else {

				// change selector label to multi-label
				$firstOption.text($cntrySelector.data('multi-label'));

				// enable submit button
				$submitButton.prop('disabled',false);

				// hide null label
				$nullLabel.hide();
			}
		};

		/////////////////////////
		// clones the country selector and removes disabled options, then hides the original selector
		////////////////////////// 
		app.cloneCountrySelector = function() {

			// remove previous instance of clone
			$('#edu_dt-cntry-selector__select--clone').remove();

			// add clone to dom
			var $cntrySelectorClone = $cntrySelector.clone(true).attr('id','edu_dt-cntry-selector__select--clone').removeClass('visuallyhidden').insertAfter($cntrySelector);
			
			$cntrySelector.addClass('visuallyhidden');

			// remove disabled options
			$cntrySelectorClone.find('option:disabled').remove();
			$cntrySelectorClone.find('optgroup:not(:has(option:not(:disabled)))').remove();
		};

		/////////////////////////
		// Count selected points in data object
		// var data (Array): Highmaps Data Array
		////////////////////////// 
		app.countSelectedPoints = function(data) {
			var i = 0;

			// iterate over each data object and add selected objects to counter
			$.each(data,function(){
				if(this.selected) {
					i ++;
				}
			});
			return i;
		};

		/////////////////////////
		// change selection status in mapdata object
		// var val (string): the country id
		// var select (bool): true for select, false for deselect
		////////////////////////// 
		app.changeSelectedState = function(val,select) {

			// select country in drilldown map
			if(val.length === 5) { // val is 5 chars long, must be drilldown id

				// get id of parent country (first two chars of id)
				var parentId = val.substring(0,2);

				// loop through mapdata
				$.each(edudata.countries, function(){
					if(this.id === parentId) {
						$.each(this.data, function(){
							if(this.id === val) {

								// set selected to true / false
								this.selected = select;
							}
						});
					}
				});
			}

			// select country in top level map
			else if(val.length === 2) { // val is 2 chars long, must be top level id

				// loop through mapdata
				$.each(edudata.countries, function(){
					if(this.id === val) {

						// set selected to true / false
						this.selected = select;
					}
				});
			}
		};

		return app;

	})();

})(jQuery, Highcharts, Handlebars, edudata, window);

// let's go!
window.Edudata.init();