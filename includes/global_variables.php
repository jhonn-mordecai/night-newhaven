<?php

if (substr($_SERVER["SERVER_ADDR"], 0, 7) == "192.168" || $_SERVER["SERVER_ADDR"] == "127.0.0.1" || $_SERVER["SERVER_ADDR"] == "::1") {

	define ("DB_SERVER", "localhost");
	define ("DB_USER", "root");
	define ("DB_PASS", "root");
	define ("DB_NAME", "night");
	define ("SITE_URL", "http://localhost/night");
	define ("IMG_PATH", "http://localhost/night/img");
	
} else {
	
	define ("DB_SERVER", "localhost");
	define ("DB_USER", "johnmord_admin");
	define ("DB_PASS", "ySIx;wi#cD1)");
	define ("DB_NAME", "johnmord_night");
	define ("SITE_URL", "http://nightnewhaven.club");
	define ("IMG_PATH", "http://nightnewhaven.club/img");
}

define ("CONTACT_EMAIL", "night.dance.partners@gmail.com");
define ("SITE_NAME", ":N I G H T:");
define ("APPEND_SITE_NAME_TO_PAGE_TITLE", false);

define ("META_DESCRIPTION", "NIGHT is a monthly dark dance party in New Haven, CT. A welcoming place for the Goths, Rivetheads, Baby Bats, Cyberpunks, Thrashers, Fetish Queens, Pastels, Elders, and the Dark-Curious. All will find a home in the recesses of ₦‡₲H†. GOTH - DARKWAVE - INDUSTRIAL - POST-PUNK - WITCH HOUSE - EBM - DEATH ROCK - ALL THINGS DARK");
define ("META_KEYWORDS", "night, new haven, night new haven, new haven goth night, connecticut goth, nhv, connecticut, ct, goth, club, goth club, goth night, dark dance party, dance party, club night, post-punk, darkwave, industrial, rivethead, ebm, new wave, witch house, partners, fetish, alternative, lgbtq, queer friendly, gay friendly, trans friendly");

?>