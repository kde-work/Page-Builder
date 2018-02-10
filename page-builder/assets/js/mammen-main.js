(function($) {

    var mammen = {
        elements: []
    };

    function mm_click() {
        var $body = $('body');

        mm_error_clear(false);
        mm_modal__save();
        mm_close_modal();
        mm_open_blank_component();
        mm_component_delete();
        mm_image_upload_universal($body);
        mm_file_upload_universal($body);
        mm_component_duplicate();
        mm_thumbnail();
        mm_close_thumb_load();
        mm_new_tab($body);
    }
    $(function () {
        mm_click();
    });

    // Filling Page Builder box
    function mm_page_builder() {
        var $page_builder = $('.page-builder'),
            $page_builder__component_list = $('.page-builder__component-list'); // box of components

        // if blank page
        if (window.mammen.elements.length === 0) {
            $page_builder.removeClass('page-builder--components');
            $page_builder.addClass('page-builder--blank-page');
        } else {
            $page_builder__component_list.html('');

            //TODO: make loader

            // Added components in Page Builder from @var window.mammen
            mm_add_components();

            // Bind Events (click)
            mm_bind_events();

            $page_builder.removeClass('page-builder--blank-page');
            $page_builder.addClass('page-builder--components');
        }
    }

    // Bind Events (click)
    function mm_bind_events() {
        mm_click_arrows();
        mm_component_edit();
        mm_thumbnail__icon();
        mm_component_drag();
    }

    function mm_contain_WYSIWYG() {
        var $content = $('#content'),
            content = '';

        for (var key in window.mammen.elements) {
            var component = window.mammen.elements[key];

            content += component.shortcode;
        }
        $content.val(content);
        $content.trigger('change');
    }

    // Parsing WYSIWYG container
    function mm_parsing_the_content() {
        var $content = $('#content');

        if ($content.val()) {
            var elements = $content.val().match(/\[.+?]|[^\[^]+/gi),
                _mammen = {
                    elements: []
                };

            elements.forEach(function (el) {
                var shortcode_name = el.match(/\[(.+?)\s/i) || [, 'no_shortcode'],
                    name = {},
                    id,
                    slug = '';

                if (shortcode_name[1] === 'mammen') {
                    name = el.match(/component=\"(.+?)\"/i)[1];
                    slug = name.replace(/\s/g, '_').toLowerCase();
                    // id = el.match(/component_id=\"(.+?)\"/i)[1];
                    id = slug;
                } else {
                    if (shortcode_name[1] === 'no_shortcode') {
                        slug = 'no_shortcode';
                        id = slug;
                        name = el;
                    } else {
                        slug = 'no_mammen';
                        id = slug;
                        name = el;
                    }
                }

                _mammen.elements.push({
                    'type': shortcode_name[1],
                    'shortcode': el,
                    'name': name,
                    'slug': slug,
                    'id': id
                });
            });
            return _mammen;
        } else {
            return window.mammen;
        }
    }

    // Button Enable/Disable
    $(function () {
        var $page_builder_btn = $('.page-builder-btn'); // modal forms

        $page_builder_btn.on('click', function () {
            var $this = $(this),
                $body = $('body'),
                $page_builder = $('#page-builder'),
                $page_builder_btn__trigger = $('.page-builder-btn__trigger'), //btn title enable/disable
                $postdivrich = $('#postdivrich'); // WYSIWYG

            $body.addClass('page-builder-load');

            // Enable Page Builder
            if (!$this.data('enable')) {
                $this.data('enable', 1);
                $page_builder_btn__trigger.html('Disable');
                $postdivrich.css({
                    'visibility': 'collapse',
                    'height': '0'
                });

                // Filling by preset data from WYSIWYG
                window.mammen = mm_parsing_the_content();

                // filling Page Builder box
                mm_page_builder();

                $page_builder.show();

                $body.addClass('page-builder-enable');
                $body.removeClass('page-builder-disable');
                $body.removeClass('page-builder-load');
            } else {
                $body.removeClass('page-builder-enable');
                $body.addClass('page-builder-disable');
                $body.removeClass('page-builder-load');

                $page_builder.hide();
                $postdivrich.css({
                    'visibility': 'initial',
                    'height': 'auto'
                });
                $page_builder_btn__trigger.html('Enable');
                $this.data('enable', 0);
            }
        });

        $page_builder_btn.trigger('click');
    });

    window.mammen = mammen;
    window.mm_page_builder = mm_page_builder;
    window.mm_bind_events = mm_bind_events;
    window.mm_parsing_the_content = mm_parsing_the_content;
    window.mm_contain_WYSIWYG = mm_contain_WYSIWYG;

})($ || window.jQuery);