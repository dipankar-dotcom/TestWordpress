<?php

global $trade_hub_panels;
global $trade_hub_sections;
global $trade_hub_settings_controls;
global $trade_hub_repeated_settings_controls;
global $trade_hub_customizer_defaults;

/*creating panel for fonts-setting*/
$trade_hub_panels['trade-hub-fonts'] =
    array(
        'title'          => esc_html__( 'Font Setting', 'trade-hub' ),
        'priority'       => 43
    );

/*font array*/
global $trade_hub_google_fonts;
$trade_hub_google_fonts = array(
    'Open+Sans:400,400italic,600,700'               => 'Open Sans',
    'Roboto:400,500,300,700,400italic'              => 'Roboto',
    'Lato:400,300,400italic,900,700'                => 'Lato',
    'Slabo+27px'                                    => 'Slabo 27px',
    'Oswald:400,300,700'                            => 'Oswald',
    'Roboto+Condensed:400,300,400italic,700'        => 'Roboto Condensed',
    'Source+Sans+Pro:400,400italic,600,900,300'     => 'Source Sans Pro',
    'Lora:400,400italic,700,700italic'              => 'Lora',
    'Montserrat:400,700'                            => 'Montserrat',
    'PT+Sans:400,400italic,700'                     => 'PT Sans',
    'Open+Sans+Condensed:300,300italic,700'         => 'Open Sans Condensed',
    'Raleway:400,300,500,600,700,900'               => 'Raleway',
    'Droid+Sans:400,700'                            => 'Droid Sans',
    'Ubuntu:400,400italic,500,700'                  => 'Ubuntu',
    'Droid+Serif:400,400italic,700'                 => 'Droid Serif',
    'Roboto+Slab:400,300,700'                       => 'Roboto Slab',
    'Arimo:400,400italic,700'                       => 'Arimo',
    'Merriweather:400,400italic,300,900,700'        => 'Merriweather',
    'PT+Sans+Narrow:400,700'                        => 'PT Sans Narrow',
    'Poiret+One'                                    => 'Poiret One',
    'Noto +Sans:400,400italic,700'                  => 'Noto Sans',
    'Titillium+Web:400,300,400italic,700,900'       => 'Titillium Web',
    'PT+Serif:400,400italic,700'                    => 'PT Serif',
    'Bitter:400,400italic,700'                      => 'Bitter',
    'Indie+Flower'                                  => 'Indie Flower',
    'Yanone+Kaffeesatz:400,300,700'                 => 'Yanone Kaffeesatz',
    'Dosis:400,300,600,800'                         => 'Dosis',
    'Arvo:400,400italic,700'                        => 'Arvo',
    'Lobster'                                       => 'Lobster',
    'Cabin:400,400italic,500,600,700'               => 'Cabin',
    'Fjalla+One'                                    => 'Fjalla One',
    'Oxygen:400,300,700'                            => 'Oxygen',
    'Playfair+Display:400,400italic,700,900'        => 'Playfair Display',
    'Noto +Serif:400,400italic,700'                 => 'Noto Serif',
    'Hind:400,300,600,700'                          => 'Hind',
    'Muli:400,300italic,300'                        => 'Muli',
    'Nunito:400,300,700'                            => 'Nunito',
    'Bree+Serif'                                    => 'Bree Serif',
    'Abel'                                          => 'Abel',
    'Vollkorn:400,400italic,700'                    => 'Vollkorn',
    'Inconsolata:400,700'                           => 'Inconsolata',
    'Francois+One'                                  => 'Francois One',
    'Archivo+Narrow:400,400italic,700'              => 'Archivo Narrow',
    'Ubuntu+Condensed'                              => 'Ubuntu Condensed',
    'Josefin+Sans:400,600,700,400italic'            => 'Josefin Sans',
    'Fira+Sans:400,500'                             => 'Fira Sans',
    'Signika:400,300,700'                           => 'Signika',
    'Libre+Baskerville:400,400italic,700'           => 'Libre Baskerville',
    'Cuprum:400,400italic'                          => 'Cuprum',
    'Play:400,700'                                  => 'Play',
    'Pacifico'                                      => 'Pacifico',
    'Shadows+Into+Light'                            => 'Shadows Into Light',
    'Asap:400,400italic,700'                        => 'Asap',
    'Alegreya:400,400italic,700,900'                => 'Alegreya',
    'Maven+Pro:400,500,700,900'                     => 'Maven Pro',
    'Exo +2:400,300,400italic,600,700,900'          => 'Exo 2',
    'Sigmar+One'                                    => 'Sigmar One',
    'Merriweather+Sans:400,400italic,700,800'       => 'Merriweather Sans',
    'Crimson+Text:400,400italic,600,700'            => 'Crimson Text',
    'Anton'                                         => 'Anton',
    'Rokkitt:400,700'                               => 'Rokkitt',
    'Karla:400,400italic,700'                       => 'Karla',
    'Quicksand:400,700'                             => 'Quicksand',
    'Andada'                                        => 'Andada',
    'Varela+Round'                                  => 'Varela Round',
    'Bangers'                                       => 'Bangers',
    'Righteous'                                     => 'Righteous',
    'PT+Sans+Caption:400,700'                       => 'PT Sans Caption',
    'Dancing+Script:400,700'                        => 'Dancing Script',
    'Monda:400,700'                                 => 'Monda',
    'Exo:400,300,400italic,600,800'                 => 'Exo',
    'Abril+Fatface'                                 => 'Abril Fatface',
    'Pathway+Gothic+One'                            => 'Pathway Gothic One',
    'Questrial'                                     => 'Questrial',
    'Josefin+Slab:400,400italic,700,600'            => 'Josefin Slab',
    'Istok+Web:400,400italic,700'                   => 'Istok Web',
    'Patua+One'                                     => 'Patua One',
    'News+Cycle:400,700'                            => 'News Cycle',
    'BenchNine:400,700'                             => 'BenchNine',
    'Ropa+Sans:400,400italic'                       => 'Ropa Sans',
    'Crete+Round:400,400italic'                     => 'Crete Round',
    'Covered+By+Your+Grace'                         => 'Covered By Your Grace',
    'Hammersmith+One'                               => 'Hammersmith One',
    'Quattrocento+Sans:400,700,400italic'           => 'Quattrocento Sans',
    'Pontano+Sans'                                  => 'Pontano Sans',
    'Fredoka+One'                                   => 'Fredoka One',
    'EB+Garamond'                                   => 'EB Garamond',
    'Old+Standard +TT:400,400italic,700'            => 'Old Standard TT',
    'Noticia+Text:400,400italic,700'                => 'Noticia Text',
    'Kaushan+Script'                                => 'Kaushan Script',
    'Voltaire'                                      => 'Voltaire',
    'ABeeZee:400,400italic'                         => 'ABeeZee',
    'Comfortaa:400,300,700'                         => 'Comfortaa',
    'Russo+One'                                     => 'Russo One',
    'Cinzel:400,700,900'                            => 'Cinzel',
    'Sanchez:400,400italic'                         => 'Sanchez',
    'Lobster+Two:400,700,700italic'                 => 'Lobster Two',
    'Alfa+Slab+One'                                 => 'Alfa Slab One',
    'Passion+One:400,700,900'                       => 'Passion One',
    'Cantarell:400,400italic,700'                   => 'Cantarell',
    'Tinos:400,400italic,700'                       => 'Tinos',
    'Lateef'                                        => 'Lateef',
    'Archivo+Black'                                 => 'Archivo Black',
    'Cabin+Condensed:400,500,600,700'               => 'Cabin Condensed',
    'Satisfy'                                       => 'Satisfy',
    'Bevan'                                         => 'Bevan',
    'Economica:400,700,400italic'                   => 'Economica',
    'Playball'                                      => 'Playball',
    'Kreon:400,300,700'                             => 'Kreon',
    'Didact+Gothic'                                 => 'Didact Gothic',
    'Handlee'                                       => 'Handlee',
    'Cookie'                                        => 'Cookie',
    'Jura:400,300,500,600'                          => 'Jura',
    'Amaranth:400,400italic,700'                    => 'Amaranth',
    'Fugaz+One'                                     => 'Fugaz One',
    'Tangerine:400,700'                             => 'Tangerine',
    'Squada+One'                                    => 'Squada One',
    'Great+Vibes'                                   => 'Great Vibes',
    'Six+Caps'                                      => 'Six Caps',
    'Limelight'                                     => 'Limelight',
    'Carme'                                         => 'Carme',
    'Cherry+Cream+Soda'                             => 'Cherry Cream Soda',
    'Aldrich'                                       => 'Aldrich',
    'Alex+Brush'                                    => 'Alex Brush',
    'Fredericka+the+Great'                          => 'Fredericka the Great'
);

