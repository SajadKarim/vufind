

var TOUR_QUERY_EXAMPLE = "Berlin";
function createTour(id, restart, step) {
	$("#modal .close").click();

	var steps;
	if(id=="take-tour1"){
		steps = createTourOne();
	}else if(id=="take-tour2"){
		steps = createTourTwo();
	}else {
		console.log('MISSING TOUR',id);
	}
	
	var opts = {
		name: 'itbc-'+id,
		redirect: true,
		debug: true,
		orphan: true,
		steps: steps
	};
	//Tour.prototype._onScroll = () => {}; 

	var tour = new Tour(opts);
	if (restart) {
		tour.restart();
	}
	tour.init(true);
	if (step !== undefined) {
		tour.goTo(step);
	}
	return tour;
}
function hideSimpleAndStart(id) {
	if (typeof(transitionFromSimple) !== "undefined") {
		transitionFromSimple(function () {
			createTour(id,true).start();
		});
	} else {
		createTour(id,true).start();
	}
}
function typeValue(input, value) {
	if (value.length > 0) {
		var current = $(input).val();
		$(input).val(current + value.substr(0, 1));
		if (value.length > 1) {
			setTimeout(function () {
				typeValue(input, value.substr(1));
			}, 30 + Math.floor(50 * Math.random()));
		}
	}
}
function disablePrev(tour) {
	$(".tour-" + tour.getName() + "-" + tour.getCurrentStep() + " .btn[data-role=prev]")
	.attr('disabled', 'disabled')
	.addClass('disabled');
}
function initTourSearchPage(id) {
	$(document).ready(function () {
		if (window.location.hash === '#itbc-'+id) {
			hideSimpleAndStart(id);
		} else {
			$("#"+id).removeClass('hidden');
			$("#"+id).click(function () {
				hideSimpleAndStart(id);
			});
		}
	});
}
function initTourResultPage(id) {
	$(document).ready(function () {
		if (window.location.hash === '#itbc-'+id) {
			var tour = createTour(id,false,2);
			//console.log(tour);
			//tour.start();

		}
	});
}
function initTourRecordPage(id) {
	$(document).ready(function () {
		if (window.location.hash === '#itbc-'+id) {
			var tour = createTour(id,false);
			if (tour.getCurrentStep() !== null && !tour.ended()) {
				tour.start();
			}
		}
	});
}

