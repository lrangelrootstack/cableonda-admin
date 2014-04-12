<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_2147ad16124e8116af03a1325dda3bb54867c122f7ede1cee1d1298795d0c9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups")) / (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                // line 26
                echo "                ";
                if ((((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / (isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 52,  183 => 46,  160 => 38,  150 => 35,  143 => 33,  132 => 28,  118 => 23,  108 => 21,  105 => 20,  93 => 17,  20 => 1,  57 => 27,  33 => 16,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  857 => 210,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  724 => 154,  721 => 153,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  635 => 117,  617 => 112,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  515 => 85,  509 => 83,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  461 => 70,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  423 => 57,  408 => 50,  405 => 49,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  363 => 32,  355 => 27,  344 => 24,  337 => 22,  335 => 21,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 411,  278 => 410,  276 => 395,  273 => 394,  268 => 373,  266 => 366,  263 => 365,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  245 => 335,  243 => 327,  240 => 326,  222 => 297,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  166 => 209,  164 => 203,  161 => 202,  154 => 36,  149 => 182,  144 => 176,  141 => 175,  139 => 169,  131 => 160,  124 => 25,  121 => 24,  114 => 111,  111 => 22,  106 => 104,  101 => 89,  96 => 18,  69 => 13,  238 => 312,  233 => 304,  230 => 303,  227 => 301,  224 => 79,  217 => 56,  214 => 75,  212 => 279,  189 => 240,  187 => 69,  184 => 233,  180 => 66,  177 => 43,  168 => 41,  157 => 37,  153 => 55,  151 => 188,  146 => 34,  136 => 30,  134 => 161,  129 => 27,  95 => 41,  86 => 46,  83 => 37,  74 => 20,  64 => 3,  90 => 16,  77 => 12,  27 => 14,  25 => 12,  37 => 20,  43 => 21,  35 => 19,  87 => 14,  81 => 40,  67 => 32,  53 => 27,  51 => 9,  45 => 23,  38 => 18,  32 => 4,  30 => 17,  24 => 13,  21 => 11,  34 => 18,  29 => 3,  26 => 2,  22 => 12,  19 => 11,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  860 => 211,  854 => 272,  851 => 271,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  835 => 265,  833 => 199,  830 => 198,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  780 => 176,  775 => 238,  767 => 170,  761 => 229,  759 => 228,  755 => 226,  749 => 162,  747 => 223,  742 => 220,  739 => 156,  736 => 218,  731 => 246,  729 => 155,  726 => 242,  723 => 218,  720 => 217,  715 => 151,  713 => 250,  709 => 248,  707 => 148,  704 => 216,  701 => 215,  696 => 140,  694 => 138,  691 => 214,  688 => 213,  682 => 208,  678 => 133,  674 => 205,  668 => 204,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  638 => 118,  631 => 195,  625 => 194,  622 => 193,  619 => 113,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  546 => 169,  540 => 168,  537 => 167,  533 => 166,  527 => 91,  524 => 90,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  478 => 74,  476 => 162,  473 => 161,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  448 => 126,  445 => 125,  437 => 61,  434 => 118,  430 => 115,  414 => 52,  400 => 47,  394 => 106,  374 => 36,  371 => 35,  368 => 34,  350 => 26,  347 => 95,  345 => 94,  342 => 23,  339 => 92,  332 => 20,  328 => 138,  326 => 118,  320 => 91,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 374,  264 => 44,  246 => 40,  234 => 34,  225 => 298,  221 => 31,  218 => 30,  215 => 280,  209 => 25,  193 => 51,  186 => 47,  181 => 232,  172 => 141,  167 => 77,  162 => 60,  158 => 73,  155 => 72,  138 => 70,  126 => 26,  123 => 64,  120 => 63,  103 => 43,  100 => 42,  91 => 56,  80 => 13,  78 => 37,  75 => 36,  70 => 28,  63 => 22,  60 => 21,  56 => 28,  54 => 26,  52 => 17,  50 => 25,  46 => 14,  48 => 8,  44 => 13,  40 => 11,  36 => 6,  31 => 16,  28 => 4,  629 => 198,  618 => 196,  614 => 111,  606 => 192,  601 => 190,  595 => 183,  593 => 105,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 112,  468 => 110,  464 => 71,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 58,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 48,  398 => 143,  396 => 138,  390 => 43,  386 => 132,  384 => 102,  381 => 128,  376 => 100,  362 => 124,  353 => 123,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  322 => 116,  319 => 87,  316 => 16,  314 => 85,  309 => 82,  306 => 81,  303 => 80,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 363,  257 => 72,  254 => 41,  248 => 336,  242 => 38,  239 => 37,  235 => 311,  231 => 62,  226 => 61,  220 => 290,  208 => 59,  206 => 24,  203 => 55,  200 => 54,  197 => 249,  194 => 248,  191 => 246,  188 => 48,  185 => 51,  182 => 50,  179 => 44,  176 => 223,  174 => 42,  171 => 216,  169 => 210,  165 => 61,  159 => 196,  156 => 195,  152 => 71,  148 => 35,  145 => 34,  140 => 52,  133 => 68,  130 => 67,  128 => 155,  125 => 46,  119 => 117,  116 => 116,  113 => 149,  109 => 105,  107 => 146,  104 => 90,  102 => 19,  99 => 68,  97 => 60,  94 => 57,  92 => 34,  89 => 47,  84 => 41,  79 => 32,  76 => 31,  73 => 24,  71 => 11,  68 => 10,  66 => 12,  61 => 2,  58 => 28,  55 => 18,  49 => 21,  42 => 7,  39 => 12,);
    }
}
