<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_5eb5a3772cc9dfa02f373de59970f908b74ad1f309f5eef851653c453156f06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 28
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    // line 28
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 20,  67 => 32,  53 => 27,  51 => 26,  45 => 24,  38 => 21,  32 => 19,  30 => 13,  24 => 12,  21 => 11,  34 => 16,  29 => 14,  26 => 13,  22 => 12,  19 => 11,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  860 => 275,  854 => 272,  851 => 271,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  835 => 265,  833 => 264,  830 => 263,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  780 => 241,  775 => 238,  767 => 233,  761 => 229,  759 => 228,  755 => 226,  749 => 224,  747 => 223,  742 => 220,  739 => 219,  736 => 218,  731 => 246,  729 => 243,  726 => 242,  723 => 218,  720 => 217,  715 => 284,  713 => 250,  709 => 248,  707 => 217,  704 => 216,  701 => 215,  696 => 286,  694 => 215,  691 => 214,  688 => 213,  682 => 208,  678 => 207,  674 => 205,  668 => 204,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  638 => 196,  631 => 195,  625 => 194,  622 => 193,  619 => 192,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  546 => 169,  540 => 168,  537 => 167,  533 => 166,  527 => 164,  524 => 163,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  478 => 163,  476 => 162,  473 => 161,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  448 => 126,  445 => 125,  437 => 119,  434 => 118,  430 => 115,  414 => 109,  400 => 108,  394 => 106,  374 => 99,  371 => 98,  368 => 97,  350 => 96,  347 => 95,  345 => 94,  342 => 93,  339 => 92,  332 => 140,  328 => 138,  326 => 118,  320 => 91,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  246 => 40,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  193 => 294,  186 => 213,  181 => 210,  172 => 141,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  138 => 70,  126 => 65,  123 => 64,  120 => 63,  103 => 62,  100 => 61,  91 => 58,  80 => 53,  78 => 37,  75 => 36,  70 => 28,  63 => 22,  60 => 21,  56 => 28,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 25,  44 => 13,  40 => 11,  36 => 20,  31 => 15,  28 => 4,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 183,  593 => 182,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 113,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 104,  386 => 132,  384 => 102,  381 => 128,  376 => 100,  362 => 124,  353 => 123,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  322 => 116,  319 => 87,  316 => 86,  314 => 85,  309 => 82,  306 => 81,  303 => 80,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 42,  257 => 72,  254 => 41,  248 => 67,  242 => 38,  239 => 37,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 24,  203 => 57,  200 => 22,  197 => 55,  194 => 54,  191 => 289,  188 => 288,  185 => 51,  182 => 50,  179 => 146,  176 => 48,  174 => 47,  171 => 46,  169 => 80,  165 => 43,  159 => 39,  156 => 38,  152 => 71,  148 => 35,  145 => 34,  140 => 25,  133 => 68,  130 => 67,  128 => 155,  125 => 154,  119 => 151,  116 => 150,  113 => 149,  109 => 147,  107 => 146,  104 => 145,  102 => 81,  99 => 80,  97 => 60,  94 => 70,  92 => 34,  89 => 57,  84 => 55,  79 => 30,  76 => 35,  73 => 34,  71 => 27,  68 => 24,  66 => 25,  61 => 29,  58 => 20,  55 => 21,  49 => 18,  42 => 23,  39 => 18,);
    }
}
