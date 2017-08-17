<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2103a2a3a55dbb48b93adb7bba847389c64866e4a27601ee1c499cd358a5a821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2103a2a3a55dbb48b93adb7bba847389c64866e4a27601ee1c499cd358a5a821->enter($__internal_2103a2a3a55dbb48b93adb7bba847389c64866e4a27601ee1c499cd358a5a821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_05d9e6f10fc5a01e49e195ca971d0cdbdd8fafbeff5966b61b7a3e385d751eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d9e6f10fc5a01e49e195ca971d0cdbdd8fafbeff5966b61b7a3e385d751eee->enter($__internal_05d9e6f10fc5a01e49e195ca971d0cdbdd8fafbeff5966b61b7a3e385d751eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2103a2a3a55dbb48b93adb7bba847389c64866e4a27601ee1c499cd358a5a821->leave($__internal_2103a2a3a55dbb48b93adb7bba847389c64866e4a27601ee1c499cd358a5a821_prof);

        
        $__internal_05d9e6f10fc5a01e49e195ca971d0cdbdd8fafbeff5966b61b7a3e385d751eee->leave($__internal_05d9e6f10fc5a01e49e195ca971d0cdbdd8fafbeff5966b61b7a3e385d751eee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aed2bf80f45cc505c67cd4349a40d1710b83413f954904a1294dfc77f95729e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aed2bf80f45cc505c67cd4349a40d1710b83413f954904a1294dfc77f95729e->enter($__internal_9aed2bf80f45cc505c67cd4349a40d1710b83413f954904a1294dfc77f95729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a1fd251053abcccacb95efc7749da65f6bf5a0ead6dcdea2f6bf0ffe4ecf93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1fd251053abcccacb95efc7749da65f6bf5a0ead6dcdea2f6bf0ffe4ecf93a->enter($__internal_3a1fd251053abcccacb95efc7749da65f6bf5a0ead6dcdea2f6bf0ffe4ecf93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a1fd251053abcccacb95efc7749da65f6bf5a0ead6dcdea2f6bf0ffe4ecf93a->leave($__internal_3a1fd251053abcccacb95efc7749da65f6bf5a0ead6dcdea2f6bf0ffe4ecf93a_prof);

        
        $__internal_9aed2bf80f45cc505c67cd4349a40d1710b83413f954904a1294dfc77f95729e->leave($__internal_9aed2bf80f45cc505c67cd4349a40d1710b83413f954904a1294dfc77f95729e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_61a411ff196e8440bd814adade55c633c3a8f2e3f9d70ec92ff4b733e1008caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a411ff196e8440bd814adade55c633c3a8f2e3f9d70ec92ff4b733e1008caa->enter($__internal_61a411ff196e8440bd814adade55c633c3a8f2e3f9d70ec92ff4b733e1008caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a086f8b2c683e4890e27ca4ac481d8d47c25ce02f44f540d70bada3d198c29b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a086f8b2c683e4890e27ca4ac481d8d47c25ce02f44f540d70bada3d198c29b8->enter($__internal_a086f8b2c683e4890e27ca4ac481d8d47c25ce02f44f540d70bada3d198c29b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a086f8b2c683e4890e27ca4ac481d8d47c25ce02f44f540d70bada3d198c29b8->leave($__internal_a086f8b2c683e4890e27ca4ac481d8d47c25ce02f44f540d70bada3d198c29b8_prof);

        
        $__internal_61a411ff196e8440bd814adade55c633c3a8f2e3f9d70ec92ff4b733e1008caa->leave($__internal_61a411ff196e8440bd814adade55c633c3a8f2e3f9d70ec92ff4b733e1008caa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f33f64ef670643e62a7a5ea2d84d8103e1cd0dae4d7d7ee981cf0135d3976de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f33f64ef670643e62a7a5ea2d84d8103e1cd0dae4d7d7ee981cf0135d3976de->enter($__internal_5f33f64ef670643e62a7a5ea2d84d8103e1cd0dae4d7d7ee981cf0135d3976de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_585ddd17edd6f4b773bb024bf0545b148f90ce6184c46fe704d38aad90e668df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585ddd17edd6f4b773bb024bf0545b148f90ce6184c46fe704d38aad90e668df->enter($__internal_585ddd17edd6f4b773bb024bf0545b148f90ce6184c46fe704d38aad90e668df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_585ddd17edd6f4b773bb024bf0545b148f90ce6184c46fe704d38aad90e668df->leave($__internal_585ddd17edd6f4b773bb024bf0545b148f90ce6184c46fe704d38aad90e668df_prof);

        
        $__internal_5f33f64ef670643e62a7a5ea2d84d8103e1cd0dae4d7d7ee981cf0135d3976de->leave($__internal_5f33f64ef670643e62a7a5ea2d84d8103e1cd0dae4d7d7ee981cf0135d3976de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/mmessenger/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
