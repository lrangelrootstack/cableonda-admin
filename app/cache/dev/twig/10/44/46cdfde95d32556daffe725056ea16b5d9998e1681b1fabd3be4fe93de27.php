<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_104446cdfde95d32556daffe725056ea16b5d9998e1681b1fabd3be4fe93de27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"glyphicon glyphicon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : $this->getContext($context, "view_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show"), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  114 => 50,  118 => 49,  150 => 56,  70 => 29,  324 => 100,  318 => 98,  300 => 92,  297 => 91,  287 => 88,  284 => 87,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 76,  244 => 73,  237 => 70,  234 => 69,  222 => 65,  181 => 46,  12 => 32,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 188,  593 => 187,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 109,  449 => 103,  441 => 101,  429 => 90,  426 => 89,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  406 => 88,  403 => 87,  396 => 138,  390 => 134,  386 => 132,  376 => 125,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  316 => 86,  306 => 82,  303 => 93,  280 => 75,  242 => 66,  231 => 62,  226 => 61,  200 => 56,  194 => 54,  191 => 50,  188 => 52,  152 => 61,  153 => 36,  124 => 47,  110 => 41,  104 => 43,  76 => 35,  58 => 25,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 101,  323 => 125,  319 => 87,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 89,  281 => 110,  277 => 85,  271 => 108,  265 => 106,  262 => 105,  260 => 73,  257 => 72,  251 => 101,  248 => 67,  239 => 65,  228 => 67,  225 => 87,  213 => 82,  211 => 61,  197 => 55,  174 => 47,  148 => 35,  134 => 56,  127 => 26,  20 => 11,  270 => 83,  253 => 77,  233 => 81,  212 => 74,  210 => 73,  206 => 56,  202 => 77,  198 => 66,  192 => 64,  185 => 51,  180 => 56,  175 => 44,  172 => 43,  167 => 48,  165 => 41,  160 => 57,  137 => 37,  113 => 42,  100 => 41,  90 => 36,  81 => 20,  65 => 29,  129 => 56,  97 => 41,  84 => 34,  34 => 17,  53 => 27,  77 => 34,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 105,  453 => 104,  444 => 102,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 89,  407 => 131,  402 => 130,  398 => 143,  393 => 126,  387 => 122,  384 => 129,  381 => 128,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 124,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 117,  314 => 85,  312 => 96,  309 => 95,  305 => 119,  298 => 78,  294 => 90,  285 => 111,  283 => 76,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 60,  214 => 62,  177 => 54,  169 => 45,  140 => 51,  132 => 57,  128 => 47,  107 => 48,  61 => 29,  273 => 96,  269 => 94,  254 => 71,  243 => 98,  240 => 71,  238 => 85,  235 => 63,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 64,  217 => 63,  208 => 59,  204 => 78,  179 => 49,  159 => 39,  143 => 59,  135 => 28,  119 => 44,  102 => 43,  71 => 32,  67 => 32,  63 => 31,  59 => 26,  87 => 28,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 46,  166 => 71,  163 => 58,  158 => 62,  156 => 38,  151 => 61,  142 => 58,  138 => 49,  136 => 56,  121 => 52,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  21 => 11,  31 => 16,  94 => 40,  89 => 42,  85 => 36,  75 => 31,  68 => 24,  56 => 27,  25 => 13,  38 => 19,  26 => 14,  24 => 14,  19 => 11,  93 => 39,  88 => 38,  78 => 36,  46 => 22,  44 => 19,  27 => 14,  79 => 34,  72 => 30,  69 => 33,  47 => 19,  40 => 20,  37 => 17,  22 => 12,  246 => 99,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 43,  108 => 45,  101 => 46,  98 => 36,  96 => 44,  83 => 36,  74 => 33,  66 => 32,  55 => 21,  52 => 24,  50 => 21,  43 => 21,  41 => 20,  35 => 16,  32 => 14,  29 => 15,  209 => 82,  203 => 55,  199 => 53,  193 => 73,  189 => 71,  187 => 47,  182 => 50,  176 => 48,  173 => 71,  168 => 42,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 32,  144 => 51,  141 => 48,  133 => 49,  130 => 27,  125 => 46,  122 => 45,  116 => 43,  112 => 106,  109 => 43,  106 => 43,  103 => 38,  99 => 45,  95 => 35,  92 => 43,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 21,  45 => 21,  42 => 20,  39 => 17,  36 => 16,  33 => 16,  30 => 13,);
    }
}
