<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3ea066532c4f63e20e5bb312829afe32b6108c1b1f49a861fb69b174c0411777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea066532c4f63e20e5bb312829afe32b6108c1b1f49a861fb69b174c0411777->enter($__internal_3ea066532c4f63e20e5bb312829afe32b6108c1b1f49a861fb69b174c0411777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_250ccb8f158d3bf6b6ad053dafb7247aec97b14f369c9a69346abaa28809aebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250ccb8f158d3bf6b6ad053dafb7247aec97b14f369c9a69346abaa28809aebc->enter($__internal_250ccb8f158d3bf6b6ad053dafb7247aec97b14f369c9a69346abaa28809aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ea066532c4f63e20e5bb312829afe32b6108c1b1f49a861fb69b174c0411777->leave($__internal_3ea066532c4f63e20e5bb312829afe32b6108c1b1f49a861fb69b174c0411777_prof);

        
        $__internal_250ccb8f158d3bf6b6ad053dafb7247aec97b14f369c9a69346abaa28809aebc->leave($__internal_250ccb8f158d3bf6b6ad053dafb7247aec97b14f369c9a69346abaa28809aebc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16d9832ad1bf3b6cfbf64fb54ea1c6a67839520470e362ab844a7ac8605e5273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d9832ad1bf3b6cfbf64fb54ea1c6a67839520470e362ab844a7ac8605e5273->enter($__internal_16d9832ad1bf3b6cfbf64fb54ea1c6a67839520470e362ab844a7ac8605e5273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3a4265597de8eef20239f8fcdad55d6d71ccc1022aa365e0929cc26ce722bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4265597de8eef20239f8fcdad55d6d71ccc1022aa365e0929cc26ce722bc2->enter($__internal_a3a4265597de8eef20239f8fcdad55d6d71ccc1022aa365e0929cc26ce722bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a3a4265597de8eef20239f8fcdad55d6d71ccc1022aa365e0929cc26ce722bc2->leave($__internal_a3a4265597de8eef20239f8fcdad55d6d71ccc1022aa365e0929cc26ce722bc2_prof);

        
        $__internal_16d9832ad1bf3b6cfbf64fb54ea1c6a67839520470e362ab844a7ac8605e5273->leave($__internal_16d9832ad1bf3b6cfbf64fb54ea1c6a67839520470e362ab844a7ac8605e5273_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaff4682fb65a1ddef9031d795b0a131d1bd2c9ad1c609987b014bc0bf266037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaff4682fb65a1ddef9031d795b0a131d1bd2c9ad1c609987b014bc0bf266037->enter($__internal_aaff4682fb65a1ddef9031d795b0a131d1bd2c9ad1c609987b014bc0bf266037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_622715bb8dd1503c4dd0972b844cb0e10bd579fb7d38ef8f6bd69f708d7f28bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622715bb8dd1503c4dd0972b844cb0e10bd579fb7d38ef8f6bd69f708d7f28bb->enter($__internal_622715bb8dd1503c4dd0972b844cb0e10bd579fb7d38ef8f6bd69f708d7f28bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_622715bb8dd1503c4dd0972b844cb0e10bd579fb7d38ef8f6bd69f708d7f28bb->leave($__internal_622715bb8dd1503c4dd0972b844cb0e10bd579fb7d38ef8f6bd69f708d7f28bb_prof);

        
        $__internal_aaff4682fb65a1ddef9031d795b0a131d1bd2c9ad1c609987b014bc0bf266037->leave($__internal_aaff4682fb65a1ddef9031d795b0a131d1bd2c9ad1c609987b014bc0bf266037_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78229198daa09782e3ea95a341b75c24b5ba29e63fc12ded4b9e3087d4d75f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78229198daa09782e3ea95a341b75c24b5ba29e63fc12ded4b9e3087d4d75f54->enter($__internal_78229198daa09782e3ea95a341b75c24b5ba29e63fc12ded4b9e3087d4d75f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03e25949995ab456ee93bd3477a0198837019e8a2295b7541682ec2a3479585e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e25949995ab456ee93bd3477a0198837019e8a2295b7541682ec2a3479585e->enter($__internal_03e25949995ab456ee93bd3477a0198837019e8a2295b7541682ec2a3479585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_03e25949995ab456ee93bd3477a0198837019e8a2295b7541682ec2a3479585e->leave($__internal_03e25949995ab456ee93bd3477a0198837019e8a2295b7541682ec2a3479585e_prof);

        
        $__internal_78229198daa09782e3ea95a341b75c24b5ba29e63fc12ded4b9e3087d4d75f54->leave($__internal_78229198daa09782e3ea95a341b75c24b5ba29e63fc12ded4b9e3087d4d75f54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/mmessenger/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
