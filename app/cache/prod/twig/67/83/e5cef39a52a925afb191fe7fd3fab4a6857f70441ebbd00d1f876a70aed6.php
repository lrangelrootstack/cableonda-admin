<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_6783e5cef39a52a925afb191fe7fd3fab4a6857f70441ebbd00d1f876a70aed6 extends Twig_Template
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
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 58
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
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
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 64
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 65
                            echo "                                &gt;
                            ";
                        }
                        // line 67
                        echo "
                            ";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 32
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["css"]) ? $context["css"] : $this->getContext($context, "css"))), "html", null, true);
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "javascripts"));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 49
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
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
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 96
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        ";
            // line 97
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 98
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 99
                    echo "                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 101
                            echo "                                                        <li>
                                                            ";
                            // line 102
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 103
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                            ";
                            } else {
                                // line 105
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 107
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 109
                            echo "                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
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
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
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
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
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
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 152
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 168
            echo "                                <ul class=\"sidebar-menu\">
                                    ";
            // line 169
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 170
                echo "                                        ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 171
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 172
                        echo "                                            ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
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
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 178
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 179
                            echo "                                                ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 180
                                echo "                                                    ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
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
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 186
                    echo "                                            <li class=\"treeview\">
                                                <a href=\"#\">
                                                    ";
                    // line 188
                    echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    echo "
                                                    <span>";
                    // line 189
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                    <i class=\"fa pull-right fa-angle-left\"></i>
                                                </a>
                                                ";
                    // line 192
                    $context["active"] = false;
                    // line 193
                    echo "                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 194
                        echo "                                                    ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
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
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                    ";
                    // line 199
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 200
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 201
                            echo "                                                            <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
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
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 223
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 226
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 227
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 229
            echo "                                                </div>

                                                ";
            // line 231
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 232
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 236
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
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
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 256
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 258
        echo "
                                ";
        // line 259
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 260
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 262
        echo "
                                ";
        // line 263
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 264
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 266
        echo "
                                ";
        // line 267
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 268
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 270
        echo "
                                ";
        // line 271
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 272
            echo "                                    <div class=\"row\">
                                        ";
            // line 273
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 274
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 275
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 278
            echo "
                                        <div class=\"sonata-ba-list ";
            // line 279
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 280
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
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
        return array (  895 => 293,  892 => 292,  888 => 286,  879 => 280,  871 => 279,  868 => 278,  862 => 275,  859 => 274,  857 => 273,  854 => 272,  852 => 271,  849 => 270,  843 => 268,  841 => 267,  838 => 266,  832 => 264,  830 => 263,  827 => 262,  821 => 260,  819 => 259,  816 => 258,  810 => 256,  808 => 255,  805 => 254,  802 => 253,  798 => 248,  795 => 247,  792 => 246,  788 => 244,  783 => 241,  775 => 236,  769 => 232,  767 => 231,  763 => 229,  757 => 227,  755 => 226,  750 => 223,  747 => 222,  744 => 221,  739 => 249,  737 => 246,  734 => 245,  731 => 221,  728 => 220,  723 => 287,  721 => 253,  717 => 251,  715 => 220,  712 => 219,  709 => 218,  704 => 289,  702 => 218,  699 => 217,  696 => 216,  690 => 211,  686 => 210,  682 => 208,  676 => 207,  671 => 204,  665 => 203,  653 => 201,  650 => 200,  646 => 199,  639 => 198,  633 => 197,  630 => 196,  627 => 195,  624 => 194,  619 => 193,  617 => 192,  611 => 189,  607 => 188,  603 => 186,  601 => 185,  598 => 184,  595 => 183,  588 => 182,  585 => 181,  582 => 180,  579 => 179,  573 => 178,  570 => 177,  567 => 176,  564 => 174,  557 => 173,  554 => 172,  548 => 171,  545 => 170,  541 => 169,  538 => 168,  535 => 167,  532 => 166,  526 => 165,  522 => 163,  508 => 154,  502 => 152,  499 => 151,  496 => 150,  492 => 212,  489 => 211,  486 => 166,  484 => 165,  481 => 164,  478 => 150,  475 => 149,  467 => 136,  464 => 135,  456 => 129,  453 => 128,  445 => 122,  442 => 121,  438 => 118,  434 => 116,  428 => 114,  425 => 113,  422 => 112,  408 => 111,  402 => 109,  398 => 107,  392 => 105,  384 => 103,  382 => 102,  379 => 101,  376 => 100,  358 => 99,  355 => 98,  353 => 97,  350 => 96,  347 => 95,  344 => 94,  340 => 143,  336 => 141,  334 => 121,  330 => 119,  328 => 94,  317 => 85,  314 => 84,  311 => 83,  303 => 80,  298 => 78,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  260 => 42,  254 => 41,  246 => 40,  242 => 38,  239 => 37,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  206 => 24,  200 => 22,  193 => 297,  191 => 292,  188 => 291,  186 => 216,  181 => 213,  179 => 149,  172 => 144,  169 => 83,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  152 => 71,  133 => 68,  130 => 67,  126 => 65,  123 => 64,  120 => 63,  100 => 61,  89 => 57,  80 => 53,  78 => 37,  75 => 36,  70 => 28,  68 => 24,  63 => 22,  60 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  170 => 55,  165 => 52,  159 => 51,  153 => 49,  150 => 48,  146 => 47,  138 => 70,  135 => 45,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  103 => 62,  97 => 60,  91 => 58,  88 => 30,  84 => 55,  76 => 28,  73 => 29,  67 => 26,  64 => 25,  61 => 24,  58 => 20,  53 => 22,  51 => 21,  45 => 18,  42 => 12,  39 => 16,  34 => 15,  28 => 4,);
    }
}
