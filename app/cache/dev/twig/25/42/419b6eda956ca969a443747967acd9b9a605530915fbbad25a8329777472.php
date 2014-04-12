<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_2542419b6eda956ca969a443747967acd9b9a605530915fbbad25a8329777472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 109,  216 => 100,  548 => 184,  531 => 175,  525 => 172,  513 => 168,  502 => 164,  499 => 163,  489 => 157,  475 => 152,  462 => 146,  443 => 137,  399 => 116,  391 => 113,  354 => 102,  346 => 99,  310 => 89,  302 => 84,  296 => 82,  687 => 408,  670 => 397,  660 => 393,  656 => 391,  639 => 380,  594 => 353,  583 => 347,  581 => 344,  573 => 340,  569 => 339,  552 => 328,  544 => 323,  528 => 312,  516 => 169,  483 => 154,  458 => 275,  454 => 274,  431 => 257,  424 => 128,  422 => 251,  348 => 100,  333 => 189,  321 => 123,  256 => 121,  232 => 84,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  854 => 272,  851 => 271,  835 => 265,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  775 => 238,  761 => 229,  759 => 228,  755 => 226,  747 => 223,  742 => 220,  736 => 218,  731 => 246,  726 => 242,  723 => 218,  720 => 217,  709 => 248,  701 => 215,  691 => 214,  688 => 213,  682 => 405,  674 => 205,  663 => 201,  657 => 200,  645 => 383,  642 => 197,  631 => 195,  625 => 194,  622 => 193,  616 => 191,  611 => 364,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 349,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 332,  556 => 171,  540 => 321,  537 => 178,  533 => 314,  518 => 162,  514 => 160,  500 => 151,  494 => 297,  488 => 294,  481 => 208,  476 => 287,  473 => 161,  448 => 139,  445 => 263,  434 => 118,  394 => 106,  339 => 92,  328 => 187,  326 => 118,  320 => 91,  275 => 103,  218 => 30,  155 => 53,  170 => 79,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 275,  857 => 210,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  833 => 264,  830 => 263,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 241,  772 => 172,  769 => 171,  767 => 233,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 224,  746 => 161,  739 => 219,  729 => 243,  724 => 154,  721 => 153,  715 => 284,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  696 => 414,  694 => 215,  689 => 137,  683 => 135,  678 => 207,  675 => 132,  666 => 126,  658 => 124,  649 => 384,  643 => 120,  640 => 119,  638 => 196,  635 => 379,  619 => 369,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 161,  493 => 78,  490 => 77,  478 => 163,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  442 => 62,  433 => 60,  414 => 122,  408 => 119,  405 => 49,  400 => 108,  388 => 112,  385 => 226,  377 => 37,  371 => 98,  366 => 33,  363 => 210,  350 => 96,  344 => 24,  342 => 97,  335 => 21,  332 => 140,  313 => 90,  311 => 14,  308 => 88,  290 => 5,  276 => 395,  263 => 125,  255 => 74,  245 => 335,  215 => 78,  207 => 269,  186 => 83,  161 => 71,  713 => 250,  707 => 217,  704 => 216,  702 => 208,  698 => 206,  695 => 139,  685 => 204,  680 => 400,  668 => 204,  665 => 395,  662 => 125,  654 => 123,  651 => 192,  634 => 190,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 178,  589 => 177,  584 => 176,  567 => 174,  550 => 185,  546 => 169,  541 => 180,  538 => 170,  535 => 169,  532 => 168,  529 => 92,  527 => 164,  524 => 163,  515 => 85,  511 => 167,  509 => 83,  506 => 166,  504 => 155,  497 => 133,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 269,  428 => 59,  421 => 126,  412 => 126,  401 => 120,  395 => 118,  392 => 117,  382 => 115,  375 => 106,  372 => 105,  369 => 112,  359 => 106,  356 => 105,  345 => 94,  340 => 100,  334 => 98,  330 => 96,  317 => 89,  295 => 77,  292 => 135,  288 => 107,  286 => 133,  279 => 104,  274 => 129,  266 => 366,  205 => 56,  184 => 64,  178 => 45,  146 => 49,  126 => 42,  114 => 71,  118 => 23,  150 => 65,  70 => 33,  324 => 92,  318 => 145,  300 => 139,  297 => 91,  287 => 88,  284 => 167,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 93,  244 => 65,  237 => 70,  234 => 34,  222 => 81,  181 => 80,  12 => 32,  629 => 376,  618 => 196,  614 => 111,  606 => 192,  601 => 357,  595 => 183,  593 => 182,  588 => 184,  579 => 343,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 186,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 170,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 153,  468 => 282,  464 => 71,  449 => 103,  441 => 262,  429 => 90,  426 => 256,  420 => 111,  417 => 249,  415 => 101,  411 => 99,  406 => 88,  403 => 117,  396 => 138,  390 => 104,  386 => 111,  376 => 100,  353 => 104,  336 => 91,  331 => 121,  329 => 120,  325 => 93,  316 => 121,  306 => 141,  303 => 140,  280 => 131,  242 => 113,  231 => 62,  226 => 61,  200 => 22,  194 => 88,  191 => 69,  188 => 288,  152 => 92,  153 => 72,  124 => 41,  110 => 22,  104 => 49,  76 => 17,  58 => 23,  358 => 139,  351 => 135,  347 => 95,  343 => 132,  338 => 130,  327 => 94,  323 => 185,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 109,  289 => 75,  281 => 105,  277 => 78,  271 => 48,  265 => 126,  262 => 105,  260 => 124,  257 => 72,  251 => 101,  248 => 116,  239 => 140,  228 => 68,  225 => 32,  213 => 126,  211 => 61,  197 => 90,  174 => 60,  148 => 64,  134 => 45,  127 => 28,  20 => 1,  270 => 83,  253 => 95,  233 => 137,  212 => 279,  210 => 75,  206 => 24,  202 => 266,  198 => 66,  192 => 88,  185 => 86,  180 => 62,  175 => 77,  172 => 141,  167 => 77,  165 => 77,  160 => 76,  137 => 59,  113 => 41,  100 => 36,  90 => 32,  81 => 30,  65 => 30,  129 => 57,  97 => 63,  84 => 29,  34 => 16,  53 => 10,  77 => 27,  23 => 18,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 105,  453 => 104,  444 => 138,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 57,  413 => 134,  409 => 244,  407 => 123,  402 => 130,  398 => 236,  393 => 114,  387 => 122,  384 => 102,  381 => 108,  379 => 119,  374 => 99,  368 => 103,  365 => 141,  362 => 124,  360 => 109,  355 => 27,  341 => 131,  337 => 190,  322 => 116,  314 => 85,  312 => 143,  309 => 117,  305 => 87,  298 => 78,  294 => 90,  285 => 3,  283 => 79,  278 => 410,  268 => 127,  264 => 44,  258 => 150,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 74,  140 => 52,  132 => 59,  128 => 58,  107 => 36,  61 => 12,  273 => 159,  269 => 100,  254 => 149,  243 => 141,  240 => 326,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 107,  159 => 70,  143 => 48,  135 => 81,  119 => 28,  102 => 17,  71 => 29,  67 => 32,  63 => 50,  59 => 28,  87 => 33,  28 => 4,  201 => 65,  196 => 52,  183 => 46,  171 => 102,  166 => 100,  163 => 58,  158 => 75,  156 => 68,  151 => 188,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 19,  105 => 18,  91 => 58,  62 => 29,  49 => 20,  21 => 12,  31 => 3,  94 => 34,  89 => 40,  85 => 34,  75 => 39,  68 => 31,  56 => 11,  25 => 12,  38 => 17,  26 => 11,  24 => 13,  19 => 1,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  44 => 8,  27 => 16,  79 => 31,  72 => 37,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 40,  157 => 37,  145 => 52,  139 => 60,  131 => 48,  123 => 57,  120 => 20,  115 => 50,  111 => 40,  108 => 19,  101 => 73,  98 => 47,  96 => 18,  83 => 37,  74 => 34,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 5,  35 => 16,  32 => 16,  29 => 15,  209 => 96,  203 => 93,  199 => 265,  193 => 294,  189 => 240,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 68,  130 => 57,  125 => 45,  122 => 44,  116 => 39,  112 => 52,  109 => 40,  106 => 104,  103 => 46,  99 => 26,  95 => 43,  92 => 45,  86 => 43,  82 => 28,  80 => 41,  73 => 16,  64 => 13,  60 => 25,  57 => 22,  54 => 25,  51 => 24,  48 => 9,  45 => 19,  42 => 18,  39 => 17,  36 => 4,  33 => 3,  30 => 15,);
    }
}