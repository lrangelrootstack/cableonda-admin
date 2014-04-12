<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_38cc7de6fc199d71ce4c60c99ddc1a698a96d29e8e930e6b3e22836627a15724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('form_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ((!($_label_ === false))) {
            // line 16
            echo "        ";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => ((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " control-label col-sm-2")));
            // line 17
            echo "
        ";
            // line 18
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ((!$_compound_)) {
                // line 19
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 22
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 26
                echo "            ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($_name_));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (isset($context["in_list_checkbox"])) { $_in_list_checkbox_ = $context["in_list_checkbox"]; } else { $_in_list_checkbox_ = null; }
            if (((array_key_exists("in_list_checkbox", $context) && $_in_list_checkbox_) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_attr_);
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
                // line 31
                if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
                echo $_widget_;
                echo "
                <span>
                    ";
                // line 33
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 34
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 36
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
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
                // line 42
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 43
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $_label_, 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "            </label>
        ";
            }
            // line 49
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "        id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"
        ";
        // line 56
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            if (($_attrname_ == "class")) {
                echo "list-unstyled ";
            }
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (!twig_in_filter("class", $_attr_)) {
            echo "class=\"list-unstyled\"";
        }
        // line 58
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "            <li>
                ";
            // line 66
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 67
            echo "                ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "    ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ($_compound_) {
            // line 77
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 78
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 79
                echo "            <li>
                ";
                // line 80
                ob_start();
                // line 81
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 82
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 83
                echo "                ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["form_widget_content"])) { $_form_widget_content_ = $context["form_widget_content"]; } else { $_form_widget_content_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label', array("in_list_checkbox" => true, "widget" => $_form_widget_content_) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </ul>
    ";
        } else {
            // line 88
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 89
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if ((!(null === $_empty_value_))) {
                // line 90
                echo "            <option value=\"\">
                ";
                // line 91
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 92
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 94
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 96
                echo "            </option>
        ";
            }
            // line 98
            echo "        ";
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
                // line 99
                echo "            ";
                if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
                $context["options"] = $_preferred_choices_;
                // line 100
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 101
                if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
                if ((twig_length_filter($this->env, $_choices_) > 0)) {
                    // line 102
                    echo "                <option disabled=\"disabled\">";
                    if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                    echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                    echo "</option>
            ";
                }
                // line 104
                echo "        ";
            }
            // line 105
            echo "        ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            $context["options"] = $_choices_;
            // line 106
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_form_row($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        if (isset($context["sonata_admin_enabled"])) { $_sonata_admin_enabled_ = $context["sonata_admin_enabled"]; } else { $_sonata_admin_enabled_ = null; }
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ((((!array_key_exists("sonata_admin", $context)) || (!$_sonata_admin_enabled_)) || (!$this->getAttribute($_sonata_admin_, "field_description")))) {
            // line 114
            echo "        <div class=\"form-group ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 115
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"col-sm-10 ";
            // line 116
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (($_label_ === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 117
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 118
            echo "                ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 119
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 120
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 123
            echo "            </div>
        </div>
    ";
        } else {
            // line 126
            echo "        <div class=\"form-group";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
            ";
            // line 127
            $this->displayBlock('label', $context, $blocks);
            // line 134
            echo "
            ";
            // line 135
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!($_label_ === false)));
            // line 136
            echo "            <div class=\"col-sm-10 sonata-ba-field sonata-ba-field-";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
            echo "-";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
            echo " ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if (isset($context["has_label"])) { $_has_label_ = $context["has_label"]; } else { $_has_label_ = null; }
            if ((!$_has_label_)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 138
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 139
            echo "
                ";
            // line 140
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 141
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 142
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 145
            echo "
                ";
            // line 146
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if ($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help")) {
                // line 147
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 149
            echo "            </div>
        </div>
    ";
        }
    }

    // line 127
    public function block_label($context, array $blocks = array())
    {
        // line 128
        echo "                ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 129
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 131
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 133
        echo "            ";
    }

    // line 154
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 157
        if (isset($context["allow_delete"])) { $_allow_delete_ = $context["allow_delete"]; } else { $_allow_delete_ = null; }
        if ($_allow_delete_) {
            // line 158
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 160
        echo "        ";
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["child"] = $_prototype_;
            // line 169
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($_prototype_, "vars"), "name"), "class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : (""))));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 172
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        ";
        // line 173
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 174
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        ";
        // line 177
        if (isset($context["allow_add"])) { $_allow_add_ = $context["allow_add"]; } else { $_allow_add_ = null; }
        if ($_allow_add_) {
            // line 178
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 180
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 184
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        ob_start();
        // line 186
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 187
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "

            ";
        // line 189
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 190
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
            ";
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 199
        echo "    ";
        ob_start();
        // line 200
        echo "        <div class=\"form-group";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-";
        if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
        echo twig_escape_filter($this->env, $_key_, "html", null, true);
        echo "\">

            ";
        // line 202
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
        echo "

            <div class=\"col-sm-10 sonata-ba-field sonata-ba-field-";
        // line 204
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
        echo "-";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
        echo " ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 205
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 206
        echo "            </div>

            ";
        // line 208
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 209
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 210
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
            echo "
                </div>
            ";
        }
        // line 213
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  815 => 213,  808 => 210,  805 => 209,  802 => 208,  798 => 206,  794 => 205,  781 => 204,  775 => 202,  760 => 200,  757 => 199,  754 => 198,  745 => 193,  742 => 192,  725 => 190,  707 => 189,  701 => 187,  696 => 186,  693 => 185,  690 => 184,  684 => 180,  680 => 178,  677 => 177,  671 => 176,  654 => 174,  636 => 173,  631 => 172,  626 => 171,  623 => 170,  618 => 169,  614 => 168,  611 => 167,  609 => 166,  606 => 165,  596 => 160,  592 => 158,  589 => 157,  586 => 156,  584 => 155,  581 => 154,  577 => 133,  569 => 131,  561 => 129,  557 => 128,  554 => 127,  547 => 149,  540 => 147,  537 => 146,  534 => 145,  527 => 142,  524 => 141,  521 => 140,  518 => 139,  514 => 138,  494 => 136,  490 => 135,  487 => 134,  485 => 127,  474 => 126,  469 => 123,  462 => 120,  459 => 119,  455 => 118,  451 => 117,  444 => 116,  438 => 115,  430 => 114,  425 => 113,  422 => 112,  412 => 106,  408 => 105,  405 => 104,  398 => 102,  395 => 101,  390 => 100,  386 => 99,  382 => 98,  378 => 96,  368 => 92,  365 => 91,  362 => 90,  359 => 89,  350 => 88,  346 => 86,  326 => 81,  321 => 79,  316 => 78,  311 => 77,  305 => 75,  302 => 74,  296 => 70,  285 => 67,  281 => 66,  278 => 65,  268 => 63,  263 => 61,  252 => 57,  233 => 56,  227 => 55,  221 => 53,  215 => 49,  211 => 47,  203 => 45,  198 => 43,  195 => 42,  176 => 41,  171 => 38,  161 => 34,  158 => 33,  152 => 31,  133 => 30,  117 => 25,  114 => 24,  103 => 21,  100 => 20,  95 => 19,  92 => 18,  89 => 17,  85 => 16,  76 => 13,  69 => 197,  64 => 183,  57 => 154,  47 => 74,  44 => 73,  39 => 60,  37 => 53,  34 => 52,  32 => 13,  29 => 11,  353 => 145,  347 => 143,  337 => 140,  334 => 83,  325 => 135,  319 => 133,  313 => 131,  307 => 76,  301 => 127,  295 => 125,  292 => 124,  279 => 116,  272 => 113,  258 => 58,  250 => 103,  244 => 101,  241 => 100,  237 => 99,  224 => 54,  204 => 87,  200 => 86,  181 => 79,  169 => 76,  165 => 75,  160 => 72,  150 => 68,  143 => 61,  140 => 60,  135 => 59,  130 => 29,  121 => 56,  113 => 52,  111 => 23,  105 => 49,  72 => 198,  62 => 165,  54 => 153,  35 => 16,  373 => 94,  370 => 100,  364 => 98,  358 => 96,  354 => 95,  348 => 93,  344 => 92,  341 => 141,  331 => 82,  327 => 88,  324 => 80,  315 => 85,  310 => 84,  306 => 83,  303 => 82,  297 => 126,  294 => 79,  288 => 121,  283 => 76,  277 => 73,  273 => 64,  269 => 70,  266 => 62,  260 => 67,  254 => 65,  249 => 64,  246 => 63,  243 => 62,  240 => 61,  235 => 56,  232 => 96,  228 => 53,  220 => 50,  216 => 90,  210 => 88,  202 => 44,  197 => 85,  192 => 42,  189 => 82,  182 => 39,  179 => 38,  175 => 77,  166 => 36,  153 => 69,  147 => 67,  144 => 26,  139 => 23,  136 => 22,  127 => 28,  124 => 27,  120 => 26,  118 => 61,  112 => 59,  109 => 58,  102 => 26,  99 => 47,  97 => 22,  94 => 21,  84 => 17,  81 => 15,  78 => 40,  73 => 14,  61 => 12,  58 => 11,  52 => 112,  49 => 111,  45 => 6,  42 => 61,  38 => 17,  30 => 2,  24 => 1,  107 => 22,  104 => 54,  101 => 34,  93 => 45,  87 => 43,  83 => 26,  79 => 14,  75 => 39,  70 => 33,  67 => 184,  59 => 164,  51 => 24,  46 => 21,  43 => 20,  12 => 32,);
    }
}
