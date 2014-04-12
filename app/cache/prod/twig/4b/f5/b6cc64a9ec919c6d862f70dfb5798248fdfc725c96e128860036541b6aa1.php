<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_4bf5b6cc64a9ec919c6d862f70dfb5798248fdfc725c96e128860036541b6aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_per_page\">
        ";
        // line 25
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (isset($context["per_page"])) { $_per_page_ = $context["per_page"]; } else { $_per_page_ = null; }
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (($_per_page_ == $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["per_page"])) { $_per_page_ = $context["per_page"]; } else { $_per_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), array("_page" => 1, "_per_page" => $_per_page_)))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            if (isset($context["per_page"])) { $_per_page_ = $context["per_page"]; } else { $_per_page_ = null; }
            echo twig_escape_filter($this->env, $_per_page_, "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  82 => 25,  66 => 22,  35 => 22,  30 => 17,  25 => 12,  41 => 20,  29 => 15,  26 => 14,  106 => 28,  94 => 35,  79 => 29,  64 => 26,  61 => 19,  51 => 23,  47 => 21,  45 => 20,  38 => 17,  33 => 16,  24 => 12,  21 => 11,  37 => 16,  34 => 15,  32 => 21,  27 => 16,  22 => 11,  19 => 11,  969 => 293,  966 => 292,  962 => 286,  952 => 280,  943 => 279,  940 => 278,  933 => 275,  930 => 274,  927 => 273,  924 => 272,  920 => 271,  917 => 270,  910 => 268,  907 => 267,  904 => 266,  897 => 264,  894 => 263,  891 => 262,  884 => 260,  881 => 259,  878 => 258,  871 => 256,  868 => 255,  865 => 254,  862 => 253,  858 => 248,  855 => 247,  852 => 246,  848 => 244,  843 => 241,  834 => 236,  828 => 232,  825 => 231,  821 => 229,  814 => 227,  811 => 226,  806 => 223,  801 => 222,  798 => 221,  793 => 249,  791 => 246,  788 => 245,  785 => 221,  782 => 220,  777 => 287,  775 => 253,  771 => 251,  769 => 220,  766 => 219,  763 => 218,  758 => 289,  756 => 218,  753 => 217,  750 => 216,  744 => 211,  740 => 210,  736 => 208,  730 => 207,  725 => 204,  719 => 203,  703 => 201,  686 => 198,  677 => 196,  674 => 195,  669 => 194,  663 => 193,  661 => 192,  649 => 188,  645 => 186,  641 => 185,  638 => 184,  628 => 182,  621 => 180,  609 => 178,  605 => 177,  602 => 176,  592 => 173,  588 => 172,  580 => 171,  576 => 170,  571 => 169,  568 => 168,  564 => 167,  561 => 166,  555 => 165,  551 => 163,  536 => 154,  530 => 152,  526 => 151,  523 => 150,  519 => 212,  516 => 211,  513 => 166,  511 => 165,  508 => 164,  505 => 150,  502 => 149,  494 => 136,  490 => 135,  482 => 129,  478 => 128,  470 => 122,  467 => 121,  452 => 114,  449 => 113,  425 => 109,  421 => 107,  414 => 105,  404 => 103,  401 => 102,  398 => 101,  394 => 100,  368 => 97,  365 => 96,  358 => 94,  354 => 143,  350 => 141,  348 => 121,  344 => 119,  342 => 94,  331 => 85,  328 => 84,  325 => 83,  311 => 78,  308 => 77,  302 => 75,  297 => 51,  287 => 49,  282 => 48,  275 => 44,  271 => 42,  264 => 41,  255 => 40,  251 => 38,  248 => 37,  243 => 34,  222 => 29,  216 => 25,  213 => 24,  207 => 22,  200 => 297,  198 => 292,  195 => 291,  193 => 216,  188 => 213,  179 => 144,  176 => 83,  169 => 75,  165 => 73,  159 => 71,  145 => 70,  136 => 67,  132 => 65,  124 => 63,  99 => 20,  92 => 58,  89 => 57,  84 => 55,  80 => 53,  78 => 37,  75 => 36,  73 => 29,  70 => 28,  68 => 27,  58 => 21,  56 => 19,  54 => 17,  52 => 17,  50 => 19,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 18,  31 => 5,  28 => 4,  712 => 198,  699 => 200,  694 => 199,  685 => 192,  680 => 197,  673 => 188,  670 => 187,  665 => 184,  654 => 189,  646 => 179,  643 => 178,  639 => 177,  635 => 183,  625 => 181,  622 => 174,  617 => 179,  612 => 172,  607 => 171,  599 => 174,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 118,  459 => 116,  457 => 89,  454 => 88,  451 => 87,  446 => 112,  444 => 138,  438 => 134,  434 => 132,  432 => 111,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 99,  371 => 98,  367 => 118,  364 => 117,  361 => 95,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 80,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 62,  258 => 61,  249 => 60,  233 => 32,  231 => 58,  228 => 31,  225 => 30,  219 => 55,  215 => 54,  209 => 53,  204 => 52,  201 => 51,  197 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 149,  184 => 45,  180 => 43,  174 => 77,  167 => 38,  162 => 72,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 68,  137 => 155,  134 => 154,  128 => 64,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 30,  107 => 80,  105 => 62,  102 => 61,  100 => 27,  97 => 33,  91 => 34,  85 => 32,  81 => 29,  77 => 24,  74 => 28,  71 => 26,  69 => 23,  63 => 22,  60 => 21,  57 => 18,  49 => 18,  42 => 13,  39 => 12,);
    }
}
