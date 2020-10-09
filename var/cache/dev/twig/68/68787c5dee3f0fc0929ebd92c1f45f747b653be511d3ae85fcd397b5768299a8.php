<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Home/index.html.twig */
class __TwigTemplate_c3d92d8e8a9baa6a3d8cbbf9ee5034dbb17db72b9475d225dcf817ce35055e5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <h1> API REST DEMO HOUSES</h1>
  <p> Esta es una API para gestionar casas (Houses) con \"name\" y \"adress\" como atributos</p>
  <p> Todas las respuestas están en formato JSON</p>
  <h3> GET</h3>
  <p> 128.0.0.8000/api/houses </p>
  <p class=\"text-secondary\"> Obtienes todas las casas</p>
  <p> 128.0.0.8000/api/house/{id} </p>
  <p class=\"text-secondary\"> Obtienes casa con id especifico en caso que exista</p>
  <h3> POST</h3>
  <p> 128.0.0.8000/api/houses </p>
  <p class=\"text-secondary\"> Crea una casa especificando en el body {\"name\": \"XXX\", \"adress\": \"YYY\"}</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends(\"base.html.twig\") %}


{% block body %}
  <h1> API REST DEMO HOUSES</h1>
  <p> Esta es una API para gestionar casas (Houses) con \"name\" y \"adress\" como atributos</p>
  <p> Todas las respuestas están en formato JSON</p>
  <h3> GET</h3>
  <p> 128.0.0.8000/api/houses </p>
  <p class=\"text-secondary\"> Obtienes todas las casas</p>
  <p> 128.0.0.8000/api/house/{id} </p>
  <p class=\"text-secondary\"> Obtienes casa con id especifico en caso que exista</p>
  <h3> POST</h3>
  <p> 128.0.0.8000/api/houses </p>
  <p class=\"text-secondary\"> Crea una casa especificando en el body {\"name\": \"XXX\", \"adress\": \"YYY\"}</p>
{% endblock %}
", "Home/index.html.twig", "/home/raimon/Documentos/ProjectesSymfony/floorfy/FloorfyDemo/templates/Home/index.html.twig");
    }
}
