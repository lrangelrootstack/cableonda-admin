<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_0205f38a3346c02983dbad930a3a32fe009f7d71c29ffbff15ea3e8db4362a5a extends Twig_Template
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
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $context["itemsPerColumn"] = $this->getAttribute($_admin_pool_, "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if (isset($context["itemsPerColumn"])) { $_itemsPerColumn_ = $context["itemsPerColumn"]; } else { $_itemsPerColumn_ = null; }
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute($_admin_pool_, "dashboardgroups")) / $_itemsPerColumn_));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (isset($context["columnsCount"])) { $_columnsCount_ = $context["columnsCount"]; } else { $_columnsCount_ = null; }
        if (($_columnsCount_ > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (isset($context["columnsCount"])) { $_columnsCount_ = $context["columnsCount"]; } else { $_columnsCount_ = null; }
        if (($_columnsCount_ > 1)) {
            echo "style=\"width: ";
            if (isset($context["columnsCount"])) { $_columnsCount_ = $context["columnsCount"]; } else { $_columnsCount_ = null; }
            echo twig_escape_filter($this->env, ($_columnsCount_ * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "dashboardgroups"));
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
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ((!$_display_)) {
                    // line 12
                    echo "                ";
                    if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                    $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
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
            if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
            if ($_display_) {
                // line 18
                echo "                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                    if (($_item_count_ == 0)) {
                        // line 19
                        echo "                    ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                            $context["item_count"] = ($_item_count_ + 1);
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
            if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
            if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
            if (($_display_ && ($_item_count_ > 0))) {
                // line 26
                echo "                ";
                if (isset($context["columnsCount"])) { $_columnsCount_ = $context["columnsCount"]; } else { $_columnsCount_ = null; }
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["itemsPerColumn"])) { $_itemsPerColumn_ = $context["itemsPerColumn"]; } else { $_itemsPerColumn_ = null; }
                if ((($_columnsCount_ > 1) && (($this->getAttribute($_loop_, "index0") % $_itemsPerColumn_) == 0))) {
                    // line 27
                    echo "                    ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    if (isset($context["columnsCount"])) { $_columnsCount_ = $context["columnsCount"]; } else { $_columnsCount_ = null; }
                    echo twig_escape_filter($this->env, twig_round((12 / $_columnsCount_)), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (($this->getAttribute($_admin_, "hasroute", array(0 => "create"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
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
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["itemsPerColumn"])) { $_itemsPerColumn_ = $context["itemsPerColumn"]; } else { $_itemsPerColumn_ = null; }
                if (((!$this->getAttribute($_loop_, "last")) && (($this->getAttribute($_loop_, "index") % $_itemsPerColumn_) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["itemsPerColumn"])) { $_itemsPerColumn_ = $context["itemsPerColumn"]; } else { $_itemsPerColumn_ = null; }
                if ((($this->getAttribute($_loop_, "length") > $_itemsPerColumn_) && (($this->getAttribute($_loop_, "index") % $_itemsPerColumn_) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["itemsPerColumn"])) { $_itemsPerColumn_ = $context["itemsPerColumn"]; } else { $_itemsPerColumn_ = null; }
                if ((($this->getAttribute($_loop_, "length") > $_itemsPerColumn_) && $this->getAttribute($_loop_, "last"))) {
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
        return array (  237 => 55,  234 => 54,  205 => 43,  196 => 41,  127 => 22,  120 => 20,  108 => 18,  20 => 1,  1579 => 421,  1571 => 419,  1562 => 417,  1558 => 416,  1556 => 415,  1551 => 414,  1539 => 413,  1537 => 412,  1534 => 411,  1519 => 405,  1511 => 403,  1502 => 401,  1498 => 400,  1496 => 399,  1491 => 398,  1483 => 397,  1481 => 396,  1478 => 395,  1463 => 389,  1455 => 387,  1446 => 385,  1442 => 384,  1440 => 383,  1435 => 382,  1427 => 381,  1419 => 380,  1414 => 379,  1409 => 378,  1404 => 377,  1396 => 376,  1394 => 375,  1391 => 374,  1378 => 369,  1372 => 368,  1370 => 367,  1367 => 366,  1358 => 360,  1351 => 358,  1347 => 357,  1341 => 356,  1339 => 355,  1336 => 354,  1329 => 349,  1319 => 347,  1314 => 346,  1311 => 345,  1307 => 344,  1305 => 343,  1302 => 342,  1293 => 338,  1291 => 337,  1288 => 336,  1282 => 332,  1275 => 330,  1271 => 329,  1269 => 328,  1266 => 327,  1256 => 322,  1252 => 321,  1220 => 320,  1217 => 319,  1214 => 318,  1211 => 317,  1207 => 316,  1203 => 315,  1199 => 314,  1197 => 313,  1194 => 312,  1186 => 308,  1181 => 307,  1175 => 306,  1173 => 305,  1170 => 304,  1162 => 299,  1159 => 298,  1150 => 293,  1147 => 292,  1145 => 291,  1142 => 290,  1133 => 285,  1128 => 284,  1123 => 283,  1120 => 282,  1118 => 281,  1115 => 280,  1107 => 276,  1105 => 272,  1103 => 271,  1100 => 270,  1095 => 266,  1068 => 261,  1065 => 260,  1061 => 259,  1057 => 258,  1054 => 257,  1050 => 256,  1046 => 255,  1043 => 254,  1038 => 253,  1034 => 252,  1030 => 251,  1028 => 250,  1025 => 249,  1017 => 243,  1013 => 242,  1011 => 241,  1008 => 240,  1000 => 236,  996 => 235,  994 => 234,  991 => 233,  976 => 229,  973 => 228,  965 => 226,  963 => 225,  960 => 224,  948 => 219,  946 => 218,  935 => 213,  931 => 212,  929 => 211,  926 => 210,  918 => 206,  914 => 205,  912 => 204,  909 => 203,  901 => 199,  895 => 197,  892 => 196,  880 => 191,  875 => 189,  867 => 185,  863 => 184,  861 => 183,  849 => 178,  847 => 177,  844 => 176,  836 => 172,  832 => 171,  830 => 170,  827 => 169,  819 => 165,  815 => 164,  813 => 163,  808 => 161,  783 => 155,  778 => 154,  774 => 153,  768 => 151,  764 => 150,  762 => 149,  759 => 148,  751 => 142,  749 => 141,  748 => 140,  747 => 139,  739 => 137,  733 => 135,  729 => 134,  727 => 133,  724 => 132,  714 => 126,  709 => 125,  704 => 124,  688 => 120,  684 => 119,  682 => 118,  679 => 117,  659 => 112,  656 => 111,  636 => 106,  633 => 105,  616 => 101,  582 => 94,  578 => 93,  559 => 92,  554 => 90,  545 => 85,  531 => 81,  527 => 80,  522 => 79,  518 => 78,  514 => 77,  500 => 75,  497 => 74,  488 => 73,  485 => 72,  476 => 70,  471 => 68,  456 => 62,  450 => 61,  445 => 60,  440 => 59,  435 => 57,  426 => 52,  420 => 50,  416 => 49,  411 => 47,  400 => 43,  395 => 41,  387 => 37,  384 => 36,  376 => 34,  362 => 27,  357 => 26,  347 => 23,  337 => 20,  318 => 16,  314 => 15,  312 => 14,  309 => 13,  300 => 8,  294 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 411,  278 => 410,  276 => 395,  266 => 366,  263 => 365,  260 => 363,  253 => 342,  250 => 341,  245 => 335,  240 => 326,  238 => 312,  235 => 311,  230 => 52,  220 => 48,  217 => 289,  212 => 279,  210 => 270,  202 => 42,  199 => 265,  181 => 232,  164 => 203,  161 => 202,  154 => 28,  151 => 188,  149 => 182,  144 => 26,  141 => 175,  131 => 160,  129 => 148,  126 => 147,  119 => 117,  116 => 19,  111 => 110,  109 => 105,  101 => 16,  96 => 67,  86 => 46,  76 => 30,  273 => 394,  268 => 373,  261 => 80,  244 => 75,  241 => 74,  227 => 301,  224 => 72,  211 => 69,  208 => 68,  183 => 37,  178 => 57,  171 => 216,  166 => 33,  160 => 52,  156 => 195,  153 => 49,  146 => 181,  140 => 25,  121 => 131,  114 => 111,  104 => 17,  98 => 14,  90 => 37,  67 => 30,  53 => 25,  87 => 12,  82 => 25,  66 => 12,  35 => 4,  30 => 3,  25 => 13,  41 => 18,  29 => 14,  26 => 2,  106 => 104,  94 => 57,  79 => 11,  64 => 3,  61 => 27,  51 => 23,  47 => 21,  45 => 20,  38 => 17,  33 => 16,  24 => 12,  21 => 11,  37 => 16,  34 => 15,  32 => 18,  27 => 16,  22 => 12,  19 => 11,  969 => 227,  966 => 292,  962 => 286,  952 => 220,  943 => 217,  940 => 278,  933 => 275,  930 => 274,  927 => 273,  924 => 272,  920 => 271,  917 => 270,  910 => 268,  907 => 267,  904 => 266,  897 => 198,  894 => 263,  891 => 262,  884 => 192,  881 => 259,  878 => 190,  871 => 256,  868 => 255,  865 => 254,  862 => 253,  858 => 182,  855 => 247,  852 => 246,  848 => 244,  843 => 241,  834 => 236,  828 => 232,  825 => 231,  821 => 229,  814 => 227,  811 => 162,  806 => 223,  801 => 156,  798 => 221,  793 => 249,  791 => 246,  788 => 245,  785 => 221,  782 => 220,  777 => 287,  775 => 253,  771 => 251,  769 => 220,  766 => 219,  763 => 218,  758 => 289,  756 => 218,  753 => 217,  750 => 216,  744 => 138,  740 => 210,  736 => 208,  730 => 207,  725 => 204,  719 => 203,  703 => 201,  686 => 198,  677 => 196,  674 => 195,  669 => 194,  663 => 193,  661 => 113,  649 => 188,  645 => 186,  641 => 185,  638 => 107,  628 => 182,  621 => 180,  609 => 178,  605 => 177,  602 => 176,  592 => 96,  588 => 172,  580 => 171,  576 => 170,  571 => 169,  568 => 168,  564 => 167,  561 => 166,  555 => 165,  551 => 163,  536 => 154,  530 => 152,  526 => 151,  523 => 150,  519 => 212,  516 => 211,  513 => 166,  511 => 165,  508 => 164,  505 => 150,  502 => 149,  494 => 136,  490 => 135,  482 => 71,  478 => 128,  470 => 122,  467 => 121,  452 => 114,  449 => 113,  425 => 109,  421 => 107,  414 => 48,  404 => 103,  401 => 102,  398 => 42,  394 => 100,  368 => 97,  365 => 96,  358 => 94,  354 => 143,  350 => 24,  348 => 121,  344 => 119,  342 => 22,  331 => 85,  328 => 84,  325 => 83,  311 => 78,  308 => 77,  302 => 75,  297 => 51,  287 => 49,  282 => 48,  275 => 44,  271 => 374,  264 => 41,  255 => 353,  251 => 56,  248 => 336,  243 => 327,  222 => 297,  216 => 47,  213 => 46,  207 => 269,  200 => 65,  198 => 292,  195 => 291,  193 => 63,  188 => 213,  179 => 36,  176 => 223,  169 => 34,  165 => 73,  159 => 196,  145 => 70,  136 => 168,  132 => 65,  124 => 21,  99 => 68,  92 => 58,  89 => 47,  84 => 41,  80 => 35,  78 => 37,  75 => 10,  73 => 29,  70 => 28,  68 => 27,  58 => 26,  56 => 19,  54 => 8,  52 => 17,  50 => 19,  46 => 7,  48 => 15,  44 => 13,  40 => 11,  36 => 16,  31 => 5,  28 => 4,  712 => 198,  699 => 123,  694 => 122,  685 => 192,  680 => 197,  673 => 188,  670 => 187,  665 => 184,  654 => 189,  646 => 179,  643 => 178,  639 => 177,  635 => 183,  625 => 181,  622 => 174,  617 => 179,  612 => 172,  607 => 171,  599 => 99,  589 => 95,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 91,  553 => 139,  550 => 138,  546 => 131,  541 => 84,  538 => 83,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 69,  468 => 115,  465 => 64,  463 => 118,  459 => 116,  457 => 89,  454 => 88,  451 => 87,  446 => 112,  444 => 138,  438 => 58,  434 => 132,  432 => 111,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 35,  374 => 33,  371 => 32,  367 => 118,  364 => 117,  361 => 95,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 21,  335 => 78,  320 => 76,  316 => 80,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 81,  258 => 354,  249 => 76,  233 => 304,  231 => 58,  228 => 31,  225 => 51,  219 => 55,  215 => 280,  209 => 44,  204 => 267,  201 => 51,  197 => 249,  194 => 248,  191 => 246,  189 => 240,  186 => 38,  184 => 233,  180 => 43,  174 => 35,  167 => 38,  162 => 72,  158 => 30,  155 => 34,  150 => 27,  142 => 157,  139 => 169,  137 => 24,  134 => 23,  128 => 64,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 42,  107 => 80,  105 => 62,  102 => 61,  100 => 27,  97 => 33,  91 => 13,  85 => 32,  81 => 40,  77 => 34,  74 => 20,  71 => 19,  69 => 13,  63 => 29,  60 => 28,  57 => 9,  49 => 24,  42 => 13,  39 => 6,);
    }
}
