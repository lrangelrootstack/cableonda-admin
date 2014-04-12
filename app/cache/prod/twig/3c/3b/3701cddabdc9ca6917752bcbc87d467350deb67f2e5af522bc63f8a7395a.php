<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_3c3b3701cddabdc9ca6917752bcbc87d467350deb67f2e5af522bc63f8a7395a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            // line 16
            echo "        ";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if ((($this->getAttribute($_field_description_, "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "EDIT", 1 => $_value_), "method"))) {
                // line 17
                echo "            <a href=\"";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "name"), 1 => $_value_, 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  26 => 14,  106 => 28,  94 => 35,  79 => 29,  64 => 26,  61 => 25,  51 => 23,  47 => 21,  45 => 20,  38 => 17,  33 => 16,  24 => 12,  21 => 11,  37 => 16,  34 => 15,  32 => 14,  27 => 13,  22 => 12,  19 => 11,  969 => 293,  966 => 292,  962 => 286,  952 => 280,  943 => 279,  940 => 278,  933 => 275,  930 => 274,  927 => 273,  924 => 272,  920 => 271,  917 => 270,  910 => 268,  907 => 267,  904 => 266,  897 => 264,  894 => 263,  891 => 262,  884 => 260,  881 => 259,  878 => 258,  871 => 256,  868 => 255,  865 => 254,  862 => 253,  858 => 248,  855 => 247,  852 => 246,  848 => 244,  843 => 241,  834 => 236,  828 => 232,  825 => 231,  821 => 229,  814 => 227,  811 => 226,  806 => 223,  801 => 222,  798 => 221,  793 => 249,  791 => 246,  788 => 245,  785 => 221,  782 => 220,  777 => 287,  775 => 253,  771 => 251,  769 => 220,  766 => 219,  763 => 218,  758 => 289,  756 => 218,  753 => 217,  750 => 216,  744 => 211,  740 => 210,  736 => 208,  730 => 207,  725 => 204,  719 => 203,  703 => 201,  686 => 198,  677 => 196,  674 => 195,  669 => 194,  663 => 193,  661 => 192,  649 => 188,  645 => 186,  641 => 185,  638 => 184,  628 => 182,  621 => 180,  609 => 178,  605 => 177,  602 => 176,  592 => 173,  588 => 172,  580 => 171,  576 => 170,  571 => 169,  568 => 168,  564 => 167,  561 => 166,  555 => 165,  551 => 163,  536 => 154,  530 => 152,  526 => 151,  523 => 150,  519 => 212,  516 => 211,  513 => 166,  511 => 165,  508 => 164,  505 => 150,  502 => 149,  494 => 136,  490 => 135,  482 => 129,  478 => 128,  470 => 122,  467 => 121,  452 => 114,  449 => 113,  425 => 109,  421 => 107,  414 => 105,  404 => 103,  401 => 102,  398 => 101,  394 => 100,  368 => 97,  365 => 96,  358 => 94,  354 => 143,  350 => 141,  348 => 121,  344 => 119,  342 => 94,  331 => 85,  328 => 84,  325 => 83,  311 => 78,  308 => 77,  302 => 75,  297 => 51,  287 => 49,  282 => 48,  275 => 44,  271 => 42,  264 => 41,  255 => 40,  251 => 38,  248 => 37,  243 => 34,  222 => 29,  216 => 25,  213 => 24,  207 => 22,  200 => 297,  198 => 292,  195 => 291,  193 => 216,  188 => 213,  179 => 144,  176 => 83,  169 => 75,  165 => 73,  159 => 71,  145 => 70,  136 => 67,  132 => 65,  124 => 63,  99 => 20,  92 => 58,  89 => 57,  84 => 55,  80 => 53,  78 => 37,  75 => 36,  73 => 29,  70 => 28,  68 => 27,  58 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 19,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  28 => 4,  712 => 198,  699 => 200,  694 => 199,  685 => 192,  680 => 197,  673 => 188,  670 => 187,  665 => 184,  654 => 189,  646 => 179,  643 => 178,  639 => 177,  635 => 183,  625 => 181,  622 => 174,  617 => 179,  612 => 172,  607 => 171,  599 => 174,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 118,  459 => 116,  457 => 89,  454 => 88,  451 => 87,  446 => 112,  444 => 138,  438 => 134,  434 => 132,  432 => 111,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 99,  371 => 98,  367 => 118,  364 => 117,  361 => 95,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 80,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 62,  258 => 61,  249 => 60,  233 => 32,  231 => 58,  228 => 31,  225 => 30,  219 => 55,  215 => 54,  209 => 53,  204 => 52,  201 => 51,  197 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 149,  184 => 45,  180 => 43,  174 => 77,  167 => 38,  162 => 72,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 68,  137 => 155,  134 => 154,  128 => 64,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 81,  107 => 80,  105 => 62,  102 => 61,  100 => 34,  97 => 33,  91 => 34,  85 => 32,  81 => 29,  77 => 28,  74 => 28,  71 => 26,  69 => 25,  63 => 22,  60 => 21,  57 => 24,  49 => 18,  42 => 18,  39 => 17,);
    }
}