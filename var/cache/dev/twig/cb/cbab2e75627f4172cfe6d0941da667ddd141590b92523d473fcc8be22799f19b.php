<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f74edbee08107e177ade41af6576561fe696aca9263fd78a10dd289e578d03a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f16be1824e023b05421d8c3a2e23c2890f714583b070c61c4a5254021cfc86b = $this->env->getExtension("native_profiler");
        $__internal_6f16be1824e023b05421d8c3a2e23c2890f714583b070c61c4a5254021cfc86b->enter($__internal_6f16be1824e023b05421d8c3a2e23c2890f714583b070c61c4a5254021cfc86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f16be1824e023b05421d8c3a2e23c2890f714583b070c61c4a5254021cfc86b->leave($__internal_6f16be1824e023b05421d8c3a2e23c2890f714583b070c61c4a5254021cfc86b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f86a227969e46b3e9b3b6645b66847e2265cdc003c3f631320dd1fd6ad57b5e = $this->env->getExtension("native_profiler");
        $__internal_0f86a227969e46b3e9b3b6645b66847e2265cdc003c3f631320dd1fd6ad57b5e->enter($__internal_0f86a227969e46b3e9b3b6645b66847e2265cdc003c3f631320dd1fd6ad57b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f86a227969e46b3e9b3b6645b66847e2265cdc003c3f631320dd1fd6ad57b5e->leave($__internal_0f86a227969e46b3e9b3b6645b66847e2265cdc003c3f631320dd1fd6ad57b5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c4475d29b9253ee05077536661278c9ab6286fcf6bba86b5aa1c03d1fa919df = $this->env->getExtension("native_profiler");
        $__internal_5c4475d29b9253ee05077536661278c9ab6286fcf6bba86b5aa1c03d1fa919df->enter($__internal_5c4475d29b9253ee05077536661278c9ab6286fcf6bba86b5aa1c03d1fa919df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c4475d29b9253ee05077536661278c9ab6286fcf6bba86b5aa1c03d1fa919df->leave($__internal_5c4475d29b9253ee05077536661278c9ab6286fcf6bba86b5aa1c03d1fa919df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2c79800896497ef5df4c2b5f7c1da3c554601ac514790f91ada365f704ba57 = $this->env->getExtension("native_profiler");
        $__internal_bd2c79800896497ef5df4c2b5f7c1da3c554601ac514790f91ada365f704ba57->enter($__internal_bd2c79800896497ef5df4c2b5f7c1da3c554601ac514790f91ada365f704ba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd2c79800896497ef5df4c2b5f7c1da3c554601ac514790f91ada365f704ba57->leave($__internal_bd2c79800896497ef5df4c2b5f7c1da3c554601ac514790f91ada365f704ba57_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
