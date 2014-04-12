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
        return array (  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 5,  170 => 55,  165 => 52,  159 => 51,  153 => 49,  150 => 48,  146 => 47,  138 => 46,  135 => 45,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  103 => 34,  97 => 33,  91 => 31,  88 => 30,  84 => 29,  76 => 28,  73 => 27,  67 => 26,  64 => 25,  61 => 24,  58 => 23,  53 => 22,  51 => 21,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 4,);
    }
}
