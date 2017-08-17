<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_4d33b60b3a5a4ebe21cf95acb80f0d4d372e9c1f7d2071616755773410ea2f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d33b60b3a5a4ebe21cf95acb80f0d4d372e9c1f7d2071616755773410ea2f69->enter($__internal_4d33b60b3a5a4ebe21cf95acb80f0d4d372e9c1f7d2071616755773410ea2f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e8535d916bce235709c5f38246ca51916a4cc8d96470aead477c770d587a32de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8535d916bce235709c5f38246ca51916a4cc8d96470aead477c770d587a32de->enter($__internal_e8535d916bce235709c5f38246ca51916a4cc8d96470aead477c770d587a32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d33b60b3a5a4ebe21cf95acb80f0d4d372e9c1f7d2071616755773410ea2f69->leave($__internal_4d33b60b3a5a4ebe21cf95acb80f0d4d372e9c1f7d2071616755773410ea2f69_prof);

        
        $__internal_e8535d916bce235709c5f38246ca51916a4cc8d96470aead477c770d587a32de->leave($__internal_e8535d916bce235709c5f38246ca51916a4cc8d96470aead477c770d587a32de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a142977b703663c8840180d31123317e21943c538734f155d1ef4014bce7d2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a142977b703663c8840180d31123317e21943c538734f155d1ef4014bce7d2e7->enter($__internal_a142977b703663c8840180d31123317e21943c538734f155d1ef4014bce7d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_509a07d9ecf2310e46e9e77d53bd6fbf18e81ff196c3391c51d49a3b6c9ea67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509a07d9ecf2310e46e9e77d53bd6fbf18e81ff196c3391c51d49a3b6c9ea67c->enter($__internal_509a07d9ecf2310e46e9e77d53bd6fbf18e81ff196c3391c51d49a3b6c9ea67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_509a07d9ecf2310e46e9e77d53bd6fbf18e81ff196c3391c51d49a3b6c9ea67c->leave($__internal_509a07d9ecf2310e46e9e77d53bd6fbf18e81ff196c3391c51d49a3b6c9ea67c_prof);

        
        $__internal_a142977b703663c8840180d31123317e21943c538734f155d1ef4014bce7d2e7->leave($__internal_a142977b703663c8840180d31123317e21943c538734f155d1ef4014bce7d2e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67778bb4ca834ef471dd23497c112aa5d8904f04ccec7cec48c6f0632bc6db80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67778bb4ca834ef471dd23497c112aa5d8904f04ccec7cec48c6f0632bc6db80->enter($__internal_67778bb4ca834ef471dd23497c112aa5d8904f04ccec7cec48c6f0632bc6db80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba000747b0ade4cc606eb2a3a3b0c5343935d9315f624d2ec818773557668c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba000747b0ade4cc606eb2a3a3b0c5343935d9315f624d2ec818773557668c26->enter($__internal_ba000747b0ade4cc606eb2a3a3b0c5343935d9315f624d2ec818773557668c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba000747b0ade4cc606eb2a3a3b0c5343935d9315f624d2ec818773557668c26->leave($__internal_ba000747b0ade4cc606eb2a3a3b0c5343935d9315f624d2ec818773557668c26_prof);

        
        $__internal_67778bb4ca834ef471dd23497c112aa5d8904f04ccec7cec48c6f0632bc6db80->leave($__internal_67778bb4ca834ef471dd23497c112aa5d8904f04ccec7cec48c6f0632bc6db80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff9844473a480137d0f6aa79158e358e6533b22a88947a8b0d4a1894878a5e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9844473a480137d0f6aa79158e358e6533b22a88947a8b0d4a1894878a5e3e->enter($__internal_ff9844473a480137d0f6aa79158e358e6533b22a88947a8b0d4a1894878a5e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5cd0dc119b0aa299ea1a6c967338cc4168ab30438b24e2ad777c77096fcf3c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd0dc119b0aa299ea1a6c967338cc4168ab30438b24e2ad777c77096fcf3c07->enter($__internal_5cd0dc119b0aa299ea1a6c967338cc4168ab30438b24e2ad777c77096fcf3c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5cd0dc119b0aa299ea1a6c967338cc4168ab30438b24e2ad777c77096fcf3c07->leave($__internal_5cd0dc119b0aa299ea1a6c967338cc4168ab30438b24e2ad777c77096fcf3c07_prof);

        
        $__internal_ff9844473a480137d0f6aa79158e358e6533b22a88947a8b0d4a1894878a5e3e->leave($__internal_ff9844473a480137d0f6aa79158e358e6533b22a88947a8b0d4a1894878a5e3e_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/mmessenger/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
