<?php
/**
*
* common [Hungarian]
*
* @package language
* @version $Id$
* @copyright (c) 2014 SiteSplat.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
  'UCP_MAIN'                	 => 'Áttekintés',
  'UCP_MAIN_FRONT'          	 => 'Címlap',
  'UCP_MAIN_SUBSCRIPTION'   	 => 'Előfizetések kezelése',
  'UCP_MAIN_BOOKMARKS'      	 => 'Könyvjelzők kezelése',
  'UCP_MAIN_DRAFTS'         	 => 'Vázlatok kezelése',
  'UCP_MAIN_ATTACHMENTS'    	 => 'Csatolmányok kezelése',
  
  'USER_PANEL'             	     => 'Vezérlőpult', 
  'UCP_PROFILE'             	 => 'Profil',   
  'UCP_PROFILE_PROFILE'    		 => 'Profil szerkesztése',   
  'UCP_PROFILE_SIGNITURE'  		 => 'Aláírás szerkezstése',   
  'UCP_PROFILE_AVATAR'      	 => 'Avatar szerkesztése',   
  'UCP_PROFILE_SETTINGS'    	 => 'Fiók beállítások',   
  'UCP_AVATAR_SELECT_OPTIONS'    => 'Avatar opciók', 
  'UCP_AVATAR_SELECT_UPLOAD'     => 'Avatar feltöltése',
  'UCP_SUBMIT_TO_UPLOAD'         => 'Feltöltés',
  
  'UCP_PREFERENCE'         		 => 'Fórum beállítások',
  'UCP_PREFERENCE_SETTINGS' 	 => 'Általános beállítások szerkesztése',
  'UCP_PREFERENCE_DEFAULTS' 	 => 'Alapértelmezett küldési beállítások',
  'UCP_PREFERENCE_OPTIONS'  	 => 'Kijelző beállítások szerkesztése',
  
  'UCP_MESSAGES'            	 => 'Üzenetek',   
  'UCP_PM_COMPOSE'          	 => 'Üzenet szerkesztése',   
  'UCP_PM_DRAFTS'           	 => 'Vázlatok kezelése',   
  'UCP_PM_INBOX'            	 => 'Bejövő',   
  'UCP_PM_OUTBOX'           	 => 'Kimenő',   
  'UCP_PM_SENTBOX'          	 => 'Elküldött',   
  'UCP_PM_OPTIONS'          	 => 'Szabályok, mappák &amp; beállítások', 
  'UCP_NO_USER_CHANGE_ALLOWED'   => '**Felhasználónév megváltoztatása nem lehetséges**',
  'UCP_REGISTER_EMAIL_EXPLAIN'   => 'Kérjük használj valós email címet',
  
  'WIDTH_SIZE'            	     => 'szélesség',   
  'PIXEL_SIZE'           	     => 'px',   
  'HEIGHT_SIZE'          	     => 'magasság',
  
  'UCP_GROUPS'              	 => 'Felhasználói csoportok',   
  'UCP_GROUPS_MEMBERSHIP'   	 => 'Tagság szerkesztése',   
  'UCP_GROUPS_MANAGE'       	 => 'Csoportok kezelése',   
  
  'UCP_ZEBRA'               	 => 'Barátok &amp; Tiltások',   
  'UCP_ZEBRA_FRIENDS'       	 => 'Barátok kezelése',   
  'UCP_ZEBRA_FOES'          	 => 'Tiltások kezelése', 
  'UCP_APPLY'                    => 'Alkalmaz', 
  'UCP_PM_DEFAULT_RULE_TAG'      => 'Alapértelmezett beállítások',
  'UCP_PM_DEFAULT_RULE'          => 'Nem fogadok új üzeneteket',
  'UCP_PM_DEFAULT_RULE_EXPLAIN'  => 'Nincs elég hely a fiókodban, nem tudsz új üzenetet fogadni amíg nincs elég tárhelyed.',
  'UCP_PM_NEW_MESSAGE'           => 'Új üzenet',
  'BIO'                          => 'Személyes információk',
  'MANAGE'                       => 'Kezelés',
  'JOINED_BOARD'                 => 'Csatlakoztál a Fórumhoz.',
  'VISITED_BOARD'                => 'Utoljára látogatott',
  'SEE_MORE'                     => 'Több',
  'ATTACH_SIGNATURE'             => 'Aláírás csatolása',

  'DELETE_POST_SOFT'             => 'Ideiglenes törlés',
  'DELETE_POST_PERMANENT'        => 'Végleges törlés',
  'DELETE_POST_SOFT_WARN'        => 'Visszahozható',
  'DELETE_POST_PERMANENT_WARN'   => 'Nem hozható vissza',
  
  'POLL_MAX_OPTIONS_EXPLAIN_ALT' => 'Max számú lehetőség amit felhszanáló kiválaszthat',
  'POLL_VOTE_CHANGE_LABEL'       => 'újra szavazás engedélyezése',
  'NO_VOTES_NA'                  => 'N/A',
  'NOT_AVAILABLE'                => 'Nem elérhető',
  'POST_TOPIC_NEW'               => 'Új téma',
  'QUICK_REPLY_SHOW_HIDE'        => 'Mutat/Elrejt Gyors Válasz',
  'CHARACTERS_COUNT'             => 'Karakterek',
  'CHARACTERS_COUNT_REM'         => 'Maradt',
  'BOOKMARKED_TOPICS_UCP'        => 'Könyvjelző',
  'ATTACH_EXPLANATION_SORTABLE'  => 'Kattints a sorrendért',
  'ATTACH_FORUM'                 => 'Csatolmány(ok)',
  'MCP_DETAILS_LOG'              => 'Adatok',
  'MCP_DETAIL_U_IP'              => 'Felhasználó &amp; IP',
  'MCP_MANAG_BAN'                => 'Tiltás kezelése',
  'MCP_UNAPPROVED_POSTS_ZERO'    => 'Nincs elfogadásra váró poszt',
  'MCP_REPORTS_ZERO'             => 'Nincsenek jelentések előnézetre',
  'MCP_PM_REPORTS_ZERO'          => 'Nincsenek PM jelentések előnézetre',
  
  
  'FORUMLIST_UNAPPROVED'         => 'Legalább egy téma ebben a fórumban nem lett jóváhagyva', 
  'FORUMLIST_UNAPPROVED_POST'    => 'Legalább egy komment ebben a fórumban nem lett jóváhagyva', 
  'FORUMLIST_LASTPOST'           => 'Legújabb komment megtekintése', 
  'TOPICS_POSTS_STATISTICS'      => 'Statisztika',
  'TOPICS_ROW_REPORTED'          => 'Téma jelentve',
  'TOPICS_ROW_NOT_APPROVED'      => 'Téma jóváhagyásra vár',
  'TOPICS_ROW_DELETED'           => 'Téma törölve',
  'MODERATOR_PANEL_GENERAL'      => 'Moderátor Felület',
  'ADMIN_PANEL_GENERAL'          => 'Adminisztrátor Felület',
  'RANK_IMAGE'                   => 'Rang fotó',
  
  'WELCOME_INDEX'                => 'Üdvözlünk',
  'FAQ'                          => 'GYIK',
  'CAPTION_FAQ'                  => 'Általános tudnivalók',
  'CAPTION_SEARCH'               => 'Keresés',
  'CAPTION_MEMBERS'              => 'Keresel valakit?',
  'MEMBERS_CAP'                  => 'Tagok',
  'CAPTION_UCP'                  => 'Kedvelt beállítások',
  'UCP_CAP'                      => 'Felhasználó Kezelő Felület',
  'INDEX_CAPTION'                => 'Ez a Fórum főoldal',
  'VIEWTOPIC_CAP'                => 'Téma cím',
  'CAPTION_VIEWTOPIC'            => 'Téma leírása',
  'CAPTION_VIEWFORUM'            => 'Keresés a fórum kategóriák között',
  'POSTINGS_CAP'                 => 'Komment kezelő',
  'CAPTION_POSTINGS'             => 'Kommentelj',
  
  'MCP_CAPTION'                  => 'Itt használhatod a Szupererőd :)',
  'BOOTSTRAP_ELEMENT'            => 'Bootstrap Elemek',
  'BOOTSTRAP_ELEMENT_CAPTION'    => 'Fórum Használati Dokumentáció',
  'MAIN_FORUM'                   => 'Fórum',
  'MAIN_MAIN_STUFF'              => 'Fő dolgok',
  'MAIN_TRENDS'                  => 'Trendek',
  
  'MAIN_SEARCH_IT_UP'            => 'Keresés',
  'SUB_NO_ICON'                  => 'Nincs ikon',
  'EXAMPLE_WITH_ICON'            => 'Példa ikonnal',
  'EXAMPLE_LINK'                 => 'Példa Link',
  'MAIN_SOCIAL'                  => 'Szociális',
  'SOCIAL_P'                     => 'Távol',
  
  'MORE'          				 => 'Több',
  'EXPAND_CLOSE'          		 => 'Közeli nézet',
  'MARK_TOPICS_READ'  			 => 'Olvasott témák',
  'CONTACT'           			 => 'Kontakt',
  'GET_IN_TOUCH'      			 => 'Kapcsolatfevétel',
  'HANG_AROUND'       			 => 'Benéz',
  'JOIN_THE_CLUB'     			 => 'Csatlakozik a klubhoz',
  'MENU'         				 => 'MENÜ',
  'YOU_ARE_HERE'      			 => 'Itt vagy',
  'IN_FOOTER'         			 => 'Benn:',
  'REPLY'        				 => 'Válasz',

  'LOGIN_REMEMBER'        		 => 'Belépve marad',
  'LOGIN_HIDE_ME'        		 => 'Rejtve marad',
  'LOGIN_ME_IN'        		     => 'Belépés',
  'SIGN_IN_ACCOUNT'        		 => 'Belépés',
  'CREATE_ACCOUNT'        		 => 'Regisztráció',
  'GO_TO_SEARCH_ADV'             => 'Visszatérés a kereséshez',
  
  'CREATE_ACCOUNT_DISABLED'      => 'Regisztráció zárva',
  'REGISTRATION_DISABLED'        => 'Úgy tűnik, hogy regisztráció jelenleg nem lehetséges. Lehetséges, hogy ez csak ideiglenes problémma. Ha úgy gondolod, hogy ez egy hibaüzenet, lépj kapcsolatba a webmesterrel. A felhasználási feltételeket keresd az oldal alján.',
  'CONTACT_WEBMASTER'        	 => 'Webmester kapcsolat',
  'CONFIRM_QA_EXPLAIN_ALT'       => 'Igazold, hogy valós személy vagy.',
  
  'PLUPLOAD_PLACE_INLINE'        => 'Szövegbe illesztve',
  'PLUPLOAD_DELETE_FILE'         => 'Törlés',
  
  
  'REG_CREATING'        		 => 'Profil készítése...',
  'LOADING'        				 => 'Töltés...',
  'SAVING'        				 => 'Mentés...',
  'CANCELLING'        			 => 'Elvetés...',
  'SENDING'        				 => 'Küldés...',
  'SEARCHING'        			 => 'Keresés...',
  'LOADING_LOG_IN'        		 => 'Bejelentkezés...',
  'FILE_UPLOADING'        		 => 'Feltöltés...',
  'CASTING_VOTE'        		 => 'Szavazás...',
  'LOADING_FORM'        		 => 'Töltés innen...',

  
  'MEMBERLIST_P_JOINED'          => 'Csatlakoztál a Fórumhoz',
  'MEMBERLIST_P_EXPL'            => 'Ekkor csatlakoztál a Fórumhoz',
  'MEMBERLIST_P_DATE_EXPL'       => 'Legutoljára látogattad a Fórumot',
  'SPAMMER_PLACEHOLDER'          => 'Ne spam-elj a Fórumba és menekülj el innen!',
  'MARK_PLACEHOLDER'      	     => 'Melyiket választod',
  'INFO_BOX'      			     => 'Információ:',
  'USER_REMOVE_PLACEHOLDER'      => 'Klikkelj a felhasználó eltávolításához',
  'GROUP_REMOVE_PLACEHOLDER'     => 'Klikkelj a csoport eltávolításához',
  'EDIT_LINK_PLACEHOLDER'        => 'Például rosszul írtam a link kódját',
  'POST_IT_UP_PLACEHOLDER'       => 'Komment',
  'MESSAGE_ENTER_PLACEHOLDER'    => 'Gépelj üzenetet...',
  'FILE_COMMENT_PLACEHOLDER'     => 'Mondj valamit a csatolmányról',
  'HEIGTH_PLACEHOLDER'       	 => 'magasság',
  'WIDTH_PLACEHOLDER'       	 => 'szélesség',
  'UCP_OCCUPATION_PLACEHOLDER'   => 'Mesélj tömören a foglalkozásodról...',
  'UCP_INTERESTS_PLACEHOLDER'    => 'Érdeklődési köreid...',
  'SOFT_DELETE_PLACEHOLDER'      => 'Ok, amiért itt vagy...',
  'ADD_DESCRIPTION'              => 'Leírás',
  
  'FILE_SELECT'       			 => 'File kiválasztása',
  'FILE_CHANGE'       			 => 'Változtat',
  'SELECT_IMAGE'       			 => 'Kép kiválasztása',
  'NOTE'       			         => 'Jegyzet',
  'EDIT_DRAFT'       			 => 'Vázlat szerkesztése',
  'PM_BALOON_NOTIFICATION'       => 'Lufi értesítés privát üzenet (PM) elérhető',
  'DAYS_AGO'       			     => 'Napokkal ezelőtt',
  'WORK_IN_PROGRESS'       		 => 'Karbantartás',
  'DISABLE_MESSAGE'              => 'Fórum nem elérhető',
  'DISABLE_RETURN'               => 'Vissza a főoldalra',
  'BOARD_DISABLED_SHUFFLE'       => 'Jó szórakozást, küldj néhány üzit! :)',
  'DISABLE_TEXT_TRY'             => 'Próbáld ki!',
  'DISABLE_TEXT_TYPE'            => 'gépelj valamit és küldd el...',
  
  'GRAVATAR_EXPLAIN'          	 => 'Ha már van <a href="//en.gravatar.com/" target="_blank">GRAVATAR</a> fiókod ezzel az email címmel, akkor a fotód automatikusan beállításra kerül.',
  'GRAVATAR_EXPLAIN_CONFIRM'     => 'Email cím jóváhagyása',
  
  'DELETE_POLL'       			 => 'Vélemény törlése',
  'POLL_DELETE_HELPER'       	 => '(Ez csak vélemények törlése) ellenőrzés és elfogadás',
  'JUMP_TO_POST'       			 => 'Komment',
  'JUMP_SELECT_FORUM'            => 'Válaszd ki a fórumot',
  'JUMP_TO_PAGE_NUMBER'          => 'Oldalra ugrás #',
  'VIEW_FIRST_UNREAD'            => 'Új kommentek',
  'BOOKMARK_TOPIC_REMOVE'        => 'Könyvjelző eltávolítása',
  
  'NEW_MESSAGES'	             => 'Új üzenetek',
  'YOU_HAVE'        	   		 => 'Neked',
  'AND'        					 => 'és',
  'HELLO'            		     => 'Szia',
  'DISMISS_PM'       			 => '5 percre elhalaszt',
  'READ_NOW'      			     => 'Olvas',
  'PRIVATE_MESSAGE_NEW'	         => 'új privát üzenet',
  'PRIVATE_MESSAGE_UNREAD'	     => 'olvasatlan privát üzenet',
  'NO_PMS_INFO'	                 => 'Mind átnézve! Új PM szerkesztése?',
  
  'DATES'       			     => 'DÁTUM',
  'POWERED'       			     => 'Készítette',
  'HANDCRAFTED'       			 => 'Készítette',
  'BY'       					 => 'Által',

  'RECENT_TOPICS'       		 => 'Újabb témák',
  'TWITTER'       				 => 'Twitter',
  'FAVORITES'       			 => 'Kedvencek',

  'GALLERY'       				 => 'Galéria',
  'CHAT'       					 => 'Chat',
  'ABOUT'       				 => 'Rólunk',
  'ABOUT_PART_ONE'       		 => 'BBOOTS&#8482; PhpBB&reg az első és egyetlen teljesen reszponzív; Nem hivatalos HTML5/CSS3 téma. Ez a tisztán kivehető és letisztult dizájn SZUPERÜL jelenik meg minden böngészőben és eszközön.',
  'ABOUT_PART_TWO'       		 => 'Sztenderd Bootstrap layout-okat használ, amit minden phpBB Fan Club tag nagyon várt.',
  'ABOUT_PART_THREE'       		 => 'Nem hivatalos reszponzív téma',
  'BB'       		             => 'B',
  'BOOTS'                		 => 'BOOTS',
  'BBOOTS'       		         => 'BBOOTS',
  
  'BBOOTS_VERSION'    			 => '<a href="http://www.sitesplat.com/phpBB3/">BBOOTS</a>',
  'U_LOGOUT'          			 => 'Kijelentkezés',

  'SITESPLAT_STATISTICS'		 => 'Statisztika',
  'SITESPLAT_SEE_DETAILS'		 => 'Adatok',
  'SITESPLAT_SEARCH_LAST_DAY'    => 'Elmúlt 24 óra kommentjei',
  'SITESPLAT_SEARCH_WEEK'		 => 'Elmúlt 7 nap kommentjei',
  
  'SITESPLAT_TOTAL_POSTS'		 => 'Összes komment',
  'SITESPLAT_TOTAL_TOPICS'	     => 'Összes téma',
  'SITESPLAT_TOTAL_USERS'		 => 'Összes tag',
  'SITESPLAT_NEWEST_MEMBER'		 => 'Legújabb tag',
  'SITESPLAT_USERS_ONLINE'		 => 'Online felhasználók',
  'SITESPLAT_MOST_USERS_ONLINE'	 => 'Online legtöbb felhasználó',
  
  'BOOTSTRAP_VERSION'	         => '3.3.5',
  'FLATBOOTS'	                 => 'FLATBOOTS',
  'CHANGE_AVATAR'	             => 'Avatar megváltoztatása',
  'CHANGE_PASSWORD'	             => 'Jelszó megváltoztatása',
  
  'ADMIN_TIPS'	                 => 'Admin Tippek &amp; Trükkök',
  'ADMIN_TIP_INTRO'	             => 'Tudtad, hogy néhány egyszerű lépéssel biztonságosabbá teheted a phpBB fórumodat?',
  'ADMIN_TIP_ONE'	             => 'A software-ed mindig legyen naprakész.',
  'ADMIN_TIP_TWO'	             => 'Mindig használj erős jelszót, ami véletlenszerűen tartalmaz betűket, számokat és speciális karaktereket.',
  'ADMIN_TIP_THREE'	             => 'Korlátozd az admin tárhely hozzáférését...',
  'ADMIN_CHECK_IT_BTN'	         => 'Több infóért látogass el a SiteSplat.com oldalra',
  
  'USER_MINI_PROFILE'	         => 'Felhasználói mini profil',
  'USER_MINI_PROFILE_VIEW_FULL'	 => 'Egész profil megtekintése',
  'OFF_LINE'	                 => 'Offline',
  'USER_STATUS'	                 => 'Státusz',
  'USER'	                     => 'Felhasználó',
  'TITLE'	                     => 'Cím',
  'END_TIMELINE'	             => 'Időrend vége',
  'MEMBERS'	                     => 'Tagok',
  'DRAFTS'	                     => 'Vázlatok',
  'REPORTS'	                     => 'Jelentések',
  'MODERATOR_LOGS'	             => 'Moderátor történet',
  'QUEUE'	                     => 'Lista',
  'LINKS'	                     => 'Linkek',
  'TOPIC_PERMISSIONS'	         => 'Engedélyezett témák',
  'MODERATOR_OPTIONS'	         => 'Mérsékelt',
  'PASSWORD_EXPLAIN_CONFIRM'	 => 'Biztos hogy egyezik',
  'FORUM_REDIRECTS'	             => 'Átirányítások:',
  
  'FANCY_TOPICS_TITLE'	         => 'Újabb témák a fórumban',
  'POST_BY'	                     => 'Komment',
  'REPLY_BY'	                 => 'Válasz',
  'NO_REPLIES'	                 => 'Nincs válasz',
  'READ_MORE'	                 => 'Olvass tovább',
  'RT_READ_MORE'	             => 'OLVASS TOVÁBB',
  'VIEW_MORE_TOPICS'	         => 'MÉG TÖBB TÉMA',
  'BACK_TO_START'	             => 'VISSZA AZ ELEJÉRE',
  
  'TOGGLE_NAV'	                 => 'Változtatás navigáció',
  
  'DEMO_LINK'	                 => 'Demo link nincs ikonok',
  'DEMO_HEADER_MENU'	         => 'Fejléc minta',
  
  'FLATBOOTS_INTRO'	             => 'Bootstrap Váz',
  'FLATBOOTS_EXPLAIN'	         => 'Több mint egy tucat újrahasznosítható alkatrészeket építettek, hogy ikonográfia, dropdown, Bejárati csoportok , navigáció, riasztások , és még sok más...',
  'CALL_TO_ACTION_FOOTER'        => 'Swap-in out addons, csak arra használd amire valóban szükséged van!',
  'PURCHASE_NOW_BTN'             => 'Vásárlás',
  'FLATBOOTS_ABOUT_PART_ONE'     => 'Miért érné be kevesebbel , ha lehet még? Ne hagyja, hogy más szerzők bolondítani üres Marketing Kulcsszavak . FLATBOOTS , amit megérdemel. Tartós, és a semmiből felépíteni , se kevesebb.',
  'FLATBOOTS_ABOUT_TITLE'	     => 'Tartós',
  'DMCA'	                     => 'DMCA',
  'TERMS'	                     => 'Kifejezések',
  'ADVERTISE'	                 => 'Reklám',
  'SITESPLAT'	                 => 'SiteSplat',
  'JOIN_US_TWITTER'	             => 'Kövess minket a Twitter-en',
  'TWEET_EXAMPLE'	             => 'BBOOTS elért 1000 eladást! Köszönet mindenkinek, akik támogatták ezt a csodálatos projektet és felépítették a SiteSplat Közösséget. Mi a következő? Maradj velünk és kövess minket a Twitter-en: <a href="#">http://bit.ly/000fefs</a>',
  
));

?>