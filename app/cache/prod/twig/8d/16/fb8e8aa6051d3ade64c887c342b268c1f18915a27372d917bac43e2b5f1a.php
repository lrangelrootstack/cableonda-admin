<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_8d16fb8e8aa6051d3ade64c887c342b268c1f18915a27372d917bac43e2b5f1a extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
                echo "\">
            ";
                // line 15
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 12,  19 => 11,  217 => 56,  203 => 55,  196 => 52,  183 => 46,  177 => 43,  174 => 42,  168 => 41,  160 => 38,  154 => 36,  143 => 33,  136 => 30,  132 => 28,  129 => 27,  118 => 23,  111 => 22,  108 => 21,  105 => 20,  96 => 18,  93 => 17,  90 => 16,  87 => 14,  77 => 12,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  173 => 71,  163 => 68,  157 => 37,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  124 => 25,  121 => 24,  117 => 50,  110 => 46,  106 => 44,  102 => 19,  94 => 39,  82 => 33,  71 => 11,  65 => 26,  62 => 25,  57 => 23,  47 => 21,  41 => 20,  38 => 19,  29 => 3,  26 => 13,  895 => 293,  892 => 292,  888 => 286,  879 => 280,  871 => 279,  868 => 278,  862 => 275,  859 => 274,  857 => 273,  854 => 272,  852 => 271,  849 => 270,  843 => 268,  841 => 267,  838 => 266,  832 => 264,  830 => 263,  827 => 262,  821 => 260,  819 => 259,  816 => 258,  810 => 256,  808 => 255,  805 => 254,  802 => 253,  798 => 248,  795 => 247,  792 => 246,  788 => 244,  783 => 241,  775 => 236,  769 => 232,  767 => 231,  763 => 229,  757 => 227,  755 => 226,  750 => 223,  747 => 222,  744 => 221,  739 => 249,  737 => 246,  734 => 245,  731 => 221,  728 => 220,  723 => 287,  721 => 253,  717 => 251,  715 => 220,  712 => 219,  709 => 218,  704 => 289,  702 => 218,  699 => 217,  696 => 216,  690 => 211,  686 => 210,  682 => 208,  676 => 207,  671 => 204,  665 => 203,  653 => 201,  650 => 200,  646 => 199,  639 => 198,  633 => 197,  630 => 196,  627 => 195,  624 => 194,  619 => 193,  617 => 192,  611 => 189,  607 => 188,  603 => 186,  601 => 185,  598 => 184,  595 => 183,  588 => 182,  585 => 181,  582 => 180,  579 => 179,  573 => 178,  570 => 177,  567 => 176,  564 => 174,  557 => 173,  554 => 172,  548 => 171,  545 => 170,  541 => 169,  538 => 168,  535 => 167,  532 => 166,  526 => 165,  522 => 163,  508 => 154,  502 => 152,  499 => 151,  496 => 150,  492 => 212,  489 => 211,  486 => 166,  484 => 165,  481 => 164,  478 => 150,  475 => 149,  467 => 136,  464 => 135,  456 => 129,  453 => 128,  445 => 122,  442 => 121,  438 => 118,  434 => 116,  428 => 114,  425 => 113,  422 => 112,  408 => 111,  402 => 109,  398 => 107,  392 => 105,  384 => 103,  382 => 102,  379 => 101,  376 => 100,  358 => 99,  355 => 98,  353 => 97,  350 => 96,  347 => 95,  344 => 94,  340 => 143,  336 => 141,  334 => 121,  330 => 119,  328 => 94,  317 => 85,  314 => 84,  311 => 83,  303 => 80,  298 => 78,  295 => 77,  289 => 75,  284 => 51,  275 => 49,  271 => 48,  264 => 44,  260 => 42,  254 => 41,  246 => 40,  242 => 38,  239 => 37,  234 => 34,  225 => 32,  221 => 31,  218 => 30,  215 => 29,  209 => 25,  206 => 24,  200 => 54,  193 => 51,  191 => 292,  188 => 48,  186 => 47,  181 => 213,  179 => 44,  172 => 144,  169 => 69,  167 => 77,  162 => 75,  158 => 73,  155 => 72,  152 => 71,  133 => 68,  130 => 67,  126 => 26,  123 => 64,  120 => 63,  100 => 41,  89 => 37,  80 => 13,  78 => 31,  75 => 30,  70 => 28,  68 => 10,  63 => 22,  60 => 24,  56 => 19,  54 => 18,  52 => 17,  50 => 22,  46 => 14,  48 => 8,  44 => 13,  40 => 11,  36 => 15,  31 => 14,  170 => 55,  165 => 52,  159 => 51,  153 => 62,  150 => 35,  146 => 34,  138 => 70,  135 => 55,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 47,  109 => 37,  107 => 36,  103 => 62,  97 => 60,  91 => 38,  88 => 30,  84 => 55,  76 => 28,  73 => 29,  67 => 26,  64 => 25,  61 => 24,  58 => 20,  53 => 22,  51 => 9,  45 => 18,  42 => 7,  39 => 16,  34 => 18,  28 => 4,);
    }
}
