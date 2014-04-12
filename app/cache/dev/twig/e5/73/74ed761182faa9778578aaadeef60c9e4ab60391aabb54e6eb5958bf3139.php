<?php

/* CableondaAdmininBundle::standard_layout.html.twig */
class __TwigTemplate_e57374ed761182faa9778578aaadeef60c9e4ab60391aabb54e6eb5958bf3139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle::standard_layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cableondaadmin/css/jquery-ui-timepicker-addon.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cableondaadmin/css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cableondaadmin/js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cableondaadmin/js/jquery_admin.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 ";
    }

    public function getTemplateName()
    {
        return "CableondaAdmininBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 188,  593 => 187,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 89,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 134,  386 => 132,  384 => 129,  381 => 128,  376 => 125,  362 => 124,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  322 => 117,  319 => 87,  316 => 86,  314 => 85,  309 => 83,  306 => 82,  303 => 81,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 73,  257 => 72,  254 => 71,  248 => 67,  242 => 66,  239 => 65,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  194 => 54,  191 => 53,  188 => 52,  185 => 51,  182 => 50,  179 => 49,  176 => 48,  174 => 47,  171 => 46,  169 => 45,  165 => 43,  159 => 39,  156 => 38,  152 => 37,  148 => 35,  145 => 34,  140 => 25,  133 => 157,  130 => 156,  128 => 155,  125 => 154,  119 => 151,  116 => 150,  113 => 149,  109 => 147,  107 => 146,  104 => 145,  102 => 81,  99 => 80,  97 => 71,  94 => 70,  92 => 34,  89 => 33,  84 => 31,  79 => 30,  76 => 29,  73 => 28,  71 => 27,  68 => 26,  66 => 25,  61 => 23,  58 => 22,  55 => 21,  49 => 18,  42 => 15,  39 => 14,);
    }
}
