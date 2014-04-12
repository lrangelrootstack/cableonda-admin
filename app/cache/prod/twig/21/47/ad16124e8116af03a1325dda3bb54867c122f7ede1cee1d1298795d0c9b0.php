<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_2147ad16124e8116af03a1325dda3bb54867c122f7ede1cee1d1298795d0c9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups")) / (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                // line 26
                echo "                ";
                if ((((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / (isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 56,  203 => 55,  196 => 52,  183 => 46,  177 => 43,  174 => 42,  168 => 41,  160 => 38,  154 => 36,  143 => 33,  136 => 30,  132 => 28,  129 => 27,  118 => 23,  111 => 22,  108 => 21,  105 => 20,  96 => 18,  93 => 17,  90 => 16,  87 => 14,  77 => 12,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  173 => 71,  163 => 68,  157 => 37,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  124 => 25,  121 => 24,  117 => 50,  110 => 46,  106 => 44,  102 => 19,  94 => 39,  82 => 33,  71 => 11,  65 => 26,  62 => 25,  57 => 23,  47 => 21,  41 => 20,  38 => 19,  29 => 3,  26 => 2,  895 => 293,  892 => 292,  888 => 286,  879 => 280,  871 => 279,  868 => 278,  862 => 275,  859 => 274,  857 => 273,  854 => 272,  852 => 271,  849 => 270,  843 => 268,  841 => 267,  838 => 266,  832 => 264,  830 => 263,  827 => 262,  821 => 260,  819 => 259,  816 => 258,  810 => 256,  808 => 255,  805 => 254,  802 => 253,  798 => 248,  795 => 247,  792 => 246,  788 => 244,  783 => 241,  775 => 236,  769 => 232,  767 => 231,  763 => 229,  757 => 227,  755 => 226,  750 => 223,  747 => 222,  744 => 221,  739 => 249,  737 => 246,  734 => 245,  731 => 221,  728 => 220,  723 => 287,  721 => 253,  717 => 251,  715 => 220,  712 => 219,  709 => 218,  704 => 289,  702 => 218,  699 => 217,  696 => 216,  690 => 211,  686 => 210,  682 => 208,  676 => 207,  671 => 204,  665 => 203,  653 => 201,  650 => 200,  646 => 199,  639 => 198,  633 => 197,  630 => 196,  627 => 195,  624 => 194,  619 => 193,  617 => 192,  611 => 189,  607 => 188,  603 => 186,  601 => 185,  598 => 184,  595 => 183,  588 => 182,  585 => 181,  582 => 180,  579 => 179,  573 => 178,  570 => 177,  567 => 176,  564 => 174,  557 => 173,  554 => 172,  548 => 171,  545 => 170,  541 => 169,  538 => 168,  535 => 167,  532 => 166,  526 => 165,  522 => 163,  508 => 154,  502 => 152,  499 => 151,  496 => 150,  492 => 212,  489 => 211,  486 => 166,  484 => 165,  481 => 164,  478 => 150,  475 => 149,  467 => 136,  464 => 135,  456 => 129,  453 => 128,  445 => 122,  442 => 121,  438 => 118,  434 => 116,  428 => 114,  425 => 113,  422 => 112,  408 => 111,  402 => 109,  398 => 107,  392 => 105,  384 => 103,  382 => 102,  379 => 101,  376 => 100,  358 => 99,  355 => 98,  353 => 97,  350 => 96,  347 => 95,  344 => 94,  340 => 143,  336 => 141,  334 => 121,  330 => 119,  328 => 94,  317 => 85,  314 => 84,  311 => 83,  303 => 80,  298 => 78,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  260 => 42,  254 => 41,  246 => 40,  242 => 38,  239 => 37,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  206 => 24,  200 => 54,  193 => 51,  191 => 292,  188 => 48,  186 => 47,  181 => 213,  179 => 44,  172 => 144,  169 => 69,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  152 => 71,  133 => 68,  130 => 67,  126 => 26,  123 => 64,  120 => 63,  100 => 41,  89 => 37,  80 => 13,  78 => 31,  75 => 30,  70 => 28,  68 => 10,  63 => 22,  60 => 24,  56 => 19,  54 => 18,  52 => 17,  50 => 22,  46 => 14,  48 => 8,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  170 => 55,  165 => 52,  159 => 51,  153 => 62,  150 => 35,  146 => 34,  138 => 70,  135 => 55,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 47,  109 => 37,  107 => 36,  103 => 62,  97 => 60,  91 => 38,  88 => 30,  84 => 55,  76 => 28,  73 => 29,  67 => 26,  64 => 25,  61 => 24,  58 => 20,  53 => 22,  51 => 9,  45 => 18,  42 => 7,  39 => 16,  34 => 18,  28 => 4,);
    }
}
