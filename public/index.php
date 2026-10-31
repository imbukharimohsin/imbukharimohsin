<?php
$skills = [
	'Identity & Access Management' => ['Microsoft Entra ID (Azure AD)', 'Active Directory', 'RBAC', 'MFA', 'Conditional Access', 'PIM', 'SSO', 'Zero Trust', 'Least Privilege'],
	'Client- & Endpoint-Management' => ['Microsoft Intune (MDM/MAM)', 'Windows Autopilot', 'Compliance-Richtlinien', 'SCCM', 'WSUS', 'GPO', 'Windows 10/11', 'macOS', 'iOS/iPadOS'],
	'Microsoft 365' => ['M365-Administration', 'SharePoint Online', 'Microsoft Teams', 'OneDrive', 'Lizenzverwaltung', 'Onboarding/Offboarding'],
	'Microsoft Azure' => ['Virtuelle Maschinen', 'VNets & Subnetze', 'NSG', 'Storage Accounts', 'Key Vault', 'Azure Monitor', 'Ressourcengruppen', 'Subscriptions'],
	'Automatisierung & Systeme' => ['PowerShell', 'Windows Server', 'DNS/DHCP', 'TCP/IP', 'VPN', 'Linux-Grundkenntnisse'],
	'ITSM & Tools' => ['ServiceNow', 'Jira', 'ITIL', 'SLA-Management', 'Incident- & Request-Management', 'IT-Dokumentation', 'SOPs'],
];

$experience = [
	[
		'title' => 'IT Support Engineer (Werkstudent)',
		'period' => '08/2023 – 01/2025',
		'place' => 'RedEx IT Limited (IT-Dienstleister) · Kunden: Sienna Real Estate GmbH und Olympus Europa · Hamburg, Deutschland',
		'points' => [
			'Verwaltung von über 500 Benutzerkonten in Active Directory und Microsoft Entra ID, inkl. RBAC-Rollenzuweisungen, Sicherheitsgruppen und Gruppenrichtlinien (GPO)',
			'Verwaltung von über 600 Windows- und iOS/iPadOS-Geräten in Microsoft Intune (MDM/MAM) und Durchsetzung von Compliance- und Konfigurationsrichtlinien',
			'Reduzierung des Aufwands für die Gerätebereitstellung um ca. 40 % durch standardisierte Rollouts mit Windows Autopilot und Intune',
			'Konfiguration von MFA, Conditional-Access-Richtlinien und VPN-Clients für den sicheren Remote-Zugriff hybrid arbeitender Mitarbeitender',
			'Administration der Microsoft-365-Dienste (SharePoint, Teams, OneDrive) und Lizenzverwaltung für über 500 Anwender',
			'Onboarding und Offboarding von Mitarbeitenden sowie Bearbeitung von Incidents und Service Requests in ServiceNow',
			'Automatisierung wiederkehrender Administrationsaufgaben mit PowerShell und Dokumentation der Prozesse als SOPs',
		],
	],
	[
		'title' => 'Broadcast & IT Support Engineer',
		'period' => '10/2016 – 12/2020',
		'place' => 'Dunya Media Group · Lahore, Pakistan',
		'points' => [
			'1st- und 2nd-Level-Support für über 300 Anwender in Windows- und macOS-Umgebungen',
			'Administration von Windows Server und Active Directory, inkl. Benutzer-, Gruppen- und Berechtigungsverwaltung',
			'Patch-Management: Windows-Updates und Sicherheitspatches für über 200 Endgeräte mit SCCM und WSUS',
			'Verkürzung der Onboarding-Zeit um ca. 25 % durch standardisierte Bereitstellungsprozesse',
			'Bearbeitung von über 50 Incidents und Service Requests pro Monat in ServiceNow unter Einhaltung der SLAs',
			'Einrichtung von Arbeitsplätzen, Dockingstationen, Dual-Monitor-Setups und Peripherie; Wartung der IT- und Broadcast-Hardware',
		],
	],
	[
		'title' => 'Servicemitarbeiter (Teilzeit)',
		'period' => '03/2026 – heute',
		'place' => 'Burger King · Rostock, Deutschland',
		'points' => [
			'Teilzeittätigkeit parallel zu Azure-Administrator-Weiterbildungen und praktischen Azure-Laborprojekten',
		],
	],
];

$projects = [
	[
		'title' => 'Azure Cloud Infrastructure Lab',
		'period' => '03/2026 – 04/2026',
		'place' => 'Privates Projekt',
		'points' => [
			'Bereitstellung von Azure-VMs, Ressourcengruppen und Storage Accounts; Konfiguration von VNets, Subnetzen und NSGs',
			'Umsetzung von RBAC mit Entra-ID-Identitäten nach dem Least-Privilege-Prinzip',
			'Automatisierte Bereitstellung der Infrastruktur mit ARM-Templates und Azure CLI (Infrastructure as Code)',
			'Einrichtung von Azure Monitor für Metriken, Alerts und Performance-Überwachung',
		],
	],
	[
		'title' => 'Aufbau eines Rechenzentrums – Lahore News',
		'period' => '08/2018 – 12/2018',
		'place' => 'Dunya Media Group · Lahore, Pakistan',
		'points' => [
			'Installation und Konfiguration von Servern, Speichersystemen, Switches und Routern für ein neues Rechenzentrum',
			'Rack-Montage, strukturierte Verkabelung (Cat5e/Cat6) und Konfiguration von Patchfeldern',
			'Hardware-, Netzwerk- und Konnektivitätstests von der Staging-Phase bis zum Go-live',
		],
	],
];

