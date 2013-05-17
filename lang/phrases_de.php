<?php

// +++ Navigation

define("NAV_HOME", 				"Home");
define("NAV_HOME_TITLE", 		"Zur&ouml;ck zur Startseite");
define("NAV_HOME_ALT", 			"Bild: Home");

define("NAV_MAP", 				"Karte");
define("NAV_MAP_TITLE", 		"Titel - Karte");
define("NAV_MAP_ALT", 			"Bild: Karte");

define("NAV_JOIN_IN", 			"Mach mit");
define("NAV_JOIN_IN_TITLE", 	"Titel - Mach mit");
define("NAV_JOIN_IN_ALT", 		"Bild: Mach mit");

define("NAV_JOIN_IN_NEW_POI", 	"POI anlegen");

define("NAV_LOGIN", 			"Anmelden");
define("NAV_LOGIN_TITLE", 		"Titel - Anmelden");
define("NAV_LOGIN_ALT", 		"Bild: Anmelden");

define("NAV_PROFILE", 				"Profil");
define("NAV_PROFILE_TITLE", 		"Titel - Profil");
define("NAV_PROFILE_ALT", 			"Bild: Profil");

define("NAV_PROFILE_EDIT", 				"Profil bearbeiten");
define("NAV_PROFILE_EDIT_TITLE", 		"Titel - Profil bearbeiten");
define("NAV_PROFILE_EDIT_ALT", 			"Bild: Profil bearbeiten");

define("NAV_MESSAGES", 			"Mitteilungen");
define("NAV_MESSAGES_TITLE", 	"Titel - Mitteilungen");
define("NAV_MESSAGES_ALT", 		"Bild: Mitteilungen");

define("NAV_NEW_MESSAGES", 			"Neue Mitteilungen");
define("NAV_NEW_MESSAGES_TITLE", 	"Titel - Neue Mitteilungen");
define("NAV_NEW_MESSAGES_ALT", 		"Bild: Neue Mitteilungen");

define("NAV_CONTACT", 			"Kontakt");
define("NAV_CONTACT_TITLE", 	"Treten Sie mit uns in Kontakt");
define("NAV_CONTACT_ALT", 		"Bild: Kontakt");

define("NAV_ABOUT", 			"About");
define("NAV_ABOUT_TITLE", 		"Lernen Sie uns genauer kennen");
define("NAV_ABOUT_ALT", 		"Bild: About");

define("NAV_FAQ", 			"FAQ");
define("NAV_FAQ_TITLE", 		"Titel - FAQ");
define("NAV_FAQ_ALT", 		"Bild: FAQ");

define("NAV_HELP", 			"Hilfe");
define("NAV_HELP_TITLE", 		"Titel - Hilfe");
define("NAV_HELP_ALT", 		"Bild: Hilfe");

define("NAV_GALLERY", 			"Galerie");
define("NAV_GALLERY_TITLE", 		"Titel - Galerie");
define("NAV_GALLERY_ALT", 		"Bild: Galerie");

define("NAV_STYLEGUIDE", 			"Styleguide");
define("NAV_STYLEGUIDE_TITLE", 		"Titel - Styleguide");
define("NAV_STYLEGUIDE_ALT", 		"Bild: Styleguide");

define("NAV_REGISTER", 			"Registrieren");
define("NAV_REGISTER_TITLE", 	"Services");
define("NAV_REGISTER_ALT", 		"Bild: Services");

define("NAV_LEGAL", 			"Impressum");
define("NAV_LEGAL_TITLE", 		HTML_TITLE . " Impressum");
define("NAV_LEGAL_ALT", 		"Bild: Impressum");

define("A_NEXT", 				"Weiter");
define("A_NEXT_TITLE", 			"Zur nächsten Seite");
define("A_NEXT_ALT", 			"Bild: Weiter");

define("A_BACK", 				"Zurück");
define("A_BACK_TITLE", 			"Zur vorherigen Seite");
define("A_BACK_ALT", 			"Bild: Zurück");

// --- Navigation

// +++ Fehlermeldungen

define("ERR_NO_JS_ENABLED", 	"Sie haben möglicherweise JavaScript in Ihrem Browser nicht aktiviert, oder Ihr Browser unterstützt JavaScript nicht.");

define("ERR_NAME_NOT_VALID","Ihr Name ist ungültig.");
define("ERR_SUBJECT_NOT_VALID","Ihr Betreff ist ungültig.");
define("ERR_MESSAGE_NOT_VALID","Ihre Nachricht ist ungültig.");
define("ERR_REQUIRED","Füllen Sie bitte alle Pflichtfelder aus.");

define("ERR_USERNAME_ALREADY_ASSIGNED","Benutzername bereits vergeben.");
define("ERR_USERNAME_NOT_VALID","Benutzername ungültig.");

define("ERR_EMAIL_ALREADY_ASSIGNED","E-Mail-Adresse bereits vergeben.");
define("ERR_EMAIL_NOT_VALID","Ihre E-Mail-Adresse ist ungültig.");

define("ERR_LOGIN_NOT_VALID","Sie haben eine ungültige Anmeldekombination angegeben.");
define("ERR_LOGIN_BLOCKED","Sie dürfen sich zur Zeit nicht am System anmelden!");

