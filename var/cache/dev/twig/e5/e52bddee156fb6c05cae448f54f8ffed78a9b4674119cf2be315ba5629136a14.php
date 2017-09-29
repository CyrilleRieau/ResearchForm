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
        $__internal_6b9b293f4d293100bd378ac9dcba4032836ac413cd0b12f233bdd2bcada98801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9b293f4d293100bd378ac9dcba4032836ac413cd0b12f233bdd2bcada98801->enter($__internal_6b9b293f4d293100bd378ac9dcba4032836ac413cd0b12f233bdd2bcada98801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7a38b94e6942d8e6f583be2fcafd94890fb9afee88fac7fcff77c47785da356f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a38b94e6942d8e6f583be2fcafd94890fb9afee88fac7fcff77c47785da356f->enter($__internal_7a38b94e6942d8e6f583be2fcafd94890fb9afee88fac7fcff77c47785da356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6b9b293f4d293100bd378ac9dcba4032836ac413cd0b12f233bdd2bcada98801->leave($__internal_6b9b293f4d293100bd378ac9dcba4032836ac413cd0b12f233bdd2bcada98801_prof);

        
        $__internal_7a38b94e6942d8e6f583be2fcafd94890fb9afee88fac7fcff77c47785da356f->leave($__internal_7a38b94e6942d8e6f583be2fcafd94890fb9afee88fac7fcff77c47785da356f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86640cb0729a76d07f2e347b36ff604362704c4eb752684ea7e8c2ff71a4e0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86640cb0729a76d07f2e347b36ff604362704c4eb752684ea7e8c2ff71a4e0d8->enter($__internal_86640cb0729a76d07f2e347b36ff604362704c4eb752684ea7e8c2ff71a4e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8b41a1bbd067302afad09c825b198d060d63cee43bff803d585442b50660ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b41a1bbd067302afad09c825b198d060d63cee43bff803d585442b50660ff1->enter($__internal_a8b41a1bbd067302afad09c825b198d060d63cee43bff803d585442b50660ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8b41a1bbd067302afad09c825b198d060d63cee43bff803d585442b50660ff1->leave($__internal_a8b41a1bbd067302afad09c825b198d060d63cee43bff803d585442b50660ff1_prof);

        
        $__internal_86640cb0729a76d07f2e347b36ff604362704c4eb752684ea7e8c2ff71a4e0d8->leave($__internal_86640cb0729a76d07f2e347b36ff604362704c4eb752684ea7e8c2ff71a4e0d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94edd38cf3458a54af6fcf8daecbdf83de3a4d905f9a2fd39c7aca4031f6b88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94edd38cf3458a54af6fcf8daecbdf83de3a4d905f9a2fd39c7aca4031f6b88f->enter($__internal_94edd38cf3458a54af6fcf8daecbdf83de3a4d905f9a2fd39c7aca4031f6b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a309f3a0637f28b14f4a4da30b7b25b52a8467576a73552535452cc1939cc6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a309f3a0637f28b14f4a4da30b7b25b52a8467576a73552535452cc1939cc6ef->enter($__internal_a309f3a0637f28b14f4a4da30b7b25b52a8467576a73552535452cc1939cc6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_a309f3a0637f28b14f4a4da30b7b25b52a8467576a73552535452cc1939cc6ef->leave($__internal_a309f3a0637f28b14f4a4da30b7b25b52a8467576a73552535452cc1939cc6ef_prof);

        
        $__internal_94edd38cf3458a54af6fcf8daecbdf83de3a4d905f9a2fd39c7aca4031f6b88f->leave($__internal_94edd38cf3458a54af6fcf8daecbdf83de3a4d905f9a2fd39c7aca4031f6b88f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_839feadc65a4c3e59850044950254d6a443477b971c61b9782f3d3926e7b6f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839feadc65a4c3e59850044950254d6a443477b971c61b9782f3d3926e7b6f70->enter($__internal_839feadc65a4c3e59850044950254d6a443477b971c61b9782f3d3926e7b6f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8915b8692f9d9bb25e67e3c94e4c57329079f2a445207a9004a07c91a2fe8044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8915b8692f9d9bb25e67e3c94e4c57329079f2a445207a9004a07c91a2fe8044->enter($__internal_8915b8692f9d9bb25e67e3c94e4c57329079f2a445207a9004a07c91a2fe8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8915b8692f9d9bb25e67e3c94e4c57329079f2a445207a9004a07c91a2fe8044->leave($__internal_8915b8692f9d9bb25e67e3c94e4c57329079f2a445207a9004a07c91a2fe8044_prof);

        
        $__internal_839feadc65a4c3e59850044950254d6a443477b971c61b9782f3d3926e7b6f70->leave($__internal_839feadc65a4c3e59850044950254d6a443477b971c61b9782f3d3926e7b6f70_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ea3e4083f712f3cb6e9abaf77397973a7c1e7052d75c98e064a612f2d708ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea3e4083f712f3cb6e9abaf77397973a7c1e7052d75c98e064a612f2d708ad2->enter($__internal_8ea3e4083f712f3cb6e9abaf77397973a7c1e7052d75c98e064a612f2d708ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_395fbcced0edc4bcd953a86da4fb4f9ebc4f97459e77424ea1fac891061a2b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395fbcced0edc4bcd953a86da4fb4f9ebc4f97459e77424ea1fac891061a2b88->enter($__internal_395fbcced0edc4bcd953a86da4fb4f9ebc4f97459e77424ea1fac891061a2b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_395fbcced0edc4bcd953a86da4fb4f9ebc4f97459e77424ea1fac891061a2b88->leave($__internal_395fbcced0edc4bcd953a86da4fb4f9ebc4f97459e77424ea1fac891061a2b88_prof);

        
        $__internal_8ea3e4083f712f3cb6e9abaf77397973a7c1e7052d75c98e064a612f2d708ad2->leave($__internal_8ea3e4083f712f3cb6e9abaf77397973a7c1e7052d75c98e064a612f2d708ad2_prof);

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
