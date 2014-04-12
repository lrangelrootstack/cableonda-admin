<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_92e1b73eee390dbd8c5f71904ea312527dc02c313460033ec4668df79e2c9bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    maxHeight: 600,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 135
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 137
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 141
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 150
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 157
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 159
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_";
        // line 170
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 175
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 178
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    maxHeight: 600,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 185
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 187
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 189
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 190
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 198
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 212
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 226
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 236
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 244
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 249
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');

                    ";
        // line 251
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 252
            echo "                        ";
            // line 256
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 257
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 260
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 262
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 263
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code")));
            // line 269
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 274
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 275
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 282
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 287
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 294
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 304
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    function initialize_popup_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 308
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 309
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 312
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 314
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 321
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 323
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 328
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 332
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 339
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
        Admin.add_pretty_errors(field_dialog_";
        // line 340
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
    }

    ";
        // line 343
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 344
            echo "        ";
            // line 347
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 349
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 353
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 357
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 364
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 369
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 376
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 379
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 380
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 383
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 384
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 391
            echo "
        // update the label
        jQuery('#";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 395
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "] update the label');

            jQuery('#field_widget_";
            // line 397
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 400
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters")));
            // line 405
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 408
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 414
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 408,  670 => 397,  660 => 393,  656 => 391,  639 => 380,  594 => 353,  583 => 347,  581 => 344,  573 => 340,  569 => 339,  552 => 328,  544 => 323,  528 => 312,  516 => 308,  483 => 292,  458 => 275,  454 => 274,  431 => 257,  424 => 252,  422 => 251,  348 => 198,  333 => 189,  321 => 123,  256 => 96,  232 => 84,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  854 => 272,  851 => 271,  835 => 265,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  775 => 238,  761 => 229,  759 => 228,  755 => 226,  747 => 223,  742 => 220,  736 => 218,  731 => 246,  726 => 242,  723 => 218,  720 => 217,  709 => 248,  701 => 215,  691 => 214,  688 => 213,  682 => 405,  674 => 205,  663 => 201,  657 => 200,  645 => 383,  642 => 197,  631 => 195,  625 => 194,  622 => 193,  616 => 191,  611 => 364,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 349,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 332,  556 => 171,  540 => 321,  537 => 167,  533 => 314,  518 => 162,  514 => 160,  500 => 151,  494 => 297,  488 => 294,  481 => 208,  476 => 287,  473 => 161,  448 => 126,  445 => 263,  434 => 118,  394 => 106,  339 => 92,  328 => 187,  326 => 118,  320 => 91,  275 => 103,  218 => 30,  155 => 72,  170 => 55,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 275,  857 => 210,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  833 => 264,  830 => 263,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 241,  772 => 172,  769 => 171,  767 => 233,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 224,  746 => 161,  739 => 219,  729 => 243,  724 => 154,  721 => 153,  715 => 284,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  696 => 414,  694 => 215,  689 => 137,  683 => 135,  678 => 207,  675 => 132,  666 => 126,  658 => 124,  649 => 384,  643 => 120,  640 => 119,  638 => 196,  635 => 379,  619 => 369,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  478 => 163,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  442 => 62,  433 => 60,  414 => 109,  408 => 50,  405 => 49,  400 => 108,  388 => 42,  385 => 226,  377 => 37,  371 => 98,  366 => 33,  363 => 210,  350 => 96,  344 => 24,  342 => 93,  335 => 21,  332 => 140,  313 => 178,  311 => 14,  308 => 13,  290 => 5,  276 => 395,  263 => 365,  255 => 353,  245 => 335,  215 => 78,  207 => 269,  186 => 111,  161 => 202,  713 => 250,  707 => 217,  704 => 216,  702 => 208,  698 => 206,  695 => 139,  685 => 204,  680 => 400,  668 => 204,  665 => 395,  662 => 125,  654 => 123,  651 => 192,  634 => 190,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 178,  589 => 177,  584 => 176,  567 => 174,  550 => 94,  546 => 169,  541 => 171,  538 => 170,  535 => 169,  532 => 168,  529 => 92,  527 => 164,  524 => 163,  515 => 85,  511 => 306,  509 => 83,  506 => 304,  504 => 155,  497 => 133,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 269,  428 => 59,  421 => 127,  412 => 126,  401 => 120,  395 => 118,  392 => 117,  382 => 115,  375 => 114,  372 => 113,  369 => 112,  359 => 106,  356 => 105,  345 => 94,  340 => 100,  334 => 98,  330 => 96,  317 => 89,  295 => 77,  292 => 170,  288 => 107,  286 => 80,  279 => 104,  274 => 77,  266 => 366,  205 => 56,  184 => 233,  178 => 45,  146 => 34,  126 => 65,  114 => 71,  118 => 23,  150 => 55,  70 => 28,  324 => 92,  318 => 122,  300 => 92,  297 => 91,  287 => 88,  284 => 167,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 93,  244 => 65,  237 => 86,  234 => 34,  222 => 81,  181 => 210,  12 => 32,  629 => 376,  618 => 196,  614 => 111,  606 => 192,  601 => 357,  595 => 183,  593 => 182,  588 => 184,  579 => 343,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 309,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 127,  468 => 282,  464 => 71,  449 => 103,  441 => 262,  429 => 90,  426 => 256,  420 => 111,  417 => 249,  415 => 101,  411 => 99,  406 => 88,  403 => 48,  396 => 138,  390 => 104,  386 => 116,  376 => 100,  353 => 104,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  316 => 121,  306 => 81,  303 => 80,  280 => 75,  242 => 38,  231 => 62,  226 => 61,  200 => 22,  194 => 248,  191 => 69,  188 => 288,  152 => 92,  153 => 56,  124 => 31,  110 => 40,  104 => 67,  76 => 57,  58 => 23,  358 => 139,  351 => 135,  347 => 95,  343 => 132,  338 => 130,  327 => 94,  323 => 185,  319 => 90,  315 => 123,  301 => 117,  299 => 174,  293 => 109,  289 => 75,  281 => 105,  277 => 85,  271 => 48,  265 => 99,  262 => 105,  260 => 98,  257 => 72,  251 => 101,  248 => 336,  239 => 140,  228 => 135,  225 => 32,  213 => 126,  211 => 61,  197 => 119,  174 => 64,  148 => 35,  134 => 161,  127 => 76,  20 => 1,  270 => 83,  253 => 95,  233 => 137,  212 => 279,  210 => 75,  206 => 24,  202 => 266,  198 => 66,  192 => 64,  185 => 68,  180 => 66,  175 => 43,  172 => 141,  167 => 77,  165 => 59,  160 => 58,  137 => 37,  113 => 41,  100 => 36,  90 => 34,  81 => 25,  65 => 29,  129 => 27,  97 => 63,  84 => 55,  34 => 16,  53 => 22,  77 => 27,  23 => 18,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 105,  453 => 104,  444 => 138,  440 => 148,  437 => 260,  435 => 146,  430 => 115,  427 => 143,  423 => 57,  413 => 134,  409 => 244,  407 => 123,  402 => 130,  398 => 236,  393 => 126,  387 => 122,  384 => 102,  381 => 128,  379 => 119,  374 => 99,  368 => 212,  365 => 141,  362 => 124,  360 => 109,  355 => 27,  341 => 131,  337 => 190,  322 => 116,  314 => 85,  312 => 96,  309 => 117,  305 => 175,  298 => 78,  294 => 90,  285 => 3,  283 => 79,  278 => 410,  268 => 157,  264 => 44,  258 => 150,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 43,  169 => 80,  140 => 52,  132 => 28,  128 => 47,  107 => 36,  61 => 25,  273 => 159,  269 => 100,  254 => 149,  243 => 141,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 31,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 51,  143 => 33,  135 => 81,  119 => 28,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 49,  87 => 14,  28 => 14,  201 => 72,  196 => 52,  183 => 46,  171 => 102,  166 => 100,  163 => 58,  158 => 73,  156 => 93,  151 => 188,  142 => 58,  138 => 36,  136 => 30,  121 => 75,  117 => 45,  105 => 27,  91 => 58,  62 => 24,  49 => 111,  21 => 12,  31 => 22,  94 => 57,  89 => 35,  85 => 34,  75 => 28,  68 => 24,  56 => 40,  25 => 12,  38 => 32,  26 => 20,  24 => 3,  19 => 11,  93 => 68,  88 => 60,  78 => 53,  46 => 35,  44 => 19,  27 => 16,  79 => 31,  72 => 56,  69 => 50,  47 => 21,  40 => 18,  37 => 53,  22 => 11,  246 => 40,  157 => 37,  145 => 52,  139 => 59,  131 => 48,  123 => 64,  120 => 63,  115 => 45,  111 => 40,  108 => 39,  101 => 73,  98 => 36,  96 => 18,  83 => 37,  74 => 52,  66 => 25,  55 => 22,  52 => 17,  50 => 22,  43 => 33,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 25,  203 => 122,  199 => 265,  193 => 294,  189 => 240,  187 => 69,  182 => 50,  176 => 65,  173 => 42,  168 => 60,  164 => 203,  162 => 75,  154 => 36,  149 => 62,  147 => 90,  144 => 176,  141 => 175,  133 => 68,  130 => 67,  125 => 45,  122 => 44,  116 => 39,  112 => 38,  109 => 69,  106 => 104,  103 => 38,  99 => 26,  95 => 41,  92 => 61,  86 => 64,  82 => 33,  80 => 53,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 19,  36 => 17,  33 => 16,  30 => 14,);
    }
}
