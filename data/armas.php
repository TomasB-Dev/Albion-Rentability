
<?php
// Definir un array asociativo para cada grupo de opciones
$opciones = array(
    'ARCOS' => array(
        '_2H_BOW' => 'Arco',
        '_2H_WARBOW' => 'Arco de Guerra',
        '_2H_LONGBOW' => 'Arco Largo',
        '_2H_LONGBOW_UNDEAD' => 'Arco Susurrante',
        '_2H_BOW_HELL' => 'Arco de Lamentaciones',
        '_2H_BOW_KEEPER' => 'Arco de Badon',
        '_2H_BOW_AVALON' => 'Arco Avaloniano',
    ),
    'MALDICIONES' => array(
        '_MAIN_CURSEDSTAFF' => 'Bastón Maldito',
        '_2H_CURSEDSTAFF' => 'Gran Bastón Maldito',
        '_2H_DEMONICSTAFF' => 'Bastón Demoniaco',
        '_MAIN_CURSEDSTAFF_UNDEAD' => 'Maldicion de Vida',
        '_2H_SKULLORB_HELL' => 'Calavera Maldita',
        '_2H_CURSEDSTAFF_MORGANA' => 'Damnation',
        '_MAIN_CURSEDSTAFF_AVALON' => 'Invocado Oscuro',
    ),
    'BALLESTAS' => array(
        '_2H_CROSSBOW' => 'Ballesta Oneshot',
        '_2H_CROSSBOWLARGE' => 'Ballesta Pesada',
        '_2H_REPEATINGCROSSBOW_UNDEAD' => 'Ballesta Repetidora',
        '_2H_DUALCROSSBOW_HELL' => 'Lanzasaetas',
        '_2H_CROSSBOWLARGE_MORGANA' => 'Arco de Asedio',
        '_2H_CROSSBOW_CANNON_AVALON' => 'Modelador de Energia',
    ),
    'FUEGOS' => array(
        '_MAIN_FIRESTAFF' => 'Bastón Igneo',
        '_2H_FIRESTAFF' => 'Gran Bastón Igneo',
        '_2H_INFERNOSTAFF' => 'Bastón Infernal',
        '_MAIN_FIRESTAFF_KEEPER' => 'Baston Incontrolable',
        '_2H_FIRESTAFF_HELL' => 'Bastón de Meteorito',
        '_2H_INFERNOSTAFF_MORGANA' => 'Bastón Flamigero',
        '_2H_FIRE_RINGPAIR_AVALON' => 'Cancion del Despertar',
    ),
    'HIELO' => array(
        '_MAIN_FROSTSTAFF' => 'Bastón de Hielo',
        '_2H_FROSTSTAFF' => 'Gran Bastón de Hielo',
        '_2H_GLACIALSTAFF' => 'Bastón Glacial',
        '_MAIN_FROSTSTAFF_KEEPER' => 'Bastón de Escarcha',
        '_2H_ICEGAUNTLETS_HELL' => 'Bastón de Carambanos',
        '_2H_ICECRYSTAL_UNDEAD' => 'Prisma',
        '_MAIN_FROSTSTAFF_AVALON' => 'Grito Gelido',
    ),
    'ARCANOS' => array(
        '_MAIN_ARCANESTAFF' => 'Bastón Arcano',
        '_2H_ARCANESTAFF' => 'Gran Arcano',
        '_2H_ENIGMATICSTAFF' => 'Gran Bastón Arcano',
        '_MAIN_ARCANESTAFF_UNDEAD' => 'Bastón de Brujeria',
        '_2H_ARCANESTAFF_HELL' => 'Bastón Oculto',
        '_2H_ENIGMATICORB_MORGANA' => 'Locus',
        '_2H_ARCANE_RINGPAIR_AVALON' => 'Sonido Equilibrado',
        '_2H_ARCANESTAFF_CRYSTA' => 'Bastón Astral',
    ),
    'HEALER SAGRADO' => array(
        '_MAIN_HOLYSTAFF' => 'Bastón Sagrado',
        '_2H_HOLYSTAFF' => 'Gran Bastón Sagrado',
        '_2H_DIVINESTAFF' => 'Bastón Divino',
        '_MAIN_HOLYSTAFF_MORGANA' => 'Toque de Vida',
        '_2H_HOLYSTAFF_HELL' => 'Bastón Caido',
        '_2H_HOLYSTAFF_UNDEAD' => 'Bastón de Redencion',
        '_MAIN_HOLYSTAFF_AVALON' => 'Santificador',
    ),
    'HEALER NATURE' => array(
        '_MAIN_NATURESTAFF' => 'Bastón Natural',
        '_2H_NATURESTAFF' => 'Gran Bastón Natural',
        '_2H_WILDSTAFF' => 'Bastón Salvaje',
        '_MAIN_NATURESTAFF_KEEPER' => 'Bastón de Druida',
        '_2H_NATURESTAFF_HELL' => 'Bastón de Infortunio',
        '_2H_NATURESTAFF_KEEPER' => 'Bastón Desenfrenado',
        'T_MAIN_NATURESTAFF_AVALON'=>'Raiz Férrea',
    ),
    'DAGAS' => array(
        '_MAIN_DAGGER' => 'Daga',
        '_2H_DAGGERPAIR' => 'Dagas Dobles',
        '_2H_CLAWPAIR' => 'Garras',
        '_MAIN_RAPIER_MORGANA' => 'Sangradora',
        '_MAIN_DAGGER_HELL' => 'Colmillo Demoniaco',
        '_2H_DUALSICKLE_UNDEAD' => 'Concede Muerte',
        '_2H_DAGGER_KATAR_AVALON' => 'Furia Contenida',
    ),
    'LANZAS' => array(
        '_MAIN_SPEAR' => 'Lanza',
        '_2H_SPEAR' => 'Pica',
        '_2H_GLAIVE' => 'Guja del Iniciado', 
        '_MAIN_SPEAR_KEEPER' => 'Lanza de Garza', 
        '_2H_HARPOON_HEL' => 'Caza Espiritus', 
        '_2H_TRIDENT_UNDEAD' => 'Lanza de Trinidad',
        '_MAIN_SPEAR_LANCE_AVALON' => 'Portador del Alba',
        '_2H_GLAIVE_CRYSTAL' => 'Guja de Cristal'
    ),
    'HACHAS' => array(
        '_MAIN_AXE' => 'Hacha de Guerra',
        '_2H_AXE' => 'Gran Hacha',
        '_2H_HALBERD' => 'Alabarda',
        '_2H_HALBERD_MORGANA' => 'Llamacarronia',
        '_2H_SCYTHE_HELL' => 'Guadaña Infernal',
        '_2H_DUALAXE_KEEPER' => 'Patas de Oso',
        '_2H_AXE_AVALON' => 'Rompe Reinos',
    ),
    'ESPADAS' => array(
        '_MAIN_SWORD' => 'Espada Ancha',
        '_2H_CLAYMORE' => 'Claymore',
        '_2H_DUALSWORD' => 'Doble Espadas',
        '_MAIN_SCIMITAR_MORGANA' => 'Clarent',
        '_2H_CLEAVER_HEL' => 'Espada Tallada',
        '_2H_DUALSCIMITAR_UNDEAD' => 'Galatinas',
        '_2H_CLAYMORE_AVALON' => 'Crea Reyes',
        '_MAIN_SWORD_CRYSTAL' => 'Espada de Cristal',
    ),
    'VARAS' => array(
        '_2H_QUARTERSTAFF' => 'Vara',
        '_2H_IRONCLADEDSTAFF' => 'Vara Metalica',
        '_2H_DOUBLEBLADEDSTAFF' => 'Bastón de Doble Filo',
        '_2H_COMBATSTAFF_MORGANA' => 'Bastón de Monje',
        '_2H_TWINSCYTHE_HELL' => 'Guaña de Almas',
        '_2H_ROCKSTAFF_KEEPER' => 'Bastón de Equilibrio',
        '_2H_QUARTERSTAFF_AVALON' => 'Vara Avaloniana',
    ),
    'MARTILLOS' => array(
        '_MAIN_HAMMER' => 'Martillo',
        '_2H_POLEHAMMER' => 'Martillo Largo',
        '_2H_HAMMER' => 'Gran Martillo',
        '_2H_HAMMER_UNDEAD' => 'Martillo de La Tumba',
        '_2H_DUALHAMMER_HELL' => 'Martillo de Forjas',
        '_2H_RAM_KEEPER' => 'Tronco',
        '_2H_HAMMER_AVALON' => 'Mano de la Justicia',
    ),
    'MAZAS' => array(
        '__MAIN_MACE' => 'Maza 1h',
        '_2H_MACE' => 'Maza Pesada',
        '__2H_FLAIL' => 'Mangual',
        '_MAIN_ROCKMACE_KEEPER' => 'Maza de Lecho',
        '_MAIN_MACE_HELL' => 'Maza de Incubo',
        '_2H_MACE_MORGANA' => 'Camlann',
        '_2H_DUALMACE_AVALON' => 'Juradores',
    ),
    'GUANTES' => array(
        '_2H_KNUCKLES_SET1' => 'Guantes de Peleador',
        '_2H_KNUCKLES_SET2' => 'Brazales de Batalla',
        '_2H_KNUCKLES_SET3' => 'Guanteletes de Puas',
        '_2H_KNUCKLES_KEEPER' => 'Zarpas Osunas',
        '_2H_KNUCKLES_HELL' => 'Manos Infernales',
        '_2H_KNUCKLES_MORGANA' => 'Cetus Corvidos',
        '_2H_DUALMACE_AVALON' => 'Puños de Avalon',
    ),
    'CAMBIAFORMAS' => array(
        '_2H_SHAPESHIFTER_SET1' => 'Bastón Merodeador',
        '_2H_SHAPESHIFTER_SET2' => 'Personal Enraizado',
        '_2H_SHAPESHIFTER_SET3' => 'Personal primario',
        '_2H_SHAPESHIFTER_MORGANA' => 'Bastón de Luna de Sangre',
        '_2H_SHAPESHIFTER_HELL' => 'Bastón engendro infernal',
        '_2H_SHAPESHIFTER_KEEPER' => 'Bastón Runa de Tierra',
        '4_2H_SHAPESHIFTER_AVALON' => 'Llamador de luz',

    ),
);

// Iterar sobre el array para generar las opciones
foreach ($opciones as $grupo => $items) {
    echo '<optgroup label="' . $grupo . '">';
    foreach ($items as $value => $label) {
        echo '<option value="' . $value . '">' . $label . '</option>';
    }
    echo '</optgroup>';
}
?>
