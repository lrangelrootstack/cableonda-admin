<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_750ffcaf60dddd4ff1ab568c05f709e46f12f03cf15019c402fc1c6cd9676cc5 extends Twig_Template
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
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " form-control")));
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
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " form-control")));
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
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " form-control")));
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
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => (($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : (""))));
        // line 36
        echo "        ";
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        if (isset($context["widget_type"])) { $_widget_type_ = $context["widget_type"]; } else { $_widget_type_ = null; }
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => (($this->getAttribute($_label_attr_, "class") . " ") . ((($_widget_type_ != "")) ? ((((($_multiple_) ? ("checkbox") : ("radio")) . "-") . $_widget_type_)) : ("")))));
        // line 37
        echo "        ";
        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
        if ($_expanded_) {
            // line 38
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (isset($context["widget_type"])) { $_widget_type_ = $context["widget_type"]; } else { $_widget_type_ = null; }
            if (($_widget_type_ != "inline")) {
                // line 43
                echo "                <div class=\"";
                if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
                echo (($_multiple_) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_label_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("class" => (($this->getAttribute($_attr_, "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($_child_, "vars"), "label"), array(), $_translation_domain_), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (isset($context["widget_type"])) { $_widget_type_ = $context["widget_type"]; } else { $_widget_type_ = null; }
            if (($_widget_type_ != "inline")) {
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
        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
        if ($_expanded_) {
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
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (((!($_label_ === false)) && twig_test_empty($_label_))) {
            // line 63
            echo "            ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($_name_));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((($this->getAttribute($_form_, "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["label_render"])) { $_label_render_ = $context["label_render"]; } else { $_label_render_ = null; }
        if (((($this->getAttribute($_form_, "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes"))) && $_label_render_)) {
            // line 70
            echo "            <label class=\"";
            if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
            if ((array_key_exists("inline", $context) && $_inline_)) {
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
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
        }
        if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
        if ($_checked_) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((($this->getAttribute($_form_, "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if (isset($context["label_render"])) { $_label_render_ = $context["label_render"]; } else { $_label_render_ = null; }
            if (isset($context["widget_checkbox_label"])) { $_widget_checkbox_label_ = $context["widget_checkbox_label"]; } else { $_widget_checkbox_label_ = null; }
            if (($_label_render_ && twig_in_filter($_widget_checkbox_label_, array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((($this->getAttribute($_form_, "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "parent"), "vars"), "block_prefixes")))) {
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
        return array (  273 => 84,  268 => 82,  261 => 80,  244 => 75,  241 => 74,  227 => 73,  224 => 72,  211 => 69,  208 => 68,  183 => 60,  178 => 57,  171 => 54,  166 => 53,  160 => 52,  156 => 50,  153 => 49,  146 => 47,  140 => 46,  121 => 45,  114 => 43,  104 => 41,  98 => 39,  90 => 37,  67 => 30,  53 => 25,  87 => 26,  82 => 25,  66 => 22,  35 => 19,  30 => 17,  25 => 12,  41 => 20,  29 => 15,  26 => 14,  106 => 28,  94 => 38,  79 => 29,  64 => 26,  61 => 19,  51 => 23,  47 => 21,  45 => 20,  38 => 17,  33 => 16,  24 => 12,  21 => 11,  37 => 16,  34 => 15,  32 => 18,  27 => 16,  22 => 11,  19 => 11,  969 => 293,  966 => 292,  962 => 286,  952 => 280,  943 => 279,  940 => 278,  933 => 275,  930 => 274,  927 => 273,  924 => 272,  920 => 271,  917 => 270,  910 => 268,  907 => 267,  904 => 266,  897 => 264,  894 => 263,  891 => 262,  884 => 260,  881 => 259,  878 => 258,  871 => 256,  868 => 255,  865 => 254,  862 => 253,  858 => 248,  855 => 247,  852 => 246,  848 => 244,  843 => 241,  834 => 236,  828 => 232,  825 => 231,  821 => 229,  814 => 227,  811 => 226,  806 => 223,  801 => 222,  798 => 221,  793 => 249,  791 => 246,  788 => 245,  785 => 221,  782 => 220,  777 => 287,  775 => 253,  771 => 251,  769 => 220,  766 => 219,  763 => 218,  758 => 289,  756 => 218,  753 => 217,  750 => 216,  744 => 211,  740 => 210,  736 => 208,  730 => 207,  725 => 204,  719 => 203,  703 => 201,  686 => 198,  677 => 196,  674 => 195,  669 => 194,  663 => 193,  661 => 192,  649 => 188,  645 => 186,  641 => 185,  638 => 184,  628 => 182,  621 => 180,  609 => 178,  605 => 177,  602 => 176,  592 => 173,  588 => 172,  580 => 171,  576 => 170,  571 => 169,  568 => 168,  564 => 167,  561 => 166,  555 => 165,  551 => 163,  536 => 154,  530 => 152,  526 => 151,  523 => 150,  519 => 212,  516 => 211,  513 => 166,  511 => 165,  508 => 164,  505 => 150,  502 => 149,  494 => 136,  490 => 135,  482 => 129,  478 => 128,  470 => 122,  467 => 121,  452 => 114,  449 => 113,  425 => 109,  421 => 107,  414 => 105,  404 => 103,  401 => 102,  398 => 101,  394 => 100,  368 => 97,  365 => 96,  358 => 94,  354 => 143,  350 => 141,  348 => 121,  344 => 119,  342 => 94,  331 => 85,  328 => 84,  325 => 83,  311 => 78,  308 => 77,  302 => 75,  297 => 51,  287 => 49,  282 => 48,  275 => 44,  271 => 42,  264 => 41,  255 => 40,  251 => 38,  248 => 37,  243 => 34,  222 => 29,  216 => 25,  213 => 24,  207 => 22,  200 => 65,  198 => 292,  195 => 291,  193 => 63,  188 => 213,  179 => 144,  176 => 83,  169 => 75,  165 => 73,  159 => 71,  145 => 70,  136 => 67,  132 => 65,  124 => 63,  99 => 20,  92 => 58,  89 => 57,  84 => 36,  80 => 35,  78 => 37,  75 => 36,  73 => 29,  70 => 28,  68 => 27,  58 => 21,  56 => 19,  54 => 17,  52 => 17,  50 => 19,  46 => 23,  48 => 15,  44 => 13,  40 => 11,  36 => 18,  31 => 5,  28 => 4,  712 => 198,  699 => 200,  694 => 199,  685 => 192,  680 => 197,  673 => 188,  670 => 187,  665 => 184,  654 => 189,  646 => 179,  643 => 178,  639 => 177,  635 => 183,  625 => 181,  622 => 174,  617 => 179,  612 => 172,  607 => 171,  599 => 174,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 118,  459 => 116,  457 => 89,  454 => 88,  451 => 87,  446 => 112,  444 => 138,  438 => 134,  434 => 132,  432 => 111,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 99,  371 => 98,  367 => 118,  364 => 117,  361 => 95,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 80,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 81,  258 => 79,  249 => 76,  233 => 32,  231 => 58,  228 => 31,  225 => 30,  219 => 55,  215 => 70,  209 => 53,  204 => 66,  201 => 51,  197 => 64,  194 => 49,  191 => 48,  189 => 62,  186 => 61,  184 => 45,  180 => 43,  174 => 55,  167 => 38,  162 => 72,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 68,  137 => 155,  134 => 154,  128 => 64,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 42,  107 => 80,  105 => 62,  102 => 61,  100 => 27,  97 => 33,  91 => 34,  85 => 32,  81 => 29,  77 => 34,  74 => 33,  71 => 26,  69 => 23,  63 => 29,  60 => 28,  57 => 18,  49 => 24,  42 => 13,  39 => 20,);
    }
}
