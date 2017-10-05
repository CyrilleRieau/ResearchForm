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
        $__internal_81bc8f033ce2c9a84fc73245c00396fe15fc7274d16b7969aab84f08fd468825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bc8f033ce2c9a84fc73245c00396fe15fc7274d16b7969aab84f08fd468825->enter($__internal_81bc8f033ce2c9a84fc73245c00396fe15fc7274d16b7969aab84f08fd468825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cfaa111198323a11a25eccca73b0408bb8ddec5243009a9ca12b6339e60b7424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaa111198323a11a25eccca73b0408bb8ddec5243009a9ca12b6339e60b7424->enter($__internal_cfaa111198323a11a25eccca73b0408bb8ddec5243009a9ca12b6339e60b7424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "         </head>
    <body class=\"container-fluid\">
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_81bc8f033ce2c9a84fc73245c00396fe15fc7274d16b7969aab84f08fd468825->leave($__internal_81bc8f033ce2c9a84fc73245c00396fe15fc7274d16b7969aab84f08fd468825_prof);

        
        $__internal_cfaa111198323a11a25eccca73b0408bb8ddec5243009a9ca12b6339e60b7424->leave($__internal_cfaa111198323a11a25eccca73b0408bb8ddec5243009a9ca12b6339e60b7424_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67e1268052fce45f2765776e239b28cda1be730c8a222b92514c835b7e9f4419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e1268052fce45f2765776e239b28cda1be730c8a222b92514c835b7e9f4419->enter($__internal_67e1268052fce45f2765776e239b28cda1be730c8a222b92514c835b7e9f4419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ccccec74ce5df970f01c6746d6bf449614dab152a59d3cd35716d395177ee13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccccec74ce5df970f01c6746d6bf449614dab152a59d3cd35716d395177ee13->enter($__internal_1ccccec74ce5df970f01c6746d6bf449614dab152a59d3cd35716d395177ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ccccec74ce5df970f01c6746d6bf449614dab152a59d3cd35716d395177ee13->leave($__internal_1ccccec74ce5df970f01c6746d6bf449614dab152a59d3cd35716d395177ee13_prof);

        
        $__internal_67e1268052fce45f2765776e239b28cda1be730c8a222b92514c835b7e9f4419->leave($__internal_67e1268052fce45f2765776e239b28cda1be730c8a222b92514c835b7e9f4419_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35ca2f247b1edd5ce58524d56d3102b1abae8d47c23e829b1011c5adda29b867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ca2f247b1edd5ce58524d56d3102b1abae8d47c23e829b1011c5adda29b867->enter($__internal_35ca2f247b1edd5ce58524d56d3102b1abae8d47c23e829b1011c5adda29b867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_01019a25e51eb99671b09bcf5083ddb1405e3f789b49a0a083cdb357b7427d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01019a25e51eb99671b09bcf5083ddb1405e3f789b49a0a083cdb357b7427d76->enter($__internal_01019a25e51eb99671b09bcf5083ddb1405e3f789b49a0a083cdb357b7427d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_01019a25e51eb99671b09bcf5083ddb1405e3f789b49a0a083cdb357b7427d76->leave($__internal_01019a25e51eb99671b09bcf5083ddb1405e3f789b49a0a083cdb357b7427d76_prof);

        
        $__internal_35ca2f247b1edd5ce58524d56d3102b1abae8d47c23e829b1011c5adda29b867->leave($__internal_35ca2f247b1edd5ce58524d56d3102b1abae8d47c23e829b1011c5adda29b867_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_35f95ddf2108dfc443786f889fd98c7fff4db724c260b06a607385b5eaf88645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f95ddf2108dfc443786f889fd98c7fff4db724c260b06a607385b5eaf88645->enter($__internal_35f95ddf2108dfc443786f889fd98c7fff4db724c260b06a607385b5eaf88645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2322c7724f82f2ce15614bb81a1a7bb5f9482acf4ce8b40d94efcf8f97a90e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2322c7724f82f2ce15614bb81a1a7bb5f9482acf4ce8b40d94efcf8f97a90e6e->enter($__internal_2322c7724f82f2ce15614bb81a1a7bb5f9482acf4ce8b40d94efcf8f97a90e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2322c7724f82f2ce15614bb81a1a7bb5f9482acf4ce8b40d94efcf8f97a90e6e->leave($__internal_2322c7724f82f2ce15614bb81a1a7bb5f9482acf4ce8b40d94efcf8f97a90e6e_prof);

        
        $__internal_35f95ddf2108dfc443786f889fd98c7fff4db724c260b06a607385b5eaf88645->leave($__internal_35f95ddf2108dfc443786f889fd98c7fff4db724c260b06a607385b5eaf88645_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c94ba18d696738d6d6f22631c329cb795d5207a4d6ec9f3242a6ce44be52b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c94ba18d696738d6d6f22631c329cb795d5207a4d6ec9f3242a6ce44be52b56->enter($__internal_5c94ba18d696738d6d6f22631c329cb795d5207a4d6ec9f3242a6ce44be52b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cc75d9c84eb2cfeb066ef81e22840d0626735163d8567bca77c72d774c3aded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc75d9c84eb2cfeb066ef81e22840d0626735163d8567bca77c72d774c3aded->enter($__internal_4cc75d9c84eb2cfeb066ef81e22840d0626735163d8567bca77c72d774c3aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4cc75d9c84eb2cfeb066ef81e22840d0626735163d8567bca77c72d774c3aded->leave($__internal_4cc75d9c84eb2cfeb066ef81e22840d0626735163d8567bca77c72d774c3aded_prof);

        
        $__internal_5c94ba18d696738d6d6f22631c329cb795d5207a4d6ec9f3242a6ce44be52b56->leave($__internal_5c94ba18d696738d6d6f22631c329cb795d5207a4d6ec9f3242a6ce44be52b56_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 14,  120 => 13,  103 => 12,  89 => 7,  80 => 6,  62 => 5,  50 => 16,  47 => 13,  45 => 12,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}
            <link href=\"{{ asset('assets/main.css') }}\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
         </head>
    <body class=\"container-fluid\">
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/rieau/dev/ResearchForm/app/Resources/views/base.html.twig");
    }
}
