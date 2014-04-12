<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1ca6e13cb3c43b1f43165a36874392e63d5881cdfaeae328da8cd1d3d5c47617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
            // line 16
            echo "        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($_admin_, "toString", array(0 => $_object_), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 24
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 25
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 26
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 27
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock("parentForm", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  104 => 35,  101 => 34,  93 => 30,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  70 => 23,  67 => 22,  59 => 18,  51 => 16,  46 => 15,  43 => 14,  12 => 32,);
    }
}
