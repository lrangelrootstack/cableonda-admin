<?php

/* SonataAdminBundle:CRUD:show_url.html.twig */
class __TwigTemplate_5d990fb2d2f8a9e69e6163a2cff0ccd66bdab42749755365569c03eff71bdbb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "url");
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters"), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "identifier_parameter_name") => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "normalizedidentifier", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute"), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol"), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = strtr((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url_address"]) ? $context["url_address"] : $this->getContext($context, "url_address")), "html", null, true);
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
                // line 47
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            } else {
                // line 49
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            }
            // line 51
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  150 => 56,  70 => 27,  324 => 100,  318 => 98,  300 => 92,  297 => 91,  287 => 88,  284 => 87,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  250 => 76,  244 => 73,  237 => 70,  234 => 69,  222 => 65,  181 => 46,  12 => 32,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 188,  593 => 187,  588 => 184,  579 => 181,  574 => 179,  571 => 178,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 172,  545 => 171,  539 => 170,  530 => 166,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 131,  487 => 130,  484 => 129,  479 => 112,  468 => 110,  464 => 109,  449 => 103,  441 => 101,  429 => 90,  426 => 89,  420 => 115,  417 => 114,  415 => 101,  411 => 99,  406 => 88,  403 => 87,  396 => 138,  390 => 134,  386 => 132,  376 => 125,  353 => 123,  336 => 122,  331 => 121,  329 => 120,  325 => 118,  316 => 86,  306 => 82,  303 => 93,  280 => 75,  242 => 66,  231 => 62,  226 => 61,  200 => 56,  194 => 54,  191 => 50,  188 => 52,  152 => 61,  153 => 36,  124 => 47,  110 => 45,  104 => 43,  76 => 33,  58 => 22,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 101,  323 => 125,  319 => 87,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 89,  281 => 110,  277 => 85,  271 => 108,  265 => 106,  262 => 105,  260 => 73,  257 => 72,  251 => 101,  248 => 67,  239 => 65,  228 => 67,  225 => 87,  213 => 82,  211 => 61,  197 => 55,  174 => 47,  148 => 35,  134 => 56,  127 => 26,  20 => 11,  270 => 83,  253 => 77,  233 => 81,  212 => 74,  210 => 73,  206 => 56,  202 => 77,  198 => 66,  192 => 64,  185 => 51,  180 => 56,  175 => 44,  172 => 43,  167 => 48,  165 => 41,  160 => 57,  137 => 37,  113 => 46,  100 => 41,  90 => 38,  81 => 33,  65 => 29,  129 => 59,  97 => 71,  84 => 31,  34 => 18,  53 => 24,  77 => 31,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 105,  453 => 104,  444 => 102,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 89,  407 => 131,  402 => 130,  398 => 143,  393 => 126,  387 => 122,  384 => 129,  381 => 128,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 124,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 117,  314 => 85,  312 => 96,  309 => 95,  305 => 119,  298 => 78,  294 => 90,  285 => 111,  283 => 76,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 60,  214 => 62,  177 => 54,  169 => 45,  140 => 51,  132 => 51,  128 => 155,  107 => 44,  61 => 23,  273 => 96,  269 => 94,  254 => 71,  243 => 98,  240 => 71,  238 => 85,  235 => 63,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 64,  217 => 63,  208 => 59,  204 => 78,  179 => 49,  159 => 39,  143 => 59,  135 => 28,  119 => 22,  102 => 81,  71 => 31,  67 => 26,  63 => 26,  59 => 27,  87 => 36,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 46,  166 => 71,  163 => 58,  158 => 62,  156 => 38,  151 => 61,  142 => 58,  138 => 49,  136 => 56,  121 => 51,  117 => 50,  105 => 103,  91 => 38,  62 => 28,  49 => 16,  21 => 11,  31 => 15,  94 => 70,  89 => 30,  85 => 36,  75 => 30,  68 => 30,  56 => 25,  25 => 12,  38 => 5,  26 => 14,  24 => 12,  19 => 11,  93 => 39,  88 => 37,  78 => 34,  46 => 8,  44 => 18,  27 => 12,  79 => 34,  72 => 29,  69 => 16,  47 => 25,  40 => 19,  37 => 20,  22 => 12,  246 => 99,  157 => 56,  145 => 54,  139 => 57,  131 => 55,  123 => 48,  120 => 47,  115 => 47,  111 => 30,  108 => 28,  101 => 42,  98 => 40,  96 => 40,  83 => 22,  74 => 18,  66 => 15,  55 => 12,  52 => 20,  50 => 21,  43 => 20,  41 => 23,  35 => 20,  32 => 12,  29 => 15,  209 => 82,  203 => 55,  199 => 53,  193 => 73,  189 => 71,  187 => 47,  182 => 50,  176 => 48,  173 => 71,  168 => 42,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 32,  144 => 51,  141 => 48,  133 => 49,  130 => 27,  125 => 154,  122 => 23,  116 => 45,  112 => 106,  109 => 43,  106 => 43,  103 => 61,  99 => 41,  95 => 39,  92 => 34,  86 => 36,  82 => 35,  80 => 21,  73 => 32,  64 => 28,  60 => 24,  57 => 26,  54 => 23,  51 => 23,  48 => 22,  45 => 21,  42 => 15,  39 => 20,  36 => 17,  33 => 16,  30 => 2,);
    }
}
