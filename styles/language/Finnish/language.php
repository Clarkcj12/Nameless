<<<<<<< HEAD
﻿<?php 
=======
<?php 
>>>>>>> upstream/master
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

/*
 *  Finnish Language
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
<<<<<<< HEAD
	'admin_cp' => 'AdminCP', 
	'infractions' => 'Rikkomuksista',
	'invalid_token' => 'Erääntynyt istunto, yritä uudelleen.',
	'invalid_action' => 'Virheellinen toiminto',
	'successfully_updated' => 'Päivitetty onnistuneesti',
	'settings' => 'Asetukset',
	'confirm_action' => 'Varmista toiminto',
	'edit' => 'Muokkaa',
	'actions' => 'Toiminnot',
	'task_successful' => 'Tehtävä suoritettu onnistuneesti',
	
	// Admin login
	're-authenticate' => 'Uudelleentodenna itsesi',
	
	// Admin sidebar
	'index' => 'Yleisnäkymä',
	'announcements' => 'Announcements',
	'core' => 'Ydin',
	'custom_pages' => 'Omat sivut',
	'general' => 'Yleinen',
	'forums' => 'Foorumit',
	'users_and_groups' => 'Käyttäjät ja käyttäjäryhmät',
	'minecraft' => 'Minecraft',
	'style' => 'Tyyli',
	'addons' => 'Lisäosat',
	'update' => 'Päivitys',
	'misc' => 'Sekalainen',
	'help' => 'Help',
	
	// Admin index page
	'statistics' => 'Statistiikat',
	'registrations_per_day' => 'Rekisteröinnit päivässä (viimeiset 7 päivää)',
	
	// Admin announcements page
	'current_announcements' => 'Current Announcements',
	'create_announcement' => 'Create Announcement',
	'announcement_content' => 'Announcement Content',
	'announcement_location' => 'Announcement Location',
	'announcement_can_close' => 'Can close announcement?',
	'announcement_permissions' => 'Announcement Permissions',
	'no_announcements' => 'No announcements created yet.',
	'confirm_cancel_announcement' => 'Are you sure you want to cancel this announcement?',
	'announcement_location_help' => 'Ctrl-click to select multiple pages',
	'select_all' => 'Select All',
	'deselect_all' => 'Deselect All',
	'announcement_created' => 'Announcement successfully created',
	'please_input_announcement_content' => 'Please input announcement content and select a type',
	'confirm_delete_announcement' => 'Are you sure you want to delete this announcement?',
	'announcement_actions' => 'Announcement Actions',
	'announcement_deleted' => 'Announcement successfully deleted',
	'announcement_type' => 'Announcement Type',
	'can_view_announcement' => 'Can view announcement?',
	
	// Admin core page
	'general_settings' => 'Pääasetukset',
	'modules' => 'Moduulit',
	'module_not_exist' => 'Moduulia ei ole olemassa!',
	'module_enabled' => 'Moduuli käytössä.',
	'module_disabled' => 'Moduuli pois käytöstä.',
	'site_name' => 'Sivuston nimi',
	'language' => 'Kieli',
	'voice_server_not_writable' => 'core/voice_server.php ei ole muokattava. Tarkista tiedosto-oikeudet.',
	'email' => 'Sähköposti',
	'incoming_email' => 'Saapuva sähköpostiosoite',
	'outgoing_email' => 'Lähtevä sähköpostiosoite',
	'outgoing_email_help' => 'Vaadittu vain jos php mail on käytössä',
	'use_php_mail' => 'Käytä PHP_mail() funktiota?',
	'use_php_mail_help' => 'Suositeltu: käytössä. Jos sivustosi ei lähetä sähköpostia, muokkaa ja poista käytöstä core/email.php sähköpostiasetuksista.',
	'use_gmail' => 'Käytä Gmailia sähköpostin lähettämiseen?',
	'use_gmail_help' => 'Saatavilla vain, jos PHP_mail() funktio ei ole käytössä. Jos et valitse käytettäväksi Gmailia, käytetään SMTP. Joka tapauksessa tämä tarvitsee konfiguroinnin core/email.php.',
	'enable_mail_verification' => 'Ota sähköpostivarmistus käyttöön?',
	'enable_email_verification_help' => 'Tämä lähettää sähköpostin käyttäjän valitsemaan sähköpostiin, joka tulee vahvistaa suorittaakseen rekisteröinnin kokonaan.',
	'explain_email_settings' => 'The following is required if the "Use PHP mail() function" option is <strong>disabled</strong>. You can find documentation on these settings <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">on our wiki</a>.',
	'email_config_not_writable' => 'Your <strong>core/email.php</strong> file is not writable. Please check file permissions.',
	'pages' => 'Sivut',
	'enable_or_disable_pages' => 'Ota käyttöön/poista käytöstä sivut täällä.',
	'enable' => 'Ota käyttöön',
	'disable' => 'Ota pois käytöstä',
	'maintenance_mode' => 'Foorumin huoltokatko -tila',
	'forum_in_maintenance' => 'Foorumi on huoltokatkolla.',
	'unable_to_update_settings' => 'Asetuksia ei voitu päivittää. Varmista, ettei jäänyt tyhjiä kohtia.',
	'editing_google_analytics_module' => 'Muokataan Google Analytics -moduulia.',
	'tracking_code' => 'Seurantakoodi',
	'tracking_code_help' => 'Aseta Google Analytics seurantakoodi tähän ympäröivien script tagien kanssa.',
	'google_analytics_help' => 'Katso <a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">tämä ohje</a> lisätietoihim, seuraten askeleita 1-3.',
	'social_media_links' => 'Some linkit',
	'youtube_url' => 'YouTube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Use dark Twitter theme?',
	'twitter_widget_id' => 'Twitter Widget ID',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'registration' => 'Rekisteröinti',
	'registration_warning' => 'Tämä moduuli otettuna pois käytöstä estää uusien käyttäjien rekisteröitymisen.',
	'google_recaptcha' => 'Ota Google reCAPTCHA käyttöön',
	'recaptcha_site_key' => 'reCAPTCHA Sivustoavain',
	'recaptcha_secret_key' => 'reCAPTCHA Salainen avain',
	'registration_terms_and_conditions' => 'Rekisteröitymisen käyttöehdot ja säännöt',
	'voice_server_module' => 'Äänipalvelin moduuli',
	'only_works_with_teamspeak' => 'Tämä moduuli toimii tällähetkellä vain TeamSpeakin kanssa.',
	'discord_id' => 'Discord Server ID',
	'voice_server_help' => 'Kirjoita yksityiskohdat käyttäjän ServerQuerya varten.',
	'ip_without_port' => 'IP (ilman porttia)',
	'voice_server_port' => 'Portti (yleensä 10011)',
	'virtual_port' => 'Virtuaaliportti (yleensä 9987)',
	'permissions' => 'Oikeuset:',
	'view_applications' => 'Näytä hakemukset?',
	'accept_reject_applications' => 'Hyväksy/Hylkää hakemuksia?',
	'questions' => 'Kysymykset',
	'question' => 'Kysymys',
	'type' => 'Tyyppi',
	'options' => 'Valinnat',
	'options_help' => 'Jokainen valinta omalla rivillään; voi jättää tyhjäkai (vain pudotusvalikoille)',
	'no_questions' => 'Kysymyksiä ei ole lisätty vielä.',
	'new_question' => 'Uusi kysymys',
	'editing_question' => 'Muokkaa kysymystä',
	'delete_question' => 'Poista kysymys',
	'dropdown' => 'Pudotusvalikko',
	'text' => 'Teksti',
	'textarea' => 'Tekstialue',
	'question_deleted' => 'Kysymys poistettu.',
	'use_followers' => 'Use followers?',
	'use_followers_help' => 'If disabled, the friends system will be used.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Klikkaa sivua muokataksesi sitä.',
	'page' => 'Sivu',
	'url' => 'Osoite:',
	'page_url' => 'Sivun osoite',
	'page_url_example' => '("/" edessä, esimerkiksi /help/)',
	'page_title' => 'Sivun otsikko',
	'page_content' => 'Sisältö',
	'new_page' => 'Uusi sivu',
	'page_successfully_created' => 'Sivu luotu onnistuneesti.',
	'page_successfully_edited' => 'Sivu muokattu onnistuneesti.',
	'unable_to_create_page' => 'Sivua ei ole mahdollista luoda.',
	'unable_to_edit_page' => 'Sivua ei ole mahdollista muokata.',
	'create_page_error' => 'Varmista, että osoite on 1-20 merkkiä pitkä, sivun otsikko 1-30 ja sisältö 5-20480 merkkiä pitkä.',
	'delete_page' => 'Poista sivu',
	'confirm_delete_page' => 'Oletko varma, että haluat poistaa tämän sivun?',
	'page_deleted_successfully' => 'Sivu poistettu onnistuneesti',
	'page_link_location' => 'Näytä sivun linkki:',
	'page_link_navbar' => 'Navigaatiopalkki',
	'page_link_more' => 'Navigaatiopalkki "Lisää" pudotusvalikko',
	'page_link_footer' => 'Sivun alatunniste',
	'page_link_none' => 'Sivulla ei ole linkkiä',
	'page_permissions' => 'Page Permissions',
	'can_view_page' => 'Can view page:',
	'redirect_page' => 'Redirect page?',
	'redirect_link' => 'Redirect link',
	'page_icon' => 'Page Icon',
	
	// Admin forum page
	'labels' => 'Aiheleima',
	'new_label' => 'Uusi leima',
	'no_labels_defined' => 'Leimoja ei ole määritetty.',
	'label_name' => 'Leiman nimi',
	'label_type' => 'Leiman tyyppi',
	'label_forums' => 'Leiman foorumit',
	'label_creation_error' => 'Leimaa ei voitu luoda. Varmista ettei leima ole yli 32 merkkiä pitkä ja että sinulla on määritetty tyyppi.',
	'confirm_label_deletion' => 'Oletko varma, rttä haluat poistaa tämän leiman?',
	'editing_label' => 'Muokkaa leimaa',
	'label_creation_success' => 'Leima luotu onnistuneesti',
	'label_edit_success' => 'Leima muokattu onnistuneesti',
	'label_default' => 'Oletus',
	'label_primary' => 'Ensisijainen',
	'label_success' => 'Onnistunut',
	'label_info' => 'Ilmoitus',
	'label_warning' => 'Varoitus',
	'label_danger' => 'Vaara',
	'new_forum' => 'Uusi foorumi',
	'forum_layout' => 'Foorumin pohjapiirros',
=======
	'admin_cp' => 'Ylläpito',
	'infractions' => 'Rikkeet',
	'invalid_token' => 'Virheellinen token, yritä myöhemmin uudelleen.',
	'invalid_action' => 'Virheellinen toiminto',
	'successfully_updated' => 'Päivitetty onnistuneesti',
	'settings' => 'Asetukset',
	'confirm_action' => 'Vahvista toiminto',
	'edit' => 'Muokkaa',
	'actions' => 'Toiminnot',
	'task_successful' => 'Tehtävä onnistui.',
	
	// Admin login
	're-authenticate' => 'Uudelleentunnistaudu',
	
	// Admin sidebar
	'index' => 'Yleisnäkymä',
	'announcements' => 'Tiedotteet',
	'core' => 'Core',
	'custom_pages' => 'Mukautetut sivut',
	'general' => 'Yleinen',
	'forums' => 'Foorumit',
	'users_and_groups' => 'Käyttäjät ja Ryhmät',
	'minecraft' => 'Minecraft',
	'style' => 'Ulkoasu',
	'addons' => 'Lisäosat',
	'update' => 'Päivitä',
	'misc' => 'Sekalainen',
	'help' => 'Apu',
	
	// Admin index page
	'statistics' => 'Tilastot',
	'registrations_per_day' => 'Rekisteröinnit per päivä (viimeiset 7 päivää)',
	
	// Admin announcements page
	'current_announcements' => 'Nykyiset tiedotteet',
	'create_announcement' => 'Luo tiedote',
	'announcement_content' => 'Tiedotteen sisältö',
	'announcement_location' => 'Tiedotteen sijainti',
	'announcement_can_close' => 'Tiedotteen voi sulkea?',
	'announcement_permissions' => 'Tiedotteen oikeudet',
	'no_announcements' => 'Tiedotteita ei ole luotu.',
	'confirm_cancel_announcement' => 'Oletko varma, että haluat peruuttaa tämän tiedotteen?',
	'announcement_location_help' => 'Ctrl-click valitaksesi useampia sivuja.',
	'select_all' => 'Valitse kaikki',
	'deselect_all' => 'Poista valinnat',
	'announcement_created' => 'Tietote luotu onnistuneesti',
	'please_input_announcement_content' => 'Kirjoita tiedotteen sisältö ja valitse tyyppi',
	'confirm_delete_announcement' => 'Oletko varma, että haluat poistaa tämän tiedotteen=',
	'announcement_actions' => 'Toiminnot',
	'announcement_deleted' => 'Tiedote poistettu onnistuneesti',
	'announcement_type' => 'Tiedotteen tyyppi',
	'can_view_announcement' => 'Tiedotetta voi katsella?',
	
	// Admin core page
	'general_settings' => 'Yleiset asetukset',
	'modules' => 'Moduulit',
	'module_not_exist' => 'Tätä moduulia ei ole olemassa.',
	'module_enabled' => 'Moduuli käytösä',
	'module_disabled' => 'Moduuli pois käytöstä',
	'site_name' => 'Sivun nimi',
	'language' => 'Kieli',
	'voice_server_not_writable' => 'core/voice_server.php ei ole kirjoitettavissa. Katso tiedoston käyttöoikeudet.',
	'email' => 'Sähköpostiosoite',
	'incoming_email' => 'Saapuva sähköpostiosoite',
	'outgoing_email' => 'Lähtevä sähköpostiosoite',
	'outgoing_email_help' => 'Vaadittu vain, jos php_mail() toiminto on käytössä.',
	'use_php_mail' => 'Käytä php_mail() toimintoa?',
	'use_php_mail_help' => 'Suositeltu: käytössä. Jos sivustosi ei lähetä viestejä, poista tämä käytöstäja muokkaa core/email.php tiedosto sähköpostiasetuksillasi.',
	'use_gmail' => 'Käytä Gmailia lähettämiseen?',
	'use_gmail_help' => 'Saatavilla vain, jos php_mail() toiminto on poissa käytöstä. Jos päätät olla käyttämättä Gmailia, käytetään SMTP:tä. Joka tapauksessa se täytyy konfiguroida core/email.php tiedostoon.',
	'enable_mail_verification' => 'Ota käyttöön sähköpostivahvistus?',
	'enable_email_verification_help' => 'Tämä toiminto käytössä vaatii uusien käyttäjien sähköpostivahvistuksen rekisteröinnin yhteydessä.',
	'explain_email_settings' => 'Seuraavat tiedot on vaadittu, jos "Käytä PHP_mail() toimintoa" on <strong>pois käytöstä</strong>. Löydät dokumentoinnin näihin asetuksiin <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">wikissämme (englanniksi)</a>.',
	'email_config_not_writable' => '<strong>core/email.php</strong> tiedostosi ei ole kirjoitettavissa. Katso tiedoston käyttöoikeudet.',
	'pages' => 'Sivut',
	'enable_or_disable_pages' => 'Ota käyttöön tai poista sivuja käytöstä',
	'enable' => 'Ota käyttöön',
	'disable' => 'Ota pois käytöstä',
	'maintenance_mode' => 'Foorumin huoltotila',
	'forum_in_maintenance' => 'Keskustelupalsta on huollossa.',
	'unable_to_update_settings' => 'Asetusten päivittäminen ei onnistu. Varmista, ettei kohtia jäänyt tyhjäksi.',
	'editing_google_analytics_module' => 'Muokataan Google Analytics moduulia',
	'tracking_code' => 'Seurantakoodi',
	'tracking_code_help' => 'Aseta Google Analyticsin seurantakoodi tähän, sisältäen ympäröivät script tagit.',
	'google_analytics_help' => 'Katso <a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">tämä opas</a> lisätietoja varten, vaiheiden 1-3 mukaisesti.',
	'social_media_links' => 'Sosiaalisen Median linkit',
	'youtube_url' => 'YouTube URL',
	'twitter_url' => 'Twitter URL (Älä lopeta "/")',
	'twitter_dark_theme' => 'Käytä tummaa Twitter teemaa?',
	'twitter_widget_id' => 'Twitter Widget ID',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'registration' => 'Rekisteröityminen',
	'registration_warning' => 'Tämä moduuli kytkettynä poissa käytöstä estää uusien jäsenien rekisteröitymisen.',
	'google_recaptcha' => 'Ota käyttöön Google reCAPTCHA',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_terms_and_conditions' => 'Rekisteröinnin käyttöehdot',
	'voice_server_module' => 'Äänipalvelin moduuli',
	'only_works_with_teamspeak' => 'Tämä moduuli toimii tällähetkellä vain TeamSpeakin ja Discordin kanssa.',
	'discord_id' => 'Discord palvelimen ID',
	'voice_server_help' => 'Anna ServerQuery käyttäjän tiedot.',
	'ip_without_port' => 'IP (ilman porttia)',
	'voice_server_port' => 'Portti (yleensä 10011)',
	'virtual_port' => 'Virtuaalinen portti (yleensä 9987)',
	'permissions' => 'Oikeudet:',
	'view_applications' => 'Tarkastele hakemuksia?',
	'accept_reject_applications' => 'Hyväksy / Hylkää hakemuksia?',
	'questions' => 'Kysymykset:',
	'question' => 'Kysymys',
	'type' => 'Tyyppi',
	'options' => 'Valinnat',
	'options_help' => 'Jokainen valinta uudelle riville; voi jättää tyhjäksi (vain valikossa)',
	'no_questions' => 'Kysymyksiä ei ole vielä lisätty',
	'new_question' => 'Uusi kysymys',
	'editing_question' => 'Muokataan kysymystä',
	'delete_question' => 'Poista kysymys',
	'dropdown' => 'Valikko',
	'text' => 'Teksti',
	'textarea' => 'Tekstikenttä',
	'name_required' => 'Nimi on pakollinen.',
	'question_required' => 'Kysymys on pakollinen.',
	'name_minimum' => 'Nimen täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'question_minimum' => 'Kysymyksen täytyy olla vähintään kolme (3) merkkiä pitkä.',
	'name_maximum' => 'Nimi saa olla enintään 16 merkkiä pitkä.',
	'question_maximum' => 'Kysymys saa olla enintään 16 merkkiä pitkä.',
	'question_deleted' => 'Kysymys poistettu',
	'use_followers' => 'Käytä seuraajia?',
	'use_followers_help' => 'Mikäli pois käytöstä, ystävälistaa käytetään sen sijaan.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Klikkaa sivua muokataksesi sitä.',
	'page' => 'Sivu:',
	'url' => 'URL:',
	'page_url' => 'Sivun URL',
	'page_url_example' => '(Sisällyttäen "/", esimerkiksi /help/)',
	'page_title' => 'Sivun otsikko',
	'page_content' => 'Sisältö',
	'new_page' => 'Uusi sivu',
	'page_successfully_created' => 'Uusi sivu luotu onnistuneesti',
	'page_successfully_edited' => 'Sivu muokattu onnistuneesti',
	'unable_to_create_page' => 'Sivun luominen ei ole mahdollista.',
	'unable_to_edit_page' => 'Sivun muokkaaminen ei ole mahdollista.',
	'create_page_error' => 'Varmista, että olet laittanut 1-20 merkkiä pitkän URL osoitteen, 1-30 merkkiä pitkän sivun otsikon, ja 5-20480 merkkiä pitkän sisällön.',
	'delete_page' => 'Poista sivu',
	'confirm_delete_page' => 'Oletko varma, että haluat poistaa tämän sivun?',
	'page_deleted_successfully' => 'Sivu poistettu onnistuneesti',
	'page_link_location' => 'Näytä linkki:',
	'page_link_navbar' => 'Navigaatiopalkki',
	'page_link_more' => 'Navigaatiopalkin "Lisää" valikko',
	'page_link_footer' => 'Sivun alatunniste',
	'page_link_none' => 'Ei linkkiä',
	'page_permissions' => 'Sivun oikeudet',
	'can_view_page' => 'Voi tarkastella:',
	'redirect_page' => 'Uudelleenohjaa sivu?',
	'redirect_link' => 'Uudelleenohjauslinkki',
	'page_icon' => 'Sivun ikoni',
	
	// Admin forum page
	'labels' => 'Aiheen etuliite',
	'new_label' => 'Uusi etuliite',
	'no_labels_defined' => 'Etuliitteitä ei ole määritelty',
	'label_name' => 'Etuliitteen nimi',
	'label_type' => 'Etuliitteen tyyppi',
	'label_forums' => 'Etuliitteen foorumit',
	'label_creation_error' => 'Virhe leiman luomisessa. Varmista, ettei leima ole yli 32 merkkiä pitkä ja valitsit leiman tyypin.',
	'confirm_label_deletion' => 'Oletko varma, että haluat poistaa tämän etuliitteen?',
	'editing_label' => 'Muokataan etuliitettä',
	'label_creation_success' => 'Etuliite luotu onnistuneesti',
	'label_edit_success' => 'Etuliite muokattu onnistuneesti',
	'label_default' => 'Oletus',
	'label_primary' => 'Ensisijainen',
	'label_success' => 'Onnistunut',
	'label_info' => 'Info',
	'label_warning' => 'Varoitus',
	'label_danger' => 'Vaara',
	'new_forum' => 'Uusi keskustelualue',
	'forum_layout' => 'Foorumin Layout',
>>>>>>> upstream/master
	'table_view' => 'Taulukkonäkymä',
	'latest_discussions_view' => 'Viimeisimmät keskustelut -näkymä',
	'create_forum' => 'Luo foorumi',
	'forum_name' => 'Foorumin nimi',
	'forum_description' => 'Foorumin kuvaus',
	'delete_forum' => 'Poista foorumi',
<<<<<<< HEAD
	'move_topics_and_posts_to' => 'Siirrä viestiketjut ja viestit kohteeseen',
	'delete_topics_and_posts' => 'Poista viestiketjut ja viestit',
	'parent_forum' => 'Äitifoorumi',
	'has_no_parent' => 'Foorumilla ei ole äitifoorumia',
	'forum_permissions' => 'Foorumin oikeudet',
	'can_view_forum' => 'Voi katsoa foorumia',
	'can_create_topic' => 'Voi luoda viestiketjun',
	'can_post_reply' => 'Voi lähettää vastauksia',
	'display_threads_as_news' => 'Näytetäänkö ketjut etusivun Uutisosiossa?',
	'input_forum_title' => 'Kirjoita foorumin otsikko.',
	'input_forum_description' => 'Kirjoita foorumin kuvaus.',
	'forum_name_minimum' => 'Foorumin nimi pitää olla vähintään 2 merkkiä pitkä.',
	'forum_description_minimum' => 'Foorumin kuvaus pitää olla vähintään 2 merkkiä pitkä.',
	'forum_name_maximum' => 'Foorumin nimi voi olla korkeintaan 150 merkkiä.',
	'forum_description_maximum' => 'Foorumin kuvaus voi olla korkeintaan 255 merkkiä.',
	'forum_type_forum' => 'Discussion Forum',
	'forum_type_category' => 'Category',
=======
	'move_topics_and_posts_to' => 'Siirrä aiheet ja viestit',
	'delete_topics_and_posts' => 'Poista aiheet ja viestit',
	'parent_forum' => 'Isäntäfoorumi',
	'has_no_parent' => 'Ei isäntäfoorumia',
	'forum_permissions' => 'Foorumin oikeudet',
	'can_view_forum' => 'Voi tarkastella foorumia',
	'can_create_topic' => 'Voi luoda aiheen',
	'can_post_reply' => 'Voi kirjoittaa viestin',
	'display_threads_as_news' => 'Näytetäänkö ketjut uutisina etusivulla?',
	'input_forum_title' => 'Syötä foorumin otsikko.',
	'input_forum_description' => 'Syötä foorumin kuvaus (voi käyttää HTML).',
	'forum_name_minimum' => 'Foorumin nimen täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'forum_description_minimum' => 'Foorumin kuvauksen täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'forum_name_maximum' => 'Foorumin nimi saa olla enintään 150 merkkiä pitkä.',
	'forum_description_maximum' => 'Foorumin kuvaus saa olla enintään 255 merkkiä pitkä.',
	'forum_type_forum' => 'Keskustelualue',
	'forum_type_category' => 'Kategoria',
>>>>>>> upstream/master
	
	// Admin Users and Groups page
	'users' => 'Käyttäjät',
	'new_user' => 'Uusi käyttäjä',
	'created' => 'Luotu',
	'user_deleted' => 'Käyttäjä poistettu',
	'validate_user' => 'Vahvista käyttäjä',
	'update_uuid' => 'Päivitä UUID',
<<<<<<< HEAD
	'unable_to_update_uuid' => 'UUID:tä ei voitu päivittää.',
	'update_mc_name' => 'Päivitä Minecraft nimi',
	'reset_password' => 'Tyhjennä salasana',
	'punish_user' => 'Rankaise käyttäjää',
	'delete_user' => 'Poista käyttäjä',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'IP-osoite',
	'ip' => 'IP:',
	'other_actions' => 'Muut toiminnot:',
	'disable_avatar' => 'Ota avatar pois käytöstä',
	'enable_avatar' => 'Enable avatar',
	'confirm_user_deletion' => 'Oletko varma, että haluat poistaa käyttäjän {x}?', // Don't replace "{x}"
	'groups' => 'Käyttäjäryhmät',
	'group' => 'Ryhmä',
=======
	'unable_to_update_uuid' => 'Virhe päivittäessä UUID:ta',
	'update_mc_name' => 'Päivitä Minecraft nimi',
	'reset_password' => 'Nollaa salasana',
	'punish_user' => 'Rankaise käyttäjää',
	'delete_user' => 'Poista käyttäjä',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'IP osoite',
	'ip' => 'IP:',
	'other_actions' => 'Muut toiminnot:',
	'disable_avatar' => 'Poista avatar käytöstä',
	'enable_avatar' => 'Ota avatar käyttöön',
	'confirm_user_deletion' => 'Oletko varma, että haluat poistaa käyttäjän {x}?', // Don't replace "{x}"
	'groups' => 'Ryhmät',
	'group' => 'Ryhmä',
	'group2' => 'Toinen ryhmä',
>>>>>>> upstream/master
	'new_group' => 'Uusi ryhmä',
	'id' => 'ID',
	'name' => 'Nimi',
	'create_group' => 'Luo ryhmä',
	'group_name' => 'Ryhmän nimi',
	'group_html' => 'Ryhmän HTML',
<<<<<<< HEAD
	'group_html_lg' => 'Ryhmän HTML (suuri)',
	'donor_group_id' => 'Lahjoituspaketin ID',
	'donor_group_id_help' => '<p>Tämä on ryhmän paketin Buycraft, MinecraftMarket tai MCStock ID.</p><p>Tämän voi jättää tyhjäksi.</p>',
	'donor_group_instructions' => 	'<p>Lahjoitusten täytyy olla järjestyksessä <strong>pienimmästä arvosta suurimpaan arvoon</strong>.</p>
									<p>Esimerkiksi 10€ paketti luodaan ennen 20€ pakettia.</p>',
	'delete_group' => 'Poista ryhmä',
	'confirm_group_deletion' => 'Oletko varma, että haluat poistaa {x} ryhmän?', // Don't replace "{x}"
	'group_staff' => 'Kuuluuko tämä ylläpitoon?',
	'group_modcp' => 'Näytetäänkö ModCP?',
	'group_admincp' => 'Näytetäänkö AdminCP?',
	'group_name_required' => 'Sinun täytyy antaa ryhmälle nimi.',
	'group_name_minimum' => 'Ryhmän nimi täytyy olla vähintään 2 merkkiä pitkä.',
	'group_name_maximum' => 'Ryhmän nimi voi olla enintään 20 merkkiä pitkä.',
	'html_maximum' => 'Ryhmän HTML voi olla enintään 1024 merkkiä pitkä.',
	'select_user_group' => 'Käyttäjän pitää olla ryhmässä.',
	'uuid_max_32' => 'UUID:n täytyy olla enintään 32 merkkiä pitkä.',
	'cant_delete_root_user' => 'Can\'t delete the root user!',
	'cant_modify_root_user' => 'Can\'t modify the root user\'s group.',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Minecraft asetukset',
	'use_plugin' => 'Käytä Nameless Minecraft pluginia?',
	'force_avatars' => 'Pakota Minecraft avatarit?',
	'uuid_linking' => 'Ota UUID yhdistäminen käyttöön?',
	'use_plugin_help' => 'Pluginin käyttö mahdollistaa rankin synkronoinnin, serverillä rekisteröitymisen ja tiketin jättämisen',
	'uuid_linking_help' => 'Jos otettu pois käytöstä, käyttäjien UUID:tä ei yhdistetä foorumitiliin. Suositellaan syvästi tämän käyttöä.',
	'plugin_settings' => 'Plugin asetukset',
	'confirm_api_regen' => 'Oletko varma, että haluat luoda uuden APIn?',
=======
	'group_html_lg' => 'Ryhmän HTML suuri',
	'donor_group_id' => 'Lahjoituspaketin ID',
	'donor_group_id_help' => '<p>Tämä on ryhmän paketin ID Buycraftista, MinecraftMarketista tai MCStock:sta.</p><p>Tämän voi jättää tyhjäksi.</p>',
	'donor_group_instructions' => 	'<p>Lahjoittajaryhmät täytyy luoda järjestyksessä, <strong>pienimmästä suurimpaan</strong>.</p>
									<p>Esimerkiksi 10€ ryhmä täytyy luoda ennen 20€ ryhmää.</p>',
	'delete_group' => 'Poista ryhmä',
	'confirm_group_deletion' => 'Oletko varma, että haluat poistaa ryhmän {x}?', // Don't replace "{x}"
	'group_staff' => 'Onko ryhmä ylläpidolle?',
	'group_modcp' => 'Voiko ryhmä nähdä ModCP?',
	'group_admincp' => 'Voiko ryhmä nähdä Ylläpitopaneelin?',
	'group_name_required' => 'Sinun täytyy antaa ryhmälle nimi.',
	'group_name_minimum' => 'Ryhmän nimi täytyy olla vähintään kaksi (2) merkkiä.',
	'group_name_maximum' => 'Ryhmän nimi saa olla enintään 20 merkkiä pitkä.',
	'html_maximum' => 'Ryhmän HTML saa olla enintään 1024 merkkiä pitkä.',
	'select_user_group' => 'Käyttäjän täytyy olla ryhmässä.',
	'uuid_max_32' => 'UUID saa olla enintään 32 merkkiä pitkä.',
	'cant_delete_root_user' => 'Root-käyttäjää ei voida poistaa!',
	'cant_modify_root_user' => 'Root-käyttäjän ryhmää ei voi muokata.',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Minecraft asetukset',
	'use_plugin' => 'Ota käyttöön Nameless API?',
	'force_avatars' => 'Pakota Minecraft avatarit?',
	'uuid_linking' => 'Ota käyttöön UUID linkittäminen?',
	'use_plugin_help' => 'APIn ja palvelimen pluginin käyttöönotto sallii arvojen synkronoinnin, in-game rekisteröinnin sekä raportoinnin.',
	'uuid_linking_help' => 'Jos poistettu käytöstä, tilejä ei linkitetä UUID:llä. Suosittelemme vahvasti tämän pitämistä käytössä.',
	'plugin_settings' => 'Plugin asetukset',
	'confirm_api_regen' => 'Oletko varma, että haluat luoda uuden API avaimen?',
>>>>>>> upstream/master
	'servers' => 'Palvelimet',
	'new_server' => 'Uusi palvelin',
	'confirm_server_deletion' => 'Oletko varma, että haluat poistaa tämän palvelimen?',
	'main_server' => 'Pääpalvelin',
<<<<<<< HEAD
	'main_server_help' => 'Palvelin, jonka lävitse pelaajat yhdistävät. Yleensä BungeeCord.',
	'choose_a_main_server' => 'Valitse pääpalvelin...',
	'external_query' => 'Käytä ulkoista kyselyä?',
	'external_query_help' => 'Use an external API to query the Minecraft server? Only use this if the built in query doesn\'t work; it\'s highly recommended that this is unticked.',
	'editing_server' => 'Muokkaa palvelinta {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'Palvelimen IP (portilla) (numeerinen tai domain)',
	'server_ip_with_port_help' => 'Tämä on IP, jonka käyttäjät näkevät. Sitä ei kysellä.',
	'server_ip_numeric' => 'Palvelimen IP (portilla) (VAIN numeerinen)',
	'server_ip_numeric_help' => 'Tälle suoritetaan kysely, joten varmista, että se on numeerinen. Sitä ei näytetä käyttäjille.',
	'show_on_play_page' => 'Näytä Pelaamassa -sivulla?',
	'pre_17' => 'MC 1.7 edeltävä?',
	'server_name' => 'Palvelimen nimi',
	'invalid_server_id' => 'Virheellinen palvelin ID',
	'show_players' => 'Näytä pelaajalista Pelaamassa -sivulla?',
	'server_edited' => 'Palvelin muokattu onnistuneesti',
	'server_created' => 'Palvelin luotu onnistuneesti',
	'query_errors' => 'Kyselyvirheet',
	'query_errors_info' => 'Seuraavat virheet antavat sinun tutkia ongelmia palvelimen kyselyn kanssa.',
	'no_query_errors' => 'Kyselyvirheitä ei ole kirjattu.',
=======
	'main_server_help' => 'Palvelin, jonne pelaajat yhdistävät. Normaalisti tämä on Bungee instanssi.',
	'choose_a_main_server' => 'Valitse pääserveri...',
	'external_query' => 'Käytä ulkopuolista kyselyä?',
	'external_query_help' => 'Käytä ulkopuolista API kyselyä Minecraft palvelimelle? Käytä vain, jos sisäänrakennettu kysely ei toimi, vahvasti suositeltua pitää poissa käytöstä.',
	'editing_server' => 'Muokataan palvelinta {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'Palvelimen IP (portilla), numeerinen tai domain.',
	'server_ip_with_port_help' => 'Tämä on IP, joka näytetään käyttäjille. Sitä ei kysellä.',
	'server_ip_numeric' => 'Palvelimen IP (portilla) (vain numeerinen)',
	'server_ip_numeric_help' => 'Tämä IP tullaan kysymään, varmista, että se on vain numeerinen. Tätä ei näytetä käyttäjille.',
	'show_on_play_page' => 'Näytä "Pelaa" sivulla?',
	'pre_17' => 'Pre 1.7 Minecraft versio?',
	'server_name' => 'Palvelimen nimi',
	'invalid_server_id' => 'Virheellinen palvelin ID',
	'show_players' => 'Näytä pelaajalista "Pelaa" sivulla?',
	'server_edited' => 'Palvelin muokattu onnistuneesti',
	'server_created' => 'Palvelin luotu onnistuneesti',
	'query_errors' => 'Kyselyvirheet',
	'query_errors_info' => 'Seuraavien virheiden avulla voit määrittää sisäisen palvelimen kyselyn ongelmat.',
	'no_query_errors' => 'Virheitä ei ole kirjattu.',
>>>>>>> upstream/master
	'date' => 'Päivämäärä:',
	'port' => 'Portti:',
	'viewing_error' => 'Näytetään virhe',
	'confirm_error_deletion' => 'Oletko varma, että haluat poistaa tämän virheen?',
<<<<<<< HEAD
	'display_server_status' => 'Näytä palvelimen statusmoduuli?',
	'server_name_required' => 'Sinun täytyy laittaa palvelimelle nimi.',
	'server_ip_required' => 'Sinun täytyy laittaa palvelimen IP.',
	'server_name_minimum' => 'Palvelimen nimi täytyy olla väh. 2 merkkiä.',
	'server_ip_minimum' => 'Palvelimen IP täytyy olla väh. 2 merkkiä.',
	'server_name_maximum' => 'Palvelimen nimi voi olla enintään 20 merkkiä.',
	'server_ip_maximum' => 'Palvelimen nimi voi olla enintään 64 merkkiä.',
	'purge_errors' => 'Purge Errors',
	'confirm_purge_errors' => 'Are you sure you want to purge all query errors?',
	'avatar_type' => 'Avatar type',
	'custom_usernames' => 'Force Minecraft usernames?',
	'mcassoc' => 'mcassoc',
	'use_mcassoc' => 'Use mcassoc?',
	'use_mcassoc_help' => 'mcassoc ensures users own the Minecraft account they\'re registering with',
	'mcassoc_key' => 'mcassoc Shared Key',
	'invalid_mcassoc_key' => 'Invalid mcassoc key.',
	'mcassoc_instance' => 'mcassoc Instance',
	'mcassoc_instance_help' => 'Generate an instance code <a href="http://jsbin.com/jadofehoqu/1/" target="_blank">here</a>',
	'mcassoc_key_help' => 'Get your mcassoc key <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>',
	'enable_name_history' => 'Enable profile username history?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Teemat',
	'templates' => 'Mallit',
	'installed_themes' => 'Asennetut teemat',
	'installed_templates' => 'Asennetut mallit',
	'installed_addons' => 'Asennetut lisäosat',
	'install_theme' => 'Asenna teema',
	'install_template' => 'Asenna malli',
	'install_addon' => 'Asenna lisäosa',
	'install_a_theme' => 'Asenna teema',
	'install_a_template' => 'Asenna malli',
=======
	'display_server_status' => 'Näytä palvelimen status moduuli?',
	'server_name_required' => 'Sinun täytyy antaa palvelimen nimi.',
	'server_ip_required' => 'Sinun täytyy antaa palvelimen IP.',
	'server_name_minimum' => 'Palvelimen nimen täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'server_ip_minimum' => 'Palvelimen IP täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'server_name_maximum' => 'Palvelimen nimi saa olla enintään 20 merkkiä pitkä.',
	'server_ip_maximum' => 'Palvelimen IP saa olla enintään 64 merkkiä pitkä.',
	'purge_errors' => 'Tyhjennä virheet',
	'confirm_purge_errors' => 'Oletko varma, että haluat tyhjentää kaikki virheet?',
	'avatar_type' => 'Avatarin tyyppi',
	'custom_usernames' => 'Pakota Minecraft käyttäjänimet?',
	'mcassoc' => 'mcassoc',
	'use_mcassoc' => 'Käytä mcassoc?',
	'use_mcassoc_help' => 'mcassoc varmistaa, että käyttäjä omistaa Minecraft tilin millä he rekisteröityvät.',
	'mcassoc_key' => 'mcassoc Shared Key',
	'invalid_mcassoc_key' => 'Virheellinen mcassoc avain.',
	'mcassoc_instance' => 'mcassoc instanssi',
	'mcassoc_instance_help' => 'Luo instanssikoodi <a href="http://jsbin.com/jadofehoqu/1/" target="_blank">täällä</a>',
	'mcassoc_key_help' => 'Hanki mcassoc avain <a href="https://mcassoc.lukegb.com/" target="_blank">täältä</a>',
	'enable_name_history' => 'Ota käyttöön profiilin käyttäjänimihistoria?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Teemat',
	'templates' => 'Pohjat',
	'installed_themes' => 'Asennetut teemat',
	'installed_templates' => 'Asennetut pohjat',
	'installed_addons' => 'Asennetut lisäosat',
	'install_theme' => 'Asenna teema',
	'install_template' => 'Asenna pohja',
	'install_addon' => 'Asenna lisäosa',
	'install_a_theme' => 'Asenna teema',
	'install_a_template' => 'Asenna pohja',
>>>>>>> upstream/master
	'install_an_addon' => 'Asenna lisäosa',
	'active' => 'Aktiivinen',
	'activate' => 'Aktivoi',
	'deactivate' => 'Deaktivoi',
<<<<<<< HEAD
	'theme_install_instructions' => 'Lataa teeman tiedostot <strong>styles/themes</strong> kansioon. Klikkaa sen jälkeen "Skannaa".',
	'template_install_instructions' => 'Lataa mallit <strong>styles/templates</strong> kansioon. Klikkaa sen jälkeen "Skannaa".',
	'addon_install_instructions' => 'Lataa lisäosan tiedostot <strong>addons</strong> kansioon. Klikkaa sen jälkeen "Skannaa".',
	'addon_install_warning' => 'Lisäosat asennetaan omalla vastuullasi. Varmuuskopioi tiedostosi ennen kuin jatkat.',
	'scan' => 'Skannaa',
	'theme_not_exist' => 'Tätä teemaa ei ole olemassa!',
	'template_not_exist' => 'Tätä mallia ei ole olemassa!',
	'addon_not_exist' => 'Tätä lisäosaa ei ole olemassa!',
	'style_scan_complete' => 'Suoritettu. Kaikki uudet tyylit on asennettu.',
	'addon_scan_complete' => 'Suoritettu. Kaikki uudet lisäosat on asennettu.',
	'theme_enabled' => 'Teema käytössä.',
	'template_enabled' => 'Malli käytössä.',
	'addon_enabled' => 'Lisäosa käytössä.',
	'theme_deleted' => 'Teema poistettu.',
	'template_deleted' => 'Malli poistettu.',
	'addon_disabled' => 'Lisäosa otettu pois käytöstä.',
	'inverse_navbar' => 'Käänteinen navigaatiopalkki',
	'confirm_theme_deletion' => 'Oletko varma, että haluat poistaa teeman <strong>{x}</strong>?<br /><br />Teema poistetaan myös <strong>styles/themes</strong> kansiosta.', // Don't replace {x}
	'confirm_template_deletion' => 'Oletko varma, että haluat poistaa mallin <strong>{x}</strong>?<br /><br />Malli poistetaan myös <strong>styles/templates</strong> kansiosta.', // Don't replace {x}
	'unable_to_enable_addon' => 'Could not enable addon. Please ensure it is a valid NamelessMC addon.',
	
	// Admin Misc page
	'other_settings' => 'Muut asetukset',
	'enable_error_reporting' => 'Ota virheilmoitukset käyttöön?',
	'error_reporting_description' => 'Tätä käytetään vain virheenkorjaukseen, suositellaan jätettäväksi pois käytöstä.',
	'display_page_load_time' => 'Näytä sivun latausaika?',
	'page_load_time_description' => 'Tämä näyttää nopeusmittarin sivun alatunnisteessa, josta näkee latausajan.',
	'reset_website' => 'Tyhjennä sivusto',
	'reset_website_info' => 'Tämä tyhjentää sivustosi. <strong>Lisäosat poistetaan käytöstä, eikä niiden asetuksia muuteta.</strong> Myös palvelimet säilyvät.',
	'confirm_reset_website' => 'Oletko varma, että hakuat tyhjentää sivuston?',
	
	// Admin Update page
	'installation_up_to_date' => 'Asennus on viimeisimmässä versiossaan.',
	'update_check_error' => 'Päivityksiä ei voi tarkistaa. Yritä myöhemmin uudelleen.',
	'new_update_available' => 'Päivitys saatavilla',
	'your_version' => 'Nykyinen versio:',
	'new_version' => 'Uusi versio:',
	'download' => 'Lataa',
	'update_warning' => 'Varoitus: Varmista, että olet ladannut päivityksen ja ladannut sisällön palvelimelle!'
=======
	'theme_install_instructions' => 'Lataa teemat <strong>styles/themes</strong> kansioon. Klikkaa sen jälkeen "Skannaa" painiketta alapuolella.',
	'template_install_instructions' => 'Lataa pohjat <strong>styles/templates</strong> kansioon. Klikkaa sen jälkeen "Skannaa" painiketta alapuolella.',
	'addon_install_instructions' => 'Lataa lisäosat <strong>addons</strong> kansioon. Klikkaa sen jälkeen "Skannaa" painiketta alapuolella.',
	'addon_install_warning' => 'Asennat lisäosat omalla vastuullasi. Varmuuskopioi tiedostot ja tietokanta ennen jatkamista.',
	'scan' => 'Skannaa',
	'theme_not_exist' => 'Teemaa ei ole olemassa!',
	'template_not_exist' => 'Pohjaa ei ole olemassa!',
	'addon_not_exist' => 'Lisäosaa ei ole olemassa!',
	'style_scan_complete' => 'Suoritettu, uudet ulkoasut on asennettu.',
	'addon_scan_complete' => 'Suoritettu, uudet lisäosat on asennettu.',
	'theme_enabled' => 'Teema otettu käyttöön.',
	'template_enabled' => 'Pohja otettu käyttöön.',
	'addon_enabled' => 'Lisäosa otettu käyttöö.',
	'theme_deleted' => 'Teema poistettu.',
	'template_deleted' => 'Pohja poistettu.',
	'addon_disabled' => 'Lisäosa poistettu käytöstä.',
	'inverse_navbar' => 'Käänteinen navigointipalkki',
	'confirm_theme_deletion' => 'Oletko varma, että haluat poistaa teeman <strong>{x}</strong>?<br /><br />Teema poistetaan <strong>styles/themes</strong> kansiostasi.', // Don't replace {x}
	'confirm_template_deletion' => 'Oletko varma, että haluat poistaa pohjan <strong>{x}</strong>?<br /><br />Pohja poistetaan <strong>styles/templates</strong> kansiostasi.', // Don't replace {x}
	'unable_to_enable_addon' => 'Virhe lisäosan käyttöönotossa. Varmista, että se on kelvollinen NamelessMC lisäosa.',
	
	// Admin Misc page
	'other_settings' => 'Muut asetukset',
	'enable_error_reporting' => 'Ota käyttöön virheraportointi?',
	'error_reporting_description' => 'Tätä käytetään vain virheenkorjaustarkoituksissa. Vahvasti suositeltavaa jättämään rauhaan.',
	'display_page_load_time' => 'Näytä sivun latausaika?',
	'page_load_time_description' => 'Kun tämä asetus on päällä, sivun alareunaan ilmestyy mittari, joka näyttää sivun latausajan nopeuden.',
	'reset_website' => 'Nollaa sivusto',
	'reset_website_info' => 'Tämä nollaa sivustosi. <strong>Lisäosat otetaan pois käytöstä, mutta niitä ei poisteta eivätkä asetukset muutu.</strong> Myös määritellyt Minecraft palvelimet säilyvät.',
	'confirm_reset_website' => 'Oletko varma, että haluat resetoida sivustosi?',
	
	// Admin Update page
	'installation_up_to_date' => 'Asennuksesi on ajantasalla.',
	'update_check_error' => 'Virhe päivityksiä tarkistettaessa. Tarkista myöhemmin uudelleen.',
	'new_update_available' => 'Uusi päivitys on saatavilla.',
	'your_version' => 'Sinun versiosi:',
	'new_version' => 'Uusi versio:',
	'download' => 'Lataa',
	'update_warning' => 'Varoitus: Varmista, että olet ladannut tarvittavat tiedostot, sekä ladannut ne palvelimelle ennen aloittamista!'
>>>>>>> upstream/master
);

/*
 *  Navbar
 */
