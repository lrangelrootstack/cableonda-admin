<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_d685dd98c63a2c3e5eeda4757a842f8342bd9b3c748cf6fae9955671bf2f3c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 84,  233 => 82,  230 => 81,  227 => 80,  224 => 79,  217 => 76,  214 => 75,  212 => 74,  189 => 70,  187 => 69,  184 => 68,  180 => 66,  177 => 65,  168 => 62,  157 => 57,  153 => 55,  151 => 54,  146 => 53,  136 => 50,  134 => 49,  129 => 47,  95 => 41,  86 => 38,  83 => 37,  74 => 34,  64 => 30,  90 => 27,  77 => 35,  27 => 16,  25 => 12,  37 => 20,  43 => 19,  35 => 19,  87 => 28,  81 => 26,  67 => 32,  53 => 27,  51 => 25,  45 => 23,  38 => 20,  32 => 18,  30 => 17,  24 => 12,  21 => 11,  34 => 18,  29 => 15,  26 => 14,  22 => 11,  19 => 11,  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  860 => 275,  854 => 272,  851 => 271,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  835 => 265,  833 => 264,  830 => 263,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  780 => 241,  775 => 238,  767 => 233,  761 => 229,  759 => 228,  755 => 226,  749 => 224,  747 => 223,  742 => 220,  739 => 219,  736 => 218,  731 => 246,  729 => 243,  726 => 242,  723 => 218,  720 => 217,  715 => 284,  713 => 250,  709 => 248,  707 => 217,  704 => 216,  701 => 215,  696 => 286,  694 => 215,  691 => 214,  688 => 213,  682 => 208,  678 => 207,  674 => 205,  668 => 204,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  638 => 196,  631 => 195,  625 => 194,  622 => 193,  619 => 192,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  546 => 169,  540 => 168,  537 => 167,  533 => 166,  527 => 164,  524 => 163,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  478 => 163,  476 => 162,  473 => 161,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  448 => 126,  445 => 125,  437 => 119,  434 => 118,  430 => 115,  414 => 109,  400 => 108,  394 => 106,  374 => 99,  371 => 98,  368 => 97,  350 => 96,  347 => 95,  345 => 94,  342 => 93,  339 => 92,  332 => 140,  328 => 138,  326 => 118,  320 => 91,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  246 => 40,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  193 => 294,  186 => 213,  181 => 210,  172 => 141,  167 => 77,  162 => 60,  158 => 73,  155 => 72,  138 => 70,  126 => 65,  123 => 64,  120 => 63,  103 => 43,  100 => 42,  91 => 58,  80 => 36,  78 => 37,  75 => 36,  70 => 28,  63 => 22,  60 => 21,  56 => 28,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 24,  44 => 13,  40 => 11,  36 => 20,  31 => 16,  28 => 4,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 183,  593 => 182,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 113,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 104,  386 => 132,  384 => 102,  381 => 128,  376 => 100,  362 => 124,  353 => 123,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  322 => 116,  319 => 87,  316 => 86,  314 => 85,  309 => 82,  306 => 81,  303 => 80,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 42,  257 => 72,  254 => 41,  248 => 67,  242 => 38,  239 => 37,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 24,  203 => 57,  200 => 73,  197 => 72,  194 => 54,  191 => 289,  188 => 288,  185 => 51,  182 => 50,  179 => 146,  176 => 48,  174 => 64,  171 => 63,  169 => 80,  165 => 61,  159 => 39,  156 => 38,  152 => 71,  148 => 35,  145 => 34,  140 => 52,  133 => 68,  130 => 67,  128 => 155,  125 => 46,  119 => 151,  116 => 150,  113 => 149,  109 => 45,  107 => 146,  104 => 145,  102 => 81,  99 => 30,  97 => 60,  94 => 70,  92 => 34,  89 => 39,  84 => 55,  79 => 30,  76 => 35,  73 => 24,  71 => 33,  68 => 24,  66 => 23,  61 => 29,  58 => 28,  55 => 18,  49 => 21,  42 => 13,  39 => 12,);
    }
}
