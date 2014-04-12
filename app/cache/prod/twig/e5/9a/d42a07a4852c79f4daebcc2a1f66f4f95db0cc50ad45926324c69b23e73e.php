<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_e59ad42a07a4852c79f4daebcc2a1f66f4f95db0cc50ad45926324c69b23e73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "
    <table class=\"table table-condensed sonata-ba-list\">

        ";
        // line 18
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "            ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 20
            echo "            ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ((!$_display_)) {
                    // line 21
                    echo "                ";
                    if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                    $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                    // line 22
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
            if ($_display_) {
                // line 25
                echo "                <tr>
                    <td colspan=\"3\" style=\"background: none repeat scroll 0 0 #F7F7F7;\"><strong>";
                // line 26
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                echo "</strong></td>
                </tr>

                ";
                // line 29
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                    ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if ((($this->getAttribute($_admin_, "hasroute", array(0 => "create"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">
                                ";
                        // line 33
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                        // line 37
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "create"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                        ";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (twig_test_empty($this->getAttribute($_admin_, "subClasses"))) {
                                // line 39
                                echo "                                            <a class=\"btn btn-link\" href=\"";
                                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                <i class=\"fa fa-plus-circle\"></i>
                                                ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                            </a>
                                        ";
                            } else {
                                // line 44
                                echo "                                            <a class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-circle\"></i>
                                                ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                                // line 50
                                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($_admin_, "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                    <li>
                                                        <a href=\"";
                                    // line 52
                                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                                    if (isset($context["subclass"])) { $_subclass_ = $context["subclass"]; } else { $_subclass_ = null; }
                                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "create", 1 => array("subclass" => $_subclass_)), "method"), "html", null, true);
                                    echo "\">";
                                    if (isset($context["subclass"])) { $_subclass_ = $context["subclass"]; } else { $_subclass_ = null; }
                                    echo twig_escape_filter($this->env, $_subclass_, "html", null, true);
                                    echo "</a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                            </ul>
                                        ";
                            }
                            // line 57
                            echo "                                    ";
                        }
                        // line 58
                        echo "                                    ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                        <a class=\"btn btn-link\" href=\"";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                            <i class=\"glyphicon glyphicon-list\"></i>
                                            ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                    ";
                        }
                        // line 64
                        echo "                                </div>
                            </td>
                        </tr>
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  192 => 71,  188 => 69,  182 => 68,  176 => 64,  172 => 62,  170 => 61,  159 => 58,  156 => 57,  152 => 55,  138 => 52,  135 => 51,  130 => 50,  123 => 46,  119 => 44,  115 => 42,  113 => 41,  106 => 39,  102 => 38,  99 => 37,  91 => 33,  87 => 31,  83 => 30,  78 => 29,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  55 => 22,  51 => 21,  43 => 20,  29 => 15,  26 => 14,  185 => 55,  180 => 52,  174 => 51,  167 => 49,  163 => 59,  158 => 47,  149 => 46,  146 => 45,  142 => 43,  136 => 42,  129 => 40,  125 => 47,  120 => 38,  117 => 37,  114 => 36,  110 => 34,  104 => 33,  97 => 31,  93 => 30,  88 => 29,  79 => 28,  76 => 27,  70 => 26,  67 => 25,  64 => 24,  60 => 23,  54 => 22,  52 => 21,  45 => 18,  42 => 17,  39 => 19,  34 => 18,  28 => 14,);
    }
}
