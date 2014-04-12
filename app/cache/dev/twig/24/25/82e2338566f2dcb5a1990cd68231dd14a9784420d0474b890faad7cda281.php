<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_242582e2338566f2dcb5a1990cd68231dd14a9784420d0474b890faad7cda281 extends Twig_Template
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
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 20
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 21
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
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
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 25
                echo "                <tr>
                    <td colspan=\"3\" style=\"background: none repeat scroll 0 0 #F7F7F7;\"><strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</strong></td>
                </tr>

                ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                    ";
                    if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">
                                ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                        // line 37
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                        ";
                            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                                // line 39
                                echo "                                            <a class=\"btn btn-link\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
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
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                    <li>
                                                        <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
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
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                        <a class=\"btn btn-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
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
        return array (  153 => 62,  124 => 52,  110 => 46,  104 => 18,  76 => 27,  58 => 22,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  20 => 11,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 64,  160 => 44,  137 => 37,  113 => 44,  100 => 41,  90 => 20,  81 => 15,  65 => 26,  129 => 59,  97 => 47,  84 => 16,  34 => 18,  53 => 20,  77 => 36,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 69,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 23,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 61,  143 => 59,  135 => 55,  119 => 42,  102 => 42,  71 => 29,  67 => 19,  63 => 15,  59 => 14,  87 => 25,  28 => 3,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 56,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  21 => 2,  31 => 3,  94 => 39,  89 => 37,  85 => 31,  75 => 30,  68 => 30,  56 => 21,  25 => 12,  38 => 19,  26 => 14,  24 => 11,  19 => 11,  93 => 21,  88 => 6,  78 => 31,  46 => 7,  44 => 17,  27 => 12,  79 => 28,  72 => 10,  69 => 24,  47 => 21,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 37,  96 => 31,  83 => 25,  74 => 26,  66 => 29,  55 => 79,  52 => 20,  50 => 22,  43 => 21,  41 => 20,  35 => 15,  32 => 12,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 45,  112 => 47,  109 => 19,  106 => 44,  103 => 50,  99 => 17,  95 => 22,  92 => 21,  86 => 17,  82 => 33,  80 => 19,  73 => 19,  64 => 28,  60 => 24,  57 => 23,  54 => 26,  51 => 22,  48 => 21,  45 => 8,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
