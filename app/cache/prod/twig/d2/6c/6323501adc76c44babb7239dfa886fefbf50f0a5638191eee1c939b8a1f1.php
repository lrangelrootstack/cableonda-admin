<?php

/* CableondaAdmininBundle::standard_layout.html.twig */
class __TwigTemplate_d26c6323501adc76c44babb7239dfa886fefbf50f0a5638191eee1c939b8a1f1 extends Twig_Template
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
        return array (  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  712 => 198,  699 => 196,  694 => 195,  685 => 192,  680 => 190,  673 => 188,  670 => 187,  665 => 184,  654 => 181,  646 => 179,  643 => 178,  639 => 177,  635 => 176,  625 => 175,  622 => 174,  617 => 173,  612 => 172,  607 => 171,  599 => 170,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 101,  459 => 99,  457 => 89,  454 => 88,  451 => 87,  446 => 143,  444 => 138,  438 => 134,  434 => 132,  432 => 129,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 121,  371 => 120,  367 => 118,  364 => 117,  361 => 87,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 75,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 62,  258 => 61,  249 => 60,  233 => 59,  231 => 58,  228 => 57,  225 => 56,  219 => 55,  215 => 54,  209 => 53,  204 => 52,  201 => 51,  197 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 46,  184 => 45,  180 => 43,  174 => 39,  167 => 38,  162 => 37,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 156,  137 => 155,  134 => 154,  128 => 151,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 81,  107 => 80,  105 => 71,  102 => 70,  100 => 34,  97 => 33,  91 => 31,  85 => 30,  81 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  63 => 23,  60 => 22,  57 => 21,  49 => 18,  42 => 15,  39 => 14,);
    }
}
