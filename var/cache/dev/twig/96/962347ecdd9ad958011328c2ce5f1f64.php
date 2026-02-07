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

/* partials/footer.html.twig */
class __TwigTemplate_d4a6624ed8ecef7ff65affd5a9f1b819 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        yield "<footer class=\"mt-5 py-4 bg-dark text-center text-secondary\">

    <h5 class=\"fw-bold text-white mb-3\">OnlyBangers</h5>

    <p class=\"mb-2\">
        Les classiques du rap US, les nouveautés et les analyses qui font vibrer la culture.
    </p>

    <div class=\"mb-3\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"text-secondary text-decoration-none mx-2\">
            Articles
        </a>
        <span class=\"text-secondary\">•</span>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-secondary text-decoration-none mx-2\">
            Connexion
        </a>
        <span class=\"text-secondary\">•</span>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-secondary text-decoration-none mx-2\">
            Inscription
        </a>
    </div>

    <p class=\"small text-muted mb-0\">
        © ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " OnlyBangers — Tous droits réservés.
    </p>

</footer>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  82 => 24,  73 => 18,  66 => 14,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"mt-5 py-4 bg-dark text-center text-secondary\">

    <h5 class=\"fw-bold text-white mb-3\">OnlyBangers</h5>

    <p class=\"mb-2\">
        Les classiques du rap US, les nouveautés et les analyses qui font vibrer la culture.
    </p>

    <div class=\"mb-3\">
        <a href=\"{{ path('articles_view') }}\" class=\"text-secondary text-decoration-none mx-2\">
            Articles
        </a>
        <span class=\"text-secondary\">•</span>
        <a href=\"{{ path('app_login') }}\" class=\"text-secondary text-decoration-none mx-2\">
            Connexion
        </a>
        <span class=\"text-secondary\">•</span>
        <a href=\"{{ path('app_register') }}\" class=\"text-secondary text-decoration-none mx-2\">
            Inscription
        </a>
    </div>

    <p class=\"small text-muted mb-0\">
        © {{ \"now\"|date(\"Y\") }} OnlyBangers — Tous droits réservés.
    </p>

</footer>

", "partials/footer.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/partials/footer.html.twig");
    }
}