/* TOUR 1 */
function createTourOne() {
	return [
	{
	/* TOUR 1 STEP 1 */
	element: "#searchForm_lookfor",
	title: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Suchbegriffe eingeben";
			break;
		  case 'es':
			t = "Introduzca los términos de búsqueda";
			break;
		  case 'it':
			t = "Inserisci i termini di ricerca";
			break;
		  case 'en':
		  default:
			t = "Enter search terms";
			break;
		}
		return t;
	},
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Um alle Datensätze zu durchsuchen, geben Sie einige Schlüsselwörter ein, die Ihr Interesse widerspiegeln. Sie können AND, OR und NOT verwenden, um erweiterte Anfragen zu erstellen. Diese und andere Optionen werden in der <a href='Hilfe/Home?topic=search&_=1555329212' data-lightbox class='help-link'>Hilfeseite</a> ausführlich erläutert.";
			break;
		  case 'es':
			t = "Introduzca algunas palabras clave que reflejen su interés en el cuadro de búsqueda para buscar en todos los registros. Puede utilizar AND, OR y NOT para crear consultas más avanzadas. Estas y otras opciones se explican en detalle en el <a href='Help/Home?topic=search&_=1555329212' data-lightbox class='help-link'>Help page</a>.";
			break;
		  case 'it':
			t = "Inserisci alcune parole chiave che riflettono il tuo interesse nella casella di ricerca per cercare attraverso tutti i record. È possibile utilizzare E, OPPURE e NON per creare query più avanzate. Queste e altre opzioni sono spiegate in dettaglio nella <a href='Help/Home?topic=search&_=1555329212' data-lightbox class='help-link'>Help page</a>.";
			break;
		  case 'en':
		  default:
			t = "Enter some keywords reflecting your interest in the search box to search through all records. You can use AND, OR and NOT to create more advanced queries. These and other options are explained in detail in the <a href='Help/Home?topic=search&_=1555329212' data-lightbox class='help-link'>Help page</a>.";
			break;
		}
		return t;
	},
	placement: "auto top"
	}, {
	/* TOUR 1 STEP 2 */
	element: "#searchForm button.btn",
	title: "Search",
	content: "Press the button to search",
	placement: "auto bottom",
	onShow: function (tour) {
		var searchInput = $('#searchForm input.search-query')
		if (searchInput.val() === '') {
			typeValue(searchInput, TOUR_QUERY_EXAMPLE);
		}
		$('#searchForm button.btn').off('click').one('click', function () {
			tour.next();
			return false;
		});
	},
	onNext: function (tour) {
		var searchInput = $('#searchForm input.search-query')
		window.location = "/test/Search/Results?lookfor=" + searchInput.val() + "#" + tour._options.name;
		tour.end();
	}
	}, {
	element: "#result0",
	title: "Results",
	content: "Search results are shown here",
	placement: "auto top",
	orphan: true,
	backdrop: true,
	onShow: function (tour) {},
	}, {
	element: ".sidebar",
	title: "Facets",
	content: "Various <em>facets</em> provide a quick overview of the available content, and allow for narrowing down the search results.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-textbook_catalogue_str",
	title: "Catalogues",
	content: "Select a catalogue to filter for textbooks of this textbook collection.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-country_of_use_hierarchical_str_mv",
	title: "Country of Use",
	content: "Select to filter for textbooks which are used in specific countries.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-language_code_str_mv",
	title: "Language",
	content: "Select a language to filter for textbooks written in that language.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-school_subject_isced_hierarchical_str_mv",
	title: "School Subject",
	content: "School subjects are classified by the ISCED standard.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-level_of_education_str_mv",
	title: "Level of Education",
	content: "Level of education is classified by the ISCED standard.",
	placement: "auto right",
	backdrop: true,
	}, /*{
    element: "#side-panel-document_type_str_mv",
	title: "Document Type",
	content: "Filter for document types which are relevant fot textbooks.",
	placement: "auto right",
	backdrop: true,
	onNext: function (tour) {
		//$("#side-panel-author_facet").get(0).scrollIntoView();
	}
	}, {
    element: "#side-panel-author_facet",
	title: "Persons",
	content: "Filter for textbooks from specific authors or editors.",
	placement: "auto right",
	backdrop: true,
	onShow: function () {
		//$("#side-panel-author_facet").get(0).scrollIntoView();
		//document.getElementById("side-panel-author_facet").scrollIntoView(false);
		//$("html, body").scrollTop($("html, body").scrollTop() + $("#side-panel-author_facet").position().top);
		//$('html, body').animate({scrollTop: ($('#side-panel-author_facet').offset().top)},500);
	}
	}, {
    element: "#side-panel-illustrated",
	title: "Illustrated",
	content: "Check, if figures and illustrations should be included.",
	placement: "auto right",
	backdrop: true,
	}, {
    element: "#side-panel-structure_type_str",
	title: "Structural Type",
	content: "Choose between multi volume works and editions.",
	placement: "auto right",
	backdrop: true,
	},*/ {
	element: "#facets .facet:first",
	title: "Expand facet",
	content: "Click the name of a facet to expand it and see the values found within the current search results. Try <strong>selecting and unselecting</strong> a couple of values in one or more facets to see how this affects the list of results.",
	placement: "auto right",
	backdrop: true,
	onShown: function () {

	 if ($('#facets .facet:first').hasClass('collapsedfacet')) {
	$('#facets .facet.collapsedfacet:first a.expandable-panel-toggle').click();
	}
	}
	}, {
	element: "#searchresultitems .searchresultitem:first .searchresultmoreless",
	title: "Search result",
	content: "Each search result represent a record that matches the search criteria. More information about the record can be displayed by expanding the description (click the '+' button).",
	placement: "auto left"
	}, {
	element: "#searchresultitems .searchresultitem:first .searchresult-licenseInfo",
	title: "Rights information",
	content: "Basic rights information, if available, is shown next to each search result.",
	placement: "auto left"
	}, {
	element: "#searchresultitems .searchresultitem:first h3 a",
	title: "Find out more",
	content: "Click the record title to find out everything about the described resources, including how to access the content. Press <strong>next</strong> to go to the record page for this result.",
	placement: "auto bottom"
	}, {
	element: ".record-tabpanel .nav-tabs li:last",
	title: "Record information",
	content: "Each of these tabs represents a different aspect of the record. The first tab lists the most important information about the described resource(s).",
	placement: "auto right",
	path: RegExp(/.*\/record.*/i),
	redirect: function (tour) {
	var resultLink = $('#searchresultitems .searchresultitem:first h3 a');
	if (resultLink.length > 0) {
	var newPath = resultLink.attr('href') + '#' + tour.getName();
	if (this._inited === true) {
	document.location.href = newPath;
	return (new jQuery.Deferred()).promise();
	}
	}
	},
	onShown: disablePrev
	}, {
	element: ".record-tabpanel .tab1",
	title: "Resources tab",
	content: "This tab lists the described resource(s). If present, you can click any of the links to click it. Note that not all records link directly to the described resources. In such cases, look for a landing page or search link.",
	placement: "auto top",
	path: RegExp(/.*\/record.*/i),
	onShow: function () {
	$(".tab1 a").click();
	}
	}, {
	element: ".record-tabpanel .tab2",
	title: "Availability tab",
	content: "Here you will find an indication of the known information regarding rights to using, accessing and/or distributing resources. Make sure to always check at the primary source before actually using or redistributing any of the resources!",
	placement: "auto top",
	onShow: function () {
	$(".tab2 a").click();
	}
	}, {
	element: ".record-tabpanel .tab3",
	title: "&quot;All metadata&quot; tab",
	content: "Any available metadata that is not shown in the details can be found here.",
	placement: "auto top",
	onShow: function () {
	$(".tab3 a").click();
	}
	}, {
	element: ".record-tabpanel .tab4",
	title: "&quot;Technical details&quot; tab",
	content: "Any available metadata that is not shown in the details can be found here.",
	placement: "auto top",
	onShow: function () {
	$(".tab4 a").click();
	}
	}, {
	element: "#recordprevnext .btn:first",
	title: "Search results navigation",
	content: "Use these buttons to navigate to the previous or next item from the result results without having to go back to the list.",
	placement: "auto bottom",
	onShow: function () {
	$("#recordprevnext").on('click', '.btn', function (evt) {

	 evt.preventDefault();
	window.location = evt.target.closest('a').getAttribute('href') + '#tour';
	});
	}
	}, {
	element: "#topnavigation",
	title: "&quot;Breadcrumbs&quot;",
	content: "The links in this bar serve as 'breadcrumbs' that show you where you are in your exploration and allow you to go back one or more levels .",
	placement: "auto bottom"
	}, {
	element: "#feedbacklink",
	title: "Send feedback",
	content: "Use the feedback button to send feedback regarding any record, search results or the VLO to the maintainers of the VLO and CLARIN's metadata infrastructure.",
	placement: "auto bottom"
	}, {
	element: "#header .help-link",
	title: "Help and documentation",
	content: "You can always click the <em>Help</em> link in the header to learn about the VLO and how to use it. There you will also find contact information in case you have questions that you did not find answered on that page.",
	placement: "auto bottom"
	}, {
	element: ".breadcrumbs-searchresults",
	title: "Back to the search results",
	content: "Click the link in the breadcrumbs bar to go back to your search results and continue exploring the VLO. The tour ends here. Thanks for your attention and interest in using the VLO!",
	placement: "auto bottom",
	onShow: function (tour) {
	$('.breadcrumbs-searchresults').one('click', function (evt) {
	evt.preventDefault();

	 tour.end();

	 window.location = $(evt.target).closest('a').getAttribute('href');
	});
	}
	}
	];
}

