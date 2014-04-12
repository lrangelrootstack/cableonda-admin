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
        return array (  43 => 19,  35 => 17,  87 => 28,  81 => 20,  67 => 32,  56 => 28,  53 => 27,  51 => 26,  48 => 25,  45 => 24,  38 => 21,  32 => 16,  30 => 13,  24 => 12,  21 => 11,  36 => 20,  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 188,  593 => 187,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 89,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 134,  386 => 132,  384 => 129,  381 => 128,  376 => 125,  362 => 124,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  322 => 117,  319 => 87,  316 => 86,  314 => 85,  309 => 83,  306 => 82,  303 => 81,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 73,  257 => 72,  254 => 71,  248 => 67,  242 => 66,  239 => 65,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  194 => 54,  191 => 53,  188 => 52,  185 => 51,  182 => 50,  179 => 49,  176 => 48,  174 => 47,  171 => 46,  169 => 45,  165 => 43,  159 => 39,  156 => 38,  152 => 37,  148 => 35,  145 => 34,  140 => 25,  133 => 157,  130 => 156,  128 => 155,  125 => 154,  119 => 151,  116 => 150,  113 => 149,  109 => 147,  107 => 146,  104 => 145,  102 => 81,  99 => 80,  97 => 71,  94 => 70,  92 => 34,  89 => 33,  84 => 31,  79 => 30,  76 => 35,  73 => 34,  71 => 27,  68 => 26,  66 => 25,  61 => 29,  58 => 22,  55 => 21,  49 => 21,  42 => 23,  39 => 18,);
    }
}