$education = [
	['title' => 'M.Sc. Electrical & Information Technology', 'period' => '04/2021 – 05/2025', 'place' => 'Universität Rostock · Rostock, Deutschland'],
	['title' => 'B.Eng. Electrical & Communication Engineering', 'period' => '10/2012 – 08/2016', 'place' => 'Government College University · Faisalabad, Pakistan'],
	['title' => 'Udemy-Kurs: Azure Administrator Associate (AZ-104)', 'period' => '04/2026', 'place' => 'Weiterbildung'],
	['title' => 'Udemy-Kurs: Azure Fundamentals (AZ-900)', 'period' => '01/2026', 'place' => 'Weiterbildung'],
];

function e(string $text): string
{
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function render_entries(array $entries): void
{
	foreach ($entries as $entry) {
		echo '<article class="entry">';
		echo '<div class="entry-head"><h3>' . e($entry['title']) . '</h3><span>' . e($entry['period']) . '</span></div>';
		echo '<p class="place">' . e($entry['place']) . '</p>';
		if (!empty($entry['points'])) {
			echo '<ul>';
			foreach ($entry['points'] as $point) {
				echo '<li>' . e($point) . '</li>';
			}
			echo '</ul>';
		}
		echo '</article>';
	}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Portfolio von Mohsin Bukhari, IT-Administrator mit Schwerpunkt Microsoft Azure und Intune.">
	<title>Mohsin Bukhari | IT-Administrator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="hero">
		<div class="container">
			<h1>Mohsin Bukhari</h1>
			<p class="role">IT-Administrator | Microsoft Azure &amp; Intune | IT-Support Engineer</p>
			<p>Rostock, Deutschland · Uneingeschränkte Arbeitserlaubnis · Ab sofort verfügbar</p>
			<nav>
				<a href="#profil">Profil</a>
				<a href="#kompetenzen">Kompetenzen</a>
				<a href="#erfahrung">Erfahrung</a>
				<a href="#projekte">Projekte</a>
				<a href="#ausbildung">Ausbildung</a>
				<a href="#kontakt">Kontakt</a>
			</nav>
		</div>
	</header>

	<main class="container">
		<section id="profil">
			<h2>Profil</h2>
			<p>IT-Administrator und IT-Support Engineer mit über 5 Jahren Erfahrung im 1st- und 2nd-Level-Support und in der Microsoft-Systemadministration, davon 1,5 Jahre in Deutschland in der Administration von Microsoft 365, Entra ID und Intune für über 500 Anwender bei Kunden eines IT-Dienstleisters.</p>
			<p>Fundierte Kenntnisse in Active Directory, Conditional Access, MFA, Windows Autopilot und PowerShell sowie praktische Azure-Laborerfahrung (VMs, VNets, RBAC). Schwerpunkt auf sicheren, skalierbaren und sauber dokumentierten Modern-Workplace- und Azure-Umgebungen.</p>
		</section>

		<section id="kompetenzen">
			<h2>Kompetenzen</h2>
			<div class="skills">
				<?php foreach ($skills as $group => $items): ?>
					<div class="skill-group">
						<h3><?= e($group) ?></h3>
						<ul class="tags">
							<?php foreach ($items as $item): ?>
								<li><?= e($item) ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		<section id="erfahrung">
			<h2>Berufserfahrung</h2>
			<?php render_entries($experience); ?>
		</section>

		<section id="projekte">
			<h2>Projekte</h2>
			<?php render_entries($projects); ?>
		</section>

		<section id="ausbildung">
			<h2>Ausbildung &amp; Weiterbildung</h2>
			<?php render_entries($education); ?>
		</section>

		<section id="sprachen">
			<h2>Sprachen &amp; Führerschein</h2>
			<p>Englisch: C1 (verhandlungssicher) · Deutsch: B1 (gute Kenntnisse) · Urdu: Muttersprache</p>
			<p>Führerschein Klasse B</p>
		</section>

		<section id="kontakt">
			<h2>Kontakt</h2>
			<p>
				<a href="mailto:bukharimohsin@hotmail.com">bukharimohsin@hotmail.com</a><br>
				<a href="https://linkedin.com/in/imbukharimohsin" rel="noopener">linkedin.com/in/imbukharimohsin</a>
			</p>
		</section>
	</main>

	<footer>
		<div class="container">© <?= date('Y') ?> Mohsin Bukhari</div>
	</footer>
</body>
</html>
