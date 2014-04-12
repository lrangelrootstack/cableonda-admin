<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_247b25fa00b6ec666b9777ec21ab38b5339c5dece5fb8abc402bbd312fb7d4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 24
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
        <title>
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 57
        if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
        if ((!twig_test_empty($__title_))) {
            // line 58
            echo "                ";
            if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
            echo $__title_;
            echo "
            ";
        } else {
            // line 60
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 61
                echo "                    -
                    ";
                // line 62
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 63
                    echo "                        ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "first"))) {
                        // line 64
                        echo "                            ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if (($this->getAttribute($_loop_, "index") != 2)) {
                            // line 65
                            echo "                                &gt;
                            ";
                        }
                        // line 67
                        echo "
                            ";
                        // line 68
                        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 70
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                ";
            }
            // line 72
            echo "            ";
        }
        // line 73
        echo "        </title>
    </head>
    <body ";
        // line 75
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        <header class=\"header\">
            ";
        // line 77
        $this->displayBlock('logo', $context, $blocks);
        // line 83
        echo "            ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 144
        echo "        </header>

        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
            <aside class=\"left-side sidebar-offcanvas\">
                <section class=\"sidebar\">
                    ";
        // line 149
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 213
        echo "                </section>
            </aside>

            ";
        // line 216
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 291
        echo "
            ";
        // line 292
        $this->displayBlock('footer', $context, $blocks);
        // line 297
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 24
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 25
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "
            ";
        // line 31
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 32
            echo "                <link rel=\"stylesheet\" href=\"";
            if (isset($context["css"])) { $_css_ = $context["css"]; } else { $_css_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_css_), "html", null, true);
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 40
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 41
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 42
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 44
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 48
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "javascripts"));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 49
            echo "                <script src=\"";
            if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_js_), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        ";
    }

    // line 75
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 77
    public function block_logo($context, array $blocks = array())
    {
        // line 78
        echo "                <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 80
        echo "                    ";
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "
                </a>
            ";
    }

    // line 83
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 84
        echo "                ";
        if (array_key_exists("admin_pool", $context)) {
            // line 85
            echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
            // line 94
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 119
            echo "                        </div>

                        ";
            // line 121
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 141
            echo "                    </nav>
                ";
        }
        // line 143
        echo "            ";
    }

    // line 94
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 95
        echo "                                ";
        if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
        if (((!twig_test_empty($__breadcrumb_)) || array_key_exists("action", $context))) {
            // line 96
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        ";
            // line 97
            if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
            if (twig_test_empty($__breadcrumb_)) {
                // line 98
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 99
                    echo "                                                ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 100
                        echo "                                                    ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if ((!$this->getAttribute($_loop_, "last"))) {
                            // line 101
                            echo "                                                        <li>
                                                            ";
                            // line 102
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            if ((!twig_test_empty($this->getAttribute($_menu_, "uri")))) {
                                // line 103
                                echo "                                                                <a href=\"";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "uri"), "html", null, true);
                                echo "\">";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo $this->getAttribute($_menu_, "label");
                                echo "</a>
                                                            ";
                            } else {
                                // line 105
                                echo "                                                                ";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 107
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 109
                            echo "                                                        <li class=\"active\"><span>";
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                            echo "</span></li>
                                                    ";
                        }
                        // line 111
                        echo "                                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "                                            ";
                }
                // line 113
                echo "                                        ";
            } else {
                // line 114
                echo "                                            ";
                if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
                echo $__breadcrumb_;
                echo "
                                        ";
            }
            // line 116
            echo "                                    </ol>
                                ";
        }
        // line 118
        echo "                            ";
    }

    // line 121
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 122
        echo "                            <div class=\"navbar-right\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 128
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_admin_pool_, "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 129
        echo "                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            ";
        // line 135
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_admin_pool_, "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 136
        echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        ";
    }

    // line 149
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 150
        echo "                        ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 164
        echo "
                        ";
        // line 165
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 166
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 211
        echo "                        ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 212
        echo "                    ";
    }

    // line 150
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 151
        echo "                            ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 152
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
            // line 154
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            ";
        }
        // line 163
        echo "                        ";
    }

    // line 165
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 166
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 167
        echo "                            ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 168
            echo "                                <ul class=\"sidebar-menu\">
                                    ";
            // line 169
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 170
                echo "                                        ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 171
                echo "                                        ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                    if ((!$_display_)) {
                        // line 172
                        echo "                                            ";
                        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                        $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                        // line 173
                        echo "                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "
                                        ";
                // line 176
                echo "                                        ";
                $context["item_count"] = 0;
                // line 177
                echo "                                        ";
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ($_display_) {
                    // line 178
                    echo "                                            ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                        if (($_item_count_ == 0)) {
                            // line 179
                            echo "                                                ";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                                // line 180
                                echo "                                                    ";
                                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                                $context["item_count"] = ($_item_count_ + 1);
                                // line 181
                                echo "                                                ";
                            }
                            // line 182
                            echo "                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                                        ";
                }
                // line 184
                echo "
                                        ";
                // line 185
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                if (($_display_ && ($_item_count_ > 0))) {
                    // line 186
                    echo "                                            <li class=\"treeview\">
                                                <a href=\"#\">
                                                    ";
                    // line 188
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->getAttribute($_group_, "icon");
                    echo "
                                                    <span>";
                    // line 189
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                    echo "</span>
                                                    <i class=\"fa pull-right fa-angle-left\"></i>
                                                </a>
                                                ";
                    // line 192
                    $context["active"] = false;
                    // line 193
                    echo "                                                ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 194
                        echo "                                                    ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if ((($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($_admin_, "code")))) {
                            // line 195
                            echo "                                                        ";
                            $context["active"] = true;
                            // line 196
                            echo "                                                    ";
                        }
                        // line 197
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                                                <ul class=\"treeview-menu";
                    if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
                    if ($_active_) {
                        echo " active";
                    }
                    echo "\">
                                                    ";
                    // line 199
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 200
                        echo "                                                        ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                            // line 201
                            echo "                                                            <li";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($_admin_, "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                        ";
                        }
                        // line 203
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo "                                                </ul>
                                            </li>
                                        ";
                }
                // line 207
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                                </ul>
                            ";
        }
        // line 210
        echo "                        ";
    }

    // line 211
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 216
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 217
        echo "                <aside class=\"right-side\">
                    ";
        // line 218
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 289
        echo "                </aside>
            ";
    }

    // line 218
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 219
        echo "                        <section class=\"content-header\">
                            ";
        // line 220
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 251
        echo "                        </section>
                        <section class=\"content\">
                            ";
        // line 253
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 287
        echo "                        </section>
                    ";
    }

    // line 220
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 221
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 245
        echo "
                                ";
        // line 246
        $this->displayBlock('notice', $context, $blocks);
        // line 249
        echo "
                            ";
    }

    // line 221
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 222
        echo "                                    ";
        if (isset($context["_tab_menu"])) { $__tab_menu_ = $context["_tab_menu"]; } else { $__tab_menu_ = null; }
        if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
        if (((!twig_test_empty($__tab_menu_)) || (!twig_test_empty($__actions_)))) {
            // line 223
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 226
            if (isset($context["_tab_menu"])) { $__tab_menu_ = $context["_tab_menu"]; } else { $__tab_menu_ = null; }
            if ((!twig_test_empty($__tab_menu_))) {
                // line 227
                echo "                                                        ";
                if (isset($context["_tab_menu"])) { $__tab_menu_ = $context["_tab_menu"]; } else { $__tab_menu_ = null; }
                echo $__tab_menu_;
                echo "
                                                    ";
            }
            // line 229
            echo "                                                </div>

                                                ";
            // line 231
            if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
            if ((!twig_test_empty($__actions_))) {
                // line 232
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 236
                if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
                echo $__actions_;
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 241
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 244
        echo "                                ";
    }

    // line 246
    public function block_notice($context, array $blocks = array())
    {
        // line 247
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 248
        echo "                                ";
    }

    // line 253
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 254
        echo "
                                ";
        // line 255
        if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
        if ((!twig_test_empty($__preview_))) {
            // line 256
            echo "                                    <div class=\"sonata-ba-preview\">";
            if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
            echo $__preview_;
            echo "</div>
                                ";
        }
        // line 258
        echo "
                                ";
        // line 259
        if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
        if ((!twig_test_empty($__content_))) {
            // line 260
            echo "                                    <div class=\"sonata-ba-content\">";
            if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
            echo $__content_;
            echo "</div>
                                ";
        }
        // line 262
        echo "
                                ";
        // line 263
        if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
        if ((!twig_test_empty($__show_))) {
            // line 264
            echo "                                    <div class=\"sonata-ba-show\">";
            if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
            echo $__show_;
            echo "</div>
                                ";
        }
        // line 266
        echo "
                                ";
        // line 267
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if ((!twig_test_empty($__form_))) {
            // line 268
            echo "                                    <div class=\"sonata-ba-form\">";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            echo $__form_;
            echo "</div>
                                ";
        }
        // line 270
        echo "
                                ";
        // line 271
        if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
        if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
        if (((!twig_test_empty($__list_table_)) || (!twig_test_empty($__list_filters_)))) {
            // line 272
            echo "                                    <div class=\"row\">
                                        ";
            // line 273
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            if (trim($__list_filters_)) {
                // line 274
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 275
                if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
                echo $__list_filters_;
                echo "
                                            </div>
                                        ";
            }
            // line 278
            echo "
                                        <div class=\"sonata-ba-list ";
            // line 279
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            if (trim($__list_filters_)) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 280
            if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
            echo $__list_table_;
            echo "
                                        </div>

                                        
                                    </div>
                                ";
        }
        // line 286
        echo "                            ";
    }

    // line 292
    public function block_footer($context, array $blocks = array())
    {
        // line 293
        echo "                <footer>
                    <p class=\"text-right\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\">Powered by the Sonata Project</a></p>
                </footer>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 293,  966 => 292,  962 => 286,  952 => 280,  943 => 279,  940 => 278,  933 => 275,  930 => 274,  927 => 273,  924 => 272,  920 => 271,  917 => 270,  910 => 268,  907 => 267,  904 => 266,  897 => 264,  894 => 263,  891 => 262,  884 => 260,  881 => 259,  878 => 258,  871 => 256,  868 => 255,  865 => 254,  862 => 253,  858 => 248,  855 => 247,  852 => 246,  848 => 244,  843 => 241,  834 => 236,  828 => 232,  825 => 231,  821 => 229,  814 => 227,  811 => 226,  806 => 223,  801 => 222,  798 => 221,  793 => 249,  791 => 246,  788 => 245,  785 => 221,  782 => 220,  777 => 287,  775 => 253,  771 => 251,  769 => 220,  766 => 219,  763 => 218,  758 => 289,  756 => 218,  753 => 217,  750 => 216,  744 => 211,  740 => 210,  736 => 208,  730 => 207,  725 => 204,  719 => 203,  703 => 201,  686 => 198,  677 => 196,  674 => 195,  669 => 194,  663 => 193,  661 => 192,  649 => 188,  645 => 186,  641 => 185,  638 => 184,  628 => 182,  621 => 180,  609 => 178,  605 => 177,  602 => 176,  592 => 173,  588 => 172,  580 => 171,  576 => 170,  571 => 169,  568 => 168,  564 => 167,  561 => 166,  555 => 165,  551 => 163,  536 => 154,  530 => 152,  526 => 151,  523 => 150,  519 => 212,  516 => 211,  513 => 166,  511 => 165,  508 => 164,  505 => 150,  502 => 149,  494 => 136,  490 => 135,  482 => 129,  478 => 128,  470 => 122,  467 => 121,  452 => 114,  449 => 113,  425 => 109,  421 => 107,  414 => 105,  404 => 103,  401 => 102,  398 => 101,  394 => 100,  368 => 97,  365 => 96,  358 => 94,  354 => 143,  350 => 141,  348 => 121,  344 => 119,  342 => 94,  331 => 85,  328 => 84,  325 => 83,  311 => 78,  308 => 77,  302 => 75,  297 => 51,  287 => 49,  282 => 48,  275 => 44,  271 => 42,  264 => 41,  255 => 40,  251 => 38,  248 => 37,  243 => 34,  222 => 29,  216 => 25,  213 => 24,  207 => 22,  200 => 297,  198 => 292,  195 => 291,  193 => 216,  188 => 213,  179 => 144,  176 => 83,  169 => 75,  165 => 73,  159 => 71,  145 => 70,  136 => 67,  132 => 65,  124 => 63,  99 => 60,  92 => 58,  89 => 57,  84 => 55,  80 => 53,  78 => 37,  75 => 36,  73 => 29,  70 => 28,  68 => 24,  58 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  28 => 4,  712 => 198,  699 => 200,  694 => 199,  685 => 192,  680 => 197,  673 => 188,  670 => 187,  665 => 184,  654 => 189,  646 => 179,  643 => 178,  639 => 177,  635 => 183,  625 => 181,  622 => 174,  617 => 179,  612 => 172,  607 => 171,  599 => 174,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 118,  459 => 116,  457 => 89,  454 => 88,  451 => 87,  446 => 112,  444 => 138,  438 => 134,  434 => 132,  432 => 111,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 99,  371 => 98,  367 => 118,  364 => 117,  361 => 95,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 80,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 62,  258 => 61,  249 => 60,  233 => 32,  231 => 58,  228 => 31,  225 => 30,  219 => 55,  215 => 54,  209 => 53,  204 => 52,  201 => 51,  197 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 149,  184 => 45,  180 => 43,  174 => 77,  167 => 38,  162 => 72,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 68,  137 => 155,  134 => 154,  128 => 64,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 81,  107 => 80,  105 => 62,  102 => 61,  100 => 34,  97 => 33,  91 => 31,  85 => 30,  81 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  63 => 22,  60 => 21,  57 => 21,  49 => 18,  42 => 12,  39 => 14,);
    }
}
