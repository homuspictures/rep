<?php

/* auth/register.html.twig */
class __TwigTemplate_ca31d5c53b7b17480f91944fd8c42e7f25e1ebe5b98285d153102557c0e8b3cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Register</div>
          <div class=\"panel-body\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>
            

            <div class=\"form-group\">
                <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-btn fa-user\"></i> Register
                    </button>
                </div>
            </div>
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  98 => 38,  90 => 33,  81 => 27,  72 => 21,  63 => 15,  57 => 12,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Register</div>
          <div class=\"panel-body\">
            {{ form_start(form) }}
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                  {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
              </div>
            </div>
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                {{ form_row(form.role, {'attr': {'class': 'form-control'}}) }}
              </div>
            </div>
            

            <div class=\"form-group\">
                <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-btn fa-user\"></i> Register
                    </button>
                </div>
            </div>
            {{ form_end(form) }}
          </div>
        </div>
    </div>
  </div>
</div>
{% endblock %}", "auth/register.html.twig", "/home/homus/authorise-master/app/Resources/views/auth/register.html.twig");
    }
}