define("ERR_VISIBILITY_NOT_VALID","Sichtbarkeit ungültig.");
define("ERR_FIRST_NAME_NOT_VALID","Ihr Vorname ist ungültig.");
define("ERR_LAST_NAME_NOT_VALID","Ihr Nachname ist ungültig.");
define("ERR_SEX_NOT_VALID","Geschlecht ungültig.");
define("ERR_HOMEPAGE_NOT_VALID","Ihre Homepage ist ungültig.");
define("ERR_BIRTHDAY_NOT_VALID","Ihr Geburtstag ist ungültig.");
define("ERR_FACEBOOK_NOT_VALID","Ihr Facebook Benutzername ist ungültig.");
define("ERR_TWITTER_NOT_VALID","Ihr Twitter Benutzername ist ungültig.");
define("ERR_NO_CHANGES","Bevor Sie das Formular abschicken können müssen Sie Änderungen vornehmen.");

define("ERR_PASSWORDS_NOT_EQUAL", "Ihre Passwörter stimmen nicht überein.");
define("ERR_PASSWORD_NOT_STRONG_ENOUGH", "Wählen Sie bitte ein sicheres Passwort.");

define("ERR_POINAME_NOT_VALID", "Die Bezeichnung Ihres POIs ist ungültig.");
define("ERR_POI_CATEGORY_NOT_VALID", "Wählen Sie bitte eine Kategorie aus.");
define("ERR_RATING_NOT_VALID", "Ihre Bewertung ist ungültig.");
define("ERR_POI_ZIP_NOT_VALID", "Ihre Postleitzahl ist ungültig.");
define("ERR_POI_ADDRESS_ALREADY_ASSIGNED","Adresse bereits in unserer Datenbank vorhanden.");
define("ERR_POI_ADDRESS_NOT_VALID","Ihre Adresse ist ungültig.");

// --- Fehlermeldungen

// +++ Erfolgsmeldungen

define("SUC_EMAIL_TRANSMISSION","Ihre Nachricht wurde erfolgreich versendet.
								Wir werden uns ggf. in Kürze bei Ihnen melden.");
define("SUC_USER_CREATION", "Sie haben sich erfolgreich registriert.");
define("SUC_USER_ACTIVATION", "Ihr Benutzerkonto wurde aktiviert.");
define("SUC_USER_LOGIN", "Sie haben sich erfolgreich angemeldet.");
define("SUC_USER_LOGOUT", "Sie haben sich erfolgreich abgemeldet.");
define("SUC_EDIT_PROFILE", "Sie haben Ihr Profil erfolgreich bearbeitet.");

// --- Erfolgsmeldungen

// +++ Hinweise

define("HINT_USERNAME_MIN_LENGTH","Ihr Benutzername muss mind. ".MIN_CHARS_USERNAME." Buchstaben/Zahlen besitzen.");
define("HINT_USERNAME_MAX_LENGTH","Ihr Benutzername darf sich aus höchstens ".MAX_CHARS_USERNAME." Buchstaben/Zahlen zusammensetzen.");
define("HINT_USERNAME_PERMITTED_CHARS","Ihr Benutzername darf ausschließlich aus Buchstaben und Zahlen bestehen.");

define("HINT_NAME_MIN_LENGTH","Ihr Name muss mind. ".MIN_CHARS_NAME." Buchstaben besitzen.");
define("HINT_NAME_MAX_LENGTH","Ihr Name darf höchstens ".MAX_CHARS_NAME." Buchstaben besitzen.");
define("HINT_NAME_PERMITTED_CHARS","Ihr Name darf ausschließlich aus Buchstaben bestehen.");

define("HINT_EMAIL_MAX_LENGTH","Ihre E-Mail-Adresse darf höchstens ".MAX_CHARS_EMAIL." Zeichen besitzen.");

define("HINT_SUBJECT_MIN_LENGTH","Ihr Betreff muss mind. ".MIN_CHARS_SUBJECT." Zeichen besitzen.");
define("HINT_SUBJECT_MAX_LENGTH","Ihr Betreff darf höchstens ".MAX_CHARS_SUBJECT." Zeichen besitzen.");

define("HINT_MESSAGE_MIN_LENGTH","Ihre Nachricht muss mind. ".MIN_CHARS_MESSAGE." Zeichen besitzen.");
define("HINT_MESSAGE_MAX_LENGTH","Ihre Nachricht darf höchstens ".MAX_CHARS_MESSAGE." Zeichen besitzen.");

define("HINT_PASSWORD_MIN_LENGTH","Ihr Passwort muss mind. ".MIN_CHARS_PASSWORD." Buchstaben besitzen.");
define("HINT_PASSWORD_MAX_LENGTH","Ihr Passwort darf höchstens ".MAX_CHARS_PASSWORD." Buchstaben besitzen.");

define("HINT_USER_ACTIVATION", "Damit Sie sich anmelden können, müssen Sie den Aktivierungslink in der E-Mail,
		die automatisch an die von Ihnen hinterlegte E-Mail-Adresse versandt wurde, betätigen.");
// --- Hinweise

?>