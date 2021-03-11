<?
$rawdata = $this->driver->getRawData();

$portalId   = $rawdata['iid'];
$portalName = isset($rawdata['project']) ? $rawdata['project'] : false;

// Title
//
$title = false;
// If getTitle returns a string, use it as title
if(is_string($this->driver->getTitle())) {
  $title = $this->record($this->driver)->getTitleHtml();
}
// If getTitle returns an array...
elseif(is_array($this->driver->getTitle())) {

  // If there's a dc.title, use it as title
  if(isset($rawdata['dc.title'])) {
    $title = $rawdata['dc.title'];
    $title = is_array($title) ? implode(' ', $title) : $title;
    $title = $this->highlight($title);
  }
  // else set title to last array value
  else {
    $title = $this->highlight(end($this->driver->getTitle()));
  }
}

// Cover
//
$coverDetails = $this->record($this->driver)->getCoverDetails('result-list', 'medium', $this->recordLink()->getUrl($this->driver));
$cover = $coverDetails['html'];

// Publish date
//
$datePublished = false;
if(isset($rawdata['published']) && is_array($rawdata['published'])) {
  $datePublished = date_parse($rawdata['published'][0]);
}

// Show
//
$snippet = $this->driver->getHighlightedSnippet();

// Meta data
//
$beforeTitle = []; // Meta data line above title
$afterTitle = []; // Meta data line above title
$dataTable = []; // Tabular data replacing excerpt


// Curricula Workstation
//
if($portalId == 'cw') {
  $cover = false;
  $snippet = false;

  // Curricula Workstation: Herausgeber
  if( isset($rawdata['publisher_stringM']) ) {
    $afterTitle[] = implode(', ', $rawdata['publisher_stringM']);
  }

  // Curricula Workstation: Sachgebiete
  if( isset($rawdata['topic']) ) {
    $dataTable[$this->transEsc('gei_result_data_topic')] = implode(', ', $rawdata['topic']);
  }
  // Curricula Workstation: Ausgabe
  if( isset($rawdata['ausgabe_stringM']) ) {
    $dataTable[$this->transEsc('gei_result_data_issue')] = implode(', ', $rawdata['ausgabe_stringM']);
  }
}

// GEI|DZS
//
if($portalId == 'gei_dzs') {
  $cover = false;
  $snippet = false;

  // GEI|DZS: Fester Text
  $beforeTitle[] = $this->transEsc('gei_result_geidzs');

  // GEI|DZS: Verfasser
  if( isset($rawdata['verfasser_stringM']) ) {
    $dataTable[$this->transEsc('gei_result_data_author')] = implode(', ', $rawdata['verfasser_stringM']);
  }
  // GEI|DZS: Teil
  if( isset($rawdata['bandangabe_stringS']) ) {
    $dataTable[$this->transEsc('gei_result_data_part')] = $rawdata['bandangabe_stringS'];
  }
  // GEI|DZS: Ausgabe
  if( isset($rawdata['ausgabe_stringM']) ) {
    $dataTable[$this->transEsc('gei_result_data_issue')] = implode(', ', $rawdata['ausgabe_stringM']);
  }
  // GEI|DZS: Ausgabe
  if( $datePublished ) {
    $dataTable[$this->transEsc('gei_result_data_year')] = $datePublished['year'];
  }
}

// Pruzzenland
//
if($portalId == 'pruzzenland') {
  $cover = false;

  // Pruzzenland: Art und Thema der Resource
  if( isset($rawdata['format']) && isset($rawdata['topic']) ) {
    $beforeTitleData = $this->translate('gei_result_meta_type_topic', [
      '%%type%%' => $rawdata['format'][0],
      '%%topic%%' => implode(', ', $rawdata['topic'])
    ]);
    $beforeTitle[] = $beforeTitleData;
  }
}

// Zwischentöne
//
if($portalId == 'zwischentoene') {

  // Zwischentöne: Modul
  if( isset($rawdata['modul_stringS']) ) {
    $afterTitle[] = $rawdata['modul_stringS'];
  }

  // @todo: Data table

}

// WorldViews
//
if($portalId == 'worldviews') {

  // WorldViews: Modul
  if( isset($rawdata['format']) ) {
    $beforeTitle[] = implode(', ' , $rawdata['format']);
  }

  // WorldViews: Autor / Herausgeber
  if( isset($rawdata['author']) ) {
    $str = implode(', ', $rawdata['author']);
    $str .= ': ';
  }

  // WorldViews: Title
  if( isset($rawdata['textbook_stringS']) ) {
    $str .= $rawdata['textbook_stringS'];
    $str .= '. ';
  }

  // WorldViews: Verlag und Jahr
  $hasPublisher = isset($rawdata['publisher']);
  $hasPages     = isset($rawdata['pages_stringM']);

  if($hasPublisher || $datePublished || $hasPages) {
    $str .= $hasPublisher ? implode(' ', $rawdata['publisher']) : '';
    $str .= ($hasPublisher && $datePublished) ? ': ' : '';
    $str .= $datePublished ? $datePublished['year'] : '';
    $str .= ( ($hasPublisher || $datePublished) && $hasPages) ? ', ' : '';
    $str .= $hasPages ? implode(' ', $rawdata['pages_stringM']) . '.' : '';
  }

  $afterTitle[] = $str;

}

