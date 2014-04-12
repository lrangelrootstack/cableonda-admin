<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_243750d657716be274a55a4fcfdc4b22ca721e362e3fb86dd3445099004a7d8a extends Twig_Template
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
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
                // line 47
                echo "
                    <a  href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 59
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 68
            echo "            </span>

            ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
                // line 71
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                    title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 80
            echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 87
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 408,  670 => 397,  660 => 393,  656 => 391,  639 => 380,  594 => 353,  583 => 347,  581 => 344,  573 => 340,  569 => 339,  552 => 328,  544 => 323,  528 => 312,  516 => 308,  483 => 292,  458 => 275,  454 => 274,  431 => 257,  424 => 252,  422 => 251,  348 => 198,  333 => 189,  321 => 123,  256 => 96,  232 => 84,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  854 => 272,  851 => 271,  835 => 265,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  775 => 238,  761 => 229,  759 => 228,  755 => 226,  747 => 223,  742 => 220,  736 => 218,  731 => 246,  726 => 242,  723 => 218,  720 => 217,  709 => 248,  701 => 215,  691 => 214,  688 => 213,  682 => 405,  674 => 205,  663 => 201,  657 => 200,  645 => 383,  642 => 197,  631 => 195,  625 => 194,  622 => 193,  616 => 191,  611 => 364,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 349,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 332,  556 => 171,  540 => 321,  537 => 167,  533 => 314,  518 => 162,  514 => 160,  500 => 151,  494 => 297,  488 => 294,  481 => 208,  476 => 287,  473 => 161,  448 => 126,  445 => 263,  434 => 118,  394 => 106,  339 => 92,  328 => 187,  326 => 118,  320 => 91,  275 => 103,  218 => 30,  155 => 72,  170 => 74,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 275,  857 => 210,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  833 => 264,  830 => 263,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 241,  772 => 172,  769 => 171,  767 => 233,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 224,  746 => 161,  739 => 219,  729 => 243,  724 => 154,  721 => 153,  715 => 284,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  696 => 414,  694 => 215,  689 => 137,  683 => 135,  678 => 207,  675 => 132,  666 => 126,  658 => 124,  649 => 384,  643 => 120,  640 => 119,  638 => 196,  635 => 379,  619 => 369,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  478 => 163,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  442 => 62,  433 => 60,  414 => 109,  408 => 50,  405 => 49,  400 => 108,  388 => 42,  385 => 226,  377 => 37,  371 => 98,  366 => 33,  363 => 210,  350 => 96,  344 => 24,  342 => 93,  335 => 21,  332 => 140,  313 => 178,  311 => 14,  308 => 13,  290 => 5,  276 => 395,  263 => 365,  255 => 353,  245 => 335,  215 => 78,  207 => 269,  186 => 82,  161 => 202,  713 => 250,  707 => 217,  704 => 216,  702 => 208,  698 => 206,  695 => 139,  685 => 204,  680 => 400,  668 => 204,  665 => 395,  662 => 125,  654 => 123,  651 => 192,  634 => 190,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 178,  589 => 177,  584 => 176,  567 => 174,  550 => 94,  546 => 169,  541 => 171,  538 => 170,  535 => 169,  532 => 168,  529 => 92,  527 => 164,  524 => 163,  515 => 85,  511 => 306,  509 => 83,  506 => 304,  504 => 155,  497 => 133,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 269,  428 => 59,  421 => 127,  412 => 126,  401 => 120,  395 => 118,  392 => 117,  382 => 115,  375 => 114,  372 => 113,  369 => 112,  359 => 106,  356 => 105,  345 => 94,  340 => 100,  334 => 98,  330 => 96,  317 => 89,  295 => 77,  292 => 170,  288 => 107,  286 => 80,  279 => 104,  274 => 77,  266 => 366,  205 => 56,  184 => 233,  178 => 45,  146 => 34,  126 => 65,  114 => 71,  118 => 23,  150 => 65,  70 => 28,  324 => 92,  318 => 122,  300 => 92,  297 => 91,  287 => 88,  284 => 167,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 93,  244 => 65,  237 => 86,  234 => 34,  222 => 81,  181 => 210,  12 => 32,  629 => 376,  618 => 196,  614 => 111,  606 => 192,  601 => 357,  595 => 183,  593 => 182,  588 => 184,  579 => 343,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 309,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 127,  468 => 282,  464 => 71,  449 => 103,  441 => 262,  429 => 90,  426 => 256,  420 => 111,  417 => 249,  415 => 101,  411 => 99,  406 => 88,  403 => 48,  396 => 138,  390 => 104,  386 => 116,  376 => 100,  353 => 104,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  316 => 121,  306 => 81,  303 => 80,  280 => 75,  242 => 38,  231 => 62,  226 => 61,  200 => 22,  194 => 87,  191 => 69,  188 => 288,  152 => 92,  153 => 56,  124 => 31,  110 => 40,  104 => 67,  76 => 57,  58 => 23,  358 => 139,  351 => 135,  347 => 95,  343 => 132,  338 => 130,  327 => 94,  323 => 185,  319 => 90,  315 => 123,  301 => 117,  299 => 174,  293 => 109,  289 => 75,  281 => 105,  277 => 85,  271 => 48,  265 => 99,  262 => 105,  260 => 98,  257 => 72,  251 => 101,  248 => 336,  239 => 140,  228 => 135,  225 => 32,  213 => 126,  211 => 61,  197 => 119,  174 => 64,  148 => 35,  134 => 59,  127 => 76,  20 => 1,  270 => 83,  253 => 95,  233 => 137,  212 => 279,  210 => 75,  206 => 24,  202 => 266,  198 => 66,  192 => 64,  185 => 68,  180 => 66,  175 => 43,  172 => 141,  167 => 77,  165 => 72,  160 => 70,  137 => 37,  113 => 41,  100 => 36,  90 => 34,  81 => 25,  65 => 30,  129 => 57,  97 => 63,  84 => 39,  34 => 16,  53 => 22,  77 => 27,  23 => 18,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 105,  453 => 104,  444 => 138,  440 => 148,  437 => 260,  435 => 146,  430 => 115,  427 => 143,  423 => 57,  413 => 134,  409 => 244,  407 => 123,  402 => 130,  398 => 236,  393 => 126,  387 => 122,  384 => 102,  381 => 128,  379 => 119,  374 => 99,  368 => 212,  365 => 141,  362 => 124,  360 => 109,  355 => 27,  341 => 131,  337 => 190,  322 => 116,  314 => 85,  312 => 96,  309 => 117,  305 => 175,  298 => 78,  294 => 90,  285 => 3,  283 => 79,  278 => 410,  268 => 157,  264 => 44,  258 => 150,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 43,  169 => 80,  140 => 52,  132 => 58,  128 => 47,  107 => 36,  61 => 25,  273 => 159,  269 => 100,  254 => 149,  243 => 141,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 31,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 51,  143 => 33,  135 => 81,  119 => 28,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 23,  87 => 14,  28 => 14,  201 => 72,  196 => 52,  183 => 46,  171 => 102,  166 => 100,  163 => 58,  158 => 73,  156 => 68,  151 => 188,  142 => 58,  138 => 36,  136 => 30,  121 => 75,  117 => 51,  105 => 47,  91 => 58,  62 => 29,  49 => 111,  21 => 12,  31 => 15,  94 => 57,  89 => 40,  85 => 34,  75 => 28,  68 => 31,  56 => 40,  25 => 12,  38 => 32,  26 => 20,  24 => 13,  19 => 11,  93 => 68,  88 => 60,  78 => 36,  46 => 35,  44 => 19,  27 => 16,  79 => 31,  72 => 56,  69 => 50,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 40,  157 => 37,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 63,  115 => 45,  111 => 40,  108 => 48,  101 => 73,  98 => 44,  96 => 18,  83 => 37,  74 => 34,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 33,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 25,  203 => 122,  199 => 265,  193 => 294,  189 => 240,  187 => 69,  182 => 80,  176 => 77,  173 => 42,  168 => 60,  164 => 203,  162 => 71,  154 => 36,  149 => 62,  147 => 90,  144 => 62,  141 => 175,  133 => 68,  130 => 67,  125 => 45,  122 => 44,  116 => 39,  112 => 49,  109 => 69,  106 => 104,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 53,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 19,  36 => 17,  33 => 16,  30 => 15,);
    }
}