$navbar_language = array(
	// Text only
	'home' => 'Etusivu',
<<<<<<< HEAD
	'play' => 'Pelaamassa',
	'forum' => 'Foorumi',
	'more' => 'Lisää',
	'staff_apps' => 'Ylläpitohakemukset',
=======
	'play' => 'Pelaa',
	'forum' => 'Foorumi',
	'more' => 'Lisää',
	'staff_apps' => 'Ylläpitoahakemukset',
>>>>>>> upstream/master
	'view_messages' => 'Näytä viestit',
	'view_alerts' => 'Näytä ilmoitukset',
	
	// Icons - will display before the text
	'home_icon' => '',
	'play_icon' => '',
	'forum_icon' => '',
	'staff_apps_icon' => ''
);

/*
 * User Related
 */
$user_language = array(
	// Registration
<<<<<<< HEAD
	'create_an_account' => 'Luo käyttäjätili',
	'authme_password' => 'AuthMe salasana',
	'username' => 'Käyttäjänimi',
	'minecraft_username' => 'Minecraft -nimi',
	'email' => 'Sähköposti',
	'user_title' => 'otsikko',
	'email_address' => 'Sähköpostiosoite',
	'date_of_birth' => 'Date of Birth',
	'location' => 'Location',
	'password' => 'Salasana',
	'confirm_password' => 'Vahvista salasana',
	'i_agree' => 'Hyväksyn',
	'agree_t_and_c' => 'Kun painat <strong class="label label-primary">Rekisteröidy</strong>, hyväksyt meidän <a href="#" data-toggle="modal" data-target="#t_and_c_m">Käyttöehdot ja säännöt</a>.',
	'register' => 'Rekisteröidy',
	'sign_in' => 'Kirjaudu sisään',
	'sign_out' => 'Kirjaudu ulos',
	'terms_and_conditions' => 'Käyttöehdot ja säännöt',
	'successful_signin' => 'Kirjauduit sisään onnistuneesti',
	'incorrect_details' => 'Väärät tiedot',
	'remember_me' => 'Muista minut!',
	'forgot_password' => 'Unohdettu salasana',
	'must_input_username' => 'Sinun täytyy laittaa käyttäjänimi.',
	'must_input_password' => 'Sinun täytyy laittaa salasana.',
	'inactive_account' => 'Tilisi on tällähetkellä inaktiiviinen. Pyysitkö salasanan nollausta?',
	'account_banned' => 'Tilillesi on asetettu porttikielto.',
	'successfully_logged_out' => 'Kirjauduit ulos onnistuneesti.',
	'signature' => 'Allekirjoitus',
	'registration_check_email' => 'Tarkistathan sähköpostiisi tulleen vahvistuslinkin. Et voi kirjautua sisään ennen vahvistusta.',
	'unknown_login_error' => 'Tuntematon virhe tapahtui. Yritä myöhemmin uudelleen.',
	'validation_complete' => 'Kiitos kun rekisteröidyit! Voit nyt kirjautua sisään.',
	'validation_error' => 'Virhe pyyntöäsi käsitellessä. Yritä klikata linkkiä uudestaan.',
	'registration_error' => 'Varmiata, että täytit kaikki kentät, käyttäjänimi on 3-20 merkkiä ja salasana 6-20 merkkiä pitkä.',
	'username_required' => 'Kirjoita käyttäjänimi.',
	'password_required' => 'Kirjoita salasana.',
	'email_required' => 'Kirjoita sähköpostiosoite.',
	'mcname_required' => 'Kirjoita Minecraft -nimesi.',
	'accept_terms' => 'Sinun täytyy hyväksyä käyttöehdot ja säännöt ennen kuin voit rekisteröityä.',
	'invalid_recaptcha' => 'Virheellinen reCAPTCHA.',
	'username_minimum_3' => 'Käyttäjänimesi täytyy olla vähintään 3 merkkiä pitkä.',
	'username_maximum_20' => 'Käyttäjänimesi voi olla enintään 20 merkkiä pitkä.',
	'mcname_minimum_3' => 'Minecraft nimesi täytyy olla vähintään 3 merkkiä pitkä.',
	'mcname_maximum_20' => 'Minecraft nimesi voi olla enintään 20 merkkiä pitkä.',
	'password_minimum_6' => 'Salasana täytyy olla vähintään 6 merkkiä pitkä.',
	'password_maximum_30' => 'Salasana voi olla enintään 20 merkkiä pitkä.',
	'passwords_dont_match' => 'Salasanasi eivät täsmää!.',
	'username_mcname_email_exists' => 'Your username, Minecraft username or email address already exists. Have you already created an account?',
	'invalid_mcname' => 'Minecraft nimesi ei vastaa yhtäkään pelitiliä.',
	'mcname_lookup_error' => 'Mojangin palvelimiin ei saatu yhteyttä. Yritä myöhemmin uudelleen.',
	'signature_maximum_900' => 'Allekirjoituksesi voi olla enintään 900 merkkiä.',
	'invalid_date_of_birth' => 'Invalid date of birth.',
	'location_required' => 'Please enter a location.',
	'location_minimum_2' => 'Your location must be a minimum of 2 characters.',
	'location_maximum_128' => 'Your location must be a maximum of 128 characters.',
	'verify_account' => 'Verify account',
	'verify_account_help' => 'Please follow the instructions below so we can verify you own the Minecraft account in question.',
	'verification_failed' => 'Verification failed, please try again.',
	'verification_success' => 'Successfully validated! You can now log in.',
	'complete_signup' => 'Complete Signup',
	'registration_disabled' => 'Website registration is currently disabled.',
	
	// UserCP
	'user_cp' => 'KäyttäjäCP',
=======
	'create_an_account' => 'Luo tili',
	'authme_password' => 'AuthMe salasana',
	'username' => 'Käyttäjänimi',
	'minecraft_username' => 'Minecraft käyttäjänimi',
	'email' => 'Sähköpostiosoite',
	'user_title' => 'Nimike',
	'email_address' => 'Sähköpostiosoite',
	'date_of_birth' => 'Syntymäaika',
	'location' => 'Sijainti',
	'password' => 'Salasana',
	'confirm_password' => 'Varmista salasana',
	'i_agree' => 'Hyväksyn',
	'agree_t_and_c' => 'Painamalla <strong class="label label-primary">Rekisteröidy</strong>, hyväksyt <a href="#" data-toggle="modal" data-target="#t_and_c_m">Käyttöehdot ja Säännöt</a>.',
	'register' => 'Rekisteröidy',
	'sign_in' => 'Kirjaudu sisään',
	'sign_out' => 'Kirjaudu ulos',
	'terms_and_conditions' => 'Käyttöehdot ja Säännöt',
	'successful_signin' => 'Sinut on kirjattu sisään onnistuneesti.',
	'incorrect_details' => 'Virheelliset tiedot',
	'remember_me' => 'Muista minut',
	'forgot_password' => 'Unohdin salasanani',
	'must_input_username' => 'Sinun täytyy antaa käyttäjänimi',
	'must_input_password' => 'Sinun täytyy antaa salasana',
	'inactive_account' => 'Tilisi on tällä hetkellä inaktiivinen. Pyysitkö salasanan palautusta?',
	'account_banned' => 'Tilisi on porttikiellossa.',
	'successfully_logged_out' => 'Sinut on kirjattu ulos onnistuneesti.',
	'signature' => 'Allekirjoitus',
	'registration_check_email' => 'Tarkistä sähköpostisi vahvistuslinkin varalta. Et voi kirjautua sisään, ennen kuin olet klikannut vahvistuslinkkiä.',
	'unknown_login_error' => 'Pahoittelut, tuntematon virhe tapahtui yrittäessä kirjata sinua sisään. Yritä myöhemmin uudelleen.',
	'validation_complete' => 'Kiitos rekisteröitymisestä. Voit nyt kirjautua sisään.',
	'validation_error' => 'Virhe pyynnön käsittelyssä. Yritä klikata linkkiä uudelleen.',
	'registration_error' => 'Varmista, että täytit kaikki kentät, käyttäjänimesi on 3-20 merkkiä pitkä ja salasanasi 6-30 merkkiä pitkä.',
	'username_required' => 'Anna käyttäjätunnus',
	'password_required' => 'Anna salasana',
	'email_required' => 'Anna sähköpostiosoite',
	'mcname_required' => 'Anna Minecraft käyttäjänimi.',
	'accept_terms' => 'Sinun täytyy hyväksyä käyttöehdot ja säännöt ennen kuin voit rekisteröityä.',
	'invalid_recaptcha' => 'Virheellinen reCaptcha.',
	'username_minimum_3' => 'Käyttäjänimesi täytyy olla vähintään kolme (3) merkkiä pitkä.',
	'username_maximum_20' => 'Käyttäjänimesi saa olla enintään 20 merkkiä pitkä.',
	'mcname_minimum_3' => 'Minecraft käyttäjänimesi täytyy olla vähintään kolme (3) merkkiä pitkä.',
	'mcname_maximum_20' => 'Minecraft käyttäjänimesi saa olla enintään 20 merkkiä pitkä.',
	'password_minimum_6' => 'Salasanasi täytyy olla vähintään kuusi (6) merkkiä pitkä.',
	'password_maximum_30' => 'Salasanasi saa olla enintään 30 merkkiä pitkä.',
	'passwords_dont_match' => 'Salasanat eivät täsmää.',
	'username_mcname_email_exists' => 'Käyttäjänimesi, Minecraft käyttäjänimesi tai sähköpostiosoitteesi on jo olemassa. Oletko jo luonut käyttäjän?',
	'invalid_mcname' => 'Minecraft käyttäjänimesi ei ole voimassa oleva tili.',
	'mcname_lookup_error' => 'Virhe yhteydessä Mojangin palvelimiin. Yritä myöhemmin uudelleen.',
	'signature_maximum_900' => 'Allekirjoituksesi saa olla enintään 900 merkkiä pitkä.',
	'invalid_date_of_birth' => 'Virheellinen syntymäaika.',
	'location_required' => 'Anna sijaintisi.',
	'location_minimum_2' => 'Sijaintisi täytyy olla vähintään kaksi (2) merkkiä pitkä.',
	'location_maximum_128' => 'Sijaintisi saa olla enintään 128 merkkiä pitkä.',
	'verify_account' => 'Vahvista tili',
	'verify_account_help' => 'Seuraa allaolevia ohjeita, jotta voimme varmistaa, että omistat kyseessä olevan Minecraft tilin.',
	'verification_failed' => 'Vahvistus epäonnistui, yritä uudelleen.',
	'verification_success' => 'Vahvistus onnistui. Voit nyt kirjautua.',
	'complete_signup' => 'Viimeistele rekisteröinti',
	'registration_disabled' => 'Rekisteröinti on poissa käytöstä.',
	
	// UserCP
	'user_cp' => 'Käyttäjä-CP',
>>>>>>> upstream/master
	'no_file_chosen' => 'Ei valittua tiedostoa',
	'private_messages' => 'Yksityisviestit',
	'profile_settings' => 'Profiiliasetukset',
	'your_profile' => 'Profiilisi',
<<<<<<< HEAD
	'topics' => 'Ketjut',
	'posts' => 'Viestit',
	'reputation' => 'Maine',
	'friends' => 'Ystävät',
=======
	'topics' => 'Aiheet',
	'posts' => 'Viestit',
	'reputation' => 'Maine',
	'friends' => 'Kaverit',
>>>>>>> upstream/master
	'alerts' => 'Ilmoitukset',
	
	// Messaging
	'new_message' => 'Uusi viesti',
	'no_messages' => 'Ei viestejä',
	'and_x_more' => 'ja {x} lisää', // Don't replace "{x}"
	'system' => 'Järjestelmä',
	'message_title' => 'Viestin otsikko',
	'message' => 'Viesti',
<<<<<<< HEAD
	'to' => 'Vastaanottaja(t):',
	'separate_users_with_comma' => 'Käyttäjät erotetaan pilkulla (",")',
	'viewing_message' => 'Näytetään viesti',
	'delete_message' => 'Poista viesti',
	'confirm_message_deletion' => 'Oletko varma, että haluat poistaa tämän viestin?',
	
	// Profile settings
	'display_name' => 'Näytettävä nimi',
	'upload_an_avatar' => 'Lataa avatar (.jpg, .png or .gif):',
=======
	'to' => 'Saaja:',
	'separate_users_with_comma' => 'Erota käyttäjät toisistaan pilkulla (",")',
	'viewing_message' => 'Näytetään viesti',
	'delete_message' => 'Poista viesti',
	'confirm_message_deletion' => 'Oletko varma, että haluat poistaa viestin?',
	
	// Profile settings
	'display_name' => 'Näyttönimi',
	'upload_an_avatar' => 'Lataa avatar (vain .jpg, .png tai .gif):',
>>>>>>> upstream/master
	'use_gravatar' => 'Käytä Gravataria?',
	'change_password' => 'Vaihda salasana',
	'current_password' => 'Nykyinen salasana',
	'new_password' => 'Uusi salasana',
	'repeat_new_password' => 'Toista uusi salasana',
<<<<<<< HEAD
	'password_changed_successfully' => 'Salasana vaihdettu onnistuneesti',
	'incorrect_password' => 'Nykyinen salasana on väärin',
	'update_minecraft_name_help' => 'This will update your website username to your current Minecraft username. You can only perform this action once every 30 days.',
	'unable_to_update_mcname' => 'Unable to update Minecraft username.',
	'display_age_on_profile' => 'Display age on profile?',
	'two_factor_authentication' => 'Two Factor Authentication',
	'enable_tfa' => 'Enable Two Factor Authentication',
	'tfa_type' => 'Two Factor Authentication type:',
	'authenticator_app' => 'Authentication App',
	'tfa_scan_code' => 'Please scan the following code within your authentication app:',
	'tfa_code' => 'If your device does not have a camera, or you are unable to scan the QR code, please input the following code:',
	'tfa_enter_code' => 'Please enter the code displaying within your authentication app:',
	'invalid_tfa' => 'Invalid code, please try again.',
	'tfa_successful' => 'Two factor authentication set up successfully. You will need to authenticate every time you log in from now on.',
	'confirm_tfa_disable' => 'Are you sure you wish to disable two factor authentication?',
	'tfa_disabled' => 'Two factor authentication disabled.',
	'tfa_enter_email_code' => 'We have sent you a code within an email for verification. Please enter the code now:',
	'tfa_email_contents' => 'A login attempt has been made to your account. If this was you, please input the following two factor authentication code when asked to do so. If this was not you, you can ignore this email, however a password reset is advised. The code is only valid for 10 minutes.',
=======
	'password_changed_successfully' => 'Salasana vaihdettiin onnistuneesti!',
	'incorrect_password' => 'Nykyinen salasanasi on väärin!',
	'update_minecraft_name_help' => 'Tämä päivittää sivuston nimesi Minecraft nimeksi. Voit suorittaa tämän toiminnon kerran kuukaudessa (30 päivää).',
	'unable_to_update_mcname' => 'Virhe päivittäessä Minecraft nimeä.',
	'display_age_on_profile' => 'Näytä ikäsi profiilissa?',
	'two_factor_authentication' => 'Kaksivaiheinen todennus',
	'enable_tfa' => 'Ota käyttöön kaksivaiheinen todennus',
	'tfa_type' => 'Kaksivaiheisen todennuksen tyyppi:',
	'authenticator_app' => 'Todennussovellus',
	'tfa_scan_code' => 'Skannaa seuraava koodi todennussovelluksessasi:',
	'tfa_code' => 'Jos laitteessasi ei ole kameraa tai se ei tue QR-koodia, kirjoita seuraava koodi:',
	'tfa_enter_code' => 'Kirjoita todennussovelluksessa näkyvä koodi:',
	'invalid_tfa' => 'Virheellinen koodi, yritä uudelleen.',
	'tfa_successful' => 'Kaksivaiheinen todennus otettu käyttöön onnistuneesti. Sinun täytyy todentaa itsesi tästä lähtien joka kerta kun kirjaudut.',
	'confirm_tfa_disable' => 'Oletko varma, että haluat poistaa kaksivaiheisen todennuksen käytöstä?',
	'tfa_disabled' => 'Kaksivaiheinen todennus otettu pois käytöstä.',
	'tfa_enter_email_code' => 'Olemme lähettäneet koodin sähköpostiisi. Anna koodi:',
	'tfa_email_contents' => 'Tilillesi on tehty kirjautumisyritys. Jos se olit sinä, anna kaksivaiheisen todennuksen koodi, mikäli sitä pyydetään. Mikäli kyseessä et ollut sinä, voit jättää tämän sähköpostin huomiotta. Salasanan vaihto on suotavaa. Koodi on voimassa 10 minuuttia.',
>>>>>>> upstream/master
	
	// Alerts
	'viewing_unread_alerts' => 'Näytetään lukemattomat ilmoitukset. Merkitse <a href="/user/alerts/?view=read"><span class="label label-success">luetuiksi</span></a>.',
	'viewing_read_alerts' => 'Näytetään luetut ilmoitukset. Merkitse <a href="/user/alerts/"><span class="label label-warning">lukemattomiksi</span></a>.',
	'no_unread_alerts' => 'Sinulla ei ole lukemattomia ilmoituksia.',
<<<<<<< HEAD
	'no_alerts' => 'Ei näytettäviä ilmoituksia',
	'no_read_alerts' => 'Sinulla ei ole luettuja ilmoituksia.',
	'view' => 'Näytä',
	'alert' => 'Ilmoitus',
	'when' => 'Koska:',
	'delete' => 'Poista',
	'tag' => 'Käyttäjätagi',
	'tagged_in_post' => 'Sinut on merkitty viestissä',
=======
	'no_alerts' => 'Ei ilmoituksia',
	'no_read_alerts' => 'Ei luettuja ilmoituksia.',
	'view' => 'Näytä',
	'alert' => 'Ilmoitus',
	'when' => 'Koska',
	'delete' => 'Poista',
	'tag' => 'Käyttäjätagi',
	'tagged_in_post' => 'Sinut on mainittu viestissä',
>>>>>>> upstream/master
	'report' => 'Raportoi',
	'deleted_alert' => 'Ilmoitus poistettu onnistuneesti',
	
	// Warnings
<<<<<<< HEAD
	'you_have_received_a_warning' => 'Olet saanut varoituksen ylläpitäjältä {x} {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Myönnä',
	
	// Forgot password
	'password_reset' => 'Salasanan tyhjennys',
	'email_body' => 'Sait tämän sähköpostin, koska pyysit salasanan tyhjennystä. Nollataksesi salasanan käytä seuraavaa linkkiä:', // Body for the password reset email
	'email_body_2' => 'Jos et pyytänyt tätä, voit jättää huomiotta tämän sähköpostin.',
	'password_email_set' => 'Onnistui. Tarkista sähköpostisi seuraavista ohjeista.',
	'username_not_found' => 'Käyttäjänimeä ei ole olemassa.',
=======
	'you_have_received_a_warning' => 'Olet saanut varoituksen {x} päivämäärältä {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Kuittaa',
	
	// Forgot password
	'password_reset' => 'Salasanan nollaus',
	'email_body' => 'Sait tämän sähköpostin, koska olet pyytänyt salasanan nollausta. Nollaa salasanasi klikkaamalla seuraavaa linkkiä:', // Body for the password reset email
	'email_body_2' => 'Jos et pyytänyt tätä nollausta, voit jättää sähköpostin huomiotta.',
	'password_email_set' => 'Onnistui. Tarkista sähköpostisi seuraavien ohjeiden varalta.',
	'username_not_found' => 'Käyttäjänimeä ei löytynyt.',
>>>>>>> upstream/master
	'change_password' => 'Vaihda salasana',
	'your_password_has_been_changed' => 'Salasanasi on vaihdettu.',
	
	// Profile page
	'profile' => 'Profiili',
	'player' => 'Pelaaja',
	'offline' => 'Offline',
	'online' => 'Online',
	'pf_registered' => 'Rekisteröitynyt:',
	'pf_posts' => 'Viestit:',
	'pf_reputation' => 'Maine:',
<<<<<<< HEAD
	'user_hasnt_registered' => 'Tämä käyttäjä ei ole vielä rekisteröitynyt',
	'user_no_friends' => 'Tämä käyttäjä ei ole lisännyt ystäviä',
	'send_message' => 'Lähetä viesti',
	'remove_friend' => 'Poista ystävistä',
	'add_friend' => 'Lisää ystäväksi',
	'last_online' => 'Viimeksi online:',
	'find_a_user' => 'Find a user',
	'user_not_following' => 'This user does not follow anyone.',
	'user_no_followers' => 'This user has no followers.',
	'following' => 'FOLLOWING',
	'followers' => 'FOLLOWERS',
	'display_location' => 'From {x}.', // Don't replace {x}, which will be the user's location
	'display_age_and_location' => '{x}, from {y}.', // Don't replace {x} which will be the user's age, and {y} which will be their location
	'write_on_user_profile' => 'Write something on {x}\'s profile...', // Don't replace {x}
	'write_on_own_profile' => 'Write something on your profile...',
	'profile_posts' => 'Profile Posts',
	'no_profile_posts' => 'No profile posts yet.',
	'invalid_wall_post' => 'Invalid wall post. Please ensure your post is between 2 and 2048 characters.',
	'about' => 'About',
	'reply' => 'Reply',
	'x_likes' => '{x} likes', // Don't replace {x}
	'likes' => 'Likes',
	'no_likes' => 'No likes.',
	'post_liked' => 'Post liked.',
	'post_unliked' => 'Post unliked.',
	'no_posts' => 'No posts.',
	'last_5_posts' => 'Last 5 posts',
	'follow' => 'Follow',
	'unfollow' => 'Unfollow',
	'name_history' => 'Name History',
	'changed_name_to' => 'Changed name to: {x} on {y}', // Don't replace {x} or {y}
	'original_name' => 'Original name:',
	'name_history_error' => 'Unable to retrieve username history.',
=======
	'user_hasnt_registered' => 'Käyttäjä ei ole rekisteröitynyt sivustolle vielä.',
	'user_no_friends' => 'Käyttäjä ei ole vielä lisännyt kavereita.',
	'send_message' => 'Lähetä viesti',
	'remove_friend' => 'Poista kaveri',
	'add_friend' => 'Lisää kaveri',
	'last_online' => 'Viimeksi nähty:',
	'find_a_user' => 'Etsi käyttäjää',
	'user_not_following' => 'Käyttäjä ei seuraa ketään.',
	'user_no_followers' => 'Käyttäjällä ei ole seuraajia.',
	'following' => 'Seuraa',
	'followers' => 'Seuraajat',
	'display_location' => 'Sijainti: {x}.', // Don't replace {x}, which will be the user's location
	'display_age_and_location' => '{x}, sijainnista {y}.', // Don't replace {x} which will be the user's age, and {y} which will be their location
	'write_on_user_profile' => 'Kirjoita jotain {x}:n profiiliin...', // Don't replace {x}
	'write_on_own_profile' => 'Kirjoita jotain profiiliisi...',
	'profile_posts' => 'Profiiliviestit',
	'no_profile_posts' => 'Ei profiiliviestejä',
	'invalid_wall_post' => 'Virheellinen seinäviesti. Varmista, että viestisi on 2-2048 merkin väliltä.',
	'about' => 'Tietoja',
	'reply' => 'Vastaa',
	'x_likes' => '{x} tykkäystä', // Don't replace {x}
	'likes' => 'Tykkäykset',
	'no_likes' => 'Ei tykkäyksiä.',
	'post_liked' => 'Tykätyt viestit.',
	'post_unliked' => 'Ei tykätyt viestit.',
	'no_posts' => 'Ei viestejä.',
	'last_5_posts' => 'Viimeiset viisi (5) viestiä',
	'follow' => 'Seuraa',
	'unfollow' => 'Lopeta seuraaminen',
	'name_history' => 'Nimihistoria',
	'changed_name_to' => 'Vaihtoi nimensä: {x} -> {y}', // Don't replace {x} or {y}
	'original_name' => 'Alkuperäinen nimi:',
	'name_history_error' => 'Virhe yrittäessä ladata historiaa.',
>>>>>>> upstream/master
	
	// Staff applications
	'staff_application' => 'Ylläpitohakemus',
	'application_submitted' => 'Hakemus lähetetty onnistuneesti.',
<<<<<<< HEAD
	'application_already_submitted' => 'Olet jo lähettänyt hakemuksen. Odota, että se on käsitelty ennen kuin voit lähettää uuden.',
	'not_logged_in' => 'Kirjaudu sisään nähdäksesi tämän sivun.',
=======
	'application_already_submitted' => 'Olet jo lähettänyt hakemuksen. Odota, että edellinen käsitellään ennen uuden lähettämistä.',
	'not_logged_in' => 'Kirjaudu sisään tarkastellaksesi tätä sivua.',
>>>>>>> upstream/master
	'application_accepted' => 'Hakemuksesi on hyväksytty.',
	'application_rejected' => 'Hakemuksesi on hylätty.'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => 'ModCP',
	'overview' => 'Yleisnäkymä',
<<<<<<< HEAD
	'reports' => 'Raportit',
=======
	'reports' => 'Ilmiannot',
>>>>>>> upstream/master
	'punishments' => 'Rangaistukset',
	'staff_applications' => 'Ylläpitohakemukset',
	
	// Punishments
	'ban' => 'Ban',
	'unban' => 'Unban',
<<<<<<< HEAD
	'warn' => 'Varoitus',
	'search_for_a_user' => 'Etsi käyttäjää',
	'user' => 'Käyttäjä:',
	'ip_lookup' => 'IP:n katselu:',
	'registered' => 'Rekisteröitynyt:',
	'reason' => 'Syy:',
	'cant_ban_root_user' => 'Can\'t punish the root user!',
	'invalid_reason' => 'Please enter a valid reason between 2 and 256 characters long.',
	'punished_successfully' => 'Punishment added successfully.',
	
	// Reports
	'report_closed' => 'Raportti suljettu.',
	'new_comment' => 'Uusi kommentti',
	'comments' => 'Kommentit',
	'only_viewed_by_staff' => 'Vain ylläpito voi katsoa',
	'reported_by' => 'Raportoijana',
	'close_issue' => 'Sulje ongelma.',
	'report' => 'Raportti:',
	'view_reported_content' => 'Näytä raportoitu sisältö',
	'no_open_reports' => 'Ei avonaisia raportteja',
	'user_reported' => 'Käyttäjä raportoitu',
=======
	'warn' => 'Varoita',
	'search_for_a_user' => 'Etsi käyttäjää',
	'user' => 'Käyttäjä:',
	'ip_lookup' => 'IP Lookup:',
	'registered' => 'Rekisteröitynyt:',
	'reason' => 'Syy:',
	'cant_ban_root_user' => 'Root-käyttäjää ei voida rangaista!',
	'invalid_reason' => 'Anna pätevä syy 2-256 merkin väliltä.',
	'punished_successfully' => 'Rangaistus lisätty onnistuneesti.',
	
	// Reports
	'report_closed' => 'Ilmianto suljettu.',
	'new_comment' => 'Uusi kommentti',
	'comments' => 'Kommentit',
	'only_viewed_by_staff' => 'Vain ylläpito voi nähdä tämän',
	'reported_by' => 'Ilmiantanut:',
	'close_issue' => 'Sulje ilmianto',
	'report' => 'Ilmianna:',
	'view_reported_content' => 'Näytä ilmiannettu sisältö',
	'no_open_reports' => 'Ei avoinna olevia ilmiantoja',
	'user_reported' => 'Ilmiannettu käyttäjä',
>>>>>>> upstream/master
	'type' => 'Tyyppi',
	'updated_by' => 'Päivittänyt',
	'forum_post' => 'Foorumiviesti',
	'user_profile' => 'Käyttäjäprofiili',
	'comment_added' => 'Kommentti lisätty.',
<<<<<<< HEAD
	'new_report_submitted_alert' => 'Uusi raportti käyttäjältä {x} koskien käyttäjää {y}', // Don't replace "{x}" or "{y}"
	'ingame_report' => 'Ingame Report',
	
	// Staff applications
	'comment_error' => 'Varmista, että kommenttisi on vähintään 2 ja enintään 2048 merkkiä pitkä.',
	'viewing_open_applications' => 'Näytetään <span class="label label-info">avoimet</span> hakemukset. Vaihda <a href="/mod/applications/?view=accepted"><span class="label label-success">hyväksytyksi</span></a> tai <a href="/mod/applications/?view=declined"><span class="label label-danger">hylätyksi</span></a>.',
	'viewing_accepted_applications' => 'Näytetään <span class="label label-success">hyväksytyt</span> hakemukset. Vaihda <a href="/mod/applications/"><span class="label label-info">avoimeksi</span></a> tai <a href="/mod/applications/?view=declined"><span class="label label-danger">hylätyksi</span></a>.',
	'viewing_declined_applications' => 'Näytetään <span class="label label-danger">hylätyt</span> hakemukset. Vaihda <a href="/mod/applications/"><span class="label label-info">avoimeksi</span></a> tai <a href="/mod/applications/?view=accepted"><span class="label label-success">hyväksytyksi</span></a>.',
	'time_applied' => 'Aika jolloin haettu',
	'no_applications' => 'Ei hakemuksia tässä kategoriassa',
	'viewing_app_from' => 'Näytetään hakemus käyttäjältä {x}', // Don't replace "{x}"
	'open' => 'Avoin',
	'accepted' => 'Hyväksytty',
	'declined' => 'Hylätty',
	'accept' => 'Hyväksy',
	'decline' => 'Hylkää',
	'new_app_submitted_alert' => 'Uusi hakemus lähetetty käyttäjältä {x}' // Don't replace "{x}"
=======
	'new_report_submitted_alert' => 'Uusi ilmianto käyttäjältä {x} koskien käyttäjää {y}', // Don't replace "{x}" or "{y}"
	'ingame_report' => 'In-game ilmianto',
	
	// Staff applications
	'comment_error' => 'Varmista, että kommenttisi on väliltä 2-2048 merkkiä.',
	'viewing_open_applications' => 'Näytetään <span class="label label-info">avoimia</span> hakemuksia. Merkitse <a href="/mod/applications/?view=accepted"><span class="label label-success">hyväksytyksi</span></a> tai <a href="/mod/applications/?view=declined"><span class="label label-danger">hylätyksi</span></a>.',
	'viewing_accepted_applications' => 'Näytetään <span class="label label-success">hyväksytyt</span> hakemukset. Merkitse <a href="/mod/applications/"><span class="label label-info">avoimeksi</span></a> tai <a href="/mod/applications/?view=declined"><span class="label label-danger">hylätyksi</span></a>.',
	'viewing_declined_applications' => 'Näytetään <span class="label label-danger">hylätyt</span> hakemukset. Merkitse <a href="/mod/applications/"><span class="label label-info">avoimeksi</span></a> tai <a href="/mod/applications/?view=accepted"><span class="label label-success">hyväksytyksi</span></a>.',
	'time_applied' => 'Hakenut',
	'no_applications' => 'Tässä kategoriassa ei ole hakemuksia.',
	'viewing_app_from' => 'Näytetään hakemukset käyttäjältä {x}', // Don't replace "{x}"
	'open' => 'Avoimet',
	'accepted' => 'Hyväksytyt',
	'declined' => 'Hylätyt',
	'accept' => 'Hyväksy',
	'decline' => 'Hylkää',
	'new_app_submitted_alert' => 'Uusi hakemus käyttäjältä {x}' // Don't replace "{x}"
>>>>>>> upstream/master
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => 'Uutiset',
<<<<<<< HEAD
	'social' => 'Sosiaaliset',
	'join' => 'Join',
=======
	'social' => 'Sosiaalinen',
	'join' => 'Liity',
>>>>>>> upstream/master
	
	// General terms
	'submit' => 'Lähetä',
	'close' => 'Sulje',
<<<<<<< HEAD
	'cookie_message' => '<strong>Sivusto käyttää evästeitä parantaakseen käyttökokemusta.</strong><p>Jos jatkat, hyväksyt evästeiden käytön.</p>',
	'theme_not_exist' => 'Valittua teemaa ei ole olemassa.',
=======
	'cookie_message' => '<strong>Tämä sivusto käyttää evästeitä käyttökokemuksen parantamiseksi</strong><p>Jatkamalla sivuston käyttöä, hyväksyt evästeiden käytön.</p>',
	'theme_not_exist' => 'Valittu teema ei ole olemassa.',
>>>>>>> upstream/master
	'confirm' => 'Vahvista',
	'cancel' => 'Peruuta',
	'guest' => 'Vieras',
	'guests' => 'Vieraat',
	'back' => 'Takaisin',
<<<<<<< HEAD
	'search' => 'Hae',
	'help' => 'Apua',
=======
	'search' => 'Etsi',
	'help' => 'Apu',
>>>>>>> upstream/master
	'success' => 'Onnistui',
	'error' => 'Virhe',
	'view' => 'Näytä',
	'info' => 'Info',
<<<<<<< HEAD
	'next' => 'Next',
	
	// Play page
	'connect_with' => 'Palvelimen IP {x}', // Don't replace {x}
	'online' => 'Online',
	'offline' => 'Offline',
	'status' => 'Status:',
	'players_online' => 'Pelaajia Online:',
	'queried_in' => 'Kysytty ajassa:',
	'server_status' => 'Serverin Status',
	'no_players_online' => 'Pelaajia ei ole online!',
	'x_players_online' => 'Tällähetkellä {x} pelaajaa online.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Sivu ladattu ajassa {x} sekunnissa.', // Don't replace {x}; 's' stands for 'seconds'
=======
	'next' => 'Seuraava',
	
	// Play page
	'connect_with' => 'Yhdistä palvelimelle IP:llä {x}', // Don't replace {x}
	'online' => 'Online',
	'offline' => 'Offline',
	'status' => 'Status:',
	'players_online' => 'Pelaajia paikalla:',
	'queried_in' => 'Kysely suoritettu:',
	'server_status' => 'Palvelimen Status',
	'no_players_online' => 'Pelaajia ei ole paikalla.',
	'1_player_online' => '1 pelaaja paikalla!!!',
	'x_players_online' => '{x} pelaajaa paikalla.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Sivu ladattu {x} sekunnissa.', // Don't replace {x}; 's' stands for 'seconds'
>>>>>>> upstream/master
	'none' => 'Ei yhtään',
	'404' => 'Emme löytäneet sivua.'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => 'Foorumit',
<<<<<<< HEAD
	'discussion' => 'Keskustelut',
	'stats' => 'Tilastot',
	'last_reply' => 'Viimeisin viesti',
	'ago' => 'sitten',
	'by' => 'by',
	'in' => '',
	'views' => 'näyttöjä',
	'posts' => 'viestejä',
	'topics' => 'ketjuja',
	'topic' => 'Ketju',
=======
	'discussion' => 'Keskustelu',
	'stats' => 'Tilastot',
	'last_reply' => 'Viimeisin vastaus',
	'ago' => 'sitten',
	'by' => 'kirjoittanut',
	'in' => 'in',
	'views' => 'nähty',
	'posts' => 'viestit',
	'topics' => 'aiheet',
	'topic' => 'Aihe',
>>>>>>> upstream/master
	'statistics' => 'Tilastot',
	'overview' => 'Yleisnäkymä',
	'latest_discussions' => 'Viimeisimmät keskustelut',
	'latest_posts' => 'Viimeisimmät viestit',
<<<<<<< HEAD
	'users_registered' => 'Käyttäjiä rekisteröitynä:',
	'latest_member' => 'Uusin jäsen:',
	'forum' => 'Foorumi',
	'last_post' => 'Viimeisin viesti',
	'no_topics' => 'Ei viestiketjuja',
	'new_topic' => 'Uusi viestiketju',
=======
	'users_registered' => 'Käyttäjiä rekisteröitynyt:',
	'latest_member' => 'Viimeisin jäsen:',
	'forum' => 'Foorumi',
	'last_post' => 'Viimeisin viesti',
	'no_topics' => 'Ei aiheita',
	'new_topic' => 'Uusi aihe',
>>>>>>> upstream/master
	'subforums' => 'Alifoorumit:',
	
	// View topic view
	'home' => 'Etusivu',
	'topic_locked' => 'Ketju lukittu',
	'new_reply' => 'Uusi vastaus',
<<<<<<< HEAD
	'mod_actions' => 'Mod-toiminnot',
=======
	'mod_actions' => 'Moderoi',
>>>>>>> upstream/master
	'lock_thread' => 'Lukitse ketju',
	'unlock_thread' => 'Avaa ketju',
	'merge_thread' => 'Yhdistä ketju',
	'delete_thread' => 'Poista ketju',
<<<<<<< HEAD
	'confirm_thread_deletion' => 'Oletko varma, että haluat poistaa tämän ketjun?',
	'move_thread' => 'Siirrä ketju',
	'sticky_thread' => '"Liimaa" ketju',
	'report_post' => 'Raportoi viesti',
=======
	'confirm_thread_deletion' => 'Oletko varma, että haluat poistaa tämän viestiketjun?',
	'move_thread' => 'Siirrä ketju',
	'sticky_thread' => 'Sticky ketju',
	'report_post' => 'Ilmianna viesti',
>>>>>>> upstream/master
	'quote_post' => 'Lainaa viestiä',
	'delete_post' => 'Poista viesti',
	'edit_post' => 'Muokkaa viestiä',
	'reputation' => 'maine',
	'confirm_post_deletion' => 'Oletko varma, että haluat poistaa tämän viestin?',
	'give_reputation' => 'Anna mainetta',
	'remove_reputation' => 'Poista mainetta',
	'post_reputation' => 'Viestin maine',
<<<<<<< HEAD
	'no_reputation' => 'Ei mainetta tälle viestille',
	're' => '',
=======
	'no_reputation' => 'Ei mainetta tällä viestillä',
	're' => 'VS:',
>>>>>>> upstream/master
	
	// Create post view
	'create_post' => 'Luo viesti',
	'post_submitted' => 'Viesti lähetetty',
<<<<<<< HEAD
	'creating_post_in' => 'Luodaan viestiä: ',
	'topic_locked_permission_post' => 'Viestiketju on lukittu. Voit silti lähettää viestin.',
=======
	'creating_post_in' => 'Luodaan viestiä ketjussa: ',
	'topic_locked_permission_post' => 'Tämä ketju on lukittu, sinulla on kuitenkin oikeus lähettää viesti.',
>>>>>>> upstream/master
	
	// Edit post view
	'editing_post' => 'Muokataan viestiä',
	
	// Sticky threads
	'thread_is_' => 'Ketju ',
<<<<<<< HEAD
	'now_sticky' => 'on nyt liimattu',
	'no_longer_sticky' => ' ei ole enää liimattu',
	
	// Create topic
	'topic_created' => 'Viestiketju luotu.',
	'creating_topic_in_' => 'Luodaan viestiketjua foorumissa ',
	'thread_title' => 'Ketjun otsikko',
	'confirm_cancellation' => 'Oletko varma?',
	'label' => 'Leima',
	
	// Reports
	'report_submitted' => 'Raportti lähetetty.',
	'view_post_content' => 'Näytä viestin sisältö',
	'report_reason' => 'Raportin syy',
=======
	'now_sticky' => 'on nyt sticky ketju.',
	'no_longer_sticky' => 'ei ole enää sticky ketju.',
	
	// Create topic
	'topic_created' => 'Ketju luotu',
	'creating_topic_in_' => 'Luodaan ketjua foorumissa ',
	'thread_title' => 'Ketjun otsikko',
	'confirm_cancellation' => 'Oletko varma?',
	'label' => 'Etuliite',
	
	// Reports
	'report_submitted' => 'Ilmianto lähetetty.',
	'view_post_content' => 'Näytä viestin sisältö',
	'report_reason' => 'Ilmiannon syy',
>>>>>>> upstream/master
	
	// Move thread
	'move_to' => 'Siirrä:',
	
	// Merge threads
<<<<<<< HEAD
	'merge_instructions' => 'Ketju jonka haluat yhdistää <strong>täytyy</strong> olla samassa foorumissa. Siirrä ketju tarvittaessa.',
	'merge_with' => 'Yhdistä:',
	
	// Other
	'forum_error' => 'Emme löytäneet foorumia tai viestikietjua.',
	'are_you_logged_in' => 'Oletko kirjautunut sisään?',
	'online_users' => 'Käyttäjiä paikalla',
	'no_users_online' => 'Käyttäjiä ei ole paikalla.',
	
	// Search
	'search_error' => 'Laita hakukyselyyn 1-20 merkkiä.',
	'no_search_results' => 'No search results have been found.',
	
	//Share on a social-media.
	'sm-share' => 'Jakaa',
=======
	'merge_instructions' => 'Yhdistettävän ketjun <strong>täytyy olla</strong> samassa foorumissa. Siirrä ketju, jos tarpeellista.',
	'merge_with' => 'Yhdistä:',
	
	// Other
	'forum_error' => 'Pahoittelut, emme löytäneet foorumia tai ketjua.',
	'are_you_logged_in' => 'Oletko kirjautunut sisään?',
	'online_users' => 'Paikalla olevat käyttäjät:',
	'no_users_online' => 'Käyttäjiä ei ole paikalla.',
	
	// Search
	'search_error' => 'Syötä hakusana 1-32 merkin väliltä.',
	'no_search_results' => 'Hakua täyttäviä kohteita ei löytynyt.',
	
	//Share on a social-media.
	'sm-share' => 'Jaa',
>>>>>>> upstream/master
	'sm-share-facebook' => 'Jaa Facebookissa',
	'sm-share-twitter' => 'Jaa Twitterissä',
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
<<<<<<< HEAD
	'greeting' => 'Hei',
	'message' => 'Kiitos rekisteröitymisestä! Suorittaaksesi rekisteröinnin, klikkaa seuraavaa linkkiä:',
=======
	'greeting' => 'Hei,',
	'message' => 'kiitos rekisteröitymisestäsi! Viimeistelläksesi rekisteröinnin, klikkaa seuraavaa linkkiä:',
>>>>>>> upstream/master
	'thanks' => 'Kiitos,'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => 's', // Shortened "seconds", eg "s"
	'less_than_a_minute' => 'alle minuutti sitten',
	'1_minute' => 'minuutti sitten',
	'_minutes' => '{x} minuuttia sitten',
	'about_1_hour' => 'noin tunti sitten',
	'_hours' => '{x} tuntia sitten',
<<<<<<< HEAD
	'1_day' => 'päivä sitten',
=======
	'1_day' => '1 päivä sitten',
>>>>>>> upstream/master
	'_days' => '{x} päivää sitten',
	'about_1_month' => 'noin kuukausi sitten',
	'_months' => '{x} kuukautta sitten',
	'about_1_year' => 'noin vuosi sitten',
	'over_x_years' => 'yli {x} vuotta sitten'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
<<<<<<< HEAD
	'display_records_per_page' => 'Näytä _MENU_ kappaletta per sivu', // Don't replace "_MENU_"
	'nothing_found' => 'Ei tuloksia',
	'page_x_of_y' => 'Näytetään sivu _PAGE_  _PAGES_:sta sivusta', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'Ei saatavilla',
	'filtered' => '(suodatettiin _MAX_ tuloksesta yhteensä)' // Don't replace "_MAX_"
=======
	'display_records_per_page' => 'Näytä _MENU_ tulosta per sivu', // Don't replace "_MENU_"
	'nothing_found' => 'Ei tuloksia.',
	'page_x_of_y' => 'Näytetään sivu _PAGE_ _PAGES_ sivusta.', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'Ei tuloksia saatavilla.',
	'filtered' => '(suodatettu _MAX_ tuloksesta yhteensä)' // Don't replace "_MAX_"
>>>>>>> upstream/master
);
 
/*
 *  API language
 */
$api_language = array(
<<<<<<< HEAD
	'register' => 'Complete Registration'
=======
	'register' => 'Viimeistele rekisteröinti'
>>>>>>> upstream/master
);
 
?>
