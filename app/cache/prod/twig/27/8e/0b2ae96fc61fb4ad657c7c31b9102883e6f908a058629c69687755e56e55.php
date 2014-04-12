<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_278e0b2ae96fc61fb4ad657c7c31b9102883e6f908a058629c69687755e56e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => $_admin_, "object" => $_object_)));
        echo "

    ";
        // line 4
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        $context["url"] = (((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        if ((!$this->getAttribute($_admin_, "hasRoute", array(0 => $_url_), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 12
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => $_url_, 1 => array("id" => $this->getAttribute($_admin_, "id", array(0 => $_object_), "method"), "uniqid" => $this->getAttribute($_admin_, "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 14
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            if ((!$this->getAttribute($_admin_pool_, "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 15
            echo "              >
            ";
            // line 16
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars"), "errors")) > 0)) {
                // line 17
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 18
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                </div>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 54
            echo "
            ";
            // line 55
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 58
            echo "
            ";
            // line 59
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "

            ";
            // line 61
            $this->displayBlock('formactions', $context, $blocks);
            // line 103
            echo "        </form>
    ";
        }
        // line 105
        echo "
    ";
        // line 106
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => $_admin_, "object" => $_object_)));
        echo "

";
    }

    // line 22
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 23
        echo "                <div class=\"row\">
            ";
    }

    // line 26
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "formgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 28
            echo "                    <div class=\"col-md-";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_admin_, "formgroups")) > 1)) {
                echo "6";
            } else {
                echo "12";
            }
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 32
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $_name_, 1 => array(), 2 => $this->getAttribute($_form_group_, "translation_domain")), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 36
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 38
            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
            if (($this->getAttribute($_form_group_, "description") != false)) {
                // line 39
                echo "                                            <p>";
                if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                echo $this->getAttribute($_form_group_, "description");
                echo "</p>
                                        ";
            }
            // line 41
            echo "
                                        ";
            // line 42
            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_group_, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 43
                echo "                                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                if ($this->getAttribute($this->getAttribute($_admin_, "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                    // line 44
                    echo "                                                ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $_field_name_, array(), "array"), 'row');
                    echo "
                                            ";
                }
                // line 46
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                    </div>
                                </div>
                            ";
            // line 50
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            ";
    }

    // line 55
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 56
        echo "                </div>
            ";
    }

    // line 61
    public function block_formactions($context, array $blocks = array())
    {
        // line 62
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 63
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "request"), "isxmlhttprequest")) {
            // line 64
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
                // line 65
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 67
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 69
            echo "                    ";
        } else {
            // line 70
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "supportsPreviewMode")) {
                // line 71
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 76
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 79
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method")) {
                    // line 80
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 82
                echo "
                            ";
                // line 83
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                if (($this->getAttribute($_admin_, "hasroute", array(0 => "delete"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "DELETE", 1 => $_object_), "method"))) {
                    // line 84
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 85
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "delete", 1 => $_object_), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 87
                echo "
                            ";
                // line 88
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                if ((($this->getAttribute($_admin_, "isAclEnabled", array(), "method") && $this->getAttribute($_admin_, "hasroute", array(0 => "acl"), "method")) && $this->getAttribute($_admin_, "isGranted", array(0 => "MASTER", 1 => $_object_), "method"))) {
                    // line 89
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "acl", 1 => $_object_), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 91
                echo "                        ";
            } else {
                // line 92
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "edit"), "method")) {
                    // line 93
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 95
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method")) {
                    // line 96
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 98
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 100
            echo "                    ";
        }
        // line 101
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  373 => 101,  370 => 100,  364 => 98,  358 => 96,  354 => 95,  348 => 93,  344 => 92,  341 => 91,  331 => 89,  327 => 88,  324 => 87,  315 => 85,  310 => 84,  306 => 83,  303 => 82,  297 => 80,  294 => 79,  288 => 77,  283 => 76,  277 => 73,  273 => 71,  269 => 70,  266 => 69,  260 => 67,  254 => 65,  249 => 64,  246 => 63,  243 => 62,  240 => 61,  235 => 56,  232 => 55,  228 => 53,  220 => 50,  216 => 47,  210 => 46,  202 => 44,  197 => 43,  192 => 42,  189 => 41,  182 => 39,  179 => 38,  175 => 36,  166 => 32,  153 => 28,  147 => 27,  144 => 26,  139 => 23,  136 => 22,  127 => 106,  124 => 105,  120 => 103,  118 => 61,  112 => 59,  109 => 58,  102 => 26,  99 => 25,  97 => 22,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  73 => 14,  61 => 12,  58 => 11,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  38 => 4,  30 => 2,  24 => 1,  107 => 55,  104 => 54,  101 => 34,  93 => 30,  87 => 18,  83 => 26,  79 => 25,  75 => 24,  70 => 23,  67 => 22,  59 => 18,  51 => 16,  46 => 15,  43 => 14,  12 => 32,);
    }
}
