<?php

if ( !function_exists( 'mentor_icon_pack_linearicon' ) ) {

    function mentor_icon_pack_linearicon( $icons ) {

        $icons[] = array(
            'title' => esc_html__( 'Linear Icon', 'mentor-icon-pack' ),
            'icons' => array(
                'lnr lnr-home',
                'lnr lnr-apartment',
                'lnr lnr-pencil',
                'lnr lnr-magic-wand',
                'lnr lnr-drop',
                'lnr lnr-lighter',
                'lnr lnr-poop',
                'lnr lnr-sun',
                'lnr lnr-moon',
                'lnr lnr-cloud',
                'lnr lnr-cloud-upload',
                'lnr lnr-cloud-download',
                'lnr lnr-cloud-sync',
                'lnr lnr-cloud-check',
                'lnr lnr-database',
                'lnr lnr-lock',
                'lnr lnr-cog',
                'lnr lnr-trash',
                'lnr lnr-dice',
                'lnr lnr-heart',
                'lnr lnr-star',
                'lnr lnr-star-half',
                'lnr lnr-star-empty',
                'lnr lnr-flag',
                'lnr lnr-envelope',
                'lnr lnr-paperclip',
                'lnr lnr-inbox',
                'lnr lnr-eye',
                'lnr lnr-printer',
                'lnr lnr-file-empty',
                'lnr lnr-file-add',
                'lnr lnr-enter',
                'lnr lnr-exit',
                'lnr lnr-graduation-hat',
                'lnr lnr-license',
                'lnr lnr-music-note',
                'lnr lnr-film-play',
                'lnr lnr-camera-video',
                'lnr lnr-camera',
                'lnr lnr-picture',
                'lnr lnr-book',
                'lnr lnr-bookmark',
                'lnr lnr-user',
                'lnr lnr-users',
                'lnr lnr-shirt',
                'lnr lnr-store',
                'lnr lnr-cart',
                'lnr lnr-tag',
                'lnr lnr-phone-handset',
                'lnr lnr-phone',
                'lnr lnr-pushpin',
                'lnr lnr-map-marker',
                'lnr lnr-map',
                'lnr lnr-location',
                'lnr lnr-calendar-full',
                'lnr lnr-keyboard',
                'lnr lnr-spell-check',
                'lnr lnr-screen',
                'lnr lnr-smartphone',
                'lnr lnr-tablet',
                'lnr lnr-laptop',
                'lnr lnr-laptop-phone',
                'lnr lnr-power-switch',
                'lnr lnr-bubble',
                'lnr lnr-heart-pulse',
                'lnr lnr-construction',
                'lnr lnr-pie-chart',
                'lnr lnr-chart-bars',
                'lnr lnr-gift',
                'lnr lnr-diamond',
                'lnr lnr-linearicons',
                'lnr lnr-dinner',
                'lnr lnr-coffee-cup',
                'lnr lnr-leaf',
                'lnr lnr-paw',
                'lnr lnr-rocket',
                'lnr lnr-briefcase',
                'lnr lnr-bus',
                'lnr lnr-car',
                'lnr lnr-train',
                'lnr lnr-train',
                'lnr lnr-bicycle',
                'lnr lnr-wheelchair',
                'lnr lnr-select',
                'lnr lnr-earth',
                'lnr lnr-smile',
                'lnr lnr-sad',
                'lnr lnr-neutral',
                'lnr lnr-mustache',
                'lnr lnr-alarm',
                'lnr lnr-bullhorn',
                'lnr lnr-volume-high',
                'lnr lnr-volume-medium',
                'lnr lnr-volume-low',
                'lnr lnr-volume',
                'lnr lnr-mic',
                'lnr lnr-hourglass',
                'lnr lnr-undo',
                'lnr lnr-redo',
                'lnr lnr-sync',
                'lnr lnr-history',
                'lnr lnr-clock',
                'lnr lnr-download',
                'lnr lnr-upload',
                'lnr lnr-enter-down',
                'lnr lnr-exit-up',
                'lnr lnr-bug',
                'lnr lnr-code',
                'lnr lnr-link',
                'lnr lnr-unlink',
                'lnr lnr-thumbs-up',
                'lnr lnr-thumbs-down',
                'lnr lnr-magnifier',
                'lnr lnr-cross',
                'lnr lnr-menu',
                'lnr lnr-list',
                'lnr lnr-chevron-up',
                'lnr lnr-chevron-down',
                'lnr lnr-chevron-left',
                'lnr lnr-chevron-right',
                'lnr lnr-arrow-up',
                'lnr lnr-arrow-down',
                'lnr lnr-arrow-left',
                'lnr lnr-arrow-right',
                'lnr lnr-move',
                'lnr lnr-warning',
                'lnr lnr-question-circle',
                'lnr lnr-menu-circle',
                'lnr lnr-checkmark-circle',
                'lnr lnr-cross-circle',
                'lnr lnr-plus-circle',
                'lnr lnr-circle-minus',
                'lnr lnr-arrow-up-circle',
                'lnr lnr-arrow-down-circle',
                'lnr lnr-arrow-left-circle',
                'lnr lnr-arrow-right-circle',
                'lnr lnr-chevron-up-circle',
                'lnr lnr-chevron-down-circle',
                'lnr lnr-chevron-left-circle',
                'lnr lnr-chevron-right-circle',
                'lnr lnr-crop',
                'lnr lnr-frame-contract',
                'lnr lnr-layers',
                'lnr lnr-funnel',
                'lnr lnr-text-format',
                'lnr lnr-text-format-remove',
                'lnr lnr-text-size',
                'lnr lnr-bold',
                'lnr lnr-italic',
                'lnr lnr-underline',
                'lnr lnr-strikethrough',
                'lnr lnr-highlight',
                'lnr lnr-text-align-left',
                'lnr lnr-text-align-center',
                'lnr lnr-text-align-right',
                'lnr lnr-text-align-justify',
                'lnr lnr-line-spacing',
                'lnr lnr-indent-increase',
                'lnr lnr-indent-decrease',
                'lnr lnr-pilcrow',
                'lnr lnr-direction-ltr',
                'lnr lnr-direction-rtl',
                'lnr lnr-page-break',
                'lnr lnr-sort-alpha-asc',
                'lnr lnr-sort-amount-asc',
                'lnr lnr-hand',
                'lnr lnr-pointer-up',
                'lnr lnr-pointer-right',
                'lnr lnr-pointer-down',
                'lnr lnr-pointer-left',
            ),
        );

        $icons = array_reverse( $icons );

        return $icons;

    }
    add_filter( 'csf_field_icon_add_icons', 'mentor_icon_pack_linearicon' );
}