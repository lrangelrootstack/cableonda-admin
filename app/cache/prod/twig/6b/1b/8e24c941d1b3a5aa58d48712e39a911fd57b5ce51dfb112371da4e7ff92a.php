<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_6b1b8e24c941d1b3a5aa58d48712e39a911fd57b5ce51dfb112371da4e7ff92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (twig_test_empty($this->getAttribute($_sonata_admin_, "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method")) {
            // line 61
            echo "                    ";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "link_parameters"))), array());
            // line 67
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"))) {
            // line 68
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 69
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 72
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 75
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $_btn_list_)) {
            // line 76
            echo "                    <a  href=\"";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 77
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 79
            if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 82
            if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 85
        echo "
                ";
        // line 86
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
            // line 87
            echo "                    <a  href=\"";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 88
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 90
            if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 93
            if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 96
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 99
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && $_btn_delete_)) {
            // line 100
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 101
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 103
            if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 106
            if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 109
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 116
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 121
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 124
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 129
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 131
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 133
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 135
            echo "        INVALID MODE : ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "
    ";
        }
    }

    // line 139
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 140
        echo "    ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 141
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 143
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 145
            echo "        INVALID MODE : ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 145,  347 => 143,  337 => 140,  334 => 139,  325 => 135,  319 => 133,  313 => 131,  307 => 129,  301 => 127,  295 => 125,  292 => 124,  279 => 116,  272 => 113,  258 => 106,  250 => 103,  244 => 101,  241 => 100,  237 => 99,  224 => 93,  204 => 87,  200 => 86,  181 => 79,  169 => 76,  165 => 75,  160 => 72,  150 => 68,  143 => 61,  140 => 60,  135 => 59,  130 => 58,  121 => 56,  113 => 52,  111 => 51,  105 => 49,  72 => 37,  62 => 29,  54 => 25,  35 => 16,  373 => 101,  370 => 100,  364 => 98,  358 => 96,  354 => 95,  348 => 93,  344 => 92,  341 => 141,  331 => 89,  327 => 88,  324 => 87,  315 => 85,  310 => 84,  306 => 83,  303 => 82,  297 => 126,  294 => 79,  288 => 121,  283 => 76,  277 => 73,  273 => 71,  269 => 70,  266 => 109,  260 => 67,  254 => 65,  249 => 64,  246 => 63,  243 => 62,  240 => 61,  235 => 56,  232 => 96,  228 => 53,  220 => 50,  216 => 90,  210 => 88,  202 => 44,  197 => 85,  192 => 42,  189 => 82,  182 => 39,  179 => 38,  175 => 77,  166 => 32,  153 => 69,  147 => 67,  144 => 26,  139 => 23,  136 => 22,  127 => 106,  124 => 57,  120 => 103,  118 => 61,  112 => 59,  109 => 58,  102 => 26,  99 => 47,  97 => 22,  94 => 21,  84 => 17,  81 => 41,  78 => 40,  73 => 14,  61 => 12,  58 => 11,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  38 => 17,  30 => 2,  24 => 1,  107 => 55,  104 => 54,  101 => 34,  93 => 45,  87 => 43,  83 => 26,  79 => 25,  75 => 39,  70 => 33,  67 => 32,  59 => 28,  51 => 24,  46 => 21,  43 => 20,  12 => 32,);
    }
}
