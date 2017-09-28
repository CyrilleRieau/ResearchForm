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
        $__internal_6c51ee0f3df15de23694a8a80ad6a039c1728b0af57f8b40cf46b8d0f0b1fec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c51ee0f3df15de23694a8a80ad6a039c1728b0af57f8b40cf46b8d0f0b1fec0->enter($__internal_6c51ee0f3df15de23694a8a80ad6a039c1728b0af57f8b40cf46b8d0f0b1fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_694a011f7d1b56e03e5c07b62e0f9af0bc30257138ee73398009ec782f9e8cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694a011f7d1b56e03e5c07b62e0f9af0bc30257138ee73398009ec782f9e8cf6->enter($__internal_694a011f7d1b56e03e5c07b62e0f9af0bc30257138ee73398009ec782f9e8cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6c51ee0f3df15de23694a8a80ad6a039c1728b0af57f8b40cf46b8d0f0b1fec0->leave($__internal_6c51ee0f3df15de23694a8a80ad6a039c1728b0af57f8b40cf46b8d0f0b1fec0_prof);

        
        $__internal_694a011f7d1b56e03e5c07b62e0f9af0bc30257138ee73398009ec782f9e8cf6->leave($__internal_694a011f7d1b56e03e5c07b62e0f9af0bc30257138ee73398009ec782f9e8cf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5debb7809d3386efc2895a3d15abbbd899ee7bdbe57de6bd2296f3c56d8f7bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5debb7809d3386efc2895a3d15abbbd899ee7bdbe57de6bd2296f3c56d8f7bfd->enter($__internal_5debb7809d3386efc2895a3d15abbbd899ee7bdbe57de6bd2296f3c56d8f7bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6213097c2a8c26f53b73d6d1d2f25f618ec726dfb60211c1d7b003412020ec96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6213097c2a8c26f53b73d6d1d2f25f618ec726dfb60211c1d7b003412020ec96->enter($__internal_6213097c2a8c26f53b73d6d1d2f25f618ec726dfb60211c1d7b003412020ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6213097c2a8c26f53b73d6d1d2f25f618ec726dfb60211c1d7b003412020ec96->leave($__internal_6213097c2a8c26f53b73d6d1d2f25f618ec726dfb60211c1d7b003412020ec96_prof);

        
        $__internal_5debb7809d3386efc2895a3d15abbbd899ee7bdbe57de6bd2296f3c56d8f7bfd->leave($__internal_5debb7809d3386efc2895a3d15abbbd899ee7bdbe57de6bd2296f3c56d8f7bfd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61b03c5991e7653015816b4427b95ba62b5aa08ec8e1b35322091d3da11eb939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b03c5991e7653015816b4427b95ba62b5aa08ec8e1b35322091d3da11eb939->enter($__internal_61b03c5991e7653015816b4427b95ba62b5aa08ec8e1b35322091d3da11eb939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86f172ecac444a9742cea6fb84c1fb02b57f3c36d6085b95f52f050699af1c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f172ecac444a9742cea6fb84c1fb02b57f3c36d6085b95f52f050699af1c8f->enter($__internal_86f172ecac444a9742cea6fb84c1fb02b57f3c36d6085b95f52f050699af1c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86f172ecac444a9742cea6fb84c1fb02b57f3c36d6085b95f52f050699af1c8f->leave($__internal_86f172ecac444a9742cea6fb84c1fb02b57f3c36d6085b95f52f050699af1c8f_prof);

        
        $__internal_61b03c5991e7653015816b4427b95ba62b5aa08ec8e1b35322091d3da11eb939->leave($__internal_61b03c5991e7653015816b4427b95ba62b5aa08ec8e1b35322091d3da11eb939_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c6dea33aef00a5204194b33b88aa45e7b2add0c75b53b7ded060002a44f8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c6dea33aef00a5204194b33b88aa45e7b2add0c75b53b7ded060002a44f8a8->enter($__internal_13c6dea33aef00a5204194b33b88aa45e7b2add0c75b53b7ded060002a44f8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_728ce4d8e44f48f725c5f1f7a589d48ccc553c47eb7078444ffd5001838b9188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728ce4d8e44f48f725c5f1f7a589d48ccc553c47eb7078444ffd5001838b9188->enter($__internal_728ce4d8e44f48f725c5f1f7a589d48ccc553c47eb7078444ffd5001838b9188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_728ce4d8e44f48f725c5f1f7a589d48ccc553c47eb7078444ffd5001838b9188->leave($__internal_728ce4d8e44f48f725c5f1f7a589d48ccc553c47eb7078444ffd5001838b9188_prof);

        
        $__internal_13c6dea33aef00a5204194b33b88aa45e7b2add0c75b53b7ded060002a44f8a8->leave($__internal_13c6dea33aef00a5204194b33b88aa45e7b2add0c75b53b7ded060002a44f8a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0d56c5fa2ed10bcde0f5181e29b31f9c07ea1065fd7a16f3e9c734438851898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d56c5fa2ed10bcde0f5181e29b31f9c07ea1065fd7a16f3e9c734438851898->enter($__internal_f0d56c5fa2ed10bcde0f5181e29b31f9c07ea1065fd7a16f3e9c734438851898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57b01b96008a2a4f18c05273d5490fc751e40f27cec06415a1872d4bce29aaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b01b96008a2a4f18c05273d5490fc751e40f27cec06415a1872d4bce29aaeb->enter($__internal_57b01b96008a2a4f18c05273d5490fc751e40f27cec06415a1872d4bce29aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57b01b96008a2a4f18c05273d5490fc751e40f27cec06415a1872d4bce29aaeb->leave($__internal_57b01b96008a2a4f18c05273d5490fc751e40f27cec06415a1872d4bce29aaeb_prof);

        
        $__internal_f0d56c5fa2ed10bcde0f5181e29b31f9c07ea1065fd7a16f3e9c734438851898->leave($__internal_f0d56c5fa2ed10bcde0f5181e29b31f9c07ea1065fd7a16f3e9c734438851898_prof);

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
", "base.html.twig", "/home/rieau/dev/ResearchForm/app/Resources/views/base.html.twig");
    }
}
