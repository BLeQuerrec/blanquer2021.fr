<?php

$locations = array(
	"https://www.liberation.fr/france/2020/08/21/masques-blanquer-critique-apres-avoir-alourdi-la-liste-de-fournitures_1797465",
	"https://www.mediapart.fr/journal/france/270820/le-nouveau-protocole-sanitaire-de-blanquer-ne-satisfait-pas-les-syndicats?onglet=full",
	"https://www.francetvinfo.fr/sante/maladie/coronavirus/masques-sanitaires/rentree-scolaire-jean-michel-blanquer-na-pas-rassure-selon-le-snuipp-fsu_4080943.html",
	"https://www.humanite.fr/education-blanquer-et-ses-choix-critiques-de-linterieur-689168",
	"https://www.acrimed.org/Mobilisation-des-enseignants-Blanquer-meprise-les",
	"https://www.humanite.fr/education-nationale-jean-michel-blanquer-doit-partir-679123",
	"http://www.cafepedagogique.net/lexpresso/Pages/2020/05/14052020Article637250435761243497.aspx",
	"http://www.cafepedagogique.net/lexpresso/Pages/2020/06/05062020Article637269404829476477.aspx",
	"https://www.humanite.fr/blanquer-face-son-administration-685465",
	"https://www.lemonde.fr/education/article/2019/05/18/contre-les-reformes-blanquer-5-000-enseignants-manifestent-a-paris_5463979_1473685.html",
	"https://www.liberation.fr/debats/2020/01/14/le-bac-blanquer-ne-passera-pas_1773006",
	"http://www.cafepedagogique.net/lexpresso/Pages/2020/07/24072020Article637311809195202398.aspx",
	"https://www.lejdd.fr/Societe/Education/encore-une-rentree-sans-ecole-pour-des-enfants-en-situation-de-handicap-3988309",
	"https://www.lavoixdunord.fr/749002/article/2020-05-05/faute-de-moyens-suffisants-l-ecole-de-serques-ne-rouvrira-pas-ses-portes-mardi",
	"https://www.rue89strasbourg.com/faute-de-moyens-les-vacances-apprenantes-peinent-a-cibler-les-eleves-decrocheurs-183384",
	"http://www.cafepedagogique.net/lexpresso/Pages/2020/05/05052020Article637242620524531351.aspx",
	"https://www.lesechos.fr/politique-societe/societe/reforme-du-bac-les-epreuves-de-controle-continu-au-coeur-du-bras-de-fer-entre-les-syndicats-et-blanquer-1162331",
	"https://www.liberation.fr/debats/2020/05/06/bac-2020-ne-laissons-pas-blanquer-eliminer-les-decrocheurs_1787529",
	"https://www.politis.fr/articles/2020/02/bac-blanquer-ou-bac-bloque-41351/",
	"https://www.humanite.fr/education-le-nouveau-bac-blanquer-option-garde-vue-684379",
	"https://blogs.mediapart.fr/mariannmazc/blog/120120/lettre-ouverte-jean-michel-blanquer-sur-sa-reforme-du-bac",
	"https://www.letudiant.fr/educpros/actualite/reforme-du-bac-le-ministere-de-l-education-nationale-patine.html",
	"https://www.liberation.fr/france/2020/01/19/reforme-du-bac-contre-blanquer-l-epreuve-continue_1773998",
	"https://www.nouvelobs.com/education/20190704.OBS15470/resultats-du-bac-blanquer-inflexible-les-profs-denoncent-une-declaration-de-guerre.html",
	"https://www.ouest-france.fr/pays-de-la-loire/angers-49000/video-reforme-du-bac-a-angers-les-profs-donnent-de-la-voix-contre-le-bac-blanquer-dbf68a58-4a87-11ea-969b-5d3ce6229b08",
	"https://www.lemonde.fr/societe/article/2020/06/23/baccalaureat-pourquoi-il-ne-faut-pas-perenniser-le-controle-continu_6043830_3224.html",
	"https://www.20minutes.fr/societe/2707799-20200131-reforme-bac-climat-tension-perdure-autour-nouvelles-epreuves",
	"https://www.humanite.fr/education-bac-blanquer-envoie-les-lyceens-dans-le-mur-682932",
	"https://www.humanite.fr/education-nationale-le-bac-blanquer-chronique-dun-crash-annonce-681235",
	"https://www.huffingtonpost.fr/entry/reforme-du-bac-e3c-blocage-rennes_fr_5e3aa20ac5b6b5fb438a84e3",
	"https://www.20minutes.fr/societe/2728803-20200228-reforme-bac-eleves-sous-pression-complexite-rapport-critique-e3c-systeme-specialites",
	"https://www.leparisien.fr/paris-75/lyceens-gardes-a-vue-les-avocates-denoncent-du-jamais-vu-totalement-disproportionne-09-02-2020-8256249.php",
	"https://www.20minutes.fr/societe/2713627-20200207-reforme-bac-policiers-cagoules-contraint-lyceens-parisiens-passer-epreuves-controle-continu"
);

header("Location: " . $locations[rand(0, count($locations)-1)], true, 302);
