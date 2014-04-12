<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_4d6feb3f40319683854b2bdf344fc0676803f03971372bebe6abbdfad6c5cc13 extends Twig_Template
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
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"text-center\">
            <ul class=\"pagination\">
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  854 => 272,  851 => 271,  835 => 265,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  775 => 238,  761 => 229,  759 => 228,  755 => 226,  747 => 223,  742 => 220,  736 => 218,  731 => 246,  726 => 242,  723 => 218,  720 => 217,  709 => 248,  701 => 215,  691 => 214,  688 => 213,  682 => 208,  674 => 205,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  631 => 195,  625 => 194,  622 => 193,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  540 => 168,  537 => 167,  533 => 166,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  476 => 162,  473 => 161,  448 => 126,  445 => 125,  434 => 118,  394 => 106,  339 => 92,  328 => 138,  326 => 118,  320 => 91,  275 => 49,  218 => 30,  155 => 72,  170 => 55,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 275,  857 => 210,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  833 => 264,  830 => 263,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 241,  772 => 172,  769 => 171,  767 => 233,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 224,  746 => 161,  739 => 219,  729 => 243,  724 => 154,  721 => 153,  715 => 284,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  696 => 286,  694 => 215,  689 => 137,  683 => 135,  678 => 207,  675 => 132,  666 => 126,  658 => 124,  649 => 122,  643 => 120,  640 => 119,  638 => 196,  635 => 117,  619 => 192,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  478 => 163,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  442 => 62,  433 => 60,  414 => 109,  408 => 50,  405 => 49,  400 => 108,  388 => 42,  385 => 41,  377 => 37,  371 => 98,  366 => 33,  363 => 32,  350 => 96,  344 => 24,  342 => 93,  335 => 21,  332 => 140,  313 => 15,  311 => 14,  308 => 13,  290 => 5,  276 => 395,  263 => 365,  255 => 353,  245 => 335,  215 => 29,  207 => 269,  186 => 213,  161 => 202,  713 => 250,  707 => 217,  704 => 216,  702 => 208,  698 => 206,  695 => 139,  685 => 204,  680 => 134,  668 => 204,  665 => 199,  662 => 125,  654 => 123,  651 => 192,  634 => 190,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 178,  589 => 177,  584 => 176,  567 => 174,  550 => 94,  546 => 169,  541 => 171,  538 => 170,  535 => 169,  532 => 168,  529 => 92,  527 => 164,  524 => 163,  515 => 85,  511 => 158,  509 => 83,  506 => 156,  504 => 155,  497 => 133,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 139,  428 => 59,  421 => 127,  412 => 126,  401 => 120,  395 => 118,  392 => 117,  382 => 115,  375 => 114,  372 => 113,  369 => 112,  359 => 106,  356 => 105,  345 => 94,  340 => 100,  334 => 98,  330 => 96,  317 => 89,  295 => 77,  292 => 82,  288 => 4,  286 => 80,  279 => 78,  274 => 77,  266 => 366,  205 => 56,  184 => 233,  178 => 45,  146 => 34,  126 => 65,  114 => 111,  118 => 23,  150 => 35,  70 => 28,  324 => 92,  318 => 98,  300 => 92,  297 => 91,  287 => 88,  284 => 51,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 341,  244 => 65,  237 => 70,  234 => 34,  222 => 297,  181 => 210,  12 => 32,  629 => 198,  618 => 196,  614 => 111,  606 => 192,  601 => 184,  595 => 183,  593 => 182,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 127,  468 => 110,  464 => 71,  449 => 103,  441 => 101,  429 => 90,  426 => 113,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  406 => 88,  403 => 48,  396 => 138,  390 => 104,  386 => 116,  376 => 100,  353 => 104,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  316 => 16,  306 => 81,  303 => 80,  280 => 75,  242 => 38,  231 => 62,  226 => 61,  200 => 22,  194 => 248,  191 => 289,  188 => 288,  152 => 71,  153 => 49,  124 => 25,  110 => 25,  104 => 90,  76 => 28,  58 => 19,  358 => 139,  351 => 135,  347 => 95,  343 => 132,  338 => 130,  327 => 94,  323 => 125,  319 => 90,  315 => 123,  301 => 117,  299 => 8,  293 => 6,  289 => 75,  281 => 411,  277 => 85,  271 => 48,  265 => 106,  262 => 105,  260 => 42,  257 => 72,  251 => 101,  248 => 336,  239 => 37,  228 => 67,  225 => 32,  213 => 82,  211 => 61,  197 => 249,  174 => 42,  148 => 35,  134 => 161,  127 => 26,  20 => 1,  270 => 83,  253 => 342,  233 => 304,  212 => 279,  210 => 270,  206 => 24,  202 => 266,  198 => 66,  192 => 64,  185 => 51,  180 => 66,  175 => 43,  172 => 141,  167 => 77,  165 => 52,  160 => 38,  137 => 37,  113 => 42,  100 => 61,  90 => 34,  81 => 26,  65 => 29,  129 => 27,  97 => 60,  84 => 55,  34 => 15,  53 => 22,  77 => 25,  23 => 13,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 105,  453 => 104,  444 => 138,  440 => 148,  437 => 119,  435 => 146,  430 => 115,  427 => 143,  423 => 57,  413 => 134,  409 => 89,  407 => 123,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 102,  381 => 128,  379 => 119,  374 => 99,  368 => 97,  365 => 141,  362 => 124,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 116,  314 => 85,  312 => 96,  309 => 82,  305 => 86,  298 => 78,  294 => 90,  285 => 3,  283 => 79,  278 => 410,  268 => 373,  264 => 44,  258 => 354,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 290,  214 => 75,  177 => 43,  169 => 80,  140 => 52,  132 => 28,  128 => 47,  107 => 36,  61 => 28,  273 => 394,  269 => 75,  254 => 41,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 31,  219 => 64,  217 => 56,  208 => 59,  204 => 267,  179 => 146,  159 => 51,  143 => 33,  135 => 45,  119 => 40,  102 => 19,  71 => 29,  67 => 26,  63 => 27,  59 => 164,  87 => 14,  28 => 14,  201 => 92,  196 => 52,  183 => 46,  171 => 216,  166 => 209,  163 => 58,  158 => 73,  156 => 195,  151 => 188,  142 => 58,  138 => 70,  136 => 30,  121 => 24,  117 => 45,  105 => 20,  91 => 58,  62 => 165,  49 => 111,  21 => 11,  31 => 17,  94 => 57,  89 => 57,  85 => 32,  75 => 36,  68 => 24,  56 => 19,  25 => 12,  38 => 20,  26 => 2,  24 => 3,  19 => 11,  93 => 17,  88 => 33,  78 => 37,  46 => 14,  44 => 21,  27 => 16,  79 => 31,  72 => 198,  69 => 13,  47 => 74,  40 => 11,  37 => 53,  22 => 11,  246 => 40,  157 => 37,  145 => 60,  139 => 59,  131 => 43,  123 => 64,  120 => 63,  115 => 45,  111 => 40,  108 => 21,  101 => 37,  98 => 36,  96 => 18,  83 => 37,  74 => 20,  66 => 23,  55 => 25,  52 => 23,  50 => 16,  43 => 21,  41 => 20,  35 => 22,  32 => 21,  29 => 16,  209 => 25,  203 => 55,  199 => 265,  193 => 294,  189 => 240,  187 => 69,  182 => 50,  176 => 223,  173 => 42,  168 => 41,  164 => 203,  162 => 75,  154 => 36,  149 => 62,  147 => 32,  144 => 176,  141 => 175,  133 => 68,  130 => 67,  125 => 42,  122 => 45,  116 => 39,  112 => 38,  109 => 37,  106 => 104,  103 => 38,  99 => 30,  95 => 41,  92 => 19,  86 => 46,  82 => 36,  80 => 53,  73 => 24,  64 => 25,  60 => 26,  57 => 154,  54 => 18,  51 => 9,  48 => 15,  45 => 18,  42 => 20,  39 => 19,  36 => 6,  33 => 16,  30 => 17,);
    }
}
