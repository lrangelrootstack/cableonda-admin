<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_857fe98238110eedd02dd640a386dadde58db75e685710a1b185105bbdc61658 extends Twig_Template
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
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  664 => 342,  647 => 336,  644 => 335,  626 => 325,  613 => 320,  602 => 317,  585 => 307,  563 => 298,  519 => 278,  471 => 253,  465 => 249,  463 => 248,  438 => 236,  436 => 235,  418 => 224,  410 => 221,  397 => 213,  383 => 207,  304 => 181,  389 => 160,  378 => 157,  367 => 198,  307 => 128,  810 => 492,  807 => 491,  792 => 488,  788 => 486,  727 => 476,  706 => 473,  690 => 469,  686 => 468,  679 => 466,  677 => 465,  620 => 451,  522 => 279,  357 => 123,  291 => 102,  190 => 76,  446 => 197,  439 => 195,  380 => 206,  373 => 156,  361 => 195,  236 => 109,  216 => 79,  548 => 292,  531 => 283,  525 => 280,  513 => 168,  502 => 164,  499 => 268,  489 => 262,  475 => 152,  462 => 202,  443 => 137,  399 => 116,  391 => 113,  354 => 102,  346 => 99,  310 => 89,  302 => 125,  296 => 121,  687 => 408,  670 => 397,  660 => 340,  656 => 391,  639 => 380,  594 => 353,  583 => 347,  581 => 305,  573 => 340,  569 => 300,  552 => 293,  544 => 323,  528 => 312,  516 => 169,  483 => 258,  458 => 275,  454 => 244,  431 => 189,  424 => 128,  422 => 226,  348 => 140,  333 => 189,  321 => 135,  256 => 96,  232 => 88,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  854 => 272,  851 => 271,  835 => 265,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  775 => 485,  761 => 229,  759 => 228,  755 => 226,  747 => 223,  742 => 220,  736 => 218,  731 => 246,  726 => 242,  723 => 218,  720 => 217,  709 => 248,  701 => 215,  691 => 214,  688 => 213,  682 => 467,  674 => 205,  663 => 201,  657 => 200,  645 => 383,  642 => 197,  631 => 327,  625 => 453,  622 => 323,  616 => 191,  611 => 364,  609 => 319,  603 => 186,  599 => 185,  590 => 181,  587 => 349,  580 => 179,  577 => 303,  565 => 175,  562 => 174,  559 => 296,  556 => 171,  540 => 321,  537 => 178,  533 => 284,  518 => 162,  514 => 160,  500 => 151,  494 => 297,  488 => 294,  481 => 208,  476 => 287,  473 => 254,  448 => 240,  445 => 263,  434 => 118,  394 => 168,  339 => 92,  328 => 139,  326 => 138,  320 => 127,  275 => 105,  218 => 30,  155 => 47,  170 => 96,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 275,  857 => 210,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  833 => 264,  830 => 263,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  785 => 178,  783 => 177,  780 => 241,  772 => 172,  769 => 171,  767 => 233,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 479,  746 => 478,  739 => 219,  729 => 243,  724 => 154,  721 => 153,  715 => 284,  712 => 150,  710 => 475,  699 => 142,  697 => 141,  696 => 414,  694 => 470,  689 => 137,  683 => 135,  678 => 207,  675 => 132,  666 => 126,  658 => 124,  649 => 462,  643 => 120,  640 => 334,  638 => 196,  635 => 379,  619 => 369,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 161,  493 => 78,  490 => 77,  478 => 163,  470 => 147,  467 => 146,  459 => 246,  456 => 132,  442 => 62,  433 => 60,  414 => 122,  408 => 176,  405 => 49,  400 => 214,  388 => 112,  385 => 226,  377 => 37,  371 => 156,  366 => 33,  363 => 153,  350 => 96,  344 => 119,  342 => 137,  335 => 134,  332 => 116,  313 => 183,  311 => 14,  308 => 88,  290 => 119,  276 => 111,  263 => 95,  255 => 101,  245 => 335,  215 => 78,  207 => 75,  186 => 83,  161 => 63,  713 => 250,  707 => 217,  704 => 216,  702 => 472,  698 => 471,  695 => 139,  685 => 204,  680 => 400,  668 => 344,  665 => 395,  662 => 125,  654 => 123,  651 => 337,  634 => 456,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 309,  589 => 177,  584 => 176,  567 => 414,  550 => 185,  546 => 169,  541 => 290,  538 => 170,  535 => 169,  532 => 410,  529 => 409,  527 => 281,  524 => 163,  515 => 276,  511 => 167,  509 => 272,  506 => 166,  504 => 155,  497 => 267,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 269,  428 => 230,  421 => 126,  412 => 222,  401 => 172,  395 => 118,  392 => 117,  382 => 115,  375 => 106,  372 => 105,  369 => 112,  359 => 106,  356 => 105,  345 => 147,  340 => 145,  334 => 141,  330 => 96,  317 => 185,  295 => 178,  292 => 135,  288 => 176,  286 => 112,  279 => 104,  274 => 110,  266 => 366,  205 => 108,  184 => 101,  178 => 66,  146 => 49,  126 => 42,  114 => 71,  118 => 49,  150 => 55,  70 => 26,  324 => 113,  318 => 111,  300 => 180,  297 => 179,  287 => 88,  284 => 167,  272 => 84,  267 => 101,  261 => 80,  259 => 103,  250 => 93,  244 => 65,  237 => 70,  234 => 34,  222 => 83,  181 => 65,  12 => 32,  629 => 326,  618 => 196,  614 => 111,  606 => 318,  601 => 446,  595 => 183,  593 => 310,  588 => 308,  579 => 343,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 295,  553 => 186,  549 => 411,  545 => 291,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 170,  517 => 404,  512 => 84,  508 => 142,  505 => 270,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 256,  468 => 282,  464 => 71,  449 => 198,  441 => 196,  429 => 188,  426 => 256,  420 => 111,  417 => 249,  415 => 180,  411 => 99,  406 => 88,  403 => 117,  396 => 138,  390 => 104,  386 => 159,  376 => 205,  353 => 193,  336 => 91,  331 => 140,  329 => 188,  325 => 129,  316 => 121,  306 => 107,  303 => 106,  280 => 131,  242 => 113,  231 => 83,  226 => 84,  200 => 72,  194 => 68,  191 => 67,  188 => 102,  152 => 46,  153 => 77,  124 => 41,  110 => 22,  104 => 32,  76 => 28,  58 => 18,  358 => 151,  351 => 192,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  301 => 117,  299 => 83,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 48,  265 => 105,  262 => 98,  260 => 124,  257 => 72,  251 => 101,  248 => 97,  239 => 140,  228 => 68,  225 => 32,  213 => 78,  211 => 61,  197 => 104,  174 => 65,  148 => 64,  134 => 54,  127 => 35,  20 => 1,  270 => 102,  253 => 100,  233 => 87,  212 => 78,  210 => 77,  206 => 24,  202 => 94,  198 => 66,  192 => 88,  185 => 74,  180 => 62,  175 => 65,  172 => 64,  167 => 77,  165 => 83,  160 => 76,  137 => 59,  113 => 48,  100 => 39,  90 => 37,  81 => 23,  65 => 30,  129 => 57,  97 => 41,  84 => 27,  34 => 5,  53 => 15,  77 => 20,  23 => 18,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 57,  413 => 134,  409 => 244,  407 => 123,  402 => 215,  398 => 236,  393 => 211,  387 => 164,  384 => 102,  381 => 108,  379 => 119,  374 => 99,  368 => 103,  365 => 197,  362 => 124,  360 => 109,  355 => 150,  341 => 189,  337 => 190,  322 => 116,  314 => 85,  312 => 130,  309 => 129,  305 => 87,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 127,  264 => 44,  258 => 94,  252 => 80,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 61,  169 => 74,  140 => 58,  132 => 59,  128 => 58,  107 => 36,  61 => 23,  273 => 174,  269 => 107,  254 => 149,  243 => 92,  240 => 326,  238 => 312,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 67,  219 => 101,  217 => 79,  208 => 76,  204 => 66,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 40,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  87 => 32,  28 => 3,  201 => 106,  196 => 92,  183 => 46,  171 => 102,  166 => 95,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 61,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  21 => 2,  31 => 8,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 30,  56 => 16,  25 => 35,  38 => 6,  26 => 3,  24 => 3,  19 => 1,  93 => 38,  88 => 32,  78 => 26,  46 => 13,  44 => 9,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 37,  83 => 35,  74 => 27,  66 => 25,  55 => 16,  52 => 12,  50 => 15,  43 => 12,  41 => 8,  35 => 9,  32 => 7,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 294,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 50,  147 => 43,  144 => 42,  141 => 73,  133 => 68,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 27,  106 => 51,  103 => 46,  99 => 23,  95 => 39,  92 => 43,  86 => 43,  82 => 28,  80 => 29,  73 => 24,  64 => 24,  60 => 25,  57 => 20,  54 => 19,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
