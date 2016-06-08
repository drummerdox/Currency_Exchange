<?php

/* base.html.twig */
class __TwigTemplate_db9a40d3837efc384bb0b879d63b3d610a4310b849aab1b8d54c9d8228d2ffac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60fba9c8d46e0fd5fa4bafe37c5604e2fb5a877fc45d9b4922ce2ab2c59ba5fe = $this->env->getExtension("native_profiler");
        $__internal_60fba9c8d46e0fd5fa4bafe37c5604e2fb5a877fc45d9b4922ce2ab2c59ba5fe->enter($__internal_60fba9c8d46e0fd5fa4bafe37c5604e2fb5a877fc45d9b4922ce2ab2c59ba5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_60fba9c8d46e0fd5fa4bafe37c5604e2fb5a877fc45d9b4922ce2ab2c59ba5fe->leave($__internal_60fba9c8d46e0fd5fa4bafe37c5604e2fb5a877fc45d9b4922ce2ab2c59ba5fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f8b94b167098c1907f78389b1b781aec0ea5ca6eb35a7b54b0cb364d478211 = $this->env->getExtension("native_profiler");
        $__internal_c3f8b94b167098c1907f78389b1b781aec0ea5ca6eb35a7b54b0cb364d478211->enter($__internal_c3f8b94b167098c1907f78389b1b781aec0ea5ca6eb35a7b54b0cb364d478211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3f8b94b167098c1907f78389b1b781aec0ea5ca6eb35a7b54b0cb364d478211->leave($__internal_c3f8b94b167098c1907f78389b1b781aec0ea5ca6eb35a7b54b0cb364d478211_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c1860ad74a9aa2ea5f9d003e13dad004b0536768837cda623119caa0cfe9b5c = $this->env->getExtension("native_profiler");
        $__internal_2c1860ad74a9aa2ea5f9d003e13dad004b0536768837cda623119caa0cfe9b5c->enter($__internal_2c1860ad74a9aa2ea5f9d003e13dad004b0536768837cda623119caa0cfe9b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c1860ad74a9aa2ea5f9d003e13dad004b0536768837cda623119caa0cfe9b5c->leave($__internal_2c1860ad74a9aa2ea5f9d003e13dad004b0536768837cda623119caa0cfe9b5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c0152426d886b0e3ea193f133ecb38e951361041a1e71b18c612ab26fe78fb = $this->env->getExtension("native_profiler");
        $__internal_56c0152426d886b0e3ea193f133ecb38e951361041a1e71b18c612ab26fe78fb->enter($__internal_56c0152426d886b0e3ea193f133ecb38e951361041a1e71b18c612ab26fe78fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56c0152426d886b0e3ea193f133ecb38e951361041a1e71b18c612ab26fe78fb->leave($__internal_56c0152426d886b0e3ea193f133ecb38e951361041a1e71b18c612ab26fe78fb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8e9510fee6c1aff2d7f8ad7698d5d9e15b3588308b959b614903b406eed878c = $this->env->getExtension("native_profiler");
        $__internal_b8e9510fee6c1aff2d7f8ad7698d5d9e15b3588308b959b614903b406eed878c->enter($__internal_b8e9510fee6c1aff2d7f8ad7698d5d9e15b3588308b959b614903b406eed878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8e9510fee6c1aff2d7f8ad7698d5d9e15b3588308b959b614903b406eed878c->leave($__internal_b8e9510fee6c1aff2d7f8ad7698d5d9e15b3588308b959b614903b406eed878c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
