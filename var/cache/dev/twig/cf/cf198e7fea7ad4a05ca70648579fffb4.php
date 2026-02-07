<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* article/list.html.twig */
class __TwigTemplate_0d8a3561656cd7f6bb09280fb0a10df3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin – Articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    ";
        // line 8
        yield "    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Gestion des articles</h1>
        <p class=\"lead mt-3\">
            Consulte, modifie ou supprime les articles publiés sur OnlyBangers.
        </p>
    </section>

    <div class=\"container\">

        ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "            <div class=\"alert alert-info text-center\">
                Aucun article pour le moment.
            </div>
        ";
        } else {
            // line 22
            yield "
            <div class=\"table-responsive shadow-sm rounded\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Date</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 36
                yield "                            <tr>
                                <td class=\"fw-bold\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>

                                <td>
                                    ";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 43
                    yield "                                        <span class=\"text-muted\">—</span>
                                    ";
                }
                // line 45
                yield "                                </td>

                                <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 47), "d/m/Y H:i"), "html", null, true);
                yield "</td>

                                <td class=\"text-end\">

                                    <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_articles_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\"
                                       class=\"btn btn-sm btn-warning\">
                                        Éditer
                                    </a>

                                    <form method=\"post\"
                                          action=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_articles_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?');\">

                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 62))), "html", null, true);
                yield "\">

                                        <button class=\"btn btn-sm btn-danger\">
                                            Supprimer
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                    </tbody>
                </table>
            </div>

        ";
        }
        // line 77
        yield "
        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_articles_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                ➕ Créer un nouvel article
            </a>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  217 => 79,  213 => 77,  206 => 72,  190 => 62,  182 => 57,  173 => 51,  166 => 47,  162 => 45,  158 => 43,  152 => 41,  150 => 40,  144 => 37,  141 => 36,  137 => 35,  122 => 22,  116 => 18,  114 => 17,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin – Articles{% endblock %}

{% block body %}

    {# 🔥 Hero Section #}
    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Gestion des articles</h1>
        <p class=\"lead mt-3\">
            Consulte, modifie ou supprime les articles publiés sur OnlyBangers.
        </p>
    </section>

    <div class=\"container\">

        {% if articles is empty %}
            <div class=\"alert alert-info text-center\">
                Aucun article pour le moment.
            </div>
        {% else %}

            <div class=\"table-responsive shadow-sm rounded\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Date</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for article in articles %}
                            <tr>
                                <td class=\"fw-bold\">{{ article.title }}</td>

                                <td>
                                    {% if article.author %}
                                        {{ article.author.username }}
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>

                                <td>{{ article.createdAt|date('d/m/Y H:i') }}</td>

                                <td class=\"text-end\">

                                    <a href=\"{{ path('admin_articles_edit', {id: article.id}) }}\"
                                       class=\"btn btn-sm btn-warning\">
                                        Éditer
                                    </a>

                                    <form method=\"post\"
                                          action=\"{{ path('admin_articles_delete', {id: article.id}) }}\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?');\">

                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('delete' ~ article.id) }}\">

                                        <button class=\"btn btn-sm btn-danger\">
                                            Supprimer
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

        {% endif %}

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('admin_articles_new') }}\" class=\"btn btn-primary btn-lg\">
                ➕ Créer un nouvel article
            </a>
        </div>

    </div>

{% endblock %}
", "article/list.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/article/list.html.twig");
    }
}