// Edu.data
//
if($portalId == 'edu_data') {
  $cover = false;

  // Edu.data: Country
  if( isset($rawdata['country_stringS']) ) {
    $beforeTitle[] = $rawdata['country_stringS'];
  }

  // Edu.data: State
  if( isset($rawdata['state_stringS']) ) {
    $beforeTitle[] = $rawdata['state_stringS'];
  }
}

// Edu.docs
//
if($portalId == 'edu_docs') {
  $cover = false;

  // Edu.docs: übergeordnetes Werk
  if( isset($rawdata['series']) ) {
    $beforeTitle[] = implode(', ', $rawdata['series']);
  }

  // Edu.docs: Author
  if( isset($rawdata['author']) ) {
    $afterTitle[] = implode(', ', $rawdata['author']);
  }
  elseif( isset($rawdata['contributor']) ) {
    $afterTitle[] = implode(', ', $rawdata['contributor']) . ' ' . $this->transEsc('gei_result_meta_publisher');
  }

  // Edu.docs: Verlag und Jahr
  $hasPublisher = isset($rawdata['publisher']);
  if($hasPublisher || $datePublished) {
    $str = '(';
    $str .= $hasPublisher ? implode(' ', $rawdata['publisher']) : '';
    $str .= ($hasPublisher && $datePublished) ? ', ' : '';
    $str .= $datePublished ? $datePublished['year'] : '';
    $str .= ')';
    $afterTitle[] .= $str;
  }
}

// Edu.news
//
if($portalId == 'edu_news') {
  $cover = false;

  // Edu.news: Event
  if(isset($rawdata['newsType_intS']) && $rawdata['newsType_intS'] === 1 ) {
    $beforeTitleData = $this->translate('gei_result_meta_event');
    // Start date
    if($rawdata['eventStart_intS'] !== 0) {
      $beforeTitleData .= ': ' . $this->escapeHtml($this->dateTime()->convertToDisplayDate("U", $rawdata['eventStart_intS']));
    }
    // End date
    $date_end = '';
    if($rawdata['eventEnd_intS'] !== 0) {
      $beforeTitleData .= ' – ' . $this->escapeHtml($this->dateTime()->convertToDisplayDate("U", $rawdata['eventEnd_intS']));
    }
    // Location
    $location = '';
    if(isset($rawdata['eventLocation_stringS'])) {
      $beforeTitleData .= ', ' . $this->escapeHtml($rawdata['eventLocation_stringS']);
    }
    $beforeTitle[] = $beforeTitleData;
  }

  // Edu.news: Post
  if(isset($rawdata['newsType_intS']) && $rawdata['newsType_intS'] === 0 ) {
    $beforeTitleData = $this->translate('gei_result_meta_news_date', [
      '%%date%%' =>$this->escapeHtml($this->dateTime()->convertToDisplayDate("U", $rawdata['newsDateTime_intS']))
    ]);
    $beforeTitle[] = $beforeTitleData;
  }
}

// Edu.reviews
//
if($portalId == 'edu_reviews') {
  $beforeTitleData = [];

  // Edu.reviews: Fach
  if( isset($rawdata['schoolSubjects_stringM']) ) {
    $beforeTitleData = array_merge($beforeTitleData, $rawdata['schoolSubjects_stringM']);
  }
  // Edu.reviews: Schulstufe
  if( isset($rawdata['academicYears_stringM']) ) {
    $beforeTitleData = array_merge($beforeTitleData,  $rawdata['academicYears_stringM']);
  }
  // Edu.reviews: Schulart
  if( isset($rawdata['typesOfSchool_stringM']) ) {
    $beforeTitleData = array_merge($beforeTitleData,  $rawdata['typesOfSchool_stringM']);
  }
  $beforeTitle[] = implode(', ', $beforeTitleData);

  // Edu.reviews: Herausgeber
  if( isset($rawdata['publisher_stringM']) ) {
    $dataTable[$this->transEsc('gei_result_data_publisher')] = implode(', ', $rawdata['publisher_stringM']);
  }

  // Edu.reviews: Verlag und Jahr
  $hasPublisher = isset($rawdata['publisher']);
  if($hasPublisher || $datePublished) {
    $str = $hasPublisher ? implode(' ', $rawdata['publisher']) : '';
    $str .= ($hasPublisher && $datePublished) ? ', ' : '';
    $str .= $datePublished ? $datePublished['year'] : '';
    $dataTable[$this->transEsc('gei_result_data_publishing_company')] = $str;
  }

  // Edu.reviews: Rezensent
  if( isset($rawdata['review.author']) ) {
    $dataTable[$this->transEsc('gei_result_data_reviewer')] = $rawdata['review.author'];
  }
}

?>
