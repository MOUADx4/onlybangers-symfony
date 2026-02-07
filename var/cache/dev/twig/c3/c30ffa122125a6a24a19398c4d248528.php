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

/* admin/comment/list.html.twig */
class __TwigTemplate_1176e288fbf7a0cc042aaac57b00cc3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/comment/list.html.twig"));

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

        yield "Admin – Commentaires";
        
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
        <h1 class=\"display-4 fw-bold\">Modération des commentaires</h1>
        <p class=\"lead mt-3\">
            Consulte et supprime les commentaires publiés sur OnlyBangers.
        </p>
    </section>

    <div class=\"container\">

        ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "            <div class=\"alert alert-info text-center\">
                Aucun commentaire pour le moment.
            </div>
        ";
        } else {
            // line 22
            yield "
            <div class=\"table-responsive shadow-sm rounded\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Article</th>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th>Date</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 37
                yield "                            <tr>
                                <td class=\"fw-bold\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
                yield "</td>

                                <td>
                                    ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 44
                    yield "                                        <span class=\"text-muted\">—</span>
                                    ";
                }
                // line 46
                yield "                                </td>

                                <td style=\"max-width: 300px;\">
                                    ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 49), "html", null, true);
                yield "
                                </td>

                                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 52), "d/m/Y H:i"), "html", null, true);
                yield "</td>

                                <td class=\"text-end\">

                                    <form method=\"post\"
                                          action=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\">

                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 62))), "html", null, true);
                yield "\">

                                        <button class=\"btn btn-sm btn-outline-secondary\">
                                            Supprimer
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                    </tbody>
                </table>
            </div>

        ";
        }
        // line 77
        yield "
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
        return "admin/comment/list.html.twig";
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
        return array (  213 => 77,  206 => 72,  190 => 62,  182 => 57,  174 => 52,  168 => 49,  163 => 46,  159 => 44,  153 => 42,  151 => 41,  145 => 38,  142 => 37,  138 => 36,  122 => 22,  116 => 18,  114 => 17,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin – Commentaires{% endblock %}

{% block body %}

    {# 🔥 Hero Section #}
    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Modération des commentaires</h1>
        <p class=\"lead mt-3\">
            Consulte et supprime les commentaires publiés sur OnlyBangers.
        </p>
    </section>

    <div class=\"container\">

        {% if comments is empty %}
            <div class=\"alert alert-info text-center\">
                Aucun commentaire pour le moment.
            </div>
        {% else %}

            <div class=\"table-responsive shadow-sm rounded\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>Article</th>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th>Date</th>
                            <th class=\"text-end\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for comment in comments %}
                            <tr>
                                <td class=\"fw-bold\">{{ comment.article.title }}</td>

                                <td>
                                    {% if comment.author %}
                                        {{ comment.author.username }}
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>

                                <td style=\"max-width: 300px;\">
                                    {{ comment.content }}
                                </td>

                                <td>{{ comment.createdAt|date('d/m/Y H:i') }}</td>

                                <td class=\"text-end\">

                                    <form method=\"post\"
                                          action=\"{{ path('admin_comments_delete', {id: comment.id}) }}\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\">

                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('delete' ~ comment.id) }}\">

                                        <button class=\"btn btn-sm btn-outline-secondary\">
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

    </div>

{% endblock %}
", "admin/comment/list.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/admin/comment/list.html.twig");
    }
}
