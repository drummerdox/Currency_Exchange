<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e88d5ab0ceb518d043ab52dbc6f54c122f013273b3fd7a01f5b9443f754e867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee26da966e70258c3e7cc006fd29a50082482211a846ee45af2cc1ba39de5ccc = $this->env->getExtension("native_profiler");
        $__internal_ee26da966e70258c3e7cc006fd29a50082482211a846ee45af2cc1ba39de5ccc->enter($__internal_ee26da966e70258c3e7cc006fd29a50082482211a846ee45af2cc1ba39de5ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee26da966e70258c3e7cc006fd29a50082482211a846ee45af2cc1ba39de5ccc->leave($__internal_ee26da966e70258c3e7cc006fd29a50082482211a846ee45af2cc1ba39de5ccc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c39821884823cae8cafe578e007ea1f46c9575cfb0ba6bcce83a37b13604d721 = $this->env->getExtension("native_profiler");
        $__internal_c39821884823cae8cafe578e007ea1f46c9575cfb0ba6bcce83a37b13604d721->enter($__internal_c39821884823cae8cafe578e007ea1f46c9575cfb0ba6bcce83a37b13604d721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c39821884823cae8cafe578e007ea1f46c9575cfb0ba6bcce83a37b13604d721->leave($__internal_c39821884823cae8cafe578e007ea1f46c9575cfb0ba6bcce83a37b13604d721_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6d53dd4c5c795dbde3771018cb244fec0ae917042ed4206df74b89371c575f4 = $this->env->getExtension("native_profiler");
        $__internal_f6d53dd4c5c795dbde3771018cb244fec0ae917042ed4206df74b89371c575f4->enter($__internal_f6d53dd4c5c795dbde3771018cb244fec0ae917042ed4206df74b89371c575f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6d53dd4c5c795dbde3771018cb244fec0ae917042ed4206df74b89371c575f4->leave($__internal_f6d53dd4c5c795dbde3771018cb244fec0ae917042ed4206df74b89371c575f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f25ed955b3ea31daa1a9ac47309fbe32b0f559caa2bc5058c124829def81d9a2 = $this->env->getExtension("native_profiler");
        $__internal_f25ed955b3ea31daa1a9ac47309fbe32b0f559caa2bc5058c124829def81d9a2->enter($__internal_f25ed955b3ea31daa1a9ac47309fbe32b0f559caa2bc5058c124829def81d9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f25ed955b3ea31daa1a9ac47309fbe32b0f559caa2bc5058c124829def81d9a2->leave($__internal_f25ed955b3ea31daa1a9ac47309fbe32b0f559caa2bc5058c124829def81d9a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
