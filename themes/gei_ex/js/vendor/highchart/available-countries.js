// edudata contains countries and regions
var edudata =  {
	countries: [
	{
		id: 'cn',
		title: 'China'
	},
	{
		id: 'de',
		title: 'Deutschland',
		drilldown: 'countries/de/de-all',
		regionTitleSingular: 'Bundesland',
		regionTitlePlural: 'Bundesländer',
		data: [
		{
			id: 'de-by',
			title: 'Bayern'
		},
		{
			id: 'de-mv',
			title: 'Mecklenburg-Vorpommern'
		},
		{
			id: 'de-ni',
			title: 'Niedersachsen'
		}
		]
	},
	{
		id: 'gb',
		title: 'Großbritannien'
	},
	{
		id: 'it',
		title: 'Italien'
	},
	{
		id: 'ru',
		title: 'Russland'
	},
	{
		id: 'es',
		title: 'Spanien'
	},
	{
		id: 'hu',
		title: 'Ungarn'
	},
	{
		id: 'us',
		title: 'Vereinigte Staaten von Amerika',
		drilldown: 'countries/us/us-all',
		regionTitleSingular: 'Bundesstaat',
		regionTitlePlural: 'Bundesstaaten',
		data: [
		{
			id: 'us-az',
			title: 'Arizona'
		},
		{
			id: 'us-ny',
			title: 'New York'
		}
		]
	}
	]
};