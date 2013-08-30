<?php
require 'poparser.php';

if (! isset($_GET['lang'])) {
	$_GET['lang'] = 'id_ID';
}
$template_file = '../vafpress-framework.pot';
$trans_file = '../lang/'.$_GET['lang'].'.po';

if ( ! file_exists($trans_file)) {
	$template_str = file_get_contents($template_file);
	file_put_contents($trans_file, $template_str);
}

$existing_files = scandir('../lang');
$entries = array();
foreach($existing_files as $file) {
	if ($file == '.' || $file == '..') continue;
	$file = str_replace('.po', '', $file);
	$file = str_replace('.mo', '', $file);
	if ( ! in_array($file, $entries)) {
		$entries[] = $file;
	}
}

$temp_entries = array();
foreach($entries as $entry) {
	$temp_entries[] = "'".$entry."'";
}
$entries_imploded = implode(',', $temp_entries);

$parser = new I18n_Pofile();
$template = $parser->read($template_file);
$trans_parser = new I18n_Pofile();
$trans = $trans_parser->read($trans_file);

$template_arr = array();
$trans_arr = array();
foreach($template as &$temp) {
	if (is_string($temp['msgid'])) {
		$temp['fullmsgid'] = $temp['msgid'];
	}
	if (is_array($temp['msgid'])) {
		$temp['fullmsgid'] = implode($temp['msgid']);
	}
	$template_arr[$temp['fullmsgid']] = $temp['msgstr'];
}
foreach($trans as &$tr) {
	if (is_string($tr['msgid'])) {
		$tr['fullmsgid'] = $tr['msgid'];
	}
	if (is_array($tr['msgid'])) {
		$tr['fullmsgid'] = implode($tr['msgid']);
	}
	$trans_arr[$tr['fullmsgid']] = array(
		'fullmsgid' => $tr['fullmsgid'],
		'msgid' => $tr['msgid'],
		'msgstr' => $tr['msgstr']
	);
}

// compare both
$result_arr = array();
foreach($template_arr as $temp_key => $temp_val) {
	if (isset($trans_arr[$temp_key])) {
		$result_arr[] = $trans_arr[$temp_key];
	}
}