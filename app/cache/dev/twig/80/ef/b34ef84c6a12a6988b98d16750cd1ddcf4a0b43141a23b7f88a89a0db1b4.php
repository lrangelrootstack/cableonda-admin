<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_80efb34ef84c6a12a6988b98d16750cd1ddcf4a0b43141a23b7f88a89a0db1b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"box box-varning\">
        <div class=\"box-header\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  124 => 52,  110 => 46,  104 => 18,  76 => 27,  58 => 24,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  20 => 11,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 64,  160 => 44,  137 => 37,  113 => 44,  100 => 41,  90 => 20,  81 => 15,  65 => 26,  129 => 59,  97 => 47,  84 => 16,  34 => 18,  53 => 20,  77 => 36,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 69,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 23,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 61,  143 => 59,  135 => 55,  119 => 42,  102 => 42,  71 => 29,  67 => 19,  63 => 15,  59 => 14,  87 => 25,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 56,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  21 => 2,  31 => 15,  94 => 39,  89 => 37,  85 => 31,  75 => 30,  68 => 30,  56 => 21,  25 => 12,  38 => 19,  26 => 14,  24 => 11,  19 => 11,  93 => 21,  88 => 6,  78 => 31,  46 => 7,  44 => 17,  27 => 12,  79 => 28,  72 => 10,  69 => 24,  47 => 22,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 37,  96 => 31,  83 => 25,  74 => 26,  66 => 27,  55 => 79,  52 => 20,  50 => 22,  43 => 21,  41 => 20,  35 => 17,  32 => 12,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 45,  112 => 47,  109 => 19,  106 => 44,  103 => 50,  99 => 17,  95 => 22,  92 => 21,  86 => 17,  82 => 33,  80 => 19,  73 => 29,  64 => 28,  60 => 24,  57 => 23,  54 => 23,  51 => 22,  48 => 21,  45 => 8,  42 => 21,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
