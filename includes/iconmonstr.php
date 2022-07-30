<?php

if ( !function_exists( 'mentor_icon_pack_iconmonstr' ) ) {

    function mentor_icon_pack_iconmonstr( $icons ) {

        $icons[] = array(
            'title' => esc_html__( 'Icon Monstr', 'mentor-icon-pack' ),
            'icons' => array(
                'im im-spotify',
                'im im-newsletter',
                'im im-award',
                'im im-headphones',
                'im im-megaphone',
                'im im-barcode',
                'im im-google-play',
                'im im-facebook-messenger',
                'im im-wechat',
                'im im-line',
                'im im-git',
                'im im-first-aid',
                'im im-ribbon',
                'im im-plane',
                'im im-idea',
                'im im-data',
                'im im-data-delete',
                'im im-data-validate',
                'im im-folder-add',
                'im im-radar',
                'im im-pizza',
                'im im-truck',
                'im im-support',
                'im im-reset',
                'im im-import',
                'im im-export',
                'im im-color-fan',
                'im im-cookie',
                'im im-gift-card',
                'im im-factory',
                'im im-pulse',
                'im im-accessibility',
                'im im-apartment',
                'im im-plugin',
                'im im-layer',
                'im im-direction',
                'im im-dribbble',
                'im im-radio',
                'im im-bank',
                'im im-battery-empty',
                'im im-battery',
                'im im-battery-full',
                'im im-x-mark-circle-o',
                'im im-timer',
                'im im-hashtag',
                'im im-server',
                'im im-flask',
                'im im-anchor',
                'im im-umbrella',
                'im im-cc-amex',
                'im im-cc-visa',
                'im im-cc-mastercard',
                'im im-cc-paypal',
                'im im-cc-amazon',
                'im im-cc-bitcoin',
                'im im-car',
                'im im-paintbrush',
                'im im-cube',
                'im im-cubes',
                'im im-language',
                'im im-calculator',
                'im im-user-settings',
                'im im-trophy',
                'im im-pointer',
                'im im-edit',
                'im im-warning-circle',
                'im im-check-mark-circle-o',
                'im im-date-o',
                'im im-newspaper-o',
                'im im-wrench',
                'im im-binoculars',
                'im im-gamepad',
                'im im-history',
                'im im-bell-active',
                'im im-coffee',
                'im im-leaf',
                'im im-gift',
                'im im-flip-chart-o',
                'im im-clock',
                'im im-line-chart-up',
                'im im-laptop-o',
                'im im-monitor-o',
                'im im-cursor',
                'im im-keyboard',
                'im im-pin',
                'im im-store',
                'im im-graduation-hat',
                'im im-certificate-o',
                'im im-sun',
                'im im-diamond-o',
                'im im-drop',
                'im im-paperplane',
                'im im-paperplane',
                'im im-lifebuoy',
                'im im-power',
                'im im-target',
                'im im-navigation',
                'im im-bug',
                'im im-network',
                'im im-pie-chart',
                'im im-note-o',
                'im im-id-card',
                'im im-tags',
                'im im-floppy-disk',
                'im im-dashboard',
                'im im-tools',
                'im im-users',
                'im im-trash-can',
                'im im-x-mark-circle',
                'im im-x-mark',
                'im im-shield',
                'im im-mobile',
                'im im-inbox',
                'im im-crown',
                'im im-check-square',
                'im im-check-square-o',
                'im im-check-mark-circle',
                'im im-check-mark',
                'im im-redo',
                'im im-undo',
                'im im-map-o',
                'im im-task-o',
                'im im-menu-dot-v',
                'im im-edit-off',
                'im im-facebook',
                'im im-sitemap',
                'im im-save',
                'im im-volume-off',
                'im im-volume',
                'im im-sign-out',
                'im im-sign-in',
                'im im-shopping-cart',
                'im im-rocket',
                'im im-banknote',
                'im im-fullscreen',
                'im im-minimize',
                'im im-maximize',
                'im im-light-bulb',
                'im im-filter',
                'im im-picture-o',
                'im im-eye-off',
                'im im-eye',
                'im im-external-link',
                'im im-random',
                'im im-loop',
                'im im-next',
                'im im-previous',
                'im im-eject',
                'im im-stop',
                'im im-pause',
                'im im-play',
                'im im-credit-card',
                'im im-bookmark',
                'im im-upload',
                'im im-download',
                'im im-video-camera',
                'im im-photo-camera',
                'im im-care-up',
                'im im-care-down',
                'im im-care-left',
                'im im-arrow-up-circle',
                'im im-arrow-down-circle',
                'im im-arrow-left-circle',
                'im im-arrow-right-circle',
                'im im-arrow-up',
                'im im-arrow-down',
                'im im-arrow-left',
                'im im-arrow-right',
                'im im-angle-up-circle',
                'im im-angle-down-circle',
                'im im-angle-left-circle',
                'im im-angle-right-circle',
                'im im-angle-up',
                'im im-angle-down',
                'im im-angle-left',
                'im im-angle-right',
                'im im-twitch',
                'im im-reddit',
                'im im-edge',
                'im im-whatsapp',
                'im im-amazon',
                'im im-snapchat',
                'im im-instagram',
                'im im-fire',
                'im im-sync',
                'im im-toggle',
                'im im-control-panel',
                'im im-archive',
                'im im-bell',
                'im im-bell-off',
                'im im-youtube',
                'im im-spinner',
                'im im-smiley-o',
                'im im-frown-o',
                'im im-code',
                'im im-android-os',
                'im im-linux-os',
                'im im-apple-os',
                'im im-menu',
                'im im-menu-list',
                'im im-menu-dot-h',
                'im im-windows-os',
                'im im-square-o',
                'im im-check-square-i',
                'im im-radio-button-circle',
                'im im-radio-button-circle-o',
                'im im-flag',
                'im im-opera',
                'im im-thumb-up',
                'im im-thumb-down',
                'im im-safari',
                'im im-paper-clip',
                'im im-firefox',
                'im im-copy',
                'im im-chrome',
                'im im-quote-left',
                'im im-quote-right',
                'im im-ie',
                'im im-briefcase',
                'im im-forbidden',
                'im im-vk',
                'im im-wizard',
                'im im-location',
                'im im-paypal',
                'im im-coin',
                'im im-key',
                'im im-lock',
                'im im-lock-open',
                'im im-share',
                'im im-flash',
                'im im-cloud',
                'im im-database',
                'im im-wifi',
                'im im-book',
                'im im-audio',
                'im im-video',
                'im im-microphone',
                'im im-printer',
                'im im-computer',
                'im im-phone',
                'im im-user-male',
                'im im-user-female',
                'im im-user-circle',
                'im im-clock-o',
                'im im-calendar',
                'im im-pencil',
                'im im-question',
                'im im-bar-chart',
                'im im-info',
                'im im-folder',
                'im im-folder-open',
                'im im-file',
                'im im-file-o',
                'im im-files-o',
                'im im-warning',
                'im im-link',
                'im im-unlink',
                'im im-tag',
                'im im-heart',
                'im im-cloud-upload',
                'im im-cloud-download',
                'im im-speech-bubble',
                'im im-speech-bubble-comment',
                'im im-speech-bubble-comments',
                'im im-mail',
                'im im-globe',
                'im im-home',
                'im im-window-o',
                'im im-table',
                'im im-windows-o',
                'im im-gear',
                'im im-twitter',
                'im im-magnifier',
                'im im-magnifier-plus',
                'im im-magnifier-minus',
                'im im-minus',
                'im im-minus-circle',
                'im im-plus',
                'im im-plus-circle',
                'im im-care-right',
                'im im-star',
                'im im-star-half',
                'im im-star-o',
                'im im-circle-o',
                'im im-xing',
                'im im-vimeo',
                'im im-tumblr',
                'im im-stumbleupon',
                'im im-stackoverflow',
                'im im-soundcloud',
                'im im-skype',
                'im im-pinterest',
                'im im-linkedin',
                'im im-google-plus',
                'im im-github',
                'im im-flickr',
                'im im-facebook-like',
                'im im-blogger',
                'im im-behance',
            ),
        );

        $icons = array_reverse( $icons );

        return $icons;

    }
    add_filter( 'csf_field_icon_add_icons', 'mentor_icon_pack_iconmonstr' );
}