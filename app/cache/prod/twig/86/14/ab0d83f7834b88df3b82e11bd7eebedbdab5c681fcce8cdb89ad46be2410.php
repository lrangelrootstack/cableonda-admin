<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8614ab0d83f7834b88df3b82e11bd7eebedbdab5c681fcce8cdb89ad46be2410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  20 => 11,  198 => 72,  192 => 71,  188 => 69,  182 => 68,  176 => 64,  172 => 62,  170 => 61,  159 => 58,  156 => 57,  152 => 55,  138 => 52,  135 => 51,  130 => 50,  123 => 46,  119 => 44,  115 => 42,  113 => 41,  106 => 39,  102 => 38,  99 => 37,  91 => 33,  87 => 31,  83 => 30,  78 => 29,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  55 => 22,  51 => 21,  43 => 20,  29 => 15,  26 => 12,  185 => 55,  180 => 52,  174 => 51,  167 => 49,  163 => 59,  158 => 47,  149 => 46,  146 => 45,  142 => 43,  136 => 42,  129 => 40,  125 => 47,  120 => 38,  117 => 37,  114 => 36,  110 => 34,  104 => 33,  97 => 31,  93 => 30,  88 => 29,  79 => 28,  76 => 27,  70 => 26,  67 => 25,  64 => 24,  60 => 23,  54 => 22,  52 => 21,  45 => 18,  42 => 17,  39 => 19,  34 => 18,  28 => 13,);
    }
}
