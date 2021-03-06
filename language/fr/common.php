<?php
/**
*
* @package phpBB Extension - Paypal Donation
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Translate French by Takashi (http://www.covergraphd.com/)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'DONATEINDEX'							=> 'Donation',
	'VIEWING_DONATE'						=> 'Consulte la page de donation',
	'DONATION_SAVED'						=> '<strong>Paramètres de l\'extension Paypal Donation sauvegardés</strong>',
	'DONATION_VERSION'						=> 'Version',
	'DONATION_SETTINGS'						=> 'Configuration générale de l\'extension Paypal Donation',
	'DONATION_ENABLE'						=> 'Activer l\'extension Paypal Donation',
	'DONATION_ENABLE_EXPLAIN'				=> 'Permet d\'activer ou de désactiver l\'extension Paypal Donation.',
	'DONATION_INDEX_ENABLE'					=> 'Afficher les statistiques sur l\'index',
	'DONATION_INDEX_ENABLE_EXPLAIN'			=> 'Permet d\'afficher les statistiques de l\'extension Paypal Donation sur la page de l\'index du forum.',
	'DONATION_INDEX_TOP'					=> 'Afficher les statistiques en haut de l’index',
	'DONATION_INDEX_TOP_EXPLAIN'			=> 'Permet d’afficher les statistiques en haut de la page de l’index du forum.',
	'DONATION_INDEX_BOTTOM'					=> 'Afficher les statistiques en bas de l’index',
	'DONATION_INDEX_BOTTOM_EXPLAIN'			=> 'Permet d’afficher les statistiques en bas de la page de l’index du forum.',
	'DONATION_EMAIL'						=> 'Adresse e-mail du compte Paypal',
	'DONATION_EMAIL_EXPLAIN'				=> 'Permet de saisir l’adresse e-mail du compte Paypal à utiliser.',
	'DONATION_STATS_SETTINGS'				=> 'Configuration des statistiques de l’extension Paypal Donation',
	'DONATION_ACHIEVEMENT_ENABLE'			=> 'Afficher le montant des dons',
	'DONATION_ACHIEVEMENT_ENABLE_EXPLAIN'	=> 'Permet d’afficher le montant des dons.',
	'DONATION_ACHIEVEMENT'					=> 'Montant des dons',
	'DONATION_ACHIEVEMENT_EXPLAIN'			=> 'Permet de saisir le montant actuellement reçu grâce aux dons.',
	'DONATION_GOAL_ENABLE'					=> 'Afficher l’objectif des dons',
	'DONATION_GOAL_ENABLE_EXPLAIN'			=> 'Permet d’afficher l’objectif à atteindre grâce aux dons.',
	'DONATION_GOAL'							=> 'Objectif des dons',
	'DONATION_GOAL_EXPLAIN'					=> 'Permet de saisir le montant à réunir grâce aux dons.',
	'DONATION_GOAL_CURRENCY_ENABLE'			=> 'Afficher la devise des dons',
	'DONATION_GOAL_CURRENCY_ENABLE_EXPLAIN'	=> 'Permet d’afficher la devise des dons.',
	'DONATION_GOAL_CURRENCY'				=> 'Devise des dons',
	'DONATION_GOAL_CURRENCY_EXPLAIN'		=> 'Permet de saisir la devise affichée pour le montant et l’objectif des dons.',
	'DONATION_BODY_SETTINGS'				=> 'Configuration de la page de donation',
	'DONATION_BODY'							=> 'Texte de la page de donation',
	'DONATION_BODY_EXPLAIN'					=> 'Permet de saisir le texte à afficher sur la page de donation.<br /><br />Le language HTML est autorisé.',
	'DONATION_SUCCESS_SETTINGS'				=> 'Configuration de la page du succès d’un don',
	'DONATION_SUCCESS'						=> 'Texte du succès d’un don',
	'DONATION_SUCCESS_EXPLAIN'				=> 'Permet de saisir le texte à afficher sur la page de réussite d’un don.<br />Ceci est la page vers laquelle les utilisateurs sont redirigés lorsqu’ils ont réalisé un don.<br /><br />Le language HTML est autorisé.',
	'DONATION_CANCEL_SETTINGS'				=> 'Configuration de la page d’annulation d’un don',
	'DONATION_CANCEL'						=> 'Texte d’annulation d’un don',
	'DONATION_CANCEL_EXPLAIN'				=> 'Permet de saisir le texte à afficher sur la page d’annulation d’un don.<br />Ceci est la page vers laquelle les utilisateurs sont redirigés lorsqu’ils ont annulé un don.<br /><br />Le language HTML est autorisé.',
	'DONATION_DISABLED'						=> 'Nous sommes désolé, la page de donation est indisponible.',
	'DONATION_DISABLED_EMAIL'				=> 'L’e-mail du compte Paypal n’est pas configurée. Veuillez le communiquer au fondateur du forum.',
	'DONATION_NOT_INSTALLED_USER'			=> 'La page de donation n’est pas mise en place. Veuillez le communiquer au fondateur du forum.',
	'DONATION_TITLE'						=> 'Faire un don',
	'DONATION_CANCELLED_TITLE'				=> 'Don annulé',
	'DONATION_SUCCESSFULL_TITLE'			=> 'Don réalisé',
	'DONATION_CONTACT_PAYPAL'				=> 'Connexion vers Paypal - Veuillez patienter…',
	'DONATION_BODY_DEFAULT'					=> 'Merci de faire un don pour soutenir ce site et nous aider avec les coûts d’hébergement.',
	'DONATION_SUCCESS_DEFAULT'				=> 'Nous vous remercions pour votre don. Nous apprécions votre geste.',
	'DONATION_CANCEL_DEFAULT'				=> 'Vous avez annulé votre don. Ce n’est en aucun cas un problème, nous vous invitons à faire un don à l’avenir.',
	'DONATIONS_INDEX'						=> 'Donations',
	'DONATION_USD'							=> '$ dollar américain',
	'DONATION_EUR'							=> '€ euro',
	'DONATION_GBP'							=> '£ livre sterling',
	'DONATION_JPY'							=> '¥ yen',
	'DONATION_AUD'							=> '$ dollar australien',
	'DONATION_CAD'							=> '$ dollar canadien',
	'DONATION_HKD'							=> '$ dollar de Hong Kong',
	'DONATION_ACHIEVED'						=> 'Nous avons reçu %1$s <strong>%2$s</strong> en dons.',
	'DONATION_GOAL_ACHIEVED'				=> 'Notre objectif est de receuillir %1$s <strong>%2$s</strong>.',
));