/* TOUR 2 */
function createTourTwo() {
	return [
	{
	/* TOUR 2 STEP 1 */
	title: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Über den ITBC";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Der ITBC wurde als internationale Weiterentwicklung des OPAC konzipiert. Alle Recherchen sind Metadaten getrieben, was bedeutet, dass die Volltexte nicht indexiert sind, dafür aber viele Schulbuchspezifische Eigenschaften der Bücher bekannt sind. Um diese Recherche zu realisieren, mussten die Schulbücher mehrerer internationaler Schulbuchkataloge in ein einheitliches Format gebracht werden.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	backdrop: true,
	}, {
	/* TOUR 2 STEP 2 */
	element: ".language",
	title: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Übersetzungen";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die einheitliche Repräsentation (wie Standards) ermöglicht Übersetzungen und somit das Arbeiten in der eigenen Muttersprache.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 3 */
	element: "#front-page-facets-div div:nth-child(1).col-sm-3",
	title: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Schulbuchkataloge";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Um soviele Schulbücher wie möglich recherchierbar zu machen, erweitert sich der ITBC stetig um neue Schulbuchkataloge. Die ersten Kataloge, die vereint wurden waren der des GEI, MANES und EDISCO.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 4 */
	element: "#front-page-facets-div div:nth-child(1) a[title='EDISCO']",
	title: "EDISCO",
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die Datenbank <a href='http://www.database-edisco.org' class='help-link'>EDISCO</a> bietet einen Nachweis über 25.000 italienische Schulbücher, die hauptsächlich im 19. und 20. Jahrhundert erschienen sind.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 5 */
	element: "#front-page-facets-div div:nth-child(1) a[title='EMMANUELLE']",
	title: "EMMANUELLE",
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die Datenbank <a href='http://emmanuelle.bibliotheque-diderot.fr' class='help-link'>EMMANUELLE</a> ist der erste jemals erstellte Schulbuchkatalog. Der Katalog wurde von Alain Choppin zusammengetragen und beinhaltet französische Schulbücher.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 6 */
	element: "#front-page-facets-div div:nth-child(1) a[title='GEI']",
	title: "GEI",
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die Forschungsbibliothek des Georg-Eckert-Instituts betreibt einen <a href='http://www.database-edisco.org' class='help-link'>Katalog</a> mit über 185.000 Print- und Online-Medien aus 173 Ländern aus der Zeit vom 17. Jahrhundert bis heute. Alle Schulbücher wurden von Hand in den Besatnd aufgenommen.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 7 */
	element: "#front-page-facets-div div:nth-child(1) a[title='LIVRES']",
	title: "LIVRES",
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die Datenbank <a href='http://alexandria.com.br' class='help-link'>LIVRES</a> steuert dem ITBC 17.000 brasilianische Schulbücher bei.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}, {
	/* TOUR 2 STEP 8 */
	element: "#front-page-facets-div div:nth-child(1) a[title='MANES']",
	title: "MANES",
	content: function () {
		var t;
		switch (VuFind.userLang) {
		  case 'de':
			t = "Die Datenbank <a href='http://www.centromanes.org' class='help-link'>MANES</a> bietet einen Nachweis über 35.000 Schulbücher aus dem 19. und 20. Jahrhundert aus Spanien, Portugal, Lateinamerika und Belgien.";
			break;
		  case 'es':
			t = "";
			break;
		  case 'it':
			t = "";
			break;
		  case 'en':
		  default:
			t = "";
			break;
		}
		return t;
	},
	placement: "auto left",
	backdrop: true,
	}
	];
}