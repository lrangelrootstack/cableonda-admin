<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_89de65b6546c0e3b16d4c676ad1e76fca0495e75bf5e30218e4d910790e27dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

    <div class=\"row\">
        ";
        // line 21
        $context["has_center"] = false;
        // line 22
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 23
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "center")) {
                // line 24
                echo "                ";
                $context["has_center"] = true;
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div class=\"";
        // line 28
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "col-md-3";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 30
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "left")) {
                // line 31
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>

        ";
        // line 36
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 37
            echo "            <div class=\"col-md-4\">
                ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 39
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "center")) {
                    // line 40
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                    echo "
                    ";
                }
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "
        <div class=\"";
        // line 46
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "right")) {
                // line 49
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>

    ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  696 => 140,  694 => 138,  689 => 137,  683 => 135,  678 => 133,  675 => 132,  666 => 126,  658 => 124,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  414 => 52,  408 => 50,  405 => 49,  400 => 47,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  366 => 33,  363 => 32,  350 => 26,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  308 => 13,  290 => 5,  276 => 395,  263 => 365,  255 => 353,  245 => 335,  215 => 280,  207 => 269,  186 => 239,  161 => 202,  713 => 213,  707 => 148,  704 => 209,  702 => 208,  698 => 206,  695 => 139,  685 => 204,  680 => 134,  668 => 200,  665 => 199,  662 => 125,  654 => 123,  651 => 192,  634 => 190,  617 => 112,  612 => 187,  607 => 186,  604 => 185,  591 => 178,  589 => 177,  584 => 176,  567 => 174,  550 => 94,  546 => 172,  541 => 171,  538 => 170,  535 => 169,  532 => 168,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  511 => 158,  509 => 83,  506 => 156,  504 => 155,  497 => 133,  485 => 129,  482 => 128,  472 => 149,  466 => 147,  455 => 142,  452 => 141,  450 => 64,  447 => 139,  428 => 59,  421 => 127,  412 => 126,  401 => 120,  395 => 118,  392 => 117,  382 => 115,  375 => 114,  372 => 113,  369 => 112,  359 => 106,  356 => 105,  345 => 101,  340 => 100,  334 => 98,  330 => 96,  317 => 89,  295 => 83,  292 => 82,  288 => 4,  286 => 80,  279 => 78,  274 => 77,  266 => 366,  205 => 56,  184 => 233,  178 => 45,  146 => 47,  126 => 147,  114 => 111,  118 => 28,  150 => 48,  70 => 29,  324 => 92,  318 => 98,  300 => 92,  297 => 91,  287 => 88,  284 => 87,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 341,  244 => 65,  237 => 70,  234 => 69,  222 => 297,  181 => 232,  12 => 32,  629 => 198,  618 => 196,  614 => 111,  606 => 192,  601 => 184,  595 => 180,  593 => 105,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 96,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 84,  508 => 142,  505 => 141,  501 => 80,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 127,  468 => 110,  464 => 71,  449 => 103,  441 => 101,  429 => 90,  426 => 58,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  406 => 88,  403 => 48,  396 => 138,  390 => 43,  386 => 116,  376 => 125,  353 => 104,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  316 => 16,  306 => 82,  303 => 93,  280 => 75,  242 => 66,  231 => 62,  226 => 61,  200 => 73,  194 => 248,  191 => 246,  188 => 49,  152 => 38,  153 => 49,  124 => 132,  110 => 25,  104 => 90,  76 => 28,  58 => 23,  358 => 139,  351 => 135,  347 => 102,  343 => 132,  338 => 130,  327 => 94,  323 => 125,  319 => 90,  315 => 123,  301 => 117,  299 => 8,  293 => 6,  289 => 89,  281 => 411,  277 => 85,  271 => 374,  265 => 106,  262 => 105,  260 => 363,  257 => 72,  251 => 101,  248 => 336,  239 => 65,  228 => 67,  225 => 298,  213 => 82,  211 => 61,  197 => 249,  174 => 217,  148 => 35,  134 => 161,  127 => 26,  20 => 11,  270 => 83,  253 => 342,  233 => 304,  212 => 279,  210 => 270,  206 => 56,  202 => 266,  198 => 66,  192 => 64,  185 => 51,  180 => 66,  175 => 43,  172 => 43,  167 => 48,  165 => 52,  160 => 57,  137 => 37,  113 => 42,  100 => 42,  90 => 18,  81 => 40,  65 => 29,  129 => 148,  97 => 33,  84 => 29,  34 => 15,  53 => 22,  77 => 35,  23 => 12,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 105,  453 => 104,  444 => 138,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 89,  407 => 123,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 129,  381 => 128,  379 => 119,  374 => 36,  368 => 34,  365 => 141,  362 => 124,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 91,  314 => 85,  312 => 96,  309 => 88,  305 => 86,  298 => 78,  294 => 90,  285 => 3,  283 => 79,  278 => 410,  268 => 373,  264 => 2,  258 => 354,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 290,  214 => 75,  177 => 65,  169 => 210,  140 => 52,  132 => 57,  128 => 47,  107 => 36,  61 => 24,  273 => 394,  269 => 75,  254 => 71,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 79,  219 => 64,  217 => 289,  208 => 59,  204 => 267,  179 => 224,  159 => 51,  143 => 59,  135 => 45,  119 => 40,  102 => 43,  71 => 19,  67 => 26,  63 => 31,  59 => 164,  87 => 17,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 216,  166 => 209,  163 => 58,  158 => 62,  156 => 195,  151 => 188,  142 => 58,  138 => 46,  136 => 168,  121 => 131,  117 => 45,  105 => 44,  91 => 31,  62 => 165,  49 => 111,  21 => 11,  31 => 16,  94 => 57,  89 => 47,  85 => 36,  75 => 31,  68 => 24,  56 => 27,  25 => 13,  38 => 20,  26 => 14,  24 => 3,  19 => 2,  93 => 39,  88 => 30,  78 => 36,  46 => 22,  44 => 73,  27 => 14,  79 => 32,  72 => 198,  69 => 13,  47 => 74,  40 => 20,  37 => 53,  22 => 7,  246 => 99,  157 => 57,  145 => 53,  139 => 169,  131 => 43,  123 => 30,  120 => 46,  115 => 27,  111 => 110,  108 => 45,  101 => 89,  98 => 21,  96 => 67,  83 => 37,  74 => 20,  66 => 12,  55 => 21,  52 => 112,  50 => 21,  43 => 21,  41 => 20,  35 => 19,  32 => 18,  29 => 11,  209 => 82,  203 => 55,  199 => 265,  193 => 73,  189 => 240,  187 => 69,  182 => 50,  176 => 223,  173 => 42,  168 => 62,  164 => 203,  162 => 60,  154 => 189,  149 => 182,  147 => 32,  144 => 176,  141 => 175,  133 => 49,  130 => 27,  125 => 42,  122 => 45,  116 => 39,  112 => 38,  109 => 37,  106 => 104,  103 => 34,  99 => 68,  95 => 41,  92 => 19,  86 => 46,  82 => 38,  80 => 36,  73 => 27,  64 => 25,  60 => 28,  57 => 154,  54 => 153,  51 => 21,  48 => 24,  45 => 18,  42 => 17,  39 => 16,  36 => 16,  33 => 16,  30 => 13,);
    }
}
