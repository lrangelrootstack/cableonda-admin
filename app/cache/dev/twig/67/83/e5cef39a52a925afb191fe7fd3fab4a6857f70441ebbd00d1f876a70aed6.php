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
        <header class=\"header\" style=\"position: inherit;\">
            ";
        // line 77
        $this->displayBlock('logo', $context, $blocks);
        // line 80
        echo "            ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 141
        echo "        </header>

        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
            <aside class=\"left-side sidebar-offcanvas\">
                <section class=\"sidebar\">
                    ";
        // line 146
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 210
        echo "                </section>
            </aside>

            ";
        // line 213
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 288
        echo "
            ";
        // line 289
        $this->displayBlock('footer', $context, $blocks);
        // line 294
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
        echo "                <h1>&nbsp;&nbsp;&nbsp;Registro de login Cable Onda GO</h1>
            ";
    }

    // line 80
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 81
        echo "                ";
        if (array_key_exists("admin_pool", $context)) {
            // line 82
            echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
            // line 91
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 116
            echo "                        </div>

                        ";
            // line 118
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 138
            echo "                    </nav>
                ";
        }
        // line 140
        echo "            ";
    }

    // line 91
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 92
        echo "                                ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 93
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\">
                                        ";
            // line 94
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 95
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 96
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
                        // line 97
                        echo "                                                    ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 98
                            echo "                                                        <li>
                                                            ";
                            // line 99
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 100
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                            ";
                            } else {
                                // line 102
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 104
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 106
                            echo "                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                    ";
                        }
                        // line 108
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
                    // line 109
                    echo "                                            ";
                }
                // line 110
                echo "                                        ";
            } else {
                // line 111
                echo "                                            ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                        ";
            }
            // line 113
            echo "                                    </ol>
                                ";
        }
        // line 115
        echo "                            ";
    }

    // line 118
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 119
        echo "                            <div class=\"navbar-right\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 125
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 126
        echo "                                    </li>
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            ";
        // line 132
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 133
        echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        ";
    }

    // line 146
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 147
        echo "                        ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 161
        echo "
                        ";
        // line 162
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 163
        echo "                        ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 208
        echo "                        ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 209
        echo "                    ";
    }

    // line 147
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 148
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 149
            echo "                                <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
            // line 151
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
        // line 160
        echo "                        ";
    }

    // line 162
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 163
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 164
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 165
            echo "                                <ul class=\"sidebar-menu\">
                                    ";
            // line 166
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 167
                echo "                                        ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 168
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 169
                        echo "                                            ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 170
                        echo "                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "
                                        ";
                // line 173
                echo "                                        ";
                $context["item_count"] = 0;
                // line 174
                echo "                                        ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 175
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 176
                            echo "                                                ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 177
                                echo "                                                    ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 178
                                echo "                                                ";
                            }
                            // line 179
                            echo "                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    echo "                                        ";
                }
                // line 181
                echo "
                                        ";
                // line 182
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 183
                    echo "                                            <li class=\"treeview\">
                                                <a href=\"#\">
                                                    ";
                    // line 185
                    echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    echo "
                                                    <span>";
                    // line 186
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                    <i class=\"fa pull-right fa-angle-left\"></i>
                                                </a>
                                                ";
                    // line 189
                    $context["active"] = false;
                    // line 190
                    echo "                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 191
                        echo "                                                    ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 192
                            echo "                                                        ";
                            $context["active"] = true;
                            // line 193
                            echo "                                                    ";
                        }
                        // line 194
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "                                                <ul class=\"treeview-menu";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                    ";
                    // line 196
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 197
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 198
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
                        // line 200
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                                                </ul>
                                            </li>
                                        ";
                }
                // line 204
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                                </ul>
                            ";
        }
        // line 207
        echo "                        ";
    }

    // line 208
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 213
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 214
        echo "                <aside class=\"right-side\">
                    ";
        // line 215
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 286
        echo "                </aside>
            ";
    }

    // line 215
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 216
        echo "                        <section class=\"content-header\">
                            ";
        // line 217
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 248
        echo "                        </section>
                        <section class=\"content\">
                            ";
        // line 250
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 284
        echo "                        </section>
                    ";
    }

    // line 217
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 218
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 242
        echo "
                                ";
        // line 243
        $this->displayBlock('notice', $context, $blocks);
        // line 246
        echo "
                            ";
    }

    // line 218
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 219
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 220
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 223
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 224
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 226
            echo "                                                </div>

                                                ";
            // line 228
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 229
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 233
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 238
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 241
        echo "                                ";
    }

    // line 243
    public function block_notice($context, array $blocks = array())
    {
        // line 244
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 245
        echo "                                ";
    }

    // line 250
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 251
        echo "
                                ";
        // line 252
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 253
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 255
        echo "
                                ";
        // line 256
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 257
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 259
        echo "
                                ";
        // line 260
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 261
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 263
        echo "
                                ";
        // line 264
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 265
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 267
        echo "
                                ";
        // line 268
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 269
            echo "                                    <div class=\"row\">
                                        ";
            // line 270
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 271
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 272
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 275
            echo "
                                        <div class=\"sonata-ba-list ";
            // line 276
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 277
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        
                                    </div>
                                ";
        }
        // line 283
        echo "                            ";
    }

    // line 289
    public function block_footer($context, array $blocks = array())
    {
        // line 290
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
        return array (  887 => 290,  884 => 289,  880 => 283,  871 => 277,  863 => 276,  860 => 275,  854 => 272,  851 => 271,  849 => 270,  846 => 269,  844 => 268,  841 => 267,  835 => 265,  833 => 264,  830 => 263,  824 => 261,  822 => 260,  819 => 259,  813 => 257,  811 => 256,  808 => 255,  802 => 253,  800 => 252,  797 => 251,  794 => 250,  790 => 245,  787 => 244,  784 => 243,  780 => 241,  775 => 238,  767 => 233,  761 => 229,  759 => 228,  755 => 226,  749 => 224,  747 => 223,  742 => 220,  739 => 219,  736 => 218,  731 => 246,  729 => 243,  726 => 242,  723 => 218,  720 => 217,  715 => 284,  713 => 250,  709 => 248,  707 => 217,  704 => 216,  701 => 215,  696 => 286,  694 => 215,  691 => 214,  688 => 213,  682 => 208,  678 => 207,  674 => 205,  668 => 204,  663 => 201,  657 => 200,  645 => 198,  642 => 197,  638 => 196,  631 => 195,  625 => 194,  622 => 193,  619 => 192,  616 => 191,  611 => 190,  609 => 189,  603 => 186,  599 => 185,  590 => 181,  587 => 180,  580 => 179,  577 => 178,  565 => 175,  562 => 174,  559 => 173,  556 => 171,  546 => 169,  540 => 168,  537 => 167,  533 => 166,  527 => 164,  524 => 163,  518 => 162,  514 => 160,  500 => 151,  494 => 149,  488 => 147,  481 => 208,  478 => 163,  476 => 162,  473 => 161,  470 => 147,  467 => 146,  459 => 133,  456 => 132,  448 => 126,  445 => 125,  437 => 119,  434 => 118,  430 => 115,  414 => 109,  400 => 108,  394 => 106,  374 => 99,  371 => 98,  368 => 97,  350 => 96,  347 => 95,  345 => 94,  342 => 93,  339 => 92,  332 => 140,  328 => 138,  326 => 118,  320 => 91,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  246 => 40,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  193 => 294,  186 => 213,  181 => 210,  172 => 141,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  138 => 70,  126 => 65,  123 => 64,  120 => 63,  103 => 62,  100 => 61,  91 => 58,  80 => 53,  78 => 37,  75 => 36,  70 => 28,  63 => 22,  60 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  46 => 14,  48 => 15,  44 => 13,  40 => 11,  36 => 6,  31 => 5,  28 => 4,  629 => 198,  618 => 196,  614 => 195,  606 => 192,  601 => 190,  595 => 183,  593 => 182,  588 => 184,  579 => 181,  574 => 177,  571 => 176,  568 => 177,  566 => 176,  560 => 175,  557 => 174,  553 => 173,  549 => 170,  545 => 171,  539 => 170,  530 => 165,  526 => 164,  523 => 163,  520 => 162,  517 => 161,  512 => 155,  508 => 142,  505 => 141,  501 => 140,  498 => 139,  495 => 138,  491 => 148,  487 => 130,  484 => 209,  479 => 112,  468 => 110,  464 => 109,  457 => 105,  453 => 104,  449 => 103,  444 => 102,  441 => 101,  429 => 90,  426 => 113,  420 => 111,  417 => 110,  415 => 101,  411 => 99,  409 => 89,  406 => 88,  403 => 87,  398 => 143,  396 => 138,  390 => 104,  386 => 132,  384 => 102,  381 => 128,  376 => 100,  362 => 124,  353 => 123,  336 => 91,  331 => 121,  329 => 120,  325 => 118,  322 => 116,  319 => 87,  316 => 86,  314 => 85,  309 => 82,  306 => 81,  303 => 80,  298 => 78,  283 => 76,  280 => 75,  277 => 74,  260 => 42,  257 => 72,  254 => 41,  248 => 67,  242 => 38,  239 => 37,  235 => 63,  231 => 62,  226 => 61,  220 => 60,  208 => 59,  206 => 24,  203 => 57,  200 => 22,  197 => 55,  194 => 54,  191 => 289,  188 => 288,  185 => 51,  182 => 50,  179 => 146,  176 => 48,  174 => 47,  171 => 46,  169 => 80,  165 => 43,  159 => 39,  156 => 38,  152 => 71,  148 => 35,  145 => 34,  140 => 25,  133 => 68,  130 => 67,  128 => 155,  125 => 154,  119 => 151,  116 => 150,  113 => 149,  109 => 147,  107 => 146,  104 => 145,  102 => 81,  99 => 80,  97 => 60,  94 => 70,  92 => 34,  89 => 57,  84 => 55,  79 => 30,  76 => 29,  73 => 29,  71 => 27,  68 => 24,  66 => 25,  61 => 23,  58 => 20,  55 => 21,  49 => 18,  42 => 12,  39 => 14,);
    }
}
