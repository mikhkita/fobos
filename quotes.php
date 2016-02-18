<?
	include_once dirname(__FILE__).'/simple_html_dom.php';
	$html = file_get_html("http://www.quote-spy.com/");
	$temp = array();
	$temp['usd']['val'] = $html->find("[id='ForexUSD/RUBPrice']",0)->plaintext;
	$temp['usd']['change'] = str_replace("-", "- ", $html->find("[id='ForexUSD/RUBChange']",0)->plaintext);
	$temp['eur']['val'] = $html->find("[id='ForexEUR/RUBPrice']",0)->plaintext;
	$temp['eur']['change'] = str_replace("-", "- ", $html->find("[id='ForexEUR/RUBChange']",0)->plaintext);
	$temp['micex']['val'] = $html->find("[id*='MICEXPrice']",0)->plaintext;
	$temp['micex']['change'] = str_replace("-", "- ", $html->find("[id*='MICEXChange']",0)->plaintext);
	$temp['rtsi']['val'] = $html->find("[id*='RTSIPrice']",0)->plaintext;
	$temp['rtsi']['change'] = str_replace("-", "- ", $html->find("[id*='RTSIChange']",0)->plaintext);
	$temp['brent']['val'] = $html->find("[id*='BrentPrice']",0)->plaintext;
	$temp['brent']['change'] = str_replace("-", "- ", $html->find("[id*='BrentChange']",0)->plaintext);
	echo json_encode($temp);
?>