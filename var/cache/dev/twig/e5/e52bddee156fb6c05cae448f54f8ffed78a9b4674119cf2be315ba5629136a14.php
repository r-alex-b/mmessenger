<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
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
        $__internal_049455ea1452c6227947e7b79489bae67b0b32f03a32bbb296ddaba107b4e162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049455ea1452c6227947e7b79489bae67b0b32f03a32bbb296ddaba107b4e162->enter($__internal_049455ea1452c6227947e7b79489bae67b0b32f03a32bbb296ddaba107b4e162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_56e7d1e5868d732d59676fcaeb36ea3db41a454f6b4928ab2499937c47fcee9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e7d1e5868d732d59676fcaeb36ea3db41a454f6b4928ab2499937c47fcee9e->enter($__internal_56e7d1e5868d732d59676fcaeb36ea3db41a454f6b4928ab2499937c47fcee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_049455ea1452c6227947e7b79489bae67b0b32f03a32bbb296ddaba107b4e162->leave($__internal_049455ea1452c6227947e7b79489bae67b0b32f03a32bbb296ddaba107b4e162_prof);

        
        $__internal_56e7d1e5868d732d59676fcaeb36ea3db41a454f6b4928ab2499937c47fcee9e->leave($__internal_56e7d1e5868d732d59676fcaeb36ea3db41a454f6b4928ab2499937c47fcee9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab7b02feb7b8a697f140648581868749e969ec6fb9fda7caab59cccd4c81a006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7b02feb7b8a697f140648581868749e969ec6fb9fda7caab59cccd4c81a006->enter($__internal_ab7b02feb7b8a697f140648581868749e969ec6fb9fda7caab59cccd4c81a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fb4ed3e983b266331e75e9b081660e8b2371fd88217c0d008e335e29c1dcebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb4ed3e983b266331e75e9b081660e8b2371fd88217c0d008e335e29c1dcebe->enter($__internal_2fb4ed3e983b266331e75e9b081660e8b2371fd88217c0d008e335e29c1dcebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fb4ed3e983b266331e75e9b081660e8b2371fd88217c0d008e335e29c1dcebe->leave($__internal_2fb4ed3e983b266331e75e9b081660e8b2371fd88217c0d008e335e29c1dcebe_prof);

        
        $__internal_ab7b02feb7b8a697f140648581868749e969ec6fb9fda7caab59cccd4c81a006->leave($__internal_ab7b02feb7b8a697f140648581868749e969ec6fb9fda7caab59cccd4c81a006_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9a4622d8ba5ebe898b55b182d5463fa70e4428ecc04ab2fa0dc44f9e65813c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a4622d8ba5ebe898b55b182d5463fa70e4428ecc04ab2fa0dc44f9e65813c5->enter($__internal_f9a4622d8ba5ebe898b55b182d5463fa70e4428ecc04ab2fa0dc44f9e65813c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3cf9b02b0fa1508e08a726f08c46fcaae85a4f422e337d757c0f4edda90ce284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf9b02b0fa1508e08a726f08c46fcaae85a4f422e337d757c0f4edda90ce284->enter($__internal_3cf9b02b0fa1508e08a726f08c46fcaae85a4f422e337d757c0f4edda90ce284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3cf9b02b0fa1508e08a726f08c46fcaae85a4f422e337d757c0f4edda90ce284->leave($__internal_3cf9b02b0fa1508e08a726f08c46fcaae85a4f422e337d757c0f4edda90ce284_prof);

        
        $__internal_f9a4622d8ba5ebe898b55b182d5463fa70e4428ecc04ab2fa0dc44f9e65813c5->leave($__internal_f9a4622d8ba5ebe898b55b182d5463fa70e4428ecc04ab2fa0dc44f9e65813c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f71519d93ae1d6ee7bb7041c3eb9cf0bcd12b9740aa928eae2d349a7e042657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f71519d93ae1d6ee7bb7041c3eb9cf0bcd12b9740aa928eae2d349a7e042657->enter($__internal_0f71519d93ae1d6ee7bb7041c3eb9cf0bcd12b9740aa928eae2d349a7e042657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7ebdd5d6c6ac375ace37ff3d4f8e65e9fe8003aa75a4e9847b4edacb49a9e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ebdd5d6c6ac375ace37ff3d4f8e65e9fe8003aa75a4e9847b4edacb49a9e15->enter($__internal_d7ebdd5d6c6ac375ace37ff3d4f8e65e9fe8003aa75a4e9847b4edacb49a9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7ebdd5d6c6ac375ace37ff3d4f8e65e9fe8003aa75a4e9847b4edacb49a9e15->leave($__internal_d7ebdd5d6c6ac375ace37ff3d4f8e65e9fe8003aa75a4e9847b4edacb49a9e15_prof);

        
        $__internal_0f71519d93ae1d6ee7bb7041c3eb9cf0bcd12b9740aa928eae2d349a7e042657->leave($__internal_0f71519d93ae1d6ee7bb7041c3eb9cf0bcd12b9740aa928eae2d349a7e042657_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5abe6b09312b337f98f1acfa202bf0ee653c0e6a55fc2e216d55bd1040812e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abe6b09312b337f98f1acfa202bf0ee653c0e6a55fc2e216d55bd1040812e53->enter($__internal_5abe6b09312b337f98f1acfa202bf0ee653c0e6a55fc2e216d55bd1040812e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_02e1e655baf26ed8148c0df2905c88c7b0a1a09b9d9868f2feed38f44b889159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e1e655baf26ed8148c0df2905c88c7b0a1a09b9d9868f2feed38f44b889159->enter($__internal_02e1e655baf26ed8148c0df2905c88c7b0a1a09b9d9868f2feed38f44b889159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02e1e655baf26ed8148c0df2905c88c7b0a1a09b9d9868f2feed38f44b889159->leave($__internal_02e1e655baf26ed8148c0df2905c88c7b0a1a09b9d9868f2feed38f44b889159_prof);

        
        $__internal_5abe6b09312b337f98f1acfa202bf0ee653c0e6a55fc2e216d55bd1040812e53->leave($__internal_5abe6b09312b337f98f1acfa202bf0ee653c0e6a55fc2e216d55bd1040812e53_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/mmessenger/app/Resources/views/base.html.twig");
    }
}
