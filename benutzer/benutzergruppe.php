<?php
/**
 * Definiert die einzelnen Benutzergruppen und deren Rechte.
 * 
 * @autor	Philipp Bornemann
 * @copyright	2017 Calmedia Software
 * @version	1.0.x (Codename: Daylight)
 * @lizenz	CalMediaBoard Lizenz v1.0 <http://calmedia-software.de/lizenz/cmb_lizenz10.txt>
 */

$benutzergruppe = array();

// Benutzerrechte (1 = hat die Berechtigung, 0 = hat die Berechtigung nicht)

// Administrator
$benutzergruppe[] = array('gruppe' => 'Administrator',
			  'kann_forum_betreten' => 1, // Global
			  'kann_admincp_betreten' => 1,
			  'kann_themen_sehen' => 1, // Forum
			  'kann_themen_erstellen' => 1,
			  'kann_beiträge_sehen' => 1,
			  'kann_beiträge erstellen' => 1,
			  'kann_themen_bearbeiten' => 1, // Moderation
			  'kann_themen_löschen' => 1,
			  'kann_themen_schließen' => 1,
			  'kann_beiträge_bearbeiten' => 1,
			  'kann_beiträge_löschen' => 1);

// Moderator
$benutzergruppe[] = array('gruppe' => 'Moderator',
			  'kann_forum_betreten' => 1, // Global
			  'kann_admincp_betreten' => 0,
			  'kann_themen_sehen' => 1, // Forum
			  'kann_themen_erstellen' => 1,
			  'kann_beiträge_sehen' => 1,
			  'kann_beiträge erstellen' => 1,
			  'kann_themen_bearbeiten' => 1, // Moderation
			  'kann_themen_löschen' => 1,
			  'kann_themen_schließen' => 1,
			  'kann_beiträge_bearbeiten' => 1,
			  'kann_beiträge_löschen' => 1);

// Mitglied
$benutzergruppe[] = array('gruppe' => 'Mitglied',
			  'kann_forum_betreten' => 1, // Global
			  'kann_admincp_betreten' => 0,
			  'kann_themen_sehen' => 1, // Forum
			  'kann_themen_erstellen' => 1,
			  'kann_beiträge_sehen' => 1,
			  'kann_beiträge erstellen' => 1,
			  'kann_themen_bearbeiten' => 0, // Moderation
			  'kann_themen_löschen' => 0,
			  'kann_themen_schließen' => 0,
			  'kann_beiträge_bearbeiten' => 0,
			  'kann_beiträge_löschen' => 0);

// Nicht aktiviert
$benutzergruppe[] = array('gruppe' => 'Nicht aktiviert',
			  'kann_forum_betreten' => 1, // Global
			  'kann_admincp_betreten' => 0,
			  'kann_themen_sehen' => 1, // Forum
			  'kann_themen_erstellen' => 0,
			  'kann_beiträge_sehen' => 1,
			  'kann_beiträge erstellen' => 0,
			  'kann_themen_bearbeiten' => 0, // Moderation
			  'kann_themen_löschen' => 0,
			  'kann_themen_schließen' => 0,
			  'kann_beiträge_bearbeiten' => 0,
			  'kann_beiträge_löschen' => 0);

// Gesperrt
$benutzergruppe[] = array('gruppe' => 'Gesperrt',
			  'kann_forum_betreten' => 0, // Global
			  'kann_admincp_betreten' => 0,
			  'kann_themen_sehen' => 0, // Forum
			  'kann_themen_erstellen' => 0,
			  'kann_beiträge_sehen' => 0,
			  'kann_beiträge erstellen' => 0,
			  'kann_themen_bearbeiten' => 0, // Moderation
			  'kann_themen_löschen' => 0,
			  'kann_themen_schließen' => 0,
			  'kann_beiträge_bearbeiten' => 0,
			  'kann_beiträge_löschen' => 0);
?>