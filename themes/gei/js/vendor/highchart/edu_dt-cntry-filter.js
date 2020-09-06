/*!
 * EDU|DATA Country Filter
 *
 * @desc: EDU|DATA Country Filter Workflow 
 * @author: @herrschuessler
 *
 * Dependencies:
 * - jQuery
 * - jquery.ajax-progress.js
 * - widgets/progress.js
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
		xhr, // the xhr pointer
		
		// DOM Elements
		$cntryList = $('#edu_dt-cntry-selector__cntry-list'),
		$submitButton = $('#edu_dt-cntry-selector__submit'),
		$nullLabel = $('#edu_dt-cntry-selector__null-label'),
		$filterForm = $('#edu_dt-cntry-filter__form'),
		$filterReset = $('#edu_dt-cntry-filter__reset'),
		$progress = $('body').progress();

		//////////////////////////
		// INIT UI
		////////////////////////// 
		app.init = function() {

			// run once only!
			if (_init) {
				return;
			}
			_init = true;

			// construct HTML from templates
			window.Edudata.tmplCntryBtns();

			// Init Map
			window.Edudata.initMap();

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

			// user changes a filter
			/////////////////////////
			$filterForm.on('change', function(){
				window.Edudata.getFilterResults(this);
			});

			// user resets all filters
			/////////////////////////
			$filterReset.on('click', function(e){
				e.preventDefault();
				window.Edudata.resetFilters($filterForm);
			});

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
		// Init Map
		////////////////////////// 
		app.initMap = function() {

			cntryMap = new Highcharts.Map({

				// chart setup
				chart: {
					renderTo: 'edu_dt-map', // map container
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
						allowPointSelect: false,
						borderColor: '#f2f2f2',
						borderWidth: '1',
						color: '#aaa',
						nullColor: '#ccc',
						states: {
							hover: {
								//brightness: 0.15
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
				}
			});
		};


		/////////////////////////
		// load filter response and change ui accordingly
		////////////////////////// 
		app.getFilterResults = function(form) {

			var serializedFormData = $(form).serializeArray(),
			url = $(form).attr('action');

            url += '&type=70137000';
			// abort any running ajax calls
			if(xhr && xhr.readystate !== 4){
				xhr.abort();
			}

			xhr = $.ajax(url, {
				data: serializedFormData,
				cache: false, // TODO only for dev
				beforeSend: function() {
					// show progress bar
					$progress.progress('show');
				},
				complete: function(){
					// hide progress bar
					$progress.progress('hide');
				},
				success: function(data){
					// reset all selected points on map
					try {
						$.each(cntryMap.getSelectedPoints(),function(){
							this.select(false);
						});
					}
					catch(e) {
					}

					// uncheck all countries in list
					$('.edu_dt-cntry-selector__cntry').prop('checked', false);

					$.each(data,function(){

						// select new points on map
						try {
							cntryMap.get(this.id).select(true,true);
						}
						catch(e) {
						}

						// check countries in list
						var $curCntry = $('.edu_dt-cntry-selector__cntry[value="' + this.id + '"]');
						$curCntry.prop('checked', true);

					});

					// adjust UI
					window.Edudata.toggleActiveUI();

				},
				progress: function(e) { // require jquery.ajax-progress.js, see https://github.com/englercj/jquery-ajax-progress
					//make sure we can compute the length
					if(e.lengthComputable) {
							//calculate the percentage loaded
							var value = (e.loaded / e.total) * 100;
							// update progress bar
							$progress.progress('update',value);
					}
				}
			});
		};

		/////////////////////////
		// Reset all filters
		////////////////////////// 
		app.resetFilters = function(form) {
			form[0].reset();
			form.trigger('change');
		};

		/////////////////////////
		// Toggle the activation status of labels and buttons
		////////////////////////// 
		app.toggleActiveUI = function() {

			// if no country is currently selected...
			if( $('.edu_dt-cntry-selector__cntry:checked').length === 0) {

				// disable submit button
				$submitButton.prop('disabled',true);

				// show null label
				$nullLabel.show();

				// disable filter reset
				$filterReset.addClass('edu_dt-cntry-filter__reset--disabled');
			}
			// if at least one country is currently selected...
			else {

				// enable submit button
				$submitButton.prop('disabled',false);

				// hide null label
				$nullLabel.hide();

				// enable filter reset
				$filterReset.removeClass('edu_dt-cntry-filter__reset--disabled');
			}
		};


		return app;

	})();

})(jQuery, Highcharts, Handlebars, edudata, window);

// let's go!
window.Edudata.init();