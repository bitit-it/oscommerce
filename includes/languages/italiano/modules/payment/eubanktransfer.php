<?php
/*
  $Id: eubanktransfer.php,v 1.8 2006/04/22 12:00:00 by Onkel Flo

	Thanks to all the developers from the EU-Standard Bank Transfer module $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Released under the GNU General Public License
*/

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_TITLE', 'Bonifico Bancario');
define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_DESCRIPTION', '' .
'<br />Le preghiamo di usare i dati riportati sotto per mandarci l\'importo totale dell\' Suo acquisto.
<br />Come scopo Le preghiamo di inserire il Suo numero dell\' ordine che Le verrà communicato tramite l\'email.<br />' .
'<br />Conto bancario: ' . MODULE_PAYMENT_EU_ACCOUNT_HOLDER .
'<br />IBAN: ' . MODULE_PAYMENT_EU_IBAN .
'<br />BIC / SWIFT: ' . MODULE_PAYMENT_EU_BIC .
'<br />Banca: ' . MODULE_PAYMENT_EU_BANKNAME .
'<br /><br />La merce verrà spedita dopo l\'avvenuto accredito sul nostro conto corrente!<br />');

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_EMAIL_FOOTER', 'Le preghiamo di usare i dati riportati sotto per mandarci l\'importo totale dell\' Suo acquisto.
Come scopo Le preghiamo di inserire il numero dell\' ordine.' . "\n\n" .
"conto bancario: " . MODULE_PAYMENT_EU_ACCOUNT_HOLDER . "\n\n" .
"IBAN: " . MODULE_PAYMENT_EU_IBAN . "\n\n" .
"BIC / SWIFT: " . MODULE_PAYMENT_EU_BIC . "\n\n" .
"Banca: " . MODULE_PAYMENT_EU_BANKNAME . "\n\n" .
'La merce verrà spedita dopo l\'avvenuto accredito sul nostro conto corrente!');
?>
