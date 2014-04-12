<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_d7b2747962f04719fba97f12ee6f4e23fe1910a9107c3108f62a4809f991f23e extends Twig_Template
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
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if (twig_test_empty($_value_)) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_value_, $this->getAttribute($this->getAttribute($_field_description_, "options"), "format")), "html", null, true);
        } else {
            // line 20
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_value_, "F j, Y"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 20,  36 => 18,  33 => 16,  29 => 15,  26 => 14,);
    }
}