/*defaults values*/
$trade_hub_customizer_defaults['trade-hub-font-family-site-identity']     = 'Raleway:400,300,500,600,700,900';
$trade_hub_customizer_defaults['trade-hub-font-family-menu']              = 'Raleway:400,300,500,600,700,900';
$trade_hub_customizer_defaults['trade-hub-font-family-h1-h6']             = 'Raleway:400,300,500,600,700,900';
$trade_hub_customizer_defaults['trade-hub-font-family-body']              = 'Raleway:400,300,500,600,700,900';


/*section*/
$trade_hub_sections['trade-hub-family'] =
    array(
        'priority'       => 20,
        'title'          => esc_html__( 'Font Family', 'trade-hub' ),
        'panel'          => 'trade-hub-fonts',
    );

/*setting - controls*/
$trade_hub_settings_controls['trade-hub-font-family-site-identity'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-site-identity'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Site Identity Font Family', 'trade-hub' ),
            'description'           => esc_html__( 'Site title and tagline font family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 2,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-font-family-menu'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-menu'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Menu Font Family', 'trade-hub' ),
            'description'           => esc_html__( 'Primary menu font family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 4,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-font-family-h1-h6'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-h1-h6'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'H1-H6 Font Family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$trade_hub_settings_controls['trade-hub-font-family-body'] =
    array(
        'setting' =>     array(
            'default'              => $trade_hub_customizer_defaults['trade-hub-font-family-body'],
        ),
        'control' => array(
            'label'                 => esc_html__( 'Body Font Family', 'trade-hub' ),
            'section'               => 'trade-hub-family',
            'type'                  => 'select',
            'choices'               => $trade_hub_google_fonts,
            'priority'              => 15,
            'active_callback'       => ''
        )
    );