<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_fc3481e66bc5fafb5d5792e37032ec90f2cb92cda4918e813ec57d4895a74581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 21
    public function block_list_table($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
        // line 23
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => $_admin_)));
        echo "

    ";
        // line 25
        $this->displayBlock('list_header', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context["batchactions"] = $this->getAttribute($_admin_, "batchactions");
        // line 28
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results")) > 0)) {
            // line 29
            echo "        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 30
                echo "        <form action=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($_admin_, "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 31
                if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
                echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
                echo "\">
        ";
            }
            // line 33
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 34
            $this->displayBlock('table_header', $context, $blocks);
            // line 70
            echo "
                ";
            // line 71
            $this->displayBlock('table_body', $context, $blocks);
            // line 80
            echo "
                ";
            // line 81
            $this->displayBlock('table_footer', $context, $blocks);
            // line 145
            echo "            </table>
        ";
            // line 146
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 147
                echo "        </form>
        ";
            }
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        <p class=\"notice\">
            ";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 154
        echo "
    ";
        // line 155
        $this->displayBlock('list_footer', $context, $blocks);
        // line 156
        echo "
    ";
        // line 157
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => $_admin_)));
        echo "

";
    }

    // line 25
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 34
    public function block_table_header($context, array $blocks = array())
    {
        // line 35
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 37
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 38
            echo "                                ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                    </th>
                                ";
            } elseif (($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_select")) {
                // line 43
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute($_field_description_, "name") == "_action") && $this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
                // line 45
                echo "                                    ";
                // line 46
                echo "                                ";
            } elseif ((($this->getAttribute($_field_description_, "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
                // line 47
                echo "                                    ";
                // line 48
                echo "                                ";
            } else {
                // line 49
                echo "                                    ";
                $context["sortable"] = false;
                // line 50
                echo "                                    ";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_field_description_, "options"), "sortable"))) {
                    // line 51
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 52
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "sortparameters", array(0 => $_field_description_, 1 => $this->getAttribute($_admin_, "datagrid")), "method");
                    // line 53
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by") == $_field_description_) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute($_sort_parameters_, "filter"), "_sort_by")));
                    // line 54
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    $context["sort_active_class"] = (($_current_) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 55
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_by"] = (($_current_) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($_field_description_, "options"), "_sort_order")));
                    // line 56
                    echo "                                    ";
                }
                // line 57
                echo "
                                    ";
                // line 58
                ob_start();
                // line 59
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_description_, "type"), "html", null, true);
                echo " ";
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo " sonata-ba-list-field-header-order-";
                    if (isset($context["sort_by"])) { $_sort_by_ = $context["sort_by"]; } else { $_sort_by_ = null; }
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_sort_by_), "html", null, true);
                    echo " ";
                    if (isset($context["sort_active_class"])) { $_sort_active_class_ = $context["sort_active_class"]; } else { $_sort_active_class_ = null; }
                    echo twig_escape_filter($this->env, $_sort_active_class_, "html", null, true);
                }
                echo "\">
                                            ";
                // line 60
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "<a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $_sort_parameters_), "method"), "html", null, true);
                    echo "\">";
                }
                // line 61
                echo "                                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_field_description_, "label"), 1 => array(), 2 => $this->getAttribute($_field_description_, "translationDomain")), "method"), "html", null, true);
                echo "
                                            ";
                // line 62
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "</a>";
                }
                // line 63
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 65
                echo "                                ";
            }
            // line 66
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 71
    public function block_table_body($context, array $blocks = array())
    {
        // line 72
        echo "                    <tbody>
                        ";
        // line 73
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 74
            echo "                            <tr>
                                ";
            // line 75
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 76
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </tbody>
                ";
    }

    // line 81
    public function block_table_footer($context, array $blocks = array())
    {
        // line 82
        echo "                    <tr>
                        <th colspan=\"";
        // line 83
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "list"), "elements")) - (($this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 85
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
            // line 86
            echo "                                    ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 87
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 117
                echo "                                    ";
            }
            // line 118
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 120
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "export"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($_admin_, "getExportFormats", array(), "method")))) {
                // line 121
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 122
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 123
                    echo "                                                <a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => 0), "method") + array("format" => $_format_))), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $_format_, "html", null, true);
                    echo "</a>";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "last"))) {
                        echo ",";
                    }
                    // line 124
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 128
            echo "
                                        ";
            // line 129
            $this->displayBlock('pager_results', $context, $blocks);
            // line 132
            echo "                                    </div>
                                ";
        }
        // line 134
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 138
        $this->displayBlock('pager_links', $context, $blocks);
        // line 143
        echo "
                ";
    }

    // line 87
    public function block_batch($context, array $blocks = array())
    {
        // line 88
        echo "                                            <script>
                                                ";
        // line 89
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 99
        echo "                                            </script>

                                            ";
        // line 101
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 114
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 89
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 90
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 101
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 102
        echo "                                                <label class=\"checkbox\" for=\"";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 103
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                     (";
        // line 105
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 109
        if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_batchactions_);
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 110
            echo "                                                        <option value=\"";
            if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
            echo twig_escape_filter($this->env, $_action_, "html", null, true);
            echo "\">";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_options_, "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                                </select>
                                            ";
    }

    // line 129
    public function block_pager_results($context, array $blocks = array())
    {
        // line 130
        echo "                                            ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 131
        echo "                                        ";
    }

    // line 138
    public function block_pager_links($context, array $blocks = array())
    {
        // line 139
        echo "                        ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 140
            echo "                            ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 141
            echo "                        ";
        }
        // line 142
        echo "                    ";
    }

    // line 155
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 161
    public function block_list_filters($context, array $blocks = array())
    {
        // line 162
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters")) {
            // line 163
            echo "        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => "SonataAdminBundle:Form:filter_admin_fields.html.twig"));
            // line 164
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 166
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 170
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo ((($this->getAttribute($_admin_, "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 171
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 172
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 173
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 174
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 175
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_filter_, "label"), 1 => array(), 2 => $this->getAttribute($_filter_, "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 176
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children", array(), "any", false, true), $this->getAttribute($_filter_, "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array()));
                // line 177
                echo "                                    ";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " sonata-filter-option"))));
                // line 178
                echo "
                                    ";
                // line 179
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => $_attr_));
                echo "

                                    ";
                // line 181
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 187
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 188
            echo "                            ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 192
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 195
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 196
                echo "                            <input type=\"hidden\" name=\"";
                if (isset($context["paramKey"])) { $_paramKey_ = $context["paramKey"]; } else { $_paramKey_ = null; }
                echo twig_escape_filter($this->env, $_paramKey_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["paramValue"])) { $_paramValue_ = $context["paramValue"]; } else { $_paramValue_ = null; }
                echo twig_escape_filter($this->env, $_paramValue_, "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                </form>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 198,  699 => 196,  694 => 195,  685 => 192,  680 => 190,  673 => 188,  670 => 187,  665 => 184,  654 => 181,  646 => 179,  643 => 178,  639 => 177,  635 => 176,  625 => 175,  622 => 174,  617 => 173,  612 => 172,  607 => 171,  599 => 170,  589 => 166,  585 => 164,  581 => 163,  577 => 162,  574 => 161,  569 => 155,  565 => 142,  562 => 141,  557 => 140,  553 => 139,  550 => 138,  546 => 131,  541 => 130,  538 => 129,  533 => 112,  520 => 110,  515 => 109,  507 => 105,  503 => 104,  498 => 103,  492 => 102,  489 => 101,  477 => 90,  474 => 89,  468 => 115,  465 => 114,  463 => 101,  459 => 99,  457 => 89,  454 => 88,  451 => 87,  446 => 143,  444 => 138,  438 => 134,  434 => 132,  432 => 129,  429 => 128,  424 => 125,  410 => 124,  397 => 123,  379 => 122,  374 => 121,  371 => 120,  367 => 118,  364 => 117,  361 => 87,  356 => 86,  353 => 85,  346 => 83,  343 => 82,  340 => 81,  335 => 78,  320 => 76,  316 => 75,  313 => 74,  295 => 73,  292 => 72,  289 => 71,  283 => 67,  277 => 66,  274 => 65,  270 => 63,  265 => 62,  258 => 61,  249 => 60,  233 => 59,  231 => 58,  228 => 57,  225 => 56,  219 => 55,  215 => 54,  209 => 53,  204 => 52,  201 => 51,  197 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 46,  184 => 45,  180 => 43,  174 => 39,  167 => 38,  162 => 37,  158 => 35,  155 => 34,  150 => 25,  142 => 157,  139 => 156,  137 => 155,  134 => 154,  128 => 151,  125 => 150,  122 => 149,  118 => 147,  115 => 146,  112 => 145,  110 => 81,  107 => 80,  105 => 71,  102 => 70,  100 => 34,  97 => 33,  91 => 31,  85 => 30,  81 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  63 => 23,  60 => 22,  57 => 21,  49 => 18,  42 => 15,  39 => 14,);
    }
}
