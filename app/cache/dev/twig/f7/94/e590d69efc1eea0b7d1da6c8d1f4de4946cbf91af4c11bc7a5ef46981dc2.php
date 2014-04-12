<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_f794e590d69efc1eea0b7d1da6c8d1f4de4946cbf91af4c11bc7a5ef46981dc2 extends Twig_Template
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
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
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
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
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
        return array (  43 => 19,  35 => 17,  87 => 28,  81 => 20,  67 => 32,  53 => 27,  51 => 26,  45 => 24,  38 => 21,  32 => 16,  30 => 13,  24 => 12,  21 => 11,  34 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  860 => 275,  854 => 272,  851 => 271,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  835 => 265,  833 => 264,  830 => 263,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  780 => 241,  775 => 238,  767 => 233,  761 => 229,  759 => 228,  755 => 226,  749 => 224,  747 => 223,  742 => 220,  739 => 219,  736 => 218,  731 => 246,  729 => 243,  726 => 242,  723 => 218,  720 => 217,  715 => 284,  713 => 250,  709 => 248,  707 => 217,  704 => 216,  701 => 215,  696 => 286,  694 => 215,  691 => 214,  688 => 213,  682 => 208,  678 => 207,  674 => 205,  668 => 204,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  638 => 196,  631 => 195,  625 => 194,  622 => 193,  619 => 192,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  546 => 169,  540 => 168,  537 => 167,  533 => 166,  527 => 164,  524 => 163,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  478 => 163,  476 => 162,  473 => 161,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  448 => 126,  445 => 125,  437 => 119,  434 => 118,  430 => 115,  414 => 109,  400 => 108,  394 => 106,  374 => 99,  371 => 98,  368 => 97,  350 => 96,  347 => 95,  345 => 94,  342 => 93,  339 => 92,  332 => 140,  328 => 138,  326 => 118,  320 => 91,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  246 => 40,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  193 => 294,  186 => 213,  181 => 210,  172 => 141,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  138 => 70,  126 => 65,  123 => 64,  120 => 63,  103 => 62,  100 => 61,  91 => 58,  80 => 53,  78 => 37,  75 => 36,  70 => 28,  63 => 22,  60 => 21,  56 => 28,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 25,  44 => 13,  40 => 11,  36 => 20,  31 => 15,  28 => 4,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 183,  593 => 182,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 113,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 104,  386 => 132,  384 => 102,  381 => 128,  376 => 100,  362 => 124,  353 => 123,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  322 => 116,  319 => 87,  316 => 86,  314 => 85,  309 => 82,  306 => 81,  303 => 80,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 42,  257 => 72,  254 => 41,  248 => 67,  242 => 38,  239 => 37,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 24,  203 => 57,  200 => 22,  197 => 55,  194 => 54,  191 => 289,  188 => 288,  185 => 51,  182 => 50,  179 => 146,  176 => 48,  174 => 47,  171 => 46,  169 => 80,  165 => 43,  159 => 39,  156 => 38,  152 => 71,  148 => 35,  145 => 34,  140 => 25,  133 => 68,  130 => 67,  128 => 155,  125 => 154,  119 => 151,  116 => 150,  113 => 149,  109 => 147,  107 => 146,  104 => 145,  102 => 81,  99 => 80,  97 => 60,  94 => 70,  92 => 34,  89 => 57,  84 => 55,  79 => 30,  76 => 35,  73 => 34,  71 => 27,  68 => 24,  66 => 25,  61 => 29,  58 => 20,  55 => 21,  49 => 21,  42 => 23,  39 => 18,);
    }
}
