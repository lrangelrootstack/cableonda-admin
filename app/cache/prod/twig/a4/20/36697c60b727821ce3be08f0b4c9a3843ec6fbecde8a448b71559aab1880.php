<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_a42036697c60b727821ce3be08f0b4c9a3843ec6fbecde8a448b71559aab1880 extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus-circle\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <div class=\"btn-group sonata-action-element\">
            <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-plus-circle\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  54 => 26,  50 => 25,  33 => 16,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  509 => 83,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  400 => 47,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 411,  278 => 410,  276 => 395,  273 => 394,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  245 => 335,  243 => 327,  240 => 326,  225 => 298,  222 => 297,  215 => 280,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  186 => 239,  181 => 232,  166 => 209,  164 => 203,  161 => 202,  154 => 189,  149 => 182,  144 => 176,  141 => 175,  139 => 169,  131 => 160,  126 => 147,  124 => 132,  121 => 131,  114 => 111,  111 => 110,  106 => 104,  101 => 89,  96 => 67,  91 => 56,  69 => 13,  238 => 312,  233 => 304,  230 => 303,  227 => 301,  224 => 79,  217 => 289,  214 => 75,  212 => 279,  189 => 240,  187 => 69,  184 => 233,  180 => 66,  177 => 65,  168 => 62,  162 => 60,  157 => 57,  153 => 55,  151 => 188,  146 => 181,  136 => 168,  134 => 161,  129 => 148,  103 => 43,  100 => 42,  95 => 41,  86 => 46,  83 => 37,  80 => 36,  74 => 20,  64 => 3,  90 => 27,  77 => 35,  63 => 22,  52 => 17,  27 => 14,  25 => 12,  37 => 20,  43 => 21,  35 => 19,  87 => 28,  81 => 40,  67 => 32,  56 => 28,  53 => 27,  51 => 25,  48 => 24,  45 => 23,  38 => 18,  32 => 18,  30 => 17,  24 => 13,  21 => 11,  36 => 20,  34 => 18,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  629 => 198,  618 => 196,  614 => 111,  606 => 192,  601 => 190,  595 => 188,  593 => 105,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 71,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 58,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 48,  398 => 143,  396 => 138,  390 => 43,  386 => 132,  384 => 129,  381 => 128,  376 => 125,  362 => 124,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  322 => 117,  319 => 87,  316 => 16,  314 => 85,  309 => 83,  306 => 82,  303 => 81,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 363,  257 => 72,  254 => 71,  248 => 336,  242 => 66,  239 => 65,  235 => 311,  231 => 62,  226 => 61,  220 => 290,  208 => 59,  206 => 58,  203 => 57,  200 => 73,  197 => 249,  194 => 248,  191 => 246,  188 => 52,  185 => 51,  182 => 50,  179 => 224,  176 => 223,  174 => 217,  171 => 216,  169 => 210,  165 => 61,  159 => 196,  156 => 195,  152 => 37,  148 => 35,  145 => 34,  140 => 52,  133 => 157,  130 => 156,  128 => 155,  125 => 46,  119 => 117,  116 => 116,  113 => 149,  109 => 105,  107 => 146,  104 => 90,  102 => 81,  99 => 68,  97 => 71,  94 => 57,  92 => 34,  89 => 47,  84 => 41,  79 => 32,  76 => 31,  73 => 24,  71 => 19,  68 => 30,  66 => 12,  61 => 2,  58 => 28,  55 => 18,  49 => 21,  42 => 13,  39 => 12,);
    }
}
