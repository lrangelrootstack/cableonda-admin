<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_587424cbdd7bc011fa26f58476339029d59c18da25c1b7def114fff7ca37609e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => $_admin_pool_)));
        echo "

    <div class=\"row\">
        ";
        // line 21
        $context["has_center"] = false;
        // line 22
        echo "        ";
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blocks_);
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 23
            echo "            ";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (($this->getAttribute($_block_, "position") == "center")) {
                // line 24
                echo "                ";
                $context["has_center"] = true;
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div class=\"";
        // line 28
        if (isset($context["has_center"])) { $_has_center_ = $context["has_center"]; } else { $_has_center_ = null; }
        if ($_has_center_) {
            echo "col-md-3";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 29
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blocks_);
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 30
            echo "                ";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (($this->getAttribute($_block_, "position") == "left")) {
                // line 31
                echo "                    ";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($_block_, "type"), "settings" => $this->getAttribute($_block_, "settings"))));
                echo "
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>

        ";
        // line 36
        if (isset($context["has_center"])) { $_has_center_ = $context["has_center"]; } else { $_has_center_ = null; }
        if ($_has_center_) {
            // line 37
            echo "            <div class=\"col-md-4\">
                ";
            // line 38
            if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blocks_);
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 39
                echo "                    ";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if (($this->getAttribute($_block_, "position") == "center")) {
                    // line 40
                    echo "                        ";
                    if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($_block_, "type"), "settings" => $this->getAttribute($_block_, "settings"))));
                    echo "
                    ";
                }
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "
        <div class=\"";
        // line 46
        if (isset($context["has_center"])) { $_has_center_ = $context["has_center"]; } else { $_has_center_ = null; }
        if ($_has_center_) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 47
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blocks_);
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "                ";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (($this->getAttribute($_block_, "position") == "right")) {
                // line 49
                echo "                    ";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($_block_, "type"), "settings" => $this->getAttribute($_block_, "settings"))));
                echo "
                ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
    </div>

    ";
        // line 55
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => $_admin_pool_)));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 55,  180 => 52,  174 => 51,  167 => 49,  163 => 48,  158 => 47,  149 => 46,  146 => 45,  142 => 43,  136 => 42,  129 => 40,  125 => 39,  120 => 38,  117 => 37,  114 => 36,  110 => 34,  104 => 33,  97 => 31,  93 => 30,  88 => 29,  79 => 28,  76 => 27,  70 => 26,  67 => 25,  64 => 24,  60 => 23,  54 => 22,  52 => 21,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
