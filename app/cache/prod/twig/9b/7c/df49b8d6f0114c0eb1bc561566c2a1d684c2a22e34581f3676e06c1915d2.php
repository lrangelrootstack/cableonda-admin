<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_9b7cdf49b8d6f0114c0eb1bc561566c2a1d684c2a22e34581f3676e06c1915d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if (((($this->getAttribute($_admin_, "isAclEnabled", array(), "method") && $this->getAttribute($_admin_, "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")) && $this->getAttribute($_admin_, "isGranted", array(0 => "MASTER", 1 => $_object_), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "acl", 1 => $_object_), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 13,  22 => 12,  19 => 11,  815 => 213,  808 => 210,  805 => 209,  802 => 208,  798 => 206,  794 => 205,  781 => 204,  775 => 202,  760 => 200,  757 => 199,  754 => 198,  745 => 193,  742 => 192,  725 => 190,  707 => 189,  701 => 187,  696 => 186,  693 => 185,  690 => 184,  684 => 180,  680 => 178,  677 => 177,  671 => 176,  654 => 174,  636 => 173,  631 => 172,  626 => 171,  623 => 170,  618 => 169,  614 => 168,  611 => 167,  609 => 166,  606 => 165,  596 => 160,  592 => 158,  589 => 157,  586 => 156,  584 => 155,  581 => 154,  577 => 133,  569 => 131,  561 => 129,  557 => 128,  554 => 127,  547 => 149,  540 => 147,  537 => 146,  534 => 145,  527 => 142,  524 => 141,  521 => 140,  518 => 139,  514 => 138,  494 => 136,  490 => 135,  487 => 134,  485 => 127,  474 => 126,  469 => 123,  462 => 120,  459 => 119,  455 => 118,  451 => 117,  444 => 116,  438 => 115,  430 => 114,  425 => 113,  422 => 112,  412 => 106,  408 => 105,  405 => 104,  398 => 102,  395 => 101,  390 => 100,  386 => 99,  382 => 98,  378 => 96,  368 => 92,  365 => 91,  362 => 90,  359 => 89,  350 => 88,  346 => 86,  326 => 81,  321 => 79,  316 => 78,  311 => 77,  305 => 75,  302 => 74,  296 => 70,  285 => 67,  281 => 66,  278 => 65,  268 => 63,  263 => 61,  252 => 57,  233 => 56,  227 => 55,  221 => 53,  215 => 49,  211 => 47,  203 => 45,  198 => 43,  195 => 42,  176 => 41,  171 => 38,  161 => 34,  158 => 33,  152 => 31,  133 => 30,  117 => 25,  114 => 24,  103 => 21,  100 => 20,  95 => 19,  92 => 18,  89 => 17,  85 => 16,  76 => 13,  69 => 197,  64 => 183,  57 => 154,  47 => 74,  44 => 73,  39 => 60,  37 => 53,  34 => 15,  32 => 13,  29 => 11,  353 => 145,  347 => 143,  337 => 140,  334 => 83,  325 => 135,  319 => 133,  313 => 131,  307 => 76,  301 => 127,  295 => 125,  292 => 124,  279 => 116,  272 => 113,  258 => 58,  250 => 103,  244 => 101,  241 => 100,  237 => 99,  224 => 54,  204 => 87,  200 => 86,  181 => 79,  169 => 76,  165 => 75,  160 => 72,  150 => 68,  143 => 61,  140 => 60,  135 => 59,  130 => 29,  121 => 56,  113 => 52,  111 => 23,  105 => 49,  72 => 198,  62 => 165,  54 => 153,  35 => 16,  373 => 94,  370 => 100,  364 => 98,  358 => 96,  354 => 95,  348 => 93,  344 => 92,  341 => 141,  331 => 82,  327 => 88,  324 => 80,  315 => 85,  310 => 84,  306 => 83,  303 => 82,  297 => 126,  294 => 79,  288 => 121,  283 => 76,  277 => 73,  273 => 64,  269 => 70,  266 => 62,  260 => 67,  254 => 65,  249 => 64,  246 => 63,  243 => 62,  240 => 61,  235 => 56,  232 => 96,  228 => 53,  220 => 50,  216 => 90,  210 => 88,  202 => 44,  197 => 85,  192 => 42,  189 => 82,  182 => 39,  179 => 38,  175 => 77,  166 => 36,  153 => 69,  147 => 67,  144 => 26,  139 => 23,  136 => 22,  127 => 28,  124 => 27,  120 => 26,  118 => 61,  112 => 59,  109 => 58,  102 => 26,  99 => 47,  97 => 22,  94 => 21,  84 => 17,  81 => 15,  78 => 40,  73 => 14,  61 => 12,  58 => 11,  52 => 112,  49 => 111,  45 => 6,  42 => 61,  38 => 17,  30 => 2,  24 => 1,  107 => 22,  104 => 54,  101 => 34,  93 => 45,  87 => 43,  83 => 26,  79 => 14,  75 => 39,  70 => 33,  67 => 184,  59 => 164,  51 => 24,  46 => 21,  43 => 20,  12 => 32,);
    }
}
