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
        return array (  173 => 71,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  124 => 52,  121 => 51,  117 => 50,  110 => 46,  106 => 44,  102 => 42,  94 => 39,  82 => 33,  71 => 29,  65 => 26,  62 => 25,  57 => 23,  47 => 21,  41 => 20,  38 => 19,  29 => 15,  26 => 14,  895 => 293,  892 => 292,  888 => 286,  879 => 280,  871 => 279,  868 => 278,  862 => 275,  859 => 274,  857 => 273,  854 => 272,  852 => 271,  849 => 270,  843 => 268,  841 => 267,  838 => 266,  832 => 264,  830 => 263,  827 => 262,  821 => 260,  819 => 259,  816 => 258,  810 => 256,  808 => 255,  805 => 254,  802 => 253,  798 => 248,  795 => 247,  792 => 246,  788 => 244,  783 => 241,  775 => 236,  769 => 232,  767 => 231,  763 => 229,  757 => 227,  755 => 226,  750 => 223,  747 => 222,  744 => 221,  739 => 249,  737 => 246,  734 => 245,  731 => 221,  728 => 220,  723 => 287,  721 => 253,  717 => 251,  715 => 220,  712 => 219,  709 => 218,  704 => 289,  702 => 218,  699 => 217,  696 => 216,  690 => 211,  686 => 210,  682 => 208,  676 => 207,  671 => 204,  665 => 203,  653 => 201,  650 => 200,  646 => 199,  639 => 198,  633 => 197,  630 => 196,  627 => 195,  624 => 194,  619 => 193,  617 => 192,  611 => 189,  607 => 188,  603 => 186,  601 => 185,  598 => 184,  595 => 183,  588 => 182,  585 => 181,  582 => 180,  579 => 179,  573 => 178,  570 => 177,  567 => 176,  564 => 174,  557 => 173,  554 => 172,  548 => 171,  545 => 170,  541 => 169,  538 => 168,  535 => 167,  532 => 166,  526 => 165,  522 => 163,  508 => 154,  502 => 152,  499 => 151,  496 => 150,  492 => 212,  489 => 211,  486 => 166,  484 => 165,  481 => 164,  478 => 150,  475 => 149,  467 => 136,  464 => 135,  456 => 129,  453 => 128,  445 => 122,  442 => 121,  438 => 118,  434 => 116,  428 => 114,  425 => 113,  422 => 112,  408 => 111,  402 => 109,  398 => 107,  392 => 105,  384 => 103,  382 => 102,  379 => 101,  376 => 100,  358 => 99,  355 => 98,  353 => 97,  350 => 96,  347 => 95,  344 => 94,  340 => 143,  336 => 141,  334 => 121,  330 => 119,  328 => 94,  317 => 85,  314 => 84,  311 => 83,  303 => 80,  298 => 78,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  260 => 42,  254 => 41,  246 => 40,  242 => 38,  239 => 37,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  206 => 24,  200 => 22,  193 => 297,  191 => 292,  188 => 291,  186 => 216,  181 => 213,  179 => 72,  172 => 144,  169 => 69,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  152 => 71,  133 => 68,  130 => 67,  126 => 65,  123 => 64,  120 => 63,  100 => 41,  89 => 37,  80 => 53,  78 => 31,  75 => 30,  70 => 28,  68 => 24,  63 => 22,  60 => 24,  56 => 19,  54 => 18,  52 => 17,  50 => 22,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  170 => 55,  165 => 52,  159 => 51,  153 => 62,  150 => 48,  146 => 47,  138 => 70,  135 => 55,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 47,  109 => 37,  107 => 36,  103 => 62,  97 => 60,  91 => 38,  88 => 30,  84 => 55,  76 => 28,  73 => 29,  67 => 26,  64 => 25,  61 => 24,  58 => 20,  53 => 22,  51 => 21,  45 => 18,  42 => 12,  39 => 16,  34 => 18,  28 => 4,);
    }
}
