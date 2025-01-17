@extends('layout.master')

@section('css')
<link rel="stylesheet" id="elementor-post-1308-css" href={{ asset('css/post-1308.css?ver=1678696350') }} media="all" />
<link rel="shortlink" href="index.htm?p=1308" />
<style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }

    @media (max-width: 1024px) {
        .mediterranee-marocaine {
            display: block !important;
        }

        img {
            width: 100%;
            padding-top: 10px;
        }
    }
</style>
<style id="global-styles-inline-css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                rgba(6, 147, 227, 1) 0%,
                rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                rgb(122, 220, 180) 0%,
                rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                rgba(252, 185, 0, 1) 0%,
                rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                rgba(255, 105, 0, 1) 0%,
                rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                rgb(238, 238, 238) 0%,
                rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                rgb(74, 234, 220) 0%,
                rgb(151, 120, 209) 20%,
                rgb(207, 42, 186) 40%,
                rgb(238, 44, 130) 60%,
                rgb(251, 105, 98) 80%,
                rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                rgb(255, 206, 236) 0%,
                rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                rgb(254, 205, 165) 0%,
                rgb(254, 45, 45) 50%,
                rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                rgb(255, 203, 112) 0%,
                rgb(199, 81, 192) 50%,
                rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                rgb(255, 245, 203) 0%,
                rgb(182, 227, 212) 50%,
                rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                rgb(202, 248, 128) 0%,
                rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg,
                rgb(2, 3, 129) 0%,
                rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
        --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
        --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
        --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
        --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
        --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
        --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
        --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>
@endsection

@section('title')
<title>FRMPAS | Conditions générales et mentions légales</title>
@endsection
@section('page')

<body
    class="page-template page-template-elementor_header_footer page page-id-1308 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-1308">
    <div id="page" class="jkit-template  site">

        @include('layout.header')
        <div data-elementor-type="wp-page" data-elementor-id="1308" class="elementor elementor-1308"
            style="margin-bottom: 60px;">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-ad98cdd elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="ad98cdd" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b139bb4"
                        data-id="b139bb4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b83f394 elementor-align-center elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="b83f394" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span id="spc" class="elementor-icon-list-text">Acceuil</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-minus"></i> </span>
                                            <span class="elementor-icon-list-text">Conditions générales et mentions
                                                légales</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ff491de elementor-widget elementor-widget-heading"
                                data-id="ff491de" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">Conditions générales et
                                        mentions légales</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7f81110f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7f81110f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-108f208c"
                        data-id="108f208c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4b5efb80 elementor-widget elementor-widget-text-editor"
                                data-id="4b5efb80" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="mediterranee-marocaine">
                                        <div>
                                            <p>
                                                Conditions générales et mentions légales de l'association ASAAM qui
                                                exploite les informations recueillies sur le site : www.asaam.ma et
                                                autres sites liées, font l’objet d’un traitement destiné à : </p>
                                            <p>
                                                Vous tenir informer à travers l’envoie de nos newsletter et partage de
                                                l’actualité relative à notre secteur d’activité. Et à gérer le
                                                traitement de votre demande d’accompagnement et traitement de demande
                                                d'information de nos activités </p>
                                            <p>Les destinataires des données relatives uniquement le comité directeur,
                                                demande d’accompagnement et traitement de demande d'information de nos
                                                activités, demeure ASAAM uniquement et
                                                exceptionnellement aux autorités compétentes ou de tutelle habilitées,
                                                aux tuteurs et mandataires habilités, en référence au droit marocain,
                                                et conformément à la réglementation CNDP </p>
                                            <p>Ce transfert de données et échanges demeure important et ce afin de
                                                partager avec vous nos activités et informations</p>
                                        </div>
                                        <p>Conformément à la loi n° 09-08 promulguée par le Dahir 1-09-15 du 18 février
                                            2009, relative à la protection des personnes physiques à l’égard du
                                            traitement des données à caractère personnel, vous bénéficiez d’un droit
                                            d’accès et de rectification aux informations qui vous concernent, que vous
                                            pouvez exercer en vous adressant à :</p>
                                        <p>Siège ASAAM Résidence CAF 1er étage n°3 Angle Rue Colibri et Av Omar Al
                                            Khayam Ferme Bretonne ,Casablanca. Maroc et/ou par mail à
                                            contact.asaam@gmail.com Vous pouvez également, pour des motifs légitimes,
                                            vous opposer à ce que les données qui vous concernent fassent l’objet d’un
                                            traitement. Ce traitement est encours de notification pour autorisation par
                                            la CNDP
                                            au titre du récépissé / de l’autorisation n°.......</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('layout.footer')
    </div><!-- #page -->
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false,
                isScriptDebug: false,
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
            },
            is_rtl: false,
            breakpoints: {xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600},
            responsive: {
                breakpoints: {
                    mobile: {
                        label: "Mobile",
                        value: 767,
                        default_value: 767,
                        direction: "max",
                        is_enabled: true,
                    },
                    mobile_extra: {
                        label: "Mobile Extra",
                        value: 880,
                        default_value: 880,
                        direction: "max",
                        is_enabled: false,
                    },
                    tablet: {
                        label: "Tablet",
                        value: 1024,
                        default_value: 1024,
                        direction: "max",
                        is_enabled: true,
                    },
                    tablet_extra: {
                        label: "Tablet Extra",
                        value: 1200,
                        default_value: 1200,
                        direction: "max",
                        is_enabled: false,
                    },
                    laptop: {
                        label: "Laptop",
                        value: 1366,
                        default_value: 1366,
                        direction: "max",
                        is_enabled: false,
                    },
                    widescreen: {
                        label: "Widescreen",
                        value: 2400,
                        default_value: 2400,
                        direction: "min",
                        is_enabled: false,
                    },
                },
            },
            version: "3.11.4",
            is_static: false,
            experimentalFeatures: {
                e_dom_optimization: true,
                e_optimized_assets_loading: true,
                e_optimized_css_loading: true,
                a11y_improvements: true,
                additional_custom_breakpoints: true,
                "hello-theme-header-footer": true,
                "landing-pages": true,
                "kit-elements-defaults": true,
            },
            urls: {
                assets:
                    "https:\/\/templatekit.jegtheme.com\/findive\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper-container",
            settings: {page: [], editorPreferences: []},
            kit: {
                body_background_background: "classic",
                active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
                hello_header_logo_type: "title",
                hello_header_menu_layout: "horizontal",
                hello_footer_logo_type: "logo",
            },
            post: {
                id: 10,
                title:
                    "Turning%20Diving%20Sport%20%26%20Trip%20Adventures%20%E2%80%93%20Findive",
                excerpt:
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                featuredImage:
                    "https:\/\/templatekit.jegtheme.com\/findive\/wp-content\/uploads\/sites\/185\/2021\/10\/partial-view-of-man-diving-in-ocean-alone-1024x682.jpg",
            },
        };
    </script>
</body>

@endsection