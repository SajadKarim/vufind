/*!
 * EDU|DATA Country Comparison Table
 * Author: @herrschuessler
 */
(function ($, window, Handlebars, edudata, undefined) {

    window.Edudata = (function () {

        var _init = false,
            app = {},

            // DOM Elements
            $cntrySelector = $('#edu_dt-cntry-selector__select'),
            $tmpCntrySelector = $cntrySelector,
            $table = $('#edu_dt-cntry-table'),
            $tableOverflow = $('#edu_dt-cntry-table__overflow'),
            $tableWrapper = $('#edu_dt-cntry-table__wrapper'),
            $removeCountryBtn = $('.edu_dt__remove-cntry-btn');

        //////////////////////////
        // INIT UI
        ////////////////////////// 
        app.init = function () {

            // run once only!
            if (_init) {
                return;
            }
            _init = true;

            // init UI
            window.Edudata.addSourceLinks();
            window.Edudata.addPrintHeaders();
            window.Edudata.calculateOverflow();
            window.Edudata.tmplCntrySelect();

            /////////////////////////
            // User interaction / Event handlers
            ////////////////////////// 

            $table.on('click', '.edu_dt__remove-cntry-btn', function (e) {
                e.preventDefault();
                window.Edudata.removeCountry(e);
            });

            // user selects a country from select box element
            /////////////////////////
            $('#edu_dt-cntry-selector__select').on('change', function () {

                // get selected value
                var val = $(this).find('option:selected').val();

                // show country button in country list
                window.Edudata.addCountry(val);

                // reset select box to default option
                $(this).prop('selectedIndex', 0);
            });

        };

        /////////////////////////
        // Add links to sources
        ////////////////////////// 
        app.addSourceLinks = function () {

            var prfx = $table.data('src'), // get url fragment from $table data-src
                label = $table.data('src-label') ? $table.data('src-label') : 'Quelle';

            $table.find('tbody td[data-src]').each(function () {

                // add link with href = prfx + td data-src
                $(this).append('<a href="' + prfx + $(this).data('src') + '" target="_blank" class="edu_dt-cntry-table__source-btn btn">' + label + '</a>');
            });

        };

        /////////////////////////
        // Add links to sources
        ////////////////////////// 
        app.addPrintHeaders = function () {

            $table.find('tbody td').each(function () {

            	var $this = $(this),
            			$header = $this.closest('table').find('th').eq($this.index()); // get corresponding header cell for each td

            	if(!$this.is(':empty')) {

            		// add print header to each cell which is only visible when printing the page
            		$this.prepend('<em class="noscreen">' + $header.text() + ':<em> ');
            	}

            });

        };

        /////////////////////////
        // Remove initial selected countries from selector
        //////////////////////////    
        app.initCountrySelector = function () {

            $removeCountryBtn.each(function (index) {
                var isoCode = $(this).data('iso-code');
                $("#edu_dt-cntry-selector__select option[value='" + isoCode + "']").attr('disabled', 'disabled');

            });
        };

        /////////////////////////
        // Add overflow class to table if it's wider than wrapper
        ////////////////////////// 
        app.calculateOverflow = function () {

            // if table is wider than its wrapper
            if ($table.outerWidth() > $tableOverflow.outerWidth()) {

                // add overflow class
                $tableWrapper.addClass('edu_dt-cntry-table__wrapper--overflown');
            } else {

                // else remove it
                $tableWrapper.removeClass('edu_dt-cntry-table__wrapper--overflown');
            }
        };

        /////////////////////////
        // clones the country selector and removes disabled options, then hides the original selector
        ////////////////////////// 
        app.cloneCountrySelector = function () {

            // remove previous instance of clone
            $('#edu_dt-cntry-selector__select--clone').remove();

            // add clone to dom
            var $cntrySelectorClone = $cntrySelector.clone(true).attr('id', 'edu_dt-cntry-selector__select--clone').removeClass('visuallyhidden').insertAfter($cntrySelector);

            $cntrySelector.addClass('visuallyhidden');

            // remove disabled options
            $cntrySelectorClone.find('option:disabled').remove();
            $cntrySelectorClone.find('optgroup:not(:has(option:not(:disabled)))').remove();
        };

        /////////////////////////
        // Init country select template
        ////////////////////////// 
        app.tmplCntrySelect = function () {
            var source = $('#edu_dt-cntry-selector__select--tmpl').html(), // html template
                template = Handlebars.compile(source),
                rendered = template(edudata); // fill template with data

            // append data to target elememt
            $cntrySelector.html(rendered);
        };

        /////////////////////////
        // Count selected points in data object
        // var data (Array): Highmaps Data Array
        ////////////////////////// 
        app.countSelectedPoints = function (data) {
            var i = 0;

            // iterate over each data object and add selected objects to counter
            $.each(data, function () {
                if (this.selected) {
                    i++;
                }
            });
            return i;
        };

        /////////////////////////
        // Set country <option> in <select> element to disabled
        // var isocode (String): Country ISO-Code
        ////////////////////////// 
        app.disableCountryOption = function(isoCode) {
            $("#edu_dt-cntry-selector__select option[value='" + isoCode + "']").attr('disabled', 'disabled');
        };

        /////////////////////////
        // Set country <option> in <select> element to enabled
        // var isocode (String): Country ISO-Code
        //////////////////////////
        app.enableCountryOption = function (isoCode) {
            $('#edu_dt-cntry-selector__select option[value="' + isoCode + '"]').removeAttr('disabled');
        };

        /////////////////////////
        // Add country to comparison table via XHR call
        // var isocode (String): Country ISO-Code
        ////////////////////////// 
        app.addCountry = function (isoCode) {
            var queryURI = '/index.php?id=20&type=70137000&no_cache=1&tx_tbs_tbs[country]=' + isoCode + '&tx_tbs_tbs[action]=singletbs&tx_tbs_tbs[controller]=Ajax&tx_tbs_tbs[format]=json';
            
            // XHR
            $.post(queryURI, function (data) {

                var daten = $.parseJSON(data),
                    $table = $('#edu_dt-cntry-table'),
                    $spaltenAnzahl = $table.find('tr:nth-child(1)').find('td').length,
                    reihenAnzahl = $table.find('tr').length;

                $table.find('tr').each(function (index) {

                    // add table header
                    if (index === 0) {
                        $(this).find('th:first').after('<th class="edu_dt-cntry-table__col-header"><a class="edu_dt-cntry-table__cntry edu_dt__remove-cntry-btn" href="#" data-iso-code="' + daten.isoCode + '" title="Diese Land entfernen">' + daten.countryname + '</a></th>');

                        

                    // add table cells
                    } else {
                        if(typeof daten.tbs[index].item === 'string') {
                            $(this).find('th:first').after('<td ' + daten.tbs[index].dataSrc + '>' + daten.tbs[index].item + '</td>');
                        } else {
                             $(this).find('th:first').after('<td></td>');
                        }
                    }
                });

                window.Edudata.addSourceLinks();
                window.Edudata.fixFirstColumn(false);
                window.Edudata.fixThead(false);
                window.Edudata.disableCountryOption(daten.isoCode);

            }, "html");
        };

        /////////////////////////
        // Remove country from table
        ////////////////////////// 
        app.removeCountry = function (e) {

            var isoCode = $(e.currentTarget).data('iso-code');

            // Get index of parent TD/TH among its siblings (add one for nth-child)
            var ndx = $(e.currentTarget).parent().index() + 1;

            // Find all TD/TH elements with the same index
            $('td,th', e.delegateTarget).remove(":nth-child(" + ndx + ")");

            window.Edudata.calculateOverflow();
            window.Edudata.fixFirstColumn(false);
            window.Edudata.fixThead(false);
            window.Edudata.enableCountryOption(isoCode);
        };

        /////////////////////////
        // Fix first column of table to the left when scrolling horizontally
        // var init (bool): if true, clone table, if false, only adjust dimensions
        ////////////////////////// 
        app.fixFirstColumn = function (init) {

            var $fixedCol;

            // set up dom
            if (init) {

                // Clone the original table and alter classes and id
                $fixedCol = $table.clone(true).attr('id', 'edu_dt-cntry-table--fixed-col').addClass('edu_dt-cntry-table--fixed-col nopr');

                // remove all but the first column
                $fixedCol.find('td, thead th:not(:first)').remove();

                // append to DOM
                $fixedCol.appendTo($table.parent());

                // reposition tooltips
                $fixedCol.find('.tooltip').tooltipster('reposition').on('mouseleave.tooltipster', function(){
                    $(this).tooltipster('hide');
                });

                // toggle .hover on rows in $table and $fixedCol when hovering over either one 
                $('.edu_dt-cntry-table').on({
                    'mouseenter.fixFirstColumn': function () {
                        $('.edu_dt-cntry-table > tbody > tr:nth-child(' + ($(this).index() + 1) + ')').addClass('hover');
                    },
                    'mouseleave.fixFirstColumn': function () {
                        $('.edu_dt-cntry-table > tbody > tr:nth-child(' + ($(this).index() + 1) + ')').removeClass('hover');
                    }
                }, 'tbody > tr:not(.edu_dt-cntry-table__link-row)');
            }

            // dom already in place
            else {
                $fixedCol = $('#edu_dt-cntry-table--fixed-col');
            }

            // adjust height and width to adjust for multiline content
            $table.find('tr > th:first-child').each(function (i) {
                var $this = $(this),
                    //w = $this.width(),
                    h = $this.height();
                $fixedCol.find('th').eq(i).height(h);
            });

            // init country selector clone
            window.Edudata.cloneCountrySelector();

        };

        /////////////////////////
        // Fix horizontal <thead> when its offset is 0
        // var init (bool) ture: initial setup, false: recalculation of column width
        ////////////////////////// 
        app.fixThead = function (init) {

            var $table = $('.edu_dt-cntry-table'), // original table AND cloned first column table
                $thead = $table.find('thead'),
                $th = $thead.find('th'),
                $window = $(window),
                theadHeight = $thead.height(),
                tableOffsetTop = $table.offset().top,
                tableOuterHeight = $table.outerHeight(),

                // adjust top / bottom position of thead according to scroll position
                adjustThead = function() {
                    var tableTop = $window.scrollTop() - tableOffsetTop,
                        tableBottom = $window.scrollTop() - tableOffsetTop - tableOuterHeight + theadHeight;

                    if(tableTop > 0 && tableBottom < 0) {
                        $thead.css('top', tableTop + 'px');
                    }
                    else if(tableTop < 0) {
                        $thead.css('top', '0');
                    }
                    else {
                        $thead.css({
                            'top': 'auto',
                            'bottom': '0'
                        });
                    }
                },
                setTheadColumnWidth = function() {
                  // reset
                  $thead.removeClass('edu_dt-cntry-table__thead--fixed');
                  $th.css('width','auto');

                  // fix width of <th>
                  $th.each(function(){
                      var $this = $(this);

                      // reset, then get and set value
                      $this.css('width',$this.outerWidth());
                  });

                  $thead.addClass('edu_dt-cntry-table__thead--fixed');
                };

            setTheadColumnWidth();

            if(init) {

                // add border with theadHeight to <table> (only way to create offset to accomodate absolute positioned <thead>)
                $table.css('border-top', theadHeight + 'px solid transparent');

                // init
                adjustThead();

                // add scroll event
                $(window).on('scroll.fixThead', function () {
                    adjustThead();
                });
            }
        };

        return app;

    })();

    // window resize
    $(window).on('resize.edudata', function () {
        // recalculate table overflow
        window.Edudata.calculateOverflow();
        window.Edudata.fixThead(false);
    });

    // window load
    $(window).on('load.edudata', function () {
        window.Edudata.fixFirstColumn(true);
        window.Edudata.fixThead(true);
        window.Edudata.initCountrySelector();
    });



})(jQuery, window, Handlebars, edudata);

// let's go!
window.Edudata.init();
