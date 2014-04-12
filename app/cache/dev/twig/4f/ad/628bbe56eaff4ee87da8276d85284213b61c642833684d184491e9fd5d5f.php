<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_4fad628bbe56eaff4ee87da8276d85284213b61c642833684d184491e9fd5d5f extends Twig_Template
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
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
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
        if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
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
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
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
        return array (  12 => 32,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 188,  593 => 187,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 109,  449 => 103,  441 => 101,  429 => 90,  426 => 89,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  406 => 88,  403 => 87,  396 => 138,  390 => 134,  386 => 132,  376 => 125,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  316 => 86,  306 => 82,  303 => 81,  280 => 75,  242 => 66,  231 => 62,  226 => 61,  200 => 56,  194 => 54,  191 => 53,  188 => 52,  152 => 37,  153 => 62,  124 => 52,  110 => 42,  104 => 145,  76 => 29,  58 => 22,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 87,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 74,  271 => 108,  265 => 106,  262 => 105,  260 => 73,  257 => 72,  251 => 101,  248 => 67,  239 => 65,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 55,  174 => 47,  148 => 35,  134 => 56,  127 => 54,  20 => 11,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 58,  202 => 77,  198 => 66,  192 => 64,  185 => 51,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 43,  160 => 44,  137 => 37,  113 => 149,  100 => 40,  90 => 20,  81 => 15,  65 => 26,  129 => 59,  97 => 71,  84 => 31,  34 => 13,  53 => 24,  77 => 13,  23 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 105,  453 => 104,  444 => 102,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 89,  407 => 131,  402 => 130,  398 => 143,  393 => 126,  387 => 122,  384 => 129,  381 => 128,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 124,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 117,  314 => 85,  312 => 98,  309 => 83,  305 => 119,  298 => 78,  294 => 90,  285 => 111,  283 => 76,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 60,  214 => 69,  177 => 54,  169 => 45,  140 => 25,  132 => 51,  128 => 155,  107 => 146,  61 => 23,  273 => 96,  269 => 94,  254 => 71,  243 => 98,  240 => 86,  238 => 85,  235 => 63,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 59,  204 => 78,  179 => 49,  159 => 39,  143 => 59,  135 => 55,  119 => 151,  102 => 81,  71 => 24,  67 => 30,  63 => 22,  59 => 14,  87 => 25,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 46,  166 => 71,  163 => 68,  158 => 62,  156 => 38,  151 => 61,  142 => 58,  138 => 49,  136 => 56,  121 => 51,  117 => 50,  105 => 26,  91 => 38,  62 => 25,  49 => 16,  21 => 2,  31 => 15,  94 => 70,  89 => 30,  85 => 31,  75 => 25,  68 => 26,  56 => 21,  25 => 12,  38 => 19,  26 => 12,  24 => 11,  19 => 11,  93 => 21,  88 => 6,  78 => 34,  46 => 15,  44 => 21,  27 => 12,  79 => 26,  72 => 10,  69 => 31,  47 => 22,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 34,  139 => 57,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 36,  98 => 35,  96 => 31,  83 => 27,  74 => 26,  66 => 23,  55 => 18,  52 => 24,  50 => 23,  43 => 14,  41 => 20,  35 => 17,  32 => 12,  29 => 15,  209 => 82,  203 => 57,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 50,  176 => 48,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 52,  144 => 51,  141 => 48,  133 => 157,  130 => 156,  125 => 154,  122 => 45,  116 => 150,  112 => 47,  109 => 147,  106 => 44,  103 => 50,  99 => 80,  95 => 34,  92 => 34,  86 => 36,  82 => 33,  80 => 14,  73 => 28,  64 => 28,  60 => 24,  57 => 26,  54 => 23,  51 => 22,  48 => 21,  45 => 8,  42 => 15,  39 => 14,  36 => 20,  33 => 13,  30 => 15,);
    }
}
